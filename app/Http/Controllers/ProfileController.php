<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Review;
use Validator, PDF, User, Auth;

class ProfileController extends Controller
{
    public function index(){
        $users = Profile::all();
        return view('home', compact('users'));
    }

    public function create()
    {
       // dd("ddd");
        return view('create-profile');
    }

    public function profileValidate($attributes)
    {
       $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:profiles,email',
            'web_address' => 'required',
            'cover_letter' => 'required',
            'attachment' => 'required',
            'is_working' => 'required',
            'captcha' => 'required|captcha'
        ];

        $validator = Validator::make($attributes, $rules);

        return $validator;

    }

    public function store(Request $request){
        try {
                $attributes = $request->all();
                $validator = $this->profileValidate($attributes);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }
                
                if($request->hasFile('attachment')){
                    $file = $request->file('attachment');
                    $file_name = $file->getClientOriginalName();
                    $attributes['attachment'] = $file->storeAs('attacments', $file_name, 'public');
                }
                $attributes['ip'] = $request->ip();
                $attributes['location'] = '';
                $result = Profile::create($attributes);

                if($result){
                    return redirect()->back()->with('message', 'Profile has been submitted.');    
                }	
		}
		catch(Exception $e){
			return response()->json(['error' => $e->getMessage()], 500);
		}
    }

    public function show($id){
        $user = Profile::with([
            'comments',
            'parentComments.owner',
            'parentComments.allRepliesWithOwner'
        ]);
        $rating = $this->getRating($id);
        
        return view('view-profile', compact('rating'))->withUser(
            $user->findOrFail($id)
        );
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function downloadPdf(){
        $users = Profile::all();
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('profile',  compact('users'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf->save(public_path('uploads/profile.pdf'));
        return view('profile-pdf');
    }

    public function storeRating(Request $request){
        try {
            $user = Auth::user();
            $isAlreadyReviewed = Review::where('user_id', $user->id)->where('profile_id', $request->get('profile_id'))->count();
            
            if($isAlreadyReviewed > 0){
                return response()->json(['status'=> 'fail', 'message'=> 'Profile is already reviewed.']);
            }
            $review = new Review();
            $review->rating = $request->get('rating');
            $review->user_id = $user->id;
            $review->profile_id =  $request->get('profile_id');
            $review->save();
            return response()->json(['status'=> 'success', 'message'=> 'Review has been submitted successfully.']);  
        }
		catch(Exception $e){
			return response()->json(['error' => $e->getMessage()], 500);
		}
    }

    public function getRating($profile_id){
        $ratingAvg = Review::where('profile_id', $profile_id)->avg('rating');
        return number_format($ratingAvg, 1);
    }

    public function getProfileWithReview(){
        $users = Profile::join('reviews', 'profiles.id', '=', 'reviews.profile_id')
        ->select('profiles.*')
        ->where('reviews.rating','=', 5)->groupBy('id')->get();
        return view('home', compact('users'));
    }
}

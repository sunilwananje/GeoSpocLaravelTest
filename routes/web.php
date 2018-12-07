<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('create-profile', 'ProfileController@create')->name('create.profile');
Route::post('store', 'ProfileController@store')->name('store.profile');
Route::get('refresh/captcha', 'ProfileController@refreshCaptcha')->name('refresh.captcha');




Route::group(['middleware'=>'auth.check'], function()
{
    Route::get('/home', 'ProfileController@index')->name('home');
    Route::get('/download', 'ProfileController@downloadPdf')->name('download.pdf');
    Route::get('view/profile/{id}', 'ProfileController@show')->name('view.profile');
    Route::post('/comment/store', 'CommentController@store')->name('comment.add');
    Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
    Route::post('/rating/store', 'ProfileController@storeRating')->name('rating.add');
    Route::get('/reviewed-profile', 'ProfileController@getProfileWithReview')->name('reviewed.profile');
});


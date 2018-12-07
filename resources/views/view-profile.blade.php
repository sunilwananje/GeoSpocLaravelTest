@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                        {{ $user->name }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                        {{ $user->email }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web_address" class="col-md-4 col-form-label text-md-right">{{ __('Web Address') }}</label>

                        <div class="col-md-6">
                        {{ $user->web_address }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cover_letter" class="col-md-4 col-form-label text-md-right">{{ __('Cover Letter') }}</label>

                        <div class="col-md-6">
                        {{ $user->cover_letter }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="attachment" class="col-md-4 col-form-label text-md-right">{{ __('Attachment') }}</label>

                        <div class="col-md-6">
                        {{ $user->attachment }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_working" class="col-md-4 col-form-label text-md-right">{{ __('Do you like working?') }}</label>

                        <div class="col-md-6">
                            {{ $user->is_working }}
                        </div>
                    </div> 
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7">{{ $rating }} <small>/ 5</small></h2>
                        @if(round($rating) == 5)
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        @elseif(round($rating) == 4)
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        @elseif(round($rating) == 3)
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        @elseif(round($rating) == 2)
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        @elseif(round($rating) == 1)
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="fa fa-star-o" aria-hidden="true"></span>
                        </button>
                        @endif

                    </div>
                    <hr />
                    <div id="addRating">
                        <h4>Add Rating</h4>
                        
                        <fieldset class="rating">
                            <input type="radio" class="star" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" class="star" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" class="star" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" class="star" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" class="star" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" class="star" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" class="star" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" class="star" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" class="star" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" class="star" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset><br>
                        <hr />
                    </div>
                
                    <h4>Comments({{$count = $user->comments->count()}})</h4>
                    @if($count && $user->relationLoaded('parentComments'))
                        @include('comments', ['comments' => $user->parentComments, 'profile_id' => $user->id])
                    @endif
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment" class="form-control" required/>
                            <input type="hidden" name="profile_id" value="{{ $user->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.reply').click(function(){
        var id = $(this).attr('id');
        //alert(id);
        $('#form_'+id).css('display', 'block');
        $(this).hide();
    });

    $('.star').click(function(){
        var rating = $(this).val();
        //alert(rating);
        $.ajax({
            type:'POST',
            data:{"_token":"{{ csrf_token() }}", rating:rating, profile_id:"{{ $user->id }}"},
            url:'{{route("rating.add") }}',
            success:function(data){
                //alert(data.status);
                if(data.status == 'success'){
                    //$('#addRating').hide();
                    alert('Review submited')
                }else{
                    alert('Already reviewed.')
                    //$('#addRating').show();
                }
            }
        });
    });
    
})

</script>
@endsection

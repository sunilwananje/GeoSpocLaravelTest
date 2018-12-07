@foreach($comments as $k => $comment)
    <div class="display-comment">
        <strong>{{ $comment->owner->name }}</strong>
        <p>{{ $comment->comment }} &nbsp;&nbsp;
            <a href="javascript:;" class="reply" id="{{$comment->id}}">Reply</a>
        </p>
        <form method="post" action="{{ route('reply.add') }}" id="form_{{$comment->id}}" style="display:none">
            @csrf
            <div class="form-group">
                <input type="text" name="comment" class="form-control" required/>
                <input type="hidden" name="profile_id" value="{{ $profile_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Reply" />
            </div>
        </form>
        @if($comment->relationLoaded('allRepliesWithOwner'))
            @include('comments', ['comments' => $comment->allRepliesWithOwner])
        @endif
        
    </div>
@endforeach

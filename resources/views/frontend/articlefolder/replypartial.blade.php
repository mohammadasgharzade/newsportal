
@foreach($comments as $reply)

        <div class="border-bottom pb-3 mb-3 reply-item position-relative" data-id="5fbf764d3a111b04e4c22cbe">
        <span class="oi oi-caret-top position-absolute"></span>
        <div class="d-flex flex-column p-3">
            <div class="d-flex justify-content-between">
                <span class="name">{{$reply->name}} <span> در پاسخ </span>{{$comment->name}}</span>
                <span class="date">{{$reply->created_at}}</span>
            </div>
            <span class="commentText">
                {{$reply->text}}
            </span>
            <div class="reply-like d-flex justify-content-between align-items-center">
                <div class="reply-btn">
                    <span class="oi oi-share ml-1 mt-1"></span>
                    <button type="button" class="open-reply-modal btn comment_id" data-id="{{ $reply->id }}" data-toggle="modal" data-target="#reply-modal" >
                    پاسخ
                    </button>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="like-box">
                        <span class="ml-1 like-count">۰</span><span class="oi oi-heart" data-id="5fbf764d3a111b04e4c22cbe" data-count="0"></span>
                    </div>
                </div>

            </div>
            @include('frontend.articlefolder.replypartial', ['comments' => $reply->replies ,'comment' => $reply])
           
        </div>
    </div>
@endforeach

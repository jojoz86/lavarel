<?php

namespace App\Observers;

use App\models\Comment;
use App\Notifications\CommentNotify;
use App\User;

class CommentObserver
{

    public function created(Comment $comment)
    {
//        具体评论数据
//        dd($comment);
//        发送通知
        if($comment->article->user->id != auth()->id()){
            $comment->article->user->notify( new CommentNotify( $comment ) );
        }

    }

    /**
     * Handle the comment "updated" event.
     *
     * @param  \App\models\Comment  $comment
     * @return void
     */
    public function updated(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "deleted" event.
     *
     * @param  \App\models\Comment  $comment
     * @return void
     */
    public function deleted(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "restored" event.
     *
     * @param  \App\models\Comment  $comment
     * @return void
     */
    public function restored(Comment $comment)
    {
        //
    }

    /**
     * Handle the comment "force deleted" event.
     *
     * @param  \App\models\Comment  $comment
     * @return void
     */
    public function forceDeleted(Comment $comment)
    {
        //
    }
}

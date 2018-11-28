<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CommentNotify extends Notification
{
    use Queueable;
    protected $comment;

    public function __construct($comment)
    {
        $this->comment=$comment;
    }


    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable)
    {
        return [
//            这里 return数据会记录到数据表 notifications 中data 字段中
           'user_id'=>$this->comment->user->id,//谁发表的评论
            'user_icon'=>$this->comment->user->icon,//发表评论的用户头像
            'user_name'=>$this->comment->user->name,
            'article_id'=>$this->comment->article->id,
            'article_title'=>$this->comment->article->title,
        ];
    }
}

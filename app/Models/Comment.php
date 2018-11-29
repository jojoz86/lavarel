<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Comment extends Model
{
    use LogsActivity;
    protected $fillable = ['content','article_id'];
    //如果需要记录所有$fillable设置的填充属性，可以使用
    protected static $logFillable = true;
    protected static $recordEvents = ['created','updated'];
    //自定义日志名称
    protected static $logName = 'comment';


    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
    //关联用户
    public function user(){
        return $this->belongsTo(User::class);
    }

//    定义  zan 多态关联
    public function zan(){
//        第一个参数关联模型，第二个参数跟数据迁移，zan_id  zan_type
        return $this->morphMany(Zan::class,'zan');
    }

//    评论关联通知
     public function article(){
        return $this->belongsTo(Article::class);
     }



//    定义  collect 多态关联
    public function collect(){
//        第一个参数关联模型，第二参数跟数据迁移， collect_id  collect_type
        return $this->morphMany(Collect::class,'collect');
    }
}

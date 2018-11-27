<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
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

//    定义  collect 多态关联
    public function collect(){
//        第一个参数关联模型，第二参数跟数据迁移， collect_id  collect_type
        return $this->morphMany(Collect::class,'collect');
    }
}

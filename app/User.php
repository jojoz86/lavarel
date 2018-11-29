<?php

namespace App;

use App\models\Attachment;
use App\models\Collect;
use App\models\Zan;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified_at','icon'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //重写 数据库通知中 获取所有通知的 notifications 方法
    public function notifications()
    {
        return $this->morphMany(DatabaseNotification::class,'notifiable')->orderBy('read_at','asc')->orderBy('created_at','desc');
    }


    public function getIconAttribute( $key )
    {
        return $key?:asset('org/images/user.jpg');
    }

//    关联附件
    public function attachment(){
        return $this->hasMany(Attachment::class);
    }

//    获取指定用户粉丝
    public function fans(){
//            user_id 与 following_id 绑定在followers数据表里
        return $this->belongsToMany(User::class,'followers','user_id','following_id');
    }

//    获取关注的人
    public function following(){
        return $this->belongsToMany(User::class,'followers','following_id','user_id');
    }

//     用户关联 zan
    public function zan(){
        return $this->hasMany(Zan::class);
    }


//    用户关联 collect
    public function collects(){
        return $this->hasMany(Collect::class);
    }

}

<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    protected $fillable = ['user_id'];

    public function user(){
//        ******************
        return $this->belongsTo(User::class);
    }
}

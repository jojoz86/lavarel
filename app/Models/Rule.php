<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['name'];

    //关联关键词
    public function keyword(){
//        hasmany是rule一对多keyword
        return $this->hasMany(Keyword::class);
    }
}

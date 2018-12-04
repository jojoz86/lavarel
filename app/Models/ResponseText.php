<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ResponseText extends Model
{
    protected $fillable = ['content','rule_id'];
    //关联规则
    public function rule(){
//        belongsTo是responsetext一对多rule
        return $this->belongsTo(Rule::class);
    }
}

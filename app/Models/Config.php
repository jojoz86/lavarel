<?php


namespace APP\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    protected $fillable = ['name','data'];
    //应该被转换成原生类型的属性
    //cates 属性手册: Eloquent ORM--修改器
    protected $casts = [
        'data'=>'array',
    ];
}

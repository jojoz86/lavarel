<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title','icon'
    ];
    
//    关联文章
     public function article(){
//         //Models/Article.php有定义栏目关联,定义栏目关联
         return $this->hasMany(Article::class);
     }
}

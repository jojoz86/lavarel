<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable =[
        'name','path'
    ];
}

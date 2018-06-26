<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Templates extends Model
{
    protected $fillable = [
        'title','slug','status','featured_image','template_type'
    ];    

}

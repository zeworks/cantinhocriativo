<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogImages;
use App\Images;

class Blog extends Model
{
    protected $fillable = [
        'title','slug','status','description','featured_image'
    ]; 

    public function Images(){
        return $this->hasMany('App\BlogImages','blog_id');
    }
}

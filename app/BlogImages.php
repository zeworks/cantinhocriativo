<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    protected $fillable = ['blog_id','image_id'];
    
    public function Images(){
        return $this->hasOne('Images');
    }
}

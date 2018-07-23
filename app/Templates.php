<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\TemplatesBlocks;

class Templates extends Model
{
    protected $fillable = [
        'title','slug','status','featured_image','template_id'
    ];    

    public function Blocks(){
        return $this->hasMany('App\TemplatesBlocks','template_id','id');
    }

}

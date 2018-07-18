<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;

class ProductImages extends Model
{
    protected $fillable = ['product_id','image_id'];
    
    public function Images(){
        return $this->belongsTo('App\Images', 'image_id', 'id');
    }
}

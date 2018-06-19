<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImages;

class Products extends Model
{
    protected $fillable = [
        'title','slug','description','details','status','new_product','featured_image','reference','weight_product','size_product','colors'
    ];
    
    public function Images(){
        return $this->hasMany('ProductImages')->width('Images');
    }
}

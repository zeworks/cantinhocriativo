<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    protected $fillable = [
        'title','summary','description','image','template_id'
    ];  
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlockBlocs;

class Blocks extends Model
{
    protected $fillable = [
        'title','summary','description','image','template_id'
    ];  

    public function Images(){
        return $this->hasMany('App\BlockBlocs','bloc_id','id');
    }
}

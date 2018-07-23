<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blocks;

class TemplatesBlocks extends Model
{
    protected $fillable = ['template_id','block_id'];

    public function Blocks(){
        return $this->belongsTo('App\Blocks','block_id','id');
    }
}

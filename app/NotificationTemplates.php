<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationTemplates extends Model
{
    protected $fillable = [
        'title','description','observations'
    ];
}

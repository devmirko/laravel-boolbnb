<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function houses() { // il belongs to sta dalla parte dell'1 della relazione e il nome deve essere singolare
        return $this->belongsTo('App\Models\House');
    }

}

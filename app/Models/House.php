<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function user() { // il belongs to sta dalla parte dell'1 della relazione e il nome deve essere singolare
        return $this->belongsTo('App\Models\User');
    }

    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }

    // creiamo una relazione molti a molti dalla tabella house alla tabella services
    public function services() {
        return $this->belongsToMany('App\Models\Service');
    }
}

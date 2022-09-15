<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // creiamo una relazione molti a molti dalla tabella services alla tabella house
    public function houses() {
        return $this->belongsToMany('App\Models\House');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    public function house() {
        return $this->belongsToMany('App\Models\House');
    }
}

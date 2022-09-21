<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'user_id',
        'visible',
        'service_id',
        'message_id',
        'house_id',
        'name_house',
        'rooms',
        'beds',
        'bathrooms',
        'mq',
        'latitude',
        'longitude',
        'address',
        'cover_photo',
        'type',
        'sponsorships_id'
    ];

    public function user() { // il belongs to sta dalla parte dell'1 della relazione e il nome deve essere singolare
        return $this->belongsTo('App\Models\User');
    }

    public function messages(){
        return $this->hasMany('App\Models\Message');
    }

    public function photos() {
        return $this->hasMany('App\Models\Photo');
    }

    // creiamo una relazione molti a molti dalla tabella house alla tabella services
    public function services() {
        return $this->belongsToMany('App\Models\Service');
    }

    public function views() {
        return $this->hasMany('App\Models\View');
    }

    public function sponsorships() {
        return $this->belongsToMany('App\Models\Sponsorship');
    }
}



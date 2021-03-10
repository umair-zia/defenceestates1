<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{

    protected $images = [
        'images' => 'array'
    ];

    protected $casts = [
        'features' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function Comments(){
        return $this->hasMany('App\Comments');
    }
}

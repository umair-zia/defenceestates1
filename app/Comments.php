<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function ad(){
        return $this->belongsTo('App\Ad');
    }
}

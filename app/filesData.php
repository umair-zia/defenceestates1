<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filesData extends Model
{
    public function Files(){
        return $this->belongsTo('App\Files');
    }
}

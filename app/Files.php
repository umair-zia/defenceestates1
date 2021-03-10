<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    public function filesData(){
        return $this->hasMany('App\filesData');
    }
}

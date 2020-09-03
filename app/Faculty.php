<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    public function logininfo()
    {
        return $this->hasMany('App\logininfo');
    }
    public function batch()
    {
        return $this->hasMany('App\Batch');
    }
}
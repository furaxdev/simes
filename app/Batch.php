<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function alumni()
    {
        return $this->hasMany('App\alumni');
    }
    public function logininfo()
    {
        return $this->hasMany('App\logininfo');
    }
    public function committee()
    {
        return $this->hasOne('App\Committee');
    }
    public function faculty()
    {
        return $this->hasMany('App\Faculty');
    }
}
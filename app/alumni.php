<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
}
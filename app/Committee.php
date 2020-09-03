<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
}
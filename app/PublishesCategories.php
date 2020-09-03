<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishesCategories extends Model
{

    protected $fillable = ['name'];

    public function publishes()
    {
        return $this->hasMany('App\Publishes',);
    }
}
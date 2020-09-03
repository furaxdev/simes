<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishes extends Model
{
    protected $fillable = ['title', 'thumbnail', 'file', 'publishes_categories_id'];

    public function publishescategories()
    {
        return $this->belongsTo('App\PublishesCategories');
    }
}
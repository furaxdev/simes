<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'category_id', 'title', 'description', 'published_by', 'content1', 'content2', 'content3', 'content4', 'content5', 'thumbnail', 'image1', 'image2', 'image3', 'image4', 'published_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return  $this->BelongsToMany(Tag::class);
    }

    /**
     * check if post has tags
     *
     * @return bool
     */

    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $tag = request()->query('tag');
        $category = request()->query('category');
        if ($tag) {
            $tags = Tag::where('id', $tag)->first();
            $posts = $tags->posts()
                ->simplePaginate(10);
            $ss = null;
            $tagname = $tags->name;
            $categoryname = null;
        } elseif ($category) {


            $categorys = Category::where('id', $category)->first();
            $posts = $categorys->posts()
                ->simplePaginate(10);
            $ss = null;
            $tagname = null;
            $categoryname = $categorys->name;
        } else {



            $search = request()->query('search');
            if ($search) {
                $posts = Post::where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->simplePaginate(10);
                $ss = $search;
                $tagname = null;
                $categoryname = null;
            } else {
                $posts = Post::simplePaginate(10);
                $ss = null;
                $tagname = null;
                $categoryname = null;
            }
        }

        return view('blog.index')->with('tags', Tag::all())
            ->with('posts', $posts)
            ->with('search', $ss)
            ->with('categories', Category::all())
            ->with('tagname', $tagname)
            ->with('categoryname', $categoryname);
    }
    public function show(Post $post)
    {

        $next = Post::where('id', '>', $post->id)->min('id');
        $prev = Post::where('id', '<', $post->id)->max('id');
        $prev_post = Post::where('id', $prev)->first();
        $next_post = Post::where('id', $next)->first();
        return view('blog.show')->with('post', $post)->with('header', 1)
            ->with('next', $next_post)
            ->with('prev', $prev_post)
            ->with('tags', Tag::all())
            ->with('categories', Category::all());
    }
}
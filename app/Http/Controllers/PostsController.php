<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateBlogPostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $posts = Post::all();
            return view('blog.indexcopy')->with('posts', $posts);
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->get();
            return view('blog.indexcopy')->with('posts', $posts);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogPostRequest $request)
    {


        $image1 = null;
        $image2 = null;
        $image3 = null;
        $image4 = null;

        $thumbnail = $request->thumbnail->store('posts');
        if ($request->image1) {
            $image1 = $request->image1->store('posts');
        }
        if ($request->image2) {
            $image2 = $request->image2->store('posts');
        }
        if ($request->image3) {
            $image3 = $request->image3->store('posts');
        }
        if ($request->image4) {
            $image4 = $request->image4->store('posts');
        }
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3,
            'content4' => $request->content4,
            'content5' => $request->content5,
            'published_at' => $request->published_at,
            'published_by' => $request->published_by,

            'thumbnail' => $thumbnail,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id

        ]);

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

        return redirect(route('posts.index'))->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (Auth::user()->id == $post->user_id) {
            return view('blog.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
        } else {
            return abort('403', 'Access Denied');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBlogPostRequest $request, $id)
    {
        $post = Post::where('id', $id)->first();
        if (Auth::user()->id == $post->user_id) {





            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->thumbnail->store('posts');
            };
            if ($request->hasFile('image1')) {
                $image1 = $request->image1->store('posts');
            };
            if ($request->hasFile('image2')) {
                $image2 = $request->image2->store('posts');
            };
            if ($request->hasFile('image3')) {
                $image3 = $request->image3->store('posts');
            };
            if ($request->hasFile('image4')) {
                $image4 = $request->image4->store('posts');
            };
            if ($request->tags) {
                $post->tags()->sync($request->tags);
            }

            $data = [
                'title' => $request->title,
                'description' => $request->description,
                'content1' => $request->content1,
                'content2' => $request->content2,
                'content3' => $request->content3,
                'content4' => $request->content4,
                'content5' => $request->content5,
                'published_at' => $request->published_at,
                'category_id' => $request->category


            ];
            if (isset($thumbnail)) {
                Storage::delete($post->thumbnail);
                $data['thumbnail'] = $thumbnail;
            }
            if (isset($image1)) {
                Storage::delete($post->image1);
                $data['image1'] = $image1;
            }
            if (isset($image2)) {
                Storage::delete($post->image2);
                $data['image2'] = $image2;
            }
            if (isset($image3)) {
                Storage::delete($post->image3);
                $data['image3'] = $image3;
            }
            if (isset($image4)) {
                Storage::delete($post->image4);
                $data['image4'] = $image4;
            }

            $post->update($data);
            return redirect(route('posts.index'))->with('success', 'Post Updated Successfully');
        } else {
            return abort('403', 'Access Denied');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();

        if (Auth::user()->id == $post->user_id) {
            $post = Post::where('id', $id)->first();
            Storage::delete($post->image);
            $post->delete();

            return redirect()->back()->with('error', 'Post Deleted Successfully!!');
        } elseif (Auth::user()->isAdmin()) {
            $post = Post::where('id', $id)->first();
            Storage::delete($post->image);
            $post->delete();

            return redirect()->back()->with('error', 'Post Deleted Successfully!!');
        } else {
            return abort('403', 'Access Denied');
        }
    }
}
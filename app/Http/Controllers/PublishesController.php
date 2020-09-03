<?php

namespace App\Http\Controllers;

use App\Publishes;
use App\PublishesCategories;
use Illuminate\Http\Request;

class PublishesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = request()->query('category');
        if ($category) {

            $categorys = PublishesCategories::where('id', $category)->first();
            $publishes = $categorys->publishes()
                ->simplePaginate(10);
            $ss = null;
            $categoryname = $categorys->name;
        } else {

            $search = request()->query('search');
            if ($search) {
                $publishes = Publishes::where('title', 'LIKE', "%{$search}%")
                    ->simplePaginate(10);
                $ss = $search;
                $categoryname = null;
            } else {
                $publishes = Publishes::simplePaginate(10);
                $ss = null;
                $categoryname = null;
            }
        }


        return view('publishes.index')
            ->with('categoryname', $categoryname)
            ->with('search', $ss)
            ->with('publishes', $publishes)
            ->with('publishescategories', PublishesCategories::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publishes.create')->with('publishescategories', PublishesCategories::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumbnail = $request->thumbnail->store('publishes');

        $custom_name = md5(time()) . $request->file->getClientOriginalName();
        $file = $request->file->storeAs('publishes', $custom_name);
        // dd($custom_name);

        // $file = $request->file->store('publishes');

        $publishes = Publishes::create([
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'file' => $file,
            'publishes_categories_id' => $request->publishes_categories_id,
        ]);
        return redirect()->route('publishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publishes  $publishes
     * @return \Illuminate\Http\Response
     */
    public function show(Publishes $publishes)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publishes  $publishes
     * @return \Illuminate\Http\Response
     */
    public function edit(Publishes $publish)
    {
        return view('publishes.create')->with('publishescategories', PublishesCategories::all())->with('publish', $publish);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publishes  $publishes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publishes $publishes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publishes  $publishes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publishes $publishes)
    {
        //
    }
}
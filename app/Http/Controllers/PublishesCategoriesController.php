<?php

namespace App\Http\Controllers;

use App\PublishesCategories;
use Illuminate\Http\Request;

class PublishesCategoriesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('publishescategories.index')->with('categories', PublishesCategories::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publishescategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PublishesCategories::create([
            'name' => $request->name
        ]);
        return redirect()->route('publishescategories.index')->with('success', "publishesCategories Created Successfully!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PublishesCategories  $publishescategory
     * @return \Illuminate\Http\Response
     */
    public function show(PublishesCategories $publishescategory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PublishesCategories  $publishescategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PublishesCategories $publishescategory)
    {

        return view('publishescategories.create')->with('publishesCategories', $publishescategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublishesCategories  $publishescategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublishesCategories $publishescategory)
    {
        $publishescategory->update([

            'name' => $request->name
        ]);
        return redirect()->route('publishescategories.index')->with('success', "publishesCategories Updated Successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublishesCategories  $publishescategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublishesCategories $publishescategory)
    {
        $publishescategory->delete();

        return redirect()->route('publishescategories.index')->with('error', "Category Deleted Successfully!!");
    }
}
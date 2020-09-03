<?php

namespace App\Http\Controllers;

use App\Batch;
use App\alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumni.index')->with('alumnis', alumni::all())->with('batches', Batch::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumni $alumni)
    {
        //
    }
}
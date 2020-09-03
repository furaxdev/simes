<?php

namespace App\Http\Controllers;

use App\Semester;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        return view('subjects.index')->with('subjects', Subject::all())->with('semesters', Semester::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create')->with('semesters', Semester::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required',
            'semester_id' => 'required'
        ]);

        $subject = new Subject();
        $subject->name = $request->input('name');
        $subject->semester_id = $request->input('semester_id');
        $subject->drivelink = $request->input('drivelink');
        $subject->youtubelink = $request->input('youtubelink');

        $subject->save();
        return redirect(route('subject.index'))->with('success', 'Subject created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        $subjecte = Subject::where('id', $subject->id)->first();
        return view('subjects.create')->with('subject', $subjecte)->with('semesters', Semester::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $subjecte = Subject::where('id', $subject->id)->first();

        $subject->name = $request->input('name');
        $subject->semester_id = $request->input('semester_id');
        $subject->drivelink = $request->input('drivelink');
        $subject->youtubelink = $request->input('youtubelink');
        $subject->update();
        return redirect(route('subject.index'))->with('success', 'Subject edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->back();
    }
}
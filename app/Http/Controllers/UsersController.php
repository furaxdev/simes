<?php

namespace App\Http\Controllers;

use App\logininfo;
use Illuminate\Support\Facades\Auth;
use App\Batch;
use App\User;
use App\alumni;
use App\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')->with('batches', Batch::all())->with('faculties',Faculty::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'batch_id' => 'required',
            'faculty_id' => 'required',
            'rollno' => 'required',
            'DateOfBirth' => 'required',
            'username' => 'required',
            'Password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->Password = Hash::make($request->input('Password'));

        $user->save();
        $id = $user->id;


        $logininfo = new logininfo;

        $logininfo->user_id = $id;

        $logininfo->name = $request->input('name');
        $logininfo->batch_id = $request->input('batch_id');
        $logininfo->faculty_id = $request->input('faculty_id');
        $logininfo->rollno = $request->input('rollno');
        $logininfo->DateOfBirth = $request->input('DateOfBirth');
        $logininfo->username = $request->input('username');
        $logininfo->Password = $request->input('Password');

        $logininfo->save();


        $alumni = new alumni();

        $alumni->user_id = $id;
        $alumni->username = $request->input('username');
        $alumni->batch_id = $request->input('batch_id');

        $alumni->name = $request->input('name');

        $alumni->save();

        return redirect()->route('users.index')->with('success', 'User created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\logininfo  $logininfo
     * @return \Illuminate\Http\Response
     */
    public function show(logininfo $logininfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\logininfo  $logininfo`
     * @return \Illuminate\Http\Response
     */
    public function edit(logininfo $logininfo)
    {
        $alumni = alumni::all();
        $useralumni = $alumni->where('user_id', Auth::user()->id)->first();
        return view('users.update')->with('data', $useralumni);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\logininfo  $logininfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumni = alumni::all();
        $useralumni = $alumni->where('user_id', Auth::user()->id)->first();


        $useralumni->email = $request->email;

        $useralumni->phonenumber = $request->phonenumber;
        $useralumni->about = $request->about;
        $useralumni->academicdetails = $request->academicdetails;
        $useralumni->facebooklink = $request->facebooklink;
        $useralumni->instagramlink = $request->instagramlink;
        $useralumni->linkedinlink = $request->linkedinlink;
        $useralumni->save();
        return redirect()->route('home')->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\logininfo  $logininfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {


        $userdata=User::where('id', $user->id);
        $logininfodata=logininfo::where('user_id', $user->id);
        $alumni=alumni::where('user_id', $user->id);

       $logininfodata->delete();
       $alumni->delete();
        $userdata->delete();

        return redirect()->back();
    }
}
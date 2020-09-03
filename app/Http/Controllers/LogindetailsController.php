<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logininfo;

class LogindetailsController extends Controller
{
    protected function getdetails(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'Batch' => 'required',
            'faculty' => 'required',
            'rollno' => 'required',
            'DateOfBirth' => 'required',

        ]);

        $batch_id = $request->input('Batch');
        $faculty_id = $request->input('faculty');
        $name = $request->input('name');
        $rn = $request->input('rollno');
        $dob = $request->input('DateOfBirth');


        $user = logininfo::where('batch_id', $batch_id)->where('rollno', $rn)->where('faculty_id',$faculty_id)->latest()->first();





        if ((!$user)==null) {
            if ($dob == $user->DateOfBirth & $name == $user->name) {
                return view('auth.yourlogindetails', [
                    'username' => $user->username,
                    'password' => $user->Password
                ]);
            } else {
                return redirect('/getlogindetails')->with('error', 'Credentials donot match');
            }
        } elseif (($user==null)) {


            return redirect('/getlogindetails')->with('error', 'Invalid academic details !! Try again!!');
        }
    }
}
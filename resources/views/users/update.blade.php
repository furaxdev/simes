@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="container">

    <div class="card">
        <div class="card-header">Update your Details</div>
        <div class="card-body">
            <form action="{{route('users.update', ['id' ,Auth::user()->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email">Add your Email(Optional)</label>
                    <input type="email" id="email" name="email" class="form-control" value={{$data['email']}}>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Add your Phone Number(Optional)</label>
                    <input type="tel" id="phonenumber" name="phonenumber" class="form-control"
                        value={{$data['phonenumber']}}>
                </div>
                <div class="form-group">
                    <label for="about">About You</label>
                    <textarea name="about" id="about" cols="30" rows="10"
                        class="form-control">{{$data['about']}}</textarea>
                </div>
                <div class="form-group">
                    <label for="academicdetails">Academic Details</label>
                    <textarea name="academicdetails" id="academicdetails" cols="30" rows="10"
                        class="form-control">{{$data['academicdetails']}}</textarea>
                </div>
                <div class="form-group">
                    <label for="facebooklink">Facebook Profile Link</label>
                    <input type="url" id="facebooklink" name="facebooklink" class="form-control"
                        value={{$data['facebooklink']}}>
                </div>

                <div class="form-group">
                    <label for="instagramlink">Instagram Profile Link</label>
                    <input type="url" id="instagramlink" name="instagramlink" class="form-control"
                        value={{$data['instagramlink']}}>
                </div>
                <div class="form-group">
                    <label for="linkedinlink">Linkedin Profile Link</label>
                    <input type="url" id="linkedinlink" name="linkedinlink" class="form-control"
                        value={{$data['linkedinlink']}}>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Update your Details</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

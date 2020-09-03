@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="card card-default">
        <div class="card-header">{{isset($subject)?'Edit Subject' :'Add a Subject'}} </div>


        <div class="card-body">
            <form action="{{isset($subject)? route('subject.update',$subject->id):route('subject.store')}}"
                method="POST">
                @csrf
                @if (isset($subject))
                @method('PUT')
                @endif

                <div class="form-group">
                    <label for="year">Semester</label>

                    <select name="semester_id" id="semester_id">

                        @foreach ($semesters as $semester)

                        <option value="{{$semester->id}}" @if (isset($subject)) @if ($semester->
                            id==$subject->semester->id)
                            selected
                            @endif
                            @endif>{{$semester->year}}/{{$semester->number}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{isset($subject)?$subject->name: ''}}">
                </div>
                <div class="form-group">
                    <label for="drivelink">drivelink</label>
                    <input type="text" id="drivelink" name="drivelink" class="form-control"
                        value="{{isset($subject)?$subject->drivelink: ''}}">
                </div>
                <div class="form-group">
                    <label for="youtubelink">youtubelink</label>
                    <input type="text" id="youtubelink" name="youtubelink" class="form-control"
                        value="{{isset($subject)?$subject->youtubelink: ''}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{isset($subject)?'Edit Subject' :'Add Subject'}}
                    </button>
                </div>


            </form>

        </div>



    </div>
</div>

@endsection

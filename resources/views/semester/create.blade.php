@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="card card-default">
        <div class="card-header">Add a Semester </div>

        <div class="card-body">
            <form action="{{route('semester.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="year">Semester Year</label>

                    <input id="year" type="text" class="form-control" name="year">
                </div>
                <div class="form-group">
                    <label for="number">Semester Number</label>

                    <input id="number" type="text" class="form-control" name="number">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Add Semester
                    </button>
                </div>


            </form>

        </div>



    </div>
</div>

@endsection

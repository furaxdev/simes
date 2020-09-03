@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="card card-default">
        <div class="card-header">Add a Faculty </div>

        <div class="card-body">
            <form action="{{route('faculty.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">name</label>

                    <input id="name" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Add Faculty
                    </button>
                </div>


            </form>

        </div>



    </div>
</div>

@endsection

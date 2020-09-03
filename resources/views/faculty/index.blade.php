@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="container">

    <a href="{{route('faculty.create')}}" class="btn btn-success btn-lg"> Add a faculty </a>

    <div class="card">

        <div class="card-body">
    <table class="table table-responsive-sm table-hover table-outline mb-0">

        <thead class="thead-light">
            <th>faculty</th>
            <th>No.of Students</th>

        </thead>

        @foreach ($faculties as $faculty)
        <tr>
            <td>{{$faculty->name}}</td>
            <td>{{$faculty->logininfo()->count()}}</td>
        </tr>

        @endforeach
    </table>
        </div>
    </div>



</div>

@endsection

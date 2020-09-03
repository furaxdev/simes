@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="container">

    <a href="{{route('semester.create')}}" class="btn btn-success btn-lg"> Add a Semester </a>

    <table class="table">

        <thead>
            <th>Year</th>
            <th>Semester</th>

        </thead>

        @foreach ($semesters as $semester)
        <tr>
            <td>{{$semester->year}}</td>

            <td>{{$semester->number}}</td>
        </tr>

        @endforeach
    </table>

</div>

@endsection

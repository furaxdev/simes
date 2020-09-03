@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="container">

    <a href="{{route('batch.create')}}" class="btn btn-success btn-lg"> Add a Batch </a>

    <div class="card">

        <div class="card-body">
    <table class="table table-responsive-sm table-hover table-outline mb-0">

        <thead class="thead-light">
            <th>Batch</th>
            <th>No.of Students</th>

        </thead>

        @foreach ($batches as $batch)
        <tr>
            <td>{{$batch->year}}</td>
            <td>{{$batch->alumni()->count()}}</td>
        </tr>

        @endforeach
    </table>
        </div>
    </div>



</div>

@endsection

@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="card card-default">
        <div class="card-header">Add a Batch </div>

        <div class="card-body">
            <form action="{{route('batch.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="year">Year</label>

                    <input id="year" type="number" class="form-control" name="year">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Add Batch
                    </button>
                </div>


            </form>

        </div>



    </div>
</div>

@endsection

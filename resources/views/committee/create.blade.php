@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">


    <form action="{{isset($comid)?route('committee.update'):route('committee.store')}}" method="POST">
        @csrf

        @if (isset($comid))
        @method('PUT')
        @endif

        @for ($i = 1; $i < 12; $i++) <div class="card ">
            <div class="card-header bg-success ">Info of position {{$i}}</div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label class="sr-only" for={{'namerank'.$i}}>Name for position {{$i}}
                    </label>
                    <input type="text" class="form-control-plaintext" name={{'namerank'.$i}} id={{'namerank'.$i}}
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for={{'positionrank'.$i}}>Name of position {{$i}}
                    </label>
                    <input type="text" name={{'positionrank'.$i}} id={{'positionrank'.$i}} class="form-control">
                </div>

                <div class="form-group">
                    <label for={{'imagerank'.$i}}>Image for position {{$i}}
                    </label>
                    <input type="file" name={{'imagerank'.$i}} id={{'imagerank'.$i}} class="form-control">
                </div>
            </div>
</div>


<br><br><br>

@endfor

<div class=" form-group">
    <button type="submit" class="btn btn-success">{{isset($comid)?'Update Committee':'Create Committee'}}
    </button>
</div>

</form>

</div>

@endsection

@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Channel: {{ $channel->name}}</div>

                <div class="card-body">

                    <form action="{{route('channels.update',['channel' => $channel->id])}}" method="post">

                        {{csrf_field()}}
                        {{ method_field('PUT')}}

                        <div class="form-group">
                            <input type="text" name="channel" value="{{$channel->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">
                                    Update Channel
                                </button>
                            </div>
                        </div>



                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

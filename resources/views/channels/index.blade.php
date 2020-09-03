@extends('layouts.dashboard')
@extends('inc.messages')

@section('dashboardcontent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Channels</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($channels as $channel)
                            <tr>
                                <td>{{ $channel->name}}</td>
                                <td>
                                    <a href="{{route('channels.edit',['channel'=> $channel->id])}}"
                                        class="btn btn-xs btn-info">Edit</a>
                                </td>

                                <td>
                                    <form action="{{route('channels.destroy',['channel' => $channel->id])}}"
                                        method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE')}}

                                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                    </form>

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>


                </div>

                <div class="card-footer">
                    <p>Click <a href="{{route('channels.create')}}">here</a> to create a new chanenl</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

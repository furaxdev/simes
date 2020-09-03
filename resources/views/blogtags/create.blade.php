@extends('layouts.dashboard')


@section('dashboardcontent')


<div class="card card-default">
    <div class="card-header">

        {{ isset($tag)?'Edit tag':'Create a tag'}} </div>

    <div class="card-body">
        <form action="{{isset($tag)?route('tags.update',$tag->id):route('tags.store')}}" method="post">
            @csrf
            @if (isset($tag))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>

                <input id="name" type="text" class="form-control" name="name" value="{{isset($tag)?$tag->name:''}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    {{ isset($tag) ? "Update tag" : "Add a tag"}}
                </button>
            </div>


        </form>

    </div>



</div>



@endsection

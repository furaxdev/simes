@extends('layouts.dashboard')


@section('dashboardcontent')


<div class="card card-default">
    <div class="card-header">

        {{ isset($category)?'Edit Category':'Create a Category'}} </div>

    <div class="card-body">
        <form action="{{isset($category)?route('categories.update',$category->id):route('categories.store')}}"
            method="post">
            @csrf
            @if (isset($category))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>

                <input id="name" type="text" class="form-control" name="name"
                    value="{{isset($category)?$category->name:''}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    {{ isset($category) ? "Update Category" : "Add a Category"}}
                </button>
            </div>


        </form>

    </div>



</div>



@endsection

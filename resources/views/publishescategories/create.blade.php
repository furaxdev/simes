@extends('layouts.dashboard')


@section('dashboardcontent')


<div class="card card-default">
    <div class="card-header">

        {{ isset($publishesCategories)?'Edit publishesCategories':'Create a publishesCategories'}} </div>

    <div class="card-body">
        <form
            action="{{isset($publishesCategories)?route('publishescategories.update',$publishesCategories->id):route('publishescategories.store')}}"
            method="post">
            @csrf
            @if (isset($publishesCategories))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">name</label>

                <input id="name" type="text" class="form-control" name="name"
                    value="{{isset($publishesCategories)?$publishesCategories->name:''}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    {{ isset($publishesCategories) ? "Update publishesCategories" : "Add a publishesCategories"}}
                </button>
            </div>


        </form>

    </div>



</div>



@endsection

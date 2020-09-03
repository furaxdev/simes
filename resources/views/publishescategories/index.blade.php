@extends('layouts.dashboard')

@section('dashboardcontent')


<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('publishescategories.create') }}" class="btn btn-success">Add publishesCategories</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">

        @if (count($categories)>0)
        <table class="table">

            <thead>
                <th>Name</th>
                <th>Posts Count</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>

            <tbody>
                @foreach ($categories as $publishescategory)
                <tr>
                    <td>
                        {{$publishescategory->name}}
                    </td>
                    <td>
                        {{$publishescategory->publishes->count()}}
                    </td>
                    <td>
                        <a href="{{ route('publishescategories.edit', $publishescategory->id) }}"
                            class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('publishescategories.destroy',$publishescategory->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>


        </table>
        @else
        <div class="container">

            No Categories to show
        </div>

        @endif


    </div>
</div>

@endsection

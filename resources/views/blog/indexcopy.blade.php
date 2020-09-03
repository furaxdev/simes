@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="d-flex justify-content-end-mb-2">
    <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
</div>


<div class="card card-default">
    <div class="card-header">posts</div>
    <div class="card-body">
        <table class="table table-responsive-sm table-hover table-outline mb-0">

            <thead class="thead-light">
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Category</th>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$post->image)}}" height="60px" width="120px" alt="">
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        {{$post->category->name}}
                    </td>



                    @if (auth()->user()->id == $post->user_id)
                    <td>

                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    @endif


                    @if (auth()->user()->isAdmin())
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    @elseif (auth()->user()->id == $post->user_id)
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    @endif

                </tr>
                @endforeach


            </tbody>


        </table>

    </div>
</div>
@endsection

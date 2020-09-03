@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="d-flex justify-content-end-mb-2">
    <a href="{{route('subject.create')}}" class="btn btn-success">Add Subject</a>
</div>


<div class="card card-default">
    <div class="card-header">Subjects</div>
    <div class="card-body">
        <table class="table">

            <thead>
                <th></th>
                <th>Title</th>
                <th>semester</th>
            </thead>

            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$subject->image)}}" height="60px" width="120px" alt="">
                    </td>
                    <td>
                        {{$subject->name}}
                    </td>
                    <td>
                        {{$subject->semester->year}}
                    </td>
                    <td>
                        <a href="{{ route('subject.edit',$subject->id) }}" class="btn btn-info btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('subject.destroy', $subject) }}" method="POST">
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach


            </tbody>


        </table>

    </div>
</div>
@endsection

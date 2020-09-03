@extends('layouts.dashboard')
@extends('inc.messages')
@section('dashboardcontent')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Create User</h1>
        </div>
        <div class="card-body">
            <form action="{{route('users.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Batch"> Batch </label>

                    <select name="batch_id" id="batch_id" class="form-control">
                        @foreach ($batches as $batch)
                        <option value="{{$batch->id}}">{{$batch->year}}</option>

                        @endforeach

                    </select>

                </div>
                <div class="form-group">
                    <label for="faculty"> Faculty </label>

                    <select name="faculty_id" id="faculty_id" class="form-control">
                        @foreach ($faculties as $faculty)
                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>

                        @endforeach

                    </select>

                </div>
                <div class="form-group">
                    <label for="rollno">Roll No:</label>
                    <select name="rollno" id="rollno" class="form-control">

                        @for ($i = 1; $i < 49; $i++) <option value={{$i}}>{{$i}}</option>
                            @endfor
                    </select>

                </div>
                <div class="form-group">
                    <label for="DateOfBirth">DateOfBirth</label>
                    <input id="DateOfBirth" name="DateOfBirth" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input id="username" name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input id="Password" name="Password" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('jsbottom')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('#DateOfBirth',{

    })

</script>
@endsection

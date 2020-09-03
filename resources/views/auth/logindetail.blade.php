@extends('layouts.login')
@section('login-content')


@csrf

@include('inc.messages')

<div class="card-header">

    <h1>Enter your details </h1>
</div>

<div class="card-body">



    <form action={{ route('getlogindetails') }} method="POST">

        <h1>Academic Details:</h1>


        <div class="form-group">
            <label for="Batch">Batch</label>
            <select name="Batch" id="Batch" class="form-control">
                @foreach ($batches as $batch)
                <option value="{{$batch->id}}">{{$batch->year}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="faculty">Faculty</label>
            <select name="faculty" id="faculty" class="form-control">
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
        <h1>Credentials:</h1>
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="DateOfBirth">Date Of Birth (In AD): </label>
            <input type="text" name="DateOfBirth" id="DateOfBirth" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Get Login Details</button>
        </div>

    </form>

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

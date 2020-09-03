@extends('layouts.login')
@extends('inc.messages')
@section('login-content')


@csrf
<div class="card">

    <div class="card-header">

        <h1>Your login details :</h1>
    </div>

<div class="card-body">

<h3>Username : {{$username}}</h3>
<br>
<h3>Password : {{$password}}</h3>

</div>
</div>
@endsection

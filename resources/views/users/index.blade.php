@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="d-flex justify-content-end-mb-2">
    <a href="{{route('users.create')}}" class="btn btn-success">Add User</a>
</div>


<div class="card card-default">
    <div class="card-header">Users</div>
    <div class="card-body">
        <table class="table table-responsive-sm table-hover table-outline mb-0">

            <thead class="thead-light">

                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Delete</th>

            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->username}}

                    </td>
                    <td>
                        {{$user->role}}
                    </td>
                    {{-- <td>
                        @if (!$user->isAdmin())

                        <form action="">
                            <button type="submit" class="btn btn-success btn-sm">Make Admin</button>
                        </form>
                        @endif
                    </td> --}}
                    @if (!$user->isAdmin())

                    <td>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>@else
                    </td>
                    @endif





                </tr>
                @endforeach


            </tbody>


        </table>

    </div>
</div>
@endsection

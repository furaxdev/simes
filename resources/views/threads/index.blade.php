@extends('layouts.dashboard')

@section('dashboardcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include ('threads._list')

            {{ $threads->render() }}
        </div>

        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-header">
                        Threads
                </div>

                <div class="card-body">
                  <ul>



                            <li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads">All Threads</a></li>

                            @if (auth()->check())
                            <li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads?by={{ auth()->user()->name }}">My Threads</a></li>
                            @endif

                            <li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads?popular=1">Popular Threads</a></li>
                          
                            <li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads?unanswered=1">Unanswered Threads</a></li>

<li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads/create">Create Thread</a></li>
                  </ul>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
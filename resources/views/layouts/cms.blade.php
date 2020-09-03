@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">


        <div class="col-md-4">
            <ul class="list-group">



                <li class="list-group-item">
                    <a href="{{route('posts.index')}}">Posts</a>
                </li>

                @guest
                @else
                @if (auth()->user()->isAdmin())


                <li class="list-group-item">
                    <a href="/categories">Categories</a>
                </li>
                <li class="list-group-item">
                    <a href="{{route('tags.index')}}">Tags</a>
                </li>
                @endif


                @endguest



            </ul>




        </div>

        <div class="col-md-8">

            @yield('cmscontent')

        </div>




    </div>


</div>

@endsection

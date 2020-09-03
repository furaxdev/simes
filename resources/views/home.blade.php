@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="row">

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">SIMES FORUM</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">

                            <use xlink:href="assets/icons/sprites/free.svg#cil-options">More</use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="/threads">All Threads</a>

                        @if (auth()->check())
                        <a class="dropdown-item" href="/threads?by={{ auth()->user()->name }}">My Threads</a>
                        @endif

                        <a class="dropdown-item" href="/threads?popular=1">Popular Threads</a>
                        <a class="dropdown-item" href="/threads?unanswered=1">Unanswered Threads</a>

                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">



        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">BLOG</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">

                            <use xlink:href="assets/icons/sprites/free.svg#cil-options">More</use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="/posts">My Posts</a>

                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">



        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                   <a class="text-white" href="studymaterials"> <div class="text-value-lg">Study Materials</div></a>
                </div>

            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">



        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg"><a  class="text-white" href="alumni">Alumni</a></div>
                </div>

            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
        </div>
    </div>



</div>

@endsection


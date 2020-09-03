@extends('layouts.dashboard')

@section('dashboardcontent')


<div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0 d-inline">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Batches
                    </button>
                </h5>

            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" id="child1">
                    @foreach ($batches as $batch)
                    <div class="card">
                        <div class="card-header">
                            <a href="#" data-toggle="collapse"
                                data-target={{'#collapseOne-'.$batch->id}}>{{$batch->year}}</a>
                        </div>
                        <div class="card-body collapse" data-parent="#child1" id={{'collapseOne-'.$batch->id}}>

                            @foreach ($batch->alumni as $alumni)
                            <div class="card" id={{'child1-'.$batch->id}}>
                                <div class="card-header">
                                    <a href="#" data-toggle="collapse"
                                        data-target={{'#collapseOne-'.$batch->id.'-'.$alumni->id}}>{{$alumni->name}}</a>
                                </div>
                                <div class="card-body collapse" data-parent={{'#child1-'.$batch->id}}
                                    id={{'collapseOne-'.$batch->id.'-'.$alumni->id}}>

                                    @if ($alumni->email)
                                    <h4>email :</h4>
                                    <p>{{$alumni->email}}</p>
                                    @endif
                                    @if ($alumni->phonenumber)
                                    <h4>phonenumber :</h4>
                                    <p>{{$alumni->phonenumber}}</p>
                                    @endif
                                    @if ($alumni->about)
                                    <h4>about :</h4>
                                    <p>{{$alumni->about}}</p>
                                    @endif
                                    @if ($alumni->academicdetails)
                                    <h4>academicdetails :</h4>
                                    <p>{{$alumni->academicdetails}}</p>
                                    @endif
                                    @if ($alumni->facebooklink)
                                    <h4>facebooklink :</h4>
                                    <a href="{{$alumni->facebooklink}}">facebooklink</a>
                                    @endif
                                    @if ($alumni->instagramlink)
                                    <h4>instagramlink :</h4>
                                    <a href="{{$alumni->instagramlink}}">instagramlink</a>
                                    @endif
                                    @if ($alumni->linkedinlink)
                                    <h4>linkedinlink :</h4>
                                    <a href="{{$alumni->linkedinlink}}">linkedinlink</a>
                                    @endif


                                </div>
                            </div>
                            @endforeach






                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>
</div>






@endsection

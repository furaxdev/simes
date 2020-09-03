@extends('layouts.dashboard')
@extends('inc.messages')

@section('dashboardcontent')
<div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0 d-inline">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Study Materials
                    </button>
                </h5>

            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" id="child1">
                    @foreach ($semesters as $semester)
                    <div class="card">
                        <div class="card-header">
                            <a href="#" data-toggle="collapse" data-target={{'#collapseOne-'.$semester->id}}>Semester
                                {{$semester->year}}/{{$semester->number}} </a>
                        </div>
                        <div class="card-body collapse" data-parent="#child1" id={{'collapseOne-'.$semester->id}}>

                            @foreach ($semester->subject as $subject)
                            <div class="card" id={{'child1-'.$semester->id}}>
                                <div class="card-header">
                                    <a href="#" data-toggle="collapse"
                                        data-target={{'#collapseOne-'.$semester->id.'-'.$subject->id}}>{{$subject->name}}</a>
                                </div>
                                <div class="card-body collapse" data-parent={{'#child1-'.$subject->id}}
                                    id={{'collapseOne-'.$semester->id.'-'.$subject->id}}>

                                    <ul>
                                        @if (!$subject->drivelink==null)

                                        <li><a href="{{$subject->drivelink}}">Google Drive</a></li>
                                        @endif
                                        @if (!$subject->youtubelink==null)

                                        <li><a href="{{$subject->youtubelink}}">Youtube Playlist</a></li>
                                        @endif
                                    </ul>


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

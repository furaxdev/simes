@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="card card-default">
    <div class="card-header">
        {{isset($publish)?'Edit publish':'Create Publishes'}}

    </div>
    <div class="card-body">
        <form action="{{isset($publish)?route('publishes.update',$publish->id ):route('publishes.store')}}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($publish))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="publishes_categories_id">Category</label>

                <select name="publishes_categories_id" id="publishes_categories_id">

                    @foreach ($publishescategories as $category)

                    <option value="{{$category->id}}" @if (isset($publish)) @if ($category->
                        id==$publish->publishes_categories_id)
                        selected
                        @endif
                        @endif>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{isset($publish)?$publish->title: ''}}">
            </div>

            @if (isset($publish))

            <img src="{{asset("storage/$publish->thumbnail") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="thumbnail">Thumbnail image (required)
                </label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            </div>


            <div class="form-group">
                <label for="file">File</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">{{isset($publish)?'Update publish':'Create publish'}}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('jsbottom')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
    flatpickr('#published_at',{
        enableTime:true
    })
    $(document).ready(function() {
    $('.tags-selector').select2();
});

</script>

@endsection

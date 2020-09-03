@extends('layouts.dashboard')

@section('dashboardcontent')

<div class="card card-default">
    <div class="card-header">
        {{isset($post)?'Edit Post':'Create Post'}}

    </div>
    <div class="card-body">
        <form action="{{isset($post)?route('posts.update',$post->id ):route('posts.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @if (isset($post))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{isset($post)?$post->title: ''}}">
            </div>
            <div class="form-group">
                <label for="description">Description(required) </label>
                <p class="text-muted"> Description and Title will be used for search queries to search your article</p>
                <textarea name="description" id="description" cols="5" rows="5"
                    class="form-control">{{isset($post)?$post->description : ''}}</textarea>
            </div>


            @if (isset($post))

            <img src="{{asset("storage/$post->thumbnail") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="thumbnail">Thumbnail image (required)
                </label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            </div>



            <div class="form-group">
                <label for="content1">Content (required)</label>
                <input name="content1" id="content1" type="hidden" value="{{isset($post)?$post->content1 : ''}}">
                <trix-editor input="content1"></trix-editor>
            </div>



            @if (isset($post))

            <img src="{{asset("storage/$post->image1") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="image1">Image 1 (optional)</label>
                <input type="file" name="image1" id="image1" class="form-control">
            </div>
            <div class="form-group">
                <label for="content2">Content 2 (optional)</label>
                <input name="content2" id="content2" type="hidden" value="{{isset($post)?$post->content2 : ''}}">
                <trix-editor input="content2"></trix-editor>
            </div>



            @if (isset($post))

            <img src="{{asset("storage/$post->image2") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="image2">Image 2 (optional)</label>
                <input type="file" name="image2" id="image2" class="form-control">
            </div>

            <div class="form-group">
                <label for="content3">Content 3 (optional)</label>
                <input name="content3" id="content3" type="hidden" value="{{isset($post)?$post->content3 : ''}}">
                <trix-editor input="content3"></trix-editor>
            </div>



            @if (isset($post))

            <img src="{{asset("storage/$post->image3") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="image3">Image 3 (optional)</label>
                <input type="file" name="image3" id="image3" class="form-control">
            </div>


            <div class="form-group">
                <label for="content4">Content 4 (optional)</label>
                <input name="content4" id="content4" type="hidden" value="{{isset($post)?$post->content5 : ''}}">
                <trix-editor input="content4"></trix-editor>
            </div>




            @if (isset($post))
            <img src="{{asset("storage/$post->image4") }}" width="100%" alt="">
            @endif

            <div class="form-group">
                <label for="image4">Image 4 (optional)</label>
                <input type="file" name="image4" id="image4" class="form-control">
            </div>
            <div class="form-group">
                <label for="content5">Content5 (optional)</label>
                <input name="content5" id="content5" type="hidden" value="{{isset($post)?$post->content5 : ''}}">
                <trix-editor input="content5"></trix-editor>
            </div>


            <div class="form-group">
                <label for="published_at">Published at</label>
                <input type="text" id="published_at" name="published_at" class="form-control"
                    value="{{isset($post)?$post->published_at : ''}}">
            </div>



            @if (!isset($post))

            <div class="form-group">
                <label for="published_by">Published by</label>
                <input type="text" id="published_by" name="published_by" class="form-control"
                    value="{{Auth::user()->name}}">
            </div>
            @endif


            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">@foreach ($categories as $category) <option
                        value="{{$category->id}}" @if (isset($post)) @if ($category->id===$post->category_id)
                        selected
                        @endif
                        @endif> {{$category->name}}</option>

                    @endforeach
                </select>
            </div>

            @if ($tags->count()>0)
            <div class="form-group">
                <label for="tags">Tags</label>
                <select name="tags[]" id="tags" class="form-control custom-select tags-selector" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{$tag->id}}" @if (isset($post)) @if ($post->hasTag($tag->id ))
                        selected
                        @endif
                        @endif

                        >
                        {{$tag->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            @endif

            <div class="form-group">
                <button type="submit" class="btn btn-success">{{isset($post)?'Update Post':'Create Post'}} </button>
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

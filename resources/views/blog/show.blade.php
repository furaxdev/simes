@extends('layouts.blog')

@section('title')
{{$post->title}}
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href={{ asset('app/css/fonts.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('app/css/crumina-fonts.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('app/css/styles.css') }}>


<!--Plugins styles-->



<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href={{ asset('front/css/style.css') }}>

<!--Styles for RTL-->

<!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

<!--External fonts-->

<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<style>
    .padded-50 {
        padding: 40px;
    }

    .text-center {
        text-align: center;
    }
</style>
@endsection

@section('js')


<script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('blogsection')
<div class="content-wrapper">

    <!-- Stunning Header -->

    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">{{$post->title}}</h1>
        </div>
    </div>

    <!-- End Stunning Header -->

    <!-- Post Details -->


    <div class="container">
        <div class="row ">
            <main class="main">
                <div class="" style="padding-top: 120px">
                    <article class="hentry post post-standard-details" style="font-size: larger;">

                        <div class="post-thumb">
                            <img src={{asset("storage/$post->thumbnail")}} alt="seo">
                        </div>

                        <div class="post__content">


                            <div class="post-additional-info">

                                <div class="post__author author vcard">
                                    Posted by

                                    <div class="post__author-name fn">
                                        <a href="#" class="post__author-link">{{$post->published_by}}</a>
                                    </div>

                                </div>

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-03-20 12:00:00">
                                        {{$post->published_at}}
                                    </time>

                                </span>

                                <span class="category">
                                    <i class="seoicon-tags"></i>


                                    <a href="#">{{$post->category->name}}</a>

                                </span>

                            </div>

                            <div class="post__content-info" style="font-size: larger">
                                {!!$post->content1!!}
                            </div>

                            @if (!$post->image1==null)

                            <div class="post__content-info" style="font-size: larger">

                                <img src={{asset("storage/$post->image1")}} alt="seo">

                            </div>
                            @endif




                            @if (!$post->content2==null)

                            <div class="post__content-info" style="font-size: larger">
                                {!!$post->content2!!}
                            </div>
                            @endif


                            @if (!$post->image2==null)

                            <div class="post__content-info" style="font-size: larger">

                                <img src={{asset("storage/$post->image2")}} alt="seo">

                            </div>
                            @endif


                            @if (!$post->content3==null)

                            <div class="post__content-info" style="font-size: larger">
                                {!!$post->content3!!}
                            </div>
                            @endif


                            @if (!$post->image3==null)

                            <div class="post__content-info" style="font-size: larger">

                                <img src={{asset("storage/$post->image3")}} alt="seo">

                            </div>
                            @endif



                            @if (!$post->content4==null)

                            <div class="post__content-info" style="font-size: larger">
                                {!!$post->content4!!}
                            </div>
                            @endif


                            @if (!$post->image4==null)

                            <div class="post__content-info" style="font-size: larger">

                                <img src={{asset("storage/$post->image4")}} alt="seo">

                            </div>
                            @endif



                            @if (!$post->content5==null)

                            <div class="post__content-info" style="font-size: larger">
                                {!!$post->content5!!}
                            </div>
                            @endif


                            <div class="widget w-tags">
                                <div class="tags-wrap">
                                    @foreach($post->tags as $tag)

                                    <a href="#">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            </main>

        </div>



        <div style="display: flex;  justify-content: space-between;">

            @if(!$prev==null)

            <a href={{route('blog.show',$prev->id)}} class="btn-next-wrap">
                <div class="btn-content">
                    <div class="btn-content-title btn btn-success">Previous Post</div>
                    <p class="btn-content-subtitle">{{$prev->title}}</p>
                </div>
                <svg class="btn-next">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </a>
            @endif


            @if(!$next==null)
            <a href={{route('blog.show',$next->id)}} class="btn-prev-wrap">
                <svg class="btn-prev">
                    <use xlink:href="#arrow-left"></use>
                </svg>
                <div class="btn-content">
                    <div class="btn-content-title btn-info btn">Next Post</div>
                    <p class="btn-content-subtitle">{{$next->title}}</p>
                </div>
            </a>
            @endif


        </div>


        <div class="header-spacer"></div>

        <div id="disqus_thread"></div>
        <script>
            /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                        var disqus_config = function () {
                        this.page.url = "http://127.0.0.1:8000//blog/{{$post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier ={{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };

                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://simes2.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                powered by Disqus.</a></noscript>


        <div class="col-lg-10">
            <div class="header-spacer"></div>

            <aside aria-label="sidebar" class="sidebar sidebar-right">
                <div class="widget w-tags">
                    <div class="heading text-center">
                        <h4 class="heading-title">ALL BLOG TAGS</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                    <div class="tags-wrap">
                        @foreach ($tags as $tag)

                        <a href="#" class="w-tags-item">{{$tag->name}}</a>
                        @endforeach

                    </div>
                </div>
            </aside>
        </div>



        <div class="col-lg-10">
            <div class="header-spacer"></div>

            <aside aria-label="sidebar" class="sidebar sidebar-right">
                <div class="widget w-tags">
                    <div class="heading text-center">
                        <h4 class="heading-title">ALL BLOG Categories</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>

                    <div class="tags-wrap">
                        @foreach ($categories as $category)

                        <a href="#" class="w-tags-item">{{$category->name}}</a>
                        @endforeach

                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>




@endsection

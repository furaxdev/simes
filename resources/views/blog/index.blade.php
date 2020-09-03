@extends('layouts.blog')


@section('blogsection')
<div class="content-wrapper">
    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">
                @if (!$tagname==null)

                Tag : {{$tagname}}

                @elseif(!$categoryname==null)

                Category : {{$categoryname}}

                @else


                @if (!$search==null)
                Search : {{$search}}
                @else
                SIMES BLOG
                @endif


                @endif

            </h1>
        </div>
    </div>

    <div class="header-spacer"></div>


    <div class="" style="width: 90%; margin: auto;">


        <div class="row">


            <div class="container">
                <div class="container">
                    <div class="container" style="">
                        <ul class="nav-add" style="float: inline-end;">
                            <a class="js-open-search"
                                style=" cursor: pointer; display: inline; font-size: larger;">Search</a>
                            <li class=" search search_main"
                                style="color: black; margin-top: 5px;display: inline; cursor: pointer">

                                <a href="#" class="js-open-search">
                                    <i class="seoicon-loupe" style="color:black;cursor: pointer"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="header-spacer"></div>
            <div class="row col-lg-9" style="padding-bottom: 100px;">
                @foreach ($posts as $post)
                <div class="col-lg-6">

                    <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src={{asset("storage/$post->thumbnail")}} alt="seo">
                            <div class="overlay"></div>
                            <a href={{asset("storage/$post->thumbnail")}} class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href={{route('blog.show',$post->id)}}>{{$post->title}}</a>
                                </h2>

                                <div class="post-additional-info">

                                    <span class="post__date">

                                        <i class="seoicon-clock"></i>

                                        <time class="published" datetime="2016-04-17 12:00:00">
                                            {{$post->published_at}}
                                        </time>

                                    </span>

                                    <span class="category">
                                        <i class="seoicon-tags"></i>


                                        <a href="#">{{$post->category->name}}</a>

                                    </span>

                                    <span class="post__comments">
                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>

                                    </span>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                @endforeach

                <div class="container">

                    {{$posts->links()}}
                </div>

            </div>



            <div class=" column col-lg-3">

                <div class="col-lg-12">
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

                                <a href={{route('blog',['tag'=>$tag->id])}} class="w-tags-item">{{$tag->name}}</a>
                                @endforeach

                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-12">
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

                                <a href={{route('blog',['category'=>$category->id])}}
                                    class="w-tags-item">{{$category->name}}</a>
                                @endforeach

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form method="GET" action={{route('blog')}}>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text" name="search">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('css')
<link rel="stylesheet" type="text/css" href={{ asset('app/css/fonts.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('app/css/crumina-fonts.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('app/css/styles.css') }}>


<!--Plugins styles-->


<link rel="stylesheet" type="text/css" href={{ asset('app/css/magnific-popup.css') }}>

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
<script src={{ asset('app/js/jquery-2.1.4.min.js') }}></script>
<script src={{ asset('app/js/crum-mega-menu.js') }}></script>
<script src={{ asset('app/js/swiper.jquery.min.js') }}></script>
<script src={{ asset('app/js/theme-plugins.js') }}></script>
<script src={{ asset('app/js/main.js') }}></script>



<script src="{{ asset('js/app.js') }}"></script>
@endsection

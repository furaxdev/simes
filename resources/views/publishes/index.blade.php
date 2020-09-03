@extends('layouts.blog')


@section('blogsection')




<div class="content-wrapper">
    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">

                @if(!$categoryname==null)
                Category : {{$categoryname}}
                @elseif(!$search==null)
                Search : {{$search}}
                @else
                SIMES PUBLISHES
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
                @foreach ($publishes as $publish)

                <div class="col-lg-6">

                    <article class="hentry post post-standard has-post-thumbnail sticky">

                        <div class="post-thumb">
                            <img src={{asset("storage/$publish->thumbnail")}} alt="seo">
                            <div class="overlay"></div>
                            <a href={{asset("storage/$publish->thumbnail")}} class="link-image js-zoom-image">
                                <i class="seoicon-zoom"></i>
                            </a>
                            <a href="#" class="link-post">
                                <i class="seoicon-link-bold"></i>
                            </a>
                        </div>

                        <div class="post__content">

                            <div class="post__content-info">

                                <h2 class="post__title entry-title ">
                                    <a href={{asset("storage/$publish->file")}}>{{$publish->title}}</a>
                                </h2>

                                <div class="post-additional-info">

                                    @foreach ($publishescategories as $publishescategory)
                                    @if ($publishescategory->id == $publish->publishes_categories_id)

                                    <span class="category">
                                        <i class="seoicon-tags"></i>

                                        <a href={{route('publishes.index',['category'=>$publish->publishes_categories_id])}}
                                            class="w-tags-item">{{$publishescategory->name}}</a>


                                    </span>

                                    @endif
                                    @endforeach

                                    <span class="category">
                                        <i class="seoicon-tags"></i>


                                        <a href={{asset("storage/$publish->file")}}>Download</a>

                                    </span>



                                </div>
                            </div>
                        </div>

                    </article>
                </div>
                @endforeach

                <div class="container">

                </div>

            </div>



            <div class=" column col-lg-3">

                <div class="col-lg-12">
                    <aside aria-label="sidebar" class="sidebar sidebar-right">
                        <div class="widget w-tags">
                            <div class="heading text-center">
                                <h4 class="heading-title">ALL Publishes Categories</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            <div class="tags-wrap">
                                @foreach ($publishescategories as $category)

                                <a href={{route('publishes.index',['category'=>$category->id])}}
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
                <form method="GET" action={{route('publishes.index')}}>
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
<link rel="stylesheet" type="text/css" href={{ asset('app/css/grid.css') }}>
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
<script src={{ asset('front/app.js') }}></script>
@endsection
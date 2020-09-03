<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SIMES</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href={{asset('front/css/bootstrap.css')}} />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap"
        rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href={{asset('front/css/style.css')}} rel="stylesheet" />
    <!-- responsive style -->
    <link href={{asset('front/css/responsive.css')}} rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="">
                        <span>
                            SIMES
                        </span>
                    </a>

                    <div class="navbar-collapse" id="">

                        <div class="d-none d-lg-flex flex-column flex-lg-row " style="width:90%; margin:auto;">


                            <ul class="navbar-nav mr-auto ">

                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="">Home</a>
                                </li>
                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="blog">Blog</a>
                                </li>
                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="publishes">Publishes</a>
                                </li>
                                @guest

                                @else
                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="threads">Forum</a>
                                </li>
                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="alumni">Alumni</a>
                                </li>
                                <li class="nav-item d-md-down-none mx-2">
                                    <a class="nav-link" href="studymaterials">Study Materials</a>
                                </li>
                                @endguest



                            </ul>



                            <ul class="navbar-nav  ml-auto mr-4">
                                <user-notifications></user-notifications>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                            <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">

                            </form>
                        </div>

                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <span class="s-1"> </span>
                                <span class="s-2"> </span>
                                <span class="s-3"> </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a class="nav-link" href="">Home</a>
                                <a class="nav-link" href="blog">Blog</a>
                                <a class="nav-link" href="publishes">Publishes</a>
                                @guest

                                @else
                                <a class="nav-link" href="threads">Forum</a>
                                <a class="nav-link" href="alumni">Alumni</a>
                                <a class="nav-link" href="studymaterials">Study Materials</a>
                                @endguest
                                @guest
                                <a class="nav-link" href="login">Login</a>

                                @else
                                <a class="nav-link" href="home">Dashboard</a>

                                @endguest
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        01
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        02
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 offset-md-2">
                                <div class="slider_detail">
                                    <h1>
                                        SIMES

                                    </h1>
                                    <p>
                                        SOCIETY OF INNOVATIVE MECHANICAL ENGINEERING STUDENTS

                                    </p>

                                </div>
                            </div>
                            <div class="col-md-7 p-4">
                                <div class="slider_img-box">
                                    <img src={{asset('front/images/12.png')}} />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 offset-md-2">
                                <div class="slider_detail">
                                    <h1>
                                        Machine rule the world, We rule the machine!!


                                    </h1>
                                    <p>
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-7 pt-4 p-4">
                                <div class="slider_img-box">
                                    <img src={{asset('front/images/12.png')}} alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <h2>
                Programs
            </h2>

        </div>

        <div class="container">
            <div class="about_card-container">
                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/gocart.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                GO CART
                            </h4>

                        </div>
                    </div>

                </div>
                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/ideathone.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Ideathone
                            </h4>

                        </div>
                    </div>

                </div>

                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/mechtalk.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Mech Talk
                            </h4>

                        </div>
                    </div>

                </div>



                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/magazine.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Mechazine
                            </h4>

                        </div>
                    </div>

                </div>





            </div>
        </div>

        <div class="container">
            <div class="about_card-container">

                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/interaction.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Interaction Programs
                            </h4>

                        </div>
                    </div>

                </div>

                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/catia.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Catia Training
                            </h4>

                        </div>
                    </div>

                </div>

                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src={{asset('front/img/programs/Matlab.png')}} alt="" />
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                Matlab Training
                            </h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

       <!-- team section  -->
    <section class="team_section layout_padding">
        <div class="container">
            <h2>
                OUR TEAM
            </h2>

        </div>
        <div class="container">
            <div class="team_card-container layout_padding2">
                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/subigya.jpg')}} style="border-radius:50%;" alt="" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Subigya Mani Bhandari
                        </h5>
                        <p>
                            <br>
                            President
                            <br>
                            <br>

                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/kundan.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Kundan Lamsal
                        </h5>
                        <p>
                            Public Relation Officer/Vice President
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/navaraj.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Navaraj Adhikari
                        </h5>
                        <p>
                            <br>
                            Secretary
                            <br>
                            <br>
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="team_card-container layout_padding2">


                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/chatu.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Rabindra Sharma
                        </h5>
                        <p>
                            Human Resource Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/bishal.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Bishal Baral
                        </h5>
                        <p>
                            <br>
                            Marketing Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/images/team-2.png')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                           Amar Shah
                        </h5>
                        <p>
                            <br>
                          Media Manager
                          <br>
                          <br>
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>











                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/hancy.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                           Bigyan Devkota
                        </h5>
                        <p>
                            <br>
                            Logistics Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





















            </div>




            <div class="team_card-container layout_padding2">


                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/biswo.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Biswo Raj Ghimire
                        </h5>
                        <p>
                            <br>
                            Finance Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/images/team-2.png')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                           Avishek Karki
                        </h5>
                        <p>
                            <br>
                            Project Manager
                            <br>
                            <br>
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/Siddhant.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                           Siddhant Raj Khand
                        </h5>
                        <p>
                            <br>
                          Asst. HR Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>











                <div class="team_card">
                    <div class="team_img-box">
                        <img src={{asset('front/img/committee/sabin.jpg')}} style="border-radius:50%;" alt=""
                            height="240px" />
                    </div>
                    <div class="team_detail-box">
                        <h5>
                           Sabin Neupane
                        </h5>
                        <p>
                            <br>
                            Asst. Marketing Manager
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/facebook-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/twitter-logo-button.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/linkedin.png')}} alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src={{asset('front/images/instagram.png')}} alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





















            </div>

        </div>
    </section>

    <!-- end team section -->





</section>
</div>













 <!-- portfolio section -->
    <section class="portfolio_section layout_padding2">
        <div class="container">
            <h2>
               Gallery
            </h2>

        </div>
        <div class="container layout_padding2-top ">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio_img-box">
                        <img src={{asset('front/images/portfolio-img-1.png')}} alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio_img-box">
                        <img src={{asset('front/images/portfolio-img-2.jpg')}} alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio_img-box">
                        <img src={{asset('front/images/portfolio-img-3.png')}} alt="" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="portfolio_img-box">
                        <img src={{asset('front/images/portfolio-img-4.png')}} alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end portfolio section -->







    <!-- contact section -->

    <!-- end contact section -->

    <!-- why section -->

    <!-- end why section -->

    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="container info_content">
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    About Us
                                </h5>
                                <ul>
                                    <li>
                                        <a href="">
                                            Simes is a non-political
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            organisation of wrc. It was
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            established in 2069.
                                        </a>
                                    </li>

                            </div>
                            <div class="col-md-6">
                                <h5>
                                    Contact Us
                                </h5>
                                <ul>
                                    <li>
                                        <a href="">
                                            wrcsimes@gmail.com
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="info_img-box">
                            <img src={{asset('front/images/map.png')}} alt="" />
                        </div>
                        <div class="d-flex justify-content-end pr-5">
                            <div class="social-box">
                                <a href="">
                                    <img src={{asset('front/images/fb.png')}} alt="" />
                                </a>

                                <a href="">
                                    <img src={{asset('front/images/twitter.png')}} alt="" />
                                </a>
                                <a href="">
                                    <img src={{asset('front/images/linkedin1.png')}} alt="" />
                                </a>
                                <a href="">
                                    <img src={{asset('front/images/instagram1.png')}} alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->
    <hr class="footer_hr" />
    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2020 SIMES

        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src={{asset('front/js/jquery-3.4.1.min.js')}}></script>
    <script type="text/javascript" src={{asset('front/js/bootstrap.js')}}></script>

    <script>
        function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>
</body>

</html>
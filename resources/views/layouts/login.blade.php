<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="Simes admin panel" />
    <meta name="author" content="Ravi Lamichhane" />
    <meta name="keyword" content="Society of innovative Mechanical Engineering Students SIMES" />
    <title>Dashboard</title>
    <title>SIMES</title>

    <link rel="apple-touch-icon" href="{{asset('img/11.png')}}">
    <link rel="icon" href="{{asset('img/11.png')}}">

    <meta name="msapplication-TileColor" content="#ffffff" />

    <meta name="theme-color" content="#ffffff" />

    <!-- Main styles for this application-->
    <link rel="stylesheet" href={{asset('css/coreui.css')}} />

    @yield('css')


</head>























<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">





                        @yield('login-content')

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"
    integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9&#43;4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb" crossorigin="anonymous">
    </script>

<script src={{asset('js/coreui.js')}}></script>

@yield('jsbottom')
</body>

</html>





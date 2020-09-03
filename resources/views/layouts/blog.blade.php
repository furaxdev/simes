<!DOCTYPE html>
<html lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>

    @yield('css')



</head>


<body class=" ">

    @include('inc.navbar')




    @yield('blogsection')





    <Footer class="Footer" style="text-align: center; padding:10px;background: black; ">
        <div class="container">
            <h1 style=" font-family:  Roboto Mono  , monospace; font-size: 20px; text-align: center; padding-bottom:
                10px; color: #f8f9fa;">Copyright &copy; SIMES 2019</h1>
        </div>
    </Footer>

    @yield('js')

</body>

</html>

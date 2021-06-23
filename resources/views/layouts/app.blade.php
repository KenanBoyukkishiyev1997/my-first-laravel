<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    @include('inc.navbar')

    <div class="container">
        @if (Request::is('/'))
            @include('inc.showcase')

        @endif

        <div class="row">
            <div class="col-lg-8 col-md-8">

               @include('inc.messages')

                @yield('content')
            </div>

            <div class="col-lg-4 col-md-4">
                @include('inc.sidebar')
            </div>

        </div>
    </div>

    <footer id='footer' class="text-center">
        by Kenan 2021
    </footer>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

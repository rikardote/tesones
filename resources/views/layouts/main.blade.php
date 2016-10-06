<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery-bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootswatch/cosmo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <section>
        <div class="">
             <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="alert"> @include('flash::message')</div>
                    @include('layouts.errors')
                    @yield('content')
               </div>
            </div>
        </div>
    </section>
</head>
<body>
 <!-- JavaScripts -->
    <script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
    
    <script src="{{ asset('plugins/datepicker/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/datepicker/js/ui.datepicker-es-MX.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>CIAS</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="/assets/images/favicon.ico"
    />

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/icofont.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/flaticon.css" />
    <link rel="stylesheet" href="/assets/css/plugins/font-awesome.min.css" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/assets/css/plugins/apexcharts.css" />
    <link rel="stylesheet" href="/assets/css/plugins/jqvmap.min.css" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />


    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>
    <div id="app">
    </div>


    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/js/plugins/popper.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/plugins/video-playlist.js"></script>
    <script src="/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="/assets/js/plugins/ajax-contact.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="/assets/js/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Physmart Medikal Sistemler Ltd. Şti</title>
    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&display=swap" rel="stylesheet">
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/porto/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/porto/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/porto/css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('/porto/css/skins/skin-corporate-5.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/porto/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('/porto/vendor/modernizr/modernizr.min.js') }}"></script>
    @yield('css')
</head>
<body data-plugin-page-transition>
<div class="body">
    @include('layouts.header')
        @yield('content')
    @include('layouts.footer')
</div>

<!-- Vendor -->
<script src="{{ asset('/porto/vendor/plugins/js/plugins.min.js') }}"></script>
<!-- Theme Base, Components and Settings -->
<script src="{{ asset('/porto/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('/porto/js/custom.js') }}"></script>
<!-- Theme Initialization Files -->
<script src="{{ asset('/porto/js/theme.init.js') }}"></script>
@yield('js')

<script>
    $(".phy-header").css('color', 'black')
</script>

</body>
</html>
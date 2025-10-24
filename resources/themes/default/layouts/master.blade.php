    @php
        use Bangsamu\Theme\Facades\Theme;
    @endphp
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>PT. Meitech Eka Bintan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="PT. Meitech Eka Bintan" name="keywords" />
        <meta content="Engineering and Constructions" name="description" />

        <!-- Favicon -->
        <link href="{{ Theme::asset('assets/favicon/favicon.ico') }}" rel="icon" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ Theme::asset('assets/favicon/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ Theme::asset('assets/favicon/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ Theme::asset('assets/favicon/favicon-16x16.png') }}" />
        <link rel="manifest" href="{{ Theme::asset('assets/favicon/site.webmanifest') }}" />
        <link rel="icon" href="{{ Theme::asset('assets/img/favicon.png') }}" type="image/png"/>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet" />

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/slick/slick.css') }}" rel="stylesheet" />
        <link href="{{ Theme::asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="{{ Theme::asset('assets/css/style.css') }}" rel="stylesheet" />

    </head>

    <body>

    Conten body



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ Theme::asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ Theme::asset('assets/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ Theme::asset('assets/js/main.js') }}"></script>
</body>

</html>


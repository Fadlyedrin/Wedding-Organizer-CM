    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Link css -->
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
        <!-- Link icon tab -->
        <link href="{{ asset('front/img/logo.png') }}" rel="shortcut icon" />
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <!-- cdn Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous" />
        <!-- Icon Bootsrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <!-- AOS on Scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <!-- Animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <!-- Lightbox -->
        <!-- <link href="lightbox/dist/css/lightbox.css" rel="stylesheet" /> -->
        <link href="
https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css
" rel="stylesheet">
        <!-- 1. Owl Carousel min .css -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- 2. Owl Carousel Them .css -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

        @stack('styles')
    </head>

    <body>
        <div id="app">
            @include('layouts.navigation')
            <main>
                @yield('content')
            </main>
        </div>

        @include('layouts.footer')

        @stack('scripts')

        <!-- Jquery cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- 2. owl carousel min .js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Owl Carousel init -->
        <script>
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 4,
                    },
                },
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Js AOS on Scroll -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Initialize AOS -->
        <script>
            AOS.init();
        </script>
        <!-- Lightbox jquery -->
        <!-- <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script> -->
        <script src="
        https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js
        "></script>
    </body>

    </html>

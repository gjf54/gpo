<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/layouts/layout.css') }}">
    <style>
    * { margin: 0; padding: 0; }
    body {
        background-image: url("{{ asset('imgs/layout/background.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
    @font-face {
        font-family: thenies-bigbons;
        src: url("{{ public_path('fonts/thenies-bigbons.ttf') }}");
        text-align: center;
        max-width: 60%;
    }
</style>
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <nav class="d-flex flex-direction-row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="#"><img src="{{ asset('imgs/welcome/discord.jpg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('imgs/welcome/mail.jpg') }}" alt=""></a>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                @if(auth()->user())
                    <a href="#">Profile</a>
                @else
                    <a href="#" class="btn btn-outline-warning">Sign In</a>
                @endif
            </div>
        </nav>
        @yield('content')
        <div id="footer_separator"></div>
        <footer class="d-flex flex-row justify-content-around align-items-center">
            <a href="#">Term Of Use</a>
            <a href="#">Privacy Policy</a>
            <a href="#">About Us</a>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
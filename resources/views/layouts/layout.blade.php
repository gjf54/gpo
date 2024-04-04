<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('imgs/layout/icon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />
    <style>
    * { margin: 0; padding: 0; }

    body {
        margin: 0 auto;
    }

    body {
        position: relative;
    }
    body::before {
        background: url("{{ asset('imgs/layout/background.jpg') }}");
        filter: brightness(0.2);
        background-size: cover;
        content: ' ';
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        will-change: transform;
        z-index: -1;
    }
    @font-face {
        font-family: golden-ticket;
        src: url("{{ asset('fonts/golden-ticket.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: hello-barbie;
        src: url("{{ asset('fonts/hello-barbie-script.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: thenies-bigbons;
        src: url("{{ asset('fonts/thenies-bigbons.ttf') }}") format('truetype');
    }

    @font-face {
        font-family: keroll;
        src: url("{{ asset('fonts/keroll.ttf') }}") format('truetype');
    }
    </style>
    <link rel="stylesheet" href="{{ asset('styles/layouts/layout.css') }}">
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <nav class="d-flex flex-direction-row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="https://discord.gg/FUjeMe4D4X" target="_blank"><img src="{{ asset('imgs/welcome/discord.jpg') }}" alt="Discord"></a>
                <a href="{{ route('contact_form') }}"><img src="{{ asset('imgs/welcome/mail.jpg') }}" alt="Contact Us"></a>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                @if(auth()->user())
                    <a href="#">Profile</a>
                @else
                    <a href="https://discord.gg/FUjeMe4D4X" target="_blank" class="btn btn-outline-warning">Sign In</a>
                @endif
            </div>
        </nav>
        @yield('content')
        <div id="footer_separator"></div>
        <footer class="d-flex flex-row justify-content-around align-items-center">
            <a href="{{ route('terms_of_use') }}">Term Of Use</a>
            <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
            <a href="{{ route('contact_form') }}">Contact Us</a>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    @yield('scripts')
</body>
</html>
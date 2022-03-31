<!DOCTYPE html>
<html lang="en-us">
<head>
    @include('layouts.landing.partials.meta')
    @include('layouts.landing.partials.link')
    @yield('link')
    <style>
        .iframe-container{
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
        }

        .iframe-container > *{
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        /* Demo styles */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .iframe-container{
          margin-bottom: 50px;
          background: #eee;
        }

        div:hover a {
            text-decoration: none;
        }

        .video-container {
            overflow: hidden;
            position: relative;
            width:100%;
        }

        .video-container::after {
            padding-top: 56.25%;
            display: block;
            content: '';
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    @include('layouts.landing.partials.navbar')
    @yield('content')
    @include('layouts.landing.partials.footer')
    <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>
    @include('layouts.landing.partials.script')
    @yield('script')
</body>
</html>
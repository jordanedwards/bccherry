<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    @include('includes.head')

    <style>
        .clients .client {
            max-height: 150px;
            margin: 0 auto 0;
            padding: 10px;
            max-width: none;
            /* overflow: hidden; */
        }
        .color-bg-cta {
            border-top: 2px solid #A21418;
            border-bottom: 2px solid #A21418;
        }
        .client img {
            max-height: 100px;
        }
    </style>

    @yield('header-styles')

</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="400">

<!--=== PAGE PRELOADER ===-->
{{--<div id="page-loader"><span class="page-loader-gif">Loading...</span></div>--}}

@yield('slider')

@include('includes.navbar')

@yield('banner')

@yield('content')

@if ($footer == 'dark')
    @include('includes.footer-dark')
@else
    @include('includes.footer')
@endif

@include('includes.scripts')

<script type="text/javascript" src='/assets/js/jquery.flexslider.min.js'></script>
<script type="text/javascript" src='/assets/js/jquery.stellar.js'></script>
<script type="text/javascript" src="/assets/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints-sticky.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/assets/js/contact.js"></script>

</body>

</html>
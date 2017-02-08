<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    @include('includes.head')

    <style>
        .odd {
            background: #ccc;
        }

        .directory-listing {
            margin: 5px;
            padding: 10px;
        }

        label {
            margin-bottom: 0px;
        }

        .orchardname {
            font-size: 1.4em;
        }
    </style>

    @yield('header-styles')
</head>

<body class="inner-page">

@include('includes.navbar')

@yield('banner')

<section class="white-bg padding-top-bottom">

    <div class="container">

        <div class="row">

            <div id="single-post" class="col-sm-8">

                @yield('content')

            </div>

            @if ($side_menu == 'association')
                @include('includes.association_side_menu')
            @elseif ($side_menu == 'employment')
                @include('includes.employment_side_menu')
            @endif

        </div>

    </div>

</section>

@include('includes.footer-dark')
@include('includes.scripts')

@yield('scripts')

</body>

</html>
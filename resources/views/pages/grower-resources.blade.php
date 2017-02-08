@extends('layouts.main', [
    'title' => 'BC Cherry Association',
    'header' => 'Grower Resources',
    'footer' => 'dark',
])

@section('header-styles')
    <style>
        hr {
            border-top: 1px solid #ccc;
        }
    </style>
@stop

@section('banner')

    <section class="parallax-bg light-typo padding-top-bottom" data-parallax-background="images/cherry2.jpg"
             data-stellar-background-ratio="0.25"
             style="background-image: url(&quot;images/cherry-harvest-dark.jpg&quot;); background-position: 50% 3.5px;">

        <div class="container">

            <br>
            <h2 class="text-center post-title">Grower Resources</h2>
            <br>

        </div>

    </section>

@endsection

@section('content')

    <section class="white-bg padding-top-bottom">
        <div class="container">
            <div class="row">

                <div id="single-post" class="col-sm-10 col-sm-offset-1 content">

                    <header class="post-header">

                        <ul class="post-meta small">
                            <li><i class="fa fa-calendar"></i><a href="#">26 October 2016</a></li>
                            <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry info</a></li>
                        </ul>

                    </header>
                    <div>
                        <div class="pf-content">
                            <p><span class="red-intro">It is currently membership renewal time! More information will be available under this tab in the near future. In the meantime, click below to find the membership form.</span>
                            </p>
                            <p><strong>Download the membership form here: <a
                                            href="BCCA_Membership_Form_16-17.pdf">&raquo; BCCA
                                        Membership Form</a></strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
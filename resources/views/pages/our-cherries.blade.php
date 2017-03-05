@extends('layouts.main', [
    'title' => 'BC Cherry Association',
    'header' => 'Our cherries',
    'footer' => 'dark'
])

@section('header-styles')

@stop

@section('content')

    <section class="parallax-bg light-typo padding-top-bottom" data-parallax-background="images/cherry2.jpg"
             data-stellar-background-ratio="0.25"
             style="background-image: url(&quot;images/cherry-harvest-dark.jpg&quot;); background-position: 50% 3.5px;">

        <div class="container">

            <br>
            <h2 class="text-center post-title">Our Cherries</h2>
            <br>

        </div><!--End container -->

    </section>

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
                            <p><span class="red-intro">All our “S” cherries were bred by the Agri-Food Research Centre (PARC) in Summerland, BC, Canada. They are specially suited to the pristine northern growing area of the Okanagan, Similkameen and Creston Valley in British Columbia. The hot dry summer days and crisp, cool nights provided by lake&nbsp;and mountain breezes produce excellent, large and very firm cherries, with excellent shipping and shelf-life characteristics – gaining a reputation for fine premium quality fruit in over 20 countries.&nbsp;</span>
                            </p>
                            <p><span class="red-intro">Not all varieties grown in BC are listed here. Some producers have specialty crops and other desirable varieties in various quantities.&nbsp;There are also some non-BC varieties also grown in the region (ie Kordia and Regina)</span>
                            </p>

                            <blockquote>
                                @foreach($cherries as $cherry)
                                    <p style="padding-top: 20px;"><span><strong>{{ strtoupper($cherry->name) }}: </strong><em>{{ $cherry->description }}</em></span>
                                    </p>
                                @endforeach

                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
@extends('layouts.post', [
    'title' => $title,
    'footer' => $footer,
    'side_menu' => $side_menu
])

@section('header-styles')
<style>
    .member_name {
        font-size: 1.2em;
    }
    .directory-listing:nth-child(even) {background: #CCC}
    blockquote {
        background: none;
    }
</style>
@stop

@section('content')

    <article class="post-entry">

        <header class="post-header">
            <h2 class="post-title">Who’s Hiring:</h2>

        </header>

        <section class="white-bg">

            <div>

                <div class="row">

                    <div class="col-sm-12 content">

                        <header class="post-header">

                            <ul class="post-meta small">
                                <li><i class="fa fa-calendar"></i><a href="#">{{ $page->updated_at }}</a></li>
                                <li><i class="fa fa-folder-open-o"></i><a href="#">Employment info</a></li>
                            </ul>


                        </header>
                        <div>

                            <div class="content">

                                <div class="pf-content">
                                    {!! $page->content !!}

                                    <div id="wpbdp-view-listings-page" class="wpbdp-view-listings-page wpbdp-page ">

                                        <div class="wpbdp-page-content ">
                                            <div class="listings">

                                                @foreach($members as $member)

                                                    <div class="directory-listing">
                                                        {{--<div class="listing-thumbnail"><a--}}
                                                        {{--href="https://bccherry.com/marketing/member-directory/2508/carcajou-fruit-company-ltd/"--}}
                                                        {{--class=""><img width="150" height="123"--}}
                                                        {{--src="https://bccherry.com/wp-content/uploads/2014/06/sweet-diamond-logo-150x123.png"--}}
                                                        {{--class="wpbdp-thumbnail attachment-wpbdp-thumb wpbdmthumbs wpbdp-excerpt-thumbnail"--}}
                                                        {{--alt="Carcajou Fruit Company Ltd."--}}
                                                        {{--title="Carcajou Fruit Company Ltd."></a>--}}
                                                        {{--</div>--}}
                                                        <div class="listing-details">
                                                            <div class="member_name"><b> {{ $member->name }}</b></div>
                                                            <div class=""><label>Location:</label> {{ $member->fullAddress() }}</div>
                                                            <div class=""><label>Contact:</label> {{ $member->employment_contact }}</div>
                                                            <div class="">
                                                                <label>Website:</label> <a href=""> {{ $member->website }}</a>
                                                            </div>
                                                            <div class="">
                                                                <label>Email:</label> <a href=""> {{ $member->employment_email }}</a>
                                                            </div>
                                                            <div class="">
                                                                <label>Certifications:</label> {{ $member->getCertifications('string') }}
                                                            </div>
                                                            <div class="">
                                                                <label>Harvest:</label> {{ $member->harvest_weeks }}
                                                            </div>
                                                            <div class="">
                                                                <label>Orchard Description:</label>
                                                                @if($member->hasOrchardDescription())

                                                                <blockquote>
                                                                    {!! $member->orchard_description !!}
                                                                </blockquote>

                                                                @endif
                                                            </div>
                                                            <div class="">
                                                                <label>Facilities:</label>
                                                                {{ $member->getFeatures('string') }}
                                                            </div>
                                                            <div class="">
                                                                <label>Employment Positions:</label> {{ $member->positions_available }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach

                                            </div>

                                        </div>

                                    </div>

                                    <div class="printfriendly pf-alignleft"><a href="#" rel="nofollow"
                                                                               onClick="window.print(); return false;"
                                                                               class="noslimstat"><img
                                                    style="border:none;-webkit-box-shadow:none; box-shadow:none;"
                                                    src="http://cdn.printfriendly.com/button-print-gry20.png"
                                                    alt="Print Friendly"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </article>

@endsection

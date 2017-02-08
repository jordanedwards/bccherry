@extends('layouts.post', [
    'title' => 'BC Cherry Association',
    'header' => 'Employment Directory',
    'footer' => 'dark',
    'side_menu' => 'employment'
])

@section('header-styles')

@stop

@section('content')

    <article class="post-entry">

        <header class="post-header">
            <h2 class="post-title">Application Form</h2>

        </header>

        <section class="white-bg">

            <div class="row">

                <div class="col-sm-12 content">

                    <header class="post-header">

                        <ul class="post-meta small">
                            <li><i class="fa fa-calendar"></i><a href="#">31 October 2016</a></li>
                            <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry info</a></li>
                        </ul>

                    </header>
                    <div>
                        <div class="content">
                            <div class="pf-content"><p>Check back in January 2017 for a full listing of those hiring for
                                    next season!</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>

    </article>

@endsection
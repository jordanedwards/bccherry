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
                            <div class="pf-content"><p>Please contact the orchards listed in our <a href="employment-directory">"Who's Hiring"</a> page directly</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>

    </article>

@endsection
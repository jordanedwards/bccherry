@extends('layouts.post', [
    'title' => $title,
    'footer' => $footer,
    'side_menu' => $side_menu
])

<?php // dump($page) ?>

@section('header-styles')

@stop

@section('content')

    <article class="post-entry">

        <header class="post-header">
            <h2 class="post-title">{{ $page->title }}</h2>

        </header>

        <section class="white-bg">

            <div>

                <div class="row">

                    <div class="col-sm-12 content">

                        <header class="post-header">

                            <ul class="post-meta small">
                                <li><i class="fa fa-calendar"></i><a href="#">{{ $page->updated_at }}</a></li>
                                <li><i class="fa fa-folder-open-o"></i><a href="#">Cherry info</a></li>
                            </ul>


                        </header>
                        <div>

                            <div class="pf-content">
                                {!!  $page->content !!}

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </article>

@endsection


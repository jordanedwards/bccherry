@extends('layouts.post', [
    'title' => 'BC Cherry Association',
    'header' => 'Industry News',
    'footer' => 'dark',
    'side_menu' => 'association'
])

@section('header-styles')

@stop

@section('banner')

    <section class=" light-typo padding-top-bottom" data-parallax-background="images/cherry2.jpg"
             data-stellar-background-ratio="0.25"
             style="background-image: url(&quot;images/cherry2.jpg&quot;); background-position: 50% 3.5px;">

        <div class="container">

            <br>
            <h2 class="text-center post-title">Industry News</h2>
            <br>

        </div><!--End container -->

    </section>

@endsection

@section('content')

    <article class="post-entry">

        <header class="post-header">

            <h3><a href="post.php?id=1" title="Read post: Post with single featured image"><i
                            class="fa fa-bookmark fa-lg"></i> We’re heading to Hong Kong Fruit Logistica!</a></h3>

            <ul class="post-meta small">
                <li><i class="fa fa-calendar"></i>29 August 2016</li>
                <li><i class="fa fa-folder-open-o"></i>Cherry Industry News</li>
            </ul>

        </header>

        <p>September 7, 8, 9 you can find us at the trade show. Sukhpaul Bal (President), Beth Cavers (Export Program
            Coordinator) and Erin Carlson (BCCA Coordinator) will be in attendance. Come and ask questions, talk
            cherries and learn about what we do and …</p>

        <a class="post-link" href="post.php?id=1" title="Read post: Post with single featured image">Continue
            Reading</a>

    </article>

    <article class="post-entry">

        <header class="post-header">

            <h3><a href="post.php?id=2" title="Read post: Post with single featured image"><i
                            class="fa fa-bookmark fa-lg"></i> Export to Thailand Application</a></h3>

            <ul class="post-meta small">
                <li><i class="fa fa-calendar"></i>11 May 2016</li>
                <li><i class="fa fa-folder-open-o"></i>Cherry Industry News</li>
            </ul>

        </header>

        <p>May 20th 2016 is the CFIA deadline for registering for Export to Thailand. The BCCA is not involved in the
            implementation of this program. If you have questions please contact CFIA directly
            (martine.korban@inspection.gc.ca) The document(s) that you need to fill ...</p>

        <a class="post-link" href="post.php?id=2" title="Read post: Post with single featured image">Continue
            Reading</a>

    </article>

    <article class="post-entry">

        <header class="post-header">

            <h3><a href="post.php?id=3" title="Read post: Post with single featured image"><i
                            class="fa fa-bookmark fa-lg"></i> Air Cargo Security – Transport Canada Info Sheets</a></h3>

            <ul class="post-meta small">
                <li><i class="fa fa-calendar"></i>5 May 2016</li>
                <li><i class="fa fa-folder-open-o"></i>Cherry Industry News</li>
            </ul>

        </header>

        <p>For further information about the Air Cargo Security regulations, download these links ...</p>

        <a class="post-link" href="post.php?id=3" title="Read post: Post with single featured image">Continue
            Reading</a>

    </article>

    <article class="post-entry">

        <header class="post-header">

            <h3><a href="post.php?id=4" title="Read post: Post with single featured image"><i
                            class="fa fa-bookmark fa-lg"></i> Cherries to California 2016</a></h3>

            <ul class="post-meta small">
                <li><i class="fa fa-calendar"></i>3 May 2016</li>
                <li><i class="fa fa-folder-open-o"></i>Cherry Industry News</li>
            </ul>

        </header>

        <p>Program registration for exporting BC origin cherries to California is now open. The program is no longer run
            by CFIA. The BC Ministry of Agriculture (AGRI) and the BC Cherry Association (BCCA) have taken on the
            responsibility of oversight. In order …</p>

        <a class="post-link" href="post.php?id=4" title="Read post: Post with single featured image">Continue
            Reading</a>

    </article>

    <article class="post-entry">

        <header class="post-header">

            <h3><a href="post.php?id=5" title="Read post: Post with single featured image"><i
                            class="fa fa-bookmark fa-lg"></i> 2016 MRL’s and Minor Use Update</a></h3>

            <ul class="post-meta small">
                <li><i class="fa fa-calendar"></i>29 April 2016</li>
                <li><i class="fa fa-folder-open-o"></i>Cherry Industry News</li>
            </ul>

        </header>

        <p>Thank you to Hugh Philip at IPM2Go for the 2016 MRL updated lists. Please click on the links below to access
            a .pdf file. Cherry International MRLs Introductory Notes_Mar 2016 Cherry Fungicide International MRLs_Mar
            2016 Cherry Herbicide International MRLs …</p>

        <a class="post-link" href="post.php?id=5" title="Read post: Post with single featured image">Continue
            Reading</a>

    </article>

    <!-- Pagination -->

    <nav class="text-center">
        <ul class="pagination">
            <li><a href="#"><span aria-hidden="true"><i class="fa fa-caret-left"></i></span><span class="sr-only">Previous</span></a>
            </li>
            <li class="active"><a href="news.php?page=1">1</a></li>
            <li><a href="news.php?page=2">2</a></li>
            <li><a href="news.php?page=3">3</a></li>
            <li><a href="news.php?page=2"><span aria-hidden="true"><i class="fa fa-caret-right"></i></span><span
                            class="sr-only">Next</span></a></li>
        </ul>
    </nav>
@endsection
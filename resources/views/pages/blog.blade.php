@extends('layouts.index')
@section('content')
<div>
    <a href={{route('blog_form')}}>DASHBOARD BLOG</a>
</div>

<main id="main" class="site-main">

    <section class="site-section-small section-blog">

        <div class="container">

            <div class="text-center">

                <h1 class="section-title-big">Blog</h1>
                <div>
                    <a href={{route('blog_form')}}>DASHBOARD BLOG</a>
                </div>
                <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            </div>

            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->

            <div class="row">

                <div class="col-md-9">

                    <div class="blog-post">
                        @forelse ($table as $item )
                        <a href="blog-post.html">
                            <img class="img-carousel post-img" src={{$item->image}} alt="">
                        </a>

                        <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{$item->titre}}</a></h3>

                            <p class="section-text">{{$item->description}}</p>

                        </div><!-- /.post-content -->
                        @empty
                            <h2>Il n y a rien pour l'instant ici </h2>
                        @endforelse


                    </div><!-- /.blog-post -->

                </div>
            </div>
        </div>

    </section><!-- /.section-blog -->

    <section class="social-networks">

        <div class="container-fluid">

            <div class="row">

                <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>

        </div>

    </section><!-- /.social-networks -->

</main><!-- /.site-main -->


@endsection

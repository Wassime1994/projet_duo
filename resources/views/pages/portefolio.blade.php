@extends('layouts.index')
@section('content')

<main id="main" class="site-main">

    <section class="site-section-small portfolio">

        <div class="container">
            <h1 class="section-title-big text-center">Portfolio</h1>
        </div>

        <div class="container-fluid">
            <div class="row" id="grid">
                <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                    @forelse ( $data as $item )
                    <a class="portfolio-link" href="#">
                        <img src={{asset('/img/portfolio-1.jpg')}} alt="" class="img-carousel">
                        <div class="portfolio-info">
                            <div class="portfolio-info-top">
<<<<<<< HEAD
                                <h3>Business Perfect item</h3>
                            </div><!-- /.portfolio-info-top -->
                            <div class="portfolio-info-bottom">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra dolor eu nunc porttitor sollicitudin. Maecenas dignissim ultricies pharetra.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </section>
=======
                                <h3>{{$item->titre}}</h3>
                            </div><!-- /.portfolio-info-top -->
                            <div class="portfolio-info-bottom">
                                <p>{{$item->description}}</p>
                            </div><!-- /.portfolio-info-bottom -->
                        </div><!-- /.portfolio-info  -->
                    </a>
                    @empty
                      <h2> Rien a afficher pour l'instant</h2>
                    @endforelse
                </div><!-- /.col-lg-fifth  -->

                </div><!-- /.col-lg-fifth  -->

            </div><!-- /#grid -->

        </div>

    </section><!-- /.portfolio -->
>>>>>>> Wassime



</main><!-- /.site-main -->
@endsection

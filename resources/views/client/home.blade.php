@extends('client.layout.template', ['title' => 'Accueil'])

@section('contenu')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="client/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="client/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="client/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>It Software Solution &</p>
                                    <h2>technology</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Watch <br> how it works</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="client/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="client/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="client/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>It Software Solution &</p>
                                    <h2>technology</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Watch <br> how it works</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider__shape-1">
                        <img src="client/images/shapes/main-slider-shape-1.png" alt="">
                    </div>
                    <div class="main-slider__shape-2">
                        <img src="client/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
                    <div class="main-slider__shape-3">
                        <img src="client/images/shapes/main-slider-shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <p>It Software Solution &</p>
                                    <h2>technology</h2>
                                    <div class="main-slider__btn-video-box">
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover more</a>
                                        </div>
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                            <h3 class="main-slider__video-text">Watch <br> how it works</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Get Solutions Start-->
    <section class="get-solutions">
        <div class="container">
            <div class="get-solutions__inner">
                <p class="get-solutions__text">Stop wasting time and money on technology. <a href="about.html">Explore
                        notech</a> and get best solutions.</p>
            </div>
        </div>
    </section>
    <!--Get Solutions End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="row">

                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Feature One Single-->
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="{{ $service->image_url }}" alt="">
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="#">{{ $service->title }}</a></h3>
                                </div>
                                <div class="feature-one__hover-content">
                                    <div class="feature-one__icon">
                                        <span class="icon-innovation"></span>
                                    </div>
                                    <h3 class="feature-one__hover-title"><a href="about.html">{{ $service->title }}</a>
                                    </h3>
                                    <p class="feature-one__hover-text">{!! Str::words($service->description, 10, '...') !!}.</p>
                                    <div class="feature-one__learn-more">
                                        <a href="about.html">Lire Plus<i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Get To Know Start-->
    <section class="get-to-know">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="get-to-know__img-box">
                            <div class="get-to-know__img">
                                <img src="client/images/resources/get-to-know-img-1.jpg" alt="">
                            </div>
                            <div class="get-to-know__small-img">
                                <img src="client/images/resources/get-to-know-small-img.jpg" alt="">
                            </div>
                            <div class="get-to-know__client-box">
                                <h3 class="odometer" data-count="6860">00</h3>
                                <span class="get-to-know__plus">+</span>
                                <p class="get-to-know__client-text">worldwide clients</p>
                            </div>
                            <div class="get-to-know-shape-1"><img src="client/images/shapes/get-to-know-shape-1.png"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="get-to-know__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Get to know us</span>
                                <div class="section-title-shape">
                                    <img src="client/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Easy solutions for your IT problems</h2>
                        </div>
                        <p class="get-to-know__text">Lorem ipsum dolor sit amet, consectetur nod adipisicing elit
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn.</p>
                        <ul class="list-unstyled get-to-know__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Donec scelerisque egestas purus eget fringilla</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Mauris imperdiet non ligula et lobortis.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="get-to-know__it-solutions">
                            <div class="get-to-know__it-solutions-icon">
                                <span class="icon-data-analytics"></span>
                            </div>
                            <div class="get-to-know__it-solutions-text-box">
                                <p class="get-to-know__it-solutions-text">Stop worrying, we take care of your
                                    technology problems.</p>
                            </div>
                        </div>
                        <a href="about.html" class="get-to-know__btn thm-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Get To Know End-->

    <!--Services One Start-->

    <!--Services One End-->

    <!--Business From Start-->
    <section class="business-from">
        <div class="business-from-bg-box">
            <div class="business-from-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/business-from-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="business-from__inner text-center">
                <p class="business-from__sub-title">Business from great idea to</p>
                <h2 class="business-from__title">launching</h2>
                <div class="business-from__btn-box">
                    <a href="{{ route('contact') }}" class="business-from__btn thm-btn">Nous Contacter</a>
                </div>
            </div>
        </div>
    </section>
    <!--Business From End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__inner">
            <div class="testimonial-one-shape float-bob-x">
                <img src="client/images/shapes/testimonial-one-shape.png" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__inner-content">
                    <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                        data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": true,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1
                        },
                        "992": {
                            "items": 1
                        },
                        "1200": {
                            "items": 1
                        }
                    }
                }'>

                        {{-- @foreach ($temoignages as $temoignage)

                       <div class="testimonial-one__single">
                        <div class="testimonial-one__top-content">
                            <div class="testimonial-one__img">
                                <img src="{{$temoignage->iamge_url}}" alt="">
                            </div>
                            <div class="testimonial-one__content">
                                <p class="testimonial-one__text">{!! $temoignage->description !!}</p>
                                <div class="testimonial-one__bottom-content">
                                    <div class="testimonial-one__client-info">
                                        <h5 class="testimonial-one__client-name">{{$temoignage->name}}</h5>
                                        <p class="testimonial-one__client-company">{{$temoignage->profession}}</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <img src="client/images/testimonial/testimonial-1-quote.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                           
                       @endforeach --}}
                       @foreach ($temoignages as $temoignage)
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__top-content">
                                <div class="testimonial-one__img">
                                    <img src="{{$temoignage->iamge_url}}" alt="">
                                </div>
                                <div class="testimonial-one__content">
                                    <p class="testimonial-one__text">{!! Str::words($temoignage->description, 35,'...') !!}</p>
                                    <div class="testimonial-one__bottom-content">
                                        <div class="testimonial-one__client-info">
                                            <h5 class="testimonial-one__client-name">{{$temoignage->name}}</h5>
                                            <p class="testimonial-one__client-company">{{$temoignage->profession}}</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <img src="client/images/testimonial/testimonial-1-quote.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 

                       


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Project One Start-->
    {{-- <section class="project-one">
        <div class="project-one__inner">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Travaux récemment terminés</span>
                        <div class="section-title-shape">
                            <img src="client/images/shapes/section-title-shape.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Nos derniers Projets </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Project One Single-->
                        <div class="project-one__single">
                            <div class="project-one__img">
                                <img src="client/images/project/project-1-1.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="client/images/icon/project-1-icon-1.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Technology</span>
                                <h3 class="project-one__title"><a href="project-details.html">Cloud migration saves
                                        <br> money & protect</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Project One Single-->
                        <div class="project-one__single project-one__single-two">
                            <div class="project-one__img">
                                <img src="client/images/project/project-1-2.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="client/images/icon/project-1-icon-2.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Development</span>
                                <h3 class="project-one__title"><a href="project-details.html">Perfect solution that
                                        your <br> business demands</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Project One Single-->
                        <div class="project-one__single project-one__single-three">
                            <div class="project-one__img">
                                <img src="client/images/project/project-1-3.jpg" alt="">
                                <a href="project-details.html">
                                    <img src="client/images/icon/project-1-icon-3.png" alt="">
                                </a>
                            </div>
                            <div class="project-one__content">
                                <span class="project-one__sub-title">Solution</span>
                                <h3 class="project-one__title"><a href="project-details.html">Trusted by The world's
                                        best <br> organizations</a></h3>
                                <p class="project-one__text">When an unknown printer took a<br> galley to and type
                                    book.</p>
                                <a href="project-details.html" class="thm-btn project-one__btn">View our project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Project One End-->

    <!--Tech Services Start-->
    <section class="tech-services">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tech-services__left">
                        <div class="tech-services__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="tech-services__img">
                                <img src="client/images/resources/tech-services-img-1.jpg" alt="">
                            </div>
                            <div class="tech-services__img-content">
                                <p class="tech-services__img-text">At mi mauris <br> vestibulum <br> eu tellus <br>
                                    tristique <br> sapien</p>
                                <div class="tech-services__learn-more">
                                    <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tech-services__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Stay protected</span>
                                <div class="section-title-shape">
                                    <img src="client/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">Tech services for your business ideas</h2>
                        </div>
                        <p class="tech-services__text">Donec suscipit ante ipsum. Donec convallis quam at tortor
                            hendrerit, ut elementum augue suscipit. Morbi tincidunt risus vel neque convallis
                            pretium non nec justo.</p>
                        <ul class="list-unstyled tech-services__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>We deliver perfect solutions</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="content">
                                    <h4>We work with global brands</h4>
                                    <p>Lorem Ipsum nibh vel velit auctor aliqu aenean sollic.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Tech Services End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url(assets/images/backgrounds/funfact-bg-1-1.png);">
        </div><!-- /.counter-one__bg -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__icon">
                                <span class="icon-work"></span>
                            </div>
                            <h3 class="odometer" data-count="10">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Des années d'expérience</p>
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__icon">
                                <span class="icon-technical-support"></span>
                            </div>
                            <h3 class="odometer" data-count="2800">00</h3>
                            <p class="counter-one__title">Problèmes  résolus</p>
                            {{-- <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p> --}}
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-like"></span>
                            </div>
                            <h3 class="odometer" data-count="200">00</h3>
                            <p class="counter-one__title">Clients satisfaits</p>
                            {{-- <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p> --}}
                        </li>
                        <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="counter-one__icon">
                                <span class="icon-user"></span>
                            </div>
                            <h3 class="odometer" data-count="7">00</h3>
                            <span class="counter-one__plus">+</span>
                            <p class="counter-one__title">Membres de l'équipe professionnelle</p>
                            {{-- <p class="counter-one__text">Lorem ipsum is simply free text used by refring.</p> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->



    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Ce qui se passe</span>
                    <div class="section-title-shape">
                        <img src="client/images/shapes/section-title-shape.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Articles de blog</h2>
            </div>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One single-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ $article->image_url }}" alt="">
                                <div class="blog-one__tag">
                                    <p>{{ $article->category->title }}</p>
                                </div>
                                <a
                                    href="{{ route('blog.detail', ['id' => $article->id, 'slug' => Str::slug($article->title, '-')]) }}">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-clock"></i>
                                            {{ $article->created_at->isoFormat('D MMM, YYYY') }}</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-user-circle"></i> by Admin</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title">
                                    <a
                                        href="{{ route('blog.detail', ['id' => $article->id, 'slug' => Str::slug($article->title, '-')]) }}">{{ Str::words($article->title, 4, '...') }}</a>
                                </h3>
                                <div class="blog-one__bottom">
                                    <a
                                        href="{{ route('blog.detail', ['id' => $article->id, 'slug' => Str::slug($article->title, '-')]) }}">Lire
                                        Plus<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
    <!--Blog One End-->


@endsection

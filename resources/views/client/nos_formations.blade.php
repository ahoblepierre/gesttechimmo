@extends("client.layout.template", ['title'=>'Nos Formations'])

@section('contenu')



   
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Accueil</a></li>
                        <li><span>/</span></li>
                        <li class="active">Nos Formations</li>
                    </ul>
                    <h2>Nos formations</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Feature One Single-->
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-1.jpg" alt="">
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="about.html">Manage IT services</a></h3>
                                </div>
                                <div class="feature-one__hover-content">
                                    <div class="feature-one__icon">
                                        <span class="icon-system"></span>
                                    </div>
                                    <h3 class="feature-one__hover-title"><a href="about.html">Manage IT services</a>
                                    </h3>
                                    <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                        available some.</p>
                                    <div class="feature-one__learn-more">
                                        <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--Feature One Single-->
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-2.jpg" alt="">
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="about.html">Cyber security</a></h3>
                                </div>
                                <div class="feature-one__hover-content">
                                    <div class="feature-one__icon">
                                        <span class="icon-cyber"></span>
                                    </div>
                                    <h3 class="feature-one__hover-title"><a href="about.html">Cyber securitys</a></h3>
                                    <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                        available some.</p>
                                    <div class="feature-one__learn-more">
                                        <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--Feature One Single-->
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="assets/images/resources/feature-1-3.jpg" alt="">
                                <div class="feature-one__title-box">
                                    <h3 class="feature-one__title"><a href="about.html">Digital experience</a></h3>
                                </div>
                                <div class="feature-one__hover-content">
                                    <div class="feature-one__icon">
                                        <span class="icon-application"></span>
                                    </div>
                                    <h3 class="feature-one__hover-title"><a href="about.html">Digital experience</a>
                                    </h3>
                                    <p class="feature-one__hover-text">There are many lipsum of in pass sages of
                                        available some.</p>
                                    <div class="feature-one__learn-more">
                                        <a href="about.html">Learn more<i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->


        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our client feedbacks</span>
                        <div class="section-title-shape">
                            <img src="assets/images/shapes/section-title-shape.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">What they’re talking?</h2>
                </div>
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__icon">
                                <img src="assets/images/icon/testimonial-two-icon.png" alt="">
                            </div>
                            <p class="testimonial-two__text">Lorem ipsum is simply free text dolor not sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt labore et dolore
                                text.</p>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                                </div>
                                <h5 class="testimonial-two__client-name">Kevin martin</h5>
                                <p class="testimonial-two__client-title">Customer</p>
                            </div>
                            <div class="testimonial-two-shape">
                                <img src="assets/images/shapes/testimonial-two-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__icon">
                                <img src="assets/images/icon/testimonial-two-icon.png" alt="">
                            </div>
                            <p class="testimonial-two__text">Lorem ipsum is simply free text dolor not sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt labore et dolore
                                text.</p>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-2.jpg" alt="">
                                </div>
                                <h5 class="testimonial-two__client-name">Jessica brown</h5>
                                <p class="testimonial-two__client-title">Customer</p>
                            </div>
                            <div class="testimonial-two-shape">
                                <img src="assets/images/shapes/testimonial-two-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__icon">
                                <img src="assets/images/icon/testimonial-two-icon.png" alt="">
                            </div>
                            <p class="testimonial-two__text">Lorem ipsum is simply free text dolor not sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt labore et dolore
                                text.</p>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="assets/images/testimonial/testimonial-2-3.jpg" alt="">
                                </div>
                                <h5 class="testimonial-two__client-name">Mike hardson</h5>
                                <p class="testimonial-two__client-title">Customer</p>
                            </div>
                            <div class="testimonial-two-shape">
                                <img src="assets/images/shapes/testimonial-two-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Brand Two Start-->
        <section class="brand-one brand-four">
            <div class="container">
                <div class="brand-four__inner">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 5
                        }
                    }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assets/images/brand/brand-1-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End-->

    
@endsection
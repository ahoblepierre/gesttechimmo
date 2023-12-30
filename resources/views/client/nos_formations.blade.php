@extends("client.layout.template", ['title'=>'Nos Formations'])

@section('contenu')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('custom/banniere.jpg')}})">
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

                    @foreach ($formations as $formation)
                    
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Feature One Single-->
                            <div class="feature-one__single">
                                <div class="feature-one__img">
                                    <img src="{{$formation->image_url}}" alt="">
                                    <div class="feature-one__title-box">
                                        <h3 class="feature-one__title"><a href="{{route('detail.formations',['slug'=>$formation->title, 'id'=>$formation->id])}}">{{$formation->title}}</a></h3>
                                    </div>
                                    <div class="feature-one__hover-content">
                                        {{-- <div class="feature-one__icon">
                                            <span class="icon-system"></span>
                                        </div> --}}
                                        <h3 class="feature-one__hover-title"><a href="{{route('detail.formations',['slug'=>$formation->title, 'id'=>$formation->id])}}">{{$formation->title}}</a>
                                        </h3>
                                        <p class="feature-one__hover-text">{!! Str::words( $formation->description,10,'...') !!}</p>
                                        <div class="feature-one__learn-more">
                                            <a href="{{route('detail.formations',['slug'=>\Str::slug($formation->title,'-'), 'id'=>$formation->id])}}">Lire plus<i class="fa fa-long-arrow-alt-right"></i></a>
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


        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Nos retours clients</span>
                        <div class="section-title-shape">
                            <img src="assets/images/shapes/section-title-shape.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">De quoi parlent-ils ?</h2>
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

                @foreach ($temoignages as $temoignage)
                    <div class="testimonial-two__single">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__icon">
                                <img src="assets/images/icon/testimonial-two-icon.png" alt="">
                            </div>{{Str::words($temoignage->description,20,'...')}}</p>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{$temoignage->iamge_url}}" alt="">
                                </div>
                                <h5 class="testimonial-two__client-name">{{$temoignage->name}}</h5>
                                <p class="testimonial-two__client-title">{{$temoignage->profession}}</p>
                            </div>
                            <div class="testimonial-two-shape">
                                <img src="assets/images/shapes/testimonial-two-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach


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

   

    
@endsection
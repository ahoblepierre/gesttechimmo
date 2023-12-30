@extends("client.layout.template",['title'=>'Nos Service'])

@section('style')
<style>

</style>
    
@endsection
@section('contenu')

   
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('custom/banniere.jpg')}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Accueil</a></li>
                    <li><span>/</span></li>
                    <li class="active"> Services</li>
                </ul>
                <h2>Nos Services</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Welcome Two Start-->
    <section class="welcome-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-two__left">
                        <div class="welcome-two__img-box">
                            <div class="welcome-two__shape-1"></div>
                            <div class="welcome-two__shape-2"></div>
                            <div class="welcome-two__shape-3"></div>
                            <div class="welcome-two__shape-4">
                                <img src="assets/images/shapes/welcome-two-shape-4.png" alt="">
                            </div>
                            <div class="welcome-two__img">
                                <img src="assets/images/resources/welcome-two-img-1.png" alt="">
                                <div class="welcome-two__shadow">
                                    <img src="assets/images/shapes/welcome-two__shadow.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-two__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Nos Services </span>
                                <div class="section-title-shape">
                                    <img src="assets/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                           
                        </div>
                        <p class="welcome-two__text">Chez Gestechimmo, nous offrons une gamme complète de services de gestion technique immobilière pour répondre aux besoins variés de nos clients. Nos services comprennent</p>
                        <ul class="list-unstyled get-to-know__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Gestion Technique </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Les états de lieux</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p> Aménagement Intérieur.</p>
                                </div>
                            </li>
                        </ul>
                        {{-- <a href="about.html" class="welcome-two__btn thm-btn">Discover more</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    
            <!--Delivering IT Start-->
            <section class="delivering-it delivering-it-two">
                <div class="container">
                    <div class="delivering-it__bottom">
                        <div class="row">
                            @foreach ($services as $service)
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                <!--Delivering IT Single-->
                                <div class="delivering-it__single">
                                    <div class="delivering-it__img">
                                        <img src="{{$service->image_url}}" alt="">
                                    </div>
                                    <div class="delivering-it__content">
                                        <h5 class="delivering-it__content-title">{{$service->title}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="blog-pagination d-flex justify-content-center align-items-center">
                                {{ $services->links()}}
                            </div>

                    
                        </div>
                    </div>
                </div>
            </section>

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
                    <a href="contact.html" class="business-from__btn thm-btn">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
    <!--Business From End-->

    <!--Tech Services Start-->
    <section class="tech-services tech-services-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tech-services__left">
                        <div class="tech-services__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="tech-services__img">
                                <img src="assets/images/resources/tech-services-img-1.jpg" alt="">
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
                                    <img src="assets/images/shapes/section-title-shape.png" alt="">
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

 


    
@endsection
@extends("client.layout.template", ['title'=>'A Propos de nous'])

@section('contenu')




<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('custom/banniere.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Accueil</a></li>
                <li><span>/</span></li>
                <li class="active">A Propos</li>
            </ul>
            <h2>A Propos </h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--We Help Start-->
<section class="we-help">
    <div class="container">
        <div class="we-help__inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="we-help__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Qui sommes-nous ?</span>
                                <div class="section-title-shape">
                                    <img src="assets/images/shapes/section-title-shape.png" alt="">
                                </div>
                            </div>
                            {{-- <h2 class="section-title__title">We help your every business need</h2> --}}
                        </div>
                        <p class="we-help__text-1">Gestechimmo est une entreprise dédiée à la gestion technique immobilière, façonnée par une passion pour l'innovation et un engagement envers l'excellence. Notre parcours a débuté en 2021, et depuis lors, nous avons évolué pour devenir des experts reconnus dans notre domaine.</p>
                        <span class="section-title__tagline">Notre Mission</span>

                        <p class="we-help__text-2">Nous nous engageons à offrir des solutions de gestion technique immobilière qui dépassent les attentes de nos clients. Notre mission est de simplifier les processus, d'optimiser les performances et de créer des environnements immobiliers durables.</p>
             
                        <p class="we-help__text-2">Au cœur de Gestechimmo se trouvent l'intégrité, l'innovation et la satisfaction du client. Nous croyons en la transparence, en la recherche constante de solutions novatrices et en la création de partenariats durables avec nos clients.</p>


                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="we-help__right">
                        <div class="we-help__img wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                            <img src="assets/images/resources/we-help__img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--We Help End-->

<!--Team Page Start-->
<section class="team-page">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Rencontrer l'équipe</span>
                <div class="section-title-shape">
                    <img src="assets/images/shapes/section-title-shape.png" alt="">
                </div>
            </div>
            <h2 class="section-title__title">Notre équipe</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-1.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Kevin martin</a></h4>
                            <p class="team-one__title">Accountant</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-2.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Jessica brown</a></h4>
                            <p class="team-one__title">Co founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-3.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">David cooper</a></h4>
                            <p class="team-one__title">Senior assistant</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-4.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Sarah albert</a></h4>
                            <p class="team-one__title">Gernel manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-5.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Mike hardson</a></h4>
                            <p class="team-one__title">Board director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="assets/images/team/team-1-6.jpg" alt="">
                        <ul class="list-unstyled team-one__social">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-one__content-box">
                        <div class="team-one__content">
                            <div class="team-one-shape">
                                <img src="assets/images/shapes/team-one-shape.png" alt="">
                            </div>
                            <h4 class="team-one__name"><a href="team-details.html">Christine eve</a></h4>
                            <p class="team-one__title">Voice president</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Page End-->
    
@endsection
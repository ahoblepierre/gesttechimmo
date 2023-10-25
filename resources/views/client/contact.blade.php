@extends("client.layout.template",['title'=>'Nous Contater'])

@section('contenu')



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Contact</li>
                    </ul>
                    <h2>Contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->




         <!--Contact Details Start-->
         <section class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-details__img">
                            <img src="assets/images/resources/contact-details-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact with us</span>
                                    <div class="section-title-shape">
                                        <img src="assets/images/shapes/section-title-shape.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get in touch with us</h2>
                            </div>
                            <p class="contact-details__text">Lorem ipsum dolor sit amet, consectetur notted adipis not icing elit sed do eiusmod tempor incididunt.</p>
                            <ul class="list-unstyled contact-details__info">
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="text">
                                        <p>Have any question?</p>
                                        <a href="tel:980009850"><span>Free</span> +98 (000)-9850</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p>Write email</p>
                                        <a href="mailto:needhelp@notech.com">needhelp@notech.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>Visit anytime</p>
                                        <span>66 broklyn golden street. New York</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->



          <!--Contact Page Start-->
          <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Envoyer nous un email</span>
                        <div class="section-title-shape">
                            <img src="assets/images/shapes/section-title-shape.png" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Contactez-nous</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="{{route('client.contact')}}" method="POST" class="comment-one__form" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Votre nom" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder=" Address Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Numéro de Téléphone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Sujet" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Rédiger votre méssage"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Envoyer votre message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->





    
@endsection
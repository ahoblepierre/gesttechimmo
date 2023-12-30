@extends("client.layout.template",['title'=>'Nous Contater'])

@section('contenu')



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('custom/banniere.jpg')}})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Contact</li>
                    </ul>
                    <h2>Nous Contacter</h2>
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
                            <img src="{{asset('custom/contact.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Nous Contacter</span>
                                    <div class="section-title-shape">
                                        <img src="assets/images/shapes/section-title-shape.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="contact-details__text">
                                Que vous ayez des questions sur nos services, besoin de conseils personnalisés ou simplement l'envie de discuter de vos projets immobiliers, notre équipe est là pour vous accompagner. Nous sommes impatients d'entendre parler de vous et de trouver des solutions adaptées à vos besoins.
                            </p>

                            <p class="contact-details__text">
                                N'hésitez pas à nous contacter par le biais du formulaire ci-dessous ou en utilisant les coordonnées fournies. Chez Gestechimmo, nous croyons en la puissance des conversations pour construire des relations solides. Nous sommes prêts à vous écouter et à travailler ensemble pour atteindre vos objectifs immobiliers.
                            </p>
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
                            <form action="{{route('client.contact')}}" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate">
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
 <!--Site Footer Start-->
 <footer class="site-footer">
    <div class="site-footer-bg-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(assets/images/shapes/site-footer-shape-1.png);">
    </div>
    <div class="site-footer-bg-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(assets/images/shapes/site-footer-shape-2.png);">
    </div>

    <div class="site-footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="client/images/resources/footer-logo.png" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">
                                Abonnez-vous pour nos prochains derniers articles et sources d'actualités
                            </p>
                        </div>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Adresse Email" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><img
                                        src="{{asset('client/images/icon/footer-widget-newsletter-send-icon.png')}}"
                                        alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Liens </h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="{{route('apropos')}}">A Propos de nous</a></li>
                            <li><a href="{{route('nosservices')}}">Nos services</a></li>
                            <li><a href="{{route('nosformations')}}">Nos Formations</a></li>
                            <li><a href="{{route('blog')}}">Nos articles</a></li>
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact clearfix">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="footer-widget__contact-list list-unstyled clearfix">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:980009850">+98 (000)-9850</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>66 broklyn golden street line <br> new york</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__social-box clearfix">
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright {{now()->format('Y')}} by <a
                                href="#">Pierre AHOBLE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
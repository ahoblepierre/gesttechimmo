@extends("client.layout.template", ['title'=>'Blog - Nos articles'])

@section('contenu')


<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Blog</li>
            </ul>
            <h2>Blog posts</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-one">
    <div class="container">
        <div class="row">

            @foreach ($articles as $article)
                
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Blog One single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="{{$article->image_url}}" alt="">
                        <div class="blog-one__tag">
                            <p>{{$article->category->title}}</p>
                        </div>
                        <a href="{{route("blog.detail",['id'=>$article->id, 'slug'=>Str::slug($article->title,'-')])}}">
                            <span class="blog-one__plus"></span>
                        </a>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="{{route("blog.detail",['id'=>$article->id, 'slug'=>Str::slug($article->title,'-')])}}"><i class="far fa-clock"></i> {{$article->created_at->isoFormat('D MMM, YYYY')}}</a>
                            </li>
                            <li><a href="{{route("blog.detail",['id'=>$article->id, 'slug'=>Str::slug($article->title,'-')])}}"><i class="far fa-user-circle"></i> by Admin</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="{{route("blog.detail",['id'=>$article->id, 'slug'=>Str::slug($article->title,'-')])}}">{{Str::words($article->title,3,'...')}}</a>
                        </h3>
                        <div class="blog-one__bottom">
                            <a href="{{route("blog.detail",['id'=>$article->id, 'slug'=>Str::slug($article->title,'-')])}}">Lire Plus<i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="blog-pagination d-flex justify-content-center align-items-center">
            {{ $articles->links()}}
        </div>
    </div>
</section>
<!--Blog Page End-->


<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer-bg-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(assets/images/shapes/site-footer-shape-1.png);">
    </div>
    <div class="site-footer-bg-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url(assets/images/shapes/site-footer-shape-2.png);">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__top-left">
                    <div class="site-footer__top-icon">
                        <span class="icon-artificial-intelligence"></span>
                    </div>
                    <h3 class="site-footer__top-title">Helping you overcome your technology challenges</h3>
                </div>
                <div class="site-footer__top-right">
                    <a href="about.html" class="thm-btn site-footer__btn">Discover more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">Subsrcibe for our upcoming latest articles and
                                news resources</p>
                        </div>
                        <form class="footer-widget__newsletter-form">
                            <div class="footer-widget__newsletter-input-box">
                                <input type="email" placeholder="Email address" name="email">
                                <button type="submit" class="footer-widget__newsletter-btn"><img
                                        src="assets/images/icon/footer-widget-newsletter-send-icon.png"
                                        alt=""></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="team.html">Meet our team</a></li>
                            <li><a href="blog.html">News & media</a></li>
                            <li><a href="projects-page-1.html">Our projects</a></li>
                            <li><a href="contact.html">Contacts</a></li>
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
                        <p class="site-footer__bottom-text">© All Copyright 2022 by <a
                                href="#">Layerdrops.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

    <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png"
                width="155" alt="" /></a>
    </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->

    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:needhelp@packageName__.com">needhelp@notech.com</a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:666-888-0000">666 888 0000</a>
        </li>
    </ul><!-- /.mobile-nav__contact -->
    <div class="mobile-nav__top">
        <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div><!-- /.mobile-nav__social -->
    </div><!-- /.mobile-nav__top -->



</div>
<!-- /.mobile-nav__content -->


    
@endsection

<header class="main-header main-header--one clearfix">
    <div class="main-header__top">
        <div class="main-header__top-inner clearfix">
            <div class="main-header__top-left">
                <ul class="list-unstyled main-header__top-address">
                    <li>
                        <div class="icon">
                            <span class="icon-pin" ></span>
                        </div>
                        <div class="text">
                            <p style="font-size: 15px!important;font-weight: 500!important">66 broklyn golden street line. New York</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-email"></span>
                        </div>
                        <div class="text">
                            <p style="font-size: 15px!important;font-weight: 500!important"><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main-header__top-right">
                <div class="main-header__top-right-content">
                    <ul class="list-unstyled main-header__top-right-menu">
                        <li><a style="font-size: 15px!important;font-weight: 500!important" href="{{route('apropos')}}">A propos</a></li>
                        <li><a style="font-size: 15px!important;font-weight: 500!important" href="{{route('nosservices')}}">Nos Services</a></li>
                        <li><a style="font-size: 15px!important;font-weight: 500!important" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <div class="main-header__top-right-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">

            <div class="main-menu__left main-menu__left--two">
                <div class="main-menu__logo">
                    <a href="/">
                        <img class="logo-dark" src="client/images/resources/logo-1.png" alt="">
                        <img class="logo-light" src="client/images/resources/logo-2.png" alt="">
                    </a>
                </div>
                <div class="main-menu__main-menu-box main-menu__main-menu-box--two">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                    <ul class="main-menu__list">
                        <li class="{{request()->routeIs('home')?'current':''}}"><a href="{{route("home")}}">Accueil</a></li>

                        <li class="{{request()->routeIs('apropos')?'current':''}}"><a href="{{route("apropos")}}">A propos</a></li>

                        <li class="{{request()->routeIs('nosservices')?'current':''}}"><a href="{{route("nosservices")}}">Nos Services</a></li>

                        <li class="{{request()->routeIs('nosformations')?'current':''}}"><a href="{{route("nosformations")}}">Nos Formations</a></li>

                        <li class="{{request()->routeIs('blog')|| request()->routeIs('blog.detail') ?'current':''}}" ><a href="{{route("blog")}}">Blog</a></li>

                        <li class="{{request()->routeIs('contact')?'current':''}}"><a href="{{route("contact")}}">Contact</a></li>

                
                        
                        {{-- <li class="dropdown">
                            <a href="#">Projects</a>
                            <ul>
                                <li><a href="projects-page-1.html">Project 01</a></li>
                                <li><a href="project-carousel-1.html">Project Carousel 01</a></li>
                                <li><a href="projects-page-2.html">Project 02</a></li>
                                <li><a href="project-carousel-2.html">Project Carousel 02</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="products.html">Shop</a>
                            <ul>
                                <li><a href="products.html">Shop</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                <li><a href="blog-sidebar.html">Blog Sidebar Right</a></li>
                                <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                       
                    </ul>
                </div>
            </div>

            <div class="main-menu__right">
                <div class="main-menu__search-call">
                    <div class="main-menu__call">
                        <div class="main-menu__call-icon">
                            <img src="client/images/icon/main-menu-icon-comment.png" alt="">
                        </div>
                        <div class="main-menu__call-number">
                            <p>Avez-vous une question?</p>
                            <h5><a href="tel:926668880000"> +98 (000)-9850</a></h5>
                        </div>
                    </div>
                    <div class="main-menu__search-box">
                        <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
@extends("client.layout.template", ['title'=>'Detail blog'])

@section('contenu')

 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Blog Details</li>
            </ul>
            <h2>Blog Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Sidebar Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img src="{{asset('assets/images/blog/blog-details-img-1.jpg')}}" alt="">
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="blog-details.html"><i class="far fa-clock"></i> 8 Jan, 2022</a>
                            </li>
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Layerdrops</a></li>
                        </ul>
                        <h3 class="blog-details__title">Easy to use software new innovation</h3>
                        <p class="blog-details__text-1">There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor. Nulla a erat et orci mattis auctor.</p>
                        <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                    </div>
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <span>Tags</span>
                            <a href="#">Technology</a>
                            <a href="#">Software</a>
                        </p>
                        <div class="blog-details__social-list">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                   

                    <div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{asset('assets/images/blog/comment-1-1.jpg')}}" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Kevin martin</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                            </div>
                        </div>
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{asset('assets/images/blog/comment-1-2.jpg')}}" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3>Saral albertt</h3>
                                <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <form action="https://layerdrops.com/notechhtml/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box text-message-box">
                                        <textarea name="message" placeholder="Write comment"></textarea>
                                    </div>
                                    <div class="comment-form__btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Derniers postes</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset('assets/images/blog/lp-1-1.jpg')}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.html">Can you still get tech benefits?</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset('assets/images/blog/lp-1-2.jpg')}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.html">Promoting the Rights of Children</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset('assets/images/blog/lp-1-3.jpg')}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="far fa-clock"></i> 8 Jan, 2022</span>
                                        <a href="blog-details.html">Bring to the table win-win survival strategies</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.html">Technology <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li class="active"><a href="blog-details.html">Software <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.html">Innovations <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.html">Development <span class="fa fa-long-arrow-alt-right"></span></a></li>
                            <li><a href="blog-details.html">Web Design <span class="fa fa-long-arrow-alt-right"></span></a></li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Technology</a>
                            <a href="#">Software</a>
                            <a href="#">IT</a>
                            <a href="#">Web Development</a>
                            <a href="#">Innovation</a>
                            <a href="#">Solution</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Sidebar End-->

    
@endsection
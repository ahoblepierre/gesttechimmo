@extends('client.layout.template', ['title' => 'Detail blog'])

@section('contenu')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Accueil</a></li>
                    <li><span>/</span></li>
                    <li class="active">Blog Details</li>
                </ul>
                <h2>{{ $article->title }}</h2>
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
                            <img src="{{ $article->image_url }}" alt="">
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="blog-details.html"><i class="far fa-clock"></i>
                                        {{ $article->created_at->isoFormat('D, MMM, YYYY') }}</a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin</a></li>
                            </ul>
                            <h3 class="blog-details__title">{{ $article->title }} </h3>
                            <p class="blog-details__text-1">{!! $article->description !!}</p>
                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                {{-- (<span>Tags</span>
                                <a href="#">Technology</a>
                                <a href="#">Software</a>) --}}
                            </p>
                            <div class="blog-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>


                        <div class="comment-one">
                            <h3 class="comment-one__title">{{count($article->commentaire)}} Comment(s)</h3>


                            @foreach ($article->commentaire->reverse() as $commentaire)
                                <div class="comment-one__single">
                                    {{-- <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="" width="100px">
                                    </div> --}}
                                    <div class="comment-one__content">
                                        <h3>{{$commentaire->name}}</h3>
                                        <p>{{$commentaire->commentaire}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Laisser un Commentaire</h3>
                            <form action="{{ route('blog.commentaire') }}" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                @csrf
                                <input type="hidden" value="{{ $article->id }}" name="article_id">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Votre Nom" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Address Email " name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Écrire un commentaire"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Envvoyer un
                                                commentaire</button>
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
                            <form action="{{route('blog.search')}}" class="sidebar__search-form">
                                @csrf
                                <input type="search" placeholder="Rechercher ici ..." name="search">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Derniers postes</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($derniersPostes as $derniersPoste)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ $derniersPoste->image_url }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i class="far fa-clock"></i>
                                                    {{ $derniersPoste->created_at->isoFormat('D, MMM, YYYY') }}</span>
                                                <a
                                                    href="{{ route('blog.detail', ['id' => $derniersPoste->id, 'slug' => Str::slug($derniersPoste->title, '-')]) }}">{{ $derniersPoste->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="{{ $category->id === $article->article_categorie_id ? 'active' : '' }}"><a
                                            href="#">{{ $category->title }} <span
                                                class="fa fa-long-arrow-alt-right"></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <h3 class="sidebar__title">Tags </h3>
                            <div class="sidebar__tags-list">
                                @foreach ($article->tags() as $item)
                                    <a href="#">{{$item}}</a>
                                @endforeach
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Sidebar End-->
@endsection

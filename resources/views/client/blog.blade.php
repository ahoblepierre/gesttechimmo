@extends("client.layout.template", ['title'=>'Blog - Nos articles'])

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



</div><!-- /.page-wrapper -->



    
@endsection
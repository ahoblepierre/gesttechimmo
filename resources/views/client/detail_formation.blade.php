@extends("client.layout.template", ['title'=>'Detail Formations'])

@section('contenu')


<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('custom/banniere.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Accueil</a></li>
                <li><span>/</span></li>
                <li><a href="{{route("nosformations")}}">Formation</a></li>
                <li><span>/</span></li>
                <li class="active">{{$formation->title}}</li>
            </ul>
            <h2>{{$formation->title}}</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

   <!--Project Details Start-->
   <section class="project-details" style="margin-bottom: 20px">
    <div class="container">
        <div class="project-details__top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-details__img-box">
                        <img src="{{$formation->image_url}}" alt="" height="528px" width="1170">
                       
                    </div>
                    <div class="project-details__content-one">
                        <h3 class="project-details__content-one-title">{{$formation->title}}</h3>
                        <p class="project-details__content-one-text mb-10" >{!! $formation->description !!}</p>
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--Project Details End-->



  {{-- <!--Service Details Start-->
  <section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__left">
                    <div class="service-details__service">
                        <h3 class="service-details__title">Services</h3>
                        <ul class="service-details__service-list list-unstyled">
                            <li class="active"><a href="product-development.html">Product development <span class="fa fa-long-arrow-alt-right"></span></a></li>

                            <li><a href="ui-ux-designing.html">UI/UX designing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                            <li><a href="digital-marketing.html">Digital marketing <span class="fa fa-long-arrow-alt-right"></span></a></li>

                            <li><a href="content-management.html">Content management <span class="fa fa-long-arrow-alt-right"></span></a></li>

                            <li><a href="data-analysis.html">Data analysis <span class="fa fa-long-arrow-alt-right"></span></a></li>
                        </ul>
                    </div>

                    
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="{{asset($formation->image_url)}}" alt="">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__content-title">{{$formation->title}}</h3>
                        <p class="service-details__text-1"> {!! $formation->description !!} </p>
                      </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End--> --}}
    
@endsection
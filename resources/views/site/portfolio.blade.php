@extends('site.template.index')
@section('content')

    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner  ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase">{{trans('lang.projects')}}</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}"> HOME</a></li>
                            <li><a 
                            @if (Session::get('local') == 'ar') href="{{url($spec_proj->sub_cat->cat->ar_custom_url)}}" @else  href="{{url($spec_proj->sub_cat->cat->custom_url)}}" @endif
                            
                             >
                                    @if (Session::get('local') == 'ar'){{$spec_proj->sub_cat->cat->ar_name}} @else {{$spec_proj->sub_cat->cat->name}} @endif
                                </a></li>
                            <li ><a 
                             @if (Session::get('local') == 'ar') href="{{url($spec_proj->sub_cat->cat->ar_custom_url .'/'.$spec_proj->sub_cat->ar_custom_url)}}" @else  href="{{url($spec_proj->sub_cat->cat->custom_url . '/' . $spec_proj->sub_cat->custom_url)}}" @endif
                            >  @if (Session::get('local') == 'ar'){{$spec_proj->sub_cat->ar_name}} @else {{$spec_proj->sub_cat->name}} @endif</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="stretch">
                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->blogslider)}}" alt="image description">
            </div>
        </header>
        <!-- port-single -->
        <section class="port-single padding-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="dashboard"><i class="fa fa-th"></i></a>
                        <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="row text-upercase">
                    <div class="col-xs-12 text-center">
                        <h2> @if (Session::get('local') == 'ar'){{$spec_proj->ar_name}} @else {{$spec_proj->name}} @endif</h2>
                        <p>@if (Session::get('local') == 'ar'){{$spec_proj->sub_cat->ar_name}} @else {{$spec_proj->sub_cat->name}} @endif</p>
                    </div>
                </div>
                <!-- beans-slider -->
                <div class="beans-slider" data-rotate="true">
                    <div class="beans-mask">
                        <div class="beans-slideset">
                            <!-- beans-slide -->
                            @foreach($spec_proj->galary as $galary)
                            <div style="width: 1200px; height: 800px;" class="beans-slide">
                                <div class="stretch">
                                    <img src="{{asset('admin-assets/images/portfolio/'.$galary->photo)}}" alt="image description">
                                </div>
                            </div>
                            @endforeach
                            <!-- beans-slide -->

                            <!-- beans-slide -->

                        </div>
                    </div>
                    <div class="arrow-holder">
                        <div class="col-xs-12">
                            <a href="#" class="btn-prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="btn-next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <h3>{{trans('lang.aboutproject')}}</h3>
                        <p>
                            @if (Session::get('local') == 'ar'){!!  $spec_proj->ar_name!!} @else {!!  $spec_proj->name!!} @endif
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3>{{trans('lang.infoproject')}}</h3>
                        <ul>
                            <li>
                                <i class="fa fa-user"></i> <strong>{{trans('lang.clientname')}}</strong>  @if (Session::get('local') == 'ar'){!!  $spec_proj->ar_client_name!!} @else {!!  $spec_proj->client_name!!} @endif
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i> <strong>{{trans('lang.publishdate')}} </strong> {{ date('M,d,Y',strtotime($spec_proj->created_at)) }}
                            </li>
                            <li>
                                <i class="fa fa-tags"></i> <strong>{{trans('lang.category')}}:</strong> <a @if (Session::get('local') == 'ar') href="{{URL('category/'. $spec_proj->sub_cat->ar_custom_url) }}" >
                                                                                    
                                </a>
                            </li>
                        </ul>
                        <footer>

                            <ul class="social-network">
                                <li><a href="{{$spec_proj->fb}} "><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$spec_proj->tw}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$spec_proj->gp}}"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{{$spec_proj->ins}}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </div>
        </section>
        <!-- port aside -->
        <aside class="port-aside bg-grey dark-bottom-border padding-top-90 padding-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="">
                        <!-- page heading small -->
                        <header class="page-heading left-align col-xs-12 col-md-12">
                            <h2 class="lime text-capitalize font-light">{{trans('lang.relatedprojects')}}</h2>
                        </header>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($related_pro as $related)
                    <div class="col-xs-12 col-sm-4">
                        <!-- portfolio block nospace -->
                        <div class="portfolio-block nospace">
                            <!-- box -->
                            <div class="box">
                                <div class="over">
                                    <div class="holder">
                                        <div class="frame">
                                            <div class="over-frame">
                                                <strong class="title upper">@if (Session::get('local') == 'ar') {{ $related->ar_name }} @else {{ $related->name }} @endif</strong>
                                                <p>
                                                    @if (Session::get('local') == 'ar') {{ $related->sub_cat->ar_name }} @else {{ $related->sub_cat->name }} @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('admin-assets/images/blogs/'.$related->photo)}}" class="search lightbox"><i class="fa fa-search"></i></a>
                                    <a @if (Session::get('local') == 'ar') href="{{URL('project/'. $related->ar_custom_url) }}"
                                       @else href="{{URL('project/'. $related->custom_url) }}" @endif class="link"><i class="fa fa-link"></i></a>
                                </div>
                                <img style="width:370px; height: 370px;" src="{{asset('admin-assets/images/blogs/'.$related->photo)}}" alt="image description">
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </aside>
    </main>
@endsection
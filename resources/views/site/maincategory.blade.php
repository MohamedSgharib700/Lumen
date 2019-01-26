@extends('site.template.index')
@section('content')

    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner  ">
         <div class="stretch">
                <img alt="image description" src="{{asset('admin-assets/images/cats/'.$spec_cat->slider)}}" >
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase">@if (Session::get('local') == 'ar') {{ $spec_cat->ar_name }} @else {{ $spec_cat->name }} @endif</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}">HOME</a></li>

                            <li class="active"><a >@if (Session::get('local') == 'ar') {{ $spec_cat->ar_name }} @else {{ $spec_cat->name }} @endif</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- work section -->
        <section class="work-section padding-top-90 padding-bottom-90 space">
            <!-- isotop controls -->

            <ul id="work-filter" class="list-inline isotop-controls">

                <li class="active"><a href="#">All</a></li>
                @foreach($spec_cat->subcats() as $cat)
                    <li><a data-filter=".work-{{$cat->id}}" href="#"> @if (Session::get('local') == 'ar') {{ $cat->ar_name }} @else {{ $cat->name }} @endif</a></li>
                @endforeach
                {{--<li><a data-filter=".work-fashion" href="#">Fashion</a></li>--}}
                {{--<li><a data-filter=".work-illustration" href="#">Illustration</a></li>--}}

            </ul>
            <div class="container-fluid padding-bottom-60">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="icotop-holder" id="work">
                            <!-- portfolio block coll-4 style6 -->

                            @foreach($spec_cat->subcats() as $sub)
                            @foreach($sub->project as $pro)


                                <div class="portfolio-block coll-4 style6 work-{{$pro->sub_cat->id}}">
                                    <!-- box -->


                                    <div class="box">
                                        <div class="img-box">
                                            <img style="width: 330px; height: 330px;" src="{{asset('admin-assets/images/blogs/'.$pro->photo)}}" alt="image description" class="img-responsive">
                                            <div class="over">
                                                <a class="search lightbox" href="{{asset('admin-assets/images/blogs/'.$pro->photo)}}"><i class="fa fa-search"></i></a>
                                                <a class="link" @if (Session::get('local') == 'ar') href="{{URL('project/'. $pro->ar_custom_url) }}"
                                                   @else href="{{URL('project/'. $pro->custom_url) }}" @endif><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <h2 class="title text-left no-bg padding-zero margin-zero"><a @if (Session::get('local') == 'ar') href="{{URL('project/'. $pro->ar_custom_url) }}"
                                                                                                          @else href="{{URL('project/'. $pro->custom_url) }}" @endif> @if (Session::get('local') == 'ar') {{ $pro->ar_name }} @else {{ $pro->name }} @endif</a></h2>
                                            <p class="text-left text-uppercase"><a href="#">@if (Session::get('local') == 'ar') {{ $pro->ar_name }} @else {{ $pro->name }} @endif</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">

            </div>
        </section>
    </main>

@endsection
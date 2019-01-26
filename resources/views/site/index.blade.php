@extends('site.template.index')
@section('content')


    <main id="main">
    <!-- architecture gallery -->
    <section class="beans-slider architecture-gallery">
        <div class="beans-mask">
            <div class="beans-slideset">
                <!-- beans-slide -->
                @foreach($slider as $slide)
                <div class="beans-slide">
                    <div class="stretch">
                        <img  src="{{asset('admin-assets/images/slider/'.$slide->photo)}}" alt="{{$slide->photo_alt}}">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="win-height holder">
                                    <div class="frame">
                                        <span class="title">
                                             @if (Session::get('local') == 'ar') {{ $slide->ar_title }} @else {{ $slide->title }} @endif
                                        </span>
                                        <span class="subtitle">
                                             @if (Session::get('local') == 'ar') {{ $slide->ar_subtitle }} @else {{ $slide->subtitle }} @endif
                                        </span>
                                        <p>
                                            @if (Session::get('local') == 'ar') {{ $slide->ar_desc }} @else {{ $slide->desc }} @endif
                                        </p>
                                        @if($slide->ar_button !='' && $slide->button !='' )
                                        <a href="{{$slide->button_url}}" class="btn btn-history">
                                            @if (Session::get('local') == 'ar') {{ $slide->ar_button }} @else {{ $slide->button }} @endif
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- beans-slide -->

            </div>
        </div>
        <a href="#" class="btn-prev"><i class="fa fa-angle-left"></i></a>
        <a href="#" class="btn-next"><i class="fa fa-angle-right"></i></a>
    </section>
    <!-- archi columns -->
    <section class="archi-columns">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    @foreach($cats as $cat)
                    <div class="coll" data-animate="fadeInUp" data-delay="100">
                        <img   src="{{asset('admin-assets/images/cats/'.$cat->photo)}}" alt=" @if (Session::get('local') == 'ar') {{ $cat->ar_photo_alt }} @else {{ $cat->photo_alt }} @endif" class="img-responsive">
                        <div class="block" >
                            <h2><a @if (Session::get('local') == 'ar') href="{{URL( $cat->ar_custom_url) }}"
                                               @else href="{{URL( $cat->custom_url) }}" @endif>
                                    @if (Session::get('local') == 'ar') {{ $cat->ar_name }} @else {{ $cat->name }} @endif
                                </a></h2>
                            <p style="height: 85px; overflow: hidden;">
                                @if (Session::get('local') == 'ar') {{ $cat->ar_desc }} @else {{ $cat->desc }} @endif
                            </p>
                            <a @if (Session::get('local') == 'ar') href="{{URL( $cat->ar_custom_url) }}"
                                               @else href="{{URL( $cat->custom_url) }}" @endif class="more"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </section>
    <!-- archi projects -->
    <section class="archi-projects">
        <div class="stretch">
            <img src="http://placehold.it/1920x1000" alt="image description">
        </div>
        <div class="container">
            <!-- page heading small -->
            <header class="page-heading small">
                <div class="heading">
                    <h2 class="lime text-capitalize font-medium margin-bottom-10">{{trans('lang.projects')}}</h2>
                    <p>
                    @if (Session::get('local') == 'ar') {{ $main->ar_projdesc }} @else {{ $main->projdesc }} @endif
                    </p>
                </div>
            </header>
            <div class="row">
                <div class="col-xs-12">
                    <!-- beans-slider -->
                    <div class="beans-slider">
                        <div class="beans-mask">
                            <div class="beans-slideset">
                                <!-- beans-slide 1 -->
                               @foreach($recent_projects as $recent_pro)
                                <div class="beans-slide">
                                    <div class="img-box">
                                        <img src="{{asset('admin-assets/images/blogs/'.$recent_pro->photo)}}"
                                             alt=" @if (Session::get('local') == 'ar') {{ $recent_pro->photo_alt }} @else {{ $recent_pro->photo_alt }} @endif"
                                             class="img-responsive" style="width: 670px; height: 560px;">
                                    </div>
                                    <div class="text" style="height: 560px;">
                                        <h3><span class="add">
                                            @if (Session::get('local') == 'ar') {{ $recent_pro->ar_name }} @else {{ $recent_pro->name }} @endif </span>
                                        </h3>
                                        <span class="title">
                                             @if (Session::get('local') == 'ar') {{ $recent_pro->sub_cat->ar_name }} @else {{ $recent_pro->sub_cat->name }} @endif
                                        </span>
                                        <span class="subtitle"> @if (Session::get('local') == 'ar') {{ $recent_pro->ar_location }} @else {{ $recent_pro->location }} @endif</span>
                                        <a class="btn btn-history" 
                                        @if (Session::get('local') == 'ar') href="{{URL('project/'. $recent_pro->ar_custom_url) }}"
                                    @else href="{{URL('project/'. $recent_pro->custom_url) }}" @endif
                                        >Details</a>
                                        <p>
                                             @if (Session::get('local') == 'ar') {!! $recent_pro->ar_desc !!} @else {!!$recent_pro->desc !!} @endif 

                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- beans-slide 2 -->

                                <!-- beans-slide 3 -->

                                <!-- beans-slide 4 -->

                                <!-- beans-slide 5 -->

                            </div>
                        </div>
                        <div class="beans-pagination hidden-xs"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- archi whyus -->
    <section class="archi-whyus">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-box">
                        <h2>Why to choose <span class="add">Banan Egypt</span>?</h2>

                        <p>
                            @if (Session::get('local') == 'ar') {!! $main->ar_why !!} @else {!!$main->why !!} @endif
                        </p>
                        <a class="btn btn-history" href="{{url('aboutus')}}">{{trans('lang.aboutus')}}</a>
                    </div>
                    <!-- img-box -->
                    <div class="img-box" data-animate="fadeInRight" data-delay="200">
                        <img src="{{asset('adminstyle/assets/images/gallery/'.$main->aboutusphoto)}}" alt="image description" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    @endsection
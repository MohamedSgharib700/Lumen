@extends('site.template.index')
@section('content')

<main id="main" role="main">
    <!-- page banner  -->
    <header class="page-banner ">
        <div class="stretch">
        <img alt="image description" src="{{asset('adminstyle/assets/images/gallery/'.$main->aboutusslider)}}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="holder">
                        <h1 class="heading text-capitalize">{{trans('lang.aboutus')}}</h1>
                        <p>Your challenge is our progress</p>
                    </div>
                    <ul class="breadcrumbs list-inline">
                        <li><a href="{{url('/')}}">HOME</a></li>
                        <li class="active"><a href="{{url('aboutus')}}">about us 2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- services section style6 -->
    <section class="services-section style6 container">

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="text-box" >
                    <h2 class="text-uppercase">{{trans('lang.whoweare')}} </h2>
                    @if (Session::get('local') == 'ar') {!! $main->ar_aboutus !!} @else {!! $main->aboutus !!} @endif
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="text-box" >
                    <h2  class="text-uppercase"> {{trans('lang.mission')}}</h2>
                    <p>
                        @if (Session::get('local') == 'ar') {{ $main->ar_mission }} @else {{ $main->mission }} @endif
                    </p>
                </div>
            </div>
        </div>


            <div class="row">
            <div class="col-xs-12 col-md-12">
            <div class="text-box" >
                <h2  class="text-uppercase">  {{trans('lang.vision')}}</h2>
                <p >
                    @if (Session::get('local') == 'ar') {{ $main->ar_vision }} @else {{ $main->vision }} @endif
                </p>
            </div>
            </div>
                </div>








        <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="text-box " >
                <h2  class="text-uppercase"> {{trans('lang.why')}}</h2>
                <p>
                    @if (Session::get('local') == 'ar') {{ $main->ar_why }} @else {{ $main->why }} @endif
                </p>
            </div>

        </div>
            </div>
    </section>
    <!-- counter section -->
    {{--<div class="counter-section">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="10" data-to="56" data-refresh-interval="80" data-speed="3000" data-comma="true">15</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Clients Worked</span>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="200" data-to="280" data-refresh-interval="80" data-speed="3000" data-comma="true">150</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Projects Done</span>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="15" data-to="27" data-refresh-interval="80" data-speed="3000" data-comma="true">06</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Winning Awards</span>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="15" data-to="862" data-refresh-interval="80" data-speed="3000" data-comma="true">700</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Cups of Coffe</span>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="15" data-to="982" data-refresh-interval="80" data-speed="3000" data-comma="true">482</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Facebook Friends</span>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-4 col-lg-2">--}}
                {{--<div class="counter">--}}
                    {{--<span class="num-counter num" data-from="15" data-to="250" data-refresh-interval="80" data-speed="3000" data-comma="true">100</span>--}}
                    {{--</div>--}}
                {{--<span class="txt">Tweets</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--<div class="parallax-holder">--}}
        {{--<div class="parallax-frame"><img src="http://placehold.it/1920x1080" height="1080" width="1920" alt="image description"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- section -->
    {{--<section class="padding-top-90 padding-bottom-90">--}}
    {{--<div class="container">--}}
        {{--<!-- page heading -->--}}
        {{--<header class="page-heading">--}}
            {{--<h2 class="lime text-capitalize font-medium">our Team</h2>--}}
            {{--<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>--}}
            {{--</header>--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-6">--}}
                {{--<!-- team box -->--}}
                {{--<div class="team-box right style2">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="http://placehold.it/268x263" alt="image description" class="img-responsive">--}}
                        {{--<span class="over"></span>--}}
                        {{--<a href="#popup1" class="plus lightbox">+</a>--}}
                        {{--</div>--}}
                    {{--<div class="block">--}}
                        {{--<h3 class="heading">Fatma Arafa</h3>--}}
                        {{--<strong class="subtitle">CEO FOUNDER</strong>--}}
                        {{--<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>--}}
                        {{--<ul class="social-network list-inline">--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-6">--}}
                {{--<!-- team box -->--}}
                {{--<div class="team-box style2">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="http://placehold.it/268x263" alt="image description" class="img-responsive">--}}
                        {{--<span class="over"></span>--}}
                        {{--<a href="#popup2" class="plus lightbox">+</a>--}}
                        {{--</div>--}}
                    {{--<div class="block">--}}
                        {{--<h3 class="heading">Mahmoud Mohamed</h3>--}}
                        {{--<strong class="subtitle">PROJECT MANAGER</strong>--}}
                        {{--<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>--}}
                        {{--<ul class="social-network list-inline">--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-6">--}}
                {{--<!-- team box -->--}}
                {{--<div class="team-box right style2">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="http://placehold.it/268x263" alt="image description" class="img-responsive">--}}
                        {{--<span class="over"></span>--}}
                        {{--<a href="#popup3" class="plus lightbox">+</a>--}}
                        {{--</div>--}}
                    {{--<div class="block">--}}
                        {{--<h3 class="heading">Fatma Hassan</h3>--}}
                        {{--<strong class="subtitle">SOFTWARE DEVELOPER</strong>--}}
                        {{--<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>--}}
                        {{--<ul class="social-network list-inline">--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-6">--}}
                {{--<!-- team box -->--}}
                {{--<div class="team-box style2">--}}
                    {{--<div class="img-box">--}}
                        {{--<img src="http://placehold.it/268x263" alt="image description" class="img-responsive">--}}
                        {{--<span class="over"></span>--}}
                        {{--<a href="#popup4" class="plus lightbox">+</a>--}}
                        {{--</div>--}}
                    {{--<div class="block">--}}
                        {{--<h3 class="heading">Luis Lucker</h3>--}}
                        {{--<strong class="subtitle">CREATIVE DESIGNER</strong>--}}
                        {{--<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>--}}
                        {{--<ul class="social-network list-inline">--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}
    <!-- container -->


    <section class="container padding-top-90 padding-bottom-90">
        <!-- page heading -->
        <header class="page-heading">
            <div class="heading">
                <h2 class="lime text-uppercase font-medium">{{trans('lang.team')}}</h2>
            </div>
        </header>
        <div class="row">
            @for($i=0;$i<count($team);$i++)
            <div class="col-xs-12 col-sm-6" style="height: 255px;overflow: hidden">
                <!-- team box -->
                <div class="team-box style2 @if($i%2==0)right @endif" data-animate="fadeInUp" data-delay="200">
                    <div class="img-box">
                        <img style="width: 260px;height: 260px;" src="{{asset('admin-assets/images/team/'. $team[$i]->photo)}}" alt="image description" class="img-responsive">
                        <span class="over"></span>
                        <a href="#popup{{ $team[$i]->id }}" class="plus lightbox">+</a>
                    </div>
                    <div class="block">
                        <h3 class="heading">{{ $team[$i]->name }}</h3>
                        <strong class="subtitle">{{ $team[$i]->job_title }}</strong>
                        <div class="padding-bottom-30">{{ $team[$i]->about }}</div>
                        <ul class="social-network list-inline">
                            <li><a href="{{ $team[$i]->fb }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $team[$i]->tw }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $team[$i]->link }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $team[$i]->ins }}"><i class="fa fa-instgram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endfor

        </div>


    </section>

    <!-- partners block -->
    <div class="container padding-top-90 padding-bottom-90">
        <div class="row">
            <div class="col-xs-12">
                <!-- partners block -->
                <div class="partners-block line-box">
                    <!-- partners nav -->
                    <ul class="partners-nav line list-inline">
                        @foreach($clients as $client)
                        <li><a href="{{$client->url}}"><img src="{{asset('admin-assets/images/clients/'.$client->photo)}}" alt="graphicriver"></a></li>
                        @endforeach



                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-holder">
        <!-- popup1 -->
        @foreach($team as $t)
        <div id="popup{{$t->id}}" class="lightbox team-lightbox">
            <div class="img-box">
                <img src="{{asset('admin-assets/images/team/'. $t->photo)}}" alt="image description"/>
            </div>
            <div class="holder">
                <strong class="title">{{$t->name}}</strong>
                <strong class="subtitle">{{$t->job_title}}</strong>
                <p>{{$t->about}}</p>
                <ul class="list-unstyled socialnetworks">
                    <li><a href="{{ $t->fb }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $t->tw }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ $t->link }}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{ $t->ins }}"><i class="fa fa-instgram"></i></a></li>
                </ul>
            </div>
        </div>
        @endforeach

    </div>
</main>










@endsection
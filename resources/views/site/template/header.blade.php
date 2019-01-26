<!DOCTYPE html>
<html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @if(isset($meta))
        <title>
            @if (Session::get('local') == 'ar') {{  $meta['ar_page_title'] }} @else {{  $meta['page_title'] }} @endif

        </title>
        <meta name="keywords" content="{{ $meta['meta_keyword'] }}" />
        <meta name="description" content="{{ $meta['meta_description'] }}">
             <meta name="title" content="{{ $meta['meta_title'] }}" />
    @else
        <title>
            @if (Session::get('local') == 'ar') {{ $main->ar_title }} @else {{ $main->title }} @endif

        </title>
        <meta name="keywords" content="{{ $main->meta_keyword }}" />
        <meta name="description" content="{{ $main->meta_description }}">
        <meta name="author" content="{{ $main->meta_auther }}">
                <meta name="title" content="{{ $main->meta_title }}">

        @endif

                <!-- set the title of your site -->

    <!-- ========= Favicon Icons ========= -->
    <link rel="shortcut icon" href="{{url('assets-site/images/favicon/favoricon.png')}}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets-site/images/favicon/apple-touch-icon-57x57.png')}}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets-site/images/favicon/apple-touch-icon-114x114.png')}}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets-site/images/favicon/apple-touch-icon-72x72.png')}}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets-site/images/favicon/apple-touch-icon-144x144.png')}}">
    <!-- include Google fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <!-- include the site stylesheet of bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets-site/css/bootstrap.css')}}">
    <!-- include the font awesome stylesheet  -->
    <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- include the stylesheets of headers and footer of the page  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-site/css/page-assets.css')}}">
    <!-- include the helping elements stylesheets of  the page  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-site/css/helper-elements.css')}}">
    <!-- include the site stylesheet  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-site/style.css')}}">
    <!-- include the site color stylesheet    -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-site/css/color/color.css')}}">
    <link media="all" rel="stylesheet" href="{{asset('assets-site/css/mediaelementplayer.css')}}">
    <!-- include the site animation stylesheet  -->
    <link rel="stylesheet" href="{{asset('assets-site/css/animate.css')}}" type="text/css"/>


    
    <style>
    .fa {

    color: black;
}
    
    
    </style>

    <style media="screen">
      }
      .modal-backdrop.in {
        z-index: -1;
      }

      .modal-backdrop {
        z-index: -1;
      }
    </style>

     
    <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91540655-1', 'auto');
  ga('send', 'pageview');

</script> 

    @if (Session::get('local') == 'ar') <link href="{{asset('assets-site/css/rtl.css')}}" rel="stylesheet">   @endif
</head>
<body>
<!-- Page pre loader -->

<!-- main container of all the page elements -->
<div id="wrapper">
    <div class="w1">
        <!-- header of the page -->

        <header id="header" class="style3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 header-top">
                        <!-- page logo -->
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->logo)}}" alt="Banan Egypt" class=" w-logo">
                                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->logo)}}" style="width: 126px; height: 45px;"  alt="Banan Egypt" class=" b-logo">
                            </a>
                        </div>
                        <!-- icon list -->
                      <!--  <ul class="list-unstyled icon-list">

                            <li>
                                <a href="#" class="leng-opener">en  <i class="fa fa-angle-down"></i></a>
                                 lang drop 
                                <div class="lang-drop">
                                    <ul class="list-unstyled">
                                        <li><a href="{{url('lang/en')}}">EN</a></li>
                                        <li><a href="{{url('lang/ar')}}">AR</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <!-- main navigation of the page -->
                            <nav id="nav" style="
    padding-right: 140px;
">
                                <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                                <div class="nav-holder">
                                    <ul class="list-inline nav-top">
                                        <li>
                                            <!-- space -->
                                        </li>

                                        <li>
                                            <a href="{{url('/')}}">{{trans('lang.home')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/aboutus')}}">{{trans('lang.aboutus')}}</a>
                                        </li>
                                       @foreach($cats as $cat)


                                        <li>
                                            <a @if (Session::get('local') == 'ar') href="{{URL( $cat->ar_custom_url) }}"
                                               @else href="{{URL( $cat->custom_url) }}"  @endif >
                                                @if (Session::get('local') == 'ar') {{ $cat->ar_name }} @else {{ $cat->name }} @endif
                                            </a>
                                            <div class="drop">
                                                @if(count($cat->subcatss) >0)
                                                <ul class="list-unstyled">
                                                    @foreach($cat->subcatss as $sub)
                                                    <li><a @if (Session::get('local') == 'ar') href="{{URL($sub->cat->ar_custom_url.'/'. $sub->ar_custom_url) }}"
                                                           @else href="{{URL($sub->cat->custom_url.'/'. $sub->custom_url) }}" @endif>
                                                            @if (Session::get('local') == 'ar') {{ $sub->ar_name }} @else {{ $sub->name }} @endif
                                                        </a></li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </div>
                                        </li>
                                        @endforeach


                                      
                                        
                                        {{--<li>--}}
                                            {{--<a href="interior.html">Architecture</a>--}}
                                            {{--<div class="drop">--}}
                                                {{--<ul class="list-unstyled">--}}
                                                    {{--<li><a href="portfolio-1columns.html">1 column</a></li>--}}
                                                    {{--<li><a href="portfolio-2columns.html">2 column</a></li>--}}
                                                    {{--<li><a href="portfolio-3columns.html">3 column</a></li>--}}
                                                    {{--<li><a href="portfolio-4columns.html">4 column</a></li>--}}
                                                    {{--<li><a href="portfolio-5columns.html">5 column</a></li>--}}
                                                    {{--<li><a href="portfolio-6columns.html">6 column</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="interior.html">Landscape</a>--}}
                                            {{--<div class="drop">--}}
                                                {{--<ul class="list-unstyled">--}}
                                                    {{--<li><a href="portfolio-1columns.html">1 column</a></li>--}}
                                                    {{--<li><a href="portfolio-2columns.html">2 column</a></li>--}}
                                                    {{--<li><a href="portfolio-3columns.html">3 column</a></li>--}}
                                                    {{--<li><a href="portfolio-4columns.html">4 column</a></li>--}}
                                                    {{--<li><a href="portfolio-5columns.html">5 column</a></li>--}}
                                                    {{--<li><a href="portfolio-6columns.html">6 column</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        <li>
                                            <a href="{{url('/careers')}}">careers</a>
                                        </li>
                                      

                                        <li>
                                            <a href="{{url('contactus')}}">{{trans('lang.contactus')}}</a>
                                        </li>


                                    </ul>
                                </div>
                            </nav>
                            <!-- head socialnetworks -->
                            <ul class="head-socialnetworks list-inline">
                            @if(!empty($main->fb))
                                <li><a href="{{$main->fb}}"><i class="fa fa-facebook"></i></a></li>
                               @endif
                               
                                <li><a href="{{$main->tw}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$main->ins}}"><i class="fa fa-instagram"></i></a></li>
                                  @if(!empty($main->gp))
                                <li><a href="{{$main->gp}}"><i class="fa fa-google-plus"></i></a></li>
                                @endif
                                  @if(!empty($main->pin))
                                <li><a href="{{$main->pin}}"><i class="fa fa-pinterest"></i></a></li>
                                @endif
                                
                                  @if(!empty($main->linkedin))
                                <li><a href="{{$main->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                @endif
                                
                            @if(!empty($main->tumbler))
                                 <li><a href="{{$main->tumbler}}"><i class="fa fa-tumblr"></i></a></li>
                                 @endif
                                 
                                 @if(!empty($main->stumble))
                                <li><a href="{{$main->stumble}}"><i class="fa fa-stumbleupon"></i></a></li>
                                @endif
                                
                                @if(!empty($main->stumble))
 				<li><a href="{{$main->be}}"><i class="fa fa-behance"></i></a></li>
 			@endif
 			
 			@if(!empty($main->yt))
 				 				<li><a href="{{$main->yt}}"><i class="fa fa-youtube"></i></a></li>
@endif


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                        
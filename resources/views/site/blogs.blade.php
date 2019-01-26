@extends('site.template.index')
@section('content')




    <main id="main" class="bg-grey dark-bottom-border" role="main">
        <!-- page banner -->
        <header class="page-banner ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase">{{trans('lang.blogs')}}</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}">{{trans('lang.home')}}</a></li>
                            <li class="active"><a href="{{url('/blogs')}}">{{trans('lang.blogs')}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="stretch">
                <img src="http://placehold.it/1920x200" alt="image description">
            </div>
        </header>
        <div class="container padding-top-100">
            <div class="row">
                <div class="col-xs-12">
                    <!-- blog-post-v1 -->
                    @foreach($blogs as $i=>$blog )

                    <article class="blog-post-v1 style2">


                            @if($i%2==0)
                        <div class="img-box">
                            <!-- beans-slide -->
                            <div class="beans-slider" data-rotate="true">
                                <div class="beans-mask">
                                    <div class="beans-slideset">
                                        <!-- beans-slide -->
                                        @foreach($blog->galary as $galary)
                                        <div class="beans-slide">
                                            <a ><img src="{{asset('admin-assets/images/blogs/'.$galary->photo)}}" alt="image description" class="img-responsive"></a>
                                        </div>
                                        <!-- beans-slide -->
                                            @endforeach

                                    </div>
                                </div>
                                <div class="beans-pagination">
                                    <!-- pagination generated here -->
                                </div>
                            </div>
                        </div>

                        <div class="blog-txt">
                            <h2><a > @if (Session::get('local') == 'ar'){{$blog->ar_title}} @else {{$blog->title}} @endif</a></h2>
                            <ul class="meta list-inline">
                                <li>
                                    <i class="fa fa-user"></i>
                                    By <a >@if (Session::get('local') == 'ar'){{$blog->author->name}} @else {{$blog->author->name}}@endif</a>
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a >@if (Session::get('local') == 'ar'){{$blog->sub_cat->ar_name}} @else {{$blog->sub_cat->name}}@endif</a>
                                </li>

                            </ul>
                            <p>{{$blog->desc}}</p>
                            <a  @if (Session::get('local') == 'ar') href="{{URL('blog/'. $blog->ar_custom_url) }}"
                                @else href="{{URL('blog/'. $blog->custom_url) }}" @endif class="more">[ CONTINUE READING ]</a>
                            <div class="box-holder">
                                <span class="icon"><i class="fa fa-picture-o"></i></span>
                                <time datetime="2015-02-18">
                                    <span class="add">{{ date('d',strtotime($blog->created_at)) }}</span> {{ date('M',strtotime($blog->created_at)) }}
                                </time>
                            </div>
                        </div>



                                @else

                            <div class="blog-txt">
                                <h2><a > @if (Session::get('local') == 'ar'){{$blog->ar_title}} @else {{$blog->title}} @endif</a></h2>
                                <ul class="meta list-inline">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        By <a >@if (Session::get('local') == 'ar'){{$blog->author->name}} @else {{$blog->author->name}}@endif</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tags"></i>
                                        <a >@if (Session::get('local') == 'ar'){{$blog->sub_cat->ar_name}} @else {{$blog->sub_cat->name}}@endif</a>
                                    </li>

                                </ul>
                                <p>{{$blog->desc}}</p>
                                <a  @if (Session::get('local') == 'ar') href="{{URL('blog/'. $blog->ar_custom_url) }}"
                                    @else href="{{URL('blog/'. $blog->custom_url) }}" @endif class="more">[ CONTINUE READING ]</a>
                                <div class="box-holder">
                                    <span class="icon"><i class="fa fa-picture-o"></i></span>
                                    <time datetime="2015-02-18">
                                        <span class="add">{{ date('d',strtotime($blog->created_at)) }}</span> {{ date('M',strtotime($blog->created_at)) }}
                                    </time>
                                </div>
                            </div>

                            <div class="img-box">
                                <!-- beans-slide -->
                                <div class="beans-slider" data-rotate="true">
                                    <div class="beans-mask">
                                        <div class="beans-slideset">
                                            <!-- beans-slide -->
                                            @foreach($blog->galary as $galary)
                                                <div class="beans-slide">
                                                    <a ><img src="{{asset('admin-assets/images/blogs/'.$galary->photo)}}" alt="image description" class="img-responsive"></a>
                                                </div>
                                                <!-- beans-slide -->
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="beans-pagination">
                                        <!-- pagination generated here -->
                                    </div>
                                </div>
                            </div>
                        @endif





                    </article>
                        @endforeach
                    <!-- blog-post-v1 -->

                    <!-- blog-post-v1 -->

                    <!-- blog-post-v1 -->

                    <!-- blog-post-v1 -->

                    <nav class="blog-footer style2 text-center">
                        {!! $blogs->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </main>





@endsection
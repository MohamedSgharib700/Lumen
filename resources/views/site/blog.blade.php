@extends('site.template.index')
@section('content')
    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        {{--<div class="holder">--}}
                            {{--<h1 class="heading text-uppercase">Single Blog</h1>--}}
                        {{--</div>--}}
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}">{{trans('lang.home')}}</a></li>
                            <li><a >
                                    @if (Session::get('local') == 'ar'){{$spec_blog->sub_cat->cat->ar_name}} @else {{$spec_blog->sub_cat->cat->name}} @endif
                                </a></li>
                            <li class="active"><a href="#">  @if (Session::get('local') == 'ar'){{$spec_blog->sub_cat->ar_name}} @else {{$spec_blog->sub_cat->name}} @endif</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="stretch">
                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->blogslider)}}" alt="image description">
            </div>
        </header>
        <div class="container padding-top-100">
            <div class="row">
                <div class="col-xs-12">
                    <!-- blog-post-v1 -->
                    <article class="blog-post-v1 style-full">
                        <div class="img-box">
                            <!-- beans-slider -->
                            <div class="beans-slider" data-rotate="true">
                                <div class="beans-mask">
                                    <div class="beans-slideset">
                                        <!-- beans-slide -->
                                        @foreach($spec_blog->galary as $galary)
                                        <div class="beans-slide">
                                            <img style="width: 1170px; height: 480px;" src="{{asset('admin-assets/images/blogs/'.$galary->photo)}}" alt="image description" class="img-responsive">
                                        </div>
                                        @endforeach
                                        <!-- beans-slide -->

                                    </div>
                                </div>
                                <div class="beans-pagination">
                                    <!-- pagination generated here -->
                                </div>
                            </div>
                        </div>
                        <div class="blog-txt">
                            <h2> @if (Session::get('local') == 'ar'){{$spec_blog->ar_title}} @else {{$spec_blog->title}} @endif</h2>
                            <ul class="meta list-inline">
                                <li>
                                    <i class="fa fa-user"></i>
                                    By <a href="#"> @if (Session::get('local') == 'ar'){{$spec_blog->author->name}} @else {{$spec_blog->author->name}} @endif</a>
                                </li>
                                <li>
                                    <i class="fa fa-tags"></i>
                                    <a @if (Session::get('local') == 'ar') href="{{URL('category/'. $spec_blog->sub_cat->ar_custom_url) }}"
                                       @else href="{{URL('category/'. $spec_blog->sub_cat->custom_url) }}" @endif> @if (Session::get('local') == 'ar'){{$spec_blog->sub_cat->ar_name}} @else {{$spec_blog->sub_cat->name}} @endif</a>
                                </li>


                            </ul>
                            <p>
                                @if (Session::get('local') == 'ar'){!!  $spec_blog->ar_desc!!} @else {!!  $spec_blog->desc!!} @endif
                            </p>
                            <div class="box-holder">
                                <span class="icon"><i class="fa fa-picture-o"></i></span>
                                <time datetime="2015-02-18">
                                    <span class="add"> {{ date('d',strtotime($spec_blog->created_at)) }}</span> {{ date('M',strtotime($spec_blog->created_at)) }}


                                </time>
                            </div>
                        </div>

                    </article>
                    <!-- post-footer -->
                    <footer class="post-footer">
                        <div class="post-tags">
                            <strong class="title">{{trans('lang.cats')}}</strong>
                            <ul class="list-unstyled">
                                <li><a  @if (Session::get('local') == 'ar') href="{{URL('category/'. $spec_blog->sub_cat->ar_custom_url) }}"
                                        @else href="{{URL('category/'. $spec_blog->sub_cat->custom_url) }}" @endif> @if (Session::get('local') == 'ar'){{$spec_blog->sub_cat->ar_name}} @else {{$spec_blog->sub_cat->name}} @endif</a></li>

                            </ul>
                        </div>
                        <ul class="post-social list-unstyled">
                            <li>                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url('product/'.$spec_blog->id) }}"><i class="fa fa-facebook"></i> SHARE</a>
                            </li>

                            <li><a target="_blank" href="https://twitter.com/intent/tweet?text={{ url('product/'.$spec_blog->id)}}"><i class="fa fa-twitter"></i> TWEET</a></li>
                            {{--<li><a href="#"><i class="fa fa-pinterest"></i> PIN</a></li>--}}
                        </ul>
                    </footer>
                    <!-- post-author-box -->
                    <div class="post-author-box">
                        <div class="img-box">
                            <img style="width: 120px; height: 120px;" src="{{asset('admin-assets/images/users/'.$spec_blog->author->photo)}}" alt="image description">
                        </div>
                        <div class="holder">
                            <strong class="title"><a href="#">- {{$spec_blog->author->name}}</a></strong>
                            <span class="aut-text"><a>{{count($spec_blog->author->userblogs)}} POSTS</a>  </span>
                            {{--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. </p>--}}
                        </div>
                    </div>
                    <div class="fb-comments" data-href="{{ url('blog/'.$spec_blog->custom_url)}}" data-width="100%" data-numposts="10"></div>
                    <!-- comment-box -->
                    {{--<div class="comment-box">--}}
                        {{--<h4>Comments (5)</h4>--}}
                        {{--<ul class="list-unstyled list">--}}
                            {{--<li>--}}
                                {{--<!-- box -->--}}
                                {{--<div class="box">--}}
                                    {{--<div class="img-box">--}}
                                        {{--<img src="http://placehold.it/80x80" alt="image description">--}}
                                        {{--<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Reply</span></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="holder">--}}
                                        {{--<strong class="title">Your Name</strong>--}}
                                        {{--<time datetime="2015-01-01">Nov 22, 2015 at 10:50 am</time>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<ul class="list-unstyled list">--}}
                                    {{--<li>--}}
                                        {{--<!-- box -->--}}
                                        {{--<div class="box">--}}
                                            {{--<div class="img-box">--}}
                                                {{--<img src="http://placehold.it/80x80" alt="image description">--}}
                                                {{--<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Reply</span></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="holder">--}}
                                                {{--<strong class="title">Your Name</strong>--}}
                                                {{--<time datetime="2015-01-01">Nov 22, 2015 at 10:50 am</time>--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<ul class="list-unstyled list">--}}
                                            {{--<li>--}}
                                                {{--<!-- box -->--}}
                                                {{--<div class="box">--}}
                                                    {{--<div class="img-box">--}}
                                                        {{--<img src="http://placehold.it/80x80" alt="image description">--}}
                                                        {{--<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Reply</span></a>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="holder">--}}
                                                        {{--<strong class="title">Your Name</strong>--}}
                                                        {{--<time datetime="2015-01-01">Nov 22, 2015 at 10:50 am</time>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<!-- box -->--}}
                                {{--<div class="box">--}}
                                    {{--<div class="img-box">--}}
                                        {{--<img src="http://placehold.it/80x80" alt="image description">--}}
                                        {{--<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Reply</span></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="holder">--}}
                                        {{--<strong class="title">Your Name</strong>--}}
                                        {{--<time datetime="2015-01-01">Nov 22, 2015 at 10:50 am</time>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<ul class="list-unstyled list">--}}
                                    {{--<li>--}}
                                        {{--<!-- box -->--}}
                                        {{--<div class="box">--}}
                                            {{--<div class="img-box">--}}
                                                {{--<img src="http://placehold.it/80x80" alt="image description">--}}
                                                {{--<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Reply</span></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="holder">--}}
                                                {{--<strong class="title">Your Name</strong>--}}
                                                {{--<time datetime="2015-01-01">Nov 22, 2015 at 10:50 am</time>--}}
                                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<form action="#" class="comment-form">--}}
                            {{--<fieldset>--}}
                                {{--<h4>Leave Comment</h4>--}}
                                {{--<div class="form-row">--}}
                                    {{--<input type="text" class="input" placeholder="Your Name *">--}}
                                    {{--<input type="email" class="input" placeholder="Email *">--}}
                                    {{--<input type="text" class="input" placeholder="Website">--}}
                                {{--</div>--}}
                                {{--<textarea cols="30" rows="10" placeholder="Review *"></textarea>--}}
                                {{--<div class="text-center">--}}
                                    {{--<button class="btn btn-submit" type="submit">SUBMIT</button>--}}
                                {{--</div>--}}
                            {{--</fieldset>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="container-fluid bg-grey related-post-widget dark-bottom-border">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h5>Related News</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <!-- blog-post-v2 -->
                        @foreach($related_blogs as $related)
                        <article class="blog-post-v2">
                            <div class="img-box">
                                <a href="#"><img style="width: 500px; height: 190px;" src="{{asset('admin-assets/images/blogs/'.$related->photo)}}" alt="image description" class="img-responsive"></a>
                            </div>
                            <div class="blog-txt">
                                <h2><a @if (Session::get('local') == 'ar') href="{{URL('blog/'. $related->ar_custom_url) }}"
                                       @else href="{{URL('blog/'. $related->custom_url) }}" @endif>@if (Session::get('local') == 'ar') {{ $related->ar_title }} @else {{ $related->title }} @endif</a></h2>
                                <ul class="meta list-inline">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        By <a href="#">@if (Session::get('local') == 'ar') {{ $related->author->name }} @else {{ $related->author->name }} @endif</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tags"></i>
                                        <a href="#">@if (Session::get('local') == 'ar') {{ $related->sub_cat->ar_name }} @else {{ $related->sub_cat->name }} @endif</a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<i class="fa fa-heart"></i>--}}
                                        {{--<a href="#">14</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<i class="fa fa-comments"></i>--}}
                                        {{--<a href="#">320</a>--}}
                                    {{--</li>--}}
                                </ul>
                                <p style="width: 400px; height: 95px; overflow: hidden;">
                                    @if (Session::get('local') == 'ar') {{ $related->ar_desc }} @else {{ $related->desc }} @endif
                                </p>
                                <div class="box">
                                    <span class="icon"><i class="fa fa-picture-o"></i></span>
                                    <time datetime="2015-02-18">
                                        <span class="add">{{ date('d',strtotime($related->created_at)) }}</span> {{ date('M',strtotime($related->created_at)) }}
                                    </time>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <!-- blog-post-v2 -->

                        <!-- blog-post-v2 -->

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
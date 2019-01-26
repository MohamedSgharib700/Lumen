@extends('site.template.index')
@section('content')

    <main id="main" role="main">
        <!-- page banner -->
        <header class="page-banner  ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="holder">
                            <h1 class="heading text-uppercase">Projects</h1>
                        </div>
                        <ul class="breadcrumbs list-inline">
                            <li><a href="{{url('/')}}">HOME</a></li>
                            <li><a
                             @if (Session::get('local') == 'ar') href="{{url($spec_cat->cat->ar_custom_url)}}" @else  href="{{url( $spec_cat->cat->custom_url)}}" @endif
                             > @if (Session::get('local') == 'ar') {{ $spec_cat->cat->ar_name }} @else {{ $spec_cat->cat->name }} @endif</a></li>
                            <li 
                          ><a
                                 @if (Session::get('local') == 'ar') href="{{url($spec_cat->cat->ar_custom_url .'/'.$spec_cat->ar_custom_url)}}" @else  href="{{url($spec_cat->cat->custom_url . '/' . $spec_cat->custom_url)}}" @endif
                           >@if (Session::get('local') == 'ar') {{ $spec_cat->ar_name }} @else {{ $spec_cat->name }} @endif</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="stretch">
                <img src="{{asset('adminstyle/assets/images/gallery/'.$main->projectslider)}}" alt="image description">
            </div>
        </header>
        <!-- work section -->
        <section class="work-section padding-top-90 padding-bottom-90 space">

            <h3>{{trans('lang.description')}}</h3>
            <p>
                @if (Session::get('local') == 'ar') {!! $spec_cat->ar_desc !!} @else {!!   $spec_cat->desc !!} @endif
            </p>

            <div class="container padding-zero">

                <div class="icotop-holder margin-bottom-60" id="work">
                    <!-- portfolio block coll-3 -->
                    @foreach($spec_cat->projects() as $blog)
                    <div class="portfolio-block coll-3 work-design">
                        <!-- box -->
                        <div class="box">
                            <div class="box-holder">
                                <a  @if (Session::get('local') == 'ar') href="{{URL('project/'. $blog->ar_custom_url) }}"
                                    @else href="{{URL('project/'. $blog->custom_url) }}" @endif class="over">
                                    <div class="holder">
                                        <div class="frame">
                                            <div class="over-frame">
                                                <span class="plus">+</span>
                                                <strong class="title"> @if (Session::get('local') == 'ar') {{ $blog->ar_name }} @else {{ $blog->name }} @endif</strong>
                                                <p>@if (Session::get('local') == 'ar') {{ $blog->sub_cat->name }} @else {{ $blog->sub_cat->name }} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stretch">
                                <img src="{{asset('admin-assets/images/blogs/'.$blog->photo)}}" alt="image description">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                    <!-- portfolio block coll-3 -->

                </div>
                <div class="text-center">
{!! $spec_cat->projects()->render() !!}
                </div>
            </div>
        </section>
    </main>






















@endsection
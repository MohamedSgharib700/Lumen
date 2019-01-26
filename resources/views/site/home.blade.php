
@extends('site.template.index')
@section('content')



<section class="featured-area">
    <div id="home-slider" class="owl-carousel owl-theme">
        @if(isset($slider))
        @foreach($slider as $slide)	
        <div class="item">
            <img style="width:1520px; height: 580px;"src="{{asset('admin-assets/images/slider/'.$slide->photo)}}" alt="{{$slide->photo_alt}}">
        </div>

        @endforeach
        @endif
    </div>
</section>


<section class="profile">
    <div class="container">
        <div class="row">
            <!-- tabs left -->
            <div class="tabbable">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <h2>Profile</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#aboutUs" data-toggle="tab">{{trans('lang.aboutus')}}</a></li>
                        <li><a href="#mission" data-toggle="tab">{{trans('lang.mission')}}</a></li>
                        <li><a href="#vision" data-toggle="tab">{{trans('lang.vision')}}</a></li>
                        <li><a href="#fieldsOfProduction" data-toggle="tab">{{trans('lang.production')}}</a></li>
                                               <li><a href="#research" data-toggle="tab">{{trans('lang.r&d')}}</a></li>
                                                <li><a href="#values" data-toggle="tab">{{trans('lang.values')}}</a></li>
                                                <li><a href="#hse" data-toggle="tab">{{trans('lang.hse')}}</a></li>
                        <li><a href="#faq" data-toggle="tab">{{trans('lang.faqs')}}</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="aboutUs">
                            <h3>

                                {{trans('lang.aboutus')}}
                            </h3>
                            <p class="inline-txt">

                                @if (Session::get('local') == 'ar') {!!$main->ar_aboutus!!} @else {!!$main->aboutus!!} @endif
                            </p>


                        </div>
                        <div class="tab-pane" id="mission">
                            <h3>{{trans('lang.mission')}}</h3>
                            <p>
                                @if (Session::get('local') == 'ar') {!!$main->ar_mission!!} @else {!!$main->mission!!} @endif
                            </p>





                        </div>
                        <div class="tab-pane" id="vision">
                            <h3>{{trans('lang.vision')}}</h3>
                            <div class="tab-txt">	
                                <p>
                                    @if (Session::get('local') == 'ar') {!!$main->ar_vision!!} @else {!!$main->aboutus!!} @endif

                                </p>
                            </div>

                        </div>
                        <div class="tab-pane" id="fieldsOfProduction">
                            <h3>fields of production</h3>
                            <div class="row">
                                @foreach($cats as $cat)
                                <div class="col-md-4">
                                    <div class="fields-card">
                                        <h4>
                                            @if (Session::get('local') == 'ar') {!!$cat->ar_name!!} @else {!!$cat->name!!} @endif        
                                        </h4>
                                        <p>
                                            @if (Session::get('local') == 'ar') {!!$cat->ar_desc!!} @else {!!$cat->desc!!} @endif        

                                            <a href="#" data-toggle="modal" data-target=".mm{{$cat->id}}">View More..</a></p>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade test mm{{$cat->id}}" id="fields-of-production-modal" tabindex="-1" role="dialog" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="container">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <h3>Fields of production</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <h4>
                                                                    @if (Session::get('local') == 'ar') {!!$cat->ar_name!!} @else {!!$cat->name!!} @endif        
                                                                </h4>
                                                                <p>
                                                                    @if (Session::get('local') == 'ar') {!!$cat->ar_desc!!} @else {!!$cat->desc!!} @endif </p>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="products-inner-modal-img">
                                                                    <img src="{{url('admin-assets/images/cats/'.$cat->photo)}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="options-btns">
                                                            <!--                                                            <a href="#" type="button" class="btn btn-default">view photo album</a>-->
                                                            <a 
                                                                @if (Session::get('local') == 'ar') href='{{url('category/'.$cat->ar_custom_url)}}' @else href=' {{url('category/'.$cat->custom_url)}}' @endif
                                                                type="button" class="btn btn-default">browse all field products</a>

                                                        </div>
                                                        <div class="social-share">
                                                            <span>Share</span>
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane" id="research">
                            <h3>{{trans('lang.r&d')}}</h3>
                            <p>
                                @if (Session::get('local') == 'ar') {!!$main->ar_r_d!!} @else {!!$main->r_d!!} @endif
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="search-dev-img" style="background-image: url('images/search-dev-img1.png');">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="search-dev-img" style="background-image: url('images/search-dev-img2.png');">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="search-dev-img" style="background-image: url('images/search-dev-img3.png');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="values">
                            <h3>{{trans('lang.values')}}</h3>
                            <div class="row">
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="values-card">--}}
                                        {{--<h4>Transparency</h4>--}}
                                        {{--<ul>--}}
                                            {{--<li>Confronting ethical problems immediately</li>--}}
                                            {{--<li>Sharing all relevant information</li>--}}
                                            {{--<li>Giving and receiving constructive feedback</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                @if (Session::get('local') == 'ar') {!!$main->ar_values!!} @else {!!$main->values!!} @endif


                            </div>
                        </div>
                        <div class="tab-pane hse" id="hse">
                            <h3>{{trans('lang.hse')}}</h3>
                            <p>   @if (Session::get('local') == 'ar') {!!$main->ar_hse!!} @else {!!$main->hse!!} @endif
                            </p>



                        </div>
                        <div class="tab-pane faq" id="faq">
                            <h3>{{trans('lang.faqs')}}</h3>
                            <div class="row">
                                <!--                                <div class="col-md-3 col-sm-4 col-xs-12">
                                                                    <a class="btn btn-default btn-select">
                                                                        <input type="hidden" class="btn-select-input" id="" name="" value="" />
                                                                        <span class="btn-select-value">{{trans('lang.cats')}}</span>
                                                                        <span class='btn-select-arrow fa fa-caret-down'></span>
                                                                        <ul>
                                                                            @foreach($cats as $cat)
                                                                            <li>
                                                                                @if (Session::get('local') == 'ar') {!!$cat->ar_name!!} @else {!!$cat->name!!} @endif        
                                
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </a>
                                                                </div>-->
                                <!--                                <div class="col-md-9 col-sm-8 col-xs-12">
                                                                    <form class="navbar-form navbar-left">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Search...">
                                                                        </div>
                                                                        <a type="button" class="btn btn-default">Search</a>
                                                                    </form>
                                                                </div>-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>{{trans('lang.mostques')}}</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="faq-questions scrollbar-inner">

                                                @foreach($faqs->take(5) as $faq)
                                                <div class="question">

                                                    <h5> @if (Session::get('local') == 'ar') {!!$faq->ar_question!!} @else {!!$faq->question!!} @endif        
                                                    </h5>
                                                    <p>
                                                        @if (Session::get('local') == 'ar') {!!$faq->ar_answer!!} @else {!!$faq->answer!!} @endif 
                                                    </p>

                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /tabs -->
        </div>
    </div>
</section>





<section class="certifications">
    <div class="container">
        <div class="row">
            <div class="customNavigation">
                <a class="btn prev slider-btn pull-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <span class="sec-title">{{trans('lang.certification')}}</span>
                <a class="btn next slider-btn pull-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                <div class="view-all">
                    <a href="{{url('/certificates')}}" class="view-all-link">{{trans('lang.viewallcerf')}}</a>
                </div>
            </div>
            <div id="certifications-slider" class="owl-carousel owl-theme">

                @foreach($certifs as $cer)
                <div class="item">
                    <div class="card">
                        <div class="card-image">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('admin-assets/images/certificates/'.$cer->photo)}}">
                            </a>
                            <div class="certification-hoverd">
                                <ul>
                                    <li>
                                        <a href="{{url('/certificates')}}" data-toggle="tooltip" data-placement="bottom" title="Details"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </li>
                                    <!--                                    <li>
                                                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                        </li>-->
                                    <li>
                                        <a href="{{ asset('admin-assets/download/pdfs/'.$cer->pdf)}}" data-toggle="tooltip" data-placement="bottom" title="Download"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>	
                        </div>
                        <div class="card-content">
                            <h4>
                                @if (Session::get('local') == 'ar') {!!$faq->ar_name!!} @else {!!$faq->name!!} @endif 

                            </h4>
                            <p>
                                @if (Session::get('local') == 'ar') {!!$faq->ar_desc!!} @else {!!$faq->desc!!} @endif 

                            </p>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
</section>
<!-- /.certification -->


<section class="testimonials" id="testmonials">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{trans('lang.testmonials')}}</h2>
            </div>
            <div class="carousel slide" data-ride="carousel" id="testimonials-slider">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">

                    <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonials-slider" data-slide-to="1"></li>
                    <li data-target="#testimonials-slider" data-slide-to="2"></li>
                </ol>
                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">
                    <!-- Quote 1 -->

                    @foreach($testmonials as $i=>$testmonial)
                    <div  @if($i==0) class="item active" @else class="item" @endif >
                           <blockquote>
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="img-circle" src="{{asset('admin-assets/images/testmonials/'.$testmonial->photo)}}">
                                    <h3>
                                        @if (Session::get('local') == 'ar') {!!$testmonial->ar_name!!} @else {!!$testmonial->name!!} @endif
                                    </h3>
                                    <h5>
                                        @if (Session::get('local') == 'ar') {!!$testmonial->ar_job_title!!} @else {!!$testmonial->job_title!!} @endif

                                    </h5>
                                </div>
                                <div class="col-sm-9">
                                    <p>
                                        @if (Session::get('local') == 'ar') {!!$testmonial->ar_text!!} @else {!!$testmonial->text!!} @endif

                                    </p>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    @endforeach
                    <!-- Quote 2 -->


                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.testimonials -->


<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('lang.clients')}}</h2>
                <div class="view-all">
                    <a href="{{url('/clients')}}" class="view-all-link">{{trans('lang.viewallclients')}}</a>
                </div>
                <div id="clients-slider" class="owl-carousel">

                    @foreach($clients as $client)
                    <div class="item">
                        <span class="client-logo">
                            <a style="background: url('{{ asset('admin-assets/images/clients/'.$client->photo)}}')"
                               data-toggle="popover" data-placement="top" 
                               @if (Session::get('local') == 'ar') data-content= "{!!$client->ar_name!!}"
                               @else data-content= " {!!$client->name!!} " @endif
                               ></a>
                        </span>

                    </div>

                    @endforeach



                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.clients -->


<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('lang.news')}}</h2>
            </div>
            <div class="col-md-8">
                <div id="news-slider" class="owl-carousel">

                    @foreach($news as $new)
                    <div class="item">
                        <img src="{{asset('admin-assets/images/news/'.$new->photo)}}"
                             @if (Session::get('local') == 'ar') alt= "{!!$new->ar_photo_alt!!}"
                             @else alt= " {!!$client->photo_alt!!} " @endif>
                             <div class="caption">
                            <h4>
                                @if (Session::get('local') == 'ar') {!!$new->ar_title!!} @else {!!$new->title!!} @endif

                            </h4>
                            <h5>
                                @if (Session::get('local') == 'ar') {!!$new->cat->ar_name!!} @else {!!$new->cat->name!!} @endif   
                            </h5>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-4">
                <!--                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="btn btn-default btn-select">
                                            <input type="hidden" class="btn-select-input" id="" name="" value="" />
                                            <span class="btn-select-value">Select an Item</span>
                                            <span class='btn-select-arrow fa fa-caret-down'></span>
                                            <ul>
                                                <li class="selected">Asscending</li>
                                                <li>Deasscending</li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a class="btn btn-default btn-select">
                                            <input type="hidden" class="btn-select-input" id="" name="" value="" />
                                            <span class="btn-select-value">Select an Item</span>
                                            <span class='btn-select-arrow fa fa-caret-down'></span>
                                            <ul>
                                                <li class="selected">Option</li>
                                                <li>Option 2</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <div class="newsletter-head">
                                <h4><span>sign up</span> & save 10%</h4>
                                <h5>for our newsletter</h5>
                            </div>
                            <div class="input-group">
                                {!! Form::open(array('method' => 'POST','action' => ['AjaxController@subscribe'],'files'=>true,'class' => 'ajax-form-request')) !!}

                                <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                                <div class="message">
                                    
                                </div>
                                {!! Form::submit(trans('lang.subscribe'), array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
                                {!! Form::close() !!}   

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.news -->


<section class="products-categories">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('lang.products')}}</h2>
                <div class="view-all">
                    <a href="#" class="view-all-link">{{trans('lang.viewallcategories')}}</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tabbable">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <a type="button" class="btn btn-default big-default-btn">Product Calculator</a>
                    <ul class="nav nav-pills nav-stacked">

                        @foreach($cats as $i=>$cat)
                        <li @if($i==0) class="active" @endif><a href="#category{{$cat->id}}" data-toggle="tab">  
                                @if (Session::get('local') == 'ar') {!!$cat->ar_name!!} @else {!!$cat->name!!} @endif   
                            </a></li>


                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="tab-content">
                        @foreach($cats as $i=>$cat)

                        <div class="tab-pane @if($i==0) active @endif "  id="category{{$cat->id}}">
                            <h5>
                                @if (Session::get('local') == 'ar') {!!$cat->ar_name!!} @else {!!$cat->name!!} @endif  
                            </h5>
                            <div class="row">
                                @foreach($cat->products()->take(9) as $pro)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <a type="button" class="btn btn-default cat-btn" data-placement="top" data-toggle="popover" data-container=".col-md-4.col-sm-6" data-placement="left"
                                       data-html="true">
                                        @if (Session::get('local') == 'ar') {!!$pro->ar_name!!} @else {!!$pro->name!!} @endif  

                                    </a>
                                    <div id="popover-content" class="hide">
                                        <div class="cart-table">
                                            <div class="category-icon">
                                                <img src="images/category-icon1.png" class="img-responsive" />
                                            </div>
                                            <div class="details">
                                                <h5>@if (Session::get('local') == 'ar') {!!$pro->ar_name!!} @else {!!$pro->name!!} @endif</h5>
                                                <p>@if (Session::get('local') == 'ar') {!!$pro->ar_desc!!} @else {!!$pro->desc!!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="options-btns">
                                            <a href="#" type="button" class="btn btn-default">View</a>
                                            <a href="#" type="button" class="btn btn-default">Datasheet</a>
                                            <a href="#" type="button" class="btn btn-default"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.products-categories -->



<section class="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('lang.projects')}}</h2>
                <div class="view-all">
                    <a href="{{url('/projects')}}" class="view-all-link">{{trans('lang.viewallprojects')}}</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="projects-slider" class="owl-carousel owl-theme">

                    @foreach($recent_blogs as $project)
                    <div class="item">
                        <div class="card">
                            <a >
                                <div class="card-image" style="background-image: url('{{asset("admin-assets/images/blogs/".$project->photo)}}');">
                                </div>
                            </a>
                            <div class="card-content">
                                <h4>
                                    @if (Session::get('local') == 'ar') {!!$project->ar_title!!} @else {!!$project->title!!} @endif
                                </h4>
                                <h5>

                                </h5>
                            </div>
                        </div>
                    </div>


                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.projects -->






























@endsection




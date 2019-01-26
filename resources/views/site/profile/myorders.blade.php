@extends('site.template.index')
@section('content')








<section class="products-inner">
    <div class="container">
        <div class="row">
            <div class="tabbable">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <h2>{{trans('lang.myorders')}}</h2>
                    <ul class="nav nav-pills nav-stacked">
                        @foreach($myorders as $i=>$order)

                        <li  @if($i==0) class="active" @endif> 
                            {!!$order->created_at!!}
                    </li>


                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="aboutUs">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="toggle-icons">
                                    <span id="list"><i class="fa fa-th-list" aria-hidden="true"></i></span>
                                    <span id="grid"><i class="fa fa-th-large" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

         




                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="load-more">
                                    <a href="#">Load more</a>
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
<!-- /.products-inner -->
























@endsection
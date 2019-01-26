@extends('site.template.index')
@section('content')





<section class="favourit-list container-fluid">
    <nav class="side-nav" id="main-nav">
        <ul class="nav-tabs" role="tablist">
            <li role="presentation"><a class="close-menu" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i>Menu</a></li>
<!--            <li role="presentation" class="active"><a href="{{url('/myorders')}}" >My orders</a></li>-->
            <li role="presentation"><a href="#favourit-list" aria-controls="favourit-list" role="tab" data-toggle="tab">My saved items</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Settings</a></li>
            <li role="presentation"><a href="{{url('/logout')}}" >Logout</a></li>
        </ul>
    </nav>

    <div class="tab-content">
        <div class="container page-wrap tab-pane active" role="tabpanel" id="favourit-list">
            <div class="row">
                <div class="col-xs-12">		
                    <div class="toggle-icons">
                        <a href="#main-nav" class="open-menu" id="list"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                    </div>        
                    <h2>{{trans('lang.wlist')}} <span>@if((Auth::user()->wishlist() !=null)) {{count(Auth::user()->wishlist())}}  @endif</span> </h2>
                </div>
            </div>
            <div class="row">
                <div class="cart-inner-card-container">
                    @if((Auth::user()->wishlist() !=null))
                    @foreach(Auth::user()->wishlist() as $w)
                    <?php $pro = $w->product($w->product_id) ?>

                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <div class="cart-inner-card">     
                            <div class="cart-inner-card-content">
                                <span style="background-image: url('{{asset('admin-assets/images/products/'.$pro->photo)}}')">
                                    <div class="cart-inner-card-content-hovered">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </span>
                            </div>
                            <div class="cart-inner-card-footer">
                                <div class="cart-inner-card-txt">
                                    <h4><a href="#">{{ $pro->name }}</a></h4>
                                    <span>{{ $pro->cat->name }}</span>
                                </div>
                                <div class="cart-inner-card-btns">
                                    <a onclick="AddToCart('{{ $pro->id }}')"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <a onclick="Remove_cart('{{ $pro->id }}');"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <div class="input-group pull-right">
                                        <label>QTY</label>
                                        <input type="number" id="qu{{ $pro->id }}" name="quantity" min="1" max="100" value="1">
                                        <a class="button style-15" onclick="UpdateCart('{{ $pro->id }}');">Update Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @else
                    <center> <h1>No item till now in your Wish List</h1></center>
                    <br>
                    <br/>
                    <br/>
                    <br>
                    @endif


                </div>
            </div>
        </div>
        <div class="container page-wrap tab-pane" role="tabpanel" id="profile">
            <div class="row">
                <div class="col-xs-12">		
                    <div class="toggle-icons">
                        <a href="#main-nav" class="open-menu" id="list"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                    </div>        
                    <h2>{{trans('lang.myprofile')}} <span></span> </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="setttings-info">
                        <div class="upload-img">
                            <img src="{{asset('admin-assets/images/users/'.Auth::user()->photo)}}" class="img-responsive" />
                            <label class="btn btn-default btn-file">
                                upload photo <input type="file" style="display: none;">
                            </label>
                        </div>
                        <div class="user-info">
                            <h5><b>Hello,</b> {{Auth::user()->name}}<span></span></h5>
                        </div>
                        <div class="user-contact-info">
                            <p>{{Auth::user()->name}}

                                <span>{{Auth::user()->phone}}</span>
                                <span>{{Auth::user()->email}}</span>
                            </p>
                            <a href="#" class="edit-profile-link"><i class="fa fa-pencil"></i>Edit profile</a>
                        </div>
                    </div>

                    <!-- /.setttings-info -->
                    <div class="general-info">
                        <h4>General information</h4>
                        {!! Form::open(array('method' => 'PUT','action' => ['MyProfileController@update',Auth::user()->id],'files'=>true,'class' => 'ajax-form-request')) !!}
                        <div class="form-group">
                            <label for="firstname">Name:</label>
                            <input type="text" name='name' class="form-control" value="{{Auth::user()->name}}" placeholder="">
                        </div>

                        <br />

                        <div class="form-group">
                            <label for="lastname">Address:</label>
                            <input type="text" name='address' class="form-control"  value="{{Auth::user()->address}}" placeholder="">

                        </div>


                        <div class="form-group phone-input">
                            <label for="phone-flags">Phone:</label>
                            <input type="tel" id="phone-flags" placeholder=""  value="{{Auth::user()->phone}}">
                        </div>
                    </div>

                    <!-- /.general-info -->
                    <div class="general-info account-info">
                        <h4>Account information</h4>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email"  value="{{Auth::user()->email}}" class="form-control" placeholder="ah.maghrabi@floortec-psc.com">
                            <a href="#">edit</a>
                        </div>
                        <div class="form-group">
                            <label for="email">Password:</label>
                            <input type="password" name="password" class="form-control"  value="{{Auth::user()->password}}" placeholder="ah.maghrabi@floortec-psc.com">

                            <a href="#">edit</a>
                        </div>
                        <div class='message'></div>
                        {!! Form::submit('Save', array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
                        {!! Form::close() !!}   

                    </div>
                    <!-- /.general-info -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
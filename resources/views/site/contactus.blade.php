@extends('site.template.index')
@section('content')



	<main id="main" role="main">
		<!-- page banner -->
		<header class="page-banner">
			<div class="stretch">
				<img alt="image description" src="{{asset('adminstyle/assets/images/gallery/'.$main->contactusslider)}}" style="width:1520px; height:400px;" >
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="holder">
							<h1 class="heading text-capitalize">{{trans('lang.contactus')}}</h1>
							<p>We connect every where</p>
						</div>
						<ul class="breadcrumbs list-inline">
							<li><a href="{{url('/')}}">HOME</a></li>
							<li class="active"><a href="{{url('contactus')}}">contact us </a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- wedo section -->
		<section class="wedo-section container padding-bottom-30">
			<div class="row">
				<!-- coll -->
				<div class="col-xs-12 col-sm-4 coll">
					<span class="icon"><i class="fa fa-map-marker"></i></span>
					<h3>{{trans('lang.address')}}</h3>
					<p>{{$main->address}}</p>
					<p>{{$main->address2}}</p>
					<p>{{$main->address3}}</p>


				</div>
				<!-- coll -->
				<div class="col-xs-12 col-sm-4 coll">
					<span class="icon"><i class="fa fa-phone"></i></span>
					<h3>{{trans('lang.phone')}}</h3>
					<p>{{$main->phone}}</p>
				</div>
				<!-- coll -->
				<div class="col-xs-12 col-sm-4 coll">
					<span class="icon"><i class="fa fa fa-envelope-o"></i></span>
					<h3>{{trans('lang.email')}}</h3>
					<a class="color-stack" href="mailto:{{$main->email}}">{{$main->email}}</a>
				</div>
			</div>
		</section>
		<!-- contact map -->
		<div class="row contact-map">
			<div class="col-xs-12">
				<div class="map" data-lat="31.5497" data-lng="74.3436" data-zoom="8">
					
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13819.067794498571!2d31.4919540979899!3d30.014847527991922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1488802394042" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class="map-info">
						{{--<h2>Fekra</h2>--}}
						{{--<p>Lorem ipsum dolor sit amet...</p>--}}
					</div>
				</div>
			</div>
		</div>
		<!-- contact block -->
		<div class="contact-block container">
			<!-- contact message -->
			<div class="row contact-message">
				<!-- page heading -->
				<header class="page-heading">
					<h2 class="lime text-capitalize font-medium">{{trans('lang.sendusmsg')}}</h2>
					<p></p>
				</header>
				<div class="col-xs-12">
						{!! Form::open(array('route' =>'sendmsg.store','files'=>true,'class' => 'contact-form2 ajax-form-request')) !!}
					<div class="message">

					</div>
						<fieldset>
							<div class="row">
								<div class="col-xs-12 col-sm-6 margin-bottom-10">
									<input class="form-control" name="name" type="text" placeholder="Name*">
								</div>
								<div class="col-xs-12 col-sm-6 margin-bottom-10">
									<input class="form-control" name="email" type="email" placeholder="E-mail *">
								</div>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-6 margin-bottom-10">
									<input class="form-control" name="subject" type="text" placeholder="Subject here">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 margin-bottom-10">
									<textarea  class="form-control" cols="30" rows="10" name="message" placeholder="Message*"></textarea>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-xs-12">
									<input class="btn-more btn" type="submit" value="submit">
								</div>
							</div>
						</fieldset>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</main>


	@endsection

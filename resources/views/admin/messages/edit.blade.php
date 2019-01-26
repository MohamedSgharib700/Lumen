@extends('dashboard')
@section('content')   
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL('/admin') }}">Home</a></li>                    
    <li ><a href="{{ URL('/admin/messages') }}">Details</a></li>
    <li class="active">Edit</li>
</ul>
<!-- end START BREADCRUMB -->
{!! Form:: model($admin,array('method' => 'PATCH','action' => ['DetailsController@update',$admin->id], 'files'=>true,'class' => 'update-ajax-form-request')) !!}

<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.details.form',['submitButton' => "Update"])
{!! Form::close() !!}  
<!-- END BREADCRUMB -->   
@stop

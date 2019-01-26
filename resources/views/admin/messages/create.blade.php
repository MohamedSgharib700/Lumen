@extends('dashboard')
@section('content')   
<!-- START BREADCRUMB -->
<ul class="breadcrumb" >
    <li><a href="{{ URL('/admin') }}">Home</a></li>                    
    <li ><a href="{{ URL('/admin/details') }}">Details</a></li>
    <li class="active">Create</li>
</ul>
<!-- end START BREADCRUMB -->
{!! Form::open(array('route' =>'admin.details.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.details.form',['submitButton' => "Create"])
{!! Form::close() !!}    
@stop

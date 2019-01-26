@extends('admin.dashboard')
@section('content') 
{!! Form::open(array('route' =>'admin.news.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.news.form',['submitButton' =>'Submit Data'])
{!! Form::close() !!}   
@endsection
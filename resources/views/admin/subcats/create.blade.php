@extends('admin.dashboard')
@section('content') 
{!! Form::open(array('route' =>'admin.subcats.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.subcats.form',['submitButton' =>'Submit Data'])
{!! Form::close() !!}   
@endsection
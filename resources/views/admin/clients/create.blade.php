@extends('admin.dashboard')
@section('content') 
{!! Form::open(array('route' =>'admin.clients.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.clients.form',['submitButton' =>'Submit Data'])
{!! Form::close() !!}   
@endsection
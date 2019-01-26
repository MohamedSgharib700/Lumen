@extends('admin.dashboard')
@section('content') 
{!! Form::open(array('route' =>'admin.cats.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.cats.form',['submitButton' =>'Submit Data'])
{!! Form::close() !!}   
@endsection
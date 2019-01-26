@extends('admin.dashboard')
@section('content') 
{!! Form::open(array('route' =>'admin.team.store','files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
@include ('admin.team.form',['submitButton' =>'Submit Data'])
{!! Form::close() !!}   
@endsection
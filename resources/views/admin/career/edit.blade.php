@extends('admin.dashboard')
@section('content')
    {!! Form:: model($admin,array('method' => 'PATCH','action' => ['CareerController@update',$admin->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding-top: 20px">
</div><!-- div to display message after insert -->
@include ('admin.career.form',['submitButton' => "Update"])
{!! Form::close() !!}
@endsection
@extends('admin.dashboard')
@section('content')
    {!! Form:: model($admin,array('method' => 'PATCH','action' => ['TeamController@update',$admin->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding-top: 20px">
</div><!-- div to display message after insert -->
@include ('admin.team.form',['submitButton' => "Update"])
{!! Form::close() !!}
@endsection
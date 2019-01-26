@extends('admin.dashboard')
@section('content')
    {!! Form:: model($cat,array('method' => 'PATCH','action' => ['CategoryController@update',$cat->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding-top: 20px">
</div><!-- div to display message after insert -->
@include ('admin.cats.form',['submitButton' => "Update"])
{!! Form::close() !!}
@endsection
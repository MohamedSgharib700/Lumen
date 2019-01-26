@extends('admin.dashboard')
@section('content')
    {!! Form:: model($product,array('method' => 'PATCH','action' => ['NewsController@update',$product->id], 'files'=>true,'class' => 'ajax-form-request')) !!}
<div class="message" style="padding-top: 20px">
</div><!-- div to display message after insert -->
@include ('admin.news.form',['submitButton' => "Update"])
{!! Form::close() !!}
@endsection
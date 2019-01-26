<!-- START FORM   -->
@extends('admin.dashboard')
@section('content')

<div class="col-md-12">


    <div class="form-group col-md-12">
        <label class="control-label" > <h4  style="background-color: #fbc2c4; display: inline-block">email:</h4> {{$messages->email}}</label>  <br/>

    </div>


    <div class="form-group col-md-6">
        <label class="control-label">  <h4  style="background-color: #fbc2c4; display: inline-block">Subject: </h4> {{$messages->subject}}</label><br/>

    </div>


    <div class="form-group col-md-12">
        <label class="control-label">  <h4  style="background-color: #fbc2c4 ; display: inline-block">message </h4></label><br/>
        <div class="form-group col-md-6">
            {{$messages->message}}
            </div>
    </div>












</div>


    @endsection



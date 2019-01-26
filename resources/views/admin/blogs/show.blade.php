@extends('admin.dashboard')
@section('content')
<div class="row">


         @foreach($blog->galary as $ph)
        <img src="{{ asset('admin-assets/images/blogs/'.$ph->photo) }}" height="150" width="300">
        {!! Form::open(['action'=>['BlogController@delgal',$ph->id],'method'=>'delete','style'=>'display:inline']) !!}
        {!! Form::submit('Delete',array('class'=>'btn btn-danger btn-sm','onclick'=>'return confirm("Are You sure!!")')) !!}
        {!! Form::close() !!}
        @endforeach
 </div>
@stop

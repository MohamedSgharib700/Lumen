@extends('admin.dashboard')
@section('content')
<a class="btn-floating btn-large waves-effect waves-light red waves-light btn modal-trigger"  href="{{ url('admin/slider/create') }}"><i class="material-icons">add</i></a>
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}
        </div>
        <span class="card-title">Slider Images</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">#</th>
                    <th data-field="company">Image</th>
                    <th data-field="company">Title</th>
                    <th data-field="company">Status</th>
                    <th data-field="progress">Actions</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.slider.loop')
            </tbody>
        </table>
        {!! $slider->render() !!}
    </div>
</div>
@stop
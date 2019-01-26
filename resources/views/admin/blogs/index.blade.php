@extends('admin.dashboard')
@section('content')
 <a class="btn-floating btn-large waves-effect waves-light red " href="{{ url('admin/blogs/create')}}"><i class="material-icons">add</i></a>

<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}
         </div>
        <span class="card-title">Blogs</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="company">Image</th>
                    <th data-field="number">Title</th>
                    <th data-field="date">Posted at</th>
                     <th data-field="progress">Actions</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.blogs.loop')
            </tbody>
        </table>
        {!! $blogs->render() !!}
    </div>
</div>
 @endsection
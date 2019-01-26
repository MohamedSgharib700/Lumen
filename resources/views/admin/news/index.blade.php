@extends('admin.dashboard')
@section('content')
<a class="btn-floating btn-large waves-effect waves-light red " href="{{ url('admin/news/create')}}"><i class="material-icons">add</i></a>
 <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}
        </div>
        <span class="card-title">Products Sections</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="number">Image</th>
                    <th data-field="company">Title</th>
                    <th data-field="company">Category</th>

                    <th data-field="progress">Actions</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.news.loop')
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
</div>

@endsection
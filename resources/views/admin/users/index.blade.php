@extends('admin.dashboard')
@section('content')
    <div class="fixed-action-btn horizontal" >
        <a class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            <li><a href="{{ url('admin/users/create') }}"  class="btn-floating yellow darken-1"><i class="material-icons">queue</i></a></li>
        </ul>
    </div>
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}

        </div>
        <span class="card-title">Users</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="number">User Name</th>
                    <th data-field="company">Email</th>
                    <th data-field="date">Membership Date</th>
                    <th data-field="progress">Actions</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.users.loop')
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
</div>

@endsection
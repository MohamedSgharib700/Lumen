@extends('admin.dashboard')
@section('content')
<a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#create"><i class="material-icons">add</i></a>
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
                    <th data-field="company">name</th>
                    <th data-field="company">Arabic name</th>

                    <th data-field="progress">Actions</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.tags.loop')
            </tbody>
        </table>
        {!! $sections->render() !!}
    </div>
</div>
<div id="create" class="modal">
    <div class="modal-content">
        {!! Form::open(array('route' =>'admin.tags.store','files'=>true,'class' => 'ajax-form-request')) !!}
        <div class="message" >
        </div><!-- div to display message after insert -->
        @include ('admin.tags.form',['submitButton' =>'Submit Data'])
        {!! Form::close() !!} 
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

@endsection
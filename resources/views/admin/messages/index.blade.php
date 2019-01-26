@extends('admin.dashboard')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
                <div class="col-md-12 box-body-search">
                    <div class="input-group">
                        {!! Form::text('value', null, ['class' => 'form-control searchInput ','placeholder'=>"Search ..."]) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                <div class="col-md-6 box-body-search">
                    {!! Form::open(['method' => 'get', 'action' => 'MessageController@export']) !!}
                    <button type="submit" class="btn " > <i class="material-icons left"> play_for_work</i> Export xls</button>
                    {!! Form::close() !!}
                </div>

            </div>
            <div class="panel-body panel-body-table">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-actions">
                        <thead>
                        <th ><center>#</center></th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Subject</th>

                        <th>Actions</th>
                        </thead>
                        <tbody class="data"> 
                            @include('admin.messages.loop')
                        </tbody>
                    </table>
                </div>                                
            </div>
        </div>                                                



        <div class="dataTables_paginate paging_simple_numbers ajax-pagination" id="customers2_paginate">

        </div>
        {!! $services->render() !!}

    </div>
</div>
@stop







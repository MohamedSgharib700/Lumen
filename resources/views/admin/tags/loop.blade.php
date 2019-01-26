@foreach($sections  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->id }}</td>
    <td><strong>{{  $row->tag }}</strong></td>
    <td><strong>{{  $row->ar_tag }}</strong></td>

    <td>
        <a class="btn btn-default btn-rounded btn-sm waves-effect waves-light btn modal-trigger" href="#modal{{ $row->id}}" ><span class="fa fa-pencil"></span></a>
 <!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->

        {!! Form::open(['action'=>['TagsController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger red waves-effect waves-light" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}

    </td>
<div id="modal{{ $row->id }}" class="modal">
    <div class="modal-content">
        @include('admin.tags.edit',['section' => $row])
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
</tr>


@endforeach
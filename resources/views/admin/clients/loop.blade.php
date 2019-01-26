@foreach($products  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->id }}</td>
    <td><strong><img src="{{asset('/admin-assets/images/clients/'.$row->photo)}}" style="height: 100px;width: 200px;"></strong></td>
    <td><strong>{{  $row->url }}</strong></td>


    <td>
        <a class="btn btn-default btn-rounded btn-sm waves-effect waves-light btn modal-trigger" href={{ url('admin/clients/'.$row->id.'/edit')}} ><span class="fa fa-pencil"></span></a>
 <!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->

        {!! Form::open(['action'=>['ClientsController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger red waves-effect waves-light" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}

    </td>

</tr>


@endforeach
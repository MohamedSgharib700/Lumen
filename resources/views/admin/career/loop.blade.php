
@foreach($slider  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->job_title }}</td>
    <td class="text-center">{{ $row->job_dep }}</td>
    <td class="text-center">{{ $row->location }}</td>
    



    <td>
        <a class="btn btn-default btn-rounded btn-sm waves-effect waves-light btn modal-trigger" href={{ url('admin/career/'.$row->id.'/edit')}} ><span class="fa fa-pencil"></span></a>
 <!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->

        {!! Form::open(['action'=>['CareerController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger red waves-effect waves-light" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}

    </td>

</tr>


@endforeach
@foreach($cats  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->id }}</td>
    <td><strong><img src="{{ asset('admin-assets/images/cats/'.$row->photo)}}" style="height: 100px;width: 200px;"></strong></td>
    <td><strong>{{  $row->name }}</strong></td>

    <td>
        <a class="btn btn-default btn-rounded btn-sm waves-effect waves-light btn modal-trigger" href={{ url('admin/cats/'.$row->id.'/edit')}} ><span class="fa fa-pencil"></span></a>
 <!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->
        @if($row->id != 1)
        {!! Form::open(['action'=>['CategoryController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger red waves-effect waves-light" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}
        @endif
    </td>

</tr>


@endforeach
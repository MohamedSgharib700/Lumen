@foreach($slider  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->id }}</td>
    <td><img src="{{  asset('admin-assets/images/slider/'.$row->photo) }}" width="100" height="70"/></strong></td>
    <td><strong>{{  $row->title }}</strong></td>
    @if($row->status == 1)
    <td>Active</td>
    @else
    <td>Disactive</td>
    @endif
    <td>
         <a class="btn btn-default btn-rounded btn-sm" href="{{ url('admin/slider/'.$row->id.'/edit') }}" ><span class="fa fa-pencil"></span></a>
<!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->
          {!! Form::open(['action'=>['SliderController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger btn-rounded btn-sm" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}
 
    </td>
</tr>
@endforeach
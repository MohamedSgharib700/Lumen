@foreach($services  as $row)
<tr id="trow_{{ $row->id }}" @if($row->seen == '0') style="background-color: #b5b5b5" @endif>
    <td class="text-center">{{ $row->id }}</td>


    <td><strong>{{  $row->name }}</strong></td>
    <td><strong>{{  $row->email }}</strong></td>
    <td><strong>     <a href="{{ url('admin/messages/'.$row->id)}}" >{{ str_limit($row->subject,40) }} </a></strong></td>

    <td>
    {!! Form::open(['action'=>['MessageController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
    <button type="submit" class="btn btn-danger btn-rounded btn-sm" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
    {!! Form::close() !!}
</td>
</tr>
@endforeach
@foreach($services  as $row)
<tr id="trow_{{ $row->id }}" >
    <td class="text-center">{{ $row->id }}</td>


    <td><strong>{{  $row->email }}</strong></td>

    <td>
    {!! Form::open(['action'=>['SubscribersController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
    <button type="submit" class="btn btn-danger btn-rounded btn-sm" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
    {!! Form::close() !!}
</td>
</tr>
@endforeach
@foreach($rows  as $row)
<tr id="trow_{{ $row->id }}">
    <td class="text-center">{{ $row->id }}</td>
    <td><strong>{{  substr($row->name_en,0,100) }}</strong></td>
    <td><img src="{{  asset('admin-assets/images/continent/'.$row->image) }}" width="100" height="70"/></td>



    <td>
        <a class="btn btn-default btn-rounded btn-sm" href="{{ url('controll/continentals/'.$row->id.'/edit') }}" ><span class="fa fa-pencil"></span></a>
        <!--       
       <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->
        {!! Form::open(['action'=>['ContinentController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
        <button type="submit" class="btn btn-danger red" onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
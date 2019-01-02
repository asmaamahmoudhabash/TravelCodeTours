@foreach($rows  as $row)
    <tr id="trow_{{ $row->id }}">
        <td class="text-center">{{ $row->id }}</td>
        <td><strong>{{  substr($row->first_name,0,100) }}</strong></td>
        <td><strong>{{ $row->email }}</strong></td>


        <td>


            {!! Form::open(['action'=>['ContactController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
            <button type="submit" class="btn btn-danger red" onclick='return confirm("Are You sure!!")'><span
                        class="fa fa-times"></span></button>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
@foreach($rows  as $row)
    <tr id="trow_{{ $row->id }}">
        <td class="text-center">{{ $row->id }}</td>
        <td><strong>{{  substr($row->name_en,0,100) }}</strong></td>
        <td><strong>{{ $row->email}}</strong></td>

        <td>
            @if($row->id != 1 || Auth::user()->id == 1)
                <a class="btn btn-default btn-rounded btn-sm" href="{{ url('controll/users/'.$row->id.'/edit') }}" ><span class="fa fa-pencil"></span></a>
                <!--        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_{{ $row->id }}');"><span class="fa fa-times"></span></button>-->
                @if($row->id != 1 )
                    {!! Form::open(['action'=>['UserController@destroy',$row->id],'method'=>'delete' ,'style'=>'display: inline']) !!}
                    <button type="submit" class="btn btn-danger red " onclick='return confirm("Are You sure!!")' ><span class="fa fa-times"></span></button>
                    {!! Form::close() !!}
                @endif
            @endif
        </td>
    </tr>
@endforeach
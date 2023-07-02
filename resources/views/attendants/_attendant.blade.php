<tr>
    <td>000{{$attendant->id}}</td>
    <td>{{$attendant->employee->full_name}}</td>
    <td>{{$attendant->date}}</td>
    <td>{{$attendant->hour}}</td>
    <td>{{$attendant->sign_in_time}}</td>
    <td>{{$attendant->sign_out_time}}</td>
    <td>{{$attendant->late_time}} &nbsp menute</td>
    <td>
        <button type="button" class="btn btn-warning btn-sm " onclick="location.href='{{route('attendants.edit',$attendant->id)}}'" style="width: 150px;" >Edit</button>
        <form action="{{route('attendants.destroy',$attendant->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm " style="width: 150px;" >Delete</button>
        </form>
    </td>
</tr>
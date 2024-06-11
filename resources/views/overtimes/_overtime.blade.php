<tr>
    <td>000{{$overtime->id}}</td>
    <td>{{$overtime->employee->full_name}}</td>
    <td>{{$overtime->date}}</td>
    <td>{{$overtime->hour}}h</td>
    <td>{{$overtime->sign_in_time}}</td>
    <td>{{$overtime->sign_out_time}}</td>
    <td>{{$overtime->salary_per_hour}}$</td>
    <td><h6 style="width: 200px; overflow:hidden;text-align: left;">{{$overtime->note}}</h6></td>
    <td>
        <button type="button"onclick="location.href='{{route('overtimes.edit',$overtime->id)}}'" class="btn btn-warning" id="btn-edit">
            Edit
        </button>
        <form action="{{route('overtimes.destroy',$overtime->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" id="btn-delet">
                Delete
            </button>
        </form>
    </td>
</tr>
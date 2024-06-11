<tr>
    <td>000 00{{$payment->id}}</td>
    <td>{{$payment->employee->full_name}}</td>
    <td>{{$payment->employee->position}}</td>
    <td>{{$payment->main_salary}}$</td>
    <td>{{$payment->ot_salary}}$</td>
    <td>{{$payment->late_time}}h.mn</td>
    <td><h6 style="width: 200px; overflow:hidden;text-align: left;">{{$payment->note}}</h6></td>
    <td>
        <button class="btn btn-primary p-1" type="button" id="btn-paid" onclick="location.href='{{route('payments.show',$payment->id)}}'">
            view
        </button>
    </td>
</tr>
<tr>
    <td>000{{$task->id}}</td>
    <td>{{$task->task_name}}</td>
    <td>{{$task->project->project_name}}</td>
    <td>{{$task->task_status}}</td>
    <td>{{$task->start_date}}</td>
    <td>{{$task->end_date}}</td>
    <td>{{$task->employee->full_name}}</td>
    <td><h6 style="width: 200px; overflow:hidden;text-align: left;">{{$task->describtions}} </h6></td>
</tr>
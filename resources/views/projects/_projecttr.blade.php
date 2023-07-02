<tr>
    <td>{{$project->id}}</td>
    <td>{{$project->project_name}}</td>
    <td>{{$project->project_status}}</td>
    <td>{{$project->start_date}}</td>
    <td>{{$project->end_date}}</td>
    <td>
        <button type="button" class="btn btn-primary btn-sm p-1 " onclick="location.href='{{route('projects.show',$project->id)}}'" style="width: 150px;" >show</button>
    </td>
    <td>
        <button type="button" class="btn btn-warning btn-sm " onclick="location.href='{{route('projects.edit',$project->id)}}'" style="width: 150px;" >Edit</button>
        <form action="{{route('projects.destroy',$project->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm " style="width: 150px;" >Delete</button>
        </form>
    </td>
</tr>
<div class="box-items" id="box-items-1" style="box-sizing: border-box;">
    <a href="{{route('tasks.show',$task->id)}}" style="text-decoration: none;">
        <span>
            <span><i class="fa-sharp fa-solid fa-hourglass-start"></i></span>
            <h6 style="width:100%;height:40px; overflow:hidden;">{{$task->task_name}}</h6>
            <p> {{$task->project->project_name}}</p>
            <div class="box-img">
                <img src="{{$task->employee->profile}}" class="object-fit-cover" style="width:60px; height:60px; border-radius:50%;" alt="">
            </div>
        </span>
    </a>
    <div class="box-button">
        <button type="button" class="btn-action" id="btn-edit" onclick="location.href='{{route('tasks.edit',$task->id)}}'">
            <i class="fa-solid fa-file-pen"></i>Edit
        </button>
        <form action="{{route('tasks.destroy',$task->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn-action" id="btn-delete">
                <i class="fa-solid fa-trash"></i>Delete
            </button>
        </form>
    </div>
</div>
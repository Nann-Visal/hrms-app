<div class="col-xl-4 col-lg-4">
    <div class="box-events">
        <div class="box-header">
            <i class="fa-solid fa-compass" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            <small>{{$event->date}}</small> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <div class="box-menu">
                <button class="btn-action" type="submit" onclick="location.href='{{route('events.edit',$event->id)}}'" id="btn-edit"><i class="fa-solid fa-pen"></i></button>
                <form action="{{route('events.destroy',$event->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
                    @csrf
                    @method('delete')
                    <button class="btn-action btn btn-danger" type="submit" id="btn-delete"><i class="fa-sharp fa-solid fa-trash"></i></button>
                </form>
            </div>
        </div>
        <a href="{{route('events.show',$event->id)}}" style="text-decoration: none;">
            <div class="box-body">
                <p>{{$event->event_name}}</p>
            </div>
            <div class="box-footer">
                <h5>{{$event->employee->full_name}}</h5>
            </div>
        </a>
    </div>
</div>
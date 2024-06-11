<div class="col-xl-3 col-lg-3">
    <a href="{{route('employees.show',$employee->id)}}" class="box-employees">
        <img src="{{asset($employee->profile)}}" alt="">
        <div class="box-contents">
            <span><h6>{{$employee->full_name}}</h6></span>
            <span><p>{{$employee->position}}</p></span>
            <div class="box-email">
                <span><p>{{$employee->email}}</p></span>
            </div>
        </div>
    </a>
</div>
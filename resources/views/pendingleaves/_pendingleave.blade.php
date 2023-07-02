<div class="col-xl-3 col-lg-3">
    <a  href="{{route('pendingleaves.show',$pendingleave->id)}}" class="box-employees">
        <img src="{{$pendingleave->employee->profile}}" alt="">
        <div class="box-contents">
            <span><h6>{{$pendingleave->employee->full_name}}</h6></span>
            <span><p>{{$pendingleave->position}}</p></span>
            <div class="box-email">
                <span><p>Lasts {{$pendingleave->duration}} days</p></span>
            </div>
        </div>
    </a>
</div>
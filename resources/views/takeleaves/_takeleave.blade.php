<div class="col-xl-3 col-lg-3">
    <div class="box-employees">
        <a href="{{route('takeleaves.show',$takeleave->id)}}">
            <img src="{{$takeleave->employee->profile}}" alt="">
            <div class="box-contents">
                <span><h6>{{$takeleave->employee->full_name}}</h6></span>
                <span><p>{{$takeleave->employee->position}}</p></span>
                <div class="box-email">
                    <span><p>take leave {{$takeleave->duration}} days</p></span>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label class="form-label" for="event_name">Event Name</label>
            <input class="form-control form-control-lg @error('event_name') is-invalid @enderror" type="text" placeholder="event name . . ." value="{{old('event_name',$event->event_name)}}" name="event_name" id="event_name">
            @error('event_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="employee_id">Creater</label>
            <select class="form-select form-select-lg  @error('employee_id') is-invalid @enderror" name="employee_id" id="employee_id">
                <option value="" selected>Select Creater</option>
                @foreach ( $employees as $id => $employee)
                    <option value="{{$id}}" @selected($id==old('employee_id',$event->employee_id))>{{$employee}}</option>
                @endforeach
            </select>
            @error('employee_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="date">Date</label>
            <input class="form-control form-control-lg @error('date') is-invalid @enderror" value="{{old('date',$event->date)}}" type="date"  name="date" id="date">
            @error('date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="start_time">Start Time</label>
            <input class="form-control form-control-lg @error('start_time') is-invalid @enderror" value="{{old('start_time',$event->start_time)}}" type="time" placeholder="start_time . . ." name="start_time" id="start_time">
            @error('start_time')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="end_time">End Time</label>
            <input class="form-control form-control-lg @error('end_time') is-invalid @enderror" value="{{old('end_time',$event->end_time)}}" type="time" placeholder="end_time . . ." name="end_time" id="end_time">
            @error('end_time')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="subject">Subject</label>
            <textarea  rows="1" class="form-control form-control-lg @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="subject . . .">{{old('subject',$event->subject)}}</textarea>
            @error('subject')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="descibtion">Describtion</label>
            <textarea  rows="4" class="form-control form-control-lg @error('descibtion') is-invalid @enderror" name="descibtion" id="descibtion" placeholder="descibtions . . .">{{old('descibtion',$event->descibtion)}}</textarea>
            @error('descibtion')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-plus mx-3"></i> Save Edit</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('events.index')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
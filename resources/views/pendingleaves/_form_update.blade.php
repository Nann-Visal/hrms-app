<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="employee_id">Employee Name</label>
            <select class="form-select form-select-lg @error('employee_id') is-invalid @enderror" name="employee_id" id="employee_id">
                <option value="" selected>Select Employee</option>
                @foreach ( $employees as $id => $employee)
                    <option value="{{$id}}" @selected($id==old('employee_id',$pendingleave->employee_id)) >{{$employee}}</option>
                @endforeach
            </select>
            @error('employee_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="position">Employee Positon</label>
            <select class="form-select form-select-lg @error('position') is-invalid @enderror" name="position" id="position">
                <option value="{{old('position',$pendingleave->position)}}" selected>{{old('position',$pendingleave->position)}}</option>
                <option value="Junior" >Junior</option>
                <option value="Senior" >Senior</option>
                <option value="Leader" >Leader</option>
                <option value="Manager" >Manager</option>
            </select>
            @error('position')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="duration">Duration</label>
            <input class="form-control form-control-lg @error('duration') is-invalid @enderror" value="{{old('duration',$pendingleave->duration)}}" type="number" placeholder="duration . . ." name="duration" id="duration">
            @error('duration')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="start_date">Start Date</label>
            <input class="form-control form-control-lg @error('start_date') is-invalid @enderror" value="{{old('start_date',$pendingleave->start_date)}}" type="date"  name="start_date" id="start_date">
            @error('start_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="reason">Reason</label>
            <textarea  rows="4" class="form-control form-control-lg @error('reason') is-invalid @enderror" name="reason" id="reason" placeholder="reason . . .">{{old('reason',$pendingleave->reason)}}</textarea>
            @error('reason')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-user-plus mx-2"></i> Add Pending</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('pendingleaves.index-pendingleaves')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
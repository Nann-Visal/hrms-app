<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="employee_id">Employee Name</label>
            <select class="form-select form-select-lg @error('employee_id') is-invalid @enderror" name="employee_id" id="employee_id">
                <option value="" selected>Select Employee</option>
                @foreach ( $employees as $id => $employee)
                    <option value="{{$id}}" @selected($id==old('employee_id',$overtime->employee_id)) >{{$employee}}</option>
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
            <input class="form-control form-control-lg @error('date') is-invalid @enderror" value="{{old('date',$overtime->date)}}" type="date"  name="date" id="date">
            @error('date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="hour">Hour</label>
            <input class="form-control form-control-lg @error('hour') is-invalid @enderror" step="0.1" value="{{old('hour',$overtime->hour)}}" type="number" placeholder="hour . . ." name="hour" id="hour">
            @error('hour')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="sign_in_time">Sign In Time</label>
            <input class="form-control form-control-lg @error('sign_in_time') is-invalid @enderror" value="{{old('sign_in_time',$overtime->sign_in_time)}}" type="time" placeholder="sign in time . . ." name="sign_in_time" id="sign_in_time">
            @error('sign_in_time')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="sign_out_time">Sign Out Time</label>
            <input class="form-control form-control-lg @error('sign_out_time') is-invalid @enderror" value="{{old('sign_out_time',$overtime->sign_out_time)}}" type="time" placeholder="sign_out_time . . ." name="sign_out_time" id="sign_out_time">
            @error('sign_out_time')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="salary_per_hour">Salary Per Hour</label>
            <input class="form-control form-control-lg @error('salary_per_hour') is-invalid @enderror" value="{{old('salary_per_hour',$overtime->salary_per_hour)}}" type="number" placeholder="salary_per_hour . . ." name="salary_per_hour" id="salary_per_hour">
            @error('salary_per_hour')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="note">Note</label>
            <textarea  rows="4" class="form-control form-control-lg @error('note') is-invalid @enderror" name="note" id="note" placeholder="note . . .">{{old('note',$overtime->note)}}</textarea>
            @error('note')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-plus mx-3"></i> Save Edit</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('overtimes.index')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="employee_id">Employee Name</label>
            <select class="form-select form-select-lg @error('employee_id') is-invalid @enderror" name="employee_id" id="employee_id">
                <option value="" selected>Select Employee</option>
                @foreach ( $employees as $id => $employee)
                    <option value="{{$id}}" @selected($id==old('employee_id'))>{{$employee}}</option>
                @endforeach
            </select>
            @error('employee_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="pat_method">Payment Method</label>
            <input class="form-control form-control-lg @error('pat_method') is-invalid @enderror" value="{{old('pat_method')}}" type="text"  name="pat_method" id="pat_method" placeholder="000 000 000">
            @error('pat_method')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="date_pay">Date Pay</label>
            <input class="form-control form-control-lg @error('date_pay') is-invalid @enderror" value="{{old('date_pay')}}" type="date"  name="date_pay" id="date_pay">
            @error('date_pay')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="hour">Hour</label>
            <input class="form-control form-control-lg @error('hour') is-invalid @enderror" value="{{old('hour')}}" type="number" step="0.1" placeholder="00.00 h" name="hour" id="hour">
            @error('hour')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="ot_hour">OT Hour</label>
            <input class="form-control form-control-lg @error('ot_hour') is-invalid @enderror" value="{{old('ot_hour')}}" type="number" step="0.1" placeholder="00.00 h" name="ot_hour" id="ot_hour">
            @error('ot_hour')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="late_time">Late Time</label>
            <input class="form-control form-control-lg @error('late_time') is-invalid @enderror" value="{{old('late_time')}}" type="number" step="0.1" placeholder="00.00 mn" name="late_time" id="late_time">
            @error('late_time')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="main_salary">Goal Salary</label>
            <input class="form-control form-control-lg @error('main_salary') is-invalid @enderror" value="{{old('main_salary')}}" type="number" placeholder="000$" name="main_salary" id="main_salary">
            @error('main_salary')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="ot_salary">OT Salary</label>
            <input class="form-control form-control-lg @error('ot_salary') is-invalid @enderror" value="{{old('ot_salary')}}" type="number" placeholder="000$" name="ot_salary" id="ot_salary">
            @error('ot_salary')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="note">Note</label>
            <textarea  rows="4" class="form-control form-control-lg @error('note') is-invalid @enderror" value="{{old('note')}}" name="note" id="note" placeholder="note . . ."></textarea>
            @error('note')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-brands fa-cc-amazon-pay"></i> Pay Now</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('payments.index')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
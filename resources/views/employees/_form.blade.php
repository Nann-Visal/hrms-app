<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label class="form-label" for="full_name">Full Name</label>
            <input class="form-control form-control-lg" @error('full_name') is-invalid @enderror value="{{old('full_name')}}" type="text" placeholder="full name . . ." name="full_name" id="full_name">
            @error('full_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="email">Email Address</label>
            <input class="form-control form-control-lg @error('email') is-invalid @enderror " value="{{old('email')}}" type="text" placeholder="example@gmail.com" name="email" id="email">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="date_of_birth">Date of Birth</label>
            <input class="form-control form-control-lg @error('date_of_birth') is-invalid @enderror" value="{{old('date_of_birth')}}" type="date" name="date_of_birth" id="date_of_birth">
            @error('date_of_birth')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="start_date">Start Date</label>
            <input class="form-control form-control-lg @error('start_date') is-invalid @enderror" value="{{old('start_date')}}" type="date" name="start_date" id="start_date">
            @error('start_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="position">Positions</label>
            <select class="form-select form-select-lg @error('position') is-invalid @enderror" name="position" id="position">
                <option value="{{old('position')}}" selected>{{old('position')}}</option>
                <option value="InternShip">InternShip</option>
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
            <label class="form-label" for="salary">Goal Salary</label>
            <input class="form-control form-control-lg @error('salary') is-invalid @enderror" value="{{old('salary')}}" type="number" placeholder="$0000" name="salary" id="salary">
            @error('salary')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="phone_number">Phone Number</label>
            <input class="form-control form-control-lg @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}" type="text" placeholder="phone  number" name="phone_number" id="phone_number">
            @error('phone_number')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="bank_account">Bank Account</label>
            <input class="form-control form-control-lg @error('bank_account') is-invalid @enderror"  value="{{old('bank_account')}}" type="text" placeholder=" 000 000 000" name="bank_account" id="bank_account" >
            @error('bank_account')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="address">Address</label>
            <input class="form-control form-control-lg @error('address') is-invalid @enderror" value="{{old('address')}}" type="text" placeholder="address . . ." name="address" id="address">
            @error('address')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="profile">Profile</label>
            <input class="form-control form-control-lg @error('profile') is-invalid @enderror" value="{{old('profile')}}" type="file" name="profile" id="profile"> 
            @error('profile')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="cv">Cover Later</label>
            <input class="form-control form-control-lg @error('cv') is-invalid @enderror" value="{{old('cv')}}" type="file" name="cv" id="cv">
            @error('cv')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-user-plus mx-2"></i> Add New</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('employees.index-employees')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
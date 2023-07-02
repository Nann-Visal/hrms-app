<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label class="form-label" for="task_name">Task Name</label>
            <input class="form-control form-control-lg @error('task_name') is-invalid @enderror" value="{{old('task_name')}}" type="text" placeholder="project name . . ." name="task_name" id="task_name">
            @error('task_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="project_id">From Project</label>
            <select class="form-select form-select-lg @error('project_id') is-invalid @enderror"  name="project_id" id="project_id">
                <option value="" selected>Select Project</option>
                @foreach ( $projects as $id => $project)
                    <option value="{{$id}}" @selected($id==old('project_id')) >{{$project}}</option>
                @endforeach
            </select>
            @error('project_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="employee_id">Assign To Laber</label>
            <select class="form-select form-select-lg @error('employee_id') is-invalid @enderror" name="employee_id" id="employee_id">
                <option value="" selected>Select Laber</option>
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
            <label  class="form-label" for="task_status">Task Status</label>
            <select class="form-select form-select-lg @error('task_status') is-invalid @enderror" name="task_status" id="task_status">
                <option value="{{old('task_status')}}" selected>{{old('task_status')}}</option>
                <option value="New">New</option>
                <option value="Running">Running</option>
                <option value="Faile" >Failed</option>
                <option value="Complete" >Completed</option>
            </select>
            @error('task_status')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="start_date">Start Date</label>
            <input class="form-control form-control-lg @error('start_date') is-invalid @enderror" value="{{old('start_date')}}" type="date"  name="start_date" id="start_date">
            @error('start_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label class="form-label" for="end_date">End Date</label>
            <input class="form-control form-control-lg @error('end_date') is-invalid @enderror" type="date" value="{{old('end_date')}}" name="end_date" id="end_date">
            @error('end_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2"></div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="describtions">Describtion</label>
            <textarea  rows="4" class="form-control form-control-lg @error('describtions') is-invalid @enderror" value="{{old('describtions')}}" name="describtions" id="describtions" placeholder="describtion . . ."></textarea>
            @error('describtions')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-plus mx-3"></i> Add New</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('tasks.index-task')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
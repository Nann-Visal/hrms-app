<div class="card p-3 my-3" style="background-color: #f4f5f7;">
    <div class="row">
        <div class="col-xl-4 my-2">
            <label class="form-label" for="project_name">Project Name</label>
            <input class="form-control form-control-lg @error('project_name') is-invalid @enderror" value="{{old('project_name')}}" type="text" placeholder="project name . . ." name="project_name" id="project_name">
            @error('project_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-4 my-2">
            <label  class="form-label" for="project_status">Project Status</label>
            <select class="form-select form-select-lg @error('project_status') is-invalid @enderror" name="project_status" id="project_status">
                <option value="{{old('project_status')}}" selected>{{old('project_status')}}</option>
                <option value="New">New</option>
                <option value="Running">Running</option>
                <option value="Failed" >Failed</option>
                <option value="Completed" >Completed</option>
            </select>
            @error('project_status')
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
            <input class="form-control form-control-lg @error('end_date') is-invalid @enderror" type="date" value="{{old('end_date')}}"  name="end_date" id="end_date">
            @error('endate')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2">
            <label class="form-label" for="describtions">Describtion</label>
            <textarea  rows="4" class="form-control form-control-lg @error('describtions') is-invalid @enderror" value="{{old('describtion')}}" name="describtions" id="describtions" placeholder="describtion . . ."></textarea>
            @error('describtions')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-xl-8 my-2"></div>
        <div class="col-xl-4 my-2">
            <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 250px; border-radius: 3px;"><i class="fa-solid fa-plus mx-3"></i> Add</button>
            <button type="button" class="btn btn-outline-warning btn-lg" style="width: 250px; border-radius: 3px;" onclick="location.href='{{route('projects.index-project')}}'"><i class="fa-solid fa-rectangle-xmark mx-2"></i> Cacel</button>
        </div>
    </div>
</div>
<hr>
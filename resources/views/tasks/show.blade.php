@extends('layouts.main')
@section('content')
<section class="vh-100 p-fixed" style="background-color: #f4f5f7;">
    <div class="container-fluid py-5 h-50">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body p-4">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                          <h6>Name</h6>
                          <p class="text-muted" >{{$task->task_name}}</p>
                        </div>
                        <div class="col-4 mb-3">
                          <h6>Status</h6>
                          <p class="text-muted">{{$task->task_status}}</p>
                        </div>
                        <div class="col-4 mb-3">
                          <h6>Project Name</h6>
                          <p class="text-muted">{{$task->project->project_name}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                          <h6>Start Date</h6>
                          <p class="text-muted">{{$task->start_date}}</p>
                        </div>
                        <div class="col-4 mb-3">
                          <h6>End Date</h6>
                          <p class="text-muted">{{$task->end_date}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Reponseble</h6>
                            <p class="text-muted">{{$task->employee->full_name}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Describtion</h6>
                          <p class="text-muted">{{$task->describtions}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4">
                   <div class="row pt-1">
                    <div class="col-xl-10"></div>
                    <div class="col-xl-2">
                        <a href="{{route('tasks.index-task')}}" type="button" class="btn btn-outline-secondary btn-lg " style="width: 150px;" >Cancel</a>
                    </div>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection('content')
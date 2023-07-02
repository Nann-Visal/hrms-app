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
                        <div class="col-6 mb-3">
                        <h6>Name</h6>
                        <p class="text-muted">{{$project->project_name?? 'no record'}}</p>
                        </div>
                        <div class="col-6 mb-3">
                        <h6>Status</h6>
                        <p class="text-muted">{{$project->project_status?? 'no record'}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                        <h6>Start Date</h6>
                        <p class="text-muted">{{$project->start_date?? 'no record'}}</p>
                        </div>
                        <div class="col-6 mb-3">
                        <h6>End Date</h6>
                        <p class="text-muted">{{$project->end_date?? 'no record'}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                        <h6>Describtion</h6>
                        <p class="text-muted">{{$project->describtions?? 'no record'}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-4">
                   <div class="row pt-1">
                    <div class="col-xl-10"></div>
                    <div class="col-xl-2">
                        <a href="{{route('projects.index-project')}}" type="button" class="btn btn-outline-secondary btn-lg " style="width: 150px;" >Cancel</a>
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
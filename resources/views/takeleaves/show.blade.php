@extends('layouts.main')
@section('content')
<section class="vh-100 p-fixed" style="background-color: #f4f5f7;">
    <div class="container-fluid py-5 h-50">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: 15rem; border-bottom-left-radius: .5rem;">
                <img src="{{asset($takeleave->employee->profile)}}"
                  alt="Avatar" class="img my-5" style="width: 300px;height:300px; border-radius: 15rem; object-fit: cover;" />
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                        <h6>Employee Name</h6>
                        <p class="text-muted">{{$takeleave->employee->full_name}}</p>
                        </div>
                        <div class="col-6 mb-3">
                        <h6>Employee Position</h6>
                        <p class="text-muted">{{$takeleave->employee->position}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                        <h6>Start Date</h6>
                        <p class="text-muted">{{$takeleave->start_date}}</p>
                        </div>
                        <div class="col-6 mb-3">
                        <h6>Duration</h6>
                        <p class="text-muted">Take leaves {{$takeleave->duration}} days.</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                        <h6>Reason</h6>
                        <p class="text-muted">{{$takeleave->reason}}</p>
                        </div>
                    </div>
                </div>
                <div class="card_footer p-4">
                    <form action="{{route('takeleaves.destroy',$takeleave->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger btn-lg " style="width: 150px;" >Delete</button>
                    </form>
                    <button type="button" class="btn btn-outline-warning btn-lg " onclick="location.href='{{route('takeleaves.edit',$takeleave->id)}}'" style="width: 150px;" >Edit</button>
                    <a href="{{route('takeleaves.index-takeleaves')}}" type="button" class="btn btn-outline-secondary btn-lg " style="width: 150px;" >Cancel</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection('content')
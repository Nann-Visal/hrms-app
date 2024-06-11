@extends('layouts.main')
@section('content')
<section class="vh-100 p-fixed" style="background-color: #f4f5f7;">
    <div class="container-fluid py-5 h-50">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3"  style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body p-4">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>PIN</h6>
                            <p class="text-muted">000 00{{$payment->id}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Summary Hour</h6>
                            <p class="text-muted">{{$payment->hour}} h</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Summary Late Time</h6>
                            <p class="text-muted">{{$payment->late_time}} h.mn</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Date Pay</h6>
                            <p class="text-muted">{{$payment->date_pay}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Goal Salary</h6>
                            <p class="text-muted">{{$payment->main_salary}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>OT Salary</h6>
                            <p class="text-muted">{{$payment->ot_salary}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-4 mb-3">
                            <h6>Summary OT Hour</h6>
                            <p class="text-muted">{{$payment->ot_hour}} h</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Paymethod</h6>
                            <p class="text-muted">{{$payment->pat_method}}</p>
                        </div>
                        <div class="col-4 mb-3">
                            <h6>Note</h6>
                            <p class="text-muted">{{$payment->note}}</p>
                        </div>
                    </div>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                        <div class="col-xl-12 mb-3">
                            <h6>Employee</h6>
                            <img src="{{$payment->employee->profile}}" alt="" style="width:100px; height:100px; border-radius: 15%;object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="card_footer p-4">
                    <div class="row pt-3">
                        <div class="col-xl-4"></div>
                        <div class="col-xl-8">
                            <form action="{{route('payments.destroy',$payment->id)}}" method="POST" onclick="return confirm('Are you sure?')" style="display: inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-lg " style="width: 150px;" >Delete</button>
                            </form>
                            <button type="button" onclick="location.href='{{route('payments.edit',$payment->id)}}'" class="btn btn-outline-warning btn-lg " style="width: 150px;" >Edit</button>
                            <a href="{{route('payments.index')}}" type="button" class="btn btn-outline-secondary btn-lg " style="width: 150px;" >Cancel</a>
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
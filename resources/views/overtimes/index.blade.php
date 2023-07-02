@extends('layouts.main')
@section('content')
    <section class="vh-50 p-fixed" style="background-color: #f4f5f7;">
        <div class="container-fluid py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card_footer p-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-outline-info btn-lg " style="width: 150px;" onclick="location.href='{{route('overtimes.create')}}'" >ADD NEW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    @if ($message = session('message'))
                        <div class="alert alert-success">{{$message}}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- start table content -->
    <table class="table table-striped table-hover box-table-attendants">
            <thead>
                <tr>
                    <th>PIN</th>
                    <th>Employees</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>SignIn</th>
                    <th>SignOut</th>
                    <th>Salary/Hour</th>
                    <th>Note</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($overtimes as $key => $overtime )
                    @include('overtimes._overtime')
                @endforeach
            </tbody>
    </table>
    <!-- end table content -->
@endsection('content')
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
                                    <form action="" class="col-8">
                                        <div class="row">
                                             <div class="col-4">
                                                 <label class="form-label" for="date">Date</label>
                                                 <input class="form-control form-control-lg @error('date') is-invalid @enderror" value="{{old('date')}}" type="date"  name="date" id="date">
                                             </div>
                                             <div class="col-4">
                                                <label class="form-label" for="start_date">Employees</label>
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
                                             <div class="col-3 pt-4">
                                                 <button type="submit" class="btn btn-outline-primary btn-lg mt-2 " style="width: 150px;">Search</button>
                                             </div>
                                        </div>
                                     </form>
                                     <div class="col-4 pt-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-outline-info btn-lg " style="width: 150px;" onclick="location.href='{{route('attendants.create')}}'" >ADD NEW</button>
                                     </div>
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
                    <th>Employees Name</th>
                    <th>Date</th>
                    <th>Hour</th>
                    <th>In</th>
                    <th>Out</th>
                    <th>Late</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendants as $key => $attendant )
                    @include('attendants._attendant')
                @endforeach
            </tbody>
    </table>
    <!-- end table content -->
@endsection('content')
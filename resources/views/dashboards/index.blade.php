@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Summary</p>
                </div>
                <span><p>{{$project}}</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Completed</p>
                </div>
                <span><p>{{$project_completed}}</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Running</p>
                </div>
                <span><p>{{$project_running}}</p></span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="box-project-dsh">
                <div class="box-contents">
                    <i class="fa-solid fa-diagram-project"></i>
                    <p>Project Failed</p>
                </div>
                <span><p>{{$project_failed}}</p></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-1">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-10">
                        <span><p>Former Employees</p></span>
                    </div>
                    <div class="col-xl-1">
                        <span><p>{{$former_employees}}</p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-1">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-10">
                        <span><p>Pending Employees</p></span>
                    </div>
                    <div class="col-xl-1">
                        <span><p>{{$pending_leave}}</p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-1">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-10">
                        <span><p>All Employees</p></span>
                    </div>
                    <div class="col-xl-1">
                        <span><p>{{$employees}}</p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="box-emp-contents">
                    <div class="col-xl-1">
                        <i class="fa-solid fa-user-minus"></i>
                    </div>
                    <div class="col-xl-10">
                        <span><p>TakeLeave Employees</p></span>
                    </div>
                    <div class="col-xl-1">
                        <span><p>{{$take_leave}}</p></span>
                    </div>
            </div>
        </div>
        <div class="col-xl-12] col-lg-12">
            <div class="box-dsh-project-running">
                <h5>Running Projects</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Projects Name</th>
                            <th>Start date</th>
                            <th>Finish date</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($project_runnings as $key => $project_run )
                            @include('dashboards._project_running')
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection('content')
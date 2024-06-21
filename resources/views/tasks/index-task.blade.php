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
                                    <form action="{{ route('tasks.index-task')}}" id="form_filter" class="col-8" method="GET">
                                        @csrf
                                        <div class="row">
                                             <div class="col-3">
                                                 <label class="form-label" for="start_date">Start Date</label>
                                                 <input class="form-control form-control-lg @error('start_date') is-invalid @enderror" value="{{old('start_date')}}" type="date"  name="start_date" id="start_date">
                                             </div>
                                             <div class="col-3">
                                                 <label class="form-label" for="end_date">End Date</label>
                                                 <input class="form-control form-control-lg @error('end_date') is-invalid @enderror" value="{{old('end_date')}}" type="date"  name="end_date" id="end_date">
                                             </div>
                                             <div class="col-3">
                                                 <label  class="form-label" for="project_status">Task Status</label>
                                                 <select class="form-select form-select-lg @error('project_status') is-invalid @enderror" name="project_status" id="project_status">
                                                     <option value="{{old('project_status')}}" selected>{{old('project_status')}}</option>
                                                     <option value="New" selected>New</option>
                                                     <option value="Running">Running</option>
                                                     <option value="Failed" >Failed</option>
                                                     <option value="Completed" >Completed</option>
                                                 </select>
                                             </div>
                                             <div class="col-3">
                                                <label  class="form-label" for="project_status">Project</label>
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
                                        </div>
                                     </form>
                                     <div class="col-4 pt-4 d-flex justify-content-between ms-1">
                                        <button type="submit" class="btn btn-outline-primary btn-lg mt-2" id="btn_search" style="width: 150px;">Search</button>
                                        <button type="button" class="btn btn-outline-info btn-lg " style="width: 150px;" onclick="location.href='{{route('tasks.create')}}'" >ADD NEW</button>
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
    <!-- start card task -->
    <div class="box-card">
       @foreach ($tasks as $key => $task )
           @include('tasks._tasks')
       @endforeach
    </div>
    <!-- end card task -->
    <!-- start table content -->
    <div class="box-table-depa">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Projecs Name</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Responsible</th>
                    <th>Descriptions</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($tasks as $key => $task)
                   @include('tasks._table')
               @endforeach
            </tbody>
        </table>
    </div>
    <!-- end table content -->
@endsection('content')
@section('extraScript')
   <script>
        document.getElementById('btn_search').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('form_filter').submit();
        });
   </script>
@endsection
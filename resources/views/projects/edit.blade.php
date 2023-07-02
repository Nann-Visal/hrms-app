@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('projects.update',$project->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('projects._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
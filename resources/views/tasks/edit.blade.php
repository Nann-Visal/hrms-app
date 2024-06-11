@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('tasks.update',$task->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('tasks._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
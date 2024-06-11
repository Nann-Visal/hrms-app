@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('employees.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('employees._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
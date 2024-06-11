@extends('layouts.main')
@section('content')
<!-- start form input -->
    <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @includeIf('employees._form')
    </form>
    <!-- end form input -->

@endsection('content')
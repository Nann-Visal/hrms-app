@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('projects._form')
    </form>
    <!-- end form input -->
@endsection('content')
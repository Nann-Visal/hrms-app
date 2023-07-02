@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('pendingleaves.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('pendingleaves._form')
    </form>
    <!-- end form input -->
@endsection('content')
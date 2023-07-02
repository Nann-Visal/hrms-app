@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('takeleaves.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('takeleaves._form')
    </form>
    <!-- end form input -->
@endsection('content')
@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('overtimes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('overtimes._form')
    </form>
    <!-- end form input -->
@endsection('content')
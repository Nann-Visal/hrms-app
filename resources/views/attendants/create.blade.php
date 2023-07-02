@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('attendants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('attendants._form')
    </form>
    <!-- end form input -->
@endsection('content')
@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('payments.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('payments._form')
    </form>
    <!-- end form input -->
@endsection('content')
@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('events._form')
    </form>
    <!-- end form input -->
@endsection('content')
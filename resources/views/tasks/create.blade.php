@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('tasks.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        @include('tasks._from')
    </form>
    <!-- end form input -->
@endsection('content')
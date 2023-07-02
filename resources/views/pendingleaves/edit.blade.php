@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('pendingleaves.update',$pendingleave->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('pendingleaves._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
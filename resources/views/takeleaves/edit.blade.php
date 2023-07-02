@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('takeleaves.update',$takeleave->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('takeleaves._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
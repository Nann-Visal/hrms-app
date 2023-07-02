@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('overtimes.update',$overtime->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('overtimes._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
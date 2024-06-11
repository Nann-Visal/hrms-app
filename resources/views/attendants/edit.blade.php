@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('attendants.update',$attendant->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('attendants._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
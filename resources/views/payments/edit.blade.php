@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('payments.update',$payment->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('payments._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
@extends('layouts.main')
@section('content')
    <!-- start form input -->
    <form action="{{route('events.update',$event->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('events._form_update')
    </form>
    <!-- end form input -->
@endsection('content')
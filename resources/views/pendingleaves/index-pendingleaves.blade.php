@extends('layouts.main')
@section('content')
    <section class="vh-50 p-fixed" style="background-color: #f4f5f7;">
        <div class="container-fluid py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card_footer p-4 d-flex justify-content-center">
                                    <button type="button" class="btn btn-outline-info btn-lg " style="width: 150px;" onclick="location.href='{{route('pendingleaves.create')}}'" >ADD NEW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-12 mb-4 mb-lg-0">
                    @if ($message = session('message'))
                        <div class="alert alert-success">{{$message}}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- start card employees -->
    <div class="row">
        @foreach ($pendingleaves as $key => $pendingleave)
            @include('pendingleaves._pendingleave')
        @endforeach
    </div>
    <!-- end card employees -->
@endsection('content')

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
                                    <form action="{{ route('takeleaves.index-takeleaves')}}" class="col-8">
                                        <div class="row">
                                             <div class="col-8">
                                                 <label class="form-label" for="full_name">Full Name</label>
                                                 <input class="form-control form-control-lg @error('full_name') is-invalid @enderror" value="{{old('full_name')}}" type="text"  name="full_name" id="full_name">
                                             </div>
                                             <div class="col-4 pt-4">
                                                <button type="submit" class="btn btn-outline-primary btn-lg mt-2 " style="width: 150px;" onclick="" >Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-4 pt-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-outline-info btn-lg " style="width: 150px;" onclick="location.href='{{route('takeleaves.create')}}'" >ADD NEW</button>
                                    </div>
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
        @foreach ($takeleaves as $key => $takeleave )
            @include('takeleaves._takeleave')
        @endforeach
    </div>
    <!-- end card employees -->
@endsection('content')
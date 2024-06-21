@extends('layouts.app')
@section('content')
    <div class="container d-flex align-items-cetnter" style="padding-left: 170px; padding-top:150px;">
        <div class="card w-50 shadow-lg p-5 mb-5 rounded">
            <form method="POST" action="{{ route('login') }}" class="signin-form">
                @csrf
                <div class="form-group mb-3">
                    <label class="label" for="name">Email</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="Email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
            
                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
                </div>
            
                <!-- Submit button -->
                <div class="d-flex align-items-center justify-content-center">
                    <button  type="submit" class="btn btn-success px-5">Sign in</button>
                </div>

            </form>
        </div>
    </div>
@endsection('content')



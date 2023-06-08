@extends('layouts.authmain')
@section('content')
    <div class="box-input">
        <label for="">Full Name &nbsp &nbsp &nbsp: &nbsp </label>
        <input type="email" name="" id="" placeholder="full-name . . .">
    </div>
    <div class="box-input">
        <label for="">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp </label>
        <input type="email" name="" id="" placeholder="example@gmail.com . . .">
    </div>
    <div class="box-input">
        <label for="">Password &nbsp &nbsp &nbsp : &nbsp </label>
        <input type="password" name="" id="" placeholder="password 8 bit  . . .">
    </div>
    <div class="box-input">
        <label for="">C-Password &nbsp : &nbsp </label>
        <input type="password" name="" id="" placeholder="password 8 bit  . . .">
    </div>

    <button type="submit">Sign Up</button><br><br>
    
    <span id="span-noaccount">
        <a href="{{url('/signin')}}">did you have an account?</a>
    </span>
@endsection('content')
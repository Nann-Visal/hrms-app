@extends('layouts.authmain')
@section('content')
    <div class="box-input">
        <label for="">Email &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp </label>
        <input type="email" name="" id="" placeholder="example@gmail.com . . .">
    </div>
    <div class="box-input">
        <label for="">Password &nbsp : &nbsp </label>
        <input type="password" name="" id="" placeholder="password 8 bit  . . .">
    </div>

    <span id="span-forgot">for got password?</span>

    <button type="submit">Sign In</button><br><br>
    
    <span id="span-noaccount">
        <a href="{{url('/signup')}}">did you have no account?</a>
    </span>
@endsection('content')
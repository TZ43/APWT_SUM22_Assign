@extends('layouts.loggedin')
@section('content')
    <form method="post" action="">
        <fieldset>
            <legend>Login</legend>
            {{@csrf_field()}}
            
            Email: <input type="text" name="email" placeholder="Email" value="{{old('email')}}"><br>
            @error('email')
                {{$message}} <br>
            @enderror
            Password: <input type="password" name="password" placeholder="Password" ><br>
            @error('password')
                {{$message}}<br>
            @enderror
            <input type="submit" value="Login">
        </fieldset>
    </form>
@endsection
@extends('layouts.loggedin')
@section('content')
    <form method="post" action="">
        <fieldset>
            <legend>Registration</legend>
            {{@csrf_field()}}
            Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
            @error('name')
                {{$message}}<br>
            @enderror
        
            Email: <input type="text" name="email" placeholder="Email" value="{{old('email')}}"><br>
            @error('email')
                {{$message}} <br>
            @enderror
            Password: <input type="password" name="password" placeholder="Password"><br>
            @error('password')
                {{$message}}<br>
            @enderror
            Confirm Password: <input type="password" name="conf_password" placeholder="Confirm Password"><br>
            @error('conf_password')
                {{$message}}<br>
            @enderror
            <input type="submit" value="Register">
        </fieldset>
    </form>
@endsection
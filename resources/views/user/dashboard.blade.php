@extends('layouts.main')
@section('content')
<h1>Welcome to dash board</h1>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Type</th>

    </tr>
    @foreach($users as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td><a href="{{route('user.details',['id'=> $u -> id])}}">{{$u->name}}</a></td>
            <td>{{$u->password}}</td>
            <td>{{$u->type}}</td>
        </tr>
    @endforeach
</table> 
@endsection
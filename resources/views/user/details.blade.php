@extends('layouts.main')
@section('content')
<table border='1'>
<tr>
    <th align ='center' colspan="2">User Details</th>
</tr>
<tr>
@foreach($users as $u)
<th>Id:</th>
<td>{{$u->id}}</td>
@endforeach
</tr>
<tr>
@foreach($users as $u)
<th>Name:</th>
<td>{{$u->name}}</td>
@endforeach
</tr>
<tr>
@foreach($users as $u)
<th>Type:</th>
<td>{{$u->type}}</td>
@endforeach
</tr>
<tr>
@foreach($users as $u)
<th>Password:</th>
<td>{{$u->password}}</td>
@endforeach
</tr>
</table>
@endsection
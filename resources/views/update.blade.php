@extends('template')
@section('content')
<h1>Ini halaman update</h1>
<form action="/update" method="post">
   {{csrf_field()}}
   Nama :
   <input type="text" name="nama" value="{{$user->nama}}">
   Username :
   <input type="text" name="username" value="{{$user->username}}">
   Password :
   <input type="text" name="password" value="{{$user->password}}">
   <input type="hidden" name="id" value="{{$user->id}}">
   <input type="submit" value="Insert Data!">
</form>
@endsection
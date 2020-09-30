@extends('template')
@section('content')
<h1><p>Ini DB Facade :</p></h1>
@foreach($user as $use)
   <li>
       {{$use->nama}} dan {{$use->username}}
       <a href="/user/update/{{$use->id}}">Update</a>
       <a href="/user/delete/{{$use->id}}">Delete</a>
       </li>
@endforeach
<br>
<h1>Ini Eloquent :</h1>
@foreach($elo as $el)
   <li>
       {{$el->nama}} dan {{$el->username}}
       <a href="/user/update/{{$el->id}}">Update</a>
       <a href="/user/delete/{{$el->id}}">Delete</a>
       </li>
@endforeach
<br>
<form action="/insert" method="post">
   {{csrf_field()}}
   Nama :
   <input type="text" name="nama">
   Username :
   <input type="text" name="username">
   Password :
   <input type="text" name="password">
   <input type="submit" value="Insert Data!">
</form>
@endsection

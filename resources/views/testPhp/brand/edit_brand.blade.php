@extends('layouts.layout_admin')

@section('content')
<p>Chinh sua cho {{$brand->name}}</p>
<form method ="post">
@csrf
    <input type = "text" name = "newName" placeholder = "{{$brand->name}}" required >
    <input type = "submit" >
</form>
@endsection
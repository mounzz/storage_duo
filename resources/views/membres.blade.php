@extends('layout.index')

@section('content')

<form action="/membres" method="POST">
    @csrf
    <input type="file" name="photo" id="photo">
    <input type="text" name="nom" id="" placeholder="nom">
    <input type="number" name="age" id="" placeholder="age">
</form>

@endsection

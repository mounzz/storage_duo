@extends('layout.index')

@section('content')
<h1>entrez un genre</h1>
<form action="/genre" method="POST">
    @csrf
    <input type="text" name="genre">
    <button type="submit">envoyer</button>
</form>

@endsection

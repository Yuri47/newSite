@extends('menu')
@section('title', 'Mostrar Usuarios')
@section('conteudo')
@foreach ($users as $user )

Nome: {{$user->name}} <br>
Email: {{$user -> email}}<br>
 

<form method="post" action="/edit/{{$user -> id}}">
	 <input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="submit" value="editar">
</form>
<img src="/image/{{$user->image}}" widht="auto" height="100px">
 <br>
@endforeach


@stop
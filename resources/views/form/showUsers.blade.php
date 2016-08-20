@extends('menu')
@section('title', 'Mostrar Usuarios')
@section('conteudo')
@foreach ($users as $user )

Nome: {{$user->name}} <br>
Email: {{$user -> email}}<br>
<a href="/edit/{{$user -> id}}">Editar</a> <br>
 <br>
@endforeach


@stop
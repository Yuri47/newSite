@extends('layoutpadrao')
 
@section('conteudo')
 
<h1>serviços</h1>
@foreach ($services as $service )

Nome: {{$service->nameService}} <br>
Descrição: {{$service -> description}}<br>
Descrição Longa: {!!$service -> longDescription!!}<br>
<img src="/image/{{$service -> imageService}}"  widht="auto" height="100px">

@endforeach

@stop
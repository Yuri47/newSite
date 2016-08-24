@extends('layouts.app')
 
@section('content')

 


<h1>editar serviços</h1>
  {!!(string)Session::get('temp')!!}
 
@foreach ($errors->all() as $error)
    {{$error}}<br>  <!-- imprimir os erros de validação caso haja algum, serão enviados pelo Validator -->
@endforeach

<div align="center">

Imagem atual: <img src="/image/images/{{$services->imageService}}" style="width: auto; height: 100px;">	

<form action="/editservice" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="{{$services->id}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
	nome do Serviço: <input required type="text" name="nameService" value="{{$services->nameService}}"> <br>
	Descrição Curta: <input required type="text" name="description" value="{{$services->description}}"> <br>
	Descrição Detalhada: <textarea  class="form-control" rows="3" name="longDescription" >{{$services->longDescription}}</textarea><br>
	Foto: <input  type="file" name="image" accept="image/*"> <br>

	<input type="submit" value="enviar">

</form>
</div>


<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

 


 
 
@stop
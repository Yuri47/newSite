@extends('layoutpadrao')
 
@section('conteudo')
 
<h1>criar serviços</h1>
<div align="center">

<form action="/newservice" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
	nome do Serviço: <input required type="text" name="nameService" value=" "> <br>
	Descrição Curta: <input required type="text" name="description" value=" "> <br>
	Descrição Detalhada: <textarea  class="form-control" rows="3" name="longDescription" ></textarea><br>
	Foto: <input required type="file" name="image" accept="image/*"> <br>

	<input type="submit" value="enviar">

</form>
</div>


<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

@stop
@extends ('menu')
@section('title', 'Editar Usuario')

@section('conteudo')

 
<form method="post" action="/makeedit">
	<input type="hidden" name="id" value="{{$id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    Nome: <input type="text" name="name" required value="{{$name}}"><br>
    Email: <input type="text" name="email" required value="{{$email}}">
    <input type="submit" value="Editar">

</form>
<br>
<form method="post" action="/deleteuser/{{$id}}">
	<input type="hidden" name="id" value="{{$id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Excluir">

</form>
 

@stop


 
@extends ('menu')
@section('title', 'Editar Usuario')

@section('conteudo')

 
<form method="post" action="/makeedit">
	<input type="hidden" name="id" value="{{$user->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    Nome: <input type="text" name="name" required value="{{$user->name}}"><br>
    Email: <input type="text" name="email" required value="{{$user->email}}">
    <input type="submit" value="Editar">

</form>
<br>
<form method="post" action="/deleteuser/{{$user->id}}">
	<input type="hidden" name="id" value="{{$user->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Excluir">

</form>
 

@stop


 
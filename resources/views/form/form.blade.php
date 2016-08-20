@extends ('menu')
@section('title', 'Formulario')

@section('conteudo')
<form method="post" action="/addUser">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    Nome: <input type="text" name="name" required><br>
    Email: <input type="text" name="email" required>
    <input type="submit" value="Enviar">

</form>

@stop



 
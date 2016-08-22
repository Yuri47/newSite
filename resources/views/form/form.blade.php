@extends ('menu')
@section('title', 'Formulario')

@section('conteudo')
<form method="post" action="/addUser" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    Nome: <input type="text" name="name" required><br>
    Email: <input type="text" name="email" required><br>

    Imagem: <input type="file" name="image"> <br>
    <div class='text-danger'>{{$errors->first('image')}}</div>
    <input type="submit" value="Enviar">

</form>

<img src="/image/novoArquivo.jpg" width="100px" height="auto">

@stop



 
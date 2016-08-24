@extends('layouts.app')
 
@section('content')

 
 @foreach ($services as $serv)
 

		<form action="/pageedit" method="post">
        <input type="hidden" name="id" value="{{$serv->id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        Nome: {{$serv->nameService }}
        <input type="submit" value="editar" class="btn btn-success">
     	</form>

@if($serv->publish == 1)
 
		<form action="/disableservice" method="post">
		<input type="hidden" name="id" value="{{$serv->id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="Clique para desativar" class="btn btn-danger">
     	</form>
@elseif ($serv->publish == 0)
 
		<form action="/enableservice" method="post">
		<input type="hidden" name="id" value="{{$serv->id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="Clique para ativar" class="btn btn-success">
     	</form>

@endif

		<form action="/deleteservice" method="post">
		<input type="hidden" name="id" value="{{$serv->id}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="Excluir" class="btn btn-danger" onclick="redirecionar();">
     	</form>







<br><br><br><br>



 @endforeach




 <script type="text/javascript">
function redirecionar(){
  if(confirm("Deseja deletar o serviço? Esta operação não pode ser desfeita.")){
    window.location="/deleteservice";
  }
}
</script>
@stop
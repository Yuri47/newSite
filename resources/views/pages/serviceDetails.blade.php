@extends('layouts.layoutpadrao')
 
@section('conteudo')
  <div class="row centro">


 


 @foreach ($service as $serv)
 


 

 <div class="featurette">

      <div class="row" >
        <div class="span4" > 
        <img class="featurette-image pull-left" src="/image/images/{{$serv->imageService}}" alt="Imagem Servico">
    </div>

    <div class="span8">
        <h1 class="featurette-heading"> {{$serv->nameService}}</h1>
        <h3 class="lead"> {{$serv->description}} </h3>
        <p class="lead">{!!$serv->longDescription!!} </p>
         

           </div>
      </div>
      </div>



@endforeach












 
</div> <!-- end row centro-->
@stop

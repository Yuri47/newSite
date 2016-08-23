@extends('layoutpadrao')
 
@section('conteudo')
  <div class="row centro">


@foreach ($services as $service )
 
<section class="4u sessao">
            <span class="pennant"> 
              <a href="/services/{{$service->url}} ">
              <img  src="/image/images/{{$service -> imageService}}" style="width: auto; height: 200px;" alt="Imagem Produto" class="img-rounded"data-src="holder.js/140x140"></span>
            </a>

            <h3>{{$service->nameService}}</h3>
            <p> {{$service -> description}}</p>
             <div class="botaoDetalhe">
            <a href="/services/{{$service->url}}" class="button button-style1">Ver Detalhes »</a>
           </div>
          </section>
 

@endforeach
 
</div> <!-- end row centro-->
@stop


<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

         
<link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
    </head>
    <body>
        <div class="container">
<a href="/form">Formulario</a> <br>
<a href="/showusers">Mostrar</a> <br> <br>
        	@yield('conteudo')
          
        </div>
    </body>
</html>

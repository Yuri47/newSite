<!DOCTYPE HTML>
 
 
 
<html lang="pt-BR">
	<head>

		<meta name="theme-color" content="‪#‎0000ff">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="description" content="description" />
		<meta name="keywords" content="keyworkds" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href=" {{ asset('/image/favicon.png') }}">

		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/js/skel.min.js') }}"></script>
		<script src="{{ asset('/js/skel-panels.min.js') }}"></script>
		<script src="/js/init.js"></script>

		 
		 <link rel="stylesheet" href="/css/font-awesome.css" />
		<link rel="stylesheet" href="/css/font-awesome.min.css" />
		<noscript>
			<link rel="stylesheet" href="{{ asset('/css/skel-noscript.css') }}" />
			<link rel="stylesheet" href=" {{ asset('/css/style.css') }}" />
			<link rel="stylesheet" href=" {{ asset('/css/style-desktop.css') }}" />
			 

		</noscript>

 
<style type="text/css">



</style>







	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul> 
						<li class="active"><a href="/">Inicio</a></li>
                		<li><a href="/services">Serviços</a></li>
                		<li><a href="/products">Produtos</a></li>
                		<li><a href="/contact">Contato</a></li> 
                		<li><a href="/contact">Segurança Eletrônica</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="/">Macromix Informática</a></h1>
					<span class="tag"></span>
				</div>
			</div>
		</div>
<!--  Fim do Header-->

<!-- ufhduiojdiojgidjio  -->

 <!-- conteudo -->
<div id="featured">
      <div class="container">
@yield('conteudo')


</div>
</div>

 <!-- fim do conteudo -->

 <!-- footer -->

 <div id="tweet" class="second">
      <div class="container">
        <section>
          <blockquote>&ldquo; Compramos notebooks com defeito. &rdquo;</blockquote>
        </section>
      </div>
    </div>

  <!-- Footer -->
    <div id="footer">
      <div class="container copyright">
        <section>
          <header>
            <h2>Site name</h2>
            <span class="byline">
              <address>
   
  Quadra Central 01 Conjunto D Lote 04 Loja 03<br>
  Santa Maria, Distrito Federal<br>
  Telefone: (61) 3393-9145<br>
  Funcionamento: segunda a sexta de 09:00 as 18:00, sábado de 09:00 as 14:00<br>


</address>

            </span>
          </header>
          <ul class="contact">
            
            <li class="active"><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"><span>Facebook</span></a></li>
            <li><a href="/contact#email" class="fa fa-envelope-o"><span>Email</span></a></li>
             
          </ul>
        </section>
      </div>
    </div>
 
  <!-- Copyright -->
    <div id="copyright">
      <div class="container">
        Desenvolvido por: <a href="https://www.facebook.com/yuri.alexs" target="_blank">Author</a> 
        <!--
        Design: <a href="http://templated.co">TEMPLATED</a> 
        Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
-->
      </div>
    </div>

  </body>
</html>
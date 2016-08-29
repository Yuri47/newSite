@extends('layouts.layoutpadrao')
 <title>Contato - Macromix Informática</title>
@section('conteudo')
  <div class="row centro">







  <!-- Featured -->
 

    <div id="featured">
      <div class="container">
        <header>
          <h2>Bem Vindo a  </h2>
          </br>
<span class="tag"> <img alt=" " src="/bootstrap/img/mmxlogo.png"> </span>
        </header>
        <address>
   
  Quadra Central 01 Conjunto D Lote 04 Loja 03<br>
  Santa Maria, Distrito Federal<br>
  Telefone: (61) 3393-9145<br>
  Funcionamento: segunda a sexta de 09:00 as 18:00, sábado de 09:00 as 14:00<br>


</address>
        
        <hr />




   <style>
        .google-maps {
            position: relative;
            padding-bottom: 75%;  
            height: 0;
            overflow: hidden;
        }
        .google-maps iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>
     
  



        <div class="row">
     

<div class="largura container" >
 

 <div id="copyright largura container">
      <div class="container">
        <a name="email"></a> 
        <h3> <p class="envie"> Envie-nos uma mensagem </p></h3>
       

<div class="pgContato largura container">  
    <div class="contato">  
       <div class="formContato">  
          <form action="process.php" class="formContato" id="contact-form" method="post" tabindex="1" role="form" > 
              <div id="name-field">
                <div>
                    <input type="text" class="nome" id="form-name" name="form-name" placeholder="Nome" required>
                </div>
              </div>
              <div id="email-field">
                <div>
                    <input type="email" class="email" id="form-email" name="form-email" placeholder="Email" required>
                </div>
              </div>
              <div id="subject-field">
                <div>
                   <input type="text" class="site" id="form-subject" name="form-subject" placeholder="Assunto" required>
                </div>
              </div>
              <div id="message-field">
                <div>
                   <textarea class="conteudo" rows="6" id="form-message" name="form-message" placeholder="Mensagem" required></textarea>
                </div>
              </div>
              <button class="button button-style1" name="botaoContato"  type="submit">Enviar</button> 
            
 
          </form>  


         <hr />


           <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d854.1312012802689!2d-48.017847550069625!3d-16.01771048383529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x88a627d97143ec76!2sMacromix+Inform%C3%A1tica!5e0!3m2!1spt-BR!2sbr!4v1449258084942" width="600" height="450" frameborder="0" style="border:0"></iframe>
    </div>

       </div>  
    </div>  
 </div> 

 </div>
    </div>

</div>







 <script src="bootstrap/js/contact-form.js"></script>


<!--
 <script  src="/bootstrap/js/jquery_form.js"></script>
 -->
    <script  src="/bootstrap/js/jquery.maskedinput.js"></script>

<script type="text/javascript">
jQuery(function($){
   $("#cep").mask("(99) 9999-9999");
   
});
</script>


          

        </div> <!-- Row -->
      </div> <!-- Container -->
    </div> <!-- Featured -->
 











































 
 
</div> <!-- end row centro-->
@stop

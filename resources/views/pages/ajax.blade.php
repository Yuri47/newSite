<!DOCTYPE html>
<html lang="en">
<head>
<title>Example Modals</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style type="text/css">
    .bs-example{
            margin: 20px;
    }
    body {
        background: gray;
    }
</style>
</head>
<body>
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Clique aqui para ver a janela</a><br>
    <br>
    <br>
    <br>
    <br>
    <div class="nt ">
TESTE
</div>
<br>
<br>
<br>
<button id="1" class="btn btn-lg btn-primary">Botão Ajax</button> <br>


name: <input type="text" class="texto" id="valueText">
<br><br>
valor vindo da função: <input type="text" id="textFinal">

   <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Search Autocomplete</h4>
                </div>
                <div class="modal-body">
                  <div class="container">
					 
					<input type="text" class="typeahead form-control">

					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar tudo</button>
                </div>
            </div>
        </div>
    </div>
</div>    


</body>

<script type="text/javascript" >
	 
//var texto = $('input#valueText').val();

$("button#1").click(function() {
            //$("p").hide()
            //$("h1.dois").show("slow")
            

$.ajax({
  method: "GET",
  url: "{{ route('ajax') }}",
  data: { name: $('input#valueText').val(), location: "Boston" }
})
  .done(function( msg ) {
    //alert( "Data Saved: " + msg );

var object = msg; //pega o objeto msg que vem da função ajax do servicecontroller
 
$("button#1").text(msg["name"] );
$("input#textFinal").val(msg["name"]);

  });







        });

  
</script>

</html>  
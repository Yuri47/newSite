<!DOCTYPE html>
<html lang="en">
<head>
<title>Example Modals</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<style type="text/css">
    .bs-example{
            margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Clique aqui para ver a janela</a>
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
	

var path = "{{ route('json') }}";
$('input.typeahead').typeahead({
	source: function (query, process) {
		return $.get(path, { query: query }, function (data) {
			return process(data);
		})	
	}
	});





</script>

</html>  
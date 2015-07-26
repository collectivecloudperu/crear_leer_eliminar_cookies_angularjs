<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Escribir, Leer y Eliminar Cookies en Angular JS">
    <meta name="author" content="Collective Cloud Peru">

    <title>Crear, Leer y Eliminar Cookies en Angular JS</title>
	<script src= "https://code.angularjs.org/1.4.3/angular.min.js" type="text/javascript"></script>
	<script src="https://code.angularjs.org/1.4.3/angular-cookies.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">		

		<h1 class="text-center">Crear, Leer y Eliminar Cookies en Angular JS</h1>		

	    <form role="form">

		    <div ng-app="Postres" ng-controller="PostresController">

			    <div class="form-group">			    	        
			        <div class="row">
			        	<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<label for="cookie">Ingresa una Cookie:</label>
							<input type="text" ng-model="Postre" Postre="cookie" id="cookie" class="form-control" placeholder="Ejemplo: brownie" autocomplete="off" />
						</div>
						<div class="col-md-3">
						</div>
			    	</div>			    	
			    </div>

			    <div class="row" align="center">
			    	<div class="col-md-12">
			    		<p> <strong><i>Cookie:</i></strong> <span id="cookietxt"> {{ Postre }} </span> </p>
			    		<button type="button" class="btn btn-info" ng-click="WriteCookie()" id="crearcookie">Agregar</button>
					    <button type="button" class="btn btn-success" ng-click="ReadCookie()" id="leercookie">Leer</button>
					    <button type="button" class="btn btn-danger" ng-click="RemoveCookie()" id="eliminarcookie">Eliminar</button>
			    	</div>
			    </div>

		    </div>

		</form>

	</div>

	<br>

	<footer>
      <div class="container text-center">
        <p class="text-muted credit">
          Desarrollado por <a href="http://www.collectivecloudperu.com" target="blank">Collective Cloud Peru</a>
        </p>
      </div>        
    </footer>

</body>
</html>
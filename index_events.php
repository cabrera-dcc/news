<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="application-name" content="Noticias y Eventos"/>
	<meta name="description" content="Contenedor de noticias y eventos"/>
	<meta name="author" content="Daniel Cabrera Cebrero (http://cabrera-dcc.github.io)"/>
	<meta name="version" content="Beta-1 (rev. 20150603)"/>
	<meta name="keywords" content="news, events, container, opensource"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
</head>
<body style="min-width:300px;">
	<nav class="navbar navbar-inverse navbar-static-top small text-uppercase">
		<div class="container-fluid">
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="index.php"><strong>NEWS</strong></a>
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="index_events.php"><strong>EVENTS</strong></a>
		</div>
	</nav>

	<main class="container">
		<h1>EVENTOS</h1>
		<section id="form-section" class="col-sm-12">
			<form class="small" action="scripts/add_event.php" method="post">
	  				<div class="form-group col-md-12">
				    	<label for="inputActivities" class="control-label text-uppercase">Actividades</label> 
				    	<div id="activities" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-pushpin"></span></span>
				      		<input name="activities[]" type="text" class="form-control input-sm" maxlength="100" placeholder="Actividad" value="" required/>
				      	</div>
				      	<button name="btn-add" id="add" type="button" class="btn btn-default col-xs-12"><small><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></small></button>
				  	</div>

				  	<div class="form-group col-md-6">
				    	<label for="inputDate" class="control-label text-uppercase">Fecha</label>
				    	<div id="date" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				      		<input name="date" type="text" class="form-control input-sm" id="inputDate" maxlength="8" placeholder="dd/mm/aa" value="" required/>
				      	</div>
				  	</div>

				  	<div class="form-group col-md-6">
				    	<label for="inputTime" class="control-label text-uppercase">Hora</label>
				    	<div id="time" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
				      		<input name="time" type="text" class="form-control input-sm" id="inputTime" maxlength="5" placeholder="hh:mm" value="" required/>
				      	</div>
				  	</div>
			  	
			  		<div class="form-group col-md-4">
				    	<label for="inputLatitude" class="control-label text-uppercase">Latitud</label>
				    	<div id="latitude" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
				      		<input name="latitude" type="text" class="form-control input-sm" id="inputLatitude" maxlength="100" placeholder="Latitud" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-4">
				    	<label for="inputLongitude" class="control-label text-uppercase">Longitud</label>
				    	<div id="longitude" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
				      		<input name="longitude" type="text" class="form-control input-sm" id="inputLongitude" maxlength="100" placeholder="Longitud" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-4">
				    	<label for="inputZoom" class="control-label text-uppercase">Zoom</label>
				    	<div id="zoom" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
				      		<input name="zoom" type="text" class="form-control input-sm" id="inputZoom" maxlength="100" placeholder="Zoom" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-6">
				    	<label for="inputPlace" class="control-label text-uppercase">Lugar</label>
				    	<div id="place" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
				      		<input name="place" type="text" class="form-control input-sm" id="inputPlace" maxlength="100" placeholder="Lugar" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-6">
				    	<label for="inputAddress" class="control-label text-uppercase">Dirección</label>
				    	<div id="address" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
				      		<input name="address" type="text" class="form-control input-sm" id="inputAddress" maxlength="255" placeholder="Dirección" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-6">
				    	<label for="inputName" class="control-label text-uppercase">Nombre del responsable</label>
				    	<div id="name" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				      		<input name="contact" type="text" class="form-control input-sm" id="inputName" maxlength="100" placeholder="Nombre" value="" />
				      	</div>
				  	</div>
				  	
				  	<div class="form-group col-md-6">
				    	<label for="inputPhone" class="control-label text-uppercase">Teléfono de contacto</label>
				    	<div id="phone" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
				      		<input name="phone" type="text" class="form-control input-sm" id="inputPhone" maxlength="12" placeholder="Teléfono" value="" />
				      	</div>
				  	</div>

				  	<div class="form-group col-md-12">
				    	<label for="inputURL" class="control-label text-uppercase">URL</label>
				    	<div id="url" class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
				      		<input name="url" type="text" class="form-control input-sm" id="inputURL" maxlength="255" placeholder="URL" value="" />
				      	</div>
				  	</div>
					

				
					<div class="form-group container-fluid">
						<div class="btn-group btn-group-justified" role="group">
		  					<div class="btn-group btn-group-xs" role="group">
		  						<button name="btn-save" id="save" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> <small>Guardar</small></button>
		  					</div>
							<div class="btn-group btn-group-xs" role="group">
		  						<a name="btn-show" id="show" role="button" class="btn btn-default" href="scripts/show_events.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <small>Ver eventos</small></a>
		  					</div>
						</div>
					</div>
			</form>
		</section>
	</main>

	<footer class="navbar navbar-default navbar-static-bottom small">
		<div class="container-fluid">
			<div class="row">
				<p class="navbar-text"><abbr title="Contenedor de noticias y eventos" class="initialism"><strong>News and Events</abbr> &#169; 2015 - <i>News and Events Container by <a target="_blank" rel="author" hreflang="es" type="text/html" href="http://cabrera-dcc.github.io">Daniel Cabrera Cebrero</a> </i></strong></p>
				<i><p class="navbar-text small">Software licensed under a GNU General Public License (<a rel="license" target="blank" hreflang="en" type="text/html" href="https://www.gnu.org/copyleft/gpl.html">GPLv3</a>)</p>
				<p class="navbar-text small">Design and styles licensed under a <a rel="license" target="_blank" hreflang="en" type="text/html" href="http://opensource.org/licenses/MIT">MIT License</a></p></i>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/add-activity.js"></script>
</body>
</html>
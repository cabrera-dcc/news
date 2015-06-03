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
		<h1>NOTICIAS</h1>
		<section id="form-section" class="col-sm-12">
			<form class="small" action="scripts/add_new.php" method="post">
	  				<div class="form-group col-md-12">
				    	<label for="inputAuthor" class="control-label text-uppercase">Autor</label>
				    	<div class="input-group">
				    		<span class="input-group-addon"><span class="glyphicon glyphicon-pushpin"></span></span>
				      		<input name="autor" type="text" class="form-control input-sm" id="inputAuthor" maxlength="100" placeholder="Autor" value="" required/>
				      	</div>
				  	</div>
			  	
					<div class="form-group col-md-12">
						<label for="areaText" class="control-label text-uppercase">Texto</label>
						<textarea name="texto" class="form-control input-sm" rows="3" id="areaText" maxlength="255" placeholder="Texto" required></textarea>
					</div>

				
					<div class="form-group container-fluid">
						<div class="btn-group btn-group-justified" role="group">
		  					<div class="btn-group btn-group-xs" role="group">
		  						<button name="btn-save" id="save" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> <small>Guardar</small></button>
		  					</div>
							<div class="btn-group btn-group-xs" role="group">
		  						<a name="btn-show" id="show" role="button" class="btn btn-default" href="scripts/show_news.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> <small>Ver noticias</small></a>
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
</body>
</html>
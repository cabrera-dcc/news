<?php
	function show()
	{
		$file = fopen("noticias.xml","r");
		$line = fgets($file);
		$line = fgets($file);

		while(!feof($file)){
			$etiqueta_noticia = fgets($file);

			$etiqueta_fecha = fgets($file);
			$fecha = fgets($file);
			$etiqueta_fin_fecha = fgets($file);

			$etiqueta_hora = fgets($file);
			$hora = fgets($file);
			$etiqueta_fin_hora = fgets($file);

			$etiqueta_texto = fgets($file);
			$texto = fgets($file);
			$etiqueta_fin_texto = fgets($file);

			$etiqueta_autor = fgets($file);
			$autor = fgets($file);
			$etiqueta_fin_autor = fgets($file);

			$etiqueta_fin_noticia = fgets($file);

			echo "<tr>";
			echo "<td>";
			echo $autor;
			echo "</td>";
			echo "<td>";
			echo $fecha;
			echo "</td>";
			echo "<td>";	
			echo $hora;
			echo "</td>";
			echo "<td>";		
			echo $texto;
			echo "</td>";
			echo "</tr>";
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="application-name" content="Noticias y Eventos"/>
	<meta name="description" content="Contenedor de noticias y eventos"/>
	<meta name="author" content="Daniel Cabrera Cebrero (http://cabrera-dcc.github.io)"/>
	<meta name="version" content="Beta-1 (rev. 20150612)"/>
	<meta name="keywords" content="news, events, container, opensource"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>NEWS</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top small text-uppercase">
		<div class="container-fluid">
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="../index.php"><strong>NEWS</strong></a>
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="../index_events.php"><strong>EVENTS</strong></a>
		</div>
	</nav>

	<main class="container">
		<h1>NOTICIAS</h1>
		<section id="form-section" class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover table-condensed">
					<tr>
						<th>Autor</th>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Texto</th>
					</tr>
					<?php show(); ?>
				</table>
			</div>
			<div class="container-fluid text-right" style="margin-bottom:10px;"><a class="btn btn-info" role="button" href="../index.php">Volver</a></div>
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

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
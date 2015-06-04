<?php
	function show()
	{
		$xml = simplexml_load_file('events.xml');
		$actividades = "";

		foreach ($xml as $event) {
			foreach ($event->activities as $activity) {
				foreach ($activity as $value) {
					$actividades .= $value;
				}
			}

			$latitud = $event->coordinates->latitude;
			$longitud = $event->coordinates->longitude;
			$zoom = $event->coordinates->zoom;
			$nombre = $event->responsible->name;
			$telefono = $event->responsible->phone;
			$fecha = $event->date;
			$hora = $event->time;
			$lugar = $event->place;
			$direccion = $event->address;
			$url = $event->streamingURL;

			echo "<tr>";
			echo "<td>";
			echo $actividades;
			echo "</td>";
			echo "<td>";
			echo $fecha;
			echo "</td>";
			echo "<td>";	
			echo $hora;
			echo "</td>";
			echo "<td>";		
			echo $latitud;
			echo "</td>";
			echo "<td>";		
			echo $longitud;
			echo "</td>";
			echo "<td>";		
			echo $zoom;
			echo "</td>";
			echo "<td>";		
			echo $lugar;
			echo "</td>";
			echo "<td>";		
			echo $direccion;
			echo "</td>";
			echo "<td>";		
			echo $nombre;
			echo "</td>";
			echo "<td>";		
			echo $telefono;
			echo "</td>";
			echo "<td>";		
			echo $url;
			echo "</td>";
			echo "</tr>";

			$actividades = "";
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
	<meta name="version" content="Beta-1 (rev. 20150603)"/>
	<meta name="keywords" content="news, events, container, opensource"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title></title>
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
		<h1>EVENTOS</h1>
		<section id="form-section" class="col-sm-12">
			<table class="table table-striped">
				<tr>
					<th>Actividades</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Latitud</th>
					<th>Longitud</th>
					<th>Zoom</th>
					<th>Lugar</th>
					<th>Dirección</th>
					<th>Responsable</th>
					<th>Teléfono</th>
					<th>URL</th>
				</tr>
				<?php show(); ?>
			</table>
			<div class="container-fluid text-right" style="margin-bottom:10px;"><a class="btn btn-info" role="button" href="../index_events.php">Volver</a></div>
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
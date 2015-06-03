<?php
	function show()
	{
		$actividades = "";

		$file = fopen("events.xml","r");
		$line = fgets($file);
		$line = fgets($file);


		while(!feof($file)){
			
			$etiqueta_evento = fgets($file);

			$etiqueta_actividades = fgets($file);
			$etiqueta_actividad = fgets($file);

			do{
				$actividad = fgets($file);
				$etiqueta_fin_actividad = fgets($file);
				//$actividad .= ", ";
				$actividades .= $actividad;
				$next_line = fgets($file);
			}while($next_line == "<activity>");
			echo $next_line;


			/*$next_line = fgets($file);
			while($next_line == "<activity>"){
				$actividades .= fgets($file);
				$actividades .= ", ";
				$etiqueta_fin_actividad = fgets($file);
				$next_line = fgets($file);
			}*/
			

			$etiqueta_coordenadas = fgets($file);
			$etiqueta_latitud = fgets($file);
			$latitud = fgets($file);
			$etiqueta_fin_latitud = fgets($file);
			$etiqueta_longitud = fgets($file);
			$longitud = fgets($file);
			$etiqueta_fin_longitud = fgets($file);
			$etiqueta_zoom = fgets($file);
			$zoom = fgets($file);
			$etiqueta_fin_zoom = fgets($file);
			$etiqueta_fin_coordenadas = fgets($file);

			$etiqueta_lugar = fgets($file);
			$lugar = fgets($file);
			$etiqueta_fin_lugar = fgets($file);

			$etiqueta_direccion = fgets($file);
			$direccion = fgets($file);
			$etiqueta_fin_direccion = fgets($file);

			$etiqueta_fecha = fgets($file);
			$fecha = fgets($file);
			$etiqueta_fin_fecha = fgets($file);

			$etiqueta_hora = fgets($file);
			$hora = fgets($file);
			$etiqueta_fin_hora = fgets($file);

			$etiqueta_responsable = fgets($file);
			$etiqueta_nombre = fgets($file);
			$nombre = fgets($file);
			$etiqueta_fin_nombre = fgets($file);
			$etiqueta_telefono = fgets($file);
			$telefono = fgets($file);
			$etiqueta_fin_telefono = fgets($file);
			$etiqueta_fin_responsable = fgets($file);

			$etiqueta_url = fgets($file);
			$url = fgets($file);
			$etiqueta_fin_url = fgets($file);

			$etiqueta_fin_evento = fgets($file);


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

			$actividad = "";
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
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="index.php"><strong>NEWS</strong></a>
			<a class="navbar-brand" rel="alternate" hreflang="en" type="text/html" href="index_events.php"><strong>EVENTS</strong></a>
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
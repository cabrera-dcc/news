<?php

/**
 * Set of functions to insert data into an XML file with a specific format
 *
 * @author cabrera-dcc (http://cabrera-dcc/github.io)
 * @copyright Copyright (c) 2015, Daniel Cabrera Cebrero
 * @license GNU General Public License (GPLv3 - https://www.gnu.org/copyleft/gpl.html)
 * @version Beta-1 (rev. 20150423)
*/
if(!isset($_POST['autor']) || !isset($_POST['texto'])){
	header("Location: ../index.php?r=Error");
}
else{
	echo "Manejando ficheros";
	$f_old = fopen("noticias.xml","r");
	$f_new = fopen("noticias.nuevo.txt","w");

	$line = fgets($f_old);
	fputs($f_new,$line);
	$line = fgets($f_old);
	fputs($f_new,$line);

	fputs($f_new,"\t");
	fputs($f_new,"<noticia>");
	fputs($f_new,"\n\t\t");
	fputs($f_new,"<fecha>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,date('d/m/Y'));
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</fecha>");
	fputs($f_new,"\n\t\t");


	fputs($f_new,"<hora>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,date('h:i'));
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</hora>");
	fputs($f_new,"\n\t\t");

	fputs($f_new,"<texto>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['texto']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</texto>");
	fputs($f_new,"\n\t\t");

	fputs($f_new,"<autor>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['autor']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</autor>");
	fputs($f_new,"\n\t");
	fputs($f_new,"</noticia>");
	fputs($f_new,"\n");


	while(!feof($f_old)){
		$line = fgets($f_old);
		fputs($f_new,$line);
	}

	fclose($f_old);
	fclose($f_new);

	rename("noticias.nuevo.txt","noticias.xml");

	header("Location: ../index.php?r=OK");

}
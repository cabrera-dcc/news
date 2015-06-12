<?php

/**
 * Set of functions to insert data into an XML file with a specific format
 *
 * @author cabrera-dcc (http://cabrera-dcc/github.io)
 * @license GNU General Public License (GPLv3 - https://github.com/cabrera-dcc/news/blob/master/LICENSE)
 * @version Beta-1 (rev. 20150603)
*/

if(!isset($_POST['activities']) || !isset($_POST['date']) || !isset($_POST['time'])){
	header("Location: ../index_events.php?r=Error");
}
else{
	echo "Manejando ficheros";
	$f_old = fopen("events.xml","r");
	$f_new = fopen("events.new.txt","w");

	$line = fgets($f_old);
	fputs($f_new,$line);
	$line = fgets($f_old);
	fputs($f_new,$line);

	fputs($f_new,"\t");
	fputs($f_new,"<event>");
	fputs($f_new,"\n\t\t");
	fputs($f_new,"<activities>");

	foreach ($_POST['activities'] as $activity) {
		fputs($f_new,"\n\t\t\t");
		fputs($f_new,"<activity>");
		fputs($f_new,"\n\t\t\t\t");
		fputs($f_new,$activity);
		fputs($f_new,"\n\t\t\t");
		fputs($f_new,"</activity>");
	}

	fputs($f_new,"\n\t\t");
	fputs($f_new,"</activities>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<coordinates>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"<latitude>");
	fputs($f_new,"\n\t\t\t\t");
	fputs($f_new,$_POST['latitude']);
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"</latitude>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"<longitude>");
	fputs($f_new,"\n\t\t\t\t");
	fputs($f_new,$_POST['longitude']);
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"</longitude>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"<zoom>");
	fputs($f_new,"\n\t\t\t\t");
	fputs($f_new,$_POST['zoom']);
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"</zoom>");
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</coordinates>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<place>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['place']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</place>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<address>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['address']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</address>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<date>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['date']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</date>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<time>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['time']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</time>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<responsible>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"<name>");
	fputs($f_new,"\n\t\t\t\t");
	fputs($f_new,$_POST['contact']);
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"</name>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"<phone>");
	fputs($f_new,"\n\t\t\t\t");
	fputs($f_new,$_POST['phone']);
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,"</phone>");
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</responsible>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<streamingURL>");
	fputs($f_new,"\n\t\t\t");
	fputs($f_new,$_POST['url']);
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</streamingURL>");

	fputs($f_new,"\n\t\t");
	fputs($f_new,"<vota>");
	fputs($f_new,"\n\t\t\t");
	if($_POST['valorar'] == 's' || $_POST['valorar'] == "S"){
		fputs($f_new,'true');
	}
	else{
		fputs($f_new,'false');
	}
	fputs($f_new,"\n\t\t");
	fputs($f_new,"</vota>");


	fputs($f_new,"\n\t");
	fputs($f_new,"</event>");
	fputs($f_new,"\n");

	while(!feof($f_old)){
		$line = fgets($f_old);
		fputs($f_new,$line);
	}

	fclose($f_old);
	fclose($f_new);

	rename("events.new.txt","events.xml");

	header("Location: ../index_events.php?r=OK");
}
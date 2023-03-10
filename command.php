<?php
set_time_limit(0);
include("data/dB.php");
include("business/biblioteca.php"); 

$cidade="";
if(isset($_POST['cidade'])){
	$cidade = $_POST['cidade'];
	$city = explode ( "|", $cidade,2);
	$cidade = str_replace("|"," ",$cidade);
}else{
	echo '<script>window.alert("Error");</script>';
	}

$xml = simplexml_load_file("https://maps.googleapis.com/maps/api/geocode/xml?address=".$cidade."&key=AIzaSyAg_AtCOwzDFwtgkgp9r9Q66CyS3WKU8Ts");

$lat = $xml->result[0]->geometry[0]->location[0]->lat;
$lng = $xml->result[0]->geometry[0]->location[0]->lng;

$xml = simplexml_load_file("https://maps.googleapis.com/maps/api/place/radarsearch/xml?location={$lat},{$lng}&radius=7000000&keyword=biblioteca&types=library|school|university&key=AIzaSyBw-DZ1eu9PNmyt3SGDs1qOvu8mxSxywpI");
		
foreach($xml->result as $xmlResult){
$a = new Biblioteca($xmlResult->place_id);
$a->InsertIntoDB($link);
}

dBUnlink($link);

/*
unlink(realpath("map.xml"));
file_put_contents("map.xml", fopen("https://maps.googleapis.com/maps/api/place/radarsearch/xml?location={$lat},{$lng}&radius=7000000&keyword=biblioteca&types=library|school|university&key=AIzaSyBw-DZ1eu9PNmyt3SGDs1qOvu8mxSxywpI", 'r'));


$arquivo = "map.xml";


$texto = file_get_contents($arquivo);
$texto = str_replace("<location>","<city>".$city[0]."</city>",$texto);
$texto = str_replace("<geometry>","",$texto);
$texto = str_replace("</location>","",$texto);
$texto = str_replace("</geometry>","",$texto);

file_put_contents($arquivo,$texto);



	$link = mysqli_connect ( "localhost", "doacao", "doacao", "do_acao" );

	if (! $link) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		exit ();
	}
	
$sql = "LOAD XML  LOCAL INFILE 'map.xml'
INTO TABLE do_acao.biblioteca ROWS IDENTIFIED BY '<result>';";
$link->query ( $sql );

mysqli_close ( $link );
*/
echo "<script>window.location.href='Bibliotecas.php'</script>";

?>
<?php

class Biblioteca{

public $place_id;
public $name;
public $city;
public $state;
public $lat;
public $lng;
public $formatted_address;
public $international_phone_number;
public $website;

	function __construct($place_id) 
    {
		if ($place_id != ""){
			$this->place_id = $place_id;
			$xml = simplexml_load_file("https://maps.googleapis.com/maps/api/place/details/xml?placeid={$place_id}&key=AIzaSyAg_AtCOwzDFwtgkgp9r9Q66CyS3WKU8Ts");
			if(isset($xml)){
			$this->name = $xml->result[0]->name;
			$this->lat = $xml->result[0]->geometry[0]->location[0]->lat;
			$this->lng = $xml->result[0]->geometry[0]->location[0]->lng;
			$this->formatted_address = $xml->result[0]->formatted_address;
			$this->international_phone_number = $xml->result[0]->international_phone_number;
			$this->website = $xml->result[0]->website;
			$inicio = strpos ($xml->result[0]->adr_address[0],"locality")+10;
			$fim = strpos ($xml->result[0]->adr_address[0],"region")-23;
			$this->city = substr ($xml->result[0]->adr_address[0] , $inicio , $fim-$inicio );
			$inicio = $fim + 31;
			$fim = strpos ($xml->result[0]->adr_address[0],"postal-code")-22;
			$this->state = substr ($xml->result[0]->adr_address[0] , $inicio , $fim - $inicio );
			}
		}
	}
	function novo($place_id,$name,$city,$state,$lat,$lng,$formatted_address,$international_phone_number, $website) 
    {
		$this->place_id = $place_id;
		$this->name = $name;
		$this->city = $city;
		$this->state = $state;
		$this->lat = $lat;
		$this->lng = $lng;
		$this->formatted_address = $formatted_address;
		$this->international_phone_number = $international_phone_number;
		$this->website = $website;
	}
	function toAlert(){
		//echo ("<script>alert(\"{$this->place_id},{$this->name},{$this->city},{$this->lat},{$this->lng},{$this->formatted_address},{$this->international_phone_number},{$this->website}\");</script>");
		//echo $this->city;
	}
	
	function InsertIntoDB($link){
		//echo ("<script>alert(\"{$this->place_id},{$this->name},{$this->city},{$this->state},{$this->lat},{$this->lng},{$this->formatted_address},{$this->international_phone_number},{$this->website}\");</script>");
			
		$sql = "INSERT INTO `biblioteca`(`place_id`, `name`, `city`, `state`, `lat`, `lng`, `formatted_address`, `international_phone_number`, `website`) VALUES ('{$this->place_id}','{$this->name}','{$this->city}','{$this->state}','{$this->lat}','{$this->lng}','{$this->formatted_address}','{$this->international_phone_number}','{$this->website}')";
		$link->query ( $sql );
		
	}
}

?>

<?php
include("business/biblioteca.php"); 

if(isset($_POST['cidade']) && $_POST['cidade'] != "" ){
	$cidade = $_POST['cidade'];
	$city = explode ( "|", $cidade,2);
	$cidade = str_replace("|"," ",$cidade);
$sql = "SELECT * FROM biblioteca WHERE state = '{$cidade}'";
	}else{
$sql = "SELECT * FROM biblioteca";
}


$result = $link->query ( $sql );



if ($result->num_rows > 0) {
	while ( $row = $result->fetch_assoc () ) {
		
		//$library = new Biblioteca("");
		//$library->novo($row ['place_id'],$row ['name'],$row ['city'],$row ['state'],$row ['lat'],$row ['lng'],$row ['formatted_address'],$row ['international_phone_number'],$row ['website']);
		
		echo '
			  <div class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-shadow--2dp" >
		<button class="mdl-card__title mdl-button   mdl-js-ripple-effect" onclick="Navigate(\''.$row ['name'].' '.$row ['formatted_address'].'\')" style="border:none;">
			
			<h2 class="mdl-card__title-text">' . $row ['name'] . '</h2>
		</button>
		<div class="mdl-card__supporting-text">
			' . $row ['formatted_address'] . '
		</div>
		<div class="mdl-card__actions mdl-card--border">
			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="float:right;"
			href="https://www.google.com.br/maps/place/' . $row ['name'] . '/@' . $row ['lat'] . ',' . $row ['lng'] . ',17z">
			Navegar
			</a>
			<form method="get" action="detalhes.php" style="float:right;">
						
						<select name="place_id" size="1" hidden>
							<option value="' . $row ['place_id'] . '"></option>
						</select> 
						<input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
							style="background-color: #3F51B5; color:#FFF;" value="Detalhes" /> 
					</form>
		</div>
	</div>';
	}
}
?>


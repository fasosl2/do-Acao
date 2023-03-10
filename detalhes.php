<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Do-A&ccedil;&atilde;o, um novo propósito para seus livros.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Do-A&ccedil;&atilde;o</title>
	<link rel="icon" type="image/png" href="img/icon.png">
    <!-- Page styles -->
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="mdl/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
  
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  
	  
	  		<?php include("header.html"); ?>
	
	
      <div class="doacao-content mdl-layout__content">
		
        <div class="doacao-customized-section">
          <div class="doacao-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">
						<div id="painelDetalhes" class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-shadow--2dp" style="min-height:70vh; width:98%; margin:15px; padding:10px;">
			
 <?php
	include("business/biblioteca.php"); 
	include("data/dB.php");
	
	$id="";
	if(isset($_GET['place_id'])){
		$id = $_GET['place_id'];
	
		}else{
		echo '<script>window.alert("Error");</script>';
		}
$sql = "SELECT * FROM biblioteca where place_id = '{$id}'";
$result = $link->query ( $sql );

if ($result->num_rows > 0) {
	while ( $row = $result->fetch_assoc () ) {

echo	'
<h2>'.$row['name'].'</h2>

<p>Id de Local: '.$row ['place_id'].'</p>
<p>Endereço: '.$row ['formatted_address'].'</p>
<p>Telefone: '.$row ['international_phone_number'].'</p>
<p>Website: '.$row ['website'].'</p>
		
';		
	}
}	
		dBUnlink($link);
		
?>			
			</div>
			</div>

            
          </div>
<div class="fb-comments" width="100%" data-numposts="10"></div>

		<?php include("footer.html"); ?>

      </div>
    </div>
    <script src="mdl/material.min.js"></script>
  </body>
</html>
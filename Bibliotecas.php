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
    <meta name="description" content="Do-A&ccedil;&atilde;o, um novo prósito para seus livros.">
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
		.doacao-footer {
			position:fixed;
			display: block;
			bottom:0px;
			width: 100%;
			height: auto;
			z-index: 50;
		}
		@media (max-width: 900px) {
			.doacao-footer {
				position: relative;
				display: auto;
				width: auto;
				height: auto;
				z-index: auto;
			}
		}
    </style>
			<script>

			function showPosition(position) {
				latlon = position.coords.latitude + "," + position.coords.longitude; }
		
			function Navigate(local){
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else {
					window.alert("Geolocation is not supported by this browser.");
				}
				
				document.getElementById('mapFrame').src = 
				"https://www.google.com/maps/embed/v1/directions?origin=" +
				latlon + "&destination="+ local + 
				"&key=AIzaSyBw-DZ1eu9PNmyt3SGDs1qOvu8mxSxywpI";
			}
		
		</script>
</head>
<body class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<?php include("header.html"); ?>
	
	
      <div class="doacao-content mdl-layout__content  content-grid">
	   
		<div style="width: 100%; position: fixed; margin-right:50px; z-index:2; background-color: #E8EAF6">
		<h4 class="mdl-card__title-text" style="margin: 5px; float:left;">Bibliotecas Próximas</h4>
				
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mdl-card__title-text" style="margin: 5px; float:right; margin-right:3vw">
						
						<select name="cidade" size="1" onchange='this.form.submit()' class="mdl-card__title-text formSelect">
							<option value="">-Selecione o Estado-</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AM">Amazonas</option>
							<option value="AP">Amapá</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RO">Rondônia</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SE">Sergipe</option>
							<option value="SP">São Paulo</option>
							<option value="TO">Tocantins</option>
						</select> 
						<noscript><input type="submit" value="Submit"></noscript>
					</form>
				
				
		</div>
	 <section>	

		<iframe class="mapFrame" id="mapFrame"
		  src="https://www.google.com/maps/embed/v1/search?q=libraries+in+Recife+-+PE,+Brasil&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU
		  &zoom=12">
		</iframe>

						 
    <div class="doacao-card-container mdl-grid" id = "section">
		  

	<?php
		include("data/dB.php");
		
		include("lista_bibliotecas.php"); 
			
	dBUnlink($link);
	?>
			
          </div>
          </section>
		
		<?php include("footer.html"); ?>
	
      </div>
    <script src="mdl/material.min.js"></script>
  </body>
</html>


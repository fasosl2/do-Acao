

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
<meta name="description"
	content="Do-A&ccedil;&atilde;o, um novo prósito para seus livros.">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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
<script>
function Loading(){

document.getElementById("formCity").style.display = "none";

document.getElementById("loading").style.display = "block";

	
}
</script>
</head>
<body>
<?php
 ini_set('default_charset','UTF-8');
?>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  
		
	  
		<?php include("header.html"); ?>
	
		<div class="doacao-content mdl-layout__content">
			<a name="top"></a>
			<div class="doacao-welcome-section mdl-typography--text-center">
				<div class="doacao-slogan">
					<h2 style="color: gray;">Selecione a Cidade</h2>
					
					<form method="post" action="command.php" id="formCity">
						
						<select name="cidade" size="1">
							<option value="Rio Branco|ac">Rio Branco, Acre</option>
							<option value="Maceio|al">Maceió, Alagoas</option>
							<option value="Manaus|am">Manaus, Amazonas</option>
							<option value="Macapa|ap">MAcapá, Amapá</option>
							<option value="Salvador|ba">Salvador, Bahia</option>
							<option value="Fortaleza|ce">Fortaleza, Ceará</option>
							<option value="Brasilia|df">Brasília, Distrito Federal</option>
							<option value="Vitoria|es">Vitória, Espírito Santo</option>
							<option value="Goiania|go">Goiânia, Goiás</option>
							<option value="Sao Luis|ma">São Luis, Maranhão</option>
							<option value="Cuiaba|mt">Cuiabá, Mato Grosso</option>
							<option value="Campo Grande|ms">Campo Grande, Mato Grosso do Sul</option>
							<option value="Belo Horizonte|mg">Belo Horizonte, Minas Gerais</option>
							<option value="Belem|pa">Belém, Pará</option>
							<option value="Joao|Pessoa pb">João Pessoa, Paraíba</option>
							<option value="Curitiba|pr">Curitiba, Paraná</option>
							<option value="Recife|pe">Recife, Pernambuco</option>
							<option value="Teresina|pi">Teresina, Piauí</option>
							<option value="Rio de Janeiro|rj">Rio de Janeiro, Rio de Janeiro</option>
							<option value="Natal|rn">Natal, Rio Grande do Norte</option>
							<option value="Porto Velho|ro">Porto Velho, Rondônia</option>
							<option value="Porto Alegre|rs">Porto Alegre, Rio Grande do Sul</option>
							<option value="Boa Vista|rr">Boa Vista, Roraima</option>
							<option value="Florianopolis|sc">Florianópolis, Santa Catarina</option>
							<option value="Aracaju|se">Aracaju, Sergipe</option>
							<option value="Sao Paulo|sp">São Paulo, São Paulo</option>
							<option value="Palmas|to">Palmas, Tocantins</option>
						</select> 
						<input type="submit" class=" mdl-button mdl-js-button mdl-button" onclick="Loading()"
							style="background-color: #3F51B5; color:#FFF;" value="Importar" /> 
						<input type="reset" class=" mdl-button mdl-js-button mdl-button"
							style="background-color: #3F51B5; color:#FFF;"/>

					</form>
					<div id="loading" class="mdl-progress mdl-js-progress mdl-progress__indeterminate" style="width:800px; margin:0 auto; display:none;"></div>
				<?php

		$serverIP = gethostbyname($_SERVER['SERVER_NAME']);

		if ($serverIP == "127.0.0.1") {
		$serverIP = getHostByName(getHostName());
		echo "
		<p style='color:black'>
			em {$serverIP} /do-acao
		</p>";
		} ;
		?>
				</div>
			</div>
			
		<?php include("footer.html"); ?>
		
      </div>
	</div>
	<script src="mdl/material.min.js"></script>
</body>
</html>

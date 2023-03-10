

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
<title>Do-A&ccedil;&atilde;o - Contato</title>
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
					<h2 style="color: gray;">Contato</h2>
					
					<form method="post" action="comment.php" id="formCity" onsubmit="Loading()">
							Nome: <input type="text" name="name" size="100%" required><br>
							<br>
							Email: <input type="text" name="email" size="100%" required><br>
							<br>Assunto:
							<input type="radio" name="subject" value="Sugestao" checked>Sugestão
							<input type="radio" name="subject" value="Elogio"> Elogio
							<input type="radio" name="subject" value="Critica"> Crítica
							<br>
							
							<textarea rows="8" cols="93%" name="comment" required></textarea>
							<br>	
							<input type="submit" class=" mdl-button mdl-js-button mdl-button" 
								style="background-color: #3F51B5; color:#FFF;" /> 
							<input type="reset" class=" mdl-button mdl-js-button mdl-button"
							style="background-color: #3F51B5; color:#FFF;" value="Limpar"/>

					</form>
					<div id="loading" class="mdl-progress mdl-js-progress mdl-progress__indeterminate" style="width:800px; margin:0 auto; display:none;"></div>
				

				</div>
			</div>
			
		<?php include("footer.html"); ?>
		
      </div>
	</div>
	<script src="mdl/material.min.js"></script>
</body>
</html>

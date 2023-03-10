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
    </style>
  </head>
  <body class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  
	  
	  		<?php include("header.html"); ?>
	
      <div class="doacao-content mdl-layout__content">
        <a name="top"></a>
        <div class="doacao-welcome-section mdl-typography--text-center">
          <div class="doacao-slogan"><img id="HomeLogo" class="hItem" src="img/Logo.png"></div>
          <div class="logo-font doacao-sub-slogan">Bem-Vindo ao Do-A&ccedil;&atilde;o.</div>
        </div>
		
        <div class="doacao-find-now-section">
          <div class="doacao-find-now-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Doe livros, doe conhecimento</div>
            <p class="mdl-typography--font-light">
              Chega de descartar os livros que não são mais utilizados, há sempre uma biblioteca próxima aguardando sua doação.
              <br>
			  		  <a class="doacao-link"  href="Bibliotecas.php"><b>Encontre agora</b></a>
            </p>
          </div>
          <div class="doacao-find-now-section-image"></div>
        </div>
		<?php include("footer.html"); ?>
		
      </div>
 
    <script src="mdl/material.min.js"></script>
  </body>
</html>

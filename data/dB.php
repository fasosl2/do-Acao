<?php

			$link = mysqli_connect ( "localhost", "doacao", "doacao", "do_acao" );
			
			if (! $link) {
				echo "Error: Unable to connect to MySQL." . PHP_EOL;
				exit ();
			}

		
		function dBUnlink($link){	
			mysqli_close ( $link );
			}
?>
Create DATABASE do_acao;

--
-- Estrutura da tabela `biblioteca`
--
use do_acao; 

CREATE TABLE `biblioteca` (
  `place_id` varchar(50) PRIMARY KEY NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `vicinity` varchar(255) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Importar do Google Places
--
use do_acao;
LOAD XML  LOCAL INFILE 'https://maps.googleapis.com/maps/api/place/nearbysearch/xml?location=-8.0386652,-34.9491202&radius=7000000&keyword=biblioteca&types=library|school|university&key=AIzaSyBw-DZ1eu9PNmyt3SGDs1qOvu8mxSxywpI'
    INTO TABLE do_acao.biblioteca ROWS IDENTIFIED BY '<result>';
    
    SELECT * FROM `biblioteca`
	

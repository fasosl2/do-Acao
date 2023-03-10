-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2016 às 19:46
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_acao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

CREATE TABLE `biblioteca` (
  `place_id` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `vicinity` varchar(255) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `biblioteca`
--

INSERT INTO `biblioteca` (`place_id`, `name`, `vicinity`, `lat`, `lng`, `icon`) VALUES
('ChIJ0R5IbuoYqwcRjWJyoMLW2Ss', 'Universidade CatÃ³lica de Pernambuco', 'Rua do PrÃ­ncipe, 526 - Boa Vista, Recife', '-8.0546337', '-34.8873059', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJ2S2II-AbqwcRP9Td3hw6jA4', 'Biblioteca Central', 'Recife', '-8.0510124', '-34.9513851', 'https://maps.gstatic.com/mapfiles/place_api/icons/library-71.png'),
('ChIJ36yvlpUYqwcRQ59OOmQRxdw', 'Biblioteca PÃºblica do Estado de Pernambuco', 'Rua JoÃ£o LÃ­ra - Santo Amaro, Recife', '-8.0559817', '-34.8807281', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJ4UNxpX4YqwcRQFTyLiNJrBM', 'Escola de Aprendizes - Marinheiros de Pernambuco', 'Avenida Olinda, s/nÂº - Salgadinho, Olinda', '-8.0363652', '-34.8670161', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJ5bsnchMZqwcRa60BQxyvym8', 'Biblioteca Virtual', 'Avenida CaxangÃ¡, S/n - Cordeiro, Recife', '-8.0469640', '-34.9264195', 'https://maps.gstatic.com/mapfiles/place_api/icons/library-71.png'),
('ChIJ6SoUHdkYqwcRSJ-4i87IHAI', 'Biblioteca', 'Recife', '-8.0609519', '-34.9035839', 'https://maps.gstatic.com/mapfiles/place_api/icons/library-71.png'),
('ChIJCWO80d4YqwcRcf6_HnmNQq8', 'Escola PolitÃ©cnica de Pernambuco', 'Rua Benfica, 455 - Madalena, Recife', '-8.0601357', '-34.9035888', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJD0IxqOMbqwcRq5s36T_uBNE', 'UFPE - Ãrea II', 'Universidade Federal de Pernambuco - Avenida da Arquitetura - Cidade UniversitÃ¡ria, Recife', '-8.0561661', '-34.9536095', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJFdQJ1GYZqwcRUuoA7uLyfUk', 'UFPE', 'Travessa Professor MorÃ£es RÃªgo, 1235 - Cidade UniversitÃ¡ria, Recife', '-8.0522931', '-34.9451400', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJG9NpVvYYqwcR7IXSC_FGUWw', 'Etepam', 'Avenida JoÃ£o de Barros, 1769 - Espinheiro, Recife', '-8.0392014', '-34.8924893', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJgY-0NysaqwcRxKB8fv393Rg', 'Municipal Divino Espirito Santo', 'Viaduto CaxangÃ¡, 127 - CaxangÃ¡, Recife', '-8.0340348', '-34.9420369', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJH2TiYGAZqwcR7Uq52aufoVE', 'Biblioteca do CCS', 'Recife', '-8.0487356', '-34.9479301', 'https://maps.gstatic.com/mapfiles/place_api/icons/library-71.png'),
('ChIJI6izRbAZqwcRlonqjrsSd6c', 'Biblioteca Popular de Casa Amarela', 'Rua Major Afonso Leal - Casa Amarela, Recife', '-8.0244358', '-34.9155763', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJI8ridOEbqwcRsTHIz7YJ67E', 'UFPE - Centro de Tecnologia e GeociÃªncias / Escola de Engenharia de Pernambuco', 'Av. da Arquitetura, s/n - Cidade UniversitÃ¡ria, Recife', '-8.0534707', '-34.9545971', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJn5fPnUEaqwcR1usMeLPHXxA', 'Penarol Biblioteca PÃºblica de Camaragibe', 'Rua Severino Santos, 351 - Vila da Fabrica, Camaragibe', '-8.0128170', '-34.9772380', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJNyV7xYoZqwcRHEoCX-gtITc', 'Biblioteca Central UFRPE', 'Universidade Federal Rural de Pernambuco - Rua Manuel de Medeiros, s/n - Dois IrmÃ£os, Recife', '-8.0137558', '-34.9486202', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJpTAOvLsYqwcRw8ieEtKemfA', 'ESMAPE - Escola Superior da Magistratura de Pernambuco', 'Rua Imperador Pedro Segundo, 221 - Santo AntÃ´nio, Recife', '-8.0629188', '-34.8765983', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJQ7O3tQsYqwcRHSYVmJx8T8M', 'Biblioteca Virtual', 'Galeria Centro da Moda, Avenida Presidente Kenedy, 1001 - Peixinhos, Olinda', '-8.0180565', '-34.8654274', 'https://maps.gstatic.com/mapfiles/place_api/icons/library-71.png'),
('ChIJTxFcct0YqwcRqCmSJUjTv-M', 'Universidade de Pernambuco', 'Avenida Governador Agamenon MagalhÃ£es, S/N - Santo Amaro, Recife', '-8.0440603', '-34.8861167', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png'),
('ChIJw4PM7fweqwcRzX17XYxjfhw', 'Universidade Salgado de Oliveira, Universo Recife Campus', 'Avenida Marechal Mascarenhas de Morais, 2169 - Imbiribeira, Recife', '-8.1028791', '-34.9096827', 'https://maps.gstatic.com/mapfiles/place_api/icons/school-71.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`place_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for residenc
CREATE DATABASE IF NOT EXISTS `residenc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `residenc`;

-- Dumping structure for table residenc.circuits
CREATE TABLE IF NOT EXISTS `circuits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `ambient_description` text,
  `load_type` int(11) DEFAULT NULL,
  `active_power` int(11) DEFAULT NULL,
  `voltage` int(11) DEFAULT NULL,
  `nominal_current` int(11) DEFAULT NULL,
  `cable` int(11) DEFAULT NULL,
  `circuit_breaker` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `phase_board` text,
  `user_id` int(11) DEFAULT NULL,
  `estabilishment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Circuits_Estabilishments1_idx` (`estabilishment_id`),
  KEY `fk_Circuits_Users1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.circuits: ~0 rows (approximately)
/*!40000 ALTER TABLE `circuits` DISABLE KEYS */;
/*!40000 ALTER TABLE `circuits` ENABLE KEYS */;

-- Dumping structure for table residenc.dequipments
CREATE TABLE IF NOT EXISTS `dequipments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `power_consumption` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.dequipments: ~44 rows (approximately)
/*!40000 ALTER TABLE `dequipments` DISABLE KEYS */;
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(0, 'Aquecedor de Água por Acumulação', 2000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(1, 'Aquecedor de Água de Passagem', 6000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(2, 'Aquecedor de Ambiente', 1000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(3, 'Aspirador de Pó', 600);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(4, 'Batedeira', 100);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(5, 'Bomba de Água', 400);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(6, 'Cafeteira Elétrica (Residencial)', 600);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(7, 'Churrasqueira Elétrica', 3000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(8, 'Chuveiro Elétrico', 5500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(9, 'Computador', 300);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(10, 'Condicionador de Ar', 1400);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(11, 'Conjunto de Som - Mini System', 150);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(12, 'Cortador de Grama', 1300);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(13, 'Ebulidor', 1000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(14, 'Enceradeira', 300);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(15, 'Espremedor de Frutas', 200);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(16, 'Exaustor', 150);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(17, 'Ferro Elétrico', 1000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(18, 'Fogão Elétrico 2 Bocas', 3000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(19, 'Fogão Elétrico de 4 Bocas', 6000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(20, 'Forno Elétrico Pequeno', 1500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(21, 'Forno Elétrico Grande', 4500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(22, 'Forno de Micro Ondas', 2000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(23, 'Freezer Horizontal', 500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(24, 'Freezer Vertical', 300);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(25, 'Geladeira Simples', 250);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(26, 'Geladeira Duplex', 500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(27, 'Grill', 1200);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(28, 'Impressora', 45);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(29, 'Liquidificador', 200);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(30, 'Máquina de Costura', 100);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(31, 'Máquina de Lavar Louça', 1500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(32, 'Máquina de Lavar Roupa', 1000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(33, 'Projetor de Slides', 200);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(34, 'DVD Player', 30);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(35, 'Rádio Relógio', 10);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(36, 'Secador de Cabelo', 1000);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(37, 'Secadora de Roupas', 3500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(38, 'Televisor 21\'\'', 90);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(39, 'Torneira Elétrica', 2500);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(40, 'Torradeira', 800);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(41, 'Vetilador', 100);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(42, 'Vídeo Cassete', 20);
INSERT INTO `dequipments` (`id`, `name`, `power_consumption`) VALUES
	(43, 'Vídeo Game', 20);
/*!40000 ALTER TABLE `dequipments` ENABLE KEYS */;

-- Dumping structure for table residenc.equipments
CREATE TABLE IF NOT EXISTS `equipments` (
  `id` int(11) NOT NULL,
  `number_serie` text,
  `voltage` int(11) DEFAULT NULL,
  `average_current` int(11) DEFAULT NULL,
  `active_power` int(11) DEFAULT NULL,
  `load_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `estabilishment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.equipments: ~0 rows (approximately)
/*!40000 ALTER TABLE `equipments` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipments` ENABLE KEYS */;

-- Dumping structure for table residenc.estabilishments
CREATE TABLE IF NOT EXISTS `estabilishments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uc` text NOT NULL,
  `name` text,
  `description` text,
  `address` text,
  `voltage_customer` text,
  `aggroupment_customer` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `photos` text,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Estabilishments_Users1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.estabilishments: ~2 rows (approximately)
/*!40000 ALTER TABLE `estabilishments` DISABLE KEYS */;
INSERT INTO `estabilishments` (`id`, `uc`, `name`, `description`, `address`, `voltage_customer`, `aggroupment_customer`, `created`, `modified`, `status`, `photos`, `user_id`) VALUES
	(1, '', 'Maycon Felipe da Silva Mota', 'Teste<b>teste</b>teste', 'R KAMA NAKAZATO', '220', 'B', '2020-06-10 16:08:44', '2020-06-10 16:08:44', NULL, '', 0);
INSERT INTO `estabilishments` (`id`, `uc`, `name`, `description`, `address`, `voltage_customer`, `aggroupment_customer`, `created`, `modified`, `status`, `photos`, `user_id`) VALUES
	(2, '3064521', 'Instituto Federal do Mato Grosso do Sul - Campus Campo Grande', 'Sede do Instituto Federal do Mato Grosso do Sul - Campus <b>CAMPO GRANDE</b>', 'Rua Taquari, 531', '127', 'B', '2020-06-10 16:10:14', '2020-06-10 16:10:14', 1, 'Feira Brasileira de Jovens Cientistas.pdf', 0);
INSERT INTO `estabilishments` (`id`, `uc`, `name`, `description`, `address`, `voltage_customer`, `aggroupment_customer`, `created`, `modified`, `status`, `photos`, `user_id`) VALUES
	(3, '3051216', 'Instituto Federal do Mato Grosso do Sul - Campus Coxim', '<b>Descrição</b>', ' Rua Salime Tanure, S/N - Santa Tereza, Coxim - MS, 79400-000', '220', 'B', '2020-06-10 16:11:49', '2020-06-10 16:11:49', NULL, 'Feira Brasileira de Jovens Cientistas.pdf', 0);
/*!40000 ALTER TABLE `estabilishments` ENABLE KEYS */;

-- Dumping structure for table residenc.loads
CREATE TABLE IF NOT EXISTS `loads` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `circuit_id` varchar(45) DEFAULT NULL,
  `room_id` varchar(45) DEFAULT NULL,
  `estabilishment_id` varchar(45) DEFAULT NULL,
  `current` int(11) DEFAULT NULL,
  `voltage` int(11) DEFAULT NULL,
  `active_power` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` text,
  `equipments_data` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Loads_Estabilishments1_idx` (`estabilishment_id`),
  KEY `fk_Loads_Circuits1_idx` (`circuit_id`),
  KEY `fk_Loads_Rooms1_idx` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.loads: ~0 rows (approximately)
/*!40000 ALTER TABLE `loads` DISABLE KEYS */;
/*!40000 ALTER TABLE `loads` ENABLE KEYS */;

-- Dumping structure for table residenc.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table residenc.rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `photo` text,
  `power_calculated` text,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `sensor` tinyint(4) DEFAULT NULL,
  `estabilishment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Rooms_Estabilishments1_idx` (`estabilishment_id`),
  KEY `fk_Rooms_Users1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.rooms: ~0 rows (approximately)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `name`, `description`, `photo`, `power_calculated`, `user_id`, `created`, `modified`, `sensor`, `estabilishment_id`) VALUES
	(1, 'Sala de aula A103', 'PROJETO ELETRICO IFMS SALA A113', NULL, '84000', NULL, '2020-06-10 16:18:40', '2020-06-10 16:33:16', 1, 2);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Dumping structure for table residenc.senports
CREATE TABLE IF NOT EXISTS `senports` (
  `id` int(11) NOT NULL,
  `voltage` int(11) DEFAULT NULL,
  `current` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `temperature` int(11) DEFAULT NULL,
  `weather` text,
  `active_power` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `sensor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Senports_Sensors1_idx` (`sensor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.senports: ~0 rows (approximately)
/*!40000 ALTER TABLE `senports` DISABLE KEYS */;
/*!40000 ALTER TABLE `senports` ENABLE KEYS */;

-- Dumping structure for table residenc.sensors
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `referral_code` text,
  `room_id` int(11) DEFAULT NULL,
  `estabilishment_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `status` text,
  `circuit_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Sensors_Rooms1_idx` (`room_id`),
  KEY `fk_Sensors_Users1_idx` (`user_id`),
  KEY `fk_Sensors_Estabilishments1_idx` (`estabilishment_id`),
  KEY `fk_Sensors_Circuits1_idx` (`circuit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.sensors: ~0 rows (approximately)
/*!40000 ALTER TABLE `sensors` DISABLE KEYS */;
/*!40000 ALTER TABLE `sensors` ENABLE KEYS */;

-- Dumping structure for table residenc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` text,
  `lastname` text,
  `email` text,
  `password` text,
  `address` text,
  `city` text,
  `uf` text,
  `type_user` int(11) DEFAULT NULL,
  `photo` text,
  `role_id` int(11) NOT NULL,
  `username` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Users_Roles_idx` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table residenc.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `uf`, `type_user`, `photo`, `role_id`, `username`) VALUES
	(0, 'Maycon Felipe', 'Mota', 'mayconfelipemotamw3@gmail.com', '$2y$10$5xdASYNojYQfPkY7ZLW2U.5jmkbzndUxghwwR.H.vAExjdBTmyfjW', 'R KAMA NAKAZATO', 'Campo Grande', 'MS', 0, '10496085773_e538ec7407_k 1.png', 1, '072.090.871-09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

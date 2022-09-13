CREATE DATABASE `pruebas`;

use `pruebas`;

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `asunto` varchar(15) NOT NULL,
  `postre` varchar(15) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
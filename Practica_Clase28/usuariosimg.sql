tructura de tabla para la tabla `usuariosimg`
--

DROP TABLE IF EXISTS `usuariosimg`;
CREATE TABLE IF NOT EXISTS `usuariosimg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `RutaImagen` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;


-- phpMyAdmin SQL Dump
-- version 2.6.1-rc1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 13-06-2005 a las 08:28:02
-- Versión del servidor: 4.0.23
-- Versión de PHP: 4.3.10-10ubuntu4
-- 
-- Base de datos: `controlcode`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `carta`
-- 

CREATE TABLE `carta` (
  `id_carta` int(11) NOT NULL auto_increment,
  `usuario` varchar(255) NOT NULL default '',
  `iden_carta` varchar(255) default NULL,
  `entrega_carta` varchar(255) default NULL,
  `fecha_carta` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id_carta`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `carta`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `control_codigo`
-- 

CREATE TABLE `control_codigo` (
  `dispositivo` varchar(255) default NULL,
  `teclado` varchar(255) default NULL,
  `mouse` varchar(255) default NULL,
  `otros` varchar(255) default NULL,
  `ups` varchar(255) default NULL,
  `impresora` varchar(255) default NULL,
  `monitor` varchar(255) default NULL,
  `cpu` varchar(255) default NULL,
  `scanner` varchar(255) default NULL
) TYPE=MyISAM;

-- 
-- Volcar la base de datos para la tabla `control_codigo`
-- 

INSERT INTO `control_codigo` VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `equipo`
-- 

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL auto_increment,
  `cod_cod` varchar(255) default NULL,
  `tipo` varchar(255) default NULL,
  `nombre` varchar(255) default NULL,
  `usuario` varchar(255) default NULL,
  `equipo` varchar(255) default NULL,
  `no_procesador` varchar(255) default NULL,
  `procesador` varchar(255) default NULL,
  `mhz` varchar(255) default NULL,
  `fabricante` varchar(255) default NULL,
  `familia` varchar(255) default NULL,
  `ram` varchar(255) default NULL,
  `fabricante_equipo` varchar(255) default NULL,
  `modelo` varchar(255) default NULL,
  `SO` varchar(255) default NULL,
  `pro_escritorio` varchar(255) default NULL,
  `fecha_ingreso` datetime default NULL,
  `fecha_instalacion` datetime default NULL,
  `no_serie` varchar(255) default NULL,
  `no_paralelo` varchar(255) default NULL,
  `version_bios` varchar(255) default NULL,
  `fecha_bios` varchar(255) default NULL,
  `servicetag` varchar(255) default NULL,
  `observaciones` text,
  `puerto` varchar(255) default NULL,
  `alimentador` varchar(255) default NULL,
  `serie` varchar(255) default NULL,
  `categoria` varchar(255) default NULL,
  `fecha_garantia` datetime default NULL,
  `factura` varchar(255) default NULL,
  `asignacion` varchar(255) default NULL,
  `departe` varchar(255) default NULL,
  `entregado` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `equipo`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `facturas`
-- 

CREATE TABLE `facturas` (
  `id_fact` int(11) NOT NULL auto_increment,
  `nombre_fact` varchar(255) default NULL,
  `titulo_fact` varchar(255) default NULL,
  `contenido_fact` longblob NOT NULL,
  `tipo_fact` varchar(255) default NULL,
  `iden_fact` varchar(255) default NULL,
  PRIMARY KEY  (`id_fact`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `facturas`
-- 



-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `facultad`
-- 

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL auto_increment,
  `nombre_facultad` varchar(255) default NULL,
  `fecha_facultad` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id_facultad`)
) TYPE=MyISAM AUTO_INCREMENT=19 ;

-- 
-- Volcar la base de datos para la tabla `facultad`
-- 

INSERT INTO `facultad` VALUES (1, 'Ninguno', '2004-07-01 17:30:34');
INSERT INTO `facultad` VALUES (2, 'Facultad de Ciencias M&eacute;dicas y de la Salud', '2004-07-01 17:30:34');
INSERT INTO `facultad` VALUES (3, 'Facultad de Ciencias de la Administraci&oacute;n', '2004-07-02 17:24:31');
INSERT INTO `facultad` VALUES (4, 'Facultad de Teolog&iacute;a', '2004-07-02 20:26:44');
INSERT INTO `facultad` VALUES (5, 'Facultad de Odontolog&iacute;a', '2004-07-03 11:02:23');
INSERT INTO `facultad` VALUES (6, 'Facultad de Ingenier&iacute;a', '2004-07-05 16:08:33');
INSERT INTO `facultad` VALUES (7, 'Facultad de Ingenier&iacute;a Civil', '2004-07-05 16:52:33');
INSERT INTO `facultad` VALUES (8, 'Facultad de Ciencias Jur&iacute;dicas y Sociales', '2004-07-05 17:15:25');
INSERT INTO `facultad` VALUES (9, 'Facultad de Enfermer&iacute;a', '2004-07-05 17:17:09');
INSERT INTO `facultad` VALUES (10, 'Facultad  de Arquitectura', '2004-07-05 19:33:47');
INSERT INTO `facultad` VALUES (11, 'Facultad de Ciencias Econ&oacute;micas', '2004-07-06 17:26:26');
INSERT INTO `facultad` VALUES (12, 'Escuela de Ciencias de la Comunicaci&oacute;n', '2004-07-07 17:55:41');
INSERT INTO `facultad` VALUES (13, 'Facultad de Humanidades Escuela de Lingu&iacute;stica', '2004-07-08 14:52:08');
INSERT INTO `facultad` VALUES (14, 'Facultad de Humanidades Escuela de Educaci&oacute;n', '2004-07-08 16:46:28');
INSERT INTO `facultad` VALUES (15, 'Facultad de Humanidades', '2004-07-08 18:32:02');
INSERT INTO `facultad` VALUES (16, 'Facultad de Humanidades Escuela de Psicolog&iacute;a', '2004-07-08 18:55:58');
INSERT INTO `facultad` VALUES (17, 'Facultad de Ingenier&iacute;a en Sistemas de Informaci&oacute;n', '2004-07-09 16:20:22');
INSERT INTO `facultad` VALUES (18, 'Facultad de Humanidades Escuela de Idiomas', '2004-07-15 16:03:40');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `historial`
-- 

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL auto_increment,
  `categoria_historial` varchar(255) default NULL,
  `serie_historial` varchar(255) default NULL,
  PRIMARY KEY  (`id_historial`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `historial`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `proveedor`
-- 

CREATE TABLE `proveedor` (
  `id_prov` int(11) NOT NULL auto_increment,
  `nombre_prov` varchar(255) default NULL,
  `tele_prov` varchar(255) default NULL,
  `dire_prov` varchar(255) default NULL,
  PRIMARY KEY  (`id_prov`)
) TYPE=MyISAM AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `proveedor`
-- 

INSERT INTO `proveedor` VALUES (1, 'DELL', '---', '---');
INSERT INTO `proveedor` VALUES (2, 'MICROSYS', '---', '---');
INSERT INTO `proveedor` VALUES (3, 'SEGA', '---', '---');
INSERT INTO `proveedor` VALUES (4, 'COMPUSERVICIOS CSCOM', '---', '---');
INSERT INTO `proveedor` VALUES (5, 'TELNET', '---', '---');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id_us` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) default NULL,
  `nick` varchar(255) default NULL,
  `contra` varchar(255) default NULL,
  `correo` varchar(255) default NULL,
  `nivel` varchar(255) default NULL,
  PRIMARY KEY  (`id_us`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'greyes@poccms.com', '1');

        

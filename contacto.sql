-- Volcado SQL de phpMyAdmin
-- versión 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anfitrión: sql211.epizy.com
-- Tiempo de generación: 6 de noviembre de 2020 a las 12:55 p. m.
-- Versión del servidor: 5.6.48-88.0
-- Versión PHP: 7.2.22

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
SET AUTOCOMMIT =  0 ;
INICIAR TRANSACCIÓN ;
ESTABLECER time_zone =  " +00:00 " ;


/* !40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */ ;
/* !40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */ ;
/* !40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */ ;
/* !40101 ESTABLECER NOMBRES utf8mb4 */ ;

--
-- Base de datos: `epiz_26704870_sandbox`
--

-- ------------------------------------------------ --------

--
-- Estructura de la tabla para la tabla `contacto`
--

CREAR  TABLA ` contacto ` (
  ` id `  int ( 11 ) NO NULO ,
  ` correo electrónico` varchar  ( 100 ) NO NULO ,
  ` mensaje `  texto  NO NULO ,
  ` fecha ` fecha y hora NOT NULL DEFAULT CURRENT_TIMESTAMP
) MOTOR = JUEGO DE CARACTERES POR DEFECTO MyISAM = latin1;

--
-- Índices para tablas volcadas
--

--
-- Índices para la tabla `contacto`
--
ALTER  TABLE  ` contacto `
  AÑADIR CLAVE PRINCIPAL ( ` id ` );

--
-- AUTO_INCREMENT para tablas volcadas
--

--
-- AUTO_INCREMENT para la tabla `contacto`
--
ALTER  TABLE  ` contacto `
  MODIFICAR ` id `  int ( 11 ) NOT NULL AUTO_INCREMENT;
COMISIONAR ;

/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */ ;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */ ;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */ ;

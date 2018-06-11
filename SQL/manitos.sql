-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-07-2016 a las 00:51:29
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manitos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspectoseconomicos`
--

CREATE TABLE `aspectoseconomicos` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `alimentacion` decimal(10,2) DEFAULT NULL,
  `vivienda` decimal(10,2) DEFAULT NULL,
  `luz` decimal(10,2) DEFAULT NULL,
  `agua` decimal(10,2) DEFAULT NULL,
  `vestimenta` decimal(10,2) DEFAULT NULL,
  `panales` decimal(10,2) DEFAULT NULL,
  `transporte` decimal(10,2) DEFAULT NULL,
  `telefono_fijo` decimal(10,2) DEFAULT NULL,
  `telefono_movil` decimal(10,2) DEFAULT NULL,
  `gas` decimal(10,2) DEFAULT NULL,
  `educacion` decimal(10,2) DEFAULT NULL,
  `salud` decimal(10,2) DEFAULT NULL,
  `cable` decimal(10,2) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `deuda_grupo_familiar` char(2) DEFAULT NULL,
  `valor_deuda_grupo_familiar` int(11) DEFAULT NULL,
  `monto_adeudado` decimal(10,2) DEFAULT NULL,
  `tipo_inversion` varchar(45) DEFAULT NULL,
  `ninos_6anios` varchar(5) NOT NULL,
  `acuden_serv_salud` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aspectoseconomicos`
--

INSERT INTO `aspectoseconomicos` (`id`, `id_nino`, `alimentacion`, `vivienda`, `luz`, `agua`, `vestimenta`, `panales`, `transporte`, `telefono_fijo`, `telefono_movil`, `gas`, `educacion`, `salud`, `cable`, `total`, `deuda_grupo_familiar`, `valor_deuda_grupo_familiar`, `monto_adeudado`, `tipo_inversion`, `ninos_6anios`, `acuden_serv_salud`) VALUES
(1, 1, '45.00', '65.00', '64.00', '6.00', '45.00', '8.00', '9.00', '49.00', '9.00', '84.00', '9.00', '49.00', '94.00', NULL, 'Si', 100, '100000.00', 'negocio', '', ''),
(2, 2, '45.00', '65.00', '64.00', '6.00', '45.00', '8.00', '9.00', '49.00', '9.00', '84.00', '9.00', '49.00', '94.00', NULL, 'No', 50, NULL, NULL, '', ''),
(3, 3, '89.00', '541.00', '12.00', '21.00', '65.00', '89.00', '78.00', '98.00', '78.00', '645.00', '98.00', '98.00', '45.00', NULL, 'No', 50, NULL, NULL, '', ''),
(4, 4, '89.00', '65.00', '654.00', '89.00', '78.00', '185.00', '98.00', '987.00', '98.00', '645.00', '9.00', '49.00', '0.00', NULL, 'Si', 100, '100000.00', 'sdf', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicasvivienda`
--

CREATE TABLE `caracteristicasvivienda` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `paredes` varchar(15) DEFAULT NULL,
  `valor_paredes` int(11) DEFAULT NULL,
  `piso` varchar(15) DEFAULT NULL,
  `valor_piso` int(11) DEFAULT NULL,
  `tipo_vivienda` varchar(45) DEFAULT NULL,
  `valor_tipo_vivienda` int(11) DEFAULT NULL,
  `vivienda_es` varchar(20) DEFAULT NULL,
  `valor_vivienda_es` int(11) DEFAULT NULL,
  `numero_personas` int(11) DEFAULT NULL,
  `numero_dormitorios` int(11) DEFAULT NULL,
  `cocina` char(2) DEFAULT NULL,
  `valor_cocina` int(11) DEFAULT NULL,
  `sala` char(2) DEFAULT NULL,
  `valor_sala` int(11) DEFAULT NULL,
  `comedor` char(2) DEFAULT NULL,
  `valor_comedor` int(11) DEFAULT NULL,
  `bano` varchar(20) DEFAULT NULL,
  `valor_bano` int(11) DEFAULT NULL,
  `energia_electrica` char(2) DEFAULT NULL,
  `valor_energia_electrica` int(11) DEFAULT NULL,
  `agua_potable` char(2) DEFAULT NULL,
  `valor_agua_potable` int(11) DEFAULT NULL,
  `vertiente` char(2) DEFAULT NULL,
  `valor_vertiente` int(11) DEFAULT NULL,
  `gas_domiciliario` char(2) DEFAULT NULL,
  `valor_gas_domiciliario` int(11) DEFAULT NULL,
  `alcantarillado` char(2) DEFAULT NULL,
  `valor_alcantarillado` int(11) DEFAULT NULL,
  `internet` char(2) DEFAULT NULL,
  `valor_internet` int(11) DEFAULT NULL,
  `tv_cable` char(2) DEFAULT NULL,
  `valor_tv_cable` int(11) DEFAULT NULL,
  `telefono_fijo` char(2) DEFAULT NULL,
  `valor_telefono_fijo` int(11) DEFAULT NULL,
  `telefono_movil` char(2) DEFAULT NULL,
  `valor_telefono_movil` int(11) DEFAULT NULL,
  `vehiculo_propio` char(2) DEFAULT NULL,
  `valor_vehiculo_propio` int(11) DEFAULT NULL,
  `cantidad_vehiculos` int(11) DEFAULT NULL,
  `vehiculo_medio_trabajo` char(2) DEFAULT NULL,
  `valor_vehiculo_medio_trabajo` int(11) DEFAULT NULL,
  `transporte_trasladarse_cim` varchar(20) DEFAULT NULL,
  `transporte_trasladarse_cim_otro` varchar(100) DEFAULT NULL,
  `valor_transporte_trasladarse_cim` int(11) DEFAULT NULL,
  `tiempo_demora_cim` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `caracteristicasvivienda`
--

INSERT INTO `caracteristicasvivienda` (`id`, `id_nino`, `paredes`, `valor_paredes`, `piso`, `valor_piso`, `tipo_vivienda`, `valor_tipo_vivienda`, `vivienda_es`, `valor_vivienda_es`, `numero_personas`, `numero_dormitorios`, `cocina`, `valor_cocina`, `sala`, `valor_sala`, `comedor`, `valor_comedor`, `bano`, `valor_bano`, `energia_electrica`, `valor_energia_electrica`, `agua_potable`, `valor_agua_potable`, `vertiente`, `valor_vertiente`, `gas_domiciliario`, `valor_gas_domiciliario`, `alcantarillado`, `valor_alcantarillado`, `internet`, `valor_internet`, `tv_cable`, `valor_tv_cable`, `telefono_fijo`, `valor_telefono_fijo`, `telefono_movil`, `valor_telefono_movil`, `vehiculo_propio`, `valor_vehiculo_propio`, `cantidad_vehiculos`, `vehiculo_medio_trabajo`, `valor_vehiculo_medio_trabajo`, `transporte_trasladarse_cim`, `transporte_trasladarse_cim_otro`, `valor_transporte_trasladarse_cim`, `tiempo_demora_cim`) VALUES
(1, 1, 'Adobe', 100, 'Piedra', 100, 'Departamento', 50, 'Propia', 50, 5, 5, 'No', 100, 'No', 100, 'No', 100, 'Compartido', 100, 'No', 100, 'No', 100, 'Si', 100, 'Si', 80, 'Si', 80, 'Si', 50, 'Si', 50, 'Si', 50, 'Si', 50, 'Si', 50, NULL, 'Si', 80, 'A-pie', NULL, 100, '1:30'),
(2, 2, 'Adobe', 100, 'Piedra', 100, 'Departamento', 50, 'Propia', 50, 5, 5, 'No', 100, 'Si', 50, 'Si', 50, 'Privado', 50, 'Si', 80, 'Si', 80, 'No', 50, 'Si', 80, 'Si', 80, 'Si', 50, 'Si', 50, 'Si', 50, 'Si', 50, 'Si', 50, NULL, 'Si', 80, 'A-pie', NULL, 100, '1:30'),
(3, 3, 'Piedra', 80, 'Cemento', 80, 'Casa-independiente', 50, 'Anticretico', 80, 5, 5, 'No', 100, 'Si', 50, 'No', 100, 'Compartido', 100, 'Si', 80, 'Si', 80, 'No', 50, 'No', 100, 'No', 100, 'No', 100, 'No', 100, 'No', 100, 'No', 100, 'No', 100, NULL, 'No', 100, 'A-pie', NULL, 100, '1:30'),
(4, 4, 'Ladrillo', 50, 'Piedra', 100, 'Cuarto-multiple', 100, 'Alquiler', 100, 5, 5, 'No', 100, 'No', 100, 'Si', 50, 'Privado', 50, 'Si', 80, 'Si', 80, 'Si', 100, 'Si', 80, 'Si', 80, 'No', 100, 'No', 100, 'No', 100, 'No', 100, 'No', 100, NULL, 'No', 100, 'Micro-bus', NULL, 80, '1:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cim`
--

CREATE TABLE `cim` (
  `id_cim` varchar(50) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `responsable` varchar(150) DEFAULT NULL,
  `fecha_inauguracion` date DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `zona` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `telf` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `numero_ninos` varchar(5) DEFAULT NULL,
  `aportes_ppff` varchar(45) DEFAULT NULL,
  `administracion` varchar(150) DEFAULT NULL,
  `infraestructura_pertenece` varchar(150) DEFAULT NULL,
  `cocina` varchar(2) DEFAULT NULL,
  `bano` varchar(2) DEFAULT NULL,
  `patio` varchar(2) DEFAULT NULL,
  `muro_perimetral` varchar(2) DEFAULT NULL,
  `almacen` varchar(2) DEFAULT NULL,
  `comedor` varchar(2) DEFAULT NULL,
  `sala_psicomotricidad` varchar(2) DEFAULT NULL,
  `otro_ambiente` varchar(150) DEFAULT NULL,
  `aulas_independientes` varchar(2) DEFAULT NULL,
  `cantidad_aulas` varchar(3) DEFAULT NULL,
  `aulas_detalle` varchar(45) DEFAULT NULL,
  `agua` varchar(2) DEFAULT NULL,
  `agua_detalle` varchar(45) DEFAULT NULL,
  `electricidad` varchar(2) DEFAULT NULL,
  `electricidad_detalle` varchar(45) DEFAULT NULL,
  `alcantarillado` varchar(2) DEFAULT NULL,
  `alcantarillado_detalle` varchar(45) DEFAULT NULL,
  `gas` varchar(2) DEFAULT NULL,
  `gas_detalle` varchar(45) DEFAULT NULL,
  `familias_beneficiadas` varchar(45) DEFAULT NULL,
  `ninos_becados` varchar(5) DEFAULT NULL,
  `cantidad_educadoras` varchar(4) DEFAULT NULL,
  `cantidad_manipuladoras` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cim`
--

INSERT INTO `cim` (`id_cim`, `nombre`, `responsable`, `fecha_inauguracion`, `distrito`, `zona`, `calle`, `numero`, `telf`, `email`, `numero_ninos`, `aportes_ppff`, `administracion`, `infraestructura_pertenece`, `cocina`, `bano`, `patio`, `muro_perimetral`, `almacen`, `comedor`, `sala_psicomotricidad`, `otro_ambiente`, `aulas_independientes`, `cantidad_aulas`, `aulas_detalle`, `agua`, `agua_detalle`, `electricidad`, `electricidad_detalle`, `alcantarillado`, `alcantarillado_detalle`, `gas`, `gas_detalle`, `familias_beneficiadas`, `ninos_becados`, `cantidad_educadoras`, `cantidad_manipuladoras`) VALUES
('codCIM0001', 'Nombre CIM 1', 'responsable CIM 1', '2011-10-06', 'distrito', 'zona', 'calle', '#445', '85144511', 'cim1@gmail.com', '150', '100', 'Aldeas SOS', 'ONG', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '', NULL, NULL, NULL, 'Si', '', 'Si', '', 'Si', 'construido recientemente', 'Si', '', '100', '150', '10', '5'),
('codCIM0002', 'Nombre CIM dos', 'responsable CIM 2', '2011-09-13', 'distrito', 'zona', 'calle', '#445', '85144511', 'cim12@gmail.com', '250', '100', 'Directa', 'Junta vecinal', 'No', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '', NULL, NULL, NULL, 'Si', '', 'Si', '', 'Si', '', 'Si', '', '100', '300', '20', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consideraciones`
--

CREATE TABLE `consideraciones` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `historia_social` varchar(100) DEFAULT NULL,
  `diagnostico_social` varchar(100) DEFAULT NULL,
  `acciones_realizar` varchar(100) DEFAULT NULL,
  `seguimiento_trabajo_social` varchar(100) DEFAULT NULL,
  `seguimiento_psicologia` varchar(100) DEFAULT NULL,
  `total_puntaje_obtenido` decimal(20,2) DEFAULT NULL,
  `nino_retirado` varchar(100) DEFAULT NULL,
  `reingreso` varchar(100) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consideraciones`
--

INSERT INTO `consideraciones` (`id`, `id_nino`, `historia_social`, `diagnostico_social`, `acciones_realizar`, `seguimiento_trabajo_social`, `seguimiento_psicologia`, `total_puntaje_obtenido`, `nino_retirado`, `reingreso`, `observaciones`) VALUES
(1, 1, '', NULL, '', '', '', NULL, NULL, NULL, ''),
(2, 2, 'a', NULL, 'k', 'kj', 'k', NULL, NULL, NULL, 'k'),
(3, 3, '', NULL, '', '', '', NULL, NULL, NULL, ''),
(4, 4, 'lasmknkdl wnfelaewfnje', NULL, 'lsdknvsd; flfltkgswafew9weklr384 298345', 'sqjhbd', 'sdjhsb', NULL, NULL, NULL, 'cdjshbf werb wndenjk wbifb qiqeih');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosnino`
--

CREATE TABLE `datosnino` (
  `id_nino` int(11) NOT NULL,
  `id_cim` varchar(50) NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` datetime DEFAULT NULL,
  `edad_nino` varchar(45) DEFAULT NULL,
  `sexo` varchar(12) DEFAULT NULL,
  `municipio` varchar(250) DEFAULT NULL,
  `macrodistrito` varchar(250) DEFAULT NULL,
  `zona_barrio` varchar(250) DEFAULT NULL,
  `calle_avenida` varchar(250) DEFAULT NULL,
  `num_vivienda` varchar(45) DEFAULT NULL,
  `certificado_nacimiento` char(2) DEFAULT NULL,
  `ci` char(2) DEFAULT NULL,
  `num_ci` varchar(10) DEFAULT NULL,
  `ci_expedido` varchar(4) DEFAULT NULL,
  `tipo_seguro_salud` varchar(50) DEFAULT NULL,
  `otro_tipo_seguro_salud` varchar(50) DEFAULT NULL,
  `valor_tipo_seguro_salud` int(11) DEFAULT NULL,
  `carnet_vacunas` char(2) DEFAULT '',
  `valor_carnet_vacunas` int(11) DEFAULT NULL,
  `peso` decimal(10,3) DEFAULT NULL,
  `talla` decimal(10,2) DEFAULT NULL,
  `dk` varchar(200) DEFAULT NULL,
  `vacunacion_completa` char(2) DEFAULT NULL,
  `valor_vacunacion_completa` int(11) DEFAULT NULL,
  `tipo_discapacidad` char(2) DEFAULT NULL,
  `discapacidad` varchar(250) DEFAULT NULL,
  `valor_tipo_discapacidad` int(11) DEFAULT NULL,
  `estado_nutricional` varchar(150) NOT NULL,
  `nro_seguro` varchar(15) NOT NULL,
  `nro_partida_certf_nac` varchar(15) NOT NULL,
  `idioma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datosnino`
--

INSERT INTO `datosnino` (`id_nino`, `id_cim`, `fecha_registro`, `paterno`, `materno`, `nombres`, `fecha_nacimiento`, `edad_nino`, `sexo`, `municipio`, `macrodistrito`, `zona_barrio`, `calle_avenida`, `num_vivienda`, `certificado_nacimiento`, `ci`, `num_ci`, `ci_expedido`, `tipo_seguro_salud`, `otro_tipo_seguro_salud`, `valor_tipo_seguro_salud`, `carnet_vacunas`, `valor_carnet_vacunas`, `peso`, `talla`, `dk`, `vacunacion_completa`, `valor_vacunacion_completa`, `tipo_discapacidad`, `discapacidad`, `valor_tipo_discapacidad`, `estado_nutricional`, `nro_seguro`, `nro_partida_certf_nac`, `idioma`) VALUES
(1, 'codCIM0001', '2016-07-08 11:37:35', 'Mamani', 'Mamani', 'Jazmin Antonela', '2016-05-04 00:00:00', '0.2', 'Femenino', 'municipio', 'macrodistrito', 'zona', 'calle', '#3', 'n', 's', '6165654', 'or', 'Caja Nacional', NULL, 50, 'Si', 50, '13.000', '92.15', '', 'Si', 50, 'No', NULL, 50, '', '', '', ''),
(2, 'codCIM0001', '2016-07-08 12:12:01', 'Alejo', 'Mamani', 'Carla Selena', '2016-02-17 00:00:00', '0.5', 'Femenino', 'municipio', 'macrodistrito', 'zona', 'calle', '#3', 's', 's', '159874', 'pt', 'Seguro Universitario', NULL, 50, 'Si', 50, '14.800', '93.00', ';kln', 'No', 100, 'No', NULL, 50, '', '', '', ''),
(3, 'codCIM0001', '2016-07-08 12:17:20', 'guarachi', 'Asistiri', 'Abdiel yaosafat', '2015-12-04 00:00:00', '0.7', 'Masculino', 'municipio', 'macrodistrito', 'zona', 'calle', '#3', 'n', 's', '6165654', 'or', 'Seguro Universitario', NULL, 50, 'No', 100, '14.000', '96.00', 'dk', 'No', 100, 'Si', 'discapacidad', 100, '', '', '', ''),
(4, 'codCIM0001', '2016-07-08 12:26:14', 'Quispe', 'Sanchez', 'Thiago Gael', '2015-06-13 00:00:00', '1.0', 'Masculino', 'municipio', 'macrodistrito', 'zona', 'calle', '', 'n', 'n', NULL, NULL, 'Caja Nacional', NULL, 50, 'Si', 0, '13.500', '93.15', 'skjdvskdj welihfb', 'Si', 50, 'No', NULL, 50, '', '', '', ''),
(5, 'codCIM0001', '2016-07-14 16:05:17', 'camacho', 'andrade', 'victoria vanesa', '2015-04-03 00:00:00', '1.3', 'Femenino', 'El Alto', '1', 'Villa Alemania,', 'calle 3', '#2123', 's', 's', '15979', 'or', 'Caja Nacional', NULL, 50, 'Si', 50, '16.000', '45.00', 'wwwwww', 'Si', 50, 'No', NULL, 50, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escala`
--

CREATE TABLE `escala` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `edad` varchar(5) DEFAULT NULL,
  `mot_gruesa` varchar(10) DEFAULT NULL,
  `mot_fina` varchar(10) DEFAULT NULL,
  `aud_leng` varchar(10) DEFAULT NULL,
  `per_soc` varchar(10) DEFAULT NULL,
  `total_actual` varchar(10) DEFAULT NULL,
  `mes` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escala`
--

INSERT INTO `escala` (`id`, `id_nino`, `edad`, `mot_gruesa`, `mot_fina`, `aud_leng`, `per_soc`, `total_actual`, `mes`) VALUES
(1, 1, NULL, '111', 'wer', 'dfg', 'dfg', 'swd', NULL),
(2, 2, NULL, '222', 'tyu', 'tyu', 'rtg', 'dfg', NULL),
(3, 3, NULL, '333', 'uio', 'yui', 'yui', 'yui', NULL),
(4, 4, NULL, '444', 'tyu', 'tyu', 'tgy', 'gh', '2016-07-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `edad` varchar(3) DEFAULT NULL,
  `valor_edad` int(11) DEFAULT NULL,
  `sexo` char(2) DEFAULT NULL,
  `parentesco` varchar(80) DEFAULT NULL,
  `grado_instruccion` varchar(250) DEFAULT NULL,
  `valor_grado_instruccion` int(11) DEFAULT NULL,
  `ocupacion` varchar(150) DEFAULT NULL,
  `valor_ocupacion` int(11) DEFAULT NULL,
  `ingresos` varchar(45) DEFAULT NULL,
  `valor_ingresos` int(11) DEFAULT NULL,
  `caracteristicas_trabajo_colegio` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`id`, `id_nino`, `nombres`, `paterno`, `materno`, `edad`, `valor_edad`, `sexo`, `parentesco`, `grado_instruccion`, `valor_grado_instruccion`, `ocupacion`, `valor_ocupacion`, `ingresos`, `valor_ingresos`, `caracteristicas_trabajo_colegio`) VALUES
(1, 1, 'nombre padre', 'paterno padre', 'materno padre', '18', 100, 'm', 'Padre', 'Secundaria', 80, 'Independiente/formal', 80, '2222', 100, ''),
(2, 1, 'nombres madre', 'paterno madre', 'materno madre', '18', 100, 'f', 'Madre', 'Secundaria', 80, 'Eventual', 100, '2222', 100, ''),
(3, 2, 'nombre padre', 'paterno padre', 'materno padre', '34', 80, 'm', 'Padre', 'Primaria', 100, 'Eventual', 100, '2222', 100, 'ljdi ow'),
(4, 2, 'nombre madre', 'paterno madre', 'materno madre', '18', 100, 'f', 'Madre', 'Primaria', 100, 'Eventual', 100, '10000', 100, 'efew rete '),
(5, 3, 'nombre padre', 'aaa', 'aaa', '19', 100, 'm', 'Padre', 'Primaria', 100, 'Eventual', 100, '2222', 100, 'flkgjhi fgdjoi fdgjoi'),
(6, 3, 'nombre madre', 'paterno madre', 'aaa', '18', 100, 'f', 'Madre', 'Primaria', 100, 'Eventual', 100, '2222', 100, 'flkgjhi fgdjoi fdgjoi'),
(7, 4, 'aaa', 'aaa', 'materno padre', '20', 100, 'm', 'Padre', 'Primaria', 100, 'Eventual', 100, '2500', 100, ''),
(8, 4, 'Thiago Gael', 'Quispe', 'Sanchez', '20', 100, 'f', 'Madre', 'Sin Educacion', 100, 'Desempleado', 100, '3000', 100, 'flkgjhi fgdjoi fdgjoi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nutricion`
--

CREATE TABLE `nutricion` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `talla` varchar(45) DEFAULT NULL,
  `ob` varchar(45) DEFAULT NULL,
  `sob` varchar(45) DEFAULT NULL,
  `nt` varchar(45) DEFAULT NULL,
  `dal` varchar(45) DEFAULT NULL,
  `dam` varchar(45) DEFAULT NULL,
  `dag` varchar(45) DEFAULT NULL,
  `nttb` varchar(45) DEFAULT NULL,
  `tb` varchar(45) DEFAULT NULL,
  `ta` varchar(45) DEFAULT NULL,
  `mes` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `id_cim` varchar(50) NOT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `grupo_etareo` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `antiguedad` varchar(8) DEFAULT NULL,
  `evaluacion` varchar(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `ci_expedido` varchar(3) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `num_hijos` varchar(2) DEFAULT NULL,
  `hijos_cim` varchar(2) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `paterno` varchar(30) DEFAULT NULL,
  `materno` varchar(30) DEFAULT NULL,
  `hijos_becados` varchar(2) DEFAULT NULL,
  `distrito` varchar(2) DEFAULT NULL,
  `zona` varchar(45) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `fono` varchar(10) DEFAULT NULL,
  `num_cel` varchar(10) DEFAULT NULL,
  `idiomas` varchar(200) DEFAULT NULL,
  `otro_idioma` varchar(150) DEFAULT NULL,
  `grado_instruccion` varchar(45) DEFAULT NULL,
  `grado_instruccion_detalle` varchar(45) DEFAULT NULL,
  `experiencia_laboral` varchar(8) DEFAULT NULL,
  `form_continua` varchar(2) DEFAULT NULL,
  `form_continua_anio` varchar(5) DEFAULT NULL,
  `red_municipal` varchar(2) DEFAULT NULL,
  `red_municipal_anio` varchar(5) DEFAULT NULL,
  `nut_alim` varchar(2) DEFAULT NULL,
  `nut_alim_anio` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `id_cim`, `cargo`, `grupo_etareo`, `categoria`, `fecha_ingreso`, `antiguedad`, `evaluacion`, `fecha_nacimiento`, `ci`, `ci_expedido`, `estado_civil`, `num_hijos`, `hijos_cim`, `nombres`, `paterno`, `materno`, `hijos_becados`, `distrito`, `zona`, `direccion`, `fono`, `num_cel`, `idiomas`, `otro_idioma`, `grado_instruccion`, `grado_instruccion_detalle`, `experiencia_laboral`, `form_continua`, `form_continua_anio`, `red_municipal`, `red_municipal_anio`, `nut_alim`, `nut_alim_anio`) VALUES
(1, 'codCIM0001', 'Responsable', 'Lactantes', 'Nueva', '2016-07-13', '3', 'Bueno', '1998-07-13', '123456', 'pt', 'Casada', '4', '2', 'juana adela', 'soria', 'aparicio', 'Si', '1', 'Villa Bolivar A', 'asxa wefwferw ', '22222', '7779849', 'Quechua, Aymara, Ingles, ', 'aleman', 'Estudiante univ', 'jhvg', '5 a;os', 'Si', '2014', 'Si', '2015', 'Si', '2016'),
(2, 'codCIM0002', 'Responsable', 'Preinfantes', 'Nueva', '2016-07-13', '1', 'Regular', '1998-07-13', '789456', 'pt', 'Conviviente', '3', '2', 'sara martha', 'soliz', 'vega', 'Si', '2', 'Villa Dolores', 'direccion n232', '88949491', '7779849', 'Castellano, Aymara, ', 'frances', 'Estudiante univ', 'octavo semestre', '1', 'No', '', 'No', '', 'Si', '2016'),
(3, 'codCIM0002', 'Manipuladora', 'Infantes', 'Nueva', '2016-07-13', '1', 'Regular', '1984-09-28', '1594787', 'tj', 'Soltera', '5', '2', 'maria selena', 'guzman', 'calle', 'Si', '5', 'Villa Bolivar B', 'knsfj poerhutepwrj', '2884654', '7777777', 'Castellano, Ingles, ', '', 'Tecnico superior', 'lic. alimentacion', '2 anios', 'Si', '2014', 'No', '', 'No', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proteccion`
--

CREATE TABLE `proteccion` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `maltrato_infantil` varchar(5) DEFAULT NULL,
  `cantidad_casos_maltrato` varchar(5) DEFAULT NULL,
  `iras` varchar(5) DEFAULT NULL,
  `edas` varchar(5) DEFAULT NULL,
  `mes` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacionfamiliar`
--

CREATE TABLE `situacionfamiliar` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `nino_vive_con` varchar(45) DEFAULT NULL,
  `nino_vive_con_otro` varchar(45) DEFAULT NULL,
  `valor_nino_vive_con` int(11) DEFAULT NULL,
  `ausencia_madre` varchar(45) DEFAULT NULL,
  `ausencia_madre_otro` varchar(45) DEFAULT NULL,
  `valor_ausencia_madre` int(11) DEFAULT NULL,
  `ausencia_padre` varchar(45) DEFAULT NULL,
  `ausencia_padre_otro` varchar(45) DEFAULT NULL,
  `valor_ausencia_padre` int(11) DEFAULT NULL,
  `ausencia_ambos` varchar(45) DEFAULT NULL,
  `ausencia_ambos_otro` varchar(45) DEFAULT NULL,
  `valor_ausencia_ambos` int(11) DEFAULT NULL,
  `ambiente_familiar` varchar(45) DEFAULT NULL,
  `valor_ambiente_familiar` int(11) DEFAULT NULL,
  `numero_hijos` int(11) DEFAULT NULL,
  `valor_numero_hijos` int(11) DEFAULT NULL,
  `tipo_familia` varchar(25) DEFAULT NULL,
  `valor_tipo_familia` int(11) DEFAULT NULL,
  `numero_hijos_6a` varchar(10) NOT NULL,
  `acuden_ser_sal` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacionfamiliar`
--

INSERT INTO `situacionfamiliar` (`id`, `id_nino`, `nino_vive_con`, `nino_vive_con_otro`, `valor_nino_vive_con`, `ausencia_madre`, `ausencia_madre_otro`, `valor_ausencia_madre`, `ausencia_padre`, `ausencia_padre_otro`, `valor_ausencia_padre`, `ausencia_ambos`, `ausencia_ambos_otro`, `valor_ausencia_ambos`, `ambiente_familiar`, `valor_ambiente_familiar`, `numero_hijos`, `valor_numero_hijos`, `tipo_familia`, `valor_tipo_familia`, `numero_hijos_6a`, `acuden_ser_sal`) VALUES
(1, 1, 'Padre', NULL, 80, 'Estudio', NULL, 100, 'Estudio', NULL, 100, 'Estudio', NULL, 100, 'Armonico', 50, 5, NULL, 'Nuclear', 50, '', ''),
(2, 2, 'Madre', NULL, 80, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Armonico', 50, 5, NULL, 'Monoparental', 100, '', ''),
(3, 3, 'Abuelos', NULL, 100, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Armonico', 50, 5, NULL, 'Monoparental', 100, '', ''),
(4, 4, 'Padre', NULL, 80, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Trabajo', NULL, 100, 'Armonico', 50, 5, NULL, 'Nuclear', 50, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suplementos`
--

CREATE TABLE `suplementos` (
  `id` int(11) NOT NULL,
  `id_nino` int(11) NOT NULL,
  `vacunas_aldia` varchar(5) DEFAULT NULL,
  `vit_a_1d` date DEFAULT NULL,
  `vit_a_2d` date DEFAULT NULL,
  `ferrosol_1d` date DEFAULT NULL,
  `ferrosol_2d` date DEFAULT NULL,
  `ferrosol_3d` date DEFAULT NULL,
  `chispitas` date DEFAULT NULL,
  `zinc` date DEFAULT NULL,
  `nutribebe` date DEFAULT NULL,
  `mebendazol_1d` date DEFAULT NULL,
  `mebendazol_2d` date DEFAULT NULL,
  `mes` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2y$10$44j03aVc7RLP5kEl83mfIeScFKRRAOls8R5iXVLVz2Xeg8k2TH8kG', 'admin', NULL, NULL),
(2, 'article', '$2y$10$J68aEGqpnSe0CVtxvYSyKOb87l0YoW.VFbw32vX60VA4IYrQ5ehKW', 'article', NULL, NULL),
(3, 'ficha', '$2y$10$Fs.3C31CBpQPXyl6C29gI.A0FQoJV8YxAp1s8st/m6PsYNFtlEvd2', 'trabajo social', NULL, NULL),
(4, 'user', '$2y$10$Fs.3C31CBpQPXyl6C29gI.A0FQoJV8YxAp1s8st/m6PsYNFtlEvd2', 'user', NULL, NULL),
(5, 'equipo', '$2y$10$Fs.3C31CBpQPXyl6C29gI.A0FQoJV8YxAp1s8st/m6PsYNFtlEvd2', 'equipo tecnico', '2016-07-05 23:07:00', '2016-07-05 23:07:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspectoseconomicos`
--
ALTER TABLE `aspectoseconomicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aspectos_economicos_datos_nino1_idx` (`id_nino`);

--
-- Indices de la tabla `caracteristicasvivienda`
--
ALTER TABLE `caracteristicasvivienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vivienda_tiene_datos_nino1_idx` (`id_nino`);

--
-- Indices de la tabla `cim`
--
ALTER TABLE `cim`
  ADD PRIMARY KEY (`id_cim`);

--
-- Indices de la tabla `consideraciones`
--
ALTER TABLE `consideraciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_consideraciones_datos_nino1_idx` (`id_nino`);

--
-- Indices de la tabla `datosnino`
--
ALTER TABLE `datosnino`
  ADD PRIMARY KEY (`id_nino`),
  ADD KEY `fk_datosnino_cim1_idx` (`id_cim`);

--
-- Indices de la tabla `escala`
--
ALTER TABLE `escala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_escala_datosnino1_idx` (`id_nino`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_familiares_datos_nino1_idx` (`id_nino`);

--
-- Indices de la tabla `nutricion`
--
ALTER TABLE `nutricion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_table1_datosnino1_idx` (`id_nino`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_personal_cim1_idx` (`id_cim`);

--
-- Indices de la tabla `proteccion`
--
ALTER TABLE `proteccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_proteccion_datosnino1_idx` (`id_nino`);

--
-- Indices de la tabla `situacionfamiliar`
--
ALTER TABLE `situacionfamiliar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_situacion_familiar_datos_nino_idx` (`id_nino`);

--
-- Indices de la tabla `suplementos`
--
ALTER TABLE `suplementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_suplementos_datosnino2_idx` (`id_nino`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspectoseconomicos`
--
ALTER TABLE `aspectoseconomicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `caracteristicasvivienda`
--
ALTER TABLE `caracteristicasvivienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `consideraciones`
--
ALTER TABLE `consideraciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datosnino`
--
ALTER TABLE `datosnino`
  MODIFY `id_nino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `escala`
--
ALTER TABLE `escala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `nutricion`
--
ALTER TABLE `nutricion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proteccion`
--
ALTER TABLE `proteccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `situacionfamiliar`
--
ALTER TABLE `situacionfamiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `suplementos`
--
ALTER TABLE `suplementos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aspectoseconomicos`
--
ALTER TABLE `aspectoseconomicos`
  ADD CONSTRAINT `fk_aspectos_economicos_datos_nino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caracteristicasvivienda`
--
ALTER TABLE `caracteristicasvivienda`
  ADD CONSTRAINT `fk_vivienda_tiene_datos_nino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consideraciones`
--
ALTER TABLE `consideraciones`
  ADD CONSTRAINT `fk_consideraciones_datos_nino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datosnino`
--
ALTER TABLE `datosnino`
  ADD CONSTRAINT `fk_datosnino_cim1` FOREIGN KEY (`id_cim`) REFERENCES `cim` (`id_cim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `escala`
--
ALTER TABLE `escala`
  ADD CONSTRAINT `fk_escala_datosnino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD CONSTRAINT `fk_familiares_datos_nino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nutricion`
--
ALTER TABLE `nutricion`
  ADD CONSTRAINT `fk_table1_datosnino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal_cim1` FOREIGN KEY (`id_cim`) REFERENCES `cim` (`id_cim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proteccion`
--
ALTER TABLE `proteccion`
  ADD CONSTRAINT `fk_proteccion_datosnino1` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `situacionfamiliar`
--
ALTER TABLE `situacionfamiliar`
  ADD CONSTRAINT `fk_situacion_familiar_datos_nino` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `suplementos`
--
ALTER TABLE `suplementos`
  ADD CONSTRAINT `fk_suplementos_datosnino2` FOREIGN KEY (`id_nino`) REFERENCES `datosnino` (`id_nino`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

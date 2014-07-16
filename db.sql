-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.12-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla sipasant.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pasantia_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `empresas_pasantia_id_foreign` (`pasantia_id`),
  CONSTRAINT `empresas_pasantia_id_foreign` FOREIGN KEY (`pasantia_id`) REFERENCES `pasantias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.empresas: ~0 rows (aproximadamente)
DELETE FROM `empresas`;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carnet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_movil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_hogar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `estudiantes_usuario_id_foreign` (`usuario_id`),
  CONSTRAINT `estudiantes_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.estudiantes: ~0 rows (aproximadamente)
DELETE FROM `estudiantes`;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.migrations: ~4 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_06_26_125148_create_usuarios_table', 1),
	('2014_06_26_125223_create_estudiantes_table', 1),
	('2014_06_26_125302_create_pasantias_table', 1),
	('2014_06_26_125329_create_procesos_table', 1),
	('2014_06_26_125354_create_empresas_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.pasantias
CREATE TABLE IF NOT EXISTS `pasantias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suervisor_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suervisor_cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_fin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('medio_tiempo','tiempo_comleto') COLLATE utf8_unicode_ci NOT NULL,
  `horario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nota` int(11) NOT NULL,
  `semestre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` enum('pendiente','aceptado','rechazado','aprobado','reprobado') COLLATE utf8_unicode_ci NOT NULL,
  `estudiante_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pasantias_estudiante_id_foreign` (`estudiante_id`),
  CONSTRAINT `pasantias_estudiante_id_foreign` FOREIGN KEY (`estudiante_id`) REFERENCES `estudiantes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.pasantias: ~0 rows (aproximadamente)
DELETE FROM `pasantias`;
/*!40000 ALTER TABLE `pasantias` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasantias` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.procesos
CREATE TABLE IF NOT EXISTS `procesos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aprobacion` datetime NOT NULL,
  `entrega_carta` datetime NOT NULL,
  `entrega_borrador` datetime NOT NULL,
  `retiro_borrador` datetime NOT NULL,
  `entrega_final` datetime NOT NULL,
  `pasantia_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `procesos_pasantia_id_foreign` (`pasantia_id`),
  CONSTRAINT `procesos_pasantia_id_foreign` FOREIGN KEY (`pasantia_id`) REFERENCES `pasantias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.procesos: ~0 rows (aproximadamente)
DELETE FROM `procesos`;
/*!40000 ALTER TABLE `procesos` DISABLE KEYS */;
/*!40000 ALTER TABLE `procesos` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('estudiante','coordinador','root') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `correo`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Eli José Carrasquero', 'ielijose', '$2y$10$a/CwyuWw.EvpMPDBZVVffeGkY4Z8Hv1RQ2z3KwNgMfJ1dKYSlt5IC', 'ielijose@gmail.com', 'estudiante', NULL, '2014-07-08 00:30:02', '2014-07-08 00:30:02'),
	(2, 'Eli José Carrasquero', 'laster', '$2y$10$cpWVoKdhFtkaOqQd/YVHGuw9nquPLrXguPgbFp8dv/stEbA/kXZuy', 'ielijose@hotmail.com', 'estudiante', NULL, '2014-07-08 00:30:47', '2014-07-08 00:30:47'),
	(3, 'daniel', 'daniel', '1234', 'daniel@aasf.co', 'estudiante', NULL, '2014-07-08 00:49:07', '2014-07-08 00:49:07');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.12-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             8.3.0.4796
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.empresas: ~33 rows (aproximadamente)
DELETE FROM `empresas`;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id`, `empresa`, `direccion`, `telefono`, `correo`, `pasantia_id`, `created_at`, `updated_at`) VALUES
	(1, 'Gibson, Lakin and Reichel', '055 Bednar Canyon Apt. 799\nYasmeenburgh, IA 69969', '399.232.9880x096', 'tristian.lehner@little.info', 1, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(2, 'Harvey, Harris and Rosenbaum', '336 Laverne Locks\nPort Presley, LA 84852', '595.741.3178', 'jhettinger@reillyschultz.com', 2, '2014-07-15 00:40:59', '2014-07-15 00:40:59'),
	(3, 'Beier-Pfeffer', '526 Heath Avenue\nHirthechester, SC 57567-9614', '(483)415-1982', 'citlalli43@yahoo.com', 3, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(4, 'Stark-Williamson', '383 Reinhold Creek Suite 705\nTodstad, NY 13422', '1-073-845-5602x34715', 'aherman@hotmail.com', 4, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(5, 'Braun, Hamill and Walsh', '87918 Torp Point\nNew Dorthytown, OK 83150-5773', '559-660-4185', 'garret.hand@christiansen.biz', 5, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(6, 'Ruecker and Sons', '2837 Elinor Island\nHerbertchester, AZ 52249', '570-007-1075', 'dibbert.alysha@gmail.com', 6, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(7, 'Ullrich PLC', '710 Mae Gateway\nJoesphville, AE 60247', '545.616.1636', 'gkeebler@hotmail.com', 7, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(8, 'Ledner-Langosh', '35844 Witting Mission\nNorth Noelbury, DC 39848', '+21(1)2533888381', 'lucie44@larkinmills.info', 8, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(9, 'Zulauf-Rowe', '328 Fernando Gateway\nCrystalfurt, AE 33352-5952', '393.973.6897x0703', 'torp.river@yahoo.com', 9, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(10, 'Williamson, Monahan and Kuhlman', '3240 Rau Villages Suite 115\nRoweville, MH 34699-9632', '01015188580', 'wcrona@yahoo.com', 10, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(11, 'Fritsch and Sons', '654 Hailee Lane Apt. 001\nLake Hardyview, ID 83623-9682', '901.331.1937x4410', 'brittany.wolf@hotmail.com', 11, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(12, 'King and Sons', '840 Sterling Landing Apt. 354\nLake Ryanfurt, MP 96228', '+17(4)4700990030', 'hope50@gmail.com', 12, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(13, 'Kiehn, Tremblay and Emard', '7431 Christina Summit Apt. 945\nNorth Jailynhaven, AL 59010-0375', '163.260.4531x63636', 'claudie18@hagenes.org', 13, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(14, 'Heaney LLC', '960 Paul Grove\nEast Nelsonchester, KS 19587', '1-978-219-3143x26473', 'brooks20@gmail.com', 14, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(15, 'Kilback LLC', '7715 Cruickshank Meadows\nLeatown, AE 30077-1083', '1-427-941-3798x85824', 'darien64@bauch.info', 15, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(16, 'Schuppe-Rippin', '6639 Destinee Gateway\nThoraton, MA 63153', '798-609-6908x35292', 'luettgen.alda@gmail.com', 16, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(17, 'Becker Inc', '38574 Vito Key\nNew Clarktown, SD 67728', '03993434586', 'caden.friesen@shields.org', 17, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(18, 'Swift LLC', '9631 Mayer Cove Apt. 910\nWest Chrisburgh, AL 66372', '057.819.7143x509', 'romaguera.jalyn@aufderhar.net', 18, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(19, 'Collins-Wisozk', '8196 Burdette Corner\nWillaport, NJ 53004-4573', '909.687.0464x22946', 'mberge@johns.biz', 19, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(20, 'Parker, Kulas and Rice', '7126 Frances Highway\nBrekkeburgh, HI 61033', '1-037-822-1499', 'jones.federico@bartoletti.com', 20, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(21, 'Zieme-Tillman', '558 Jasen Wall\nDollyport, NM 05896', '294-606-0989x8488', 'braun.phoebe@johnsoncummings.com', 21, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(22, 'Hudson-King', '61471 Kieran Knolls\nCarmellaland, MO 97227-7871', '387-046-5277', 'qupton@hotmail.com', 22, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(23, 'Jewess, Casper and Pfeffer', '4832 Brendon Port Suite 810\nSouth Mariana, WA 74328', '334-122-4491', 'little.felicia@gmail.com', 23, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(24, 'Wolff-Windler', '99041 Katarina Expressway\nDomingoshire, NH 65933', '383-340-8938x84083', 'oschowalter@jacobson.com', 24, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(25, 'McCullough, Langworth and Kuphal', '066 Wisoky Circle\nJilliantown, NM 38191', '020.507.2199x921', 'trippin@gleasonoconnell.com', 25, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(26, 'Lehner-Hamill', '8163 Heller Islands\nOlamouth, CT 76902-2469', '574.293.8005x468', 'bcummerata@yahoo.com', 26, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(27, 'Kozey, Rempel and Franecki', '055 Aurelia Mission\nShanefort, PW 49332-2821', '027.703.1753x2031', 'nolan.madge@yahoo.com', 27, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(28, 'Kuvalis PLC', '5483 Eli Forest Suite 477\nGoldenfurt, SD 71482-1528', '+53(4)0731273189', 'westley.graham@gmail.com', 28, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(29, 'Waters PLC', '30708 Schmeler Coves\nRashawnburgh, NH 13463-3682', '676-139-1485x85124', 'stephany.deckow@streichspencer.com', 29, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(30, 'O\'Hara and Sons', '123 Gleichner Flat Apt. 604\nPort Kaiashire, TX 64659', '417.957.2871x44779', 'mokuneva@conn.com', 30, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(31, 'Connelly Inc', '002 Wintheiser Coves\nMathiasstad, DE 67281-1920', '472-623-3402', 'shania.brakus@keeling.net', 31, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(32, 'Dietrich Inc', '4921 Melvina Ferry\nCarrollside, MN 43163', '305.016.3405x274', 'ronny.kuphal@yahoo.com', 32, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(33, 'Paucek LLC', '0142 Tad Corners\nMarisolton, MD 55276', '(196)065-9836', 'khalil.moen@hotmail.com', 33, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(34, 'Schumm Inc', '219 Altenwerth Roads\nEast Angelicastad, MD 62447', '1-170-652-8164x89199', 'antwan.hagenes@yahoo.com', 34, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(35, 'Gutkowski PLC', '47226 Wilderman Green Suite 067\nHaaghaven, MI 06279', '(597)009-2524x875', 'franecki.winnifred@ferrystiedemann.com', 35, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(36, 'Flatley-Brakus', '21164 Mazie Lake Suite 373\nBarrowsburgh, NC 86231', '1-086-383-6820x97667', 'dana.douglas@armstrong.net', 36, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(37, 'INVERHURCA', 'Santa Rita', '02649343122', 'inverhurca@hotmail.com', 37, '2014-07-15 08:42:59', '2014-07-15 08:42:59');
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.estudiantes: ~36 rows (aproximadamente)
DELETE FROM `estudiantes`;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `ci`, `carnet`, `direccion`, `telefono_movil`, `telefono_hogar`, `usuario_id`, `created_at`, `updated_at`) VALUES
	(1, 'Newell', 'Daugherty', '23457068', '73785609', '757 Goldner Avenue\nStromanbury, KY 91646', '537-628-0771', '918.446.7523x081', 2, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(2, 'Annetta', 'Will', '57251033', '91373300', '2215 Estel Mission\nLake Ericaburgh, PR 30695', '1-893-781-9537', '07879925886', 3, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(3, 'Alfredo', 'Mitchell', '51373609', '58046774', '1667 Zaria Terrace\nNew Adelestad, SD 79156', '(695)912-8918', '1-352-947-7427', 11, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(4, 'Sherwood', 'Abbott', '75669572', '77621709', '488 Doyle Estate Apt. 490\nJanehaven, NC 25919', '(175)316-4896x9307', '928.672.9320x3303', 17, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(5, 'Kyler', 'Nicolas', '22068748', '35745328', '6853 McKenzie Loop Suite 976\nStoltenbergborough, RI 39123', '1-441-872-0475x13927', '02637642514', 22, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(6, 'Lessie', 'Osinski', '92117621', '56692242', '69361 Luettgen Cove Apt. 856\nJillianton, KS 80619-7217', '1-028-067-5941', '(614)021-9867', 27, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(7, 'Leif', 'Ryan', '86246831', '17848092', '3780 Ortiz Greens\nBahringerbury, OK 63976', '259-112-5842', '(096)453-1817x223', 31, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(8, 'Janae', 'Kreiger', '42024947', '54534440', '191 Spinka Tunnel\nMcClureburgh, AP 74195-7759', '839.554.5231x405', '(218)430-5768', 34, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(9, 'Kiera', 'Schiller', '17963714', '52767179', '04358 Annamarie Mews\nLake Ethel, PA 21537-7651', '01453735306', '+11(2)8341412277', 35, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(10, 'Cydney', 'Yundt', '80303357', '30748770', '6817 Metz Land\nDonaldland, VI 12604', '356.069.2100', '818.089.9148x24963', 37, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(11, 'Dax', 'Heidenreich', '74280901', '97207716', '70094 King Ridges\nJaquelinefurt, VI 76207', '+78(3)5325647562', '1-636-321-8421x61836', 38, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(12, 'Jamison', 'Muller', '22132976', '36712832', '194 Cory Fall\nLibbyland, AA 18435', '341.116.4916', '185-661-9141', 39, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(13, 'Maryse', 'Daniel', '94532480', '1564435', '37578 Helena Valley Suite 466\nDorotheahaven, DC 08895-1121', '084-582-1062x758', '+49(9)2193502821', 46, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(14, 'Richie', 'Mills', '99124054', '97572634', '214 Hessel Ports Suite 934\nBertramfurt, ME 11956', '03199602663', '(557)321-4619x636', 49, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(15, 'Twila', 'Littel', '15150116', '28835284', '463 Lonnie Falls Suite 949\nLake Deondreton, NC 47324-3290', '216.946.0885x423', '783-185-8416', 50, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(16, 'Hillary', 'Morar', '23264970', '54361712', '5905 Carroll Flat Suite 126\nBalistrerifort, OH 85577-8554', '187-045-1522x873', '381-484-5807', 51, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(17, 'Cordell', 'Reinger', '37138344', '4581857', '98387 Birdie Gateway Apt. 214\nTomasville, NH 86985-5517', '05680011069', '+44(9)0791304549', 52, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(18, 'Logan', 'Hickle', '65020121', '96038218', '0555 Kunze Greens Suite 646\nNew Claudie, UT 89793', '477-520-0315x06039', '792.775.3327', 54, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(19, 'Gilda', 'Fadel', '7075989', '47900649', '9079 Fahey Prairie Apt. 358\nWest Kamrenside, MN 53080', '05723337230', '113-225-6091', 57, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(20, 'Giovanna', 'Bogisich', '32988396', '54991419', '94925 Hansen Passage\nDenesikmouth, WY 57631-5338', '058.393.2069', '03171774696', 58, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(21, 'Sigmund', 'Johns', '16405923', '62569488', '99468 Annetta Squares\nGaylordstad, NY 13274-2028', '02644499750', '495-693-1034x470', 59, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(22, 'Kaleb', 'Gutkowski', '97226912', '92632140', '84571 Sylvester Pine\nChristiansenborough, IL 29556-3266', '(403)166-7889x44597', '656.827.6484', 62, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(23, 'Carol', 'Watsica', '23143172', '84787917', '763 Jewell Common\nNew Ettieview, DE 23075', '1-911-323-2029x2393', '1-489-413-3214x4516', 65, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(24, 'Brain', 'Lakin', '65222097', '80224755', '28875 Stamm Branch Apt. 837\nMitchellbury, IL 79846', '420.212.3075x0109', '874-045-2739x011', 66, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(25, 'Ellen', 'Heidenreich', '91012798', '93527766', '377 Carissa Mount Apt. 180\nRodrigoton, AE 60723', '858-261-7184', '1-532-552-7051x685', 67, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(26, 'Skyla', 'Osinski', '21295623', '72669447', '3131 Lolita Mews Suite 511\nZboncakberg, MI 30822-6455', '1-871-982-4195x05473', '1-386-656-2130x7100', 68, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(27, 'Billie', 'Dickens', '71364408', '20166829', '92158 Hamill Cove Apt. 887\nEthelynchester, AP 56895-9955', '100.355.3654', '04040368950', 70, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(28, 'Francisca', 'Rau', '37713314', '37558036', '78159 Isabelle Trail Suite 255\nLehnerville, MN 88568-2149', '+18(6)3327891653', '(167)969-4513', 74, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(29, 'Graham', 'Jaskolski', '68039595', '44334999', '8560 Maurice Cove Suite 570\nWillmsfurt, ND 99043', '034.825.3829', '082-695-9981x33234', 75, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(30, 'Kelley', 'Beahan', '35567060', '25967356', '9684 Annamae Rapid Apt. 765\nWest Kavonchester, MT 79978', '05201567492', '228.485.0122', 77, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(31, 'Kristoffer', 'Konopelski', '59040316', '53095825', '08399 Estefania Valleys Apt. 352\nSouth Danteburgh, NJ 48572-1638', '01776434115', '430.484.6271x070', 80, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(32, 'Aryanna', 'Crona', '73653330', '99422813', '7493 Rodriguez Place\nLake Ameliaton, DE 83940-6245', '949-089-4762', '747.000.1152x200', 81, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(33, 'Neoma', 'Mraz', '81228677', '58483103', '0685 Veda Summit Apt. 143\nSouth Janice, FM 35484-1895', '061.493.8948x542', '491-997-7597x48984', 85, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(34, 'Miguel', 'Kassulke', '84193445', '26272129', '3989 Amir Springs\nPort Avery, VT 45010-0169', '1-093-534-4503x02398', '279.166.8780x31410', 87, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(35, 'Rebeka', 'Kilback', '91935534', '54556482', '119 Cecelia Meadow\nParkerport, PW 25847', '234.211.4423', '+07(6)1124752212', 94, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(36, 'Earlene', 'Hyatt', '63941979', '49583274', '8192 Stephany Plaza\nBarbarachester, WV 39390-0054', '379-721-6382', '08245377644', 97, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(37, 'Eli José ', 'Carrasquero', '21382657', '51519551', 'Santa Rita ', '04246029989', '02649340424 ', 102, '2014-07-15 08:42:58', '2014-07-15 08:42:58');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.migrations: ~6 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_06_26_125148_create_usuarios_table', 1),
	('2014_06_26_125223_create_estudiantes_table', 1),
	('2014_06_26_125302_create_pasantias_table', 1),
	('2014_06_26_125329_create_procesos_table', 1),
	('2014_06_26_125354_create_empresas_table', 1),
	('2014_07_13_230349_create_semestre_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.pasantias
CREATE TABLE IF NOT EXISTS `pasantias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor_cargo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_fin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('medio_tiempo','tiempo_completo') COLLATE utf8_unicode_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.pasantias: ~36 rows (aproximadamente)
DELETE FROM `pasantias`;
/*!40000 ALTER TABLE `pasantias` DISABLE KEYS */;
INSERT INTO `pasantias` (`id`, `actividad`, `supervisor_nombre`, `supervisor_cargo`, `departamento`, `fecha_inicio`, `fecha_fin`, `tipo`, `horario`, `descripcion`, `nota`, `semestre`, `estado`, `estudiante_id`, `created_at`, `updated_at`) VALUES
	(1, 'strategize clicks-and-mortar infrastructures', 'Gene Medhurst', 'Right-sized analyzing focusgroup', 'Inc', '1992-01-11 13:58:12', '1986-10-28 20:08:07', 'tiempo_completo', 'Africa/Libreville', 'Quo expedita error vel quam. Ratione eum aut dolor voluptas dignissimos ut.', 0, '1', 'pendiente', 1, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(2, 'revolutionize 24/7 content', 'Ms. Beaulah Ullrich V', 'Organic real-time core', 'LLC', '1999-02-13 11:53:38', '1980-10-21 18:38:00', 'medio_tiempo', 'Asia/Damascus', 'Accusamus ipsum fugit recusandae rerum voluptatem. Eos commodi officiis quia voluptatem. Expedita quos culpa et sed iusto. Ut sapiente aut molestiae nesciunt aperiam ea.', 0, '2', 'aceptado', 2, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(3, 'synthesize world-class e-commerce', 'Ms. Jamie Weber', 'Pre-emptive client-driven database', 'Ltd', '1985-10-06 12:18:42', '1997-12-15 04:38:07', 'medio_tiempo', 'America/St_Kitts', 'Debitis numquam excepturi aut nemo eveniet. Repellat consequatur voluptatibus modi rerum nisi. Velit quis numquam quia officiis labore nobis illum ut. Dolorem blanditiis impedit qui suscipit.', 0, '1', 'rechazado', 3, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(4, 'embrace impactful supply-chains', 'Macey Kiehn', 'Optimized full-range protocol', 'Inc', '2012-07-06 20:33:35', '1985-12-28 03:04:06', 'medio_tiempo', 'America/Kentucky/Louisville', 'Eum cupiditate earum sit eum ad quo praesentium. Repellendus nobis odit voluptatem rem. Et maiores totam voluptate facere at enim. Qui molestiae nemo consequatur quis quidem vero reprehenderit.', 0, '1', 'aceptado', 4, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(5, 'generate synergistic communities', 'Jeanette Purdy V', 'Secured eco-centric flexibility', 'Group', '1997-05-11 00:02:29', '2000-04-02 04:38:55', 'medio_tiempo', 'America/El_Salvador', 'Eum nemo ullam exercitationem quos corporis et. Soluta corrupti nam sit.\nEst ut assumenda voluptatem commodi deleniti et. Aperiam voluptas ipsum eos voluptatibus voluptatem enim.', 0, '3', 'rechazado', 5, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(6, 'streamline intuitive markets', 'Kenny Beatty', 'Seamless eco-centric hardware', 'LLC', '1996-01-20 08:56:45', '2006-06-30 13:52:21', 'medio_tiempo', 'America/Rankin_Inlet', 'Eligendi adipisci aut et iure. In et ut veritatis. Corrupti ea doloremque alias dignissimos libero aut. Aliquam ipsum ducimus commodi voluptas vero. Eligendi est corporis nihil cumque ut.', 0, '2', 'pendiente', 6, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(7, 'matrix visionary content', 'Conner Tillman', 'Optimized web-enabled function', 'and Sons', '1990-03-27 11:05:18', '1981-08-18 20:16:58', 'medio_tiempo', 'Africa/Douala', 'Est deserunt cumque minus eligendi. In earum quo necessitatibus esse. Accusamus rerum impedit alias consequuntur enim nobis. Qui temporibus cupiditate optio voluptatem voluptas atque.', 0, '1', 'aceptado', 7, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(8, 'deliver killer technologies', 'Leanna Bartell I', 'Virtual reciprocal structure', 'Group', '1987-02-22 12:46:18', '2010-01-29 08:50:12', 'tiempo_completo', 'Asia/Aqtobe', 'Qui ut et doloribus saepe et quia in. Est at iure nostrum incidunt laudantium. Inventore ut sit repudiandae et magnam autem.', 0, '2', 'aceptado', 8, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(9, 'benchmark one-to-one schemas', 'Bradly Howe', 'Multi-layered client-server implementation', 'PLC', '2003-08-16 09:55:24', '1981-02-10 23:00:22', 'medio_tiempo', 'America/Chicago', 'Adipisci voluptas eaque sunt fugit. Facilis ipsum consequatur consequatur dolor. Vitae sapiente similique ab repudiandae sed.', 0, '2', 'aceptado', 9, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(10, 'reinvent rich bandwidth', 'Dexter Macejkovic', 'Advanced real-time artificialintelligence', 'and Sons', '1985-07-31 08:33:58', '1983-08-15 04:26:59', 'tiempo_completo', 'Africa/Ceuta', 'In quis veniam cupiditate sunt tenetur sequi. Rem est corrupti beatae dolorem est eos.', 0, '1', 'aceptado', 10, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(11, 'implement front-end models', 'Domenic Feil', 'Diverse stable protocol', 'PLC', '2014-04-10 09:44:47', '1992-04-10 11:37:30', 'medio_tiempo', 'Asia/Almaty', 'Quasi facilis deserunt esse omnis. Mollitia fugiat fuga est et fuga voluptatem quis. Consequatur aut voluptatibus tenetur id excepturi. Consequatur aperiam omnis quisquam.', 0, '1', 'rechazado', 11, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(12, 'generate transparent convergence', 'Katheryn Gusikowski', 'Upgradable multi-state parallelism', 'Inc', '2010-12-31 05:18:10', '1970-06-11 03:32:25', 'medio_tiempo', 'America/Vancouver', 'Voluptatem corporis dolorum alias quam. Ex quia suscipit quis et ut saepe. Labore possimus enim eos sed asperiores.', 0, '2', 'pendiente', 12, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(13, 'strategize cross-media metrics', 'Mrs. Rosemary Weissnat DVM', 'Future-proofed static initiative', 'Group', '2013-01-01 13:00:22', '1973-12-01 01:59:06', 'medio_tiempo', 'Europe/Minsk', 'Iste omnis ipsam illo et quibusdam debitis quisquam. Numquam aut ipsum esse qui. Nobis ducimus nihil voluptatem.', 0, '3', 'rechazado', 13, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(14, 'evolve seamless initiatives', 'Mr. Lilian Hauck III', 'Optional national access', 'and Sons', '2009-12-25 14:23:46', '2009-04-16 03:14:05', 'tiempo_completo', 'America/Argentina/Cordoba', 'Natus autem aut aliquid. Minima eos itaque est quibusdam excepturi. Vitae iusto qui fugiat ut incidunt quasi expedita. Ducimus et fuga non illo doloribus aut.', 0, '2', 'aceptado', 14, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(15, 'aggregate global schemas', 'Hans Kuhlman', 'Balanced bandwidth-monitored implementation', 'LLC', '1996-01-20 11:38:20', '1984-11-14 12:43:32', 'medio_tiempo', 'America/Noronha', 'Qui provident placeat ut. Fugiat tempora quod autem qui non libero. Excepturi enim quia dolor iusto earum ullam. Libero fugit quaerat dolores.', 0, '1', 'reprobado', 15, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(16, 'deploy vertical action-items', 'Krystina Kris', 'Cross-platform global matrices', 'and Sons', '2001-10-25 19:20:21', '1982-01-16 22:22:26', 'medio_tiempo', 'America/Curacao', 'Maxime consequatur similique libero fugiat. Exercitationem ab commodi et repellat. Ut nisi laboriosam consequatur ipsa excepturi provident maxime in. Voluptatem laudantium eos mollitia et labore.', 0, '1', 'rechazado', 16, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(17, 'transition robust metrics', 'Yasmin Ledner IV', 'Integrated hybrid moderator', 'PLC', '1974-11-18 02:45:38', '1977-08-16 05:47:35', 'tiempo_completo', 'Pacific/Pago_Pago', 'Nihil aut tenetur culpa maiores labore ea at. Quia error sed vel tempora eos dicta. Commodi deserunt earum expedita voluptatibus id et. Libero magnam qui illum qui ullam.', 0, '1', 'rechazado', 17, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(18, 'transition cutting-edge solutions', 'Kayley Pacocha', 'Synergized 24hour conglomeration', 'PLC', '1997-12-26 03:44:31', '1974-12-31 06:05:17', 'tiempo_completo', 'America/Guayaquil', 'Excepturi tenetur et nam libero. Nulla odio tempora laboriosam nam. Iusto officia soluta eaque fugiat. Et porro quia culpa et qui incidunt et.', 0, '3', 'rechazado', 18, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(19, 'aggregate intuitive convergence', 'Shayne Denesik', 'Assimilated value-added budgetarymanagement', 'Group', '2009-04-05 17:25:30', '1978-04-23 23:32:13', 'medio_tiempo', 'America/Maceio', 'Quo veniam doloremque consequatur. Perspiciatis voluptatem et dolores aperiam magnam in nam. Omnis molestiae voluptatem nobis sit nulla magnam. Qui quo esse et architecto placeat voluptates.', 0, '2', 'rechazado', 19, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(20, 'engage global e-commerce', 'Mr. Camila Schulist', 'Multi-layered scalable customerloyalty', 'Inc', '2004-06-02 06:53:21', '2008-05-21 16:45:29', 'tiempo_completo', 'America/Shiprock', 'Doloremque voluptate exercitationem perferendis sed et est vel. In quod ducimus nisi quo. Cupiditate incidunt est sint autem maiores tempora. Ut dolores aut ullam voluptatibus.', 0, '3', 'aceptado', 20, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(21, 'deliver dynamic e-markets', 'Granville Wintheiser', 'Diverse bifurcated instructionset', 'Inc', '1973-03-20 18:09:23', '1973-02-09 02:53:54', 'medio_tiempo', 'America/Tijuana', 'Voluptatem quam suscipit dignissimos consectetur. Tempore sapiente temporibus rem itaque quis aut. Quibusdam est ipsam maiores. Consequuntur molestias minima aut consequatur rerum perspiciatis.', 0, '2', 'rechazado', 21, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(22, 'orchestrate leading-edge systems', 'Carlee Breitenberg II', 'Exclusive foreground hierarchy', 'and Sons', '2013-12-23 22:20:16', '1980-12-09 16:58:36', 'medio_tiempo', 'Asia/Almaty', 'Ut explicabo quidem fugit voluptates officia recusandae. Facere quos quia et aperiam. Ad dolore reiciendis aut. Nesciunt autem ea praesentium saepe.', 0, '1', 'aceptado', 22, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(23, 'evolve wireless schemas', 'Jannie Mills DDS', 'Versatile logistical time-frame', 'Group', '2003-08-18 04:45:12', '1994-11-15 08:56:42', 'medio_tiempo', 'Europe/San_Marino', 'Enim blanditiis consequatur animi et cumque quisquam eos. Cumque aut veritatis et rerum provident quas nemo. Vel repellat dolores enim id officia ut earum. Recusandae quibusdam quia quam et quod.', 0, '3', 'aceptado', 23, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(24, 'target vertical e-services', 'Mrs. Anabelle Klein', 'Sharable high-level knowledgeuser', 'LLC', '1971-01-19 16:10:05', '2003-07-14 04:35:09', 'medio_tiempo', 'America/Kentucky/Louisville', 'Perspiciatis accusamus quisquam voluptatem. At mollitia itaque commodi. Aliquid autem voluptatem quia totam earum consequuntur.', 0, '2', 'aceptado', 24, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(25, 'implement magnetic interfaces', 'Keyon Collins', 'Operative demand-driven hardware', 'Ltd', '1979-02-13 15:55:28', '2007-05-04 07:55:54', 'medio_tiempo', 'Africa/Johannesburg', 'Quae unde ipsa non quidem odit. Rerum aut qui facilis possimus repellat. Ducimus dolor consequatur esse molestiae qui. Laboriosam rem dolor error neque eos neque.', 0, '1', 'pendiente', 25, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(26, 'disintermediate web-enabled synergies', 'Ms. Royal Turcotte III', 'Networked national circuit', 'Ltd', '2011-10-17 14:34:42', '1977-04-03 05:23:13', 'tiempo_completo', 'America/Kentucky/Monticello', 'Cupiditate consectetur aliquam illo. Exercitationem iusto nam incidunt porro ex. Recusandae nesciunt excepturi vitae repudiandae. Cupiditate et quasi nobis officiis ipsa facilis voluptatem.', 0, '1', 'aprobado', 26, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(27, 'cultivate revolutionary content', 'Carmela D\'Amore', 'Enterprise-wide nextgeneration paradigm', 'and Sons', '1990-11-25 18:59:02', '1973-11-27 15:00:26', 'tiempo_completo', 'America/Tegucigalpa', 'Tempora numquam quia harum ea in doloribus dignissimos. Quia est nihil autem assumenda velit nihil. In dolor voluptas voluptatem cupiditate nemo cum.', 0, '1', 'aceptado', 27, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(28, 'incentivize compelling methodologies', 'Genesis Parisian', 'Managed client-server application', 'Group', '1982-04-07 01:59:02', '1975-07-07 10:00:36', 'tiempo_completo', 'Asia/Baghdad', 'Facere aut ipsam inventore est vitae non deleniti. Non rerum architecto pariatur fugiat voluptatem. Ducimus sint in voluptatum impedit eos.', 0, '1', 'pendiente', 28, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(29, 'e-enable rich e-services', 'Jeanne Padberg', 'Mandatory transitional capacity', 'Group', '1983-03-06 22:57:39', '1991-02-24 17:17:09', 'medio_tiempo', 'Asia/Samarkand', 'Amet sequi aut sunt laboriosam. Itaque ut aut laudantium et dolores commodi. Vero laudantium voluptas quo. Qui eum amet fugiat in qui.', 0, '3', 'rechazado', 29, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(30, 'embrace open-source solutions', 'Jakob Stroman', 'Distributed value-added localareanetwork', 'Group', '1995-12-13 18:11:15', '1988-04-29 00:29:02', 'tiempo_completo', 'Pacific/Marquesas', 'Tempore cum ad deserunt in voluptas. Odit similique hic aut repellendus quae.', 0, '2', 'aceptado', 30, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(31, 'productize turn-key markets', 'Rosa Larkin DDS', 'Universal methodical matrix', 'Ltd', '1978-08-20 21:23:23', '1970-02-16 13:55:32', 'tiempo_completo', 'Australia/Melbourne', 'Voluptatum delectus eos quos id est. Enim sint id praesentium voluptate alias. Aliquam ut dolore modi. Iusto sit exercitationem inventore iusto perferendis eveniet ut.', 0, '2', 'rechazado', 31, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(32, 'matrix strategic paradigms', 'Dr. Monroe Lang', 'Function-based even-keeled portal', 'and Sons', '1974-05-23 04:25:50', '1987-09-29 02:02:06', 'medio_tiempo', 'America/Nipigon', 'Eos eum saepe voluptate omnis. Corrupti odio alias est atque ut facere. Quos nihil est labore vitae sit nesciunt sunt.', 0, '3', 'pendiente', 32, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(33, 'evolve mission-critical web-readiness', 'Leonel Haley', 'Polarised even-keeled interface', 'LLC', '1975-03-31 19:46:39', '1973-03-08 10:17:30', 'tiempo_completo', 'America/Chihuahua', 'Voluptate rem quos temporibus culpa ut iste. Et iste possimus facere sunt ullam rerum. Modi voluptas qui dignissimos maiores nostrum doloremque non.', 0, '3', 'rechazado', 33, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(34, 'monetize cutting-edge synergies', 'Monica Effertz', 'Synchronised transitional paradigm', 'Ltd', '1995-09-19 07:43:44', '1971-04-05 19:19:16', 'tiempo_completo', 'America/Asuncion', 'Repellendus eum laborum rerum quisquam sunt neque molestiae earum. Molestiae laudantium aut et. Laudantium excepturi deleniti veniam deserunt.', 0, '1', 'aprobado', 34, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(35, 'visualize magnetic e-tailers', 'Shany Wintheiser', 'Multi-tiered non-volatile complexity', 'PLC', '2008-12-24 14:56:07', '1970-10-09 06:51:54', 'tiempo_completo', 'Indian/Mauritius', 'Aut quisquam consequatur voluptate est aperiam consequatur in quis. Magni enim asperiores voluptatum est asperiores doloribus dolorum. Necessitatibus quis illo consequatur aut.', 0, '3', 'aprobado', 35, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(36, 'reintermediate leading-edge initiatives', 'Casey Stamm IV', 'Self-enabling tangible conglomeration', 'Group', '1981-11-28 04:59:37', '1978-08-08 18:00:33', 'medio_tiempo', 'Asia/Kuwait', 'Corporis provident iure doloremque aut et qui quod. Fugiat rerum aspernatur maxime repudiandae similique. Dolorum sunt consequatur dolore.', 0, '3', 'reprobado', 36, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(37, 'Programacion Web ', 'Luis Padrón', 'Diseñador', 'Diseño y Programación', '2014-07-15', '2014-07-30', 'medio_tiempo', '8:00 am a 5:00pm', 'Desarrollo web', 0, '3', 'aceptado', 37, '2014-07-15 08:42:59', '2014-07-16 00:34:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.procesos: ~0 rows (aproximadamente)
DELETE FROM `procesos`;
/*!40000 ALTER TABLE `procesos` DISABLE KEYS */;
INSERT INTO `procesos` (`id`, `aprobacion`, `entrega_carta`, `entrega_borrador`, `retiro_borrador`, `entrega_final`, `pasantia_id`, `created_at`, `updated_at`) VALUES
	(2, '2014-07-16 00:34:53', '2014-07-16 01:05:11', '2014-07-16 01:05:20', '2014-07-16 01:05:30', '2014-07-16 01:11:07', 37, '2014-07-16 00:34:53', '2014-07-16 01:11:07'),
	(30, '2014-07-15 00:40:58', '2014-07-16 01:27:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-07-16 01:27:35', 2, '2014-07-16 01:26:22', '2014-07-16 01:27:35'),
	(31, '2014-07-15 00:41:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(32, '2014-07-15 00:41:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(33, '2014-07-15 00:41:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(34, '2014-07-15 00:41:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(35, '2014-07-15 00:41:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(36, '2014-07-15 00:41:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(37, '2014-07-15 00:41:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(38, '2014-07-15 00:41:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 22, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(39, '2014-07-15 00:41:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(40, '2014-07-15 00:41:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 24, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(41, '2014-07-15 00:41:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 27, '2014-07-16 01:26:22', '2014-07-16 01:26:22'),
	(42, '2014-07-15 00:41:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2014-07-16 01:26:22', '2014-07-16 01:26:22');
/*!40000 ALTER TABLE `procesos` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.semestre
CREATE TABLE IF NOT EXISTS `semestre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `semestre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.semestre: ~2 rows (aproximadamente)
DELETE FROM `semestre`;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` (`id`, `semestre`, `descripcion`, `activo`, `created_at`, `updated_at`) VALUES
	(1, 'I-2013', 'Primero 2014', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'II-2013', 'Segundo 2013', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'U-2014', 'Unico 2014', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;


-- Volcando estructura para tabla sipasant.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('estudiante','secretaria','coordinador') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla sipasant.usuarios: ~101 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `correo`, `tipo`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Camilla', 'Willms', 'ithompson', '$2y$10$7xyQsLBYSWEx5h/rRfZoBuUd.yW6EKkx1.5frzMUuxPxbJVQRbDRW', 'dubuque.neil@stokes.net', 'coordinador', NULL, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(2, 'Newell', 'Daugherty', 'feest.scot', '$2y$10$sZbr02MhXiph0qNhuR.Bc.KudoEKFNY..GR0yjKEdw5gTqC7OlB4C', 'tschaden@yahoo.com', 'estudiante', NULL, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(3, 'Annetta', 'Will', 'wgerhold', '$2y$10$AOIa8wD..fj2iq/HUV929emsXvaIxRFQCbBlscj1miUR.7h/gyomq', 'lzulauf@yahoo.com', 'estudiante', NULL, '2014-07-15 00:40:58', '2014-07-15 00:40:58'),
	(4, 'Isadore', 'Legros', 'alfreda.quigley', '$2y$10$WLEj34TifdMNiiZ4N6lzaex07bZwPHYuofw5CkPVTGLJDnTI00552', 'qnikolaus@hotmail.com', 'coordinador', NULL, '2014-07-15 00:40:59', '2014-07-15 00:40:59'),
	(5, 'Merlin', 'Anderson', 'sfeest', '$2y$10$mpc8QxbpSadmc4Y4UnjsJef1QfJtfSkTF/jvWq0se59zjVacm4iYK', 'gerhold.janae@gmail.com', 'secretaria', NULL, '2014-07-15 00:40:59', '2014-07-15 00:40:59'),
	(6, 'Ward', 'Bruen', 'ekuhic', '$2y$10$5LeUTjfnJxhmvEwzdI3F2eR2JHD8txv6zYcq4SNR04lRqeWv3YoQC', 'dawn.sauer@emmerichreichel.net', 'secretaria', NULL, '2014-07-15 00:40:59', '2014-07-15 00:40:59'),
	(7, 'Pasquale', 'Mills', 'drunolfsson', '$2y$10$nIdg6i4aZ92ZCGU1cdOIeOAsBQgxXzD2uVBguJ5QiEP.tBK19bhSC', 'rodriguez.virgie@keeling.com', 'secretaria', NULL, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(8, 'Clifford', 'Reinger', 'gerald.reilly', '$2y$10$Z6ac.3nl04a9gQTZOV7r2O6m4TWoIGQ1shWHmh2amH22.1BjeDIDq', 'sallie.brakus@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(9, 'Zella', 'Waelchi', 'elwyn91', '$2y$10$L.cktG5XuIhfYgw0NuP.S.tqYEkyS8FNvhGKDYWD5W//3JKDuOGb2', 'agnes97@spencergreenfelder.org', 'coordinador', NULL, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(10, 'Lauren', 'Daugherty', 'cade00', '$2y$10$6FAyuumJn7/XL.qEsooQN.c2vIbTTEkbharwdc3BzY8nVa2/L.HB6', 'beatty.trevor@dickinsongusikowski.com', 'coordinador', NULL, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(11, 'Alfredo', 'Mitchell', 'imorissette', '$2y$10$qn4a10xpB6n7Z2r2i0yPQe7bHL/sVvmDtur1mQ3AhC3jaaGAtGZK6', 'cletus.koss@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:00', '2014-07-15 00:41:00'),
	(12, 'Kirsten', 'Volkman', 'ukunze', '$2y$10$AHXe37vOuT8VK4QMvh16P.zD2zSq8cIUg.XKgOXpkXtARAoZuHpda', 'wweber@streich.biz', 'coordinador', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(13, 'Jackson', 'Walsh', 'lina.herzog', '$2y$10$nHuhggBwBgNc8yMa.70GEO6.ytdNt2e.wo6ZCkyrMZwh7ZO/1zAt6', 'lonnie.barrows@gaylord.com', 'secretaria', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(14, 'Pete', 'Nader', 'runolfsson.kattie', '$2y$10$iPUMgCf9iTdBf8BwAvfQmeHNGJYw3Hh.zINyR2G.Mdkg7bhZB8lje', 'titus46@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(15, 'Della', 'Skiles', 'mayer.jake', '$2y$10$VKMpub5KKlTEGkWbol5V7eFkorfQwliB.IfNqdYshslnLeVq7xrdm', 'emmanuelle.watsica@hotmail.com', 'coordinador', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(16, 'Dana', 'Jacobs', 'botsford.marie', '$2y$10$PPUUsQvyZhC19ScIYtrpZeqEZKm7mZive2QI6fQmt.hMU62W2BT5i', 'schamberger.maximilian@gmail.com', 'secretaria', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(17, 'Sherwood', 'Abbott', 'qabbott', '$2y$10$C9ftbpOyp2N/Sj6EYHaWbOy/6Xhl039kLbudAedmrYFtCjJPCU8Ie', 'maudie.halvorson@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(18, 'Colten', 'Bahringer', 'lolita.schaden', '$2y$10$RmWRX019RLvUmbPgmxoTu.DBSGsGNI.noDq5TWsTbquxE.ItxvAVO', 'brad64@hodkiewicz.com', 'coordinador', NULL, '2014-07-15 00:41:01', '2014-07-15 00:41:01'),
	(19, 'Lucy', 'Bernhard', 'eugenia60', '$2y$10$suHE2XHjAEz19JZyabv4Ne0v5HW1H126VcUQgEQiBqTW6sFZX1QQO', 'kevon87@hotmail.com', 'coordinador', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(20, 'Wellington', 'D\'Amore', 'ewilderman', '$2y$10$2OwOMP2zAoS/.7t4tITTiOZVUbL/E5dwBthY/5R08qaQxgUL3osmG', 'metz.beryl@johns.com', 'secretaria', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(21, 'Elvera', 'Wolff', 'icorwin', '$2y$10$8dpYEwxeP4Q/37I7cmCUIuMpfLwmZpUfpq.8bO2QX1Lmscn41Do4m', 'morissette.pedro@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(22, 'Kyler', 'Nicolas', 'econn', '$2y$10$7SJEtc.fDR9ryAzhhs1VAOILe.e.Gxw6uDn2o/1b8x2iFGwsc1OoS', 'kirk.kulas@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(23, 'Timmothy', 'Conroy', 'to\'hara', '$2y$10$FDFsFWsDvLZ7W1s.mdtPOueZi3pMH7CQYy.JEKfa.yOyou6zls09K', 'isabell.johns@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(24, 'Murl', 'Schaefer', 'hkling', '$2y$10$vP.pGn1NkYSlZZw7DZT4kutcrVWZ.atjSYUCSNiAZNfqsh8/z0Bse', 'edmund.wunsch@olson.com', 'secretaria', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(25, 'Layla', 'Hane', 'elmore.towne', '$2y$10$JN6IjnjMJubDAlko2Tcvb.A9kV.MW.jpHW5qzxyWkkojqn5BXW9E2', 'thalia43@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:02', '2014-07-15 00:41:02'),
	(26, 'Jailyn', 'Morissette', 'fay.hilario', '$2y$10$isy7HvkZMESV.G9ydlcU1ufbDWWdgdtUvRdns.orxov.bbYF6xIKu', 'zbergstrom@welchschmitt.com', 'secretaria', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(27, 'Lessie', 'Osinski', 'qrau', '$2y$10$VncVGMRXerGD2QhSZf4OYuCbKT5h2zWKVXymiMb4f2Iv9Bp46YWZW', 'burley97@roberts.com', 'estudiante', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(28, 'Raphaelle', 'Cummings', 'kayla.mayer', '$2y$10$Vp6w9.e8FMmMRNOG5shpPeggBrVcCPd..gfnyNdYLVzw4oAP9IZ5e', 'enitzsche@yahoo.com', 'secretaria', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(29, 'Jordan', 'Tillman', 'amelia.crooks', '$2y$10$GO3/dmgtzDDd9Qbj27bBcuZqfCWmMzKw9ebtAmO/pKeJ728kpQKXO', 'braun.connie@quigleyrippin.com', 'coordinador', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(30, 'Neha', 'Crooks', 'morgan.hauck', '$2y$10$t3HxrtIrHcAnzwYLpCsBYu7nRKOo6.eerdFa7O75incxbqhYCiCs2', 'crist.eve@beatty.com', 'coordinador', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(31, 'Leif', 'Ryan', 'tvandervort', '$2y$10$ToB1u37fqjOaBBMr4lTOU.0EHXD8umhWBJyY8CvWo18ri9x10hzGO', 'ilegros@vandervort.biz', 'estudiante', NULL, '2014-07-15 00:41:03', '2014-07-15 00:41:03'),
	(32, 'Tyra', 'Feeney', 'carey.reilly', '$2y$10$a6n6vX4KlRlP7c4Pc1cY9uwuI78o.yhPpG3P5Yctce2833BcBGI5S', 'idell10@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(33, 'Antonietta', 'Daniel', 'astroman', '$2y$10$XDp5CYQXxlnD2gMWmD/bvOWMhAeoXZXTl9wcRtew9rotJB72N4UN6', 'jjenkins@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(34, 'Janae', 'Kreiger', 'rodrigo13', '$2y$10$Ejm6YeSgt4CQjGzGAJRyY.FQSR9u6bFgTr0OW/yhiUNi1s4errOAa', 'rodger48@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(35, 'Kiera', 'Schiller', 'adeline.glover', '$2y$10$veIOWbbdz1Ad9ShUw3zh.uuCz.pdcMkbeikwKJgEdn9mCfVU.A/92', 'vbartell@sipespagac.info', 'estudiante', NULL, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(36, 'Lane', 'Walker', 'bkozey', '$2y$10$.ZvPnuXjU8BV3YqzbQJta.onvC/shYoRcDGNzJG0OWZh8r92Vr4W.', 'sgerhold@carter.net', 'coordinador', NULL, '2014-07-15 00:41:04', '2014-07-15 00:41:04'),
	(37, 'Cydney', 'Yundt', 'fritz70', '$2y$10$88QIlzKzOJQSLvJXWeCskOc7qdMrR5oLBZvlfFdelplUUQ4s6CGga', 'cupton@yahoo.com', 'estudiante', NULL, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(38, 'Dax', 'Heidenreich', 'akiehn', '$2y$10$niVt638ru1aVm7a7ChifWOLwVugrCRRdt08OX8XUnqMVvzmjIhtAK', 'bbergnaum@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(39, 'Jamison', 'Muller', 'gerardo10', '$2y$10$73T0wDk4r4RzRBF3.c2X4O6.AHzp77vJgWieH7sCiiPEhVp5m3FMi', 'hegmann.omer@blanda.net', 'estudiante', NULL, '2014-07-15 00:41:05', '2014-07-15 00:41:05'),
	(40, 'Maudie', 'Altenwerth', 'rosella.gaylord', '$2y$10$mkyfhzt4c3syPlqRhZvNXeuQlimLhN33qHTr17onf.buAvVyQQmf.', 'jaufderhar@bechtelarpadberg.net', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(41, 'Kennedy', 'Luettgen', 'francisco.hamill', '$2y$10$w5rJ8k1JNukmgMem6QddMeV.ntJ6niurH0EGttTjZsUyF/OFistuW', 'celia.runte@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(42, 'Philip', 'Schowalter', 'savanah.stroman', '$2y$10$5fRF0EU5ESPyyAYU88r6ce.TvPyGwUNOmjX48CFeOoY11e3DKFFLO', 'bfranecki@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(43, 'London', 'Jast', 'leonor.kilback', '$2y$10$DwuIEkktBJs56u.i1gxhFOy71ofxo7LhZ6fBMId9/cQoQ.40W3/ia', 'keeling.aidan@yahoo.com', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(44, 'Sylvan', 'Nikolaus', 'estell81', '$2y$10$SED/dOp8PG7eXYQWAVyTb.7htE2PvCG5qjJQLjG0zuM1uRiR0S8gW', 'sdurgan@reichel.info', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(45, 'Brionna', 'Lind', 'althea29', '$2y$10$6.SmZkAYjhB5FZwY5mz2ceywKgesPnLJ2mNBy9g7sdhn2zBhqEEoe', 'elyse.hahn@schmittrunolfsson.com', 'coordinador', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(46, 'Maryse', 'Daniel', 'reinger.vena', '$2y$10$Zlrmd36ZMMPWcoGwdIYnBumQivOn9Si0AQg6woJFqM60lJAskjR.e', 'reinger.claudine@will.net', 'estudiante', NULL, '2014-07-15 00:41:06', '2014-07-15 00:41:06'),
	(47, 'Major', 'Ernser', 'jesus.kunde', '$2y$10$Kp/evE8KvlhMebl.POdhRuJCUfVznNROmYnSD3ZvJzY9fHVm1/QK6', 'hane.raina@millerdaugherty.com', 'secretaria', NULL, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(48, 'Althea', 'Murphy', 'xdibbert', '$2y$10$WilWixalKkmYtD4PYBs9puOPPQUjYVrUGj3k5dwYD8lIeQO6W8oFW', 'quigley.lawson@gmail.com', 'secretaria', NULL, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(49, 'Richie', 'Mills', 'skiehn', '$2y$10$ezZ5iYmvdyWryWJzz05cROv4tgdMVioadU9eCxb4bJ980xUoxgpHy', 'mfunk@yahoo.com', 'estudiante', NULL, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(50, 'Twila', 'Littel', 'bernhard.kaleigh', '$2y$10$OygTIJuk9iNGyqORtJnBw.Ba8nfVtTFVg3CBgX2XiwGV5mzluL3pS', 'goyette.rylan@cormiermckenzie.com', 'estudiante', NULL, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(51, 'Hillary', 'Morar', 'nils96', '$2y$10$hTmZ5QnA3cHPk.aFTEvSTekUo4vCEseVsucZkxWtYXHtIv5qvH/Mm', 'haley.trudie@yahoo.com', 'estudiante', NULL, '2014-07-15 00:41:07', '2014-07-15 00:41:07'),
	(52, 'Cordell', 'Reinger', 'jordy.hilll', '$2y$10$PPKlwDOAKUOLj.y5xZUjee3N/mg/wCHrqfDDewRWwWXJOlDd90ZWi', 'ora89@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(53, 'Ashleigh', 'West', 'judd44', '$2y$10$6/4RrrzGNJfXH1sW1m3ZZOEHZp9KYbSIeHs9aWHc12Fi8Yzc5c2M2', 'bergnaum.alba@boehm.com', 'coordinador', NULL, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(54, 'Logan', 'Hickle', 'mills.augusta', '$2y$10$E5F6E2fre8tgEwa48q/zOuNhnAOFkZPXMh8/XdLU0/BZHwHA.mzpC', 'kamille06@auer.net', 'estudiante', NULL, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(55, 'Chanel', 'Runolfsdottir', 'guido.bayer', '$2y$10$vV8RfViL1tuDgaUOT0BTIuAlKEyHAOLH4w8qRzlwV/trz5I3Xgjsy', 'funk.macie@hotmail.com', 'coordinador', NULL, '2014-07-15 00:41:08', '2014-07-15 00:41:08'),
	(56, 'Reilly', 'Effertz', 'ihansen', '$2y$10$KfS.3h0kCLYOkFpKfkaJUutrJVLO/LwIczz/zHR08JuTjB3sUddHG', 'wilmer61@metz.biz', 'secretaria', NULL, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(57, 'Gilda', 'Fadel', 'streich.elena', '$2y$10$N21L6XCUHyE6/50XLC46puF/3IFv7bsgk0SVeEF1q77LSRVe3vlgi', 'batz.narciso@heidenreich.biz', 'estudiante', NULL, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(58, 'Giovanna', 'Bogisich', 'anissa.welch', '$2y$10$kFzrd9ohfliGNAtX0EZkueZ5H57t9.JC0nRsKWKf9S5S1CpmFPPcm', 'alvena13@hahn.com', 'estudiante', NULL, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(59, 'Sigmund', 'Johns', 'hettinger.steve', '$2y$10$sSjb3e44TIBPz33UwBK3numX6Zd8vqFjgtJrMz6vAiHX.BN..wmz2', 'nkutch@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:09', '2014-07-15 00:41:09'),
	(60, 'Eduardo', 'Hand', 'zella.strosin', '$2y$10$l24zmZNmIHj/.Tx6I43gCO2rCMlVraKZMx3rAvuxHqFVw6/yTgtZ.', 'catharine.wunsch@wehnerbuckridge.net', 'secretaria', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(61, 'Gunner', 'Bosco', 'norma.leffler', '$2y$10$gNA/.bNqer6H.pM1MVjwH.qKW2urAqArBd6R35sQ2ENYUwlucOZWm', 'lance.o\'connell@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(62, 'Kaleb', 'Gutkowski', 'norberto.murazik', '$2y$10$NqyH.fA5T0ztgvjy174LwOLY9.QfX5p7JGEfo4fP3xUxiRrY4GwFK', 'lpaucek@barrows.com', 'estudiante', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(63, 'Nikki', 'Keeling', 'mconsidine', '$2y$10$GJ2t0jHIgjHb0sTV1vUjwOS76E8CqAssktl1fzWAx5u5zV2htySlm', 'owen18@king.com', 'coordinador', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(64, 'Rosario', 'Macejkovic', 'stracke.adaline', '$2y$10$V2LlK1gVm7W.A0jRbLEhTupEy8iVDRbsZZrnna4dkZF9165oWe.tG', 'elvera.okuneva@okeefepfeffer.info', 'coordinador', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(65, 'Carol', 'Watsica', 'buckridge.paris', '$2y$10$Rjle22aGasdBBUurV35Lk.nBHjkImkdUXgCaEuqTpOxUN1hZ6Fkue', 'cassie.hodkiewicz@kulaslarson.com', 'estudiante', NULL, '2014-07-15 00:41:10', '2014-07-15 00:41:10'),
	(66, 'Brain', 'Lakin', 'sroberts', '$2y$10$u2ulv5YB0K7hSbE1tv0WR.Vv4mHw4HOdG10AaGhDlgJEN1NkOiKeK', 'volkman.elyse@yahoo.com', 'estudiante', NULL, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(67, 'Ellen', 'Heidenreich', 'kessler.helena', '$2y$10$ef1iFU.EcmbPOwX5y4KNp.xoha3QJlqUnc0G6/XOHnuD27srW4Rja', 'fay.jalen@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(68, 'Skyla', 'Osinski', 'mervin96', '$2y$10$zNQWgCPY7ZbJkR5KU5J1AeTLG/0FCprQvKOWeTvpN.M4NbivG0c..', 'hcasper@rau.com', 'estudiante', NULL, '2014-07-15 00:41:11', '2014-07-15 00:41:11'),
	(69, 'Cristian', 'O\'Conner', 'veum.chelsie', '$2y$10$vnN7Yr0sMCShMkpS6.l4Y.2HoulwCKqvG9Gg1.PnniUdGKNucyg7q', 'ifriesen@gmail.com', 'coordinador', NULL, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(70, 'Billie', 'Dickens', 'eleonore05', '$2y$10$jtdz/k796xskry3xtTMOtufNFuAVL/aSmS8RiaOsX9IqA53gIszMi', 'lakin.gloria@starkpollich.com', 'estudiante', NULL, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(71, 'Janet', 'Volkman', 'cstokes', '$2y$10$9F1j0HIHt4MtvnqCXm7oOefZL3MrwyTsgXtNaAEgqKKfbZYb/4lSu', 'ktorphy@hilll.com', 'coordinador', NULL, '2014-07-15 00:41:12', '2014-07-15 00:41:12'),
	(72, 'Addie', 'Greenholt', 'maurice45', '$2y$10$qV42vI9see6z.Z0KKFKwse19ixF1HwjOpFm6xheuR9cqPa5pdh4gK', 'allie93@schambergernolan.com', 'coordinador', NULL, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(73, 'Kaelyn', 'Koss', 'broderick.steuber', '$2y$10$bCKxD5bpJz9NC23mdd20T.WxO6uQArtJCn3VznTwKK0zI6R2wxya6', 'uoberbrunner@miller.com', 'secretaria', NULL, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(74, 'Francisca', 'Rau', 'carroll.ford', '$2y$10$7Iqd9POMNE4qOJFWijl6.uxTQ5Qkx2nTk7qRCyS49Mv9YO1JFND7C', 'aferry@yahoo.com', 'estudiante', NULL, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(75, 'Graham', 'Jaskolski', 'kiley.romaguera', '$2y$10$WTQ/EDIvkxJLunekIsJLSeyDIN5BHG33TfuZbD0Yu7KNKos6B7sGi', 'ruecker.elwyn@mosciski.com', 'estudiante', NULL, '2014-07-15 00:41:13', '2014-07-15 00:41:13'),
	(76, 'Dorthy', 'Paucek', 'eabbott', '$2y$10$XDbn1hNijx418B9IW3eNuOfEKC7ll.zC0YZTQqsWUc.iGBM0nkXqe', 'tking@mertzwhite.net', 'secretaria', NULL, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(77, 'Kelley', 'Beahan', 'frederick32', '$2y$10$mQ7MmBu877Opek3f.uysn.y0JMOHAUlK0UhuVRmiudK5jF2tBqwzu', 'tiana.frami@littel.org', 'estudiante', NULL, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(78, 'Trudie', 'Tremblay', 'margarete.fahey', '$2y$10$nruhs7BaSwPm2FyG1ohTMOuQpTIRxABEf7sV.lzp6B8ZGG5Oz5Kem', 'ernestine.cruickshank@sengerlynch.com', 'secretaria', NULL, '2014-07-15 00:41:14', '2014-07-15 00:41:14'),
	(79, 'Kirk', 'Hessel', 'bstracke', '$2y$10$QjlMJFerdGULjlYtic.qj.LM6cerjXhU6hD5YT34flxJYMtGbuc1u', 'qd\'amore@renner.com', 'coordinador', NULL, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(80, 'Kristoffer', 'Konopelski', 'wilbert26', '$2y$10$10y1/KMsISas75pEwtOZKuZksSoo83/HfPp.aLYkbeS5bwfzhTDpK', 'bailey.mafalda@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(81, 'Aryanna', 'Crona', 'xtoy', '$2y$10$RxSEZQCnsA11IwmWsqC6zefGXrs7xaoaUsU0sJxGRcHH3IOTgSNJq', 'kolson@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:15', '2014-07-15 00:41:15'),
	(82, 'Milton', 'Leffler', 'retta07', '$2y$10$ctQhY1oZFLSJqVHIs60vreMEHIGaL.kMGniZddvtvsaRHiIEnDp1m', 'rwaters@murray.biz', 'secretaria', NULL, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(83, 'Erin', 'Turner', 'titus38', '$2y$10$lxS2y8AhavZRmtvNZ1y1AuTGOO8ZKmI6hizUaPNPtyC7iyxo.tquC', 'gutmann.aletha@dibbert.com', 'coordinador', NULL, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(84, 'Joseph', 'Turcotte', 'justine58', '$2y$10$JvgnQhZ7pbo4l76fGnFEJ.ZY/jUNuYRLYpHAEb33RaSNlnznQO5S.', 'aaron.welch@cremintorphy.biz', 'coordinador', NULL, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(85, 'Neoma', 'Mraz', 'skrajcik', '$2y$10$./g7zYX8l6gmilwVQg65jO/k7LkXFlqPeeFDB57mmeNVCFvzhuOdu', 'reymundo97@bernhard.com', 'estudiante', NULL, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(86, 'Mariela', 'Stark', 'obernhard', '$2y$10$uw.C6J9mLLLn4aQ3qRUY/esJdLP/TG3CDxTeBMDS7cy1BT7GgB0hS', 'remington67@bartolettikilback.info', 'coordinador', NULL, '2014-07-15 00:41:16', '2014-07-15 00:41:16'),
	(87, 'Miguel', 'Kassulke', 'robel.leta', '$2y$10$NoRAV6uaQsYXtgYR/HSZvums/7WDCCCOxPGGI9cF38vmayeqQfcAW', 'denesik.lola@kemmerboyer.biz', 'estudiante', NULL, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(88, 'Jeromy', 'Jenkins', 'granville91', '$2y$10$Xy.WWqQvpXh4QQ4olynzy.vRCmqCEDhyu1.rKJ98ZL7fchKN2bSf.', 'glenna.vandervort@yahoo.com', 'coordinador', NULL, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(89, 'Enrico', 'Rowe', 'leonard89', '$2y$10$mwFUI/8I.m6iy8C18bcxxO6F9dJKesiOa1WDddhsK.3Ci1Q98lvpu', 'tillman94@gmail.com', 'secretaria', NULL, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(90, 'Betsy', 'Fadel', 'fschimmel', '$2y$10$jKwreN56yadmyt5EmcwP9e.qBQfM8r.gAV9RfWbT6CffQCdTwrbF.', 'edison.kassulke@wehner.net', 'coordinador', NULL, '2014-07-15 00:41:17', '2014-07-15 00:41:17'),
	(91, 'Salma', 'Green', 'raynor.loren', '$2y$10$qRXJeqL6yYWgD8O1WMaCieC/C7ghXYrSByuLek/0I4.bqxjkqj7tm', 'sterry@hotmail.com', 'secretaria', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(92, 'Madison', 'Maggio', 'huel.jayce', '$2y$10$Zy7Fb3Y0Pw9DCH2ENecLr.sTA4l/RvB17I9aP2zHdkpTUg46wDoHm', 'botsford.hope@paucekcronin.com', 'coordinador', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(93, 'Alysa', 'Sipes', 'twillms', '$2y$10$zEyBaxrWQR7LhPBISWfIb.G0pWo8ZoNVaX1I41k8YW4k/qGy4G906', 'sophia34@ritchie.com', 'coordinador', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(94, 'Rebeka', 'Kilback', 'ggottlieb', '$2y$10$gMNsZw.y7ULavuvPBtEHOO70epyZ3iRlnZFniMZuHUhKWMvOaErc2', 'jada.carroll@gmail.com', 'estudiante', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(95, 'Titus', 'Bayer', 'dach.brenden', '$2y$10$Y8Gkix3zkVQmPejFQVMlmexlOyMUvUkm4s9ZnfuwGeFEDg8ApmgtO', 'mozelle76@parisianrippin.net', 'coordinador', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(96, 'Maci', 'Luettgen', 'initzsche', '$2y$10$zQehKzi5E1Eoe40j2L.tGugDqzM.IB.kGRSlNRDyYyJxNuizT8jYa', 'schroeder.jarod@johnson.net', 'secretaria', NULL, '2014-07-15 00:41:18', '2014-07-15 00:41:18'),
	(97, 'Earlene', 'Hyatt', 'myrl.herman', '$2y$10$6RYkVmTGgai8aBM/u6btOekkyaEd1.F0icGfEJoyyUy6wX9de4dKa', 'coy.romaguera@hotmail.com', 'estudiante', NULL, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(98, 'Madie', 'Murazik', 'isabelle.kuhn', '$2y$10$QDNFYdiJi0lSYqq5qtGo0.SuMoCmDlY9YO0aHai5dKaxomcLSy4Jm', 'ogottlieb@welchherzog.com', 'secretaria', NULL, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(99, 'Marcus', 'Torp', 'ibruen', '$2y$10$k1yt92oR8m1I4MgTQqFxP.X9gacviKkHcm7Gih/IrMlb74Ego/Lba', 'rmccullough@gmail.com', 'secretaria', NULL, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(100, 'Sigmund', 'Baumbach', 'johnny56', '$2y$10$NdoezSr9JjSrrzmlhqsFa.i4vA3BpCPMMsmOLRPbG/sKMvUEWRMAq', 'cschultz@wolf.com', 'coordinador', NULL, '2014-07-15 00:41:19', '2014-07-15 00:41:19'),
	(101, 'Olinto', 'Rodriguez', 'olinto', '$2y$10$YTOpkhXrUbRGxplJULqQVeeVrbyPPGidhdVWzaXYWMb/3g52hrB4K', 'olinto@olinto.com', 'coordinador', NULL, '2014-07-15 00:42:25', '2014-07-15 00:42:25'),
	(102, 'Eli José ', 'Carrasquero', 'ielijose', '$2y$10$MTGblpB2/Qq5l2nB1OgMQObe0tnfq091GOhHTkqz0LDVXnLm80Erm', 'ielijose@gmail.com', 'estudiante', NULL, '2014-07-15 08:35:12', '2014-07-15 08:35:12'),
	(103, 'Monica', 'secre', 'monica', '$2y$10$Hb.gxlXmN9xORWUke4gGzuFqVDU2lmL7FRTYAo/LvZR1hBBs.Mau.', 'monica@monica.com', 'secretaria', NULL, '2014-07-16 00:17:21', '2014-07-16 00:17:21');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

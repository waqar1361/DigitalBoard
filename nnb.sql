/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DELETE FROM `departments`;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `name`, `type`) VALUES
	(1, 'HED', 'Government');
INSERT INTO `departments` (`id`, `name`, `type`) VALUES
	(2, 'SHC & ME', 'government');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `extension` varchar(50) NOT NULL DEFAULT 'pdf',
  `department_id` bigint(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tags` text NOT NULL,
  `issued_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

DELETE FROM `documents`;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(1, 'Notification regarding Generalized Specifications of Extracorporeal Shokwave Lithotripter', '0505526001530640659', 'pdf', 2, 'notification', ' Notification regarding Generalized Specifications of Extracorporeal Shokwave Lithotripter, notifications, SHC & ME, 2018-02-19, 2018-February-19', '2018-02-19', '2018-07-03 17:57:39', '2018-10-25 21:43:49');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(2, 'Notification regarding the generalized specifications of pathology equipment', '0672977001530766884', 'pdf', 2, 'notification', ' , Notification regarding the generalized specifications of pathology equipment, notifications, SHC & ME, 2018-February-19, 2018-02-19', '2018-02-19', '2018-07-05 05:01:24', '2018-10-25 21:43:56');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(3, 'Grant of Ex-Pakistan leave on full pay', '0792858001530767423', 'pdf', 1, 'notice', ' , Grant of Ex-Pakistan leave on full pay, notices, HED, 2018-05-29, 2018-May-29', '2018-05-29', '2018-07-05 05:10:23', '2018-10-25 21:44:02');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(4, 'Mandatory training og teaches of higher education department from BS-17 to BS-18', '0804996001530767779', 'pdf', 1, 'notice', ' , Mandatory training og teaches of higher education department from BS-17 to BS-18, notices, HED, 2018-06-14,2018-June-14', '2018-06-14', '2018-07-05 05:16:19', '2018-10-25 21:44:08');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `faqs`;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` (`id`, `name`, `email`, `question`, `answer`, `views`, `created_at`, `updated_at`) VALUES
	(1, 'dev', 'dev@example.com', 'How can I download a file in pdf?', 'Well, simply select your notice/notification and click on download link given.', 0, '2018-10-31 11:45:59', '2018-11-01 09:12:34');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dev', 'dev@example.com', '$2y$10$A/JZUkPAtf5OLvO8uStoF.NxYX.yzzAtzNlwrnjechhZ7uQzylsGi', 'gn7ipiOcj4FRmo4G88LuM6N7sESvVc1syBCKnb6GsY9KiVprRgmUqgdLCP63', '2018-05-21 13:52:37', '2018-05-21 13:55:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

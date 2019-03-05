/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `full_name` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

DELETE FROM `departments`;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(1, 'HED', 'higher education department', 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(2, 'SHC & ME', 'Specialized Healthcare & medical education', 'government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(3, 'Agriculture', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(4, 'Food', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(5, 'Law and parliamentary affairs', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(6, 'mines and mineral', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(7, 'school education', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(8, 'transport', NULL, 'Government');
INSERT INTO `departments` (`id`, `name`, `full_name`, `type`) VALUES
	(9, 'PDMA', NULL, 'Government');
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

DELETE FROM `documents`;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(1, 'Notification regarding Generalized Specifications of Extracorporeal Shokwave Lithotripter', '0505526001530640659', 'pdf', 2, 'notification', ' Notification regarding Generalized Specifications of Extracorporeal Shokwave Lithotripter, notifications, SHC & ME, 2018-02-19, 2018-February-19', '2018-02-19', '2018-07-03 17:57:39', '2018-10-25 21:43:49');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(2, 'Notification regarding the generalized specifications of pathology equipment', '0672977001530766884', 'pdf', 2, 'notification', ' , Notification regarding the generalized specifications of pathology equipment, notifications, SHC & ME, 2018-February-19, 2018-02-19', '2018-02-19', '2018-07-05 05:01:24', '2018-10-25 21:43:56');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(3, 'Grant of Ex-Pakistan leave on full pay', '0792858001530767423', 'pdf', 1, 'notice', ' , Grant of Ex-Pakistan leave on full pay, notices, HED, 2018-05-29, 2018-May-29', '2018-05-29', '2018-07-05 05:10:23', '2018-10-25 21:44:02');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(4, 'Mandatory training of teaches of higher education department from BS-17 to BS-18', '0804996001530767779', 'pdf', 1, 'notice', ' , Mandatory training og teaches of higher education department from BS-17 to BS-18, notices, HED, 2018-06-14,2018-June-14', '2018-06-14', '2018-07-05 05:16:19', '2018-11-13 19:45:35');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(5, 'Curriculum  for Mandatory Training of Allied Health Sciences Technologies', '0329249001542679334', 'pdf', 2, 'notification', 'Specialized Healthcare & medical education department,Curriculum  for Mandatory Training of Allied Health Sciences Technologies, notifications, SHC & ME, 2018-01-01, 1 January 2018', '2018-01-01', '2018-11-20 07:02:14', '2018-11-20 07:02:14');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(6, 'Visit of Department of Children Hospital & Institute of Child Health', '0722835001542692021', 'pdf', 2, 'notification', 'Specialized Healthcare & medical education department,Visit of Department of Children Hospital & Institute of Child Health, notifications, SHC & ME, 2018-10-03, 3 October 2018', '2018-10-03', '2018-11-20 10:33:41', '2018-11-20 10:33:41');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(7, 'Sanction/Grant of Health Professional Allowance to the Pharmacists', '0434267001542692344', 'pdf', 2, 'notice', 'Specialized Healthcare & medical education department,Sanction/Grant of Health Professional Allowance to the Pharmacists, notices, SHC & ME, 2018-05-29, 29 May 2018', '2018-05-29', '2018-11-20 10:39:04', '2018-11-20 10:39:04');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(8, 'Generalized Specifications of Intra-Aortic Ballon pumps', '0437478001542692583', 'pdf', 2, 'notification', 'Specialized Healthcare & medical education department,Generalized Specifications of Intra-Aortic Ballon pumps, notifications, SHC & ME, 2018-05-14, 14 May 2018', '2018-05-14', '2018-11-20 10:43:03', '2018-11-20 10:43:03');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(9, 'Specification of the ICU ventilator', '0753000001542692729', 'pdf', 2, 'notification', 'Specialized Healthcare & medical education department,Specification of the ICU ventilator, notifications, SHC & ME, 2018-08-01, 1 August 2018', '2018-08-01', '2018-11-20 10:45:29', '2018-11-20 10:45:29');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(10, 'Officer retired from government service', '0997121001542693208', 'pdf', 3, 'notification', ',Officer retired from government service, notifications, Agriculture, 2017-09-07, 7 September 2017', '2017-09-07', '2018-11-20 10:53:28', '2018-11-20 10:53:28');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(11, 'Recruitment of officers (BS-17 to BS-18)', '0200279001542693358', 'pdf', 3, 'notification', ',Recruitment of officers (BS-17 to BS-18), notifications, Agriculture, 2017-05-22, 22 May 2017', '2017-05-22', '2018-11-20 10:55:58', '2018-11-20 10:55:58');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(12, 'Transfer of the Administrative', '0008841001542693464', 'pdf', 3, 'notification', ',Transfer of the Administrative, notifications, Agriculture, 2018-08-30, 30 August 2018', '2018-08-30', '2018-11-20 10:57:44', '2018-11-20 10:57:44');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(13, 'Show Cause-Cum-Personal Hearing Notice', '0940198001542693600', 'pdf', 3, 'notice', ',Show Cause-Cum-Personal Hearing Notice, notices, Agriculture, 2018-11-13, 13 November 2018', '2018-11-13', '2018-11-20 11:00:00', '2018-11-20 11:00:00');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(14, 'Show Cause Notice', '0611164001542693687', 'pdf', 3, 'notice', ',Show Cause Notice, notices, Agriculture, 2017-07-02, 2 July 2017', '2017-07-02', '2018-11-20 11:01:27', '2018-11-20 11:01:27');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(15, 'Show Cause Notice Punj-Emp Efficiecy Act 2006', '0212554001542693940', 'pdf', 3, 'notice', ',Show Cause Notice Punj-Emp Efficiecy Act 2006, notices, Agriculture, 2016-11-28, 28 November 2016', '2016-11-28', '2018-11-20 11:05:40', '2018-11-20 11:05:40');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(16, 'Pursuance of ECC decision', '0734498001542694365', 'pdf', 4, 'notification', ',Pursuance of ECC decision, notifications, Food, 2015-09-18, 18 September 2015', '2015-09-18', '2018-11-20 11:12:45', '2018-11-20 11:12:45');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(17, 'Posts of Assistant Advocate', '0888569001542694837', 'pdf', 5, 'notice', ',Posts of Assistant Advocate, notices, Law and parliamentary affairs, 2017-05-16, 16 May 2017', '2017-05-16', '2018-11-20 11:20:37', '2018-11-20 11:20:37');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(18, 'Recommendations of Department promotion', '0314073001542694982', 'pdf', 5, 'notification', ',Recommendations of Department promotion, notifications, Law and parliamentary affairs, 2017-06-16, 16 June 2017', '2017-06-16', '2018-11-20 11:23:02', '2018-11-20 11:23:02');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(19, 'Transfer of Assistant Director', '0375260001542695169', 'pdf', 5, 'notice', ',Transfer of Assistant Director, notices, Law and parliamentary affairs, 2017-11-16, 16 November 2017', '2017-11-16', '2018-11-20 11:26:09', '2018-11-20 11:26:09');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(20, 'Transfer Notice Deputy District Attorney', '0435962001542695357', 'pdf', 5, 'notice', ',Transfer Notice Deputy District Attorney, notices, Law and parliamentary affairs, 2018-03-13, 13 March 2018', '2018-03-13', '2018-11-20 11:29:17', '2018-11-20 11:29:17');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(21, 'Notification for Deputy District Attorney', '0154670001542696212', 'pdf', 5, 'notification', ',Notification for Deputy District Attorney, notifications, Law and parliamentary affairs, 2017-02-11, 11 February 2017', '2017-02-11', '2018-11-20 11:43:32', '2018-11-20 11:43:32');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(22, 'Recovery of payment and Allowances', '0481950001542696479', 'pdf', 5, 'notice', ',Recovery of payment and Allowances, notices, Law and parliamentary affairs, 2018-03-14, 14 March 2018', '2018-03-14', '2018-11-20 11:47:59', '2018-11-20 11:47:59');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(23, 'Inviting Tender', '0310940001542696652', 'pdf', 6, 'notice', ',Inviting Tender, notices, mines and mineral, 2018-05-28, 28 May 2018', '2018-05-28', '2018-11-20 11:50:52', '2018-11-20 11:50:52');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(24, 'Auction for lime-stone', '0438443001542696851', 'pdf', 5, 'notice', ',Auction for lime-stone, notices, Law and parliamentary affairs, 2018-08-28, 28 August 2018', '2018-08-28', '2018-11-20 11:54:11', '2018-11-20 11:54:11');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(25, 'Payment of bid money', '0955904001542697026', 'jpg', 6, 'notification', ',Payment of bid money, notifications, mines and mineral, 2016-01-27, 27 January 2016', '2016-01-27', '2018-11-20 11:57:06', '2018-11-20 11:57:06');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(26, 'Maximum Limit of a lease of Minerals', '0683600001542697308', 'jpg', 6, 'notification', ',Maximum Limit of a lease of Minerals, notifications, mines and mineral, 2016-01-27, 27 January 2016', '2016-01-27', '2018-11-20 12:01:48', '2018-11-20 12:01:48');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(27, 'Punjab mining concession Rules', '0538426001542697415', 'pdf', 6, 'notification', ',Punjab mining concession Rules, notifications, mines and mineral, 2016-01-01, 1 January 2016', '2016-01-01', '2018-11-20 12:03:35', '2018-11-20 12:03:35');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(28, 'Maximum period of lease for minerals', '0874667001542697542', 'jpg', 6, 'notification', ',Maximum period of lease for minerals, notifications, mines and mineral, 2016-01-27, 27 January 2016', '2016-01-27', '2018-11-20 12:05:42', '2018-11-20 12:05:42');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(29, 'Compensation cases for payment', '0102096001542698206', 'PNG', 9, 'notification', ',Compensation cases for payment, notifications, PDMA, 2017-08-07, 7 August 2017', '2017-08-07', '2018-11-20 12:16:46', '2018-11-20 12:16:46');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(30, 'Procurement of Satellite Bandwidth', '0630154001542698415', 'PNG', 9, 'notice', ',Procurement of Satellite Bandwidth, notices, PDMA, 2018-01-11, 11 January 2018', '2018-01-11', '2018-11-20 12:20:15', '2018-11-20 12:20:15');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(31, 'Amendments in provincial Motor Vehicles', '0423966001542699582', 'pdf', 8, 'notification', ',Amendments in provincial Motor Vehicles, notifications, transport, 2013-12-11, 11 December 2013', '2013-12-11', '2018-11-20 12:39:42', '2018-11-20 12:39:42');
INSERT INTO `documents` (`id`, `subject`, `file`, `extension`, `department_id`, `type`, `tags`, `issued_at`, `created_at`, `updated_at`) VALUES
	(32, 'Performance in Punjab Examination Commission', '0458917001542699887', 'pdf', 7, 'notification', ',Performance in Punjab Examination Commission, notifications, school education, 2017-09-27, 27 September 2017', '2017-09-27', '2018-11-20 12:44:47', '2018-11-20 12:44:47');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE IF NOT EXISTS `inquiries` (
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

DELETE FROM `inquiries`;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` (`id`, `name`, `email`, `question`, `answer`, `views`, `created_at`, `updated_at`) VALUES
	(1, 'dev', 'dev@example.com', 'How can I download a file in pdf?', 'Well, simply select your notice/notification and click on download link given.', 0, '2018-10-31 11:45:59', '2018-11-01 09:12:34');
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;

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
	(1, 'Dev', 'dev@example.com', '$2y$10$A/JZUkPAtf5OLvO8uStoF.NxYX.yzzAtzNlwrnjechhZ7uQzylsGi', 'wpV6p3UTbNj8fgj1KVgym3AOMQyKEqMh53x5E8rfWRQK1g3ZbPbviSwkbluO', '2018-05-21 13:52:37', '2018-05-21 13:55:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

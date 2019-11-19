-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table 403.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `google` varchar(50) DEFAULT NULL,
  `feed` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `post1` text DEFAULT NULL,
  `post2` text DEFAULT NULL,
  `post3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table 403.profile: ~0 rows (approximately)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT IGNORE INTO `profile` (`id`, `name`, `twitter`, `facebook`, `google`, `feed`, `mail`, `site`, `image`, `profile`, `post1`, `post2`, `post3`) VALUES
	(1, 'Antina', 'http://twitter.com', 'http://facebook.com', 'http://plus.google.com', 'http://feeds.feedburner.com', 'thecre8tivediva@gmai.com', ' http//thecre8tivediva.com', 'image/user1.jpg', 'Share a little biographcal information to fill out', 'Author Tempalte File With Social Media Links & Gravatar, 21 Apr 2014 in Web Design.', 'New, 21 Apr 2014 in Web Design', 'Demo Post, 21 Apr 2014 in Uncatagorized');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

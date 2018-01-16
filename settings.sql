-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 03:50 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-10+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gcv_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_ar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci NOT NULL,
  `website_id` int(11) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `text_en`, `text_ar`, `img_en`, `img_ar`, `google_analytics`, `website_id`, `user_id`, `published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Our location page', 'اماكنا', 'locations-cv.jpg', 'locations-cv.jpg', 'ggogogog', 1, 3, 1, '2017-04-06 10:00:21', '2017-10-09 07:43:12', NULL),
(3, 'EGYPT Ghabbour Auto Address: Km 3 - Cairo Alexandria Agriculture road, Cairo, Egypt  Phone:+2 02 42104494 Fax:+2 02 42107797', 'مصر غبور اوتو      Address: Km 3 - Cairo Alexandria Agriculture road, Cairo, Egypt    موبايل:+2 02 42104494  فاكس: +2 02 42107797 ', 'location-fuso.png', 'locations-ar.jpg', 'ppp', 3, 3, 1, NULL, '2017-10-09 07:58:18', NULL),
(4, 'Locations', 'اماكننا', '', '', 'google', 4, 3, 1, NULL, '2017-10-09 08:10:12', NULL),
(5, 'Locations', 'اماكننا', '', '', 'google', 2, 3, 1, NULL, NULL, NULL),
(6, 'Locations', 'اماكننا', '', '', 'google', 5, 3, 1, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

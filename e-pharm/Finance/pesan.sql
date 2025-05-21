-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2014 at 07:58 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-pharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `dari` int(11) NOT NULL,
  `ke` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `draft` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `dari`, `ke`, `isi`, `waktu`, `draft`, `status`) VALUES
(1, 2, 1, 'Halooo :D', '2014-06-01 10:00:00', 0, 0),
(2, 1, 2, 'Wa''alaikum salam :)', '2014-06-01 11:00:00', 0, 0),
(4, 1, 2, 'hahaha', '2014-06-01 20:03:04', 0, 0),
(5, 1, 2, 'Test lagi :)', '2014-06-01 20:04:57', 0, 0),
(6, 1, 2, 'Haloo juga maaf baru bales :D', '2014-06-01 20:08:27', 0, 0),
(7, 1, 2, 'lalalalaa', '2014-06-01 20:57:45', 1, 0),
(8, 1, 2, 'oyiii', '2014-06-01 21:05:36', 1, 0),
(9, 1, 2, 'wesss', '2014-06-01 21:20:25', 0, 0),
(10, 1, 2, 'wenakk', '2014-06-01 23:13:57', 0, 0),
(11, 1, 2, 'test draft', '2014-06-01 23:14:12', 1, 0),
(12, 1, 2, '??', '2014-06-01 23:22:52', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

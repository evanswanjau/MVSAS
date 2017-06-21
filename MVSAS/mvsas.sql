-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 04:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8_bin NOT NULL,
  `secondname` varchar(20) COLLATE utf8_bin NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_bin NOT NULL,
  `plate` varchar(10) COLLATE utf8_bin NOT NULL,
  `car_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `car_model` varchar(30) COLLATE utf8_bin NOT NULL,
  `servicenumber` varchar(15) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `secondname`, `phonenumber`, `plate`, `car_name`, `car_model`, `servicenumber`, `date`) VALUES
(1, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', 'MODAESF2U', '2017-06-18'),
(2, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', 'C6IOKYZA9', '2017-06-19'),
(3, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', '19W2IK5RB', '2017-06-19'),
(4, 'Kevin', 'Mwangi', '0700556677', 'KAJ 342K', 'Toyota Corolla', 'Toyota 111', 'QGTK65ZL7', '2017-06-19'),
(5, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', 'RDAIL8WZT', '2017-06-19'),
(6, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', 'MFR0OD7IC', '2017-06-19'),
(7, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota Corolla', 'Toyota 111', '9I3UBEY8R', '2017-06-19'),
(8, 'Dennis', 'Muriru', '0707837313', 'KBD 920F', 'Toyota Harrier', 'SUV New Model', '9LN2KHJ3D', '2017-06-19'),
(9, 'Jane', 'Wambui', '0707837313', 'KCD 779K', 'Toyota', 'Premio', '7U3ABMHVN', '2017-06-19'),
(10, 'Evans', 'Wanjau', '0707837313', 'KBD 920F', 'Toyota', 'Premio', '0ABGMXOKZ', '2017-06-19'),
(11, 'Jane', 'Nyambura', '+254707888999', 'KAJ 342K', 'Toyota', 'Premio', 'I657U30CE', '2017-06-19'),
(12, 'Jane', 'Wambui', '0707837313', 'KAJ 342K', 'Toyota Corolla', 'Premio', '5CE6XQRJ4', '2017-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bonnet` int(10) NOT NULL,
  `bumper` int(10) NOT NULL,
  `doors` int(10) NOT NULL,
  `windscreen` int(10) NOT NULL,
  `doorwindows` int(10) NOT NULL,
  `alternator` int(10) NOT NULL,
  `battery` int(10) NOT NULL,
  `ignitions` int(10) NOT NULL,
  `lights` int(10) NOT NULL,
  `indicator` int(10) NOT NULL,
  `brakings` int(10) NOT NULL,
  `engine` int(10) NOT NULL,
  `oil` int(10) NOT NULL,
  `airfilter` int(10) NOT NULL,
  `gearbox` int(10) NOT NULL,
  `mileage` int(10) NOT NULL,
  `servicenumber` varchar(15) COLLATE utf8_bin NOT NULL,
  `servicefee` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=54 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `bonnet`, `bumper`, `doors`, `windscreen`, `doorwindows`, `alternator`, `battery`, `ignitions`, `lights`, `indicator`, `brakings`, `engine`, `oil`, `airfilter`, `gearbox`, `mileage`, `servicenumber`, `servicefee`, `total`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 123456, 'QGTK65ZL7', 0, 6500),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 123456, 'RDAIL8WZT', 0, 12000),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 123456, 'MFR0OD7IC', 1000, 1000),
(48, 5500, 0, 0, 0, 0, 5500, 0, 0, 0, 0, 8800, 0, 0, 0, 0, 123456, '9I3UBEY8R', 1000, 20800),
(49, 5500, 0, 5500, 0, 0, 8800, 0, 8800, 0, 0, 0, 8800, 0, 0, 0, 123456, '9LN2KHJ3D', 1000, 38400),
(50, 5500, 0, 0, 8800, 0, 0, 0, 0, 5500, 0, 0, 0, 8800, 0, 0, 123456, '7U3ABMHVN', 1000, 29600),
(51, 0, 0, 0, 0, 0, 5500, 0, 8800, 0, 0, 8800, 5500, 8800, 0, 5500, 123456, '0ABGMXOKZ', 1000, 43900),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5500, 5500, 5500, 0, 0, 0, 123456, 'I657U30CE', 1000, 17500),
(53, 0, 0, 0, 0, 5500, 0, 0, 8800, 0, 0, 0, 0, 0, 0, 0, 123456, '5CE6XQRJ4', 1000, 15300);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

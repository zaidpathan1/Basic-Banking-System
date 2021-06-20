-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2021 at 05:36 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'zaid pathan', 'pathanzaid1234@gmail.com', 50000),
(2, 'Uzair Saiyed', 'saiyeduzair11@gmail.com', 40000),
(3, 'Arbaz Pathan', 'pathanarbaz21@gmail.com', 45000),
(4, 'Mit Kapadiya', 'mitkapadiya99@gmail.com', 55000),
(5, 'Malay Prajapati', 'malaypraj221@gmail.com', 35000),
(6, 'viral chauhan', 'virchauhan12@gmail.com', 48000),
(7, 'suhagi viraj ', 'viraj1234@gmail.com', 70000),
(8, 'Vijay Prajapati', 'vijaypraj33@gmail.com', 60000),
(9, 'aftab ansari', 'aftab1134@gmail.com', 65000),
(10, 'Himanshu Rabari', 'himrabari@gmail.com', 42000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

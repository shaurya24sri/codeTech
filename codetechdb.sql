-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Sep 25, 2021 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codetechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `projectinfo`
--

CREATE TABLE `projectinfo` (
  `id` int(11) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `projectidea` varchar(255) NOT NULL,
  `team` varchar(11) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectinfo`
--

INSERT INTO `projectinfo` (`id`, `projectname`, `projectidea`, `team`, `technology`, `description`, `Status`, `Github`) VALUES
(1, 'To-do list', 'To perform CRUD operation', '3', 'React,HTML,CSS,JS', '			This is a React app.	', 'Starting project', 'https://github.com/shaurya24sri'),
(2, 'E-commerce Web', 'It is a advance project on building a full stackk e-commerce Website', '5', 'HTML,CSS,JAVASCRIPT,PHP,MYSQL', '		It is a full stack website. It will help you build a website from scratch.', 'Incomplete', 'https://github.com/shaurya24sri/covid'),
(3, 'Basic Banking System', 'It is a  Dynamic website where users can tranfer money between different user.', '4', 'Html,Css,Bootstrap,Mysql,PHP', '	Basic Banking System is a full stack website where we can Transfer. cash between different users.	', 'Partially complete', 'https://github.com/shaurya24sri/bankWebsite'),
(4, 'Ghrome Extension', 'It is google extension which can scrap data from web.', '4', 'Html,css,javascript,etc.', 'It is a google chrome extension. We can scrap data and store it directly withour typing', 'incomplete', 'www.google.com'),
(6, 'Tic-Tace Toe', 'Game', '2', 'React Native', '		It is a gaming application , build using react native.	', 'Starting phase', 'https://github.com/shaurya24sri/portfolio-react');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projectinfo`
--
ALTER TABLE `projectinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projectinfo`
--
ALTER TABLE `projectinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

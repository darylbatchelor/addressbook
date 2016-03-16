-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 06:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--
CREATE DATABASE IF NOT EXISTS `addressbook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `addressbook`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `homephone` int(20) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `homephone`, `Mobile`, `Address`, `Facebook`) VALUES
(2, 'andrews', 'Andrew', 'andy@and.com', 9867567, 875678676, '23 ghg hgkjgkg kgkgkgk', 'andrew.boxgead'),
(3, 'news', 'nref', 'dsa@ghj.vfdg', 42342344, 242345, 'sadada7', 'abc.defg9'),
(9, 'ghjk', 'andjh', 'asd@kj.cm', 0, 0, '567 gjhgigy', 'fds'),
(10, 'angelo', 'Palazzolo', 'gjhg@jhgjhg.cdc', 1234566, 98756454, 'dont know', 'xxhammerxx'),
(11, 'Bob', 'Down', 'hjkh@hjk.vd', 345345, 474675675, '23GJH ojh ', 'bob.down'),
(12, 'Brooke', 'Batjf', 'sdf@sdfg.cg', 0, 0, 'sdfsdf', 'sdfsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

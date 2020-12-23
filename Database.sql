-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 01:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shivanas_jewellery`
--
CREATE DATABASE IF NOT EXISTS `shivanas_jewellery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shivanas_jewellery`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustomer`, `username`, `pswd`, `phonenumber`, `email`) VALUES
(1234, 'saraz', '0316', '0197851637', 'saras_21@gmail.com'),
(9876, 'priya', '1230', '0138011296', 'priya_24@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Email` varchar(30) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Email`, `Password`) VALUES
('priya_24@gmail.com', 1230),
('saras_21@gmail.com', 1603);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9877;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Password` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1605;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2020 at 04:23 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `User`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(40) NOT NULL,
  `Last Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `School` varchar(50) NOT NULL,
  `10th %` int(11) NOT NULL,
  `12th %` int(11) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Graduation Course` varchar(50) NOT NULL,
  `html` int(11) NOT NULL,
  `css` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `bootstrap` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Date and Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `First Name`, `Last Name`, `Email`, `School`, `10th %`, `12th %`, `University`, `Graduation Course`, `html`, `css`, `java`, `bootstrap`, `c`, `password`, `Date and Time`) VALUES
(25, 'Rakhi', 'jha', 'rakhi@gmail.com', 'Scholar Pride', 95, 91, 'Manav Rachna University', 'BTech CSE', 90, 70, 80, 60, 80, '$2y$10$xHhjKigDTvaxPKETGsHoIOpdjwqRp4Z/dbd.MvesVL2Du2aBNsfCi', '2020-12-05 13:16:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

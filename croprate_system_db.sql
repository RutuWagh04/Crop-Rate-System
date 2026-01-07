-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 09:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `croprate_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'rutuja', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Dal'),
(3, 'Corns'),
(5, 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Id`, `name`) VALUES
(1, 'mumbai'),
(2, 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `Id` int(9) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `adhar` bigint(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`Id`, `fname`, `email`, `contact`, `adhar`, `image`, `username`, `password`) VALUES
(1, 'ram', 'ram123@gmail.com', 5432564, 5216786878, 'upload/1_farmer.png', 'ram', '123'),
(2, 'ram1', 'ram1231@gmail.com', 54325641, 52167868781, 'upload/2_farmer.png', 'ram1', '1231'),
(3, 'ram', 'ram123@gmail.com', 5432564, 5216786878, 'upload/3_farmer.png', 'ram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `Id` bigint(20) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `oemail` varchar(70) NOT NULL,
  `ocontact` bigint(20) NOT NULL,
  `oadhar` bigint(20) NOT NULL,
  `oaddress` varchar(200) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `memail` varchar(70) NOT NULL,
  `mcontact` bigint(20) NOT NULL,
  `mphoto` varchar(200) NOT NULL,
  `mcity` int(10) NOT NULL,
  `maddress` varchar(200) NOT NULL,
  `musername` varchar(100) NOT NULL,
  `mpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`Id`, `oname`, `oemail`, `ocontact`, `oadhar`, `oaddress`, `mname`, `memail`, `mcontact`, `mphoto`, `mcity`, `maddress`, `musername`, `mpassword`) VALUES
(1, 'Ram', '', 0, 0, '', 'My market', '', 0, 'upload/1_market.png', 1, 'a', 'a', 'a'),
(2, 'rutuja', 'abcdeyhg@gmail.com', 5431890, 65432900, 'ghkfrewsfhk', 'Latur Market', 'vfserj@gmail.com', 765432, 'upload/2_market.png', 1, 'b', 'b', 'b'),
(3, 'Kalpana ', 'kp@gmail.com', 5988788, 262222, 'mumbai', 'KALP Market', 'kl@gmail.com', 2323366, 'upload/3_market.png', 1, 'mumbai', 'kl', 'kl'),
(4, 'Sarathi1', 'sr1@gmail.com', 333331, 6666666661, '  1                                                      nagpur                                                    ', 'SARA MARKET1', 'sr1@gmail.com', 8989881, 'upload/4_market.png', 2, 'mumbai1', 'sr1', 'sr1');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `ID` int(9) NOT NULL,
  `CID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `RATE` int(11) NOT NULL,
  `MAR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`ID`, `CID`, `SID`, `UID`, `DATE`, `RATE`, `MAR_ID`) VALUES
(1, 1, 1, 1, '2023-11-07', 100, 1),
(2, 1, 1, 4, '2023-11-07', 1000, 1),
(3, 2, 4, 1, '2023-11-07', 200, 1),
(4, 2, 4, 4, '2023-11-07', 2500, 1),
(5, 1, 2, 1, '2023-11-07', 150, 2),
(6, 1, 1, 1, '2023-11-07', 200, 2),
(7, 1, 1, 4, '2023-11-08', 2000, 2),
(8, 1, 1, 1, '2023-11-20', 50, 1),
(9, 1, 1, 1, '2023-11-23', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `Id` bigint(20) NOT NULL,
  `catname` int(10) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`Id`, `catname`, `subname`) VALUES
(1, 8, 'Tur Dal'),
(2, 0, 'Udad dal'),
(3, 2, 'Abba Hujur'),
(4, 2, 'Basmati'),
(5, 2, 'Chand Tara'),
(7, 3, 'nnn'),
(8, 3, 'baby corn');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `Id` int(9) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`Id`, `uname`) VALUES
(1, 'KG'),
(2, 'vb'),
(4, 'Sack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

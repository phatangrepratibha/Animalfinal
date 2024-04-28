-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 09:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animalfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'admin123'),
('[value-1]', '[value-2]');

-- --------------------------------------------------------

--
-- Table structure for table `american`
--

CREATE TABLE `american` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bordercolliedog`
--

CREATE TABLE `bordercolliedog` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `britishcat`
--

CREATE TABLE `britishcat` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `britishcat`
--

INSERT INTO `britishcat` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 'white', '1 year', 'male', 'pune', 'Viman Nagar', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `bulldog`
--

CREATE TABLE `bulldog` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bulldog`
--

INSERT INTO `bulldog` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'simran@gmail.com', 'white', '1 year', 'male', 'Ahmed Nagar', 'Savedi', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` varchar(20) NOT NULL,
  `Subject` varchar(60) NOT NULL,
  `Msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`FullName`, `Email`, `Phone`, `Address`, `City`, `Pincode`, `Subject`, `Msg`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 2147483647, 'Flat no-2,matoshri building,nirmal nagar, shirsath', 'Ahmed Nagar', '414003', 'found a cat on road', 'I have found a cat near my house, so i want to give to your team. so plz contact as soon as possible');

-- --------------------------------------------------------

--
-- Table structure for table `eskimo`
--

CREATE TABLE `eskimo` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goldenretriever`
--

CREATE TABLE `goldenretriever` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goldenretriever`
--

INSERT INTO `goldenretriever` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 'white', '1 year', 'male', 'Ahmed Nagar', 'Savedi', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `husky`
--

CREATE TABLE `husky` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainecooncat`
--

CREATE TABLE `mainecooncat` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainecooncat`
--

INSERT INTO `mainecooncat` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 'white', '1 year', 'female', 'Ahmed Nagar', 'Savedi', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `persiancat`
--

CREATE TABLE `persiancat` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(10) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persiancat`
--

INSERT INTO `persiancat` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 'white', '1 year', 'male', 'pune', 'Viman Nagar', 2147483647),
('Prajakta Deogune ', 'deogunep@gmail.com', 'white', '3 months', 'male', 'pune', 'Viman Nagar', 2147483647),
('Simran Phatangre', 'phatangrepratibha18@gmail.com', 'black', '3 months', 'female', 'Ahmed Nagar', 'Akole', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `poodledog`
--

CREATE TABLE `poodledog` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ragdollcat`
--

CREATE TABLE `ragdollcat` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ragdollcat`
--

INSERT INTO `ragdollcat` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', '1234@gmail.com', 'gray', '1 year', 'male', 'Ahmed Nagar', 'Ahmednagar', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Fname`, `Lname`, `Username`, `Email`, `Phone`, `Password`) VALUES
('prajakta', 'deogune', 'prajakta1230', 'deoguneprajakta@gmail.com', 2147483647, 'kim@123'),
('Simran', 'Phatangre', 'simran1313', 'phatangrepratibha18@gmail.com', 2147483647, 'sim123');

-- --------------------------------------------------------

--
-- Table structure for table `siamese`
--

CREATE TABLE `siamese` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siamese`
--

INSERT INTO `siamese` (`Name`, `Email`, `Colour`, `Age`, `Gender`, `City`, `Address`, `Phone`) VALUES
('Prajakta Deogune ', 'deoguneprajakta@gmail.com', 'gray', '1 year', 'female', 'Ahmed Nagar', 'Savedi', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

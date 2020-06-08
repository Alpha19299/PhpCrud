-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 06:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberexchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `ProductID` int(10) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductCode` varchar(25) NOT NULL,
  `ProductInStock` varchar(5) NOT NULL,
  `ProductDiscount` float NOT NULL,
  `ProductSize` varchar(50) NOT NULL,
  `ProductDetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ProductID`, `ProductName`, `ProductPrice`, `ProductCode`, `ProductInStock`, `ProductDiscount`, `ProductSize`, `ProductDetails`) VALUES
(11, 'Iphone 7 Plus', 78000, 'MPAP701', 'yes', 14, 'small', 'Apple iPhone 7 Plus smartphone was launched in September 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080x1920 pixels.'),
(12, 'Samsung S9', 77000, 'MPSSS91', 'yes', 5, 'large', 'The Samsung Galaxy S9 is a smartphone came with Android 9.0. This model has a 5.8\" display.'),
(13, 'Oppo Reno', 60000, 'MPOPR01', 'yes', 25, 'large', 'The phone comes with 6.40\" display with resolution of 1080x2340 pixels at a density of 402 pixels.'),
(14, 'Xiaomi Mi9', 58000, 'MPXM901', 'yes', 4, 'small', 'Xiaomi Mi 9 is powered by a 2.84GHz octa-core Qualcomm Snapdragon 855 processor. It comes with 6GB of RAM.'),
(21, 'Macbook Pro 2019', 315000, 'LTMBP1901', 'yes', 5, 'small', 'The MacBook Pro models refreshed in July 2019 features quad-core 1.4GHz i5 8th-gen Intel processors with Turbo Boost up to 3.9GHz'),
(22, 'Acer NotebookX', 55000, 'LTANG01', 'yes', 8, 'small', 'Acer Aspire is a Windows 10 laptop with a 15.60-inch display that has a resolution of 1920x1080 pixels. '),
(31, 'Mi band 4', 4500, 'SWMB401', 'yes', 0, 'small', 'Xiaomi Mi Band 4. The Mi Band 4 is arguably the best budget fitness band available right now. '),
(41, 'LG Neoneblade 3', 45000, 'MTLGNB301', 'yes', 0, 'large', 'The Neo Blade III IPS Panel with the incredibly narrow 2.5mm bezel Infinity Display'),
(51, 'Samsung LevelOn pro', 6000, 'HPSSLP01', 'yes', 10, 'large', 'Incorporating Samsung\'s state-of-the-art UHQ audio support technology, Level On Wireless PRO headphones offer top-quality sound.'),
(52, 'Sony Cordless', 15000, 'HPSCL01', 'yes', 6, 'large', 'EXTRA BASS™ for deep, punchy sound and Noise Cancelling with Bluetooth® technology');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `UserID` int(15) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `UserPassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`UserID`, `UserName`, `UserPassword`) VALUES
(123, 'Ali Haider', '1234'),
(456, 'Adnan Tahir', '4567'),
(789, 'Yousaf Mustatab', '7891'),
(369, 'Umair Azeem', '3698');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

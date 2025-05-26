-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_kizito`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `username`, `password`) VALUES
(1, 'nclaude', '0782679199', 'nclaude', 'nclaude'),
(2, 'ndayishimiye jean claude', '0728079199', 'jclaude', 'jclaude'),
(3, 'KANANI Vincent', '0784354413', 'kanani', 'kanani');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `trade` varchar(50) NOT NULL,
  `level` varchar(6) NOT NULL,
  `book_title` text NOT NULL,
  `book` blob NOT NULL,
  `trainer` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `trade`, `level`, `book_title`, `book`, `trainer`, `date`) VALUES
(1, 'COMPUTER APPLICATION', 'L3', 'digital camera', 0x524142414e204944202831292e706466, '', '2021-07-10'),
(2, 'COMPUTER APPLICATION', 'L3', 'DESIGN CALENDER', 0x4469706c6f6d652e706466, 'REVOCATE', '2021-08-10'),
(3, 'COMPUTER APPLICATION', 'L3', 'word processing', 0x52452d4153534553534d454e542054494d45205441424c4520283229202831292e786c7378, 'anonciata', '2021-08-10'),
(4, 'COMPUTER APPLICATION', 'L3', 'Advanced word processing', 0x616476206469706c6f6d61204131202d206e646179697368696d697965206a65616e20636c61756465202831292e706466, 'kwizera', '2021-08-10'),
(5, 'SOFTWARE DEVELOPMENT', 'L4', 'website mantainance', 0x52452d4153534553534d454e542054494d45205441424c45202831292e786c7378, 'kwizera', '2021-08-10'),
(6, 'SOFTWARE DEVELOPMENT', 'L4', 'DATABASE FUNDAMENTAL', 0x416c696e652e646f6378, 'ANNONCIATHA', '2021-08-10'),
(7, 'SOFTWARE DEVELOPMENT', 'L5', 'DEPLOYING WEBSITE', 0x417474656e64616e6365206f6620547261696e657273202d20417072696c20323032312028466f726d20636f72726563746564292e706466, 'KWIZERA JEAN CLAUDE', '2021-08-10'),
(8, 'SOFTWARE DEVELOPMENT', 'L5', 'database intergation', 0x5343484f4f4c204255444a4554204753204e4441474f2e646f6378, 'MUKARUGWIZA Anonciatha', '2021-08-10'),
(9, 'MULTIMEDIA', 'L4', 'video edit', 0x7363686f6f6c20627564676574204773206e6461676f2e786c7378, 'KANANI Vincent', '2021-08-10'),
(10, 'COMPUTER APPLICATION', 'L4', 'camera setup', 0x4753204e4441474f2e706466, 'KWIZERA JEAN CLAUDE', '2021-08-10'),
(11, 'MULTIMEDIA', 'L5', 'DESIGN CALENDER', 0x5343484f4f4c204255444a4554204753204e4441474f2e646f6378, 'KANANI Vincent', '2021-08-10'),
(12, 'SOFTWARE DEVELOPMENT', 'L4', 'camera setup', 0x7363686f6f6c20627564676574204773206e6461676f2e786c7378, 'KWIZERA JEAN CLAUDE', '2021-08-10'),
(13, 'MULTIMEDIA', 'L4', 'camera setup', 0x7363686f6f6c20627564676574204773206e6461676f2e786c7378, 'KWIZERA JEAN CLAUDE', '2021-08-10'),
(14, 'ACCOUNTING', 'L3', 'BASIC ACCOUNTING', 0x4773206e6461676f2045207064662e706466, 'JEAN DE DIEU', '2021-08-10'),
(15, 'ACCOUNTING', 'L4', 'BASIC ACCOUNTING', 0x4773206e6461676f2045207064662e706466, 'KAMUYUMBU', '2021-08-10'),
(16, 'ACCOUNTING', 'L5', 'ADVANCED ACCOUNTING', 0x4773206e6461676f2045207064662e706466, 'KAMUYUMBU', '2021-08-10'),
(17, 'BUSSINESS', 'L3', 'Bussinness plan', 0x72657365727665642e646f6378, 'KAMAMUYUMBU', '2021-08-10'),
(18, 'BUSSINESS', 'L4', 'Bussinness plan', 0x7363686f6f6c20627564676574204773206e6461676f2e786c7378, 'JEAN DE DIEU', '2021-08-10'),
(19, 'BUSSINESS', 'L5', 'advanced Bussinness', 0x617474656e64616e636520306e2031352d30342d323032312e706466, 'kamanzi', '2021-08-10'),
(20, 'DOMESTIC ELECTRICITY', 'L3', 'domestic installation', 0x617474656e64616e636520306e2031392d30342d323032312e706466, 'Jean Claude', '2021-08-10'),
(21, 'INDUSTRIAL ELECTRICITY', 'L4', 'motor repair', 0x617474656e64616e636520306e2031372d30342d323032312e706466, 'gasongo', '2021-08-10'),
(22, 'INDUSTRIAL ELECTRICITY', 'L5', 'high voltage', 0x617474656e64616e636520306e2031332d30342d323032312e706466, 'ildephonce', '2021-08-10'),
(23, 'ELECTRONIC SERVICES', 'L5', 'COMPUTEER REPAIR', 0x63762e646f6378, 'REVERIAN', '2021-08-10'),
(24, 'ELECTRONIC SERVICES', 'L4', 'CAMERA REPAIR', 0x5343484f4f4c204255444a4554204753204e4441474f2e646f6378, 'SOVEUER', '2021-08-10'),
(25, 'COMPUTER APPLICATION', 'L3', 'ELECTRONIC TOOLS', 0x52452d4153534553534d454e542054494d45205441424c45202832292e786c7378, 'KWIZERA JEAN CLAUDE', '2021-08-10'),
(26, 'COMPUTER APPLICATION', 'L3', 'php', 0x52452d4153534553534d454e542054494d45205441424c4520283229202831292e786c7378, 'KWIZERA JEAN CLAUDE', '2021-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `suject` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `suject`, `message`) VALUES
(1, 'ndayishimiye jean claude', 'nclaude701@gmail.com', '', 'xnbnbm zx'),
(2, 'ndayishimiye jean claude', 'nclaude701@gmail.com', '', 'xnbnbm zx'),
(3, 'ndayishimiye jean claude', 'nclaude701@gmail.com', 'kjxchbkngfn', 'k,xbnmzcv cxncvn'),
(4, 'uwiragiye jean damascene', 'uwidamasco@gmail.com', 'hxmxmndxvhjmcd  xmmmmmcx', 'jhxvbv hjxmbksj mncvxmcxm');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(5, 'school background', 'school background', 'assets/nimg/bg.jpg', '2023-01-11'),
(6, 'chapel', 'chapel', 'assets/nimg/ch.jpg', '2023-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

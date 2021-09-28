-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 03:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Sex` varchar(30) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `StudentID` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `Major` varchar(30) NOT NULL,
  `EducationYear` int(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `District2` varchar(255) NOT NULL,
  `Work` varchar(255) NOT NULL,
  `Workplace` varchar(255) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL,
  `UserID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Firstname`, `Lastname`, `Sex`, `Province`, `StudentID`, `Password`, `Section`, `Major`, `EducationYear`, `Address`, `District`, `District2`, `Work`, `Workplace`, `Phonenumber`, `UserID`) VALUES
('ณัฐพล', 'แซ่โฟ้ง', 'ชาย', 'น่าน', '624259012', '$2y$10$h/dC0qxAGfg8.Z5qBZvhnue89ZDrhhJuwogJ.3JYRHtkc5ssPNFMq', '62/45', 'วิศวกรรมซอฟต์แวร์', 2562, '15 หมู่5', 'ดู่ใต้', 'เมืองน่าน', 'ทำงานแล้ว', 'Advice เมืองน่าน', '0888888888', 1),
('กนกพล', 'พวงวัดโพธิ์', 'ชาย', 'นครปฐม', '624259001', '$2y$10$8Uh2cJsQK1el/KsIo4kg3eJkXloXjtYFhh3Hu6sdMc6DJ4IU5Cpt6', '62/45', 'วิศวกรรมซอฟต์แวร์', 2562, '91 หมู่ 5', 'ห้วยด้วน', 'ดอนตูม', 'ทำงานแล้ว', 'บริษัท Kar', '097392476', 2),
('กนกพล', 'มากเงิน', 'ชาย', 'ชัยนาท', '624259002', '$2y$10$8740S2qf.u8c75CAmdyhQ.TGcdzM17niCYdpBRTYzwElPs9O1lxnS', '62/40', 'วิศวกรรมซอฟต์แวร์', 2562, '91 หมู่ 5', 'ห้วยด้วน', 'ดอนตูม', 'ว่างงาน', '-', '0987392476', 3),
('ณัฐพล', 'แซ่โฟ้ง', 'ชาย', 'ชลบุรี', '624259004', '$2y$10$vTMjXhDciKYTYmKsNN7B5eZYjBKFAiPBWO.drnxw7pLbhphzoSTom', '62/45', 'วิศวกรรมซอฟต์แวร์', 2562, '91 หมู่ 5', 'ห้วยด้วน', 'ดอนตูม', 'ทำงานแล้ว', 'บริษัท Kar', '0812345678', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

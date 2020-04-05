-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 08:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csewdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(10) NOT NULL,
  `EventType` text NOT NULL,
  `EventDescription` text NOT NULL,
  `Date` text NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventType`, `EventDescription`, `Date`, `UserID`) VALUES
(10, 'jdbchdun m', 'ncbdcjsd mcsudnch c cncubc', '2020-04-21', 1),
(12, 'Imp of development', 'jsjcchs  chbsdcc s chasbcva s ashcb xas cb ', '2020-04-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(10) NOT NULL,
  `ProjectName` text NOT NULL,
  `ProjectDescription` text NOT NULL,
  `imgUrl` text NOT NULL,
  `Date` date NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `ProjectName`, `ProjectDescription`, `imgUrl`, `Date`, `UserID`) VALUES
(1, 'Party', 'o go to or give parties, especially a series of parties.\r\nto enjoy oneself thoroughly and without restraint; indulge in', 'proyect_1/Annotation 2020-03-17 150648.png', '2020-02-11', 1),
(2, 'Party', 'o go to or give parties, especially a series of parties.\nto enjoy oneself thoroughly and without restraint; indulge in pleasure.', 'proyect_1/post2.jpg', '2020-02-11', 1),
(3, 'Party', 'o go to or give parties, especially a series of parties.\nto enjoy oneself thoroughly and without restraint; indulge in pleasure.', 'proyect_1/post3.jpg', '2020-02-11', 2),
(4, 'Party', 'o go to or give parties, especially a series of parties.\nto enjoy oneself thoroughly and without restraint; indulge in pleasure.', 'proyect_1/post4.jpg', '2020-02-11', 3),
(5, 'Party', 'o go to or give parties, especially a series of parties.\nto enjoy oneself thoroughly and without restraint; indulge in pleasure.', 'proyect_1/edu_scaled1000.jpg', '2020-02-11', 1),
(6, 'kahdhcsdcu', 'kjsdhcsdyycc dccsuhc cygcygc', '', '2020-04-24', 4),
(9, 'Party', 'o go to or give parties, especially a series of parties.\nto enjoy oneself thoroughly and without restraint; indulge in pleasure.', 'proyect_1/difundir.jpg', '2020-02-11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Address` text NOT NULL,
  `State` text NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Email`, `Password`, `PhoneNumber`, `Address`, `State`, `Country`) VALUES
(1, 'Jimmy', 'mmoonn@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(2, 'Ackerley ', 'fxcvv@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(3, 'Baako', 'dfxcvv@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(4, 'Adam', 'lpoww@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(5, 'Babs', 'sfcxza@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(6, 'luios', 'asvsww@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(7, 'Baccus', 'checkCC@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(8, 'Jimmy', 'test@gmail.com', '123456', 68323232, '601S benge drive', 'TX', 'US'),
(12, 'ashu', '', '1234', 0, '', '', ''),
(16, 'Ashutosh Mehta', 'ashu@gmail.com', '1234', 0, '', '', ''),
(17, 'Ashu', 'test@gmail.com', '1234', 0, '', '', ''),
(19, 'Yash', 'yash@gmail.com', 'abcd', 0, '', '', ''),
(21, 'Kenil', 'kp397366@gmail.com', 'abcs', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `VideoID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `VideoType` text NOT NULL,
  `Description` text NOT NULL,
  `VideoUrl` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`VideoID`, `UserID`, `VideoType`, `Description`, `VideoUrl`, `Date`) VALUES
(1, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-04-20'),
(2, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(3, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(4, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(5, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(6, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(7, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(9, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-15'),
(10, 1, 'computer science', 'A video description is a piece of metadata that helps YouTube understand the content of a video. Descriptions that are well optimized can lead to higher rankings in YouTube search.', 'https://youtu.be/4EnpfIaCYO4?list=RD4EnpfIaCYO4', '2020-02-16'),
(20, 1, 'Event Description', 'how we organized the event', '', '2020-04-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`VideoID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `VideoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

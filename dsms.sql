-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 07:10 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assignID` int(200) NOT NULL,
  `Date` date NOT NULL,
  `Timefrom` time(6) NOT NULL,
  `Timeto` time(6) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `traName` varchar(200) NOT NULL,
  `Plate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assignID`, `Date`, `Timefrom`, `Timeto`, `Status`, `traName`, `Plate`) VALUES
(1, '2015-12-09', '12:00:00.000000', '17:00:00.000000', 'OFF', 'KOO SHI HAN', 'JBH 2245'),
(2, '2015-12-09', '10:00:00.000000', '14:00:00.000000', 'OFF', 'KOO SHI HAN', 'ABF 3023');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classesID` int(11) NOT NULL,
  `traID` int(11) DEFAULT NULL,
  `classesDate` date DEFAULT NULL,
  `classesTime` time DEFAULT NULL,
  `classesType` varchar(255) DEFAULT NULL,
  `classesStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classesID`, `traID`, `classesDate`, `classesTime`, `classesType`, `classesStatus`) VALUES
(1, 5, '2015-12-09', '14:00:00', 'Theory', 'active'),
(2, 5, '2015-12-09', '10:00:00', 'Theory', 'inactive'),
(3, 4, '2015-12-10', '11:00:00', 'Theory', 'active'),
(4, 4, '2015-12-09', '10:00:00', 'Theory', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `ID` int(200) NOT NULL,
  `Cond` varchar(200) NOT NULL,
  `Sol` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Timefrom` time(6) NOT NULL,
  `Timeto` time(6) NOT NULL,
  `Workshop` text NOT NULL,
  `Cost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`ID`, `Cond`, `Sol`, `Date`, `Timefrom`, `Timeto`, `Workshop`, `Cost`) VALUES
(1, 'Wiper is broken.', 'Fix.', '2015-12-09', '06:00:00.000000', '10:58:00.000000', 'City TyresJalan Beserah 27899 Kuantan', '101.96'),
(2, 'Car seat is broken.', 'New seat was installed.', '2015-12-16', '12:00:00.000000', '15:00:00.000000', 'Jiang Auto and Accesories ,Jalan Duta ,25444, Kuantan', '350.03'),
(3, 'Front mirror breaks.', 'Fix and install new front side mirrors.', '2015-12-31', '15:56:00.000000', '17:53:00.000000', 'City Tyres,Jalan Beserah 27899 Kuantan', '230.50');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `paymentDate` varchar(100) NOT NULL,
  `proof` varchar(200) NOT NULL,
  `totalAmt` decimal(10,2) NOT NULL,
  `studID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registercar`
--

CREATE TABLE `registercar` (
  `carID` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Plate` varchar(200) NOT NULL,
  `Brand` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registercar`
--

INSERT INTO `registercar` (`carID`, `Name`, `Plate`, `Brand`, `Status`) VALUES
(1, 'MyVi', 'JBH 2245', 'Perodua', 'New'),
(2, 'Viva', 'ABF 3023', 'Proton', 'Used');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resultID` int(11) NOT NULL,
  `resultClass` int(11) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `studID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`resultID`, `resultClass`, `grade`, `studID`) VALUES
(1, 4, 'Pass', 3);

-- --------------------------------------------------------

--
-- Table structure for table `studattendance`
--

CREATE TABLE `studattendance` (
  `studAttendanceID` int(11) NOT NULL,
  `studAttendanceStatus` enum('Attend','Absent') DEFAULT 'Absent',
  `studID` varchar(255) NOT NULL,
  `classID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studattendance`
--

INSERT INTO `studattendance` (`studAttendanceID`, `studAttendanceStatus`, `studID`, `classID`) VALUES
(1, '', '1', 0),
(2, '', '2', 0),
(3, '', '3', 0),
(4, 'Attend', '3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `studentListID` int(11) NOT NULL,
  `classesID` int(11) DEFAULT NULL,
  `studID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`studentListID`, `classesID`, `studID`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 4, '3');

-- --------------------------------------------------------

--
-- Table structure for table `studprofile`
--

CREATE TABLE `studprofile` (
  `studID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `studName` varchar(255) NOT NULL,
  `studIC` varchar(255) NOT NULL,
  `studContactNo` varchar(255) NOT NULL,
  `studEmail` varchar(255) NOT NULL,
  `studDOB` date NOT NULL,
  `studAdd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studprofile`
--

INSERT INTO `studprofile` (`studID`, `userID`, `studName`, `studIC`, `studContactNo`, `studEmail`, `studDOB`, `studAdd`) VALUES
(1, 2, 'LEE XIN YEE', '901012016268', '0108806124', 'xinyee@hotmail.com', '1990-10-12', '123,TAMAN BATU,25000 KUANTAN, MALAYSIA'),
(2, 3, 'CHEY WEI LIN', '910425016968', '0118907654', 'weilin@gmail.com', '1991-04-25', '298, KAMPUNG BARU BERSERAH, 25000 KUANTAN, MALAYSIA'),
(3, 6, 'MUHAMAD AFIQ BIN ABU', '900608036867', '60108796512', 'afiq@hotmail.com', '1990-06-08', '99,KAMOUNG BARU INDAH, 25000 KUANTAN, PAHANG');

-- --------------------------------------------------------

--
-- Table structure for table `studprogress`
--

CREATE TABLE `studprogress` (
  `studProgressID` int(11) NOT NULL,
  `studProgressStatus` varchar(255) NOT NULL,
  `studID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studprogress`
--

INSERT INTO `studprogress` (`studProgressID`, `studProgressStatus`, `studID`) VALUES
(1, 'Pending', '1'),
(2, 'Pending', '2'),
(3, 'Pending', '3');

-- --------------------------------------------------------

--
-- Table structure for table `traattendance`
--

CREATE TABLE `traattendance` (
  `attendanceID` int(11) NOT NULL,
  `classesID` int(11) NOT NULL,
  `attendanceStatus` varchar(255) NOT NULL,
  `checkIn` time DEFAULT NULL,
  `checkOut` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traattendance`
--

INSERT INTO `traattendance` (`attendanceID`, `classesID`, `attendanceStatus`, `checkIn`, `checkOut`) VALUES
(1, 1, '', NULL, NULL),
(2, 2, '', NULL, NULL),
(3, 3, '', NULL, NULL),
(4, 4, 'Completed', '09:50:00', '12:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `traID` int(11) NOT NULL,
  `traName` varchar(255) NOT NULL,
  `traIC` varchar(20) NOT NULL,
  `intructorLicense` varchar(20) NOT NULL,
  `traAddress` varchar(255) NOT NULL,
  `traContactNo` varchar(20) NOT NULL,
  `traEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`traID`, `traName`, `traIC`, `intructorLicense`, `traAddress`, `traContactNo`, `traEmail`) VALUES
(4, 'NUR SITI BINTI ALI', '901212040898', 'AB 675678', '98, kampung baru berserah, 25000 Kuantan, Malaysia', '0197422897', 'siti_1990@hotmail.com'),
(5, 'KOO SHI HAN', '980912076067', 'AB 8898645', '78, taman batu, 25000 Kuantan, Malaysia', '01798845298', 'koo@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `traprogress`
--

CREATE TABLE `traprogress` (
  `progressID` int(11) NOT NULL,
  `assignID` int(11) NOT NULL,
  `traID` int(11) NOT NULL,
  `timeFrom` time NOT NULL,
  `timeTo` time NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('student','admin','trainer') NOT NULL DEFAULT 'student'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `role`) VALUES
(1, 'jesse', '3327a2154aa1900fa110ae3d20d27d051ba719ead0396f1a23d6865b2677ed4a', 'admin'),
(2, 'LEEXINYEE', '249433bcecf38fae4b48fb58e85cefed15dcd3165191cf269b1f8d24108d037b', 'student'),
(3, 'CHEYWEILIN', '6be7a72cbc820f564ef491276c7359ef276df6e95c2fb2885cd326a401fa81ac', 'student'),
(4, 'NUR SITI BINTI ALI', '10b53f149c9176cf7042c30fa37907353e31e6c6e902c5f24db1383a38a21323', 'trainer'),
(5, 'KOO SHI HAN', '1ace209b2e07668d34f9b97419a326d6cbd506cc1a96297485820f15ddc83953', 'trainer'),
(6, 'MUHAMADAFIQBINABU', '385fd17317af5d80773b6929f5824c8ca64aa583704b8bcb127a7259e38ca101', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assignID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classesID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `registercar`
--
ALTER TABLE `registercar`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultID`);

--
-- Indexes for table `studattendance`
--
ALTER TABLE `studattendance`
  ADD PRIMARY KEY (`studAttendanceID`),
  ADD UNIQUE KEY `studAttendanceID` (`studAttendanceID`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`studentListID`);

--
-- Indexes for table `studprofile`
--
ALTER TABLE `studprofile`
  ADD PRIMARY KEY (`studID`);

--
-- Indexes for table `studprogress`
--
ALTER TABLE `studprogress`
  ADD PRIMARY KEY (`studProgressID`),
  ADD UNIQUE KEY `studProgressID` (`studProgressID`);

--
-- Indexes for table `traattendance`
--
ALTER TABLE `traattendance`
  ADD PRIMARY KEY (`attendanceID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`traID`);

--
-- Indexes for table `traprogress`
--
ALTER TABLE `traprogress`
  ADD PRIMARY KEY (`progressID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assignID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registercar`
--
ALTER TABLE `registercar`
  MODIFY `carID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studattendance`
--
ALTER TABLE `studattendance`
  MODIFY `studAttendanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `studentListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studprofile`
--
ALTER TABLE `studprofile`
  MODIFY `studID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studprogress`
--
ALTER TABLE `studprogress`
  MODIFY `studProgressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `traattendance`
--
ALTER TABLE `traattendance`
  MODIFY `attendanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `traprogress`
--
ALTER TABLE `traprogress`
  MODIFY `progressID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

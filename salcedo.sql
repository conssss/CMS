-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 05:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salcedo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `t1` varchar(100) NOT NULL,
  `d1` varchar(1000) NOT NULL,
  `t2` varchar(100) NOT NULL,
  `d2` varchar(1000) NOT NULL,
  `t3` varchar(100) NOT NULL,
  `d3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `picture`, `head`, `body`, `t1`, `d1`, `t2`, `d2`, `t3`, `d3`) VALUES
(1, 'hall.jpg', 'ABOUT SALCEDO', 'This is a content management system for Barangay Salcedo San Mnuel Tarlac. Contents that were use to complete this system is given and supported by official of the barangay. This content management is dedicated for the users of the barangay andalso for the users who wants to have idea about the barangay, news and other information will be relayed to you with this system, thank you!', 'BARANGAY PROFILE', 'Salcedo is a barangay in the municipality of San Manuel. Its population as determined by the 2021 Census was 3,157. This represented 9.28% of the total population of San Manuel. The town of San Manuel is a typically rural community located at the northernmost horn of the Province of Tarlac. The population of Salcedo grew from 1,659 in 1990 to 2,420 in 2020, an increase of 761 people over the course of 30 years.', 'VISSION', 'A strong and progressive Barangay of Salcedo where socio-economic activities are anchored on the empowerment and discipline of the people, impassioned for peace; Godliness, good like and education; alongside with enhancement of commercial, agricultural and industrial developments; while nurturing a healthy environment; and, utilizing judiciously its hard-earned resources.', 'MISSION', 'We commit to perform better duties and responsibilities to transform Salcedo into a future-ready barangay through sustained social, economic and environmental programs that shall promote and sustain moral, health, education and peace; alongside with modernizing agriculture and creating commercial activities that will bring real progress and quality life of the people..');

-- --------------------------------------------------------

--
-- Table structure for table `admincredential`
--

CREATE TABLE `admincredential` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincredential`
--

INSERT INTO `admincredential` (`id`, `username`, `code`) VALUES
(1, 'connymartin', '123456'),
(2, 'jimin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(100) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `headhome` varchar(100) NOT NULL,
  `descriptionhome` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo`, `headhome`, `descriptionhome`) VALUES
(56, 'logo.png', 'Welcome to Barangay Salcedo!', 'Salcedo is a barangay in the municipality of San Manuel. Its population as determined by the 2021 Census was 3,157. This represented 9.28% of the total population of San Manuel. The town of San Manuel is a typically rural community located at the northernmost horn of the Province of Tarlac. The population of Salcedo grew from 1,659 in 1990 to 2,420 in 2020, an increase of 761 people over the course of 30 years.');

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `id` int(100) NOT NULL,
  `pictureleader` varchar(50) NOT NULL,
  `headerleader` varchar(100) NOT NULL,
  `titleleader` varchar(100) NOT NULL,
  `descriptiontitle` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `pictureleader`, `headerleader`, `titleleader`, `descriptiontitle`) VALUES
(13, 'cap.png', 'Leaders', 'Barangay Salcedo', 'Douglas Madayag Torres (born May 2, 1960) is a Filipino politician serving as the Barangay Captain of Barangay Salcedo, San Manuel, Tarlac. He previously served as a barangay kagawad of Salcedo for 11 years and now as a Barangay Captain for 3 years and up to the present time. He has a husband to Mrs. Evelyn Torres. they are both residents and have been loyal to Barangay Salcedo for how many years. Being a Brangay Captain is nnot easy as we know because they perform many official government duties, and execute minor judicial powers as part of the Barangay Justice System, such as settling disputes between neighbors. Viewed as village elders, they also work informally with a number of organizations and they are elected for three-year terms.'),
(14, 'mayorr.jpg', 'Leaders', 'Municipality of San Manuel', 'Doña Cresencia \"Donya\" Reyes Tesoro (born April 5, 1992) is a Filipina politician serving as the mayor of San Manuel, Tarlac since 2019. She previously served as the municipality vice mayor from 2016 to 2019 and was a councilor from 2013 to 2016. Before she became mayor, she served as a Municipal Councilor from 2013 to 2016 and Municipal Vice Mayor from 2016 to 2019 of San Manuel.She also served as the Executive Vice President of the Lady Local Legislators League (4L) of the Philippines from 2016 to 2019.She made it to the list of the \"Millenial Mayors\" of Mega Manila when she was elected in the 2019 national election and made it to People Asia Magazine’s Women of Style and Substance for the year 2020.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `picture`, `header`, `title`, `description`) VALUES
(6, 'center2.jpg', 'News', 'Barangay Salcedo Health Center', 'This health center was made year 2021 specifically for the residents of the barangay. The officials pushes this for the barangays benefit, before having this a lot of problem and struggles was faced by the barangay officials. They brainstorm for this ideas right before they were all elected. They want the barangay to have its own health center for the residents to have near and wide are for check up or consultation whenever nurses from the town will visit.'),
(7, 'court.jpg', 'News', 'Barangay Salcedo Covered Court', 'This covered court was made also in year 2021. Funds from this was mostly donated by Mr. Manny Paquiao during the pandemic.  This was made for the residents of barangay salcedo and other barangay who wants to play sports like basketball and volleyball. This court gives a lot of insipirations to the youths of the barangay. They become more sporty because they have a comfortable place to play it.'),
(9, 'hall.jpg', 'News', 'New Barangay Hall', 'This Barnagay Hall was created last year 2021 during pandemic. All officials are now having their rotation duty at this new barangay hall. You can found them here near also the old barangay hall. All cases , problem and meeting have been happening here. Every resident is welcome and can come to this new barangay hall.'),
(10, 'church.jpg', 'News', 'On Going Building for Barangay Church', 'This church is open for all, they started building it year 2020 and up to now. It is still on-going because the funds that were used to build the church are from the residents who voluntarily wants to donate. Slowly a lot of residents are willing to give a donation so they still continue to build the church. Theofficials and other staffs of the barangay are giving their full help in order to finish this facility for the benefits f everyone.'),
(11, 'IMG20220327153214.jpg', 'News', 'Multi-Purpose Hall', 'This multi-purpose hall was created also year 2021, with the decision of the barangay officials. This is use for meetings, as day care center, as event place, meeting place and more. It is created for the residents to be more comfortable when looking for a space for their reasonable events or gatherings. It is a venue that is open for all with the approval of the barangay officials for security purposes.');

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE `official` (
  `id` int(100) NOT NULL,
  `captain` varchar(100) NOT NULL,
  `coun1` varchar(100) NOT NULL,
  `coun2` varchar(100) NOT NULL,
  `coun3` varchar(100) NOT NULL,
  `coun4` varchar(100) NOT NULL,
  `coun5` varchar(100) NOT NULL,
  `coun6` varchar(100) NOT NULL,
  `coun7` varchar(100) NOT NULL,
  `sk` varchar(100) NOT NULL,
  `treasurer` varchar(100) NOT NULL,
  `secretary` varchar(100) NOT NULL,
  `captainname` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `name4` varchar(100) NOT NULL,
  `name5` varchar(100) NOT NULL,
  `name6` varchar(100) NOT NULL,
  `name7` varchar(100) NOT NULL,
  `skname` varchar(100) NOT NULL,
  `treasname` varchar(100) NOT NULL,
  `secname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `official`
--

INSERT INTO `official` (`id`, `captain`, `coun1`, `coun2`, `coun3`, `coun4`, `coun5`, `coun6`, `coun7`, `sk`, `treasurer`, `secretary`, `captainname`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `skname`, `treasname`, `secname`) VALUES
(9, 'cap.png', '1k.png', '2k.png', '3k.png', '4k.png', '5k.png', '6k.png', '7k.png', 'sk.png', 'tres.png', 'sec.png', 'Mr. Douglas Torres', 'Mr. Norlito Tabugan', 'Mr. Diosdado Martin', 'Mr. Lodrigo Jandoc', 'Mr. Ramil Tabugan', 'Mr. Ruben Alberto', 'Mr. Manuel Castillo', 'Mr. Ernesto Torres Jr.', 'Mr. Jerico Tayoan', 'Mr. Benjie Mamaril', 'Mr. Severino Jandoc Jr.');

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(100) NOT NULL,
  `household` varchar(100) NOT NULL,
  `population` varchar(100) NOT NULL,
  `voter` varchar(100) NOT NULL,
  `vaccinated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id`, `household`, `population`, `voter`, `vaccinated`) VALUES
(4, '746', '3,157', '2, 679', '2, 526');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincredential`
--
ALTER TABLE `admincredential`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official`
--
ALTER TABLE `official`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admincredential`
--
ALTER TABLE `admincredential`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `official`
--
ALTER TABLE `official`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

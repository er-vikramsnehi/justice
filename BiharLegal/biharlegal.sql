-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 11:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biharlegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcompany`
--

CREATE TABLE `aboutcompany` (
  `about_id` int(11) NOT NULL,
  `about_name` text NOT NULL,
  `about_name2` text NOT NULL,
  `about_name3` text NOT NULL,
  `about_name4` text NOT NULL,
  `about_description` text NOT NULL,
  `about_image` text NOT NULL,
  `about_image2` text NOT NULL,
  `about_image3` text NOT NULL,
  `about_image4` text NOT NULL,
  `about_img_courtname` text NOT NULL,
  `about_img2_courtname` text NOT NULL,
  `about_img3_courtname` text NOT NULL,
  `about_img4_courtname` text NOT NULL,
  `position_img` text NOT NULL,
  `position_img2` text NOT NULL,
  `position_img3` text NOT NULL,
  `position_img4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutcompany`
--

INSERT INTO `aboutcompany` (`about_id`, `about_name`, `about_name2`, `about_name3`, `about_name4`, `about_description`, `about_image`, `about_image2`, `about_image3`, `about_image4`, `about_img_courtname`, `about_img2_courtname`, `about_img3_courtname`, `about_img4_courtname`, `position_img`, `position_img2`, `position_img3`, `position_img4`) VALUES
(1, 'Khan', '', '', '', '', 'pnKahDwOUPG0pju8nDlq8A==.jpg', '6GooSmaQkm+VzbdiN4TXww==.jpg', '9Fb9M4o3yAKCuptvLGcE3A==.jpg', 'QU9TWXvS6bSmENEF9gfqg==.jpg', 'Patna High Court', '', '', '', 'Jauge', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `account_email` text NOT NULL,
  `account_eemail` text NOT NULL,
  `account_number` varchar(15) NOT NULL,
  `account_address` text NOT NULL,
  `account_position` text NOT NULL,
  `account_startdate` text NOT NULL,
  `account_salary` text NOT NULL,
  `account_image` text NOT NULL,
  `account_cover` text NOT NULL,
  `account_dob` text NOT NULL,
  `account_state` varchar(25) NOT NULL,
  `account_city` text NOT NULL,
  `account_zip` text NOT NULL,
  `account_gridCheck` text NOT NULL,
  `account_pwd` text NOT NULL,
  `account_epwd` text NOT NULL,
  `account_gender` text NOT NULL,
  `account_count` int(11) NOT NULL,
  `account_active` binary(1) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_email`, `account_eemail`, `account_number`, `account_address`, `account_position`, `account_startdate`, `account_salary`, `account_image`, `account_cover`, `account_dob`, `account_state`, `account_city`, `account_zip`, `account_gridCheck`, `account_pwd`, `account_epwd`, `account_gender`, `account_count`, `account_active`, `facebook`, `twitter`, `instagram`) VALUES
(266, 'Snehi Seva', 'snehivikram1@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(267, 'Snehi Seva2', 'snehivikram12@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(268, 'Snehi Seva2', 'snehivikram123@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(269, 'Snehi Seva24', 'snehivikram1234@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(270, 'Snehi Seva245', 'snehivikram12345@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(271, 'Snehi Seva2456', 'snehivikram123456@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(272, 'Snehi Seva24', 'snehivikram1234@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(273, 'Snehi Seva245', 'snehivikram12345@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(274, 'Snehi Seva2456', 'snehivikram123456@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(275, 'Snehi Seva2', 'snehivikram12@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(276, 'Snehi Seva2', 'snehivikram123@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(277, 'Snehi Seva24', 'snehivikram1234@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(278, 'Snehi Seva245', 'snehivikram12345@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(279, 'Snehi Seva2456', 'snehivikram123456@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(280, 'Snehi Seva24', 'snehivikram1234@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(281, 'Snehi Seva245', 'snehivikram12345@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico'),
(282, 'Snehi Seva2456', 'snehivikram123456@gmail.com', '27f18e1fe08d3247ca7afb279630952d', '7909025861', 'Vikash Marg', 'Nokar', '', '12,999', 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg', 'https://lh3.googleusercontent.com/Mm7orXXcTz6sm66BzUscZqb06-wBPNx2uA5_MDvu61ApaVpnT3ABnX45rBp7KbZmZaCZq1063H8=s630-fcrop64=1,00000000ffffffff', '2018-04-22', 'Bihar', 'New delhi', '119921', 'on', '112345', '2b9cdebb444dbb2fe8380860104f0573', 'male', 1, 0x31, 'https://facebook.com/snehico', 'https://facebook.com/snehico', 'https://facebook.com/snehico');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_count` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_eemail` text NOT NULL,
  `admin_address` text NOT NULL,
  `admin_number` text NOT NULL,
  `admin_dob` text NOT NULL,
  `admin_city` text NOT NULL,
  `admin_state` text NOT NULL,
  `admin_zip` text NOT NULL,
  `admin_startdate` text NOT NULL,
  `admin_gender` text NOT NULL,
  `admin_image` text NOT NULL,
  `admin_position` text NOT NULL,
  `admin_pwd` text NOT NULL,
  `admin_epwd` text NOT NULL,
  `admin_gridCheck` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_count`, `admin_name`, `admin_email`, `admin_eemail`, `admin_address`, `admin_number`, `admin_dob`, `admin_city`, `admin_state`, `admin_zip`, `admin_startdate`, `admin_gender`, `admin_image`, `admin_position`, `admin_pwd`, `admin_epwd`, `admin_gridCheck`) VALUES
(5, '5', 'Maruti Nandan', 'i@gmail.com', 'b39d61c8b3ecf8b2e9b7336a3c0a67af', 'Vikash Marg', '7909025861', '2018-04-21', 'New delhi', 'Bihar', '119921', '2018-04-09', 'male', 'VcHXWmzcWkJfzupGbA7qerlfgfpzJuoBPMEi+tt+mzc=5.jpg', '', '1234567', 'fcea920f7412b5da7be0cf42b8c93759', 'on'),
(23, '23', 'Snehi bhawan', 'marutid@gmail.com', 'eaaf76f923abca5069dfdb6c51b014c6', 'Koshi Coloney', '8566903988', '2018-04-06', 'New delhi', 'Bihar', '110092', '2018-04-09', 'male', 'upload/I5J3guJLcjhHheqrNiudSQ==23.jpg', '', '123', '202cb962ac59075b964b07152d234b70', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `areaofpracticenav`
--

CREATE TABLE `areaofpracticenav` (
  `nav_id` int(11) NOT NULL,
  `nav_name` text NOT NULL,
  `nav_url` text NOT NULL,
  `nav_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areaofpracticenav`
--

INSERT INTO `areaofpracticenav` (`nav_id`, `nav_name`, `nav_url`, `nav_page`) VALUES
(1, 'Snehi bhawan', '', ''),
(2, 'Gun Gun', 'https://snehi.pro', ''),
(3, 'My Are is good', 'http://hello.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `casenav`
--

CREATE TABLE `casenav` (
  `nav_id` int(11) NOT NULL,
  `nav_name` text NOT NULL,
  `nav_url` text NOT NULL,
  `nav_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casenav`
--

INSERT INTO `casenav` (`nav_id`, `nav_name`, `nav_url`, `nav_page`) VALUES
(2, 'Ali Gardh', '', ''),
(3, 'Snehi Company', '', ''),
(4, 'Patna High Court', '', ''),
(5, 'HELLO GUDDU', 'http://yashlawfirm.in/', '');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` int(11) NOT NULL,
  `color_thirdside` int(11) NOT NULL,
  `color:_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_mobile` text NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_message`) VALUES
(1, 'Vikram Kumar Snehi', 'vikram.snehi@yahoo.com', '8566903988', 'aasas'),
(2, 'Vikram Kumar Snehi', 'vikram.snehi@yahoo.com', '8566903988', 'aasas'),
(3, 'Maruti Nandan', 'maruti@gmail.com', '7909025861', 'asasasas'),
(4, 'Gol Mal 3', 'ajayyadav@yahoo.com', '7909025861', 'nnn');

-- --------------------------------------------------------

--
-- Table structure for table `formreg`
--

CREATE TABLE `formreg` (
  `formreg_id` int(11) NOT NULL,
  `formreg_file` text NOT NULL,
  `formreg_name` text NOT NULL,
  `formreg_username` text NOT NULL,
  `formreg_email` text NOT NULL,
  `formreg_mobile` text NOT NULL,
  `formreg_message` text NOT NULL,
  `formreg_gender` text NOT NULL,
  `formreg_user_count` text NOT NULL,
  `formreg_dob` text NOT NULL,
  `formreg_type` text NOT NULL,
  `process` text NOT NULL,
  `formreg_count` int(11) NOT NULL,
  `userimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formreg`
--

INSERT INTO `formreg` (`formreg_id`, `formreg_file`, `formreg_name`, `formreg_username`, `formreg_email`, `formreg_mobile`, `formreg_message`, `formreg_gender`, `formreg_user_count`, `formreg_dob`, `formreg_type`, `process`, `formreg_count`, `userimage`) VALUES
(1, 'gMZTh9WWpXOjCa0ftNScr70OuDg4HievO3SsRHq7EKc=1.pdf', 'Aasifa Rape Case', '', 'snehivikram1@gmail.com', '7909025861', 'Hello SIt', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 1, ''),
(2, 'gMZTh9WWpXOjCa0ftNScr70OuDg4HievO3SsRHq7EKc=1.pdf', 'Aasifa Rape Case', '', 'snehivikram1@gmail.com', '7909025861', 'Hello SIt', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 2, ''),
(3, 'gMZTh9WWpXOjCa0ftNScr6Fc+VGSalAOYZtPWaY+chM=1.pdf', 'Muslim Rape Case', '', 'snehivikram1@gmail.com', '7909025861', 'Muslim Rape Case', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 3, ''),
(4, 'wOneWctHp9sDFnqq6P1QH468VTpQMyKiyo8k1XgCBBk=1.pdf', 'Aasifa Rape Case and Religi', '', 'snehivikram2@gmail.com', '7909025861', 'aas', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 4, ''),
(5, 'gMZTh9WWpXOjCa0ftNScr6Fc+VGSalAOYZtPWaY+chM=5.pdf', 'Murder', 'Snehi Seva', 'snehivikram1@gmail.com', '7909025861', 'Muslimes', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 5, ''),
(6, 'gMZTh9WWpXOjCa0ftNScr6Fc+VGSalAOYZtPWaY+chM=6.pdf', 'CM Bihar', 'Snehi Seva', 'snehivikram1@gmail.com', '7909025861', 'asasas', 'male', '1', '2018-04-22', 'Case Legel', 'Pending', 6, 'upload/XtNvXh1LcaOLn+l5pmlw0jPPyFWhT840QNsP5CloO30Om6+7j9dn3jOI+3ad48XR2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `honblejustice`
--

CREATE TABLE `honblejustice` (
  `nav_id` int(11) NOT NULL,
  `nav_name` text NOT NULL,
  `nav_url` text NOT NULL,
  `nav_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `honblejustice`
--

INSERT INTO `honblejustice` (`nav_id`, `nav_name`, `nav_url`, `nav_page`) VALUES
(14, 'Vikram', 'https://snehi.pro', 'Pk+4uBEHYpvzsCiBMzzPIA==499643254.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `map_id` int(11) NOT NULL,
  `map_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `mid` int(11) NOT NULL,
  `murl` text NOT NULL,
  `mname` varchar(70) NOT NULL,
  `pages` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`mid`, `murl`, `mname`, `pages`, `type`) VALUES
(1, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', 'Font Awesome ICON', 'all', ''),
(2, 'https://www.w3schools.com/w3css/4/w3.css', 'w3css', 'all', ''),
(3, 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 'bootstrap', 'all', ''),
(4, 'https://fonts.googleapis.com/icon?family=Material+Icons', 'Google ICON', 'all', ''),
(5, 'Design/css/animate.min.css', 'Animation MIN CSS', 'all', ''),
(6, 'Design/css/prettyPhoto.css', 'Pretty Photo', 'all', ''),
(7, 'Design/css/mains.css', 'Main CSS', 'all', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_name` text NOT NULL,
  `notice_url` text NOT NULL,
  `notice_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_name`, `notice_url`, `notice_date`) VALUES
(2, 'Kamyab Insan', 'https://hindi.com', 'https://hindi.com'),
(3, 'Vikram Snehi', 'http://gyanbharti.com', 'http://gyanbharti.com'),
(4, 'My name is King', 'https://gyanipandit.com', '2018-04-11'),
(5, 'Gyan Sagar', 'https://sagar.com', '2018-04-11'),
(6, 'Vikram SNehi ki Sagai', 'http://snehi.pro', '2018-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `otherlinks`
--

CREATE TABLE `otherlinks` (
  `id` int(11) NOT NULL,
  `olinks` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherlinks`
--

INSERT INTO `otherlinks` (`id`, `olinks`, `url`) VALUES
(1, 'Order & Judgements', ''),
(2, 'Civil Court Advocate', ''),
(3, 'Bare Act', ''),
(4, 'Senior Advocate Patna High Court', ''),
(5, 'Vakalatnama', ''),
(6, 'Patna High Court', ''),
(7, 'Civil Court', ''),
(8, 'Blt', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` text NOT NULL,
  `post_user` text NOT NULL,
  `post_article` text NOT NULL,
  `post_time` text NOT NULL,
  `post_count` text NOT NULL,
  `post_image` text NOT NULL,
  `post_user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_user`, `post_article`, `post_time`, `post_count`, `post_image`, `post_user_image`) VALUES
(1, 'Vikram SNehi', 'sneh@gmail.com', 'Hello Every One', '12 Pm', '2', 'upload/B3yUsJiD019WyFUMKRrs0ynbVP1wKpQS2UXqDUTbULg=12.jpg', 'upload/B3yUsJiD019WyFUMKRrs0ynbVP1wKpQS2UXqDUTbULg=12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scripts`
--

CREATE TABLE `scripts` (
  `sid` int(11) NOT NULL,
  `surl` text NOT NULL,
  `integrity` text NOT NULL,
  `crossorigin` text NOT NULL,
  `sname` text NOT NULL,
  `pages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scripts`
--

INSERT INTO `scripts` (`sid`, `surl`, `integrity`, `crossorigin`, `sname`, `pages`) VALUES
(1, 'https://code.jquery.com/jquery-3.2.1.slim.min.js', 'sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN', 'anonymous', 'JQuery', 'all'),
(2, 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', 'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q', 'anonymous', 'Bootstrap Popper', 'all'),
(3, 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 'sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl', 'anonymous', 'Bootstrap JS', 'all'),
(4, '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f73a27f35b8928', 'none', 'none', 'Add This', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `servicenav`
--

CREATE TABLE `servicenav` (
  `nav_id` int(11) NOT NULL,
  `nav_name` text NOT NULL,
  `nav_url` text NOT NULL,
  `nav_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicenav`
--

INSERT INTO `servicenav` (`nav_id`, `nav_name`, `nav_url`, `nav_page`) VALUES
(1, 'Case Legel', 'http://hello.com', ''),
(2, 'Blowjob Service', 'http://gyana.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutcompany`
--
ALTER TABLE `aboutcompany`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `areaofpracticenav`
--
ALTER TABLE `areaofpracticenav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `casenav`
--
ALTER TABLE `casenav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `formreg`
--
ALTER TABLE `formreg`
  ADD PRIMARY KEY (`formreg_id`);

--
-- Indexes for table `honblejustice`
--
ALTER TABLE `honblejustice`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `otherlinks`
--
ALTER TABLE `otherlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `servicenav`
--
ALTER TABLE `servicenav`
  ADD PRIMARY KEY (`nav_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutcompany`
--
ALTER TABLE `aboutcompany`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `areaofpracticenav`
--
ALTER TABLE `areaofpracticenav`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `casenav`
--
ALTER TABLE `casenav`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `formreg`
--
ALTER TABLE `formreg`
  MODIFY `formreg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `honblejustice`
--
ALTER TABLE `honblejustice`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otherlinks`
--
ALTER TABLE `otherlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicenav`
--
ALTER TABLE `servicenav`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

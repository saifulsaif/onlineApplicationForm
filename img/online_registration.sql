-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 06:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
`id` int(11) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college`) VALUES
(6, 'Marks Medical College'),
(7, 'Dhaka Medical College'),
(8, 'Comilla Medical College'),
(9, 'Sylhet Medical College');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `father_name` varchar(60) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `10th_pass` varchar(11) NOT NULL,
  `12th_pass` varchar(11) NOT NULL,
  `physics` varchar(11) NOT NULL,
  `chemistry` varchar(11) NOT NULL,
  `biology` varchar(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `father_name`, `mother_name`, `number`, `email`, `address`, `10th_pass`, `12th_pass`, `physics`, `chemistry`, `biology`, `college`, `note`, `file`) VALUES
(1, 'Roman', 'Doe', '', '', '', 'john@example.com', '', '', '', '', '', '', '', '', ''),
(2, 'Roman', 'Islam', 'dsfsd', 'sdfsda', '33', 'saifulsaif5854@gmail.com', 'fsdaf', '', '', '3', '3', '', '', '', '16114818_594286330771138_7298000415460780328_n.jpg'),
(3, 'saiful', 'saif', 'shuso miah', 'asma begum', '093420333243', 'saifulsaif5854@gmail.com', 'panthapth', '2011', '2013', '77', '77', '', 'Diabetic Association Medical College', 'testing', '01759676488.jpg'),
(4, 'Roman', 'Islam', 'dsfs', 'sdfsda', '33', 'saifulsaif5854@gmail.com', 'fsadf', '2016', '2011', '3', '3', '3', 'Marks Medical College', 'fdsfa', '500_F_226442355_IA9uiNbyD611R48kWrFVj8j671h70e98.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 11:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fedha`
--

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

DROP TABLE IF EXISTS `contributions`;
CREATE TABLE IF NOT EXISTS `contributions` (
  `contribution_id` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_shares` int(11) NOT NULL,
  `contribution_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`contribution_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dividends`
--

DROP TABLE IF EXISTS `dividends`;
CREATE TABLE IF NOT EXISTS `dividends` (
  `dividend_id` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `personal_total` int(11) NOT NULL,
  `grouptotalshares` int(11) NOT NULL,
  `dividends` int(11) NOT NULL,
  `member_dividends` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`dividend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exits`
--

DROP TABLE IF EXISTS `exits`;
CREATE TABLE IF NOT EXISTS `exits` (
  `exit_id` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `notice_date` varchar(50) NOT NULL,
  `exit_date` varchar(50) NOT NULL,
  `has_loan` varchar(50) NOT NULL,
  `guaranteed_someone` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `approved` varchar(50) NOT NULL,
  `date_approved` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
CREATE TABLE IF NOT EXISTS `loans` (
  `loan_id` varchar(50) NOT NULL,
  `borrow_date` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `months_contributed` int(11) NOT NULL,
  `total_shares` int(11) NOT NULL,
  `loan_limit` int(11) NOT NULL,
  `borrow_amount` int(11) NOT NULL,
  `total_loan` int(11) NOT NULL,
  `installments` int(11) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_repayment`
--

DROP TABLE IF EXISTS `loan_repayment`;
CREATE TABLE IF NOT EXISTS `loan_repayment` (
  `repay_id` varchar(50) NOT NULL,
  `repay_date` varchar(50) NOT NULL,
  `repay_amount` int(11) NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `date_borrowed` varchar(50) NOT NULL,
  PRIMARY KEY (`repay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` varchar(50) NOT NULL,
  `names` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `registration_amount` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profits`
--

DROP TABLE IF EXISTS `profits`;
CREATE TABLE IF NOT EXISTS `profits` (
  `member_id` varchar(50) NOT NULL,
  `total_shares` int(11) NOT NULL,
  `total_borrowed` int(11) NOT NULL,
  `fixed_deposit_amount` int(11) NOT NULL,
  `fixed-deposit_revenue` int(11) NOT NULL,
  `group_profit` int(11) NOT NULL,
  `office_maintenance` int(11) NOT NULL,
  `total_dividends` int(11) NOT NULL,
  `member_share_dividends` int(11) NOT NULL,
  `dividend_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`dividend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

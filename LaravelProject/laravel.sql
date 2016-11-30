-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2016 at 03:09 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'laravel'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_users'
--

CREATE TABLE tbl_users (
  id int(8) unsigned NOT NULL AUTO_INCREMENT,
  fname varchar(100) NOT NULL,
  lname varchar(100) NOT NULL,
  email varchar(150) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_users'
--

INSERT INTO tbl_users (id, fname, lname, email) VALUES
(1, 'Robert', 'Haaf', 'rob@aol.com'),
(2, 'Joe', 'Blow', 'joe@aol.com'),
(3, 'Sally', 'Anderson', 'sally@aol.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

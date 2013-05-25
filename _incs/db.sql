-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2013 at 06:39 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term` text NOT NULL,
  `definition` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `words`
--

INSERT INTO `words` VALUES(1, 'fetch', 0);
INSERT INTO `words` VALUES(2, 'table', 0);
INSERT INTO `words` VALUES(3, 'shirt', 0);
INSERT INTO `words` VALUES(4, 'tooth', 0);
INSERT INTO `words` VALUES(5, 'car', 0);
INSERT INTO `words` VALUES(6, 'hand', 0);
INSERT INTO `words` VALUES(7, 'computer', 0);
INSERT INTO `words` VALUES(8, 'pokemon', 0);
INSERT INTO `words` VALUES(9, 'window', 0);
INSERT INTO `words` VALUES(10, 'light', 0);
INSERT INTO `words` VALUES(11, 'coffee', 0);
INSERT INTO `words` VALUES(12, 'eye', 0);
INSERT INTO `words` VALUES(13, 'patio', 0);
INSERT INTO `words` VALUES(14, 'key', 0);
INSERT INTO `words` VALUES(15, 'cup', 0);
INSERT INTO `words` VALUES(16, 'night', 0);
INSERT INTO `words` VALUES(17, 'tree', 0);
INSERT INTO `words` VALUES(18, 'bat', 0);
INSERT INTO `words` VALUES(19, 'city', 0);
INSERT INTO `words` VALUES(20, 'building', 0);
INSERT INTO `words` VALUES(21, 'branch', 0);
INSERT INTO `words` VALUES(22, 'stomp', 0);

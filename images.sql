-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 16, 2006 at 08:15 AM
-- Server version: 5.0.22
-- PHP Version: 5.1.4
-- 
-- Database: `test`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `images`
-- 

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `image_id` int(10) unsigned NOT NULL auto_increment,
  `filename` varchar(25) NOT NULL,
  `caption` varchar(120) NOT NULL,
  PRIMARY KEY  (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `images`
-- 

INSERT INTO `images` (`image_id`, `filename`, `caption`) VALUES (1, 'agobin.jpg', 'No comment'),
(2, 'bg.jpg', 'Clearance petit frere Dav'),
(3, 'ble.jpg', 'Petit frere Bless'),
(4, 'ste.jpg', 'Just taking some time out'),
(5, 'mum.jpg', 'My mum and sis'),
(6, 'stemalobs.jpg', 'Just perfect'),
(7, 'suzy.jpg', 'Could not be better'),
(8, 'sone.jpg', 'Taking a step towards a bright future'),
(9, 'eta.jpg', 'Mr. nice man '),
(10, 'friends.jpg', 'Tennis is fantastic. Is is not?? '),
(11, 'trip.jpg', 'At fakoship plaza'),
(12, 'bles.jpg', 'Black and white mode activated'),
(13, 'fet.jpg', 'FET level 200 students'),
(14, 'mel.jpg', 'Too good to be true'),
(15, 'elondo.jpg', 'Autumn leaves at Ryoanji temple, Kyoto'),
(16, 'nadesh.jpg', 'Two beauties'),
(17, 'k.jpg', 'My nice bro'),
(18, 'ndi.jpg', 'Sooo perfect'),
(19, 'me.jpg', 'Just a little of Biaka '),
(20, 'caro.jpg', 'Caro bright on the beat'),
(21, 'legend.jpg', 'Wow must be some imaginations'),
(22, 'dav.jpg', 'Dav and Sone'),
(23, 'esco.jpg', 'FET senior executives'),
(24, 'eu.jpg', 'Back in the day with my guy Bleck'),
(25, 'mos.jpg', 'Un Moss and wife'),
(26, 'chan.jpg', 'SOS on the beat'),
(27, 'and.jng', 'My android and I'),
(28, 'ene.jpg', 'At the fairy tales'),
(27, 'gur.jpg', 'Better than words'),
(28, 'ju.JPG', 'Ju, Betty n Bless'),
(29, 'house.jpg', 'Thinking big');
(29, 'yvone.JPG', 'On a very good day');

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 12:17 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `offermama`
--
CREATE DATABASE IF NOT EXISTS `offermama` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `offermama`;

-- --------------------------------------------------------

--
-- Table structure for table `business_info`
--

CREATE TABLE IF NOT EXISTS `business_info` (
  `b_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `category` varchar(20) NOT NULL,
  `recommend` int(11) NOT NULL,
  `unrecommend` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_info`
--

INSERT INTO `business_info` (`b_id`, `name`, `address`, `phone`, `category`, `recommend`, `unrecommend`) VALUES
('B123', 'Zucca Pizzaria', 'Peelamedu', '123123', 'restaurants', 60, 9),
('B124', 'Dominos', 'Gandhipuram', '3883921', 'restaurants', 41, 21),
('B125', 'Bantam Books', 'RS Puram', '123894', 'books', 48, 18);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `u_id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`u_id`, `post_id`) VALUES
('ram11233', 'B3905ramana.jpg'),
('ram11233', 'B3905ramana.jpg'),
('ram11233', 'B2618ramana.jpg'),
('easwar@gmail.com', 'B2618ramana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1421502657'),
(1, '1385995353'),
(1, '1386011064'),
(1, '1385995353'),
(1, '1386011064'),
(2, '1421770669');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef'),
(2, 'ram', 'ram.harry@gmail.com', '6c91285ab796529ae4dd59b197d7e5fd3d765ff8ab8c70e771d64a7ec9f565d8a8504d1102d50cdb9ba640c128aa996a98103a47fd32b3827ba98a3a888e1504', '5e2673a2a97eb65d57fd23f9a75c97f61554d24e04e33a36a48f8f3496f89769d42804089bdc5c75ffca712bd1a658356d5e2cdac5b9af521c9fd946da351ec8'),
(3, 'eashwar', 'eash@gmail.com', '7c901468bd067d55eee87919a1bbd89835d680fac2d9dda7b963ddfe0b392d913ea1bcf245e9c0ee1b73e2fe06191ac1b6a11be3668e3f6f20fb454b05ab0ca8', '664d5a28dcb7d061709f11c07db0db28ae1c536e8c232ea37cf3cbb1f893068ce19570005d676d63b9f7689e88c2e3f36135595781fd0ba74a13b6298604b04e'),
(4, 'karun', 'karun86@gmail.com', 'c9625c95f5532448608c833431f92a96cc3564ba9f01ede5bc0b38cf1c28c46acda688b0347f5e8d0a6314963d09b602ac219cf46760b35f9baf529ef438bfa5', 'a7859c0de56b78418a32eec2cf9637c4df2dd73e71e4191af8aa4af9b8fe229f58cac07ddaf1b9a3c8ce53de1e1c16c8ff24d3a2ba81feba8b09b1425cdcc65b'),
(5, 'karan', 'karan@gmail.com', '29cbe9e30b9e4c5eead511bbd980472d714f4001d22d7a95b51c036f0299073de03d5e41842ef2c0e95a011bb3729476b6f425b7eba539a0e12e559a61896a72', '3197c2b759f89ab39e0381b44b38b55915d27da020afd8b91d0ce5c7fea2f5492d65df5a23d43eb6adb7b0629b59b9897cca8f37d30d208837a38952e7fced57'),
(6, 'Easwar', 'easwar@gmail.com', '22950df9ecfbcf3185c00b7e683bfbad6c14fa1a67056c96e8dfcb55ed775932fd2df33035ad35baef246fdd0e3fc0bdda29f788755f8929b1d60113faf556c5', 'ab14ea6e954371b3ffd0c6a2f8566ac44716c1f1a6f4e1acbaab86ddaf399428f3d3f35601abd480483bff67090ccb9bbb886c946aa75aebd7922b2e5b3f077a');

-- --------------------------------------------------------

--
-- Table structure for table `postuser`
--

CREATE TABLE IF NOT EXISTS `postuser` (
  `userid` varchar(20) NOT NULL,
  `postid` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `imgname` varchar(100) NOT NULL,
  `target` varchar(25) NOT NULL DEFAULT 'all',
  `mrp` int(11) NOT NULL DEFAULT '0',
  `sp` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postuser`
--

INSERT INTO `postuser` (`userid`, `postid`, `content`, `imgname`, `target`, `mrp`, `sp`) VALUES
('ram11232', 'pu425210313081_495746867231633_994824115188258248_', 'offermama for sale', '10313081_495746867231633_994824115188258248_n.jpg', 'firstyr', 0, 0),
('ram11232', 'pu0914sticker,375x360.u1.png', 'Testing MRP and SP', 'sticker,375x360.u1.png', 'secondyr', 300, 150),
('ram11232', 'pu23364419786926_f5d0dae768_z.jpg', 'Third post, for checking link to home page', '4419786926_f5d0dae768_z.jpg', 'firstyr', 300, 200),
('ram11232', 'pu1320sticker,375x360.u1.png', 'first user post', 'sticker,375x360.u1.png', 'firstyr', 300, 200),
('ram11232', 'pu153010417658_997838836908889_3689837874638399560', 'Karan''s post', '10417658_997838836908889_3689837874638399560_n.jpg', 'thirdyr', 300, 100),
('5', 'pu50274419786926_f5d0dae768_z.jpg', 'First post to check userid', '4419786926_f5d0dae768_z.jpg', 'cycles', 200, 100),
('karan@gmail.com', 'pu56124419786926_f5d0dae768_z.jpg', 'Second post checking session', '4419786926_f5d0dae768_z.jpg', 'novels', 300, 100),
('karan@gmail.com', 'pu15274419786926_f5d0dae768_z.jpg', 'Karans next post to check the 140 characters. this one is going to be total bullshit so don''t even bother reading what is written here ok ..', '4419786926_f5d0dae768_z.jpg', 'novels', 0, 0),
('karan@gmail.com', 'pu01284419786926_f5d0dae768_z.jpg', 'just testing the post', '4419786926_f5d0dae768_z.jpg', 'novels', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `post_b`
--

CREATE TABLE IF NOT EXISTS `post_b` (
  `post_id` varchar(18) NOT NULL,
  `b_id` varchar(18) NOT NULL,
  `content` varchar(140) NOT NULL,
  `image` varchar(100) NOT NULL,
  `likes_count` int(11) NOT NULL DEFAULT '0',
  `category` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `area` varchar(20) NOT NULL,
  `mrp` int(11) NOT NULL DEFAULT '0',
  `sp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_b`
--

INSERT INTO `post_b` (`post_id`, `b_id`, `content`, `image`, `likes_count`, `category`, `time`, `area`, `mrp`, `sp`) VALUES
('B0511DSC01933_JPG_', 'B123', 'Firstpost', 'DSC01933_JPG_2112478f.jpg', 0, 'restaurants', '2015-01-21 11:18:28', 'peelamedu', 300, 200),
('B260310313081_4957', 'B123', 'Second ad', '10313081_495746867231633_994824115188258248_n.jpg', 2, 'books', '2015-01-21 11:18:21', 'peelamedu', 500, 200),
('B2618ramana.jpg', 'B123', 'lol', 'ramana.jpg', 2, 'restaurants', '2015-01-21 11:18:11', 'peelamedu', 299, 300),
('B3826DSC01933_JPG_', 'B123', 'I ll just type 10 characters and test this out', 'DSC01933_JPG_2112478f.jpg', 0, 'restaurants', '2015-01-21 08:48:54', 'rspuram', 200, 100),
('B3905ramana.jpg', 'B123', 'sdflakjfdklsjl', 'ramana.jpg', 1, 'restaurants', '2015-01-21 08:39:33', 'gandhipuram', 300, 200),
('B43344419786926_f5', 'B123', 'Now I am going to try to type in about 140 characters to check how it looks when all the characters are put down. ', '4419786926_f5d0dae768_z.jpg', 0, 'transport', '2015-01-21 08:49:01', 'peelamedu', 500, 400);

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE IF NOT EXISTS `recommend` (
  `u_id` varchar(20) NOT NULL,
  `b_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`u_id`, `b_id`) VALUES
('ram11233', 'B123'),
('karan@gmail.com', 'B123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` varchar(20) NOT NULL,
  `content` varchar(150) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `b_id` varchar(20) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `content`, `u_id`, `b_id`, `likes`, `time`) VALUES
('r3022', 'First review here', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:30:22'),
('r3057', 'Second post here', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:30:57'),
('r3140', 'Third try here', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:31:40'),
('r3258', 'Fourth try here man', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:32:58'),
('r3340', 'Ok got this right now. phew!', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:33:40'),
('r3451', 'Everything working fine now', 'karan@gmail.com', 'B123', 0, '2015-01-21 09:34:51'),
('r4946', 'Easwar''s first comment', 'easwar@gmail.com', 'B123', 0, '2015-01-21 09:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `unrecommend`
--

CREATE TABLE IF NOT EXISTS `unrecommend` (
  `u_id` varchar(20) NOT NULL,
  `b_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unrecommend`
--

INSERT INTO `unrecommend` (`u_id`, `b_id`) VALUES
('ram11233', 'B124');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `u_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `name`) VALUES
('ram11233', 'Ram'),
('ram11232', 'Easwar'),
('karan@gmail.com', 'Karan'),
('easwar@gmail.com', 'Easwar Aiyer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

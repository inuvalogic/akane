-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2015 at 10:07 PM
-- Server version: 5.6.22
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisnuhafid`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` enum('web','mobileapps','desktopapps') NOT NULL,
  `category` int(11) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `projectyear` year(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `url`, `type`, `category`, `description`, `picture`, `projectyear`) VALUES
(1, 'Sophistico', 'sophistico.co.id', 'web', 2, 'Technology Use: HTML, CSS3, Bootstrap, Native PHP, MySQL\r\nSummary\r\nOnline product catalog and simple order carting for CV. Sophistico that sell mostly women apparel.', 'sophistico.jpg', 2014),
(2, 'Mega Rent Car', 'megarentcar.com', 'web', 1, 'Technology Use: HTML, CSS3, PHP, MySQL, Code Igniter using MVC and active record database\r\nSummary\r\nA simple company profile website that provide information about Car Rental, pricing in detail, and more company info. This site is also a SEO Oriented Website', 'megarentcar.jpg', 2013),
(3, 'Shandy Rent Car', 'shandyrentcar.com', 'web', 1, 'Technology Use: HTML, CSS3, PHP, MySQL, Code Igniter using MVC and active record database\r\nSummary\r\nSame as Mega Rent Car but with improvement in design', 'shandyrentcar.jpg', 2014),
(4, 'Ichigo Online', 'ichigoonline.com', 'web', 3, 'Technology Use: HTML, CSS3, Javascript, jQuery, Self created MVC Framework system using PHP5 and MySQL\r\nSummary\r\nSmall business website, a simple ecommerce website and full custom business management.\r\n', 'ichigoonline.jpg', 2010),
(5, 'Dunia Kerja', 'duniakerja.co.id', 'web', 4, 'Technology Use: HTML, CSS3, Javascript, jQuery, Self created MVC Framework system using PHP5 OOP and MySQL\r\nSummary\r\nThis is a full costum website that similiar kind like jobsdb.com, karir.com', 'duniakerja.jpg', 2012),
(6, 'ASPRI - Penyelenggara Seminar', 'aspriseminar.com', 'web', 1, 'Technology Use: HTML, CSS3, Javascript, jQuery, Self created MVC Framework system using PHP5 OOP and MySQL\r\nSummary\r\nA website about organization that providing seminar packages and completed training for company, also giving on going seminar agenda information, and a simple blog management.', 'aspri.jpg', 2012),
(7, 'Gradasi Laras Cipta', 'gradasilarascipta.com', 'web', 1, 'Technology Use: HTML, CSS3, Javascript, jQuery, Self created MVC Framework system using PHP5 OOP and MySQL\r\nSummary\r\nA website gallery of architectural work and a simple blog management.', 'gradasilarascipta.jpg', 2012),
(8, 'Flipstore8', 'flipstore8.com', 'web', 2, 'Technology Use: HTML, CSS3, Javascript, jQuery, Self created MVC Framework system using PHP5 and MySQL\r\nSummary\r\nSimple product catalog website for CV. Aneka Sarana an apparel vendor on Bandung', 'flipstore8.jpg', 2011),
(9, 'Mekujo Reggae Distro', 'mekujo.com', 'web', 3, '', 'mekujo.jpg', 2010),
(10, 'Prodec STP Bandung', 'prodec-stpbandung.com', 'web', 1, '', 'prodec.jpg', 2007),
(11, 'Tradana Tour & Travel', 'tradanatour.com', 'web', 1, '', 'tradana.jpg', 2013),
(12, 'Veet Produk Wanita', 'veet.co.id', 'web', 1, '', 'veet.jpg', 2013),
(13, 'Tebing View Bandung Resort', 'tebingviewbandung.com', 'web', 1, '', 'tebingview.jpg', 2013),
(14, 'Nuhijab Store', 'nuhijab.com', 'web', 3, '', 'nuhijab.jpg', 2012),
(15, 'Yayasan Kasih Mulia', 'yayasankasihmulia.com', 'web', 1, '', 'ykm.jpg', 2013),
(16, 'Wisnu''s Personal Site', 'wisnu-hafid.net', 'web', 5, '', 'wisnuhafid.jpg', 2008),
(17, 'Emwe Concept Distro', 'emweconcept.com', 'web', 2, '', 'emwe.jpg', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE IF NOT EXISTS `portfolio_category` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `name`) VALUES
(1, 'Company Profile'),
(2, 'Product Catalog'),
(3, 'E-Commerce'),
(4, 'Portal'),
(5, 'Personal Site');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

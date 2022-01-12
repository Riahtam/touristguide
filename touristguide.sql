-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2022 at 04:42 PM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `touristguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `comlike`
--

DROP TABLE IF EXISTS `comlike`;
CREATE TABLE IF NOT EXISTS `comlike` (
  `com` varchar(500) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `li` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comlike`
--

INSERT INTO `comlike` (`com`, `uname`, `li`, `dislike`, `id`, `pname`) VALUES
('nice cave..', 'admin', NULL, NULL, 45, ' Ar-wah'),
('awesome.I love it.If i have more time  i would love to explore all ', 'Maxx', NULL, NULL, 46, ' Ar-wah'),
('yea its a good park..we enjoy a lot..we even can cook there they provide us fuelwood ', 'Maxx', NULL, NULL, 47, ' Kharmih'),
('', 'Maxx', NULL, NULL, 48, ' Crescent'),
('good', 'admin', NULL, NULL, 49, ' Polo Orchid  Resort');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

DROP TABLE IF EXISTS `emergency`;
CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `loca` varchar(90) DEFAULT NULL,
  `contact` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `type`, `district`, `loca`, `contact`) VALUES
(6, 'Sohra Police Station', 'police', 'East Khasi Hills', 'Lad thanad,Saitsohpen ', '111'),
(8, 'NEIGRIHMS', 'Hospital', 'East Khasi Hills', 'Mawdiangdiang Shillong', '<p>Helpline : 0364-2538045(administration)</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;0364-2538076(Hospital)</p>\r\n\r\n<p>Casualty/Emergency : 0364-2538014</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, 'Supercare Hospital', 'Hospital', 'East Khasi Hills', 'Demthring Shillong', '<p>0364-2537211<big> /<small> 2537244</small></big></p>\r\n\r\n<p><big><small>Emergency : 0364-2537744</small></big></p>\r\n'),
(10, 'Nazareth Hospital', 'Hospital', 'East Khasi Hills', 'Laitumkhrah Shillong', '<p>Helpline : +0364-2224052</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : +0364-2210188</p>\r\n'),
(11, 'Children Hospital', 'hospital', 'East Khasi Hills', 'Pohkseh  Shillong ', '<p>Appointment : (0364)-2535061</p>\r\n\r\n<p>Enquiries &nbsp;: (0364)- 2535062</p>\r\n'),
(13, 'Nongstoin Civil Hospital', 'Hospital', 'West Khasi Hills ', 'Mawiawban,Nongstoin', '<p>12344</p>\r\n'),
(14, 'Rainagdo CHC', 'Hospital', 'West Khasi Hills ', 'Rainagdo ', '<p>1234</p>\r\n'),
(15, 'Tirot Singh Memorial Hospital', 'Hospital', 'West Khasi Hills ', 'Sangshong Mairang', '<p>143</p>\r\n'),
(16, 'Bethany Hospital', 'Hospital', 'Ribhoi', 'NSCA Mini Stadium.NH 40 Nongpoh', '<p>&nbsp;NULL</p>\r\n'),
(17, 'Nongpoh Civil Hospital', 'Hospital', 'Ribhoi', 'GS Road Nongpoh', ''),
(18, 'BARATO PHC', 'Hospital', 'West Jaintia Hills', 'Barato,Laskein Sub Center: MUKROH SC, ShilliangMyntang SC and Thangrain Sc', ''),
(19, 'Chutwakhu UHC', 'Hospital', 'West Jaintia Hills', 'Chutwakhu jowai', ''),
(20, 'khliehriat Community Health Center ', 'Hospital', 'East Jaintia Hills', 'Khliehriat west', ''),
(21, 'Mawkyrwat Police Station ', 'police', 'South West Khasi Hills', ' Near Photumnew Bridge,Mawkyrwat', '<p>+91 -9774-15-55338</p>\r\n'),
(22, 'Ranikor police Station', 'police', 'South West Khasi Hills', 'Near Ranikor Chc ', '<p>+91-9402-19-0572</p>\r\n'),
(23, 'Mawkyrwat CHC', 'Hospital', 'South West Khasi Hills', ' Mawkyrwat ', ''),
(24, 'Ranikor PHC ', 'Hospital', 'South West Khasi Hills', 'Ranikor', ''),
(25, 'Khliehriat Police Station', 'police', 'East Jaintia Hills', 'Khliehriat', ''),
(26, 'Lumshnong Police Station ', 'police', 'East Jaintia Hills', 'lumshnong Khliehriat', ''),
(27, 'Mawngap  Police Station ', 'police', 'East Khasi Hills', 'Mawphlang', ''),
(28, 'Pynursla Police station', 'police', 'East Khasi Hills', 'Pynursla', ''),
(29, 'Mawsynram Police Station', 'police', 'East Khasi Hills', 'Mawsynram', ''),
(30, 'Mairang PS', 'police', 'West Khasi Hills ', 'Lumsyiem Road ', '<p>contact : 9366115320</p>\r\n'),
(31, 'Mawshynrut', 'police', 'West Khasi Hills ', 'Riangdo', '<p>contact : 8014190008</p>\r\n'),
(32, 'Umiam PS', 'police', 'Ribhoi', 'Umiam', '<p>contact : 0364-2570234</p>\r\n'),
(33, 'Khanapara PS', 'police', 'Ribhoi', 'Khanapara Ribhoi', '<p>Phone : 0361-2335557</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

DROP TABLE IF EXISTS `feed`;
CREATE TABLE IF NOT EXISTS `feed` (
  `feedb` varchar(500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`feedb`, `id`, `uname`) VALUES
('Plz add a map.', 10, 'admin'),
('ynsryrty', 11, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

DROP TABLE IF EXISTS `festivals`;
CREATE TABLE IF NOT EXISTS `festivals` (
  `festid` int(10) NOT NULL AUTO_INCREMENT,
  `about` varchar(10000) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `loca` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `month` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  `belong` varchar(50) NOT NULL,
  PRIMARY KEY (`festid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`festid`, `about`, `name`, `loca`, `district`, `month`, `image`, `belong`) VALUES
(1, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Behdeinkhlam is a four-day festival and is celebrated by the Jaintia Clan.&nbsp; The Behdeingkhlam means &lsquo;Chasing away the Plague&rsquo; and is believed to ward off evils. It is celebrated during the sowing season when the people of the Niamtre religion gather together praying for bountiful produce. It is celebrated in July, every year. Various rituals along with sacrifices happen during this festival. The men of the Janitia clan gather together and play the Datlawakor &ndash; similar to soccer, but with a wooden ball. It is believed that those who win the game will have very good production that year.</p>\r\n', 'Beh-diengkhlam', 'Jowai', 'Jaintia Hills ', 'July', 0x70726f6a656374696d672f6265686469656e676b686c616d2e6a7067, 'Jaintia'),
(7, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Shad Suk Mynsiem is the most important festival of the<em>&nbsp;Khasi Clans of Meghalaya</em>. It also celebrated by the Jaintia and Garo Clans of Meghalaya. This festival is celebrated in April, every year. This is an extraordinary celebration of moves and is also known as&nbsp; &lsquo;Move of cheerful hearts&rsquo;. This is a three-day festival and is popularly known as the &lsquo;Shad Phur&rsquo;. This festival is celebrated primarily in the Khasi Hills;&nbsp; arranged close to Shilong.</p>\r\n', 'Shad Sukmynsiem', ' Weiking ground, Jaiaw', ' Khasi Hills', 'April', 0x70726f6a656374696d672f536861645f53756b5f4d797369656d5f32303138303431393135323732382e6a706567, 'Khasi'),
(8, '<p>&nbsp; &nbsp; &nbsp; The Wangala Festival is celebrated by the Garo people, marking the end of the agricultural year.&nbsp; It is a thanksgiving festival for Misi-A-Gilpa-Saljong-Galapa, the god of fertility. This festival is now popularly known as Hundred Drums Festival. During this festival, a special named Nagara is beaten for which men and women dance gracefully.&nbsp;The dress code for the men is usually the dhotis, half-coats and turbans with feathers and the women are dressed in colourful dresses made of silk, blouses and a head-wrap with feathers.</p>\r\n', ' Wangala Festiva', 'Garo Hills', 'Goro Hills', 'September ', 0x70726f6a656374696d672f77616e67616c612e6a706567, 'Garo');

-- --------------------------------------------------------

--
-- Table structure for table `guesshouse`
--

DROP TABLE IF EXISTS `guesshouse`;
CREATE TABLE IF NOT EXISTS `guesshouse` (
  `name` varchar(300) DEFAULT NULL,
  `guessid` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(30) DEFAULT NULL,
  `locaname` varchar(300) DEFAULT NULL,
  `longti` varchar(15) DEFAULT NULL,
  `latit` varchar(15) DEFAULT NULL,
  `about` varchar(3000) DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`guessid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guesshouse`
--

INSERT INTO `guesshouse` (`name`, `guessid`, `district`, `locaname`, `longti`, `latit`, `about`, `image`) VALUES
('Polo Orchid  Resort', 8, 'East Khasi Hills ', 'Mawblang,Mawsmai Sohra', '', '', '<p>It is located&nbsp; about 57 km from Shillong the Capital of Meghalaya.It is a great place where you can view the natural beauty of Sohra.It provide both&nbsp; hotel as well as place to eat.It is also located near Mawsmai cave,khohramhah,Thangkharang park ,7 sister falls and so on.&nbsp;</p>\r\n', 0x70726f6a656374696d672f646f776e6c6f6164202831292e6a706567),
('Jiva Resort ', 13, 'East Khasi Hills', 'Saitsohpen,near Kutmadan village', '', '', '<p>It is located in Sohra a place&nbsp; also know as the abode of cloud&nbsp;.It is 53-54 km from Shillong.It is a wonderful place to visit which&nbsp;also has a playground where you can enjoy with your family.&nbsp;</p>\r\n', 0x70726f6a656374696d672f6a697661322e6a7067),
('Holiday Resort ', 14, 'East Khasi Hills  ', 'Laitkynsew', '', '', '<p>Cherrapunjee Holiday Resort is a family run Nature Resort, promoted as a Family Holiday Destination. The focus is on the abundant scenic beauty all around the Resort, the benevolence of the Asian Summer Monsoon on Cherrapunjee, the enchanting and challenging Nature Treks in this amazing terrain, the Living Root Bridges including the unique Double Decker Root Bridge, which are exclusive to Meghalaya in the whole world, Baths in waterfalls, mountain streams and cool springs during the rainy season, Swims in Natural Swimming Pools that are rock pools in the river bed down in the valley, Campfires, Adventure Caving, River Canyoning and Camping Out in winter. It is our earnest desire to provide the right ambience for family holidays in the lap of nature.</p>\r\n', 0x70726f6a656374696d672f686f6c69646179207265736f72742e6a7067),
('Crescent', 15, 'East Khasi Hills', 'Khlieh-Shnong Sohra', '', '', '', 0x70726f6a656374696d672f6372657363656e742e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

DROP TABLE IF EXISTS `mall`;
CREATE TABLE IF NOT EXISTS `mall` (
  `name` varchar(30) DEFAULT NULL,
  `locaname` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `lonti` varchar(15) DEFAULT NULL,
  `latit` varchar(15) DEFAULT NULL,
  `mallid` int(11) NOT NULL AUTO_INCREMENT,
  `about` varchar(1000) DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`mallid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`name`, `locaname`, `district`, `lonti`, `latit`, `mallid`, `about`, `image`) VALUES
('Glory Plaza', 'Police Bazar', 'East Khasi Hills', '', '', 12, '<p>It is located in Shillong,North East India.This Mall is inside the Police Bazar.In this Mall you can find anything that you want&nbsp;&nbsp; from shoe to jeans and others.</p>\r\n', 0x70726f6a656374696d672f676c6f727920706c617a612e6a7067),
('Iewduh', 'Motphran', 'East Khasi Hills ', '', '', 13, '<p>It is also know as <strong><ins>Bara Bazar</ins></strong>. It is a biggest traditional Market in Shillong city where people all around use to come to buy and sell things there.It is located it North East India .It is under the direct management of the Syiem of Mylliem.</p>\r\n', 0x70726f6a656374696d672f6965776475682e6a706567),
('Police Bazar', 'Downtown shillong ', 'East khasi Hills ', '', '', 14, '<p>It is Located In North East India, Shillong .It is the biggest market place and has lot of eating &nbsp;places as well as Hotels.It is a very good Place for those who want to stay in shillong.</p>\r\n', 0x70726f6a656374696d672f70622e6a706567),
('Sohra Market', 'Khlieh shnong Sohra', 'East Khasi Hills', '', '', 16, '<p>It is located 50km from Shillong.It is not a big market like Iewduh but it is a very nice place to visit.The people here make oneday in a week as a market day.Yes the market is open everyday but&nbsp; That one day is a special day where Everyone from near and far used to come to sell and buy thing&nbsp;</p>\r\n', 0x70726f6a656374696d672f536f6872612d6d61726b65742d2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `pname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`pname`, `id`, `image`, `pid`) VALUES
('Ar-wah', 10, 0x70726f6a656374696d672f6c6f76656c792d73746f702d6f766572732e6a7067, 38),
('Ar-wah', 11, 0x70726f6a656374696d672f61727761682d636176652e6a7067, 38);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `name` varchar(30) DEFAULT NULL,
  `placeid` int(11) NOT NULL AUTO_INCREMENT,
  `about` varchar(3000) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `locaname` varchar(30) DEFAULT NULL,
  `longti` varchar(15) DEFAULT NULL,
  `lati` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`placeid`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`name`, `placeid`, `about`, `district`, `locaname`, `longti`, `lati`, `type`, `image`) VALUES
('Ar-wah', 38, '<p>It is located before reaching Sohra Market.It is a very deep cave but only a small part of it&nbsp; has been opened for the tourist.In this cave there are excellent rock formation and even small holes that lead to other part of the cave.</p>\r\n\r\n<p>In this place seeing all the fossil is difficult therefore they also provide&nbsp;&nbsp; guide just to help you.</p>\r\n\r\n<p><ins>Opening Time&nbsp;</ins>&nbsp; :&nbsp;</p>\r\n\r\n<p>Everyday 9.30 AM-5.30 PM</p>\r\n\r\n<p><ins>Entry Fee:</ins></p>\r\n\r\n<p>20 INR per Adult and 10 INR per child</p>\r\n\r\n<p>photography&nbsp; 20 INR</p>\r\n', 'East Khasi Hills', 'PdengShnong Sohra ', '', '', 'cave', 0x70726f6a656374696d672f31393531393531333643686572726170756e6a695f41727761685f436176655f4d61696e2e6a7067),
('Nohkalikai', 45, '<p>It is a Falls&nbsp; that has its own&nbsp;&nbsp;story.This Fall is located 4 km from Sohra Market.it&nbsp;is also the tallest falls in India and fourth in the world . It is 1115&nbsp;feet&nbsp;in height.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Best time to visit&nbsp; :</p>\r\n\r\n<p>June - November</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Entry fee :</p>\r\n\r\n<p>50 INR /&nbsp;person&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'East Khasi Hills', 'KhliehShnong Sohra', '', '', 'falls', 0x70726f6a656374696d672f494d475f32303230303330395f3139313533362e6a7067),
('Kharmih', 46, '<p>It is a Park located on the way to Dain-thlen falls.It is a very beautiful park which also has a pool where you can enjoy with your Family.</p>\r\n\r\n<p><strong><ins>OPENING TIME : </ins></strong></p>\r\n\r\n<p>Mon-Sat : 10 Am - 4 pm</p>\r\n', 'East Khasi Hills', ' KhliehShnong Sohra', '', '', 'park', 0x70726f6a656374696d672f322e6a7067),
('Dainthlen', 49, '<p><small>It is located before&nbsp; reaching Sohra.When you came to Sohra you&nbsp;will find one road on the right side when you follow that road 5km away you will reach&nbsp; Dainthlen Falls. It is a great place which also has a&nbsp;story in it.The Story is a about a giant Python/snake (<span class=\"marker\">Thlen </span>in local language).</small></p>\r\n\r\n<p><small>Best time :</small></p>\r\n\r\n<p><small>During rainy season</small></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'East Khasi Hills ', 'Laitduh', '', '', '', 0x70726f6a656374696d672f4461696e74686c656e312e6a7067),
('wei-Sawdong', 51, '<p>It is located before reaching Sohra.Before you reach Sohra you will see one road the right side and from there it is 3-4 km .To reach&nbsp; the base of the falls you&nbsp; have to go on a trek for a few min.this falls &nbsp;is a&nbsp; three tier waterfall .The water&nbsp; falling from tier filling up the pool below it&nbsp; and then&nbsp; doing the same for the next level.</p>\r\n', ' East khasi Hills', 'Laitduh ', '', '', '', 0x70726f6a656374696d672f776569736177646f6e67352e6a7067),
('Bri- ki-Synrangmaw', 52, '<p>It is located before reaching Sohra.When you reach Laitryngew you have to go to the left and after&nbsp; 3-4 km you will reach Laitmawsiang.This park is truly an amazing park.It has lots to explore.&nbsp;This place is a natural space create by seasonal waterfall and fed by rains&nbsp;</p>\r\n', 'East Khasi Hills', 'Laitmawsiang', '', '', 'park', 0x70726f6a656374696d672f67617264656e2d6f662d63617665732e6a7067),
('Mawsmai Cave', 53, '<p>It is located 6&nbsp;km from Sohra Market.It is a very beautiful limestone cave .It is one of the most popular historical&nbsp; caves in Meghalaya.It is formed out&nbsp; of limestone and enjoy the distinction of&nbsp; being the only caves in Meghalaya that are lit enough so that the tourist can enjoy its natural formation.It is&nbsp; 150 meters long.&nbsp;</p>\r\n', 'East Khasi Hills', 'Mawsmai', '', '', 'cave', 0x70726f6a656374696d672f6d6177736d616963617665332e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `restau`
--

DROP TABLE IF EXISTS `restau`;
CREATE TABLE IF NOT EXISTS `restau` (
  `name` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `loca` varchar(200) DEFAULT NULL,
  `longti` varchar(20) DEFAULT NULL,
  `lati` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` varchar(3000) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restau`
--

INSERT INTO `restau` (`name`, `district`, `loca`, `longti`, `lati`, `id`, `about`, `image`) VALUES
('Jiva Resort', 'East Khasi Hills', 'Saitsohpen before reaching Kutmadan village', '', '', 11, '<p>It is about 4-5 km from Sohra Market.Apart from Resort it also act as an attractive Restaurant in the locality as well as for the&nbsp; tourists.</p>\r\n', 0x70726f6a656374696d672f6a697661352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `photo` blob DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `userid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`, `name`, `pass`, `address`, `userid`, `email`) VALUES
(0x70726f6a656374696d672f332e6a7067, 'admin', 'admin', 'h', 26, 'angelbertriahtam@yahoo'),
(NULL, 'Maxx', 'Max2020', ' Laitumkhrah', 32, 'mar@gmail.com'),
(NULL, 'Jack', 'Jack2020', 'Mawlai', 33, 'Jack@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

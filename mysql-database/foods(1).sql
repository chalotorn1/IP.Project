-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2019 at 04:58 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aID` int(11) NOT NULL,
  `aU` varchar(100) NOT NULL,
  `aP` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aID`, `aU`, `aP`, `Name`) VALUES
(1, 'admin1', '1111', 'Sathianpong Sangseema'),
(2, 'admin2', '2222', 'Chalotorn Ploysupa');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(3) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `price`, `detail`, `image`) VALUES
(101, 'ต้มยำกุ้ง', 130, 'เป็นอาหารไทยภาคกลางประเภทต้มยำ ซึ่งเป็นที่นิยมรับประทานไปทุกภาคในประเทศไทย เป็นอาหารที่รับประทานกับข้าวและ มีรสเปรี้ยวและเผ็ดเป็นหลักผสมเค็มและหวานเล็กน้อย แบ่งออกเป็น 2 ประเภท คือ ต้มยำน้ำใส และ ต้มยำน้ำข้น', '1.jpg'),
(102, 'แกงเขียวหวาน   ', 80, 'ประกอบด้วยเนื้อ ปลา ไก่ หรือหมู และผัก ปรุงรสด้วยกะทิ มะเขือ น้ำตาล น้ำปลา ใบมะกรูด และใบโหระพา นิยมรับประทานกับข้าวสวยหรือขนมจีน', '2.jpg'),
(103, 'ปลาทับทิมสามรส', 120, 'รสชาติครบถ้วน ทั้ง เปรี้ยว เค็ม หวาน เนื้อปลา ทอดในน้ำมันร้อนๆจนได้สีเหลืองทองกรอบ มาผสมกับน้ำราดสามรสที่รสชาติกลมกล่อม', '3.jpg'),
(104, 'ต้มข่าไก่      ', 80, 'มีลักษณะเป็นแกงใส่กะทิ ใส่เนื้อไก่ และเห็ด น้ำแกงมีสีขาวขุ่น โรยหน้าด้วยผักชี มีรสชาติเปรี้ยว เค็ม มัน', '4.jpg'),
(105, 'ขนมจีนน้ำยา', 80, 'คนไทยนิยมกินเนื้อปลา จึงใส่เฉพาะเนื้อปลาที่ตำละเอียดใส่ลงไป และใส่ปลาเค็มเพื่อให้มีกลิ่นหอมและรสเค็มกลมกล่อม', '5.jpg'),
(201, 'บัวลอย', 30, 'ขนมหวานชนิดหนึ่ง ทำด้วยแป้งข้าวเหนียวปั้นเป็นเม็ดกลม ๆ เล็ก ๆ ต้มสุกในน้ำ แล้วจึงตักตัวแป้งใส่น้ำกะทิที่ต้มกับน้ำตาล.', '6.jpg'),
(202, 'ข้าวเหนียวมะม่วง', 40, 'ขนมไทยยอดนิยม และจะได้รับความนิยมมากเป็นพิเศษในฤดูร้อน ทำจากข้าวเหนียว เช่น ข้าวเหนียวเขี้ยวงู มูนกับหัวกะทิ เกลือป่น และน้ำตาลทรายขาว แล้วกินกับเนื้อมะม่วงสุก', '7.jpg'),
(203, 'กล้วยบวชชี', 30, 'ทำจากกล้วยน้ำว้า มะพร้าวหรือน้ำกะทิเป็นวัตถุดิบที่คนไทยนำมาใช้ประกอบอาหาร ตั้งแต่สมัยโบราณจนปัจจุบัน', '8.jpg'),
(204, 'สาคูเปียกมะพร้าวอ่อน      ', 30, 'สาคูทำจากแป้งมันสำปะหลัง เมื่อนำมาต้มกับน้ำจะพองตัว ปรุงรสด้วยน้ำตาลทราย อาจใส่ส่วนผสมอื่นเช่น เผือก ลำไย ข้าวโพด เป็นต้น', '9.jpg'),
(205, 'ลูกชุบ ', 30, 'ทำจากถั่วเขียวกวนปั้นเป็นรูปต่าง ๆ โดยมากเป็นผักผลไม้แล้วระบายด้วยสีผสมอาหาร จากนั้นนำไปชุบวุ้นให้เป็นมันเงา.', '10.jpg'),
(301, 'น้ำใบเตย ', 20, 'ใบเตยสดล้างให้สะอาด หั่นเป็นชิ้นนำไปต้มกับน้ำแล้วกรอง ปรุงแต่งรสด้วยน้ำตาลหรือน้ำผึ้งอย่างใดอย่างหนึ่งหรือผสมกัน ', '11.jpg'),
(302, 'น้ำกระเจี๊ยบ', 20, 'มีรสเปรี้ยว นำมาต้มกับน้ำ เติมน้ำตาล ดื่มแก้ร้อนใน กระหายน้ำ และช่วยป้องกันการจับตัวของไขมันในเส้นเลือดได้', '14.jpg'),
(303, 'น้ำดอกอัญชัน    ', 20, 'ดอกอัญชันสดล้างให้สะอาดนำไปต้มกับน้ำกรอง \r\n\r\nปรุงแต่งรสด้วยน้ำตาลหรือน้ำผึ้งอย่างใดอย่างหนึ่งหรือผสมกัน ช่วยดับกระหาย', '12.jpg'),
(304, 'น้ำเก๊กฮวย     ', 20, 'ทำจากดอกเก๊กฮวย คือ เบญจมาศสวน  ตากแห้งต้มกับน้ำตาล มีสัพคุณหลายอย่าง', '15.jpg'),
(305, 'น้ำลำไย', 20, 'เครื่องดื่มชนิดหนึ่งที่ได้จากการนำลำไยแห้งที่ไม่มีราและมอดต้มกับน้ำจนเดือด และเนื้อลำไยบาน กรอง หรือตักเอาเนื้อออก ปรุงแต่งรสด้วยน้ำตาล ต้มฆ่าเชื้อที่อุณหภูมิไม่น้อยกว่า 95 องศาเซลเซียส อาจเติมชิ้นเนื้อลำไย บรรจุในภาชนะบรรจุขณะร้อน แล้วทำให้เย็นทันที\r\n', '13.jpg'),
(401, 'ข้าวสวย ', 10, 'ข้าวสวยหอมมะลิ หุงได้ที่กำลังดี รับประทานได้กับทุกเมนู', '16.jpg'),
(402, 'ข้าวมัน', 15, 'หุงข้าวแบบจีน ที่นำข้าวสวยมาหุงกันน้ำซุป ทำให้ข้าวมีความ หอมและมัน มีรสชาติ ข้าวมัน', '17.jpg'),
(403, 'ข้าวสวยอัญชัน', 15, 'ดอกอัญชันดีต่อสุขภาพ สีฟ้าเป็นสีที่มาจากดอกไม้ธรรมชาติ', '18.jpg'),
(404, 'ข้าวเหนียว', 10, 'นิยมทานกันทั่วทุกภาคของประเทศไทย ทานแล้วอิ่มท้อง ทานคู่กับอาหารได้หลากหลายอย่าง', '19.jpg'),
(405, 'ข้าวกล้อง', 25, 'ข้าวกล้องหอมมะลิอย่างดี สามารถช่วยลดความอ้วน ลดความเสี่ยงโรคหัวใจและหลอดเลือด', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`) VALUES
(008, 'chalotorn', '123456', 'chalotorn ploysupa'),
(006, 'first', '123', 'sathianpong sangseema'),
(007, 'ittipon', '1234', 'ittipon meewang'),
(009, 'kittisak', '12345678', 'kittisakl phitsuwan');

-- --------------------------------------------------------

--
-- Table structure for table `od`
--

CREATE TABLE `od` (
  `odID` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `odName` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `num` double NOT NULL,
  `teble` double NOT NULL,
  `user` varchar(100) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `od`
--

INSERT INTO `od` (`odID`, `image`, `odName`, `price`, `num`, `teble`, `user`, `total`) VALUES
(10, '4.jpg', 'ต้มข่าไก่      ', 80, 1, 1, 'We', 80),
(20, '10.jpg', 'ลูกชุบ ', 30, 1, 5, 'chalotorn ploysupa', 30);

-- --------------------------------------------------------

--
-- Table structure for table `teble`
--

CREATE TABLE `teble` (
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` double NOT NULL,
  `people` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teble`
--

INSERT INTO `teble` (`name`, `date`, `email`, `phone`, `people`) VALUES
('Aom', '2019-11-07', 'chalotorn@hotmail.com', 807693878, 1),
('tae', '2019-11-02', 'tar@hotmail.com', 8614733235, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `od`
--
ALTER TABLE `od`
  ADD PRIMARY KEY (`odID`);

--
-- Indexes for table `teble`
--
ALTER TABLE `teble`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `od`
--
ALTER TABLE `od`
  MODIFY `odID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

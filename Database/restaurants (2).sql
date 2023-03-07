-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 04:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SrNo` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SrNo`, `user_id`, `p_id`) VALUES
(4, 1, 1),
(6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `SrNo` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`SrNo`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Keyur Bhut', 'kbhut865@rku.ac.in', 'for on Visit your Restorent', 'we are come'),
(2, 'Keyurbjg', 'keyu@gmail.com', 'noooo', 'hjkukhknjkhk'),
(3, 'Keyur', 'kbhut865@rku.ac.in', 'Other', 'aewf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SrNo` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `complain` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SrNo`, `name`, `email`, `complain`, `message`) VALUES
(2, 'Pradip Jadav', 'pjadav669@rku.ac.in', 'it was so respect full', 'Your staff Is So Nice......'),
(3, 'Pradip Jadav', 'pjadav669@rku.ac.in', 'Nice', 'No1 '),
(4, 'Pradip Jadav', 'pjadav669@rku.ac.in', 'good', 'zsdfasd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_Name` varchar(100) NOT NULL,
  `p_Type` text NOT NULL,
  `p_Price` int(11) NOT NULL,
  `p_Description` varchar(200) NOT NULL,
  `p_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_Name`, `p_Type`, `p_Price`, `p_Description`, `p_photo`) VALUES
(1, 'Indain Pizza', 'Pizza\r\n', 250, 'This is Amezing', '../Product/blog-img-05.jpg'),
(2, 'Chinese Pizza', 'Pizza\r\n', 500, 'This is Very Testy', '../Product/pizza.jpg'),
(3, 'American Pizza', 'Pizza\r\n', 750, 'So Sweet', '../Product/PizzaR1.jpg'),
(4, 'Jain Pizza', 'Pizza\r\n', 300, 'This is Amezing', '../Product/PizzaR2.jpg'),
(5, 'Chees Pizza', 'Pizza\r\n', 320, 'So Yummy', '../Product/PizzaR3.jpg'),
(6, 'Veg Pizza', 'Pizza\r\n', 350, 'Woww', '../Product/PizzaR4.jpg'),
(7, 'West Pizza', 'Pizza\r\n', 400, 'So Yummy', '../Product/PizzaR7.jpg'),
(8, 'Dosha', 'FastFood', 320, 'This is Amezing', '../Product/fast1.jpg'),
(9, 'Bread Chees', 'FastFood', 150, 'This is Very Testy', '../Product/fast2.jpg'),
(10, 'Bhajiya', 'FastFood', 250, 'So Yummy', '../Product/fast4.jpg'),
(11, 'Pani Puri', 'FastFood', 70, 'So Sweet', '../Product/fast5.jpg'),
(12, 'Vada Pav', 'FastFood', 50, ' Very Testy', '../Product/fast6.jpg'),
(13, 'Chips', 'FastFood', 100, 'Yummy 👌👌', '../Product/fast8.jpg'),
(14, 'Beef Burgers', 'BURGGER', 180, ' Amezing', '../Product/Burger.jpg'),
(15, 'Turkey Burgers', 'BURGGER', 200, 'Very Testy', '../Product/Burger1.jpg'),
(16, 'Veggie Burgers', 'BURGGER', 300, 'Very Testy', '../Product/Burger3.jpg'),
(17, 'Bison Burgers', 'BURGGER', 500, ' Very Testy', '../Product/Burger2.jpg'),
(18, 'Gujarati Dish', 'Dishes', 250, 'So Yummy', '../Product/5.jpg'),
(19, 'Panjabi Dish', 'Dishes', 200, 'Yummy 👌👌', '../Product/6.jpg'),
(20, 'Gujarati Dish', 'Dishes', 400, ' 😋😋😋', '../Product/8.jpg'),
(21, 'West Dish', 'Dishes', 350, '😜😜😜', '../Product/12.jpg'),
(22, 'Mango Juice', 'JUICE', 100, 'Testy', '../Product/Juice1.jpg'),
(23, 'Carrot Juice', 'JUICE', 50, '😜😜😜', '../Product/Juice2.jpg'),
(24, 'All Juice', 'JUICE', 500, 'So Cool And Very Testy', '../Product/Juice3.jpg'),
(25, 'Orange Juice', 'JUICE', 80, '😋😋😋', '../Product/Juice4.jpg'),
(26, 'soft drinks', 'Colddrinks', 70, 'Yummy 👌👌', '../Product/Cold.jpg'),
(27, 'coca cola', 'Colddrinks', 100, '😋😋😋', '../Product/Cold4.jpg'),
(28, 'pepsi cold', 'Colddrinks', 120, '😜😜😜', '../Product/Cold1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_type`
--

CREATE TABLE `p_type` (
  `SrNo` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_type`
--

INSERT INTO `p_type` (`SrNo`, `Name`) VALUES
(1, 'Pizza\r\n'),
(2, 'FastFood'),
(3, 'BURGGER'),
(4, 'Dishes'),
(5, 'JUICE'),
(6, 'Colddrinks');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `SrNo` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `person` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `food` varchar(25) NOT NULL,
  `occasion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`SrNo`, `name`, `email`, `mobile`, `person`, `date`, `time`, `food`, `occasion`) VALUES
(20, 'Pradip Jadav', 'pjadav669@rku.ac.in', 9033372216, 4, '2021-10-04', '21:32', 'Pizza\r\n', 'Birthday Party'),
(21, 'Pradip Jadav', 'pjadav669@rku.ac.in', 9033372216, 4, '2021-10-10', '19:32', 'FastFood', 'Day Salebration');

-- --------------------------------------------------------

--
-- Table structure for table `rorder`
--

CREATE TABLE `rorder` (
  `SrNo` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rorder`
--

INSERT INTO `rorder` (`SrNo`, `p_name`, `p_id`, `user_id`, `user_name`, `city`, `state`, `pincode`, `address`, `quantity`) VALUES
(8, 'Indean Pizza', 1, 1, 'Pradip', 'Surendranagar', 'Rajkot', 360025, 'sfadfda              ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` text NOT NULL,
  `distric` text NOT NULL,
  `zipcode` int(6) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `city`, `distric`, `zipcode`, `address`, `photo`, `pass`) VALUES
(1, 'Pradip Jadav', 'pjadav669@rku.ac.in', 9033372216, 'Surendranagar', 'Surendranagar', 363421, 'Bhadiyad, Surendranagar,363421', 'person/IMG_20210224_093950_549.jpg', '123456'),
(3, 'Keyur Bhut', 'kbhut865@rku.ac.in', 6353435399, '', '', 0, '', NULL, '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_type`
--
ALTER TABLE `p_type`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `rorder`
--
ALTER TABLE `rorder`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `p_type`
--
ALTER TABLE `p_type`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rorder`
--
ALTER TABLE `rorder`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

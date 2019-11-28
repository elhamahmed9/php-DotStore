-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2019 at 08:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_img` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_img`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(4, 'esraa', 'esraa@gmail.com', '123', '', 'alex', 'ff', '2345667', 'deesaqw'),
(5, 'elham', 'elham@gmail.com', '555', '', 'cairo', 'ooo', '255648', 'software'),
(6, 'elham', 'elham@gmail.com', '123', '', 'cairo', 'kvtfrkdr', '255648', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(2, 'el', 'fiweojjewqje@gmail.com', '1234', 'ee', 'dodo', '01278659948', 'e', 'spa.jpg', '::1'),
(3, 'elham', 'ahelham185@yahoo.com', '1234', 'cairo', 'ee', '01278659948', 'jhjkhj', 'IMAG5790.jpg', '::1'),
(4, 'sara', 'sara@mail.com', '1234567', 'tanta', 'rom', '01278659948', 'ieiii', 'download.png', '::1'),
(5, 'erewee', 'ahelham185@yahoo.com', '1234', 'e', 'ee', '01278659948', 'ee', '9.jpg', '::1'),
(6, 'esraa', 'esraa@gmail.com', '123', 'cairo', 'ss', '123456789', 'helwan', '3-copy.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(0, 1, 18, 753031492, 3, '2019-10-02', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(0, 1, 753031492, '1', 3, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `date`, `product_title`, `product_img1`, `product_price`, `product_keywords`, `product_desc`) VALUES
(10, 3, '2019-10-13 10:38:21.563100', 'kolert', '64776672_1261351677365287_41465976507596800_o.jpg', 88, 'asl', 'Egyptian product made with Egyptian hands & Egyptian materials.\r\nIt reflects the heritage and beauty of a country\r\nManufacturer: Ahmed Salem\r\nCity: Cairo'),
(11, 2, '2019-10-13 11:57:35.041940', '  sortef', '12734139_1028688613869134_5502132214618742915_n.jpg', 34534, '  fgh', '<p>Egyptian product made with Egyptian hands &amp; Egyptian materials. It reflects the heritage and beauty of a country Manufacturer: Ahmed Salem City: Cairo</p>'),
(12, 1, '2019-10-13 10:38:21.568086', 'logena', '69875340_2576249015760349_6290001341821485056_n.jpg', 56, 'ytb', 'Egyptian product made with Egyptian hands & Egyptian materials.\r\nIt reflects the heritage and beauty of a country\r\nManufacturer: Ahmed Salem\r\nCity: Cairo'),
(13, 5, '2019-10-13 10:41:02.555613', 'koleqs', 'g.jpg', 10, 'etr', 'Egyptian product made with Egyptian hands & Egyptian materials.\r\nIt reflects the heritage and beauty of a country\r\nManufacturer: Ahmed Salem\r\nCity: Cairo'),
(15, 4, '2019-10-13 11:49:46.658056', '  khyamia', '1561933167_FB_IMG_1561759857178.jpg', 55, ' khyamia', '<p>Egyptian product made with Egyptian hands &amp; Egyptian materials. It reflects the heritage and beauty of a country&nbsp; City: Cairo</p>'),
(16, 5, '2019-10-13 12:01:53.762446', 'Alida Beaded Wicker Top Handle Bag', 'GUEST_10e4dacc-dd69-4bcc-b316-f6041693f718.jfif', 100, 'Alida Beaded Wicker Top Handle Bag', '<p><span style=\"color: #333333; font-family: Cairo, sans-serif;\">Egyptian product made with Egyptian hands &amp; Egyptian materials. It reflects the heritage and beauty of a country Manufacturer: Ahmed Salem City: Cairo</span></p>'),
(17, 0, '2019-10-13 12:01:59.134132', 'Round Wicker Laundry Hamper', 'round_wicker_laundry_hamper_xlarge-toasted_oat-item000322_600x.jpg', 55, 'Round Wicker Laundry Hamper', '<p><span style=\"color: #333333; font-family: Cairo, sans-serif;\">Egyptian product made with Egyptian hands &amp; Egyptian materials. It reflects the heritage and beauty of a country Manufacturer: Ahmed Salem City: Cairo</span></p>'),
(18, 1, '2019-10-13 12:16:30.264680', 'ser', '23795328_827844137387401_6968914533324382167_n.jpg', 55, 'herr', ''),
(19, 3, '2019-10-13 12:17:02.770951', 'mozmar', '23844776_827843087387506_981423988179351967_n.jpg', 100, 'Round Wicker Laundry Hamper', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Pottery', 'odfhueriebvuervedvbyeb '),
(2, 'accessories', 'hjegv3rui3ru'),
(3, 'wood_art', 'gnijrfmcl4emfnj'),
(4, 'khyamia', 'vekwjnmv;k'),
(5, 'Wicker', ' vfjkvb43jv34mv '),
(7, 'hh', 'jjikk');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide-name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide-name`, `slide_image`) VALUES
(4, 'slide number 1', 'slide-1.jpg'),
(5, 'slide number 2', '2.jpg'),
(6, 'slide number 3', 'ax.jpg'),
(7, 'slide number 4', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

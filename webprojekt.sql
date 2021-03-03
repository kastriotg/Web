-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 09:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `paragraph`) VALUES
(1, 'About Our Restaurant', 'Lorem ipsum dolor sit amet consectetur adipisicing impedit eius elit. Blanditiis perferendis impedit eius natus fugit eum aliquid alias labore impedit eius possimus, quia et corrupti velit suscipit nemo tempora recusandae corporis consequuntur hic ad minus voluptatum.\r\nDignissimos dolor iste eligendi ullam molestiae ducimus commodi optio. Quidem veniam laboriosam earum repellendus cum et fuga expedita eos!\r\nUnde odit nam, animi temporibus iste quos libero?Lorem ipsum dolor sit amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit.\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam perferendis voluptas asperiores!');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `mainTitleText` varchar(200) NOT NULL,
  `subTitleText` varchar(200) NOT NULL,
  `paragraphText` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `mainTitleText`, `subTitleText`, `paragraphText`) VALUES
(1, 'SUBSCRIBE US', 'Be Updated', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus minima ipsa sint, nostrum nesciunt reiciendis blanditiis itaque quisquam ea facilis placeat, natus.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `galleryPhotos` text NOT NULL,
  `photoAlt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `galleryPhotos`, `photoAlt`) VALUES
(9, 'gallery1.jpg', ''),
(10, 'gallery2.jpg', ''),
(11, 'gallery3.jpg', ''),
(12, 'gallery4.jpg', ''),
(13, 'gallery5.jpg', ''),
(14, 'gallery6.jpg', ''),
(15, 'gallery7.jpg', ''),
(16, 'gallery8.jpg', ''),
(17, 'gallery1.jpg', ''),
(18, '', ''),
(19, '', ''),
(20, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `upperText` varchar(200) NOT NULL,
  `mainText` varchar(200) NOT NULL,
  `belowText` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `upperText`, `mainText`, `belowText`, `logo`) VALUES
(1, 'welcome to our', 'RESTAURANT', 'THE BEST MULTI CUISINE RESTAURANT', 'Parsi Food');

-- --------------------------------------------------------

--
-- Table structure for table `menues`
--

CREATE TABLE `menues` (
  `id` int(11) NOT NULL,
  `foodName` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menues`
--

INSERT INTO `menues` (`id`, `foodName`, `image`, `description`, `price`) VALUES
(3, 'Burger', 'hamburger.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 1.99),
(4, 'Pizza', 'pizza.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 4.99),
(5, 'Soup', 'soup.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 3),
(6, 'Salad', 'salat.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 2),
(7, 'Pagaqe', 'pagaqe2.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 3),
(8, 'Pagaqe 2x', 'pagaqe2.png', 'Lorem ipsum dolor sit amet consectetur adipisicing.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `foodName` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `foodDescription` varchar(255) NOT NULL,
  `foodPhoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `foodName`, `price`, `foodDescription`, `foodPhoto`) VALUES
(1, 'Vegiable Role', 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, iusto!', 'menuItem11.png'),
(2, 'Beef', 14, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, iusto!', 'menuItem22.png'),
(3, 'Role Spicy', 19, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, iusto!', 'menuItem33.png'),
(4, 'Role Chicken', 7, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, iusto!', 'menuItem44.png');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pageName` varchar(200) NOT NULL,
  `pageUrl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pageName`, `pageUrl`) VALUES
(1, 'HOMEPAGE', 'index.php'),
(2, 'GALLERY', 'gallery.php'),
(3, 'OFFERS', 'offers.php'),
(4, 'MENU', 'menu.php'),
(5, 'RESERVATIONS', 'reservations.php'),
(10, 'ABOUT US', 'about.php');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `tel` varchar(100) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `date`, `tel`, `time`) VALUES
(1, 'asdasd', 'kotti@live.com', '2019-01-01', '044323112', '15:02:00'),
(2, 'testing2', 'kotti@live.com', '2019-01-01', '044323112', '15:02:00'),
(3, 'Kastriot Gashi', 'kastriotsgashi@gmail.com', '2019-07-31', '044111222', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `role`, `randSalt`) VALUES
(1, 'kast', '123', 'Kastriot', 'Gashi', 'kastriotsgashi@gmail.com', 'admin', ''),
(2, 'Johny', '123321', 'John', 'Doe', 'john@gmail.com', 'admin', ''),
(3, 'Jim', '321', 'Jimmy', 'Joe', 'jim@hotmail.com', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menues`
--
ALTER TABLE `menues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menues`
--
ALTER TABLE `menues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

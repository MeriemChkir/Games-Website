-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 02:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `Email`, `Password`, `id`) VALUES
('meriem', 'chkirmeriem619@gmail.com', '202cb962ac59075b964b07152d234b70', 124),
('', '', 'd41d8cd98f00b204e9800998ecf8427e', 125),
('', 'dzedz@dzdzd.com', '202cb962ac59075b964b07152d234b70', 126),
('', 'qq@gmail.com', '202cb962ac59075b964b07152d234b70', 127),
('', 'leo@gmail.com', '202cb962ac59075b964b07152d234b70', 128),
('', 'sonia@gmail.com', '202cb962ac59075b964b07152d234b70', 129),
('ahmed', 'ahmed@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 130),
('yosr', 'yosr@gmail.com', '5e36941b3d856737e81516acd45edc50', 131),
('chayma', 'chaymachetoui@gmail.comom', '202cb962ac59075b964b07152d234b70', 132),
('salma', 'salma@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 133),
('test', 'test@gmail.com', '698d51a19d8a121ce581499d7b701668', 134),
('test2', 'test2@gmail.com', '7f6ffaa6bb0b408017b62254211691b5', 135),
('lina', 'lina50074471@gmail.com', '202cb962ac59075b964b07152d234b70', 136),
('olfa', 'olfa@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6', 137),
('achraf', 'achraf@gmail.com', '202cb962ac59075b964b07152d234b70', 138),
('sonia', 'sonia00@gmail.com', '202cb962ac59075b964b07152d234b70', 139),
('ali', 'ali@gmail.com', '3def184ad8f4755ff269862ea77393dd', 140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

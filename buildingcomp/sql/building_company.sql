-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 07:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `building_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `starting_projects`
--

CREATE TABLE `starting_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `project_price` int(111) NOT NULL,
  `starting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ending_date` date NOT NULL,
  `floors_quantity` int(200) NOT NULL,
  `apartments_quantity` int(200) NOT NULL,
  `office_quantity` int(200) NOT NULL,
  `address` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `poster` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `content` varchar(200) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `birthdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` date NOT NULL,
  `type` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `register_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `password`, `birthdate`, `update_at`, `type`, `register_at`) VALUES
(1, '', 'gior', 'gior@gior.gior', 'eb16c8515068137f6be4b343c6813c17', '2020-08-06 08:03:09', '0000-00-00', '', '2020-08-06 08:03:09'),
(2, '', 'gio', 'gio@gio.gio', '2bb55d712c4dcbda95497e811b696352', '2020-08-06 08:03:24', '0000-00-00', '', '2020-08-06 08:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `starting_projects`
--
ALTER TABLE `starting_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `starting_projects`
--
ALTER TABLE `starting_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

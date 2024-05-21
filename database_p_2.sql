-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: give-me-names-db
-- Generation Time: May 21, 2024 at 11:42 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password_hash`) VALUES
(1, 'tummanoonw1997@gmail.com', '89a59a6d8a480ea16aafd10c95732b70');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `user_id` int NOT NULL,
  `display_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `passport_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` date DEFAULT NULL,
  `date_of_expiry` date DEFAULT NULL,
  `occupation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_dom` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_dom_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm_email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`user_id`, `display_name`, `prefix`, `fname`, `mname`, `lname`, `nationality`, `place_of_birth`, `marital_status`, `date_of_birth`, `passport_no`, `place_of_issue`, `date_of_issue`, `date_of_expiry`, `occupation`, `addr_dom`, `addr_dom_tel`, `addr_perm`, `addr_perm_tel`, `addr_perm_email`, `updated_date`) VALUES
(1, 'Tummanoon W', 'Mr.', 'Tummanoon', NULL, 'Wanchaem', 'Lao', 'Vientiane', 'single', '1997-09-27', 'PA0000000', 'Lao People\'s Democratic Republic', '2016-05-05', '2024-05-04', 'Software Developer', NULL, NULL, NULL, NULL, NULL, '2024-05-21 11:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `visa_forms`
--

CREATE TABLE `visa_forms` (
  `id` int NOT NULL,
  `author_id` int NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `passport_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_issue` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_issue` date DEFAULT NULL,
  `date_of_expiry` date DEFAULT NULL,
  `occupation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_dom` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_dom_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_perm_email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addr_des` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_arrival` date DEFAULT NULL,
  `travel_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_of_stay` smallint DEFAULT NULL,
  `guarantor_des_name` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarantor_des_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarantor_dom_name` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarantor_dom_tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `visa_forms`
--
ALTER TABLE `visa_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visa_forms`
--
ALTER TABLE `visa_forms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

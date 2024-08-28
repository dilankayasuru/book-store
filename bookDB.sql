-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 08:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--
CREATE DATABASE IF NOT EXISTS `bookdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookdb`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `author`, `date_added`) VALUES
(1, '978-0140449136', 'The Odyssey', 'Homer', '2024-08-28 06:24:21'),
(2, '978-0439139601', 'Harry Potter and the Goblet of Fire', 'J.K. Rowling', '2024-08-28 06:24:39'),
(3, '978-0061120084', 'To Kill a Mockingbird', 'Harper Lee', '2024-08-28 06:24:57'),
(4, '978-0451524935', '1984', 'George Orwell', '2024-08-28 06:25:13'),
(5, '978-0679783275', 'The Great Gatsby', 'F. Scott Fitzgerald', '2024-08-28 06:25:32'),
(6, '978-0743273565', 'The Great Gatsby', 'F. Scott Fitzgerald', '2024-08-28 06:25:50'),
(7, '978-0156012195', 'The Sound and the Fury', 'William Faulkner', '2024-08-28 06:26:06'),
(8, '978-0486284736', 'Frankenstein', 'Mary Shelley', '2024-08-28 06:26:25'),
(9, '978-0141439600', 'Jane Eyre', 'Charlotte Brontë', '2024-08-28 06:26:43'),
(10, '978-0316769488', 'The Catcher in the Rye', 'J.D. Salinger', '2024-08-28 06:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

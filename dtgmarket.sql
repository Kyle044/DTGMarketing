-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtgmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_publish` varchar(255) NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `author`, `date_publish`, `file_fk`) VALUES
(2, 'Datagen First Job Fair', 'Datagen Facilities, OPC organized its first ever Job Fair on June 4, 2022 at Zone 11, Tatic covered court Brgy. Bulihan Silang Cavite after a series of lockdown. Numerous students and local visiting candidates participated in the said event. \r\nSome of the positions that were filled on that day were Business Development, Non-voice agents, Voice Agents, Quality Assurance and Front End Developer. \r\nDatagen Facilities OPC is an equal opportunity employer and all qualified applicants will receive consideration for employment without regard to race, color, religion, sex, sexual orientation, gender identity or expression, pregnancy, age, national origin and disability status.', 'Ms Linet', '2022-07-27', 48);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_publish` varchar(255) NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `position`, `supervisor`, `department`, `description`, `file_fk`) VALUES
(5, 'Team Leader', 'Team Leader', 'John', 'Field', 'Responsible for delivery of client satisfaction, business results and employee satisfaction in order to ensure achievement of scorecard and client goals Participate in, and support, the Quality Management (QM) Program in identifying and acting on opportunities that improve the quality, safety and value of the service we provide to our clients and our employees.', 52),
(6, 'Compliance officer', 'Compliance officer', 'Sir John', 'Operation', 'Implement and manage an effective legal compliance program Develop and review company policies. Advise management on the company’s compliance with laws and regulations through detailed reports. Create and manage effective action plans in response to audit discoveries and compliance violations.', 50),
(7, 'QA Analyst', 'QA Analyst', 'Sir John', 'Field', 'Identify and resolve workflow and production issues and address to higher level Ensure standards and QA handbook regulations are observed Address and discuss issues and proposed solutions with superiors Document quality assurance activities and create audit reports. Make recommendations for improvement.', 53),
(9, 'Business Development Executive', 'Business Development Executive', 'John', 'Field', 'Identify opportunities for new business development and develop business proposals/contracts to draw in more revenue from existing and/or new clients or follow up on leads and conducting research on target clients;', 51),
(10, 'Front End Developer', 'Front End Developer', 'Alvin', 'Web Dev', 'Front-end developer is a tech-savvy role that requires expertise in web design and involves translating company needs into interactive web applications and reporting systems. Will be responsible for ensuring that the applications are optimized both in technology and aesthetics while providing the best user experience.\r\n                        ', 46);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `size` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `directory`, `size`) VALUES
(46, '62de4e3d21e093.42085524.jpg', '../uploads/62de4e3d21e093.42085524.jpg', 1187188),
(48, '62e08ba1ad1860.09991491.jpg', '../uploads/62e08ba1ad1860.09991491.jpg', 435285),
(50, '62e08dfe7ed0a8.98027109.jpeg', '../uploads/62e08dfe7ed0a8.98027109.jpeg', 60528),
(51, '62e08e32a52397.42569585.jpeg', '../uploads/62e08e32a52397.42569585.jpeg', 61512),
(52, '62e08e61519405.52825698.jpeg', '../uploads/62e08e61519405.52825698.jpeg', 62348),
(53, '62e08eb8954af8.02735667.jpeg', '../uploads/62e08eb8954af8.02735667.jpeg', 75124),
(54, '62e08ff76a6071.29804423.jpg', '../uploads/62e08ff76a6071.29804423.jpg', 458763),
(55, '62e0903d406ed8.20655484.jpeg', '../uploads/62e0903d406ed8.20655484.jpeg', 299115),
(56, '62e090538d14d6.85753650.jpg', '../uploads/62e090538d14d6.85753650.jpg', 764191);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallerypic`
--

CREATE TABLE `gallerypic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `gallery_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `supervisor`, `file_fk`) VALUES
(26, 'Email Support', 'We respond to customers inquiries and/or concerns promptly either through email or chat. We develop a messaging interface that would support customer concern and partners need.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel unde reiciendis aperiam, quas error a doloribus impedit cupiditate, consectetur minima, maiores fugit! Magni suscipit recusandae maiores laboriosam beatae harum repellendus itaque eligendi. Volu', 54),
(27, 'Inbound Call Support', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel unde reiciendis aperiam, quas error a doloribus impedit cupiditate, consectetur minima, maiores fugit! Magni suscipit recusandae maiores laboriosam beatae harum repellendus itaque eligendi. Volu', 'Sir John', 55),
(28, 'Outbound Call Support', 'We employ a proactive approach in dealing with customers to strengthen customer relationships and improving the quality of customer experience. We maintain a consistent standard of customer service excellence.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel unde reiciendis aperiam, quas error a doloribus impedit cupiditate, consectetur minima, maiores fugit! Magni suscipit recusandae maiores laboriosam beatae harum repellendus itaque eligendi. Volu', 56);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(255) NOT NULL,
  `usersPosition` varchar(255) NOT NULL,
  `usersOffice` varchar(255) NOT NULL,
  `usersEmail` varchar(255) NOT NULL,
  `usersPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersPosition`, `usersOffice`, `usersEmail`, `usersPassword`) VALUES
(2, 'John Kyle Razon', 'Web Dev', 'Web Dev Department', 'kylegwapo04@gmail.com', '$2y$10$DTSNqmBAMpoThDoKCz50fuoHDgHHdFpRii1NeBX47PobJVAiQYqS2'),
(10, 'user', 'dev', 'Datagen', 'user@gmail.com', '$2y$10$P/lzMJKn0Hg9Dv7lmOkl9uFuIOxNGM.Ml7xm.4d3lEdYEqrdZfO8i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerypic`
--
ALTER TABLE `gallerypic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallerypic`
--
ALTER TABLE `gallerypic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

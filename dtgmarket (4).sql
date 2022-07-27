-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 08:16 AM
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
  `Q1` varchar(255) NOT NULL,
  `Q2` varchar(255) NOT NULL,
  `Q3` varchar(255) NOT NULL,
  `Q4` varchar(255) NOT NULL,
  `Q5` varchar(255) NOT NULL,
  `R1` varchar(255) NOT NULL,
  `R2` varchar(255) NOT NULL,
  `R3` varchar(255) NOT NULL,
  `R4` varchar(255) NOT NULL,
  `R5` varchar(255) NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `position`, `supervisor`, `department`, `description`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `R1`, `R2`, `R3`, `R4`, `R5`, `file_fk`) VALUES
(13, 'Compliance officer', 'Compliance officer', '', '', 'Demonstrates high level of professionalism, honesty and integrity ', 'Bachelor’s Degree in Law, Finance, Business Management or related field.', 'Preferably 1-4 years experienced employees specializing in law/legal services or equivalent.', 'Has good interpersonal skills, reliable, hardworking, and attention to details.', 'Excellent written and verbal communications', 'Strong leadership skills', 'Implement and manage an effective legal compliance program Develop and review company policies.', 'Advise management on the company’s compliance with laws and regulations through detailed reports.', 'Create and manage effective action plans in response to audit discoveries and compliance violations.', 'Ensure all employees are well aware on the latest regulations and processes by delegating every huddle', 'Resolve employee’s concern about legal compliance and must maintain confidentiality in task being performed', 60),
(14, 'QA Analyst', 'QA Analyst', '', '', 'Preparation and implementation of Quality Assurance Policies and Procedures', 'With at least 1-4 years of BPO experience', 'Excellent written and verbal communications', 'Proficient in Microsoft office and relevant software', 'With Problem Solving and Critical Thinking skills', 'Resourceful and can multitask', 'Preparation and implementation of Quality Assurance Policies and Procedures', 'Perform routine inspections and Quality audits to agents’ call logs', 'Identify and resolve workflow and production issues and address to higher level', 'Ensure standards and QA handbook regulations are observed', 'Address and discuss issues and proposed solutions with superiors', 61),
(15, 'Business Development Executive', 'Business Development Executive', '', '', 'Work with management to develop and implement business development strategy for a defined territory.', 'With at least 1-4 years working experience in BPO Industry', 'Has the ability to handle multiple projects simultaneously', 'Can work under pressure', 'Excellent written and verbal communications', 'Proficient in Microsoft office and relevant software', 'Identify opportunities for new business development and develop business proposals/contracts to draw in more revenue from existing and/or new clients or follow up on leads and conducting research on target clients;', 'Negotiate with clients to secure the most attractive prices for the development in the company through increased sales and customer acquisition;', 'Review clients\' feedback and implement necessary changes that meets desirability for both end;', 'Coordinate with management and clients to identify business development opportunities with existing and new clients;', 'Ability to generate revenue by identifying pain points and suggesting suitable products or services;', 62),
(17, 'Front End Developer', 'Front End Developer', '', '', 'Review and optimize the application usage by monitoring key metrics and rectifying the issues proactively.          ', 'Confident in writing code using HTML, HTML5, CSS, CSS3, and Javascript', 'Familiar with UI layouts, SASS, Bootstrap, and the CSS GRID system', 'Experienced using Bootstrap in creating websites from scratch', 'Proficient with JavaScript frameworks such as jQuery, Angular et al', 'Experience debugging using JavaScript-based tools like Chrome Developer Console', 'Work on various projects in collaboration with multiple teams ', 'Creating and developing web applications as per the company requirements ', 'Manipulates existing themes and creates one if necessary.', 'Develops with mobile-responsive integration such as Twitter bootstrap.', 'Implement UI development principles to ensure that the product client-side serves at scale.', 65),
(18, 'Team Leader', 'Team Leader', '', '', 'Responsible for delivery of client satisfaction, business results and employee satisfaction in order to ensure achievement of scorecard and client goals.', 'Minimum of 2 years’ experience from BPO industry as a Team Leader', 'Excellent leadership and communication skills', 'Strong coaching and people-development skills through call listening, quality feedback, etc.', 'Ability to deal with demanding customers and escalations', 'Energetic and motivating individual', 'Responsible for delivery of client satisfaction, business results and employee satisfaction in order to ensure achievement of scorecard and client goals.', 'Responsible for leading a team of up to 20-30 agents.', 'Provide supervision to both direct and indirect reports to ensure proper floor coverage and maintain a positive leadership presence at all times: “Manage By Walking Around” Responsible for daily call monitoring to provide feedback and coaching of team mem', 'Demonstrate company core values and culture.  Participate in, and support, the Quality Management (QM) Program in identifying and acting on opportunities that improve the quality, safety and value of the service we provide to our clients and our employees', 'Perform other duties as assigned by management.', 67);

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
(48, '62e08ba1ad1860.09991491.jpg', '../uploads/62e08ba1ad1860.09991491.jpg', 435285),
(54, '62e08ff76a6071.29804423.jpg', '../uploads/62e08ff76a6071.29804423.jpg', 458763),
(55, '62e0903d406ed8.20655484.jpeg', '../uploads/62e0903d406ed8.20655484.jpeg', 299115),
(56, '62e090538d14d6.85753650.jpg', '../uploads/62e090538d14d6.85753650.jpg', 764191),
(58, '62e0b3a74a8951.79510555.jpeg', '../uploads/62e0b3a74a8951.79510555.jpeg', 191180),
(60, '62e0c78b42d913.72128597.jpeg', '../uploads/62e0c78b42d913.72128597.jpeg', 75124),
(61, '62e0c8dbcdbdf1.76212712.jpeg', '../uploads/62e0c8dbcdbdf1.76212712.jpeg', 60528),
(62, '62e0c96b998d08.21594382.jpeg', '../uploads/62e0c96b998d08.21594382.jpeg', 61512),
(64, '62e0d662a6e9d6.49529350.jpg', '../uploads/62e0d662a6e9d6.49529350.jpg', 203188),
(65, '62e0d73b268c02.27338518.jpg', '../uploads/62e0d73b268c02.27338518.jpg', 203188),
(66, '62e0d78a6b47c5.29529537.jpg', '../uploads/62e0d78a6b47c5.29529537.jpg', 391137),
(67, '62e0d7eb12b006.20119534.jpg', '../uploads/62e0d7eb12b006.20119534.jpg', 391137);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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

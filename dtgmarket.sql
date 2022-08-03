-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 07:05 AM
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
  `description` text NOT NULL,
  `qualification` text NOT NULL,
  `responsibility` text NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `position`, `description`, `qualification`, `responsibility`, `file_fk`) VALUES
(21, 'Compliance Officer', 'Compliance Officer', ' Implement and manage an effective legal compliance program Develop and review company policies.      ', '<ul>\r\n<li>Bachelor\'s Degree in Law, Finance, Business Management or related field.</li>\r\n<li>Preferably 1-4 years experienced employees specializing in law/legal services or equivalent.</li>\r\n<li>Has good interpersonal skills, reliable, hardworking, and attention to details.</li>\r\n<li>Excellent written and verbal communications</li>\r\n<li>Strong leadership skills</li>\r\n</ul>', '<ul>\r\n<li>Implement and manage an effective legal compliance program Develop and review company policies.</li>\r\n<li>Advise management on the company\'s compliance with laws and regulations through detailed reports.</li>\r\n<li>Create and manage effective action plans in response to audit discoveries and compliance violations.</li>\r\n<li>Ensure all employees are well aware on the latest regulations and processes by delegating every huddle</li>\r\n<li>Resolve employee\'s concern about legal compliance and must maintain confidentiality in task being performed</li>\r\n</ul>', 98),
(22, 'QA Analysts', 'QA Analysts', 'Preparation and implementation of Quality Assurance Policies and Procedures', '<ul>\r\n<li>With at least 1-4 years of BPO experience</li>\r\n<li>Excellent written and verbal communications</li>\r\n<li>Proficient in Microsoft office and relevant software</li>\r\n<li>With Problem Solving and Critical Thinking skills</li>\r\n<li>Resourceful and can multitask</li>\r\n\r\n</ul>', '<ul>\r\n<li>Preparation and implementation of Quality Assurance Policies and Procedures</li>\r\n<li>Perform routine inspections and Quality audits to agents call logs</li>\r\n<li>Identify and resolve workflow and production issues and address to higher level</li>\r\n<li>Ensure standards and QA handbook regulations are observed</li>\r\n<li>Address and discuss issues and proposed solutions with superiors</li>\r\n</ul>', 99),
(23, 'Business Development Executive', 'Business Development Executive', 'Identify opportunities for new business development and develop business proposals/contracts to draw in more revenue from existing and/or new clients or follow up on leads and conducting research on target clients;', '<ul>\r\n<li>With at least 1-4 years working experience in BPO Industry</li>\r\n<li>Has the ability to handle multiple projects simultaneously</li>\r\n<li>Can work under pressure</li>\r\n<li>Excellent written and verbal communications</li>\r\n<li>Proficient in Microsoft office and relevant software</li>\r\n\r\n</ul>', '<ul>\r\n<li>Identify opportunities for new business development and develop business proposals/contracts to draw in more revenue from existing and/or new clients or follow up on leads and conducting research on target clients;</li>\r\n<li>Negotiate with clients to secure the most attractive prices for the development in the company through increased sales and customer acquisition;</li>\r\n<li>Review clients\' feedback and implement necessary changes that meets desirability for both end;</li>\r\n<li>Coordinate with management and clients to identify business development opportunities with existing and new clients;</li>\r\n<li>Ability to generate revenue by identifying pain points and suggesting suitable products or services;</li>\r\n\r\n</ul>', 100),
(24, 'Front End Developer', 'Front End Developer', 'Creating and developing web applications as per the company requirements', '<ul>\r\n<li>Confident in writing code using HTML, HTML5, CSS, CSS3, and Javascript</li>\r\n<li>Familiar with UI layouts, SASS, Bootstrap, and the CSS GRID system</li>\r\n<li>Experienced using Bootstrap in creating websites from scratch</li>\r\n<li>Proficient with JavaScript frameworks such as jQuery, Angular et al</li>\r\n<li>Experience debugging using JavaScript-based tools like Chrome Developer Console</li>\r\n\r\n</ul>', '<ul>\r\n<li>Work on various projects in collaboration with multiple teams</li>\r\n<li>Creating and developing web applications as per the company requirements</li>\r\n<li>Manipulates existing themes and creates one if necessary.</li>\r\n<li>Develops with mobile-responsive integration such as Twitter bootstrap.</li>\r\n<li>Implement UI development principles to ensure that the product client-side serves at scale.</li>\r\n\r\n</ul>', 101);

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
(55, '62e0903d406ed8.20655484.jpeg', '../uploads/62e0903d406ed8.20655484.jpeg', 299115),
(56, '62e090538d14d6.85753650.jpg', '../uploads/62e090538d14d6.85753650.jpg', 764191),
(58, '62e0b3a74a8951.79510555.jpeg', '../uploads/62e0b3a74a8951.79510555.jpeg', 191180),
(64, '62e0d662a6e9d6.49529350.jpg', '../uploads/62e0d662a6e9d6.49529350.jpg', 203188),
(66, '62e0d78a6b47c5.29529537.jpg', '../uploads/62e0d78a6b47c5.29529537.jpg', 391137),
(73, '62e20247da5425.62402965.jpg', '../uploads/62e20247da5425.62402965.jpg', 36263),
(74, '62e206148bff63.95439210.jpg', '../uploads/62e206148bff63.95439210.jpg', 36263),
(77, '62e21a0296a851.47715485.jpg', '../uploads/62e21a0296a851.47715485.jpg', 484804),
(78, '62e21a4813e565.80444308.jpg', '../uploads/62e21a4813e565.80444308.jpg', 361009),
(79, '62e21ade7e4ca7.94205515.jpg', '../uploads/62e21ade7e4ca7.94205515.jpg', 503521),
(80, '62e21b22970509.06251404.jpg', '../uploads/62e21b22970509.06251404.jpg', 42407),
(81, '62e21bc4d79277.99563267.jpg', '../uploads/62e21bc4d79277.99563267.jpg', 503521),
(82, '62e21c0802bb13.64634229.jpg', '../uploads/62e21c0802bb13.64634229.jpg', 503521),
(83, '62e21c50020553.13438299.jpg', '../uploads/62e21c50020553.13438299.jpg', 36263),
(84, '62e21c88332974.00665530.jpg', '../uploads/62e21c88332974.00665530.jpg', 42407),
(85, '62e21cb21f8ff0.16220886.jpg', '../uploads/62e21cb21f8ff0.16220886.jpg', 42407),
(86, '62e21d20b54d72.52065317.jpg', '../uploads/62e21d20b54d72.52065317.jpg', 42407),
(87, '62e21d6fb86f02.62875274.jpg', '../uploads/62e21d6fb86f02.62875274.jpg', 484804),
(89, '62e36177041463.88028965.jpeg', '../uploads/62e36177041463.88028965.jpeg', 214235),
(90, '62e362064ff406.19130957.jpeg', '../uploads/62e362064ff406.19130957.jpeg', 214235),
(91, '62e3626e307e72.98532657.jpeg', '../uploads/62e3626e307e72.98532657.jpeg', 214235),
(98, '62e769f54335b9.48929724.jpeg', '../uploads/62e769f54335b9.48929724.jpeg', 75124),
(99, '62e76f3777a889.40650304.jpeg', '../uploads/62e76f3777a889.40650304.jpeg', 60528),
(100, '62e76fbbb77869.86286613.jpeg', '../uploads/62e76fbbb77869.86286613.jpeg', 61512),
(101, '62e77023cb4ea4.29691106.jpg', '../uploads/62e77023cb4ea4.29691106.jpg', 203188);

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

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `date`) VALUES
(17, 'TESDA-Accredited Institute', 'We are delighted to announce our partnership with Protec International Institute (TESDA-Accredited Institute) and Datagen Facilities OPC, signed last July 4, 2022. The partnership reflects an open exchange of information and personnel between the two companies that aims to provide more opportunities for career growth and professional development.', '2022-07-10');

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

--
-- Dumping data for table `gallerypic`
--

INSERT INTO `gallerypic` (`id`, `title`, `directory`, `size`, `gallery_fk`) VALUES
(44, '62e1d7a5196225.43869267.jpeg', '../uploads/62e1d7a5196225.43869267.jpeg', '186408', 17),
(45, '62e1d7a51a86a7.16754020.jpeg', '../uploads/62e1d7a51a86a7.16754020.jpeg', '214235', 17),
(46, '62e1d7a51ba768.21215147.jpeg', '../uploads/62e1d7a51ba768.21215147.jpeg', '234969', 17),
(47, '62e1d7a51d0888.53271212.png', '../uploads/62e1d7a51d0888.53271212.png', '555242', 17);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `detailed_descrip` text NOT NULL,
  `benefits` text NOT NULL,
  `approach` text NOT NULL,
  `file_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `detailed_descrip`, `benefits`, `approach`, `file_fk`) VALUES
(27, 'Inbound Call Support', 'We provide customer service support to clients by responding to customer inquiries or complaints. We have a proprietary system in placed to ensure that customers experience is seamless. We make sure to provide accurate information and deliver exceptional customer service throughout the entire interaction with the customers. We have an in-house call center and we are capable to provide 24/7 customer support.', '', '', '', 55),
(28, 'Outbound Call Support', 'We employ a proactive approach in dealing with customers to strengthen customer relationships and improving the quality of customer experience. We maintain a consistent standard of customer service excellence.', '', '', '', 56);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallerypic`
--
ALTER TABLE `gallerypic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

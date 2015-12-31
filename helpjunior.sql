-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 01:10 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpjunior`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`) VALUES
(1, 'Material Science'),
(2, 'Computer Science'),
(3, 'mth'),
(4, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `branch_review`
--

CREATE TABLE `branch_review` (
  `b_review_id` int(11) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_review`
--

INSERT INTO `branch_review` (`b_review_id`, `b_name`, `b_review`) VALUES
(1, 'mth', 'mth is a god branch');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`) VALUES
(1, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `company_review`
--

CREATE TABLE `company_review` (
  `c_review_id` int(11) NOT NULL,
  `c_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `c_review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_review`
--

INSERT INTO `company_review` (`c_review_id`, `c_name`, `c_review`) VALUES
(1, 'samsung', 'samsung is a korean company..');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `course_branch` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_branch`) VALUES
(1, 'mse301', 'material science');

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE `course_review` (
  `c_review_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_review`
--

INSERT INTO `course_review` (`c_review_id`, `c_name`, `c_review`) VALUES
(1, 'mse301', 'this is my course..');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `faculty_branch` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_branch`) VALUES
(1, 'sunny', 'cse'),
(2, 'manish', 'mth'),
(3, 'vivechen', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_review`
--

CREATE TABLE `faculty_review` (
  `f_review_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_review` text,
  `f_review_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_review`
--

INSERT INTO `faculty_review` (`f_review_id`, `f_name`, `f_review`, `f_review_user_id`) VALUES
(107, 'sunny', 'asfasf', 29),
(108, 'manish', 'hiiii', 28),
(109, 'manish', 'hiiii', 28),
(110, 'manish', 'hiiii', 28);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hashed_password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hashed_password`, `email`) VALUES
(28, 'sunny', '', 'efa9a876e19b4b760d842958482bc6e65a73b4dc', 'khemsev@gmail.co'),
(29, 'manish', '', 'efa9a876e19b4b760d842958482bc6e65a73b4dc', 'sunnysevta95@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branch_review`
--
ALTER TABLE `branch_review`
  ADD PRIMARY KEY (`b_review_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_review`
--
ALTER TABLE `company_review`
  ADD PRIMARY KEY (`c_review_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_review`
--
ALTER TABLE `course_review`
  ADD PRIMARY KEY (`c_review_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_review`
--
ALTER TABLE `faculty_review`
  ADD PRIMARY KEY (`f_review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `branch_review`
--
ALTER TABLE `branch_review`
  MODIFY `b_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company_review`
--
ALTER TABLE `company_review`
  MODIFY `c_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course_review`
--
ALTER TABLE `course_review`
  MODIFY `c_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty_review`
--
ALTER TABLE `faculty_review`
  MODIFY `f_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

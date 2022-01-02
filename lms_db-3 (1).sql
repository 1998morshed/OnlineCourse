-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(6, 'Algorithm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Morshed', '../image/courseimg/algo.jpg', '3 hours', 2500, 3000),
(7, 'Learn PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Ashraful', '../image/courseimg/php.jpg', '3 hours', 500, 1200),
(8, 'Learn C++', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Saiful', '../image/courseimg/C++.jpg', '3 days', 3000, 4000),
(10, 'Python', 'There are a few things in the spec that donâ€™t have any browser support yet. One is the value â€œstart endâ€ which would align the first line as if was â€œstartâ€ and any subsequent', 'Shamim', '../image/courseimg/python.jpg', '10 Days', 2500, 2800),
(11, 'Machine Learning', 'Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more accurate at predicting outcomes.', 'Dr. Abul Kalam', '../image/courseimg/ML.png', '10 hours', 7000, 10000),
(12, 'Computer Networking', 'Computer Network Systems Limited | 612 followers on LinkedIn. CNS Limited has crossed its arduous journey of being an industry leader as a Total IT Solution', 'Dr. Piyal Khan', '../image/courseimg/network.jpg', '20 hours', 3000, 5000),
(13, 'Mathematical Analysis  ', 'Mathematics Test. Overview. The test consists of approximately 66 multiple-choice questions drawn from courses commonly offered at the undergraduate level.', 'Dr. Ayub Ali', '../image/courseimg/math.png', '30 hours', 15000, 20000),
(14, 'Competitional Geometry ', 'This course represents an introduction to computational geometry â€“ a branch of algorithm theory that aims at solving problems about geometric objects.', 'Neaj Morshad Ashik', '../image/courseimg/geo.jpg', '10 hours', 3000, 4000),
(15, 'Object Orientate Programming ', 'Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic', 'Shariar Khan Piyal', '../image/courseimg/java-oops.png', '15 hours', 4000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `co_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respmsg` text NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`co_id`, `order_id`, `stu_email`, `course_id`, `status`, `respmsg`, `amount`, `order_date`) VALUES
(1, 'ORDS1120115', 's@gmail.com', 10, 'TXN_SUCCESS', 'Txn Success', 2500, '2020-09-26'),
(2, 'ORDS112928', 's@gmail.com', 6, 'TXN_SUCC', 'Tnx_Success', 2500, '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(4, ' There are two new values in CSS3 as well, start and end. These values make multiple language support easier For example, English is a left-to-right (ltr) language and Arabic is a right-to-left (rtl) language', 3),
(5, ' There are two new values in CSS3 as well, start and end. These values make multiple language support easier For example, English is a left-to-right (ltr) language and Arabic is a right-to-left (rtl) language', 4),
(6, ' There are two new values in CSS3 as well, start and end. These values make multiple language support easier For example, English is a left-to-right (ltr) language and Arabic is a right-to-left (rtl) language', 2),
(7, ' There are a few things in the spec that donâ€™t have any browser support yet. One is the value â€œstart endâ€ which would align the first line as if was â€œstartâ€ and any subsequent lines as if it was', 5),
(15, ' There is also match-parent, which is similar to inherit, only that the new value is calculated against the current elementâ€™s direction instead of, you know, not doing that.', 8),
(16, ' There is also match-parent, which is similar to inherit, only that the new value is calculated against the current elementâ€™s direction instead of, you know, not doing that.', 10),
(17, ' There is also match-parent, which is similar to inherit, only that the new value is calculated against the current elementâ€™s direction instead of, you know, not doing that.', 9),
(18, ' There is also match-parent, which is similar to inherit, only that the new value is calculated against the current elementâ€™s direction instead of, you know, not doing that.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(7, 'Using of loop', 'ine as possible and the first word on that line is along the left edge and the last word is along the right edge.', '../lessonvid/Video12.mp4', 9, 'Data Structure'),
(8, 'Using of Search Algorithm', 'ine as possible and the first word on that line is along the left edge and the last word is along the right edge.', '../lessonvid/Video12.mp4', 9, 'Data Structure'),
(9, 'Graph Theory', 'ine as possible and the first word on that line is along the left edge and the last word is along the right edge.', '../lessonvid/Video12.mp4', 9, 'Data Structure'),
(10, 'Introduction to OOP', 'ine as possible and the first word on that line is along the left edge and the last word is along the right edge.', '../lessonvid/Video12.mp4', 8, 'Learn C++'),
(11, 'Classification of C++', 'ine as possible and the first word on that line is along the left edge and the last word is along the right edge.', '../lessonvid/Video12.mp4', 8, 'Learn C++'),
(12, 'Introduction to Python', 'There are a few things in the spec that donâ€™t have any browser support yet. One is the value â€œstart endâ€ which would align the first line as if was â€œstartâ€ and any subsequent lines as if it was', '../lessonvid/Video12.mp4', 10, 'Python Programmin'),
(13, 'Introduction to AI', ' One is the value â€œstart endâ€ which would align the first line as if was â€œstartâ€ and any subsequent lines as if it was â€œendâ€. Another is giving the value a string, like text-align: \".\" start; The text will aline along the first occurrence of that <', '../lessonvid/Video6.mp4', 12, 'Artifial Intelligence'),
(14, 'Introduction to Algorithm', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is att', '../lessonvid/Video11.mp4', 6, 'Algorithm'),
(16, 'Python Programming', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print,', '../lessonvid/Video13.mp4', 10, 'Python'),
(17, 'Data type and variable int python', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ', '../lessonvid/Video5.mp4', 10, 'Python'),
(18, 'Introduction to Machine Learning', 'Machine learning (ML) is a type of artificial intelligence (AI) that allows software applications to become more accurate at predicting outcomes without being explicitly programmed to do so. Machine learning algorithms use historical data as input to predict new output values.', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 11, 'Machine Learning'),
(19, 'Supervised Learning and Linear Regression', 'In the most simple words, Linear Regression is the supervised Machine Learning model in which the model finds the best fit linear line between the independent and dependent variable i.e it finds the linear relationship between the dependent and independent.', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 11, 'Machine Learning'),
(20, 'Input Output Operation', 'Python Output Using print() function ... We use the print() function to output data to the standard output device (screen). We can also output data to a file, but ', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 10, 'Python'),
(21, 'Boolean Values', 'Python Output Using print() function ... We use the print() function to output data to the standard output device (screen). We can also output data to a file, but ', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 10, 'Python'),
(22, 'Conditional Execution', 'Python Output Using print() function ... We use the print() function to output data to the standard output device (screen). We can also output data to a file, but ', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 10, 'Python'),
(23, 'List and List Processing', 'Python Output Using print() function ... We use the print() function to output data to the standard output device (screen). We can also output data to a file, but ', '../lessonvid/Machine Learning Basics _ What Is Machine Learning _ Introduction To Machine Lea.mp4', 10, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'Saiful Islam', 's@gmail.com', '123', 'Software Eng.', '../image/stu/saiful1.jpg'),
(8, 'Morshed Ali', 'm@gmail.com', '1234', 'Web Dev', '../image/stu/me 1.1.jpg'),
(9, 'Ashraful Haque', 'ash@gmail.com', '123', 'Programmer', '../image/stu/as.jpg'),
(10, 'Shahin  Alam', 'sa@gmail.com', '123', 'Teacher', '../image/stu/Shahin final 2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

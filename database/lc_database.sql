-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 09:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `phone_number`, `email`, `password`, `confirm_password`, `birth_date`, `gender`) VALUES
(1, 'mohamed', 'ooooooo', '01234567899', 'mohamed@gmail.com', '01234', '01234', '2023-04-12', ''),
(2, 'ibrahim', 'nnnnnnnnn', '01234567899', 'ibrahim@gmail.com', '0147', '0147', '2023-04-02', ''),
(3, 'ahmed', 'benha', '01234567899', 'ahmed@gmail.com', '0147', '0147', '2023-05-24', ''),
(11, 'mohamed ahmed', 'benha', '01234567899', 'mohamed_0@gmail.com', '0147', '0147', '2023-05-16', ''),
(12, 'adel', 'benha', '01234567899', 'adel@gmail.com', '0147', '0147', '2023-05-24', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `patient_email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_name`, `patient_email`, `phone_number`, `date`, `time`) VALUES
(6, 'mohamed', 'mohamed@gmail.com', '01234567899', '2023-05-23', '01:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `patient_email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `patient_name`, `patient_email`, `message`, `p_id`) VALUES
(1, 'mohamed', 'mohamed@gmail.com', 'aaaaaaaaaa', NULL),
(2, 'ahmed', 'ahmed@gmail.com', 'mmmmmmmmmmmmmmmmmm', NULL),
(3, 'ali', 'ali@gmail.com', 'aaaaaaaa', NULL),
(4, 'ahmed', 'ahmed@gmail.com', 'mmmmmmmmmmmmmmmmmm', NULL),
(5, 'ali', 'ali@gmail.com', 'aaaaaaaa', NULL),
(6, 'mohamed', 'mohamed@gmail.com', 'hello', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `patient_email` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `patient_name`, `patient_email`, `symptoms`, `image`, `result`, `p_id`) VALUES
(98, 'mohamed', 'mohamed@gmail.com', 'General fatigue and asthenia , Feeling sick and tired', '', 'You have early stage cirrhosis.', NULL),
(99, 'mohamed', 'mohamed@gmail.com', 'General fatigue and asthenia , Blackening or yellowing of the stool', '', 'You have early stage cirrhosis.', NULL),
(100, 'mohamed', 'mohamed@gmail.com', 'Blackening or yellowing of the stool , alcoholism', '', 'You have late stage cirrhosis.', NULL),
(101, 'mohamed', 'mohamed@gmail.com', 'Lose of weight , alcoholism', '', 'You have early stage cirrhosis.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialization`, `info`, `location`, `schedule`, `phone_number`) VALUES
(1, 'Mohamed El Sayed\r\n', 'Specialist of Hepatology and Gastroenterology\r\n', 'Hepatologist Specialized in Adult Hepatology and Adult Gastroenterology and Endoscopy', '6th of October', 'sat-mon. 5:00Pm\r\n', '+201232214255'),
(2, 'Ayman Omar', 'Specialist of Gastroenterology and hepatology consultant Cairo university', 'Hepatologist Specialized in Adult Hepatology', 'Ahmed Tayser St. From Marghany', 'sat-mon. 5:00Pm', '+201232214255'),
(3, 'mohamed akl', 'professor and consultant of hepatic diseases and GIT endoscopy', 'Hepatologist Specialized in Adult Internal Medicine, Adult Gastroenterology and Endoscopy and Adult Hepatology', 'Shibin El-Kom : medan sharaf street', 'sat-mon. 5:00Pm', '+201232214255'),
(4, 'Shahenda Hossam', 'Specialist in internal medicine, liver, digestive system and endoscopy', 'Gastroenterologist Specialized in Adult Internal Medicine, Adult Gastroenterology and Endoscopy, Adult Hepatology and Adult Diabetes and Endocrinology', 'Banha : Old Directorate Street', 'sat-mon. 5:00Pm', '+201232214255'),
(5, 'Mohamed Hamid', 'Consultant of Hepatology', 'Hepatologist Specialized in Adult Hepatology and Pediatric Hepatology', 'Hospital Nile Badrawi (El-Maadi) Nile Corniche Street.', 'sat-mon. 5:00Pm', '+201232214255'),
(6, 'Nadia Elwan', 'Prof. of Tropical Medicine, Tanta University.', 'Hepatologist Specialized in Adult Internal Medicine and Adult Hepatology', 'Tanta : ElGalaa st.', 'sat-mon. 5:00Pm', '+201232214255');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `address`, `phone_number`, `email`, `password`, `confirm_password`, `birth_date`, `gender`) VALUES
(6, 'mohamed', 'benha', '01234567899', 'mohamed@gmail.com', '01234', '01234', '2023-06-15', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `patients_symptoms`
--

CREATE TABLE `patients_symptoms` (
  `id` int(11) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `drug` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `ascites` varchar(255) NOT NULL,
  `hepatomegaly` varchar(255) NOT NULL,
  `spiders` varchar(255) NOT NULL,
  `edema` varchar(255) NOT NULL,
  `bilirubin` float NOT NULL,
  `cholesterol` float NOT NULL,
  `albumin` float NOT NULL,
  `copper` float NOT NULL,
  `alk_phos` float NOT NULL,
  `sgot` float NOT NULL,
  `tryglicerides` float NOT NULL,
  `platelets` float NOT NULL,
  `prothrombin` float NOT NULL,
  `stage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients_symptoms`
--

INSERT INTO `patients_symptoms` (`id`, `patient_email`, `status`, `drug`, `age`, `sex`, `ascites`, `hepatomegaly`, `spiders`, `edema`, `bilirubin`, `cholesterol`, `albumin`, `copper`, `alk_phos`, `sgot`, `tryglicerides`, `platelets`, `prothrombin`, `stage`) VALUES
(2, 'mohamed@gmail.com', 'D', 'D-penicillamine', 21464, 'F', 'Y', 'Y', 'Y', 'Y', 14.5, 261, 2.6, 156, 1718, 137.95, 172, 190, 12.2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_id` (`p_id`),
  ADD KEY `patient_email` (`patient_email`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patients_symptoms`
--
ALTER TABLE `patients_symptoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients_symptoms`
--
ALTER TABLE `patients_symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disease`
--
ALTER TABLE `disease`
  ADD CONSTRAINT `disease_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

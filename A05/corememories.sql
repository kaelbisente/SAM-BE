-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 11:15 AM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, '../A05/assets/beachgrppic.jpg', 'The warmth of friendship is best experienced when shared under the sun. This moment captures the joy of connection, where stories are exchanged, and memories are made on the golden sands of San Juan, Batangas Beach', NULL),
(2, 1, '../A05/assets/pupbomb.jpg', 'At DevCon in UB Lipa, my friends and I explored the rapid emergence of new technologies. The conference featured exciting insights on AI, blockchain, and other innovations transforming industries. It was a great opportunity to learn, network, and discuss the future of tech with passionate individual', NULL),
(3, 1, '../A05/assets/pares.jpg', 'Whether it\'s a tropical cocktail with a splash of fruit or a chilled beverage on a sunny afternoon, these moments of joy remind us to savor the little things in life. Each sip brings a sense of relaxation, whether you\'re unwinding with friends or enjoying a quiet moment to yourself.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Friendly Island', 'A warm haven of kindness and connection, where friendships flourish and smiles abound', 'Friendly Island is a heartwarming sanctuary that embodies my love for building meaningful relationships and spreading positivity. It’s a place where I nurture bonds through genuine conversations, shared experiences, and unwavering support. This island thrives on empathy, understanding, and the joy of making others feel valued. Whether it’s offering a listening ear, sharing a laugh, or celebrating life’s moments together, Friendly Island is a reflection of my commitment to fostering connections that enrich life’s journey.', NULL, '', 'active'),
(2, 'Sports Island', 'An energetic hub where diverse sports come alive, fueling both fun and fitness.', 'Sports Island is a vibrant realm dedicated to my passion for athletic activities. It’s a place where I explore a variety of sports that keep me active and engaged, including badminton, table tennis, volleyball, basketball, running, and cycling. Each sport represents a unique way to challenge myself, build endurance, and enjoy teamwork and competition. Sports Island reflects not just physical activity but also the joy and camaraderie that come with staying fit and pursuing new athletic goals.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

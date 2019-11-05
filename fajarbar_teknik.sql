-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 11:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fajarbar_teknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `about1`
--

CREATE TABLE `about1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about1`
--

INSERT INTO `about1` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 2, 2, '<p>Welcome to&nbsp;<strong>FAJAR BARU MAKMUR TEKNIK&nbsp;</strong>, a leading supplier of conveyor, tank, formulation, mixing and liquid processing equipment, and customize systems. Have you ever visited us before, or this is your first time, you will find doing business with us summarized in one word:&nbsp;<strong>Simple.</strong></p><p>From finding out what your application requests to getting your product in your hands quickly, we are an CREATIVE manufacturer of the industry that constantly strives to make the whole process simple. We understand that our customers coordinate a large number of projects and we are eager to help them solve their needs simply and effectively.</p><p><strong>Why do our customers trust FAJAR BARU MAKMUR TEKNIK?</strong></p><p><strong>Options&nbsp;</strong>: We have one of the biggest product offerings in the Industry world.<br /><strong>Convenience&nbsp;</strong>: We can send almost all of our Products to you in just a few days.<br /><strong>Quality&nbsp;</strong>: Each Product goes through a final acceptance test before leaving our facility, and our manufacturers and industry experts are ready to help you to ensure your complete satisfaction with each product.</p>', '2019-10-26 17:15:27', '2019-10-26 17:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `about2`
--

CREATE TABLE `about2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `headertext` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about2`
--

INSERT INTO `about2` (`id`, `id_user`, `id_page`, `id_sub_page`, `icon`, `headertext`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 2, 3, 'business_briefcase-24', 'The best worker', 'Our Best Workers are always in top condition while working, it is necessary to provide the best Final results.', '2019-10-26 21:36:02', NULL),
(2, 1, 2, 3, 'design-2_ruler-pencil', 'Best workmanship', 'We work in detail and detail. maximize the use of material for effective and efficient results, so that it does not leave a lot of waste', '2019-10-26 21:36:02', NULL),
(3, 1, 2, 3, 'design_app', 'Best result', '<p>Achieving the best results that we provide, is the result of the best workmanship from the beginning to the end.</p>', '2019-10-26 21:36:02', '2019-10-26 21:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `about3`
--

CREATE TABLE `about3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about3`
--

INSERT INTO `about3` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 2, 4, '<p>Your experience is our top priority. We want you to be 100% satisfied not only with the product, but from initial contact with <strong>FAJAR BARU&nbsp;TEKNIK MAKMUR</strong> to final delivery.</p>', '2019-10-26 21:56:38', '2019-10-26 21:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `action_log`
--

CREATE TABLE `action_log` (
  `id` int(225) NOT NULL,
  `id_user` int(50) NOT NULL,
  `page_area` varchar(225) NOT NULL,
  `detail` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `id_user`, `id_page`, `id_sub_page`, `kota`, `alamat`, `create_at`, `update_at`) VALUES
(1, 1, 1, 6, 'Jakarta', 'Gading Mediterania Residences Ruko 29 H\r\nJl. Boulevard Gading Raya, Kelapa gading Permai, Jakarta Utara 14240, Indonesia', '2019-10-26 12:22:15', NULL),
(2, 1, 1, 6, 'Semarang', 'Kawasan Industri Candi JL. Gatot Subroto Blok XXVII / 5. Semarang 50188 , Jawa Tengah Indonesia', '2019-10-26 12:22:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aplication_field`
--

CREATE TABLE `aplication_field` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `industry_category` varchar(225) NOT NULL,
  `conveyor_system` varchar(10) DEFAULT NULL,
  `tanki_mixer` varchar(10) DEFAULT NULL,
  `formulasi_system` varchar(10) DEFAULT NULL,
  `customized_system` varchar(10) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplication_field`
--

INSERT INTO `aplication_field` (`id`, `id_user`, `id_page`, `id_sub_page`, `industry_category`, `conveyor_system`, `tanki_mixer`, `formulasi_system`, `customized_system`, `create_at`, `update_at`) VALUES
(1, 1, 1, 3, 'Warehouse & Distribution', '1', '1', '1', '1', '2019-10-26 09:17:16', '2019-10-26 11:57:16'),
(2, 1, 1, 3, 'Pharmaceutical', NULL, '1', '1', '1', '2019-10-26 09:44:49', '2019-10-26 09:48:08'),
(3, 1, 1, 3, 'Manufacturing', '1', '1', '1', NULL, '2019-10-26 09:44:50', '2019-10-26 09:47:46'),
(4, 1, 1, 3, 'Packaging / Printing', '1', NULL, NULL, '1', '2019-10-26 09:44:50', '2019-10-26 09:47:56'),
(5, 1, 1, 3, 'Industrial Products', '1', '1', NULL, '1', '2019-10-26 09:44:50', '2019-10-26 09:47:31'),
(6, 1, 1, 3, 'Clean Rooms / High Risk', '1', NULL, '1', '1', '2019-10-26 09:44:50', '2019-10-26 09:46:35'),
(7, 1, 1, 3, 'Logistics Operations', '1', '1', NULL, '1', '2019-10-26 09:44:50', '2019-10-26 09:47:39'),
(8, 1, 1, 3, 'Beverages', '1', NULL, '1', NULL, '2019-10-26 09:44:50', '2019-10-26 09:46:07'),
(9, 1, 1, 3, 'Chemical', NULL, '1', '1', '1', '2019-10-26 09:44:50', '2019-10-26 09:46:18'),
(10, 1, 1, 3, 'Consumer Goods', '1', NULL, '1', NULL, '2019-10-26 09:44:50', '2019-10-26 09:47:23'),
(11, 1, 1, 3, 'Retail Products', '1', '1', NULL, '1', '2019-10-26 09:44:50', '2019-10-26 09:48:24'),
(12, 1, 1, 3, 'Chiller/cold Storage', NULL, NULL, '1', '1', '2019-10-26 09:44:50', '2019-10-26 09:46:27'),
(13, 1, 1, 3, 'Agricultural', '1', '1', '1', '1', '2019-10-26 09:44:50', '2019-10-26 09:46:00'),
(14, 1, 1, 3, 'Construction', '1', '1', NULL, '1', '2019-10-26 09:44:50', '2019-10-26 09:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `number` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `id_user`, `id_page`, `id_sub_page`, `contact`, `number`, `create_at`, `update_at`) VALUES
(1, 1, 1, 6, 'Telephone', '(+6224) 7625823 (Hunting)', '2019-10-26 12:31:31', '2019-10-26 12:31:51'),
(2, 1, 1, 6, 'Fax', '(+6224) 7625832', '2019-10-26 12:31:31', NULL),
(3, 1, 1, 6, 'Whatsapp', '(+62)81931763399\r\n', '2019-10-26 12:31:31', NULL),
(4, 1, 1, 6, 'Email', 'info@fajarbaru.co.id', '2019-10-26 12:31:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 7, 1, '1572166525contact.jpg', 'Contact US', '2019-10-27 15:55:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact2`
--

CREATE TABLE `contact2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact2`
--

INSERT INTO `contact2` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 7, 2, 'Convey your thoughts to us, anything about ideas, suggestions, complaints. Thus we will be very grateful, to further advance the innovative industry.\r\n\r\n\r\n', 'We would love to hear from you!', '2019-10-27 16:03:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact3`
--

CREATE TABLE `contact3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `whatsapp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact3`
--

INSERT INTO `contact3` (`id`, `id_user`, `id_page`, `id_sub_page`, `phone`, `whatsapp`, `email`, `create_at`, `update_at`) VALUES
(1, 1, 7, 3, '0247625823', '6281931763399', 'info@fajarbaru.co.id', '2019-10-27 15:51:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact4`
--

CREATE TABLE `contact4` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact4`
--

INSERT INTO `contact4` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 7, 4, 'Thank you for visiting us. Fajar Baru Teknik Makmur to offer the best value for all products. Please contact us with questions you might have using one of our contact tools listed on this page.', 'Ask Questions', '2019-10-27 16:12:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor1`
--

CREATE TABLE `conveyor1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor1`
--

INSERT INTO `conveyor1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 3, 1, '1572104576Roller-Conveyor-header-image.jpg', 'Conveyor System', '2019-10-26 22:42:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor2`
--

CREATE TABLE `conveyor2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor2`
--

INSERT INTO `conveyor2` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 3, 2, '<p>At <strong>Fajar Baru</strong>, we engineer technology that guides automated solutions. Our products are designed to transport your product from line to line in an automated and manual assembly process. The New Dawn conveyor is designed to move products to the right location, at the right time and at the right position needed for the next phase of the production line. This highly accurate product control allows the New Dawn conveyor to be easily integrated with robots, workers and equipment. We have helped our customers fulfill orders with accuracy and timely delivery. Whether you are delivering individual products, full casings, or pallets, we can recommend the appropriate equipment, technology and material flow layout. Our engineering team designs conveyor systems using 3D modeling tools, allowing you to visualize and simulate how your final system will operate</p>', '2019-10-26 22:52:25', '2019-10-26 22:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `conveyor3`
--

CREATE TABLE `conveyor3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor3`
--

INSERT INTO `conveyor3` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 3, 'Belt conveyor', '15721061661cnvyr7.jpg', '2019-10-26 23:09:26', NULL),
(2, 1, 3, 3, 'Bucket conveyor', '15721061662cnvyr4.jpg', '2019-10-26 23:09:26', NULL),
(3, 1, 3, 3, 'Fleksibel conveyor', '15721061663cnvyr8.jpg', '2019-10-26 23:09:26', NULL),
(4, 1, 3, 3, 'Vertical conveyor', '15721061664cnvyr6.jpg', '2019-10-26 23:09:26', NULL),
(5, 1, 3, 3, 'Pharmaceutical conveyor', '15721061665cnvyr12.jpg', '2019-10-26 23:09:26', NULL),
(6, 1, 3, 3, 'Pneumatic conveyor', '15721061676cnvyr10.jpg', '2019-10-26 23:09:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor4`
--

CREATE TABLE `conveyor4` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor4`
--

INSERT INTO `conveyor4` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 4, 'Conveyor System', '15721132431cnvyrvector.jpg', '2019-10-27 01:07:23', NULL),
(2, 1, 3, 4, 'Conveyor System', '15721132432cnvyrvector3.jpg', '2019-10-27 01:07:23', NULL),
(3, 1, 3, 4, 'Conveyor System', '15721132443cnvyrvector1.jpg', '2019-10-27 01:07:24', NULL),
(4, 1, 3, 4, 'Conveyor System', '15721132444cnvyr3.jpg', '2019-10-27 01:07:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor5`
--

CREATE TABLE `conveyor5` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor5`
--

INSERT INTO `conveyor5` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 3, 5, '<p>At Fajar Baru, we engineer technology that guides automated solutions. Our products are designed to transport your product from line to line in an automated and manual assembly process. The New Dawn conveyor is designed to move products to the right location, at the right time and at the right position needed for the next phase of the production line. This highly accurate product control allows the New Dawn conveyor to be easily integrated with robots, workers and equipment.</p><p><br />We have helped our customers fulfill orders with accuracy and timely delivery. Whether you are delivering individual products, full casings, or pallets, we can recommend the appropriate equipment, technology and material flow layout. Our engineering team designs conveyor systems using 3D modeling tools, allowing you to visualize and simulate how your final system will operate</p>', '2019-10-27 01:17:09', '2019-10-27 01:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `conveyor6left`
--

CREATE TABLE `conveyor6left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor6left`
--

INSERT INTO `conveyor6left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 6, '15721214861cnvyr1.jpg', '2019-10-27 03:24:46', NULL),
(2, 1, 3, 6, '15721214862cnvyr3.jpg', '2019-10-27 03:24:46', NULL),
(3, 1, 3, 6, '15721214863cnvyr5.jpg', '2019-10-27 03:24:46', NULL),
(4, 1, 3, 6, '15721214864CIMG4168.jpg', '2019-10-27 03:24:46', NULL),
(5, 1, 3, 6, '15721214865CIMG4171.jpg', '2019-10-27 03:24:46', NULL),
(6, 1, 3, 6, '15721214866CIMG4172.jpg', '2019-10-27 03:24:46', NULL),
(7, 1, 3, 6, '15721214868CIMG4185.jpg', '2019-10-27 03:24:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor6right`
--

CREATE TABLE `conveyor6right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor6right`
--

INSERT INTO `conveyor6right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 6, '15721217671cnvyr2.jpg', '2019-10-27 03:29:27', NULL),
(2, 1, 3, 6, '15721217672cnvyr7.jpg', '2019-10-27 03:29:27', NULL),
(3, 1, 3, 6, '15721217673CIMG4177.jpg', '2019-10-27 03:29:27', NULL),
(4, 1, 3, 6, '15721217674CIMG4178.jpg', '2019-10-27 03:29:27', NULL),
(5, 1, 3, 6, '15721217675CIMG4184.jpg', '2019-10-27 03:29:27', NULL),
(6, 1, 3, 6, '15721217676CIMG4186.jpg', '2019-10-27 03:29:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor7left`
--

CREATE TABLE `conveyor7left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor7left`
--

INSERT INTO `conveyor7left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 7, '15721218471CIMG3195.jpg', '2019-10-27 03:30:47', NULL),
(2, 1, 3, 7, '15721218472CIMG3196.jpg', '2019-10-27 03:30:47', NULL),
(3, 1, 3, 7, '15721218473CIMG3197.jpg', '2019-10-27 03:30:47', NULL),
(4, 1, 3, 7, '15721218474CIMG3198.jpg', '2019-10-27 03:30:47', NULL),
(5, 1, 3, 7, '15721218475CIMG3199.jpg', '2019-10-27 03:30:47', NULL),
(6, 1, 3, 7, '15721218476CIMG3200.jpg', '2019-10-27 03:30:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conveyor7right`
--

CREATE TABLE `conveyor7right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conveyor7right`
--

INSERT INTO `conveyor7right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 3, 7, '15721219291CIMG3201.jpg', '2019-10-27 03:32:09', NULL),
(2, 1, 3, 7, '15721219292CIMG3202.jpg', '2019-10-27 03:32:09', NULL),
(3, 1, 3, 7, '15721219293CIMG3203.jpg', '2019-10-27 03:32:09', NULL),
(4, 1, 3, 7, '15721219294CIMG3204.jpg', '2019-10-27 03:32:09', NULL),
(5, 1, 3, 7, '15721219295CIMG3205.jpg', '2019-10-27 03:32:09', NULL),
(6, 1, 3, 7, '15721219296CIMG3206.jpg', '2019-10-27 03:32:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi1`
--

CREATE TABLE `formulasi1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi1`
--

INSERT INTO `formulasi1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, '1572154399form3.jpg', 'FORMULASI SYSTEM', '2019-10-27 12:33:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi2`
--

CREATE TABLE `formulasi2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi2`
--

INSERT INTO `formulasi2` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 2, 'Formulation, with lots of help from our experts', '2019-10-27 12:48:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi3`
--

CREATE TABLE `formulasi3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi3`
--

INSERT INTO `formulasi3` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 3, 'You can get it so easily. That is why our experts are very understanding of the concept, pembauatan until finishing the final stage of the formulation industry.', '2019-10-27 12:50:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi4`
--

CREATE TABLE `formulasi4` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi4`
--

INSERT INTO `formulasi4` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(2, 1, 5, 4, '15721556801chemistry-formula.png', '2019-10-27 12:54:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi5`
--

CREATE TABLE `formulasi5` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi5`
--

INSERT INTO `formulasi5` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 5, '15721561061liquid1.jpg', '2019-10-27 13:01:46', NULL),
(2, 1, 5, 5, '15721561062tank2.jpg', '2019-10-27 13:01:46', NULL),
(3, 1, 5, 5, '15721561063liquid6.jpg', '2019-10-27 13:01:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi6`
--

CREATE TABLE `formulasi6` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi6`
--

INSERT INTO `formulasi6` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 6, 'We have built many formulation systems. Next is yours.\r\n\r\n', '2019-10-27 13:19:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi7`
--

CREATE TABLE `formulasi7` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi7`
--

INSERT INTO `formulasi7` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 7, '<p>From one month projects to 5 years of continuous development on the same app.</p><p>We have done it all and then some.</p>', '2019-10-27 13:21:11', '2019-10-27 13:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `formulasi8`
--

CREATE TABLE `formulasi8` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi8`
--

INSERT INTO `formulasi8` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 8, '<p>Whether you&rsquo;re building out a new chemical plant or testing a new process, you want to make sure you are doing business with a company that knows chemical processing and engineering.</p><p>We have a long history in the chemical industry and understand the unique challenges in chemical stirrers and liquid processing equipment. Knowing how materials work together is important and often times does not leave much room for error.</p><p><br />With us you will get precise engineering coupled with expertise and understanding to deliver high quality and safe industrial chemical mixers. Contact us for more information on our liquid processing equipment and chemical mixer machines.</p>', '2019-10-27 13:23:25', '2019-10-27 13:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `formulasi9left`
--

CREATE TABLE `formulasi9left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi9left`
--

INSERT INTO `formulasi9left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 9, '15721588261liquid1.jpg', '2019-10-27 13:47:06', NULL),
(2, 1, 5, 9, '15721588262liquid2.jpg', '2019-10-27 13:47:06', NULL),
(3, 1, 5, 9, '15721588263liquid3.jpg', '2019-10-27 13:47:06', NULL),
(4, 1, 5, 9, '15721588264liquid4.jpg', '2019-10-27 13:47:06', NULL),
(5, 1, 5, 9, '15721588265liquid5.jpg', '2019-10-27 13:47:06', NULL),
(6, 1, 5, 9, '15721588266liquid6.jpg', '2019-10-27 13:47:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi9right`
--

CREATE TABLE `formulasi9right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi9right`
--

INSERT INTO `formulasi9right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 9, '15721588941liquid7.jpg', '2019-10-27 13:48:14', NULL),
(2, 1, 5, 9, '15721588942liquid8.jpg', '2019-10-27 13:48:14', NULL),
(3, 1, 5, 9, '15721588943liquid9.jpg', '2019-10-27 13:48:14', NULL),
(4, 1, 5, 9, '15721588954liquid10.jpg', '2019-10-27 13:48:15', NULL),
(5, 1, 5, 9, '15721588955liquid11.jpg', '2019-10-27 13:48:15', NULL),
(6, 1, 5, 9, '15721588956liquid12.jpg', '2019-10-27 13:48:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi10left`
--

CREATE TABLE `formulasi10left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi10left`
--

INSERT INTO `formulasi10left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 10, '15721591771powder1.jpg', '2019-10-27 13:52:57', NULL),
(2, 1, 5, 10, '15721591782powder2.jpg', '2019-10-27 13:52:58', NULL),
(3, 1, 5, 10, '15721591783tank5.jpg', '2019-10-27 13:52:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formulasi10right`
--

CREATE TABLE `formulasi10right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulasi10right`
--

INSERT INTO `formulasi10right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 10, '15721592181powder3.jpg', '2019-10-27 13:53:38', NULL),
(2, 1, 5, 10, '15721592192tank10.jpg', '2019-10-27 13:53:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(2, 1, 2, 1, '1572084428about.jpg', 'About Us', '2019-10-26 17:07:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home1`
--

CREATE TABLE `home1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home1`
--

INSERT INTO `home1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(11, 1, 1, 1, '1572065787contact.jpg', 'OPTIMAL SOLUTIONS TO OVERCOME TECHNICAL PROBLEMS', '2019-10-26 11:56:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` bigint(225) NOT NULL,
  `id_user` int(225) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `login` varchar(225) DEFAULT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `id_user`, `ip_address`, `login`, `time`) VALUES
(1, 0, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-22 23:38:52'),
(2, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-22 23:43:30'),
(3, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-22 23:45:35'),
(4, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-22 23:46:21'),
(5, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-23 06:55:40'),
(6, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-23 21:05:32'),
(7, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-24 01:48:06'),
(8, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-24 08:44:40'),
(9, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36', '2019-09-26 12:39:12'),
(12, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-04 10:42:52'),
(13, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-04 10:44:11'),
(14, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-04 10:44:40'),
(15, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-04 21:44:52'),
(16, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-05 08:55:31'),
(17, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-05 12:40:21'),
(18, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-05 15:48:52'),
(19, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-06 09:58:48'),
(20, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-06 22:29:18'),
(21, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-07 09:04:32'),
(22, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-07 15:22:13'),
(23, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-08 09:02:34'),
(24, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-08 13:30:48'),
(25, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-10 10:16:27'),
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-11 15:52:51'),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-11 21:16:33'),
(28, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-13 10:22:09'),
(29, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-14 17:11:34'),
(30, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', '2019-10-15 11:55:35'),
(31, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-16 08:45:38'),
(32, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-16 21:45:11'),
(33, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-17 08:33:44'),
(34, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-17 20:30:04'),
(35, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-18 00:45:36'),
(36, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-18 22:35:45'),
(37, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-19 21:23:11'),
(38, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-20 16:09:24'),
(39, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-20 22:40:58'),
(40, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-21 09:19:09'),
(41, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-21 15:30:55'),
(42, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-21 19:39:22'),
(43, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-22 08:42:32'),
(44, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-22 16:57:00'),
(45, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-22 21:29:40'),
(46, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-23 08:49:49'),
(48, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-24 08:38:59'),
(49, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-24 20:32:41'),
(50, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 08:47:20'),
(51, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 15:13:39'),
(52, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 15:14:13'),
(53, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 15:18:17'),
(55, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 15:23:23'),
(56, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-25 21:40:51'),
(57, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-26 08:56:37'),
(58, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-26 16:00:49'),
(59, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-27 06:50:13'),
(60, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-27 12:12:51'),
(61, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-27 16:48:44'),
(62, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', '2019-10-27 17:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `maps` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `id_user`, `id_page`, `id_sub_page`, `maps`, `create_at`, `update_at`) VALUES
(2, 1, 1, 6, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.984425279168!2d110.34789961477345!3d-7.011114194935529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a8dc85b89f7%3A0xcbb2b7a8843b0d6a!2sPT.+Fajar+Baru+Teknik+Makmur!5e0!3m2!1sid!2sid!4v1566199741486!5m2!1sid!2sid\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2019-10-26 16:07:03', '2019-10-27 16:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `our_advantages`
--

CREATE TABLE `our_advantages` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_advantages`
--

INSERT INTO `our_advantages` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(3, 1, 1, 4, 'Over 20 years experience in design, manufacture and supply.', '2019-10-21 12:20:25', '2019-10-23 09:50:07'),
(4, 1, 1, 4, 'Bulk raw material handling and processing.', '2019-10-21 12:20:25', '2019-10-26 10:10:56'),
(5, 1, 1, 4, 'Unit materials handling.', '2019-10-21 12:20:26', '2019-10-23 09:49:40'),
(6, 1, 1, 4, 'Customer based expanding throughout the world in a variety of industries such as agricultural, computer, electonic, food processing, pharmaceutical, chemical, botting and canning, print finishing and packaging.', '2019-10-23 09:48:19', '2019-10-23 09:49:55'),
(7, 1, 1, 4, 'Custom design or adding concept based on the customer needs.', '2019-10-23 09:50:19', NULL),
(8, 1, 1, 4, 'Manufacturing concepts help reduce your cost.', '2019-10-23 09:50:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_partner`
--

CREATE TABLE `our_partner` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_partner`
--

INSERT INTO `our_partner` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 1, 5, '1572083014baygon.png', '2019-10-26 16:40:22', '2019-10-26 16:43:34'),
(2, 1, 1, 5, '15720828222cocacola.png', '2019-10-26 16:40:22', NULL),
(3, 1, 1, 5, '15720828223indofod.png', '2019-10-26 16:40:22', NULL),
(4, 1, 1, 5, '15720828224kimiafarma.png', '2019-10-26 16:40:22', NULL),
(5, 1, 1, 5, '15720828235phapros.png', '2019-10-26 16:40:23', NULL),
(6, 1, 1, 5, '15720828236kino.png', '2019-10-26 16:40:23', NULL),
(7, 1, 1, 5, '15720828237mu.png', '2019-10-26 16:40:23', NULL),
(8, 1, 1, 5, '15720828238ppg.png', '2019-10-26 16:40:23', NULL),
(9, 1, 1, 5, '15720828239saintgobain.png', '2019-10-26 16:40:23', NULL),
(10, 1, 1, 5, '157208282310sariroti.png', '2019-10-26 16:40:23', NULL),
(11, 1, 1, 5, '157208282311fiesta.png', '2019-10-26 16:40:23', NULL),
(12, 1, 1, 5, '157208282312primatex.png', '2019-10-26 16:40:23', NULL),
(13, 1, 1, 5, '157208282313primisima.png', '2019-10-26 16:40:23', NULL),
(15, 1, 1, 5, '15720830951tehbotolsosro.png', '2019-10-26 16:44:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_groups`
--

CREATE TABLE `page_groups` (
  `id` int(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_groups`
--

INSERT INTO `page_groups` (`id`, `description`) VALUES
(1, 'home'),
(2, 'about us'),
(3, 'conveyor'),
(4, 'tangki&mixer'),
(5, 'formulasi'),
(6, 'service'),
(7, 'contact us');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 1, 2, '1572065399page.jpg', 'Conveyor System', '2019-10-26 11:49:43', '2019-10-26 11:49:59'),
(3, 1, 1, 2, '15720653833page2.jpg', 'Formulasi System', '2019-10-26 11:49:43', NULL),
(4, 1, 1, 2, '15720654311page1.jpg', 'Tank & Mixer', '2019-10-26 11:50:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service1`
--

CREATE TABLE `service1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service1`
--

INSERT INTO `service1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 6, 1, '1572162514banner-our-services.png', 'OUR SERVICES', '2019-10-27 14:48:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service2`
--

CREATE TABLE `service2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service2`
--

INSERT INTO `service2` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 2, '15719119601allpages.png', 'Conveyyor header', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 2, '15719119602allpages.png', 'Conveyor Belt', '2019-10-24 17:12:40', NULL),
(3, 1, 6, 2, 'We achieved more than usual For us, service means more.\r\nSo that it helps you in difficult situations.', 'Our Services', '2019-10-25 11:43:30', NULL),
(6, 1, 6, 2, 'We achieve more than the usual\r\nWe provide our client techno commercial solution\r\nMachine installations\r\nWe ensure timely delivery of the ordered Machinery to our clients.', 'Service Performances', '2019-10-25 11:43:30', NULL),
(7, 1, 6, 2, '<p><strong>More than 70 exper</strong>t engineers which provide warranty support effectively.</p>', 'Warranty Support', '2019-10-25 11:46:07', '2019-10-25 11:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `service3`
--

CREATE TABLE `service3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service3`
--

INSERT INTO `service3` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, '15719119601allpages.png', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 1, '15719119602allpages.png', '2019-10-24 17:12:40', NULL),
(5, 1, 6, 3, '15721635691cnvyrvector2.jpg', '2019-10-27 15:06:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service4`
--

CREATE TABLE `service4` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service4`
--

INSERT INTO `service4` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, '15719119601allpages.png', 'Conveyyor header', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 1, '15719119602allpages.png', 'Conveyor Belt', '2019-10-24 17:12:40', NULL),
(3, 1, 6, 4, '<p><strong>All you have to do is choose</strong> a product that suits your industry&#39;s needs. We provide the best according to your choice.</p>', 'Our Product', '2019-10-25 12:32:04', '2019-10-25 12:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `service5`
--

CREATE TABLE `service5` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service5`
--

INSERT INTO `service5` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, 'Conveyyor header', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 1, 'Conveyor Belt', '2019-10-24 17:12:40', NULL),
(4, 1, 6, 5, '<p><strong>Industrial conveyors</strong> have many different designs and uses</p>', '2019-10-25 12:46:57', '2019-10-25 12:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `service6`
--

CREATE TABLE `service6` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service6`
--

INSERT INTO `service6` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, '15719119601allpages.png', 'Conveyyor header', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 1, '15719119602allpages.png', 'Conveyor Belt', '2019-10-24 17:12:40', NULL),
(4, 1, 6, 6, '', '<p>Very fast mixing action can <strong>reduce mixing time by up to 90 percent.</strong></p>', '2019-10-25 12:49:04', '2019-10-25 12:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `service7`
--

CREATE TABLE `service7` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service7`
--

INSERT INTO `service7` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 5, 1, '15719119601allpages.png', 'Conveyyor header', '2019-10-24 17:12:40', NULL),
(2, 1, 5, 1, '15719119602allpages.png', 'Conveyor Belt', '2019-10-24 17:12:40', NULL),
(4, 1, 6, 7, '', '<p>Industrial handling <strong>Formulations require special handling</strong></p>', '2019-10-25 12:49:47', '2019-10-25 12:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_page_groups`
--

CREATE TABLE `sub_page_groups` (
  `id` int(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer1`
--

CREATE TABLE `tangkimixer1` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer1`
--

INSERT INTO `tangkimixer1` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 4, 1, '1572135555mixer.jpg', 'Tank & Mixer', '2019-10-27 07:18:29', '2019-10-27 07:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer2`
--

CREATE TABLE `tangkimixer2` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` longtext NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer2`
--

INSERT INTO `tangkimixer2` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 4, 1, '1571897881allpages.png', 'Conveyyor header', '2019-10-24 13:14:01', '2019-10-24 13:18:01'),
(2, 1, 4, 1, '15718976412allpages.png', 'Conveyor Belt', '2019-10-24 13:14:01', NULL),
(4, 1, 4, 2, '<p>&nbsp; &nbsp; Our process can help you develop the best agitator or complete mixing system for your application. We have helped companies in various industries improve performance, cut mixing time, increase yields, and simplify maintenance and cleaning. We make the mixing process even calmer, thanks to our Squealess mechanical seal. Take a look at the mixers and agitators below to help determine the process that best fits your project specifications. We can help you determine the best type of mixer for your application.</p>', '<p>&nbsp; &nbsp; No matter which industry you serve &mdash; Chemical, Dairy, Pharmaceutical, and others &mdash; and no matter what your sizing requirements, we have the right team to assemble whatever style and design you have in mind</p>', '2019-10-24 14:54:45', '2019-10-27 08:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer3`
--

CREATE TABLE `tangkimixer3` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer3`
--

INSERT INTO `tangkimixer3` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `text`, `create_at`, `update_at`) VALUES
(4, 1, 4, 3, '15721389651tanks-design.jpg', 'Fajar Baru Teknik, the leading Customize of liquid processing and mixing equipment. Have you ever visited us before, or this is your first time, you will find doing business with us summarized in one word: Simple.From finding out what your application requests to get your product in your hands quickly, we are an industrial mixer manufacturer that continually strives to make the whole process simple. We understand that our customers coordinate a large number of projects and we want to help them solve their mixing needs simply and effectively.Why do customers trust us?', '2019-10-27 08:16:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer4`
--

CREATE TABLE `tangkimixer4` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `text` longtext NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer4`
--

INSERT INTO `tangkimixer4` (`id`, `id_user`, `id_page`, `id_sub_page`, `text`, `create_at`, `update_at`) VALUES
(1, 1, 4, 4, '<p><strong>Option :&nbsp;</strong>&nbsp;We have one of the largest product offerings in the world of chemical agitation.</p><p><strong>Convenience:</strong>&nbsp; We can send almost all of our mixers to you in just a few days.</p><p><strong>Quality :&nbsp;</strong>&nbsp;Each mixer undergoes final acceptance testing before leaving our facility, and our industrial mixer manufacturers and experts are ready to help you to ensure your complete satisfaction with each product.</p><p><strong>Customer Experience:</strong>&nbsp; Your experience is our top priority.</p><p><em>We want you to be 100% satisfied not only with the product, but from the initial contact with Mixer Direct to the final delivery.</em></p>', '2019-10-24 15:59:02', '2019-10-24 16:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer5left`
--

CREATE TABLE `tangkimixer5left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer5left`
--

INSERT INTO `tangkimixer5left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 4, 5, '15721426521doublepaddle1.jpg', '2019-10-27 09:17:33', NULL),
(2, 1, 4, 5, '15721426532doublepaddle2.jpg', '2019-10-27 09:17:33', NULL),
(3, 1, 4, 5, '15721426533homo1.jpg', '2019-10-27 09:17:33', NULL),
(4, 1, 4, 5, '15721426534homo2.jpg', '2019-10-27 09:17:33', NULL),
(5, 1, 4, 5, '15721426535ribbon4.jpg', '2019-10-27 09:17:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer5right`
--

CREATE TABLE `tangkimixer5right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer5right`
--

INSERT INTO `tangkimixer5right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 4, 5, '15721427071doublepaddle3.jpg', '2019-10-27 09:18:27', NULL),
(2, 1, 4, 5, '15721427082doublepaddle4.jpg', '2019-10-27 09:18:28', NULL),
(3, 1, 4, 5, '15721427083homo3.jpg', '2019-10-27 09:18:28', NULL),
(4, 1, 4, 5, '15721427084homo4.jpg', '2019-10-27 09:18:28', NULL),
(5, 1, 4, 5, '15721427085ribbon3.jpg', '2019-10-27 09:18:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer6left`
--

CREATE TABLE `tangkimixer6left` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer6left`
--

INSERT INTO `tangkimixer6left` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 4, 6, '15721428581tank1.jpg', '2019-10-27 09:20:58', NULL),
(2, 1, 4, 6, '15721428582tank2.jpg', '2019-10-27 09:20:58', NULL),
(3, 1, 4, 6, '15721428583tank3.jpg', '2019-10-27 09:20:58', NULL),
(4, 1, 4, 6, '15721428584tank4.jpg', '2019-10-27 09:20:58', NULL),
(5, 1, 4, 6, '15721428595tank5.jpg', '2019-10-27 09:20:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tangkimixer6right`
--

CREATE TABLE `tangkimixer6right` (
  `id` int(225) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_page` int(100) NOT NULL,
  `id_sub_page` int(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tangkimixer6right`
--

INSERT INTO `tangkimixer6right` (`id`, `id_user`, `id_page`, `id_sub_page`, `file`, `create_at`, `update_at`) VALUES
(1, 1, 4, 6, '15721428871tank6.jpg', '2019-10-27 09:21:27', NULL),
(2, 1, 4, 6, '15721428872tank7.jpg', '2019-10-27 09:21:27', NULL),
(3, 1, 4, 6, '15721428873tank8.jpg', '2019-10-27 09:21:27', NULL),
(4, 1, 4, 6, '15721428884tank9.jpg', '2019-10-27 09:21:28', NULL),
(5, 1, 4, 6, '15721428885tank10.jpg', '2019-10-27 09:21:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$Oj7darH1iNad5458Ej2Mmuf9AzY.qWiMTZ5e5aHXqTKl3lsY0MGjK', 'admin@admin.com', '', '', NULL, NULL, NULL, NULL, NULL, 1268889823, '0000-00-00 00:00:00', 1, 'Aldo', 'Fahujan', 'Fajar Baru Tech', '089690147699');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about1`
--
ALTER TABLE `about1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about2`
--
ALTER TABLE `about2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about3`
--
ALTER TABLE `about3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_log`
--
ALTER TABLE `action_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aplication_field`
--
ALTER TABLE `aplication_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact1`
--
ALTER TABLE `contact1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact2`
--
ALTER TABLE `contact2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact3`
--
ALTER TABLE `contact3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact4`
--
ALTER TABLE `contact4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor1`
--
ALTER TABLE `conveyor1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor2`
--
ALTER TABLE `conveyor2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor3`
--
ALTER TABLE `conveyor3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor4`
--
ALTER TABLE `conveyor4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor5`
--
ALTER TABLE `conveyor5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor6left`
--
ALTER TABLE `conveyor6left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor6right`
--
ALTER TABLE `conveyor6right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor7left`
--
ALTER TABLE `conveyor7left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conveyor7right`
--
ALTER TABLE `conveyor7right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi1`
--
ALTER TABLE `formulasi1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi2`
--
ALTER TABLE `formulasi2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi3`
--
ALTER TABLE `formulasi3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi4`
--
ALTER TABLE `formulasi4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi5`
--
ALTER TABLE `formulasi5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi6`
--
ALTER TABLE `formulasi6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi7`
--
ALTER TABLE `formulasi7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi8`
--
ALTER TABLE `formulasi8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi9left`
--
ALTER TABLE `formulasi9left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi9right`
--
ALTER TABLE `formulasi9right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi10left`
--
ALTER TABLE `formulasi10left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulasi10right`
--
ALTER TABLE `formulasi10right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home1`
--
ALTER TABLE `home1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_advantages`
--
ALTER TABLE `our_advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_partner`
--
ALTER TABLE `our_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_groups`
--
ALTER TABLE `page_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service1`
--
ALTER TABLE `service1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service2`
--
ALTER TABLE `service2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service3`
--
ALTER TABLE `service3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service4`
--
ALTER TABLE `service4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service5`
--
ALTER TABLE `service5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service6`
--
ALTER TABLE `service6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service7`
--
ALTER TABLE `service7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_page_groups`
--
ALTER TABLE `sub_page_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer1`
--
ALTER TABLE `tangkimixer1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer2`
--
ALTER TABLE `tangkimixer2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer3`
--
ALTER TABLE `tangkimixer3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer4`
--
ALTER TABLE `tangkimixer4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer5left`
--
ALTER TABLE `tangkimixer5left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer5right`
--
ALTER TABLE `tangkimixer5right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer6left`
--
ALTER TABLE `tangkimixer6left`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tangkimixer6right`
--
ALTER TABLE `tangkimixer6right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about1`
--
ALTER TABLE `about1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about2`
--
ALTER TABLE `about2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about3`
--
ALTER TABLE `about3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `action_log`
--
ALTER TABLE `action_log`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aplication_field`
--
ALTER TABLE `aplication_field`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact1`
--
ALTER TABLE `contact1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact2`
--
ALTER TABLE `contact2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact3`
--
ALTER TABLE `contact3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact4`
--
ALTER TABLE `contact4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conveyor1`
--
ALTER TABLE `conveyor1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conveyor2`
--
ALTER TABLE `conveyor2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conveyor3`
--
ALTER TABLE `conveyor3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `conveyor4`
--
ALTER TABLE `conveyor4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conveyor5`
--
ALTER TABLE `conveyor5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conveyor6left`
--
ALTER TABLE `conveyor6left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `conveyor6right`
--
ALTER TABLE `conveyor6right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `conveyor7left`
--
ALTER TABLE `conveyor7left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `conveyor7right`
--
ALTER TABLE `conveyor7right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formulasi1`
--
ALTER TABLE `formulasi1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi2`
--
ALTER TABLE `formulasi2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi3`
--
ALTER TABLE `formulasi3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi4`
--
ALTER TABLE `formulasi4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formulasi5`
--
ALTER TABLE `formulasi5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formulasi6`
--
ALTER TABLE `formulasi6`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi7`
--
ALTER TABLE `formulasi7`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi8`
--
ALTER TABLE `formulasi8`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulasi9left`
--
ALTER TABLE `formulasi9left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formulasi9right`
--
ALTER TABLE `formulasi9right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formulasi10left`
--
ALTER TABLE `formulasi10left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formulasi10right`
--
ALTER TABLE `formulasi10right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home1`
--
ALTER TABLE `home1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_advantages`
--
ALTER TABLE `our_advantages`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_partner`
--
ALTER TABLE `our_partner`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service1`
--
ALTER TABLE `service1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service2`
--
ALTER TABLE `service2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service3`
--
ALTER TABLE `service3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service4`
--
ALTER TABLE `service4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service5`
--
ALTER TABLE `service5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service6`
--
ALTER TABLE `service6`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service7`
--
ALTER TABLE `service7`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_page_groups`
--
ALTER TABLE `sub_page_groups`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangkimixer1`
--
ALTER TABLE `tangkimixer1`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tangkimixer2`
--
ALTER TABLE `tangkimixer2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tangkimixer3`
--
ALTER TABLE `tangkimixer3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tangkimixer4`
--
ALTER TABLE `tangkimixer4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tangkimixer5left`
--
ALTER TABLE `tangkimixer5left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tangkimixer5right`
--
ALTER TABLE `tangkimixer5right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tangkimixer6left`
--
ALTER TABLE `tangkimixer6left`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tangkimixer6right`
--
ALTER TABLE `tangkimixer6right`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

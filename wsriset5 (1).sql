-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 05:03 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsriset5`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_id` int(10) UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `group_name` varchar(25) NOT NULL,
  `access_name` tinyint(1) NOT NULL COMMENT '1 : Insert; 2 : Update ; 3 : Delete',
  `target_scope_id` tinyint(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 : Success ; 0 : Failed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_id`, `time`, `user_name`, `group_name`, `access_name`, `target_scope_id`, `description`, `status`) VALUES
(2, '2020-12-17 11:04:04', 'Rifki Gustiawan', 'Administrator', 2, 1, 'Mengubah group user Muh. Restu', 1),
(4, '2020-12-02 00:13:45', '211810567@stis.ac.id', 'Administrator', 1, 1, 'no desc', 1),
(7, '2021-01-21 12:54:33', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 1, 'mengaktifkan user Annisa Silviana', 1),
(8, '2021-01-21 13:01:01', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 1, 'Menonaktifkan user Annisa Silviana', 1),
(9, '2021-01-21 13:12:14', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 1, 'Menghapus user Annisa Silviana', 1),
(10, '2021-01-21 21:28:07', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 1, 'Menghapus user AnnisaSil', 1),
(11, '2021-01-21 21:30:09', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 1, 1, 'Menambahkan user Annisa Silvianna', 1),
(12, '2021-01-21 21:33:15', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 1, 'Mengaktifkan user Annisa Silvianna', 1),
(13, '2021-01-21 21:33:37', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 1, 'Menonaktifkan user Annisa Silvianna', 1),
(14, '2021-01-21 21:34:24', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 1, 'Menghapus user Annisa Silvianna', 1),
(15, '2021-01-21 21:53:46', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(16, '2021-01-21 22:05:05', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(17, '2021-01-21 22:05:14', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(18, '2021-01-21 22:05:45', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(19, '2021-01-21 22:05:53', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(20, '2021-01-21 22:05:59', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(21, '2021-01-21 22:10:36', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(22, '2021-01-21 22:13:57', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(23, '2021-01-21 22:14:09', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(24, '2021-01-21 22:14:53', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(25, '2021-01-21 22:14:55', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(26, '2021-01-21 22:14:56', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(27, '2021-01-21 22:15:10', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(28, '2021-01-21 22:15:40', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Developer untuk user Rifki Gustiawan', 1),
(29, '2021-01-21 22:15:56', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(30, '2021-01-21 22:16:55', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(31, '2021-01-21 22:18:41', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(32, '2021-01-21 22:19:22', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(33, '2021-01-21 22:19:33', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(34, '2021-01-21 22:20:55', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(35, '2021-01-21 22:26:41', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(36, '2021-01-21 22:26:43', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(37, '2021-01-21 22:26:44', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(38, '2021-01-21 22:26:45', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(39, '2021-01-21 22:26:46', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(40, '2021-01-21 22:26:46', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(41, '2021-01-21 22:26:47', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(42, '2021-01-21 22:26:47', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(43, '2021-01-21 22:27:01', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(44, '2021-01-21 22:27:15', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(45, '2021-01-21 22:27:27', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(46, '2021-01-21 22:27:30', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(47, '2021-01-21 22:27:31', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(48, '2021-01-21 22:28:00', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(49, '2021-01-21 22:38:31', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(50, '2021-01-21 22:38:51', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 3, 2, 'Menghapus role/group Developer untuk user Rifki Gustiawan', 1),
(51, '2021-01-21 22:39:11', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(52, '2021-01-21 22:39:25', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(53, '2021-01-21 22:44:20', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(54, '2021-01-21 22:44:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 3, 2, 'Menghapus role/group Developer untuk user Rifki Gustiawan', 1),
(55, '2021-01-21 22:44:45', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(56, '2021-01-21 22:44:54', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(57, '2021-01-21 22:45:09', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(58, '2021-01-21 22:45:27', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 3, 2, 'Menghapus role/group Developer untuk user Rifki Gustiawan', 1),
(59, '2021-01-21 22:45:58', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Developer untuk user Rifki Gustiawan', 1),
(60, '2021-01-21 22:46:08', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 3, 2, 'Menghapus role/group Developer untuk user Rifki Gustiawan', 1),
(61, '2021-01-21 22:46:18', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(62, '2021-01-21 22:48:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(63, '2021-01-21 22:48:40', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(64, '2021-01-21 22:54:43', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 1, 6, 'Menambahkan group/role APIs', 1),
(65, '2021-01-21 22:55:43', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 1, 6, 'Menambahkan group/role Directure', 1),
(66, '2021-01-21 22:56:55', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 1, 6, 'Menambahkan group/role BAAK', 1),
(67, '2021-01-21 23:01:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 6, 'Mengubah group/role Directure. Dari  deskripsi this for debug menjadi this for debug and testing update.', 1),
(68, '2021-01-21 23:05:15', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 6, 'Mengubah group/role \"Directure\". Untuk  deskripsi \"this for debug and testing update\" menjadi \"this for debug and testing update test 2\".', 1),
(69, '2021-01-21 23:05:45', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 6, 'Mengubah group/role \"Directure\". Untuk  nama group \"Directure\" menjadi \"Directure v.2\".', 1),
(70, '2021-01-21 23:07:23', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 6, 'Mengubah group/role \"Administrator\". Untuk  deskripsi \"\" menjadi \"This is only for root user.\".', 1),
(71, '2021-01-21 23:10:48', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 2, 6, 'Mengubah group \"Directure v.2\". Untuk  deskripsi \"this for debug and testing update test 2\" menjadi \"\".', 1),
(72, '2021-01-21 23:19:15', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 6, 'Menghapus group Directure v.2.', 1),
(73, '2021-01-21 23:19:30', 'rifkigustiawan78.rg@gmail.com', 'Administrator', 3, 6, 'Menghapus group APIs.', 1),
(74, '2021-01-21 23:37:08', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Alumni. Group sedang digunakan oleh user ', 0),
(75, '2021-01-21 23:59:42', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(76, '2021-01-22 00:11:40', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(77, '2021-01-22 00:11:50', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(78, '2021-01-22 00:12:03', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(79, '2021-01-22 00:12:06', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(80, '2021-01-22 00:15:39', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Administrator. Group ini sedang digunakan oleh user Rifki Gustiawan.', 0),
(81, '2021-01-22 00:16:29', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Alumni. Grup ini memiliki akses untuk resource Users.', 0),
(82, '2021-01-22 00:17:45', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Gagal menghapus group Alumni. Grup ini memiliki akses untuk resource \"Users.\"', 0),
(83, '2021-01-22 00:34:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan menu Api', 1),
(84, '2021-01-22 01:18:09', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan menu x', 1),
(85, '2021-01-22 01:18:57', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan menu debug', 1),
(86, '2021-01-22 01:20:08', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan menu c', 1),
(87, '2021-01-22 01:55:29', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu Api. Untuk  icon menu fa apis menjadi Apisa.', 1),
(88, '2021-01-22 01:56:01', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu Apisa. Untuk  nama menu Apisa menjadi Apisa.', 1),
(89, '2021-01-22 01:57:31', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu Apisa. Untu.', 1),
(90, '2021-01-22 01:58:06', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu Apisa1. Untu.', 1),
(91, '2021-01-22 02:10:37', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu Apisa12. Untuk nama menu Apisa12 menjadi Apisa12s, icon menu fa apissa12 menjadi fa apissa12s.', 1),
(92, '2021-01-22 02:12:02', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengupdate menu \"Apisa12s\". Untuk nama menu \"Apisa12s\" menjadi Apisa12sx.', 1),
(93, '2021-01-24 01:11:01', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus menu x.', 1),
(94, '2021-01-24 01:11:16', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus menu Apisa12sx.', 1),
(95, '2021-01-24 01:12:19', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus menu c.', 1),
(96, '2021-01-24 01:12:25', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus menu debug.', 1),
(97, '2021-01-24 01:13:08', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan resorce/submenu 4', 1),
(98, '2021-01-24 01:15:46', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 3, 'Menambahkan resorce sad', 1),
(99, '2021-01-24 01:16:34', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengubah data resouce sad. Dari title sad menjadi CHECK SAD REV.', 1),
(100, '2021-01-24 01:21:13', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 2, 3, 'Mengubah data resouce CHECK SAD REV. Dari status \"aktif\" menjadi \"nonaktif\".', 1),
(101, '2021-01-24 01:21:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus resorce/submenu CHECK SAD REV', 1),
(102, '2021-01-24 01:23:25', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 4, 'Menambahkan access Create untuk resource Report 3.', 1),
(103, '2021-01-24 01:24:52', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 4, 'Menambahkan access Read untuk resource Report 3.', 1),
(104, '2021-01-24 01:25:07', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 4, 'Menghapus access Create untuk resource Report 3.', 1),
(105, '2021-01-24 01:30:19', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Read pada resource Report 3 untuk role Administrator', 1),
(106, '2021-01-24 01:30:25', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Read pada resource Report 3 untuk role Administrator', 1),
(107, '2021-01-24 01:30:28', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Read pada resource Report 3 untuk role Administrator', 1),
(108, '2021-01-24 01:31:23', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Read pada resource Report 3 untuk role Administrator', 1),
(109, '2021-01-24 01:33:51', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Read pada resource Report 3 untuk role Administrator', 1),
(110, '2021-01-24 01:33:59', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Read pada resource Report 3 untuk role Administrator', 1),
(111, '2021-01-24 01:46:14', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Alumni,Deve', 1, 2, 'Menambahkan role/group Alumni untuk user Rifki Gustiawan', 1),
(112, '2021-01-24 01:46:17', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user Rifki Gustiawan', 1),
(113, '2021-01-24 01:47:56', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 3, 'Menghapus resorce Report 3', 1),
(114, '2021-01-24 01:50:19', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Read pada resource Reset Tokens untuk role Administrator', 1),
(115, '2021-01-24 01:54:10', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 1, 'Menambahkan user User_tester', 1),
(116, '2021-01-24 01:54:35', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 1, 'Menghapus user User_tester', 1),
(117, '2021-01-24 02:09:14', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 1, 'Menghapus user Tester 2', 1),
(118, '2021-01-24 02:16:56', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Create pada resource Groups untuk role Administrator', 1),
(119, '2021-01-24 02:17:20', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Read pada resource Groups untuk role Administrator', 1),
(120, '2021-01-24 02:17:39', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Read pada resource Groups untuk role Administrator', 1),
(121, '2021-01-24 02:18:18', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Create pada resource Groups untuk role Administrator', 1),
(122, '2021-01-24 02:18:21', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Update pada resource Groups untuk role Administrator', 1),
(123, '2021-01-24 02:18:32', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 6, 'Menambahkan group/role a', 1),
(124, '2021-01-24 02:18:54', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Update pada resource Groups untuk role Administrator', 1),
(125, '2021-01-24 02:18:58', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 5, 'Menghapus access Delete pada resource Groups untuk role Administrator', 1),
(126, '2021-01-24 02:19:47', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 5, 'Menambahkan access Delete pada resource Groups untuk role Administrator', 1),
(127, '2021-01-24 02:19:54', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 6, 'Menghapus group a.', 1),
(128, '2021-02-01 17:27:05', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Administrator untuk user Dummy_dummy', 1),
(129, '2021-02-01 17:27:11', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Alumni untuk user Dummy_dummy', 1),
(130, '2021-02-03 20:02:41', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 1, 2, 'Menambahkan role/group Administrator untuk user RIFKI GUSTIAWAN', 1),
(131, '2021-02-03 20:02:46', 'rifkigustiawan78.rg@gmail.com', 'Administrator,Developer', 3, 2, 'Menghapus role/group Alumni untuk user RIFKI GUSTIAWAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `angkatan` int(3) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp_alumni` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `status_bekerja` tinyint(1) NOT NULL,
  `perkiraan_pensiun` year(4) DEFAULT NULL,
  `jabatan_terakhir` varchar(50) NOT NULL,
  `aktif_pns` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`angkatan`, `nama`, `nim`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telp_alumni`, `alamat`, `status_bekerja`, `perkiraan_pensiun`, `jabatan_terakhir`, `aktif_pns`) VALUES
(43, 'Vicky Intan Zulaika M.Farm', '1387519', 'L', 'kota20', '2006-05-07', '20000', 'alamat200', 1, 2005, 'jabatan2000', 1),
(29, 'Uli Rahmawati', '158154032', 'L', 'kota20', '2014-08-16', '20000', 'alamat200', 0, 2016, 'jabatan2000', 1),
(55, 'RIFKI GUSTIAWAN', '211810567', 'L', 'Bekasi', '2009-08-31', '0809 0995 377', 'Jr. Pelajar Pejuang 45 No. 486, Binjai 18613, SumBar', 0, 1970, 'qui', 1),
(60, 'Dummy_dummy', '221810160', 'P', 'Banda Aceh', '2013-09-26', '0216 2230 209', 'Jln. Bakau Griya Utama No. 942, Denpasar 86466, KalTeng', 1, 1982, 'placeat', 0),
(51, 'Uda Hakim S.Farm', '237218926', 'P', 'kota20', '1984-05-26', '20000', 'alamat200', 0, 1980, 'jabatan2000', 1),
(34, 'Tasnim Rafid Lazuardi S.H.', '298418024', 'L', 'kota20', '2001-09-27', '20000', 'alamat200', 0, 2005, 'jabatan2000', 0),
(8, 'Dian Winarsih', '390275351', 'L', 'kota20', '2020-07-15', '20000', 'alamat200', 1, 1979, 'jabatan2000', 1),
(28, 'Adika Bakiadi Wijaya M.Kom.', '402423362', 'L', 'kota20', '1990-11-04', '20000', 'alamat200', 1, 1996, 'jabatan2000', 1),
(22, 'Elvin Permadi', '48514020', 'L', 'kota20', '2018-12-15', '20000', 'alamat200', 0, 1972, 'jabatan2000', 0),
(18, 'Nabila Carla Sudiati', '486284939', 'L', 'kota20', '1979-05-28', '20000', 'alamat200', 0, 2008, 'jabatan2000', 0),
(3, 'Lintang Hastuti', '604313355', 'L', 'kota20', '1991-07-31', '20000', 'alamat200', 1, 2011, 'jabatan2000', 1),
(5, 'Luthfi Edi Nainggolan', '60463997', 'P', 'kota20', '2019-12-26', '20000', 'alamat200', 0, 1986, 'jabatan2000', 1),
(60, 'Bambang Winarno', '613937841', 'P', 'kota20', '2009-02-16', '20000', 'alamat200', 1, 1981, 'jabatan2000', 0),
(25, 'Erik Balamantri Wijaya S.E.I', '621632731', 'P', 'kota20', '2010-05-28', '20000', 'alamat200', 1, 1992, 'jabatan2000', 0),
(15, 'Bakidin Hidayat S.T.', '79310536', 'L', 'kota20', '2010-06-29', '20000', 'alamat200', 1, 2003, 'jabatan2000', 0),
(52, 'Ira Gasti Usada', '816087624', 'P', 'kota20', '2019-03-24', '20000', 'alamat200', 1, 1997, 'jabatan2000', 0),
(38, 'Vera Haryanti', '830231786', 'L', 'kota20', '2001-08-01', '20000', 'alamat200', 0, 2004, 'jabatan2000', 0),
(13, 'Yono Ghani Anggriawan S.Ked', '834778138', 'P', 'kota20', '1996-09-18', '20000', 'alamat200', 1, 1993, 'jabatan2000', 1),
(34, 'Candrakanta Dirja Mangunsong', '842257102', 'L', 'kota20', '2019-12-27', '20000', 'alamat200', 0, 2018, 'jabatan2000', 1),
(5, 'Jefri Oman Waskita', '843576808', 'L', 'kota20', '1975-07-24', '20000', 'alamat200', 1, 2015, 'jabatan2000', 0),
(60, 'Jaga Iswahyudi', '92560202', 'L', 'kota20', '1974-08-04', '20000', 'alamat200', 1, 2006, 'jabatan2000', 1),
(3, 'Cemplunk Gandi Setiawan M.Pd', '938433574', 'L', 'kota20', '2002-12-23', '20000', 'alamat200', 1, 2011, 'jabatan2000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_publikasi`
--

CREATE TABLE `alumni_publikasi` (
  `nim` varchar(12) NOT NULL,
  `id_publikasi` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_tempat_kerja`
--

CREATE TABLE `alumni_tempat_kerja` (
  `nim` varchar(12) NOT NULL,
  `id_tempat_kerja` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author` varchar(100) NOT NULL,
  `id_publikasi` binary(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '62bec2826f422f7ef4246ea7216d3b6a', '2020-12-23 05:38:00'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '2de3757699947e38258b307be2dd45e8', '2020-12-23 05:43:46'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '44c0536969512ecebafa43b6a5e33309', '2020-12-26 19:19:22'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'bae7a60e639f14e05b27942363846f5f', '2020-12-28 23:49:38'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'd64a5d52a3172bf5114c3cbd8dcaa498', '2020-12-29 02:13:36'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5ba5efb2f9838b2e4474c603153c3579', '2020-12-29 02:34:03'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5ba5efb2f9838b2e4474c603153c3579', '2020-12-29 02:35:28'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5ba5efb2f9838b2e4474c603153c3579', '2020-12-29 02:39:19'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5ba5efb2f9838b2e4474c603153c3579', '2020-12-29 02:40:21'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 02:52:06'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 02:53:28'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 02:55:33'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 02:58:06'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 03:00:26'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'a073fa4933bc98e9a81e044a2948a244', '2020-12-29 03:03:31'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'eb4528858a66617a1ffa39b67ff283db', '2020-12-29 03:16:57'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '80d36eaea8a640ed5f16da2f8705c27b', '2020-12-30 09:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Administrator', ''),
(2, 'Alumni', ''),
(6, 'Developer', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 58),
(1, 65),
(1, 66),
(2, 67),
(2, 68),
(6, 58);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', '211810567@stis.ac.id', NULL, '2020-12-23 05:30:55', 0),
(2, '::1', 'admin@admin.com', NULL, '2020-12-23 05:32:39', 0),
(3, '::1', '211810567@stis.ac.id', 2, '2020-12-23 05:38:18', 1),
(4, '::1', 'rifkigustiawan78.rg@gmail.com', 3, '2020-12-23 05:44:02', 1),
(5, '::1', '211810567@stis.ac.id', 2, '2020-12-23 05:53:13', 1),
(6, '::1', 'rifkigustiawan78.rg@gmail.com', 3, '2020-12-23 06:00:55', 1),
(7, '::1', '211810567@stis.ac.id', 2, '2020-12-23 06:01:34', 1),
(8, '::1', '211810567@stis.ac.id', 2, '2020-12-23 07:36:14', 1),
(9, '::1', '211810567@stis.ac.id', 2, '2020-12-23 07:38:51', 1),
(10, '::1', '211810567@stis.ac.id', 2, '2020-12-26 08:06:46', 1),
(11, '::1', '211810567@stis.ac.id', 2, '2020-12-26 08:13:56', 1),
(12, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:04:22', 1),
(13, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:06:55', 1),
(14, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:07:45', 1),
(15, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:08:27', 1),
(16, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:09:55', 1),
(17, '::1', '211810567@stis.ac.id', NULL, '2020-12-26 10:12:43', 0),
(18, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:12:52', 1),
(19, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:15:31', 1),
(20, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:22:51', 1),
(21, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:24:31', 1),
(22, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:25:27', 1),
(23, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:25:41', 1),
(24, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:26:31', 1),
(25, '::1', 'admin@admin.com', NULL, '2020-12-26 10:32:36', 0),
(26, '::1', '211810567@stis.ac.id', NULL, '2020-12-26 10:38:20', 0),
(27, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:38:27', 1),
(28, '::1', '211810567@stis.ac.id', 2, '2020-12-26 10:57:15', 1),
(29, '::1', '211810567@stis.ac.id', 2, '2020-12-26 11:00:31', 1),
(30, '::1', '211810567@stis.ac.id', 2, '2020-12-26 12:09:14', 1),
(31, '::1', '211810567@stis.ac.id', 2, '2020-12-26 12:10:54', 1),
(32, '::1', '211810567@stis.ac.id', 2, '2020-12-26 12:11:02', 1),
(33, '::1', 'anini@gmail.com', NULL, '2020-12-26 19:15:20', 0),
(34, '::1', 'anini@gmail.com', NULL, '2020-12-26 19:16:06', 0),
(35, '::1', '211810567@stis.ac.id', 2, '2020-12-26 19:16:13', 1),
(36, '::1', '211810567@stis.ac.id', NULL, '2020-12-27 03:20:36', 0),
(37, '::1', '211810567@stis.ac.id', 2, '2020-12-27 03:20:42', 1),
(38, '::1', '211810567@stis.ac.id', 2, '2020-12-27 06:12:44', 1),
(39, '::1', '211810567@stis.ac.id', NULL, '2020-12-27 11:40:32', 0),
(40, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:40:42', 1),
(41, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:42:51', 1),
(42, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:45:13', 1),
(43, '::1', '211810567@stis.ac.id', NULL, '2020-12-27 11:48:18', 0),
(44, '::1', '211810567@stis.ac.id', NULL, '2020-12-27 11:48:26', 0),
(45, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:48:35', 1),
(46, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:50:23', 1),
(47, '::1', '211810567@stis.ac.id', 2, '2020-12-27 11:50:44', 1),
(48, '::1', '211810567@stis.ac.id', 2, '2020-12-27 20:14:16', 1),
(49, '::1', '211810567@stis.ac.id', 2, '2020-12-27 20:18:36', 1),
(50, '::1', '211810567@stis.ac.id', 2, '2020-12-27 20:18:46', 1),
(51, '::1', '211810567@stis.ac.id', 2, '2020-12-27 20:20:39', 1),
(52, '::1', '211810567@stis.ac.id', 2, '2020-12-27 20:23:19', 1),
(53, '::1', '211810567@stis.ac.id', 2, '2020-12-28 04:45:09', 1),
(54, '::1', '211810567@stis.ac.id', 2, '2020-12-28 05:19:38', 1),
(55, '::1', '211810567@stis.ac.id', 2, '2020-12-28 05:39:42', 1),
(56, '::1', '211810567@stis.ac.id', 2, '2020-12-28 05:42:36', 1),
(57, '::1', '211810567@stis.ac.id', 2, '2020-12-28 06:14:59', 1),
(58, '::1', '211810567@stis.ac.id', 2, '2020-12-28 10:28:49', 1),
(59, '::1', '211810567@stis.ac.id', 2, '2020-12-28 10:46:30', 1),
(60, '::1', '211810567', NULL, '2020-12-28 21:00:42', 0),
(61, '::1', '211810567@stis.ac.id', 2, '2020-12-28 21:01:02', 1),
(62, '::1', '211810567@stis.ac.id', 2, '2020-12-29 03:04:55', 1),
(63, '::1', '211810567@stis.ac.id', 2, '2020-12-29 03:06:23', 1),
(64, '::1', '211810567@stis.ac.id', 2, '2020-12-29 03:18:45', 1),
(65, '::1', '211810567@stis.ac.id', 2, '2020-12-29 21:44:53', 1),
(66, '::1', '211810567@stis.ac.id', 2, '2020-12-29 23:23:52', 1),
(67, '::1', '211810567@stis.ac.id', 2, '2020-12-29 23:54:34', 1),
(68, '::1', '211810567@stis.ac.id', 2, '2020-12-30 00:52:15', 1),
(69, '::1', '211810567@stis.ac.id', 2, '2020-12-30 04:05:44', 1),
(70, '::1', '211810567@stis.ac.id', 2, '2020-12-30 04:20:06', 1),
(71, '::1', '211810567@stis.ac.id', 2, '2020-12-30 05:49:10', 1),
(72, '::1', '211810567@stis.ac.id', NULL, '2020-12-30 05:56:57', 0),
(73, '::1', '211810567@stis.ac.id', 2, '2020-12-30 05:57:11', 1),
(74, '::1', '211810567@stis.ac.id', 2, '2020-12-30 05:58:00', 1),
(75, '::1', '211810567@stis.ac.id', 2, '2020-12-30 05:58:23', 1),
(76, '::1', '211810567@stis.ac.id', 2, '2020-12-30 05:59:54', 1),
(77, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:00:06', 1),
(78, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:00:22', 1),
(79, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:01:36', 1),
(80, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:02:16', 1),
(81, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:04:21', 1),
(82, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:06:34', 1),
(83, '::1', '211810567@stis.ac.id', 2, '2020-12-30 06:19:36', 1),
(84, '::1', '211810567@stis.ac.id', 2, '2020-12-30 08:20:51', 1),
(85, '::1', 'rifkigustiawan78@gmail.com', NULL, '2020-12-30 09:15:25', 0),
(86, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2020-12-30 09:15:39', 1),
(87, '::1', '211810567@stis.ac.id', 2, '2020-12-30 09:16:02', 1),
(88, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2020-12-30 09:16:52', 0),
(89, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2020-12-30 09:17:07', 1),
(90, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2021-01-13 05:56:45', 0),
(91, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 05:57:37', 1),
(92, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 08:32:05', 1),
(93, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 08:39:58', 1),
(94, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2021-01-13 09:59:57', 0),
(95, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 10:00:48', 1),
(96, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 10:04:35', 1),
(97, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 10:44:28', 1),
(98, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 11:04:56', 1),
(99, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 11:20:31', 1),
(100, '::1', 'Rifkigustiawan78.rg@gmail.com', NULL, '2021-01-13 21:43:43', 0),
(101, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 21:43:50', 1),
(102, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-13 22:42:55', 1),
(103, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-14 02:47:55', 1),
(104, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-14 07:29:46', 1),
(105, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-15 02:55:56', 1),
(106, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-15 09:03:01', 1),
(107, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 03:11:11', 1),
(108, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 08:31:36', 1),
(109, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 08:32:52', 1),
(110, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:21:31', 1),
(111, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:23:23', 1),
(112, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:26:56', 1),
(113, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:28:00', 1),
(114, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:30:05', 1),
(115, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:44:57', 1),
(116, '::1', 'Rifkigustiawan78.rg@gmail.com', NULL, '2021-01-16 09:45:08', 0),
(117, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-16 09:45:16', 1),
(118, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-17 05:04:37', 1),
(119, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-20 08:06:02', 1),
(120, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-20 10:59:24', 1),
(121, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-20 22:14:36', 1),
(122, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-20 23:19:45', 1),
(123, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-21 05:06:54', 1),
(124, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-21 07:36:25', 1),
(125, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-01-23 12:04:12', 1),
(126, '::1', 'dummy@stis.ac.id', NULL, '2021-02-01 04:25:47', 0),
(127, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-02-01 04:26:26', 1),
(128, '::1', 'dummy@stis.ac.id', 65, '2021-02-01 04:27:17', 1),
(129, '::1', 'dummy@stis.ac.id', 65, '2021-02-01 04:30:28', 1),
(130, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2021-02-03 06:45:04', 0),
(131, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-02-03 06:45:16', 1),
(132, '::1', '211810567@stis.ac.id', 66, '2021-02-03 07:01:49', 1),
(133, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-02-03 07:02:18', 1),
(134, '::1', '211810567@stis.ac.id', 66, '2021-02-03 07:03:07', 1),
(135, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2021-02-03 08:49:08', 0),
(136, '::1', 'rifkigustiawan78.rg@gmail.com', NULL, '2021-02-03 08:49:08', 0),
(137, '::1', 'rifkigustiawan78.rg@gmail.com', 58, '2021-02-03 08:49:32', 1),
(138, '::1', '211810567@stis.ac.id', 66, '2021-02-03 08:57:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'user-index', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5b4325ba552de1e079e89fe9212d11f9', '2020-12-27 11:36:13'),
(2, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5b4325ba552de1e079e89fe9212d11f9', '2020-12-27 11:36:33'),
(3, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5b4325ba552de1e079e89fe9212d11f9', '2020-12-27 11:38:09'),
(4, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5b4325ba552de1e079e89fe9212d11f9', '2020-12-27 11:38:11'),
(5, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '5b4325ba552de1e079e89fe9212d11f9', '2020-12-27 11:38:45'),
(6, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:16:23'),
(7, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:16:26'),
(8, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:17:04'),
(9, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:17:44'),
(10, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:17:56'),
(11, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '8da682b56c30f2632add1772f19aa384', '2020-12-28 05:18:15'),
(12, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '0e740f4c6d0918ead05356d468211c9b', '2020-12-28 05:20:35'),
(13, '211810567@stis.ac.id', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'd4f9d5c728da1153b598a67f0f7a3bb3', '2020-12-28 05:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `crud_id` int(1) UNSIGNED NOT NULL,
  `crud_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`crud_id`, `crud_name`) VALUES
(1, 'Create'),
(2, 'Read'),
(3, 'Update'),
(4, 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `groups_access`
--

CREATE TABLE `groups_access` (
  `access_group_id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED DEFAULT NULL,
  `menu_access_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups_access`
--

INSERT INTO `groups_access` (`access_group_id`, `group_id`, `menu_access_id`) VALUES
(35, 2, 2),
(36, 6, 31),
(37, 1, 1),
(38, 1, 2),
(39, 1, 3),
(40, 1, 4),
(41, 1, 5),
(42, 1, 6),
(43, 1, 7),
(44, 1, 8),
(49, 1, 13),
(50, 1, 14),
(51, 1, 15),
(52, 1, 16),
(53, 1, 17),
(54, 1, 18),
(55, 1, 19),
(56, 1, 20),
(57, 1, 21),
(58, 1, 22),
(59, 1, 23),
(60, 1, 24),
(61, 1, 26),
(62, 1, 28),
(63, 1, 29),
(64, 1, 30),
(65, 1, 31),
(66, 1, 32),
(67, 2, 1),
(71, 1, 33),
(72, 1, 10),
(73, 1, 9),
(74, 1, 11),
(75, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) UNSIGNED NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`) VALUES
(1, 'Magement RBAC', 'fas fa-users-cog'),
(2, 'Security', 'fas fa-user-shield'),
(3, 'Token', 'fas fa-qrcode'),
(4, 'Dashboard', 'fas fa-tachometer-alt'),
(5, 'Tracking Activity', 'fas fa-user-clock'),
(10, 'Setting Aplikasi', 'fas fa-user-shield');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1608718254, 1),
(2, '2021-01-16-124254', 'App\\Database\\Migrations\\AlumniDB', 'default', 'App', 1612175378, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` binary(16) NOT NULL,
  `jenjang` varchar(2) NOT NULL,
  `universitas` varchar(16) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `judul_tulisan` varchar(100) NOT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` binary(16) NOT NULL,
  `nama_prestasi` varchar(100) DEFAULT NULL,
  `tahun_prestasi` year(4) DEFAULT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` binary(16) NOT NULL,
  `topik` varchar(45) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `publisher` varchar(25) NOT NULL,
  `tanggal_disahkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `submenu_id` int(11) UNSIGNED NOT NULL,
  `menu_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`submenu_id`, `menu_id`, `title`, `url`, `icon`, `active`) VALUES
(1, 1, 'Users', 'admin/users', 'fas fa-users', '1'),
(2, 1, 'Users Groups', 'admin/users-groups', 'fas fa-tags', '1'),
(3, 1, 'Groups', 'admin/groups', 'fas fa-user-tag', '1'),
(4, 1, 'Resources', 'admin/resources', 'fas fa-tasks', '1'),
(5, 1, 'Access', 'admin/access', 'fas fa-tools', '1'),
(6, 1, 'Permissions', 'admin/permissions', 'fas fa-cogs', '1'),
(8, 2, 'Reset Attempts', 'admin/reset-attempts', 'fas fa-sync-alt', '1'),
(9, 2, 'Activation Attempts', 'admin/activation-attempts', 'fas fa-key', '1'),
(10, 2, 'Login Attempts', 'admin/login-attempts', 'fas fa-sign-in-alt', '1'),
(11, 4, 'Report 1', 'admin/report-1', 'far fa-chart-bar', '1'),
(12, 5, 'Activity Log', 'admin/activity-log', 'fas fa-mouse', '1'),
(13, 3, 'Activation Tokens', 'admin/activation-tokens', 'fas fa-barcode', '1'),
(14, 3, 'Reset Tokens', 'admin/reset-tokens', 'fas fa-barcode', '1'),
(20, 4, 'Report 2', 'admin/reports/report-2', 'far fa-chart-bar', '0');

-- --------------------------------------------------------

--
-- Table structure for table `submenu_access`
--

CREATE TABLE `submenu_access` (
  `menu_access_id` int(11) UNSIGNED NOT NULL,
  `submenu_id` int(11) UNSIGNED NOT NULL,
  `crud_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenu_access`
--

INSERT INTO `submenu_access` (`menu_access_id`, `submenu_id`, `crud_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 3, 1),
(10, 3, 2),
(11, 3, 3),
(12, 3, 4),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 4),
(17, 5, 1),
(18, 5, 2),
(19, 5, 3),
(20, 5, 4),
(21, 6, 1),
(22, 6, 2),
(23, 6, 3),
(24, 6, 4),
(26, 8, 2),
(28, 9, 2),
(29, 10, 2),
(30, 13, 2),
(31, 12, 2),
(32, 11, 2),
(33, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_scope`
--

CREATE TABLE `table_scope` (
  `target_scope_id` tinyint(1) NOT NULL,
  `target_scope` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_scope`
--

INSERT INTO `table_scope` (`target_scope_id`, `target_scope`) VALUES
(1, 'Tabel Users'),
(2, 'Tabel Users Groups'),
(3, 'Tabel Resources'),
(4, 'Tabel Resources Access'),
(5, 'Tabel Permissions'),
(6, 'Tabel Groups');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_kerja`
--

CREATE TABLE `tempat_kerja` (
  `id_tempat_kerja` binary(16) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `telp_instansi` varchar(25) NOT NULL,
  `faks_instansi` varchar(50) NOT NULL,
  `email_instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nim` char(9) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) DEFAULT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `nim`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(58, 'rifkigustiawan78.rg@gmail.com', NULL, '211810567', 'Rifki Gustiawan', 'default.svg', '$2y$10$xmIhmusshRIqzvYSRi4jJ.BZ.jFIxjIWfCIs3Is6AjnDCrPg65mGW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-30 09:14:35', '2020-12-30 09:15:07', NULL),
(65, 'dummy@stis.ac.id', 'Dummy', '221810160', 'Dummy_dummy', 'default.svg', '$2y$10$yLFu3bK0s5cHqd1VLT6Eh.GjA3H2GJzwqb6o/gjrhKXTWGkMsh3IS', NULL, '2021-02-01 04:26:55', NULL, NULL, NULL, NULL, 1, 0, '2021-02-01 04:26:55', '2021-02-01 04:26:55', NULL),
(66, '211810567@stis.ac.id', '211810567', '211810567', 'RIFKI GUSTIAWAN', 'default.svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-02-03 07:01:49', '2021-02-03 07:01:49', NULL),
(67, 'rifkigustiawan78@gmail.com', NULL, '211810523', 'Rifki Gustiawan', 'default.svg', '$2y$10$c1mfEi/Aatt9JYPpfxdjGeBqE/BDldx1HWf74OYp.bnXnk8OcS/HC', NULL, NULL, NULL, '02dc1370de7d20f552981e988bdc91c5', NULL, NULL, 0, 0, '2021-02-03 09:51:18', '2021-02-03 09:51:18', NULL),
(68, '221810129@stis.ac.id', NULL, '221810129', 'Akhmad Fadilah ', 'default.svg', '$2y$10$r/.3VHdb20/2kQtKuNlBQeAPpE.H8gSpeJEZWyFhDUHCFDikVvE2m', NULL, NULL, NULL, '86c785443ac2fca83849622c6951496b', NULL, NULL, 0, 0, '2021-02-03 09:56:36', '2021-02-03 09:56:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `target_scope` (`target_scope_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `alumni_publikasi`
--
ALTER TABLE `alumni_publikasi`
  ADD PRIMARY KEY (`nim`,`id_publikasi`),
  ADD KEY `alumni_publikasi_id_publikasi_foreign` (`id_publikasi`);

--
-- Indexes for table `alumni_tempat_kerja`
--
ALTER TABLE `alumni_tempat_kerja`
  ADD PRIMARY KEY (`nim`,`id_tempat_kerja`),
  ADD KEY `alumni_tempat_kerja_id_tempat_kerja_foreign` (`id_tempat_kerja`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author`,`id_publikasi`),
  ADD KEY `author_id_publikasi_foreign` (`id_publikasi`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`crud_id`);

--
-- Indexes for table `groups_access`
--
ALTER TABLE `groups_access`
  ADD PRIMARY KEY (`access_group_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `menu_access_id` (`menu_access_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `pendidikan_nim_foreign` (`nim`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `prestasi_nim_foreign` (`nim`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`submenu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `submenu_access`
--
ALTER TABLE `submenu_access`
  ADD PRIMARY KEY (`menu_access_id`),
  ADD KEY `submenu_id` (`submenu_id`),
  ADD KEY `crud_id` (`crud_id`);

--
-- Indexes for table `table_scope`
--
ALTER TABLE `table_scope`
  ADD PRIMARY KEY (`target_scope_id`);

--
-- Indexes for table `tempat_kerja`
--
ALTER TABLE `tempat_kerja`
  ADD PRIMARY KEY (`id_tempat_kerja`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `crud_id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups_access`
--
ALTER TABLE `groups_access`
  MODIFY `access_group_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `submenu_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `submenu_access`
--
ALTER TABLE `submenu_access`
  MODIFY `menu_access_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `table_scope`
--
ALTER TABLE `table_scope`
  MODIFY `target_scope_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `activity_log_ibfk_1` FOREIGN KEY (`target_scope_id`) REFERENCES `table_scope` (`target_scope_id`) ON UPDATE CASCADE;

--
-- Constraints for table `alumni_publikasi`
--
ALTER TABLE `alumni_publikasi`
  ADD CONSTRAINT `alumni_publikasi_id_publikasi_foreign` FOREIGN KEY (`id_publikasi`) REFERENCES `publikasi` (`id_publikasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumni_publikasi_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `alumni` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alumni_tempat_kerja`
--
ALTER TABLE `alumni_tempat_kerja`
  ADD CONSTRAINT `alumni_tempat_kerja_id_tempat_kerja_foreign` FOREIGN KEY (`id_tempat_kerja`) REFERENCES `tempat_kerja` (`id_tempat_kerja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumni_tempat_kerja_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `alumni` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_id_publikasi_foreign` FOREIGN KEY (`id_publikasi`) REFERENCES `publikasi` (`id_publikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups_access`
--
ALTER TABLE `groups_access`
  ADD CONSTRAINT `groups_access_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groups_access_ibfk_3` FOREIGN KEY (`menu_access_id`) REFERENCES `submenu_access` (`menu_access_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `alumni` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `alumni` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON UPDATE CASCADE;

--
-- Constraints for table `submenu_access`
--
ALTER TABLE `submenu_access`
  ADD CONSTRAINT `submenu_access_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `submenu` (`submenu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submenu_access_ibfk_2` FOREIGN KEY (`crud_id`) REFERENCES `crud` (`crud_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

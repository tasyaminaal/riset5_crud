-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 01:04 PM
-- Server version: 10.4.14-MariaDB-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riset5`
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
(60, 'Maida Uyainah', '109599803', 'L', 'Sukabumi', '2001-04-17', '0714 7513 208', 'Ds. Barat No. 32, Sibolga 98711, Banten', 0, 2003, 'ipsa', 0),
(59, 'Mujur Mustofa', '141878708', 'L', 'Lubuklinggau', '1977-02-25', '(+62) 440 1944 989', 'Jr. Salak No. 634, Padangsidempuan 84026, SulTeng', 1, 1996, 'ipsa', 1),
(12, 'Bajragin Saptono', '151694460', 'P', 'Lubuklinggau', '1979-11-12', '(+62) 997 8970 300', 'Dk. Kalimalang No. 48, Banjarbaru 44965, KalTim', 0, 1986, 'accusantium', 0),
(62, 'Erik Natsir', '155502462', 'P', 'Banjarmasin', '1994-01-08', '(+62) 680 3938 926', 'Jr. Adisumarmo No. 607, Bau-Bau 35517, SumUt', 0, 1973, 'reiciendis', 0),
(10, 'Karen Oktaviani', '155508314', 'L', 'Pontianak', '1971-11-14', '024 8082 012', 'Psr. Kyai Mojo No. 933, Tanjungbalai 63554, Gorontalo', 1, 2006, 'facilis', 0),
(29, 'Eka Susanti', '159566792', 'P', 'Semarang', '2019-11-28', '0671 3182 9485', 'Dk. Banal No. 146, Pariaman 88080, JaTim', 1, 1999, 'vero', 0),
(11, 'Febi Novi Rahimah S.Pd', '161377211', 'P', 'Bengkulu', '2012-11-24', '0418 8170 8114', 'Jln. Kyai Mojo No. 521, Tanjung Pinang 59330, DKI', 0, 1989, 'et', 0),
(31, 'Zizi Mardhiyah', '164376579', 'L', 'Singkawang', '1971-08-03', '(+62) 342 6571 273', 'Ki. Dahlia No. 593, Magelang 59689, KalSel', 0, 2006, 'soluta', 0),
(6, 'Irma Palastri', '168224019', 'L', 'Prabumulih', '1982-01-25', '(+62) 311 2632 657', 'Dk. Veteran No. 728, Padang 19436, KalUt', 0, 1988, 'quis', 0),
(10, 'Daliman Ramadan', '16949243', 'P', 'Tomohon', '1985-03-31', '(+62) 872 462 709', 'Gg. B.Agam 1 No. 687, Banjarmasin 49994, PapBar', 0, 1973, 'omnis', 0),
(35, 'Estiawan Edi Tamba', '18134084', 'L', 'Denpasar', '1977-10-13', '(+62) 476 4527 569', 'Jln. Baranangsiang No. 161, Yogyakarta 95629, Lampung', 0, 1975, 'molestiae', 0),
(20, 'Nabila Nilam Anggraini S.E.I', '189146065', 'L', 'Pekalongan', '1970-03-02', '0860 9687 6926', 'Jr. Lembong No. 692, Tanjungbalai 87525, PapBar', 0, 2004, 'quae', 1),
(42, 'Gadang Dongoran S.T.', '191735053', 'L', 'Tidore Kepulauan', '1998-06-05', '0383 5796 717', 'Jln. Tubagus Ismail No. 503, Administrasi Jakarta Selatan 20784, Papua', 0, 2006, 'molestiae', 1),
(14, 'Vanesa Riyanti', '192669032', 'L', 'Palangka Raya', '1980-11-05', '022 5904 461', 'Ds. W.R. Supratman No. 233, Banjarmasin 48318, NTT', 1, 1973, 'nostrum', 0),
(61, 'Purwanto Maulana', '193294871', 'L', 'Sukabumi', '2020-02-06', '0861 2739 2265', 'Ds. Sampangan No. 866, Blitar 94184, NTB', 1, 2007, 'nihil', 1),
(11, 'Hartaka Irawan S.Pt', '198815537', 'P', 'Tegal', '1979-04-25', '0526 2833 792', 'Gg. Kiaracondong No. 377, Mataram 72277, Bengkulu', 0, 1989, 'omnis', 1),
(56, 'Yulia Wahyuni', '218631625', 'P', 'Kediri', '1984-04-14', '(+62) 20 7497 3282', 'Dk. R.E. Martadinata No. 861, Magelang 24751, Bengkulu', 0, 2001, 'inventore', 0),
(31, 'Dummy_dummy', '221810160', 'P', 'Banjarbaru', '1985-09-22', '020 6507 9729', 'Kpg. Zamrud No. 268, Medan 99929, JaBar', 1, 1984, 'exercitationem', 1),
(6, 'Langgeng Raden Prabowo S.I.Kom', '22357502', 'P', 'Sibolga', '2001-08-30', '(+62) 975 3577 676', 'Jr. Cut Nyak Dien No. 146, Kotamobagu 21670, DIY', 1, 2005, 'et', 0),
(37, 'Rafid Nashiruddin', '229996201', 'P', 'Cirebon', '1983-11-18', '(+62) 874 488 901', 'Jr. Setia Budi No. 887, Pangkal Pinang 45747, SulTra', 1, 2004, 'reiciendis', 1),
(38, 'Luwar Latupono', '244032439', 'L', 'Sawahlunto', '1994-04-25', '(+62) 882 1313 0399', 'Ds. Peta No. 620, Pontianak 10207, NTT', 0, 1985, 'omnis', 0),
(41, 'Karen Wulan Mardhiyah S.T.', '247657094', 'L', 'Prabumulih', '1986-06-28', '0806 872 784', 'Ds. Kusmanto No. 225, Bitung 79873, SulBar', 1, 2001, 'voluptas', 1),
(51, 'Oliva Paulin Astuti M.Pd', '264953726', 'P', 'Banjar', '2003-02-24', '0408 3993 174', 'Ki. Bara No. 359, Tangerang Selatan 20885, KalBar', 1, 1975, 'animi', 0),
(42, 'Tomi Setiawan', '285240858', 'P', 'Tual', '1980-10-18', '(+62) 402 5703 0747', 'Psr. Bawal No. 172, Palu 30963, BaBel', 1, 1994, 'nisi', 0),
(54, 'Eva Pudjiastuti', '285986040', 'L', 'Tanjungbalai', '2013-09-01', '(+62) 260 3144 421', 'Ds. Flora No. 434, Palopo 32893, SulBar', 1, 1974, 'illum', 0),
(13, 'Devi Wahyuni M.Pd', '286891475', 'P', 'Blitar', '1992-05-31', '(+62) 423 4406 545', 'Ki. Gatot Subroto No. 463, Semarang 61035, KalTim', 1, 1998, 'autem', 0),
(29, 'Wira Sihombing', '292574887', 'P', 'Padangpanjang', '2003-02-27', '0969 2364 5844', 'Ki. Basoka No. 338, Bau-Bau 81990, Bengkulu', 0, 1980, 'eius', 1),
(9, 'Tasdik Darman Salahudin', '306127310', 'P', 'Magelang', '2016-11-11', '(+62) 974 1979 7398', 'Jr. Raya Setiabudhi No. 342, Batam 49879, JaTim', 0, 1978, 'quia', 0),
(55, 'Aurora Suartini', '322091487', 'L', 'Salatiga', '2004-06-28', '020 1378 747', 'Dk. Dr. Junjunan No. 935, Cimahi 70556, Papua', 1, 2009, 'consequatur', 1),
(60, 'Garang Indra Natsir', '326147914', 'L', 'Cilegon', '1983-04-21', '0336 7603 5171', 'Gg. Ujung No. 891, Tidore Kepulauan 32212, Banten', 0, 1972, 'laboriosam', 1),
(31, 'Paulin Mandasari', '329972840', 'P', 'Solok', '2009-03-28', '(+62) 480 6286 6532', 'Ki. Dahlia No. 803, Pangkal Pinang 39226, SulSel', 0, 2013, 'qui', 1),
(53, 'Zulfa Rahimah', '3331756', 'P', 'Cilegon', '2006-09-16', '(+62) 876 0993 3362', 'Ki. Bakaru No. 10, Pekanbaru 96169, Gorontalo', 1, 1977, 'voluptatem', 0),
(12, 'Halima Mala Usada M.TI.', '340993265', 'P', 'Pariaman', '2008-10-27', '(+62) 989 9855 3248', 'Jln. Jend. A. Yani No. 873, Tanjungbalai 12314, SulSel', 1, 2007, 'quibusdam', 1),
(33, 'Ayu Sudiati', '342439482', 'L', 'Pariaman', '2016-12-26', '0898 4458 836', 'Dk. Barat No. 768, Balikpapan 32912, DKI', 0, 1970, 'asperiores', 1),
(32, 'Padma Wahyuni', '344037078', 'P', 'Banjarbaru', '1989-05-26', '0815 227 108', 'Psr. Bakti No. 411, Bogor 66740, KalSel', 1, 1989, 'labore', 0),
(55, 'Endah Mulyani', '345607860', 'P', 'Administrasi Jakarta Utara', '2006-07-29', '0887 3798 139', 'Gg. Suryo Pranoto No. 121, Bau-Bau 36748, NTT', 0, 2008, 'blanditiis', 1),
(45, 'Umaya Zulkarnain M.TI.', '349246666', 'P', 'Manado', '1992-09-03', '(+62) 578 6086 9800', 'Ki. Villa No. 519, Pekalongan 45663, MalUt', 1, 1974, 'ut', 0),
(34, 'Galak Januar', '361756290', 'P', 'Bandar Lampung', '1975-03-11', '(+62) 201 2588 2465', 'Jr. Bakau Griya Utama No. 934, Kendari 10027, PapBar', 1, 1991, 'voluptatem', 0),
(45, 'Samiah Padmasari', '369309212', 'P', 'Singkawang', '2019-09-18', '(+62) 892 0375 027', 'Dk. Babakan No. 364, Batu 10822, JaTeng', 0, 1974, 'sit', 1),
(34, 'Jamal Irawan', '378392310', 'P', 'Singkawang', '2015-09-26', '0829 223 966', 'Ki. PHH. Mustofa No. 117, Depok 10343, Jambi', 1, 2000, 'sed', 0),
(1, 'Wani Mandasari S.Kom', '399736019', 'L', 'Kendari', '2007-12-19', '(+62) 802 9998 4446', 'Jr. Pacuan Kuda No. 863, Tual 66885, BaBel', 1, 1974, 'consectetur', 1),
(31, 'Wage Nashiruddin', '412811452', 'P', 'Lhokseumawe', '1989-02-05', '0208 1802 4409', 'Jln. Ters. Pasir Koja No. 325, Sibolga 44196, SulBar', 0, 1977, 'eum', 0),
(47, 'Cemplunk Pradipta M.M.', '415566249', 'P', 'Banjarbaru', '1988-03-06', '(+62) 854 185 892', 'Gg. Sudiarto No. 520, Sawahlunto 64551, Lampung', 0, 1995, 'voluptatem', 1),
(10, 'Marsudi Sihombing', '426760688', 'L', 'Metro', '1993-08-02', '(+62) 452 5990 917', 'Ki. Kalimalang No. 381, Gunungsitoli 30257, SulTra', 0, 1975, 'sint', 1),
(41, 'Vero Wisnu Budiman S.Gz', '44365298', 'P', 'Singkawang', '2002-11-06', '0544 9790 220', 'Gg. Gegerkalong Hilir No. 398, Tangerang 51931, JaTim', 1, 2002, 'iste', 1),
(2, 'Hana Kartika Hassanah M.Pd', '467093903', 'P', 'Salatiga', '1994-06-25', '0550 5823 4877', 'Ds. Baja No. 986, Kotamobagu 45565, SulBar', 1, 1987, 'fugit', 1),
(44, 'Edward Mahendra S.E.I', '467157617', 'L', 'Tomohon', '2006-11-10', '021 0353 4492', 'Ki. Salak No. 206, Ambon 17627, DIY', 0, 1976, 'animi', 1),
(34, 'Zulfa Sadina Aryani', '491333163', 'P', 'Bogor', '1972-12-11', '0516 3317 658', 'Ki. Monginsidi No. 158, Bitung 61538, Bengkulu', 0, 1998, 'ad', 1),
(57, 'Asmianto Prasetyo S.T.', '501093033', 'L', 'Solok', '1990-07-17', '0566 1675 1831', 'Ki. Soekarno Hatta No. 30, Tomohon 78518, PapBar', 1, 1992, 'et', 0),
(37, 'Zelda Nasyiah', '507314406', 'P', 'Depok', '2020-11-13', '0313 6268 3764', 'Ki. Baladewa No. 414, Pematangsiantar 54311, KalBar', 0, 1971, 'reiciendis', 0),
(35, 'Murti Mansur S.Pt', '524995709', 'L', 'Banjarmasin', '1979-12-29', '0630 6804 402', 'Gg. Sunaryo No. 450, Malang 61875, SulBar', 0, 1981, 'veritatis', 1),
(34, 'Devi Palastri', '534864396', 'P', 'Mataram', '1973-05-07', '(+62) 592 0339 4496', 'Psr. Kartini No. 402, Batam 55230, SulSel', 1, 1994, 'neque', 0),
(38, 'Cawisadi Prabawa Kuswoyo S.Pd', '536634525', 'P', 'Bau-Bau', '2018-07-04', '0758 1052 641', 'Ki. Katamso No. 145, Lhokseumawe 80680, KalUt', 1, 1974, 'consequuntur', 1),
(31, 'Vicky Wulandari', '539306820', 'L', 'Metro', '1989-09-22', '(+62) 573 9555 1282', 'Ds. Sutan Syahrir No. 905, Makassar 49001, SulTra', 0, 2016, 'doloremque', 1),
(37, 'Patricia Puji Riyanti', '544347848', 'L', 'Administrasi Jakarta Timur', '2011-08-19', '0445 2505 3151', 'Kpg. Ujung No. 23, Parepare 55535, SulBar', 1, 2015, 'consequatur', 1),
(24, 'Irsad Ibun Mahendra S.E.', '566819272', 'P', 'Blitar', '1991-12-11', '(+62) 27 6713 8046', 'Jr. Babadak No. 491, Sungai Penuh 52756, KepR', 0, 1998, 'ea', 0),
(42, 'Jinawi Kemba Saptono S.Gz', '572839362', 'L', 'Bogor', '1986-03-15', '(+62) 882 5053 1541', 'Gg. Pasirkoja No. 517, Tebing Tinggi 45231, SulUt', 1, 1998, 'quidem', 0),
(17, 'Bagya Bagas Siregar S.Farm', '575548016', 'P', 'Pasuruan', '1992-03-31', '0885 2134 295', 'Psr. Diponegoro No. 837, Tanjung Pinang 81845, KalTim', 0, 1984, 'quis', 0),
(19, 'Nadine Nasyidah', '585164835', 'P', 'Bandung', '2018-06-08', '(+62) 362 7967 2424', 'Kpg. Supomo No. 990, Banjarbaru 54272, SumUt', 1, 2000, 'sint', 1),
(48, 'Dadi Ardianto', '591534661', 'L', 'Padangsidempuan', '1981-01-12', '0691 4393 487', 'Ki. Orang No. 558, Padangpanjang 49557, KalSel', 0, 1979, 'a', 1),
(14, 'Lidya Widiastuti', '607794501', 'L', 'Batam', '1992-03-01', '(+62) 568 2695 4787', 'Ki. Agus Salim No. 546, Semarang 76395, Bengkulu', 0, 1983, 'qui', 0),
(42, 'Yahya Natsir', '618563692', 'P', 'Balikpapan', '1972-11-19', '0800 6242 6956', 'Kpg. Bawal No. 803, Banjarbaru 56516, DKI', 0, 1978, 'quisquam', 1),
(20, 'Warta Alambana Iswahyudi S.Sos', '630385078', 'L', 'Blitar', '2018-08-21', '(+62) 536 1638 5352', 'Jr. Zamrud No. 631, Sorong 59989, SulUt', 0, 1985, 'impedit', 1),
(18, 'Cawuk Mursinin Saputra', '638826266', 'L', 'Depok', '1992-02-16', '0618 2057 711', 'Jr. Sugiono No. 174, Metro 26027, DIY', 1, 1992, 'saepe', 0),
(29, 'Elisa Ira Safitri', '640492669', 'L', 'Langsa', '2011-04-20', '0318 3197 8007', 'Ki. Raden Saleh No. 331, Tasikmalaya 61456, JaBar', 1, 1975, 'aut', 1),
(14, 'Kani Safina Suryatmi S.Gz', '640796232', 'L', 'Sungai Penuh', '1999-03-19', '0628 0581 5235', 'Psr. Karel S. Tubun No. 218, Pangkal Pinang 80772, SulBar', 1, 1989, 'esse', 1),
(56, 'Karta Irawan', '64201897', 'L', 'Bukittinggi', '1982-10-26', '(+62) 776 7620 760', 'Gg. Dahlia No. 193, Ambon 53047, KepR', 1, 1974, 'sed', 0),
(45, 'Laila Kuswandari', '646154522', 'L', 'Banda Aceh', '1999-07-25', '(+62) 697 3053 091', 'Gg. Basket No. 719, Tasikmalaya 38711, JaTeng', 0, 1993, 'rerum', 0),
(23, 'Banawa Simon Adriansyah', '652221525', 'L', 'Banjarmasin', '2001-10-02', '0853 7988 9698', 'Psr. Kebonjati No. 53, Mojokerto 80295, NTT', 0, 1979, 'quasi', 1),
(15, 'Rafi Hidayanto S.Psi', '67700834', 'L', 'Madiun', '2009-09-17', '(+62) 816 7671 2365', 'Ds. Bakin No. 397, Administrasi Jakarta Selatan 93718, JaTim', 0, 1975, 'sed', 0),
(27, 'Raharja Satya Wibowo', '678874641', 'P', 'Pematangsiantar', '2008-07-22', '0868 5700 747', 'Kpg. Bagas Pati No. 230, Prabumulih 31543, SulTra', 1, 2009, 'dolorum', 0),
(52, 'Limar Timbul Zulkarnain M.M.', '679540832', 'P', 'Medan', '2009-08-22', '0714 1197 8600', 'Ki. Merdeka No. 431, Serang 48811, Papua', 0, 1998, 'aut', 0),
(15, 'Cindy Umi Suryatmi', '711939443', 'P', 'Banjarmasin', '2016-08-22', '0911 6856 240', 'Psr. Bagonwoto  No. 164, Palangka Raya 67558, JaBar', 0, 1982, 'modi', 1),
(37, 'Cinta Kusmawati', '711988811', 'L', 'Bima', '1982-05-03', '0372 7808 6218', 'Ds. Kyai Mojo No. 547, Serang 20408, SulTra', 0, 1979, 'quis', 0),
(26, 'Karma Siregar', '715945344', 'L', 'Pontianak', '1999-05-20', '(+62) 517 7237 9624', 'Ki. Sutan Syahrir No. 39, Metro 69264, JaTim', 0, 2008, 'dolore', 0),
(25, 'Karman Wibowo', '749083844', 'P', 'Magelang', '2007-01-12', '0962 4451 488', 'Ds. Cikutra Barat No. 230, Tasikmalaya 46691, Bali', 0, 1973, 'et', 1),
(6, 'Farah Mardhiyah', '75108032', 'L', 'Bekasi', '2009-06-07', '0689 0155 071', 'Ds. Qrisdoren No. 58, Banjar 52158, NTT', 1, 2015, 'fugiat', 1),
(20, 'Ajiman Zulkarnain', '756132005', 'P', 'Bandar Lampung', '1983-08-24', '0265 9911 4991', 'Gg. Basuki Rahmat  No. 206, Sukabumi 60238, JaTim', 0, 1976, 'dolores', 1),
(34, 'Estiono Sihotang', '758575355', 'P', 'Solok', '2011-07-21', '(+62) 27 1105 775', 'Ki. Umalas No. 971, Yogyakarta 79790, KalSel', 1, 2007, 'laudantium', 0),
(2, 'Mila Zelda Riyanti', '790593645', 'P', 'Bontang', '2010-01-15', '0359 7290 9296', 'Gg. Abdul Rahmat No. 174, Salatiga 19139, DKI', 0, 2009, 'inventore', 1),
(21, 'Agus Gangsa Rajata', '79417298', 'P', 'Tanjungbalai', '2013-07-29', '0295 6504 9820', 'Gg. Gambang No. 637, Bekasi 72299, SulBar', 1, 2006, 'aut', 0),
(26, 'Yani Hassanah S.Pt', '803423989', 'P', 'Pekalongan', '1998-05-05', '0614 1450 281', 'Dk. Kyai Mojo No. 404, Pangkal Pinang 96093, JaTeng', 1, 2011, 'repudiandae', 0),
(30, 'Adhiarja Lukita Setiawan M.TI.', '807235009', 'P', 'Depok', '2017-07-11', '0262 8101 426', 'Gg. Yogyakarta No. 386, Batam 69029, SumSel', 1, 1971, 'molestiae', 0),
(10, 'Martana Setiawan S.Ked', '814139179', 'L', 'Solok', '1992-08-08', '0647 6388 907', 'Jln. HOS. Cjokroaminoto (Pasirkaliki) No. 732, Ambon 92162, JaTeng', 1, 1979, 'voluptatem', 0),
(10, 'Kamidin Mangunsong S.H.', '817564643', 'L', 'Banjar', '2006-11-28', '(+62) 780 1346 9370', 'Gg. Bara No. 155, Gunungsitoli 26856, SulBar', 0, 1990, 'id', 0),
(34, 'Amelia Purnawati', '853215839', 'P', 'Samarinda', '2001-03-31', '(+62) 876 8411 822', 'Jr. Panjaitan No. 904, Langsa 99296, Lampung', 1, 2011, 'numquam', 0),
(5, 'Cakrabirawa Anggriawan', '860407223', 'L', 'Yogyakarta', '2001-05-29', '(+62) 247 3004 8786', 'Jln. Taman No. 873, Bukittinggi 54929, Bali', 1, 1972, 'fugiat', 1),
(49, 'Akarsana Mustofa', '861565141', 'P', 'Langsa', '1979-04-05', '0503 6594 503', 'Jr. Badak No. 940, Tasikmalaya 20585, NTB', 0, 1995, 'ea', 1),
(57, 'Ajimin Wacana S.Ked', '863004421', 'P', 'Metro', '1985-06-08', '(+62) 610 4312 7859', 'Psr. Bawal No. 186, Malang 68205, KalBar', 1, 2003, 'soluta', 1),
(58, 'Makara Wahyudin', '872837354', 'P', 'Ambon', '1988-03-28', '0313 7820 2034', 'Dk. Samanhudi No. 758, Tanjung Pinang 48959, KepR', 1, 1975, 'inventore', 0),
(9, 'Wasis Mahendra', '888376581', 'P', 'Palembang', '2020-03-18', '0804 2767 7435', 'Ki. Ujung No. 147, Padangpanjang 22374, DKI', 1, 1988, 'sed', 1),
(14, 'Kemba Mustofa', '895662850', 'L', 'Solok', '2016-03-14', '0669 4903 395', 'Psr. S. Parman No. 408, Mataram 91470, KalTeng', 1, 1989, 'saepe', 0),
(22, 'Lintang Sabrina Utami S.Sos', '908024408', 'P', 'Probolinggo', '2020-06-17', '0284 6710 8833', 'Gg. Surapati No. 282, Ternate 20513, KalSel', 1, 1973, 'qui', 0),
(32, 'Winda Kusmawati', '908055967', 'L', 'Cirebon', '1989-11-06', '(+62) 654 7803 434', 'Ds. Bambon No. 13, Pangkal Pinang 66768, PapBar', 0, 2008, 'inventore', 0),
(60, 'Ani Permata', '931144890', 'P', 'Administrasi Jakarta Selatan', '2012-02-20', '(+62) 998 2843 6856', 'Dk. Cokroaminoto No. 529, Tangerang 83651, SulSel', 1, 2013, 'architecto', 0),
(59, 'Balangga Wadi Ardianto S.IP', '933470097', 'L', 'Padang', '1992-12-09', '(+62) 707 4788 7653', 'Dk. Cikutra Timur No. 700, Palopo 39133, KalTeng', 1, 2015, 'nostrum', 1),
(14, 'Novi Lailasari', '937579996', 'P', 'Singkawang', '1972-09-23', '(+62) 29 8543 672', 'Jr. Kali No. 703, Kendari 46310, Lampung', 0, 1992, 'et', 0),
(37, 'Cengkir Jailani', '938915671', 'P', 'Kotamobagu', '1973-07-19', '0757 2835 5065', 'Jln. R.E. Martadinata No. 359, Tasikmalaya 33831, SulTeng', 1, 1971, 'dolorem', 1),
(23, 'Padma Ratih Nuraini', '941722453', 'P', 'Administrasi Jakarta Utara', '2001-03-06', '(+62) 869 3407 0022', 'Ki. Padma No. 917, Tebing Tinggi 33482, MalUt', 0, 2003, 'vitae', 0),
(55, 'Kartika Rahimah', '970209905', 'P', 'Bukittinggi', '2018-11-02', '023 5034 5030', 'Jr. Raya Ujungberung No. 139, Batam 26611, SumBar', 1, 1984, 'quod', 1),
(7, 'Dinda Hastuti', '989714172', 'P', 'Denpasar', '1982-11-06', '(+62) 414 9820 581', 'Gg. Fajar No. 303, Dumai 22859, Maluku', 1, 2019, 'deserunt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_publikasi`
--

CREATE TABLE `alumni_publikasi` (
  `nim` varchar(12) NOT NULL,
  `id_publikasi` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni_publikasi`
--

INSERT INTO `alumni_publikasi` (`nim`, `id_publikasi`) VALUES
('109599803', 57),
('141878708', 90),
('151694460', 38),
('155502462', 62),
('155508314', 3),
('159566792', 45),
('161377211', 27),
('164376579', 66),
('168224019', 11),
('16949243', 61),
('18134084', 68),
('189146065', 8),
('191735053', 32),
('192669032', 100),
('193294871', 90),
('198815537', 65),
('218631625', 3),
('221810160', 1),
('221810160', 64),
('22357502', 38),
('229996201', 99),
('244032439', 8),
('247657094', 87),
('264953726', 48),
('285240858', 31),
('285986040', 66),
('286891475', 95),
('292574887', 44),
('306127310', 23),
('322091487', 75),
('326147914', 34),
('329972840', 65),
('3331756', 62),
('340993265', 25),
('342439482', 90),
('344037078', 36),
('345607860', 35),
('349246666', 56),
('361756290', 79),
('369309212', 64),
('378392310', 9),
('399736019', 94),
('412811452', 101),
('415566249', 76),
('426760688', 79),
('44365298', 17),
('467093903', 3),
('467157617', 28),
('491333163', 94),
('501093033', 9),
('507314406', 41),
('524995709', 46),
('534864396', 101),
('536634525', 3),
('539306820', 93),
('544347848', 93),
('566819272', 10),
('572839362', 25),
('575548016', 9),
('585164835', 8),
('591534661', 12),
('607794501', 11),
('618563692', 65),
('630385078', 86),
('638826266', 98),
('640492669', 12),
('640796232', 28),
('64201897', 85),
('646154522', 27),
('652221525', 25),
('67700834', 61),
('678874641', 42),
('679540832', 69),
('711939443', 43),
('711988811', 46),
('715945344', 36),
('749083844', 12),
('75108032', 41),
('756132005', 89),
('758575355', 67),
('790593645', 60),
('79417298', 47),
('803423989', 58),
('807235009', 14),
('814139179', 74),
('817564643', 5),
('853215839', 85),
('860407223', 44),
('861565141', 69),
('863004421', 71),
('872837354', 29),
('888376581', 93),
('895662850', 55),
('908024408', 50),
('908055967', 101),
('931144890', 89),
('933470097', 56),
('937579996', 75),
('938915671', 96),
('941722453', 6),
('970209905', 93),
('989714172', 87);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_tempat_kerja`
--

CREATE TABLE `alumni_tempat_kerja` (
  `nim` varchar(12) NOT NULL,
  `id_tempat_kerja` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni_tempat_kerja`
--

INSERT INTO `alumni_tempat_kerja` (`nim`, `id_tempat_kerja`) VALUES
('109599803', 15),
('141878708', 63),
('151694460', 77),
('155502462', 10),
('155508314', 11),
('159566792', 74),
('161377211', 96),
('164376579', 72),
('168224019', 61),
('16949243', 4),
('18134084', 31),
('189146065', 65),
('191735053', 5),
('192669032', 11),
('193294871', 81),
('198815537', 26),
('218631625', 35),
('221810160', 1),
('221810160', 78),
('22357502', 46),
('229996201', 13),
('244032439', 13),
('247657094', 41),
('264953726', 18),
('285240858', 50),
('285986040', 32),
('286891475', 74),
('292574887', 54),
('306127310', 40),
('322091487', 85),
('326147914', 94),
('329972840', 50),
('3331756', 83),
('340993265', 84),
('342439482', 22),
('344037078', 50),
('345607860', 13),
('349246666', 53),
('361756290', 82),
('369309212', 4),
('378392310', 84),
('399736019', 91),
('412811452', 57),
('415566249', 1),
('426760688', 72),
('44365298', 15),
('467093903', 42),
('467157617', 90),
('491333163', 77),
('501093033', 31),
('507314406', 17),
('524995709', 63),
('534864396', 32),
('536634525', 54),
('539306820', 11),
('544347848', 85),
('566819272', 35),
('572839362', 42),
('575548016', 48),
('585164835', 65),
('591534661', 24),
('607794501', 72),
('618563692', 41),
('630385078', 66),
('638826266', 81),
('640492669', 5),
('640796232', 89),
('64201897', 100),
('646154522', 52),
('652221525', 46),
('67700834', 98),
('678874641', 17),
('679540832', 6),
('711939443', 90),
('711988811', 58),
('715945344', 75),
('749083844', 58),
('75108032', 37),
('756132005', 31),
('758575355', 76),
('790593645', 77),
('79417298', 86),
('803423989', 4),
('807235009', 97),
('814139179', 75),
('817564643', 63),
('853215839', 41),
('860407223', 22),
('861565141', 25),
('863004421', 68),
('872837354', 61),
('888376581', 23),
('895662850', 94),
('908024408', 63),
('908055967', 69),
('931144890', 88),
('933470097', 77),
('937579996', 16),
('938915671', 44),
('941722453', 77),
('970209905', 97),
('989714172', 48);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author` varchar(100) NOT NULL,
  `id_publikasi` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author`, `id_publikasi`) VALUES
('A ex dolorem.', 64),
('Accusamus error.', 11),
('Animi aspernatur.', 54),
('Atque molestias.', 33),
('Aut at.', 86),
('Aut culpa omnis.', 13),
('Aut deserunt quia.', 14),
('Aut modi.', 19),
('Consectetur dolor itaque.', 34),
('Consequatur commodi.', 37),
('Consequuntur enim.', 84),
('Consequuntur qui iure.', 81),
('Corporis iure repellat.', 66),
('Corrupti quo quia.', 80),
('Culpa repellat.', 3),
('Cum vero esse.', 23),
('Cupiditate reprehenderit.', 28),
('Dicta vel voluptas.', 38),
('Dolor laboriosam illum.', 98),
('Dolor quidem.', 58),
('Dolorem quam.', 47),
('Dolores est.', 52),
('Dolores rerum.', 83),
('Doloribus cupiditate.', 101),
('Eligendi repudiandae doloremque.', 39),
('Eos deserunt.', 2),
('Error aut.', 4),
('Error voluptas.', 93),
('Est corporis ipsam.', 73),
('Est nobis.', 89),
('Et et ex.', 36),
('Et explicabo ut.', 9),
('Et ipsa.', 22),
('Et qui.', 27),
('Et temporibus sed.', 85),
('Et ut neque.', 76),
('Excepturi cumque labore.', 51),
('Excepturi earum.', 18),
('Excepturi voluptate necessitatibus.', 92),
('Exercitationem ut delectus.', 96),
('Explicabo tempora commodi.', 42),
('Fuga eveniet natus.', 56),
('Fugiat fugiat aperiam.', 99),
('Hamba Allah', 1),
('Harum nam voluptatem.', 17),
('Hic sed nulla.', 32),
('Id sint.', 62),
('In dolorem.', 26),
('Ipsum ex.', 65),
('Ipsum praesentium ipsa.', 24),
('Labore ipsam.', 91),
('Laborum veritatis at.', 63),
('Maxime assumenda qui.', 45),
('Minima nihil.', 69),
('Minus explicabo.', 97),
('Molestiae nihil quos.', 49),
('Molestiae vero.', 88),
('Nam dolore.', 20),
('Nam tempora eligendi.', 30),
('Non hic.', 41),
('Nulla totam.', 70),
('Numquam commodi.', 25),
('Odio nihil.', 53),
('Odio sapiente adipisci.', 74),
('Perspiciatis in eaque.', 61),
('Perspiciatis sint.', 29),
('Praesentium et quos.', 87),
('Quaerat eius qui.', 44),
('Quaerat pariatur.', 77),
('Qui cum.', 12),
('Qui omnis dicta.', 95),
('Qui similique.', 67),
('Quia nihil dolore.', 46),
('Quia repudiandae sit.', 10),
('Quibusdam dignissimos.', 68),
('Quibusdam pariatur.', 72),
('Quibusdam porro quia.', 50),
('Quidem sapiente nesciunt.', 75),
('Quisquam similique dolores.', 16),
('Quo pariatur repellat.', 78),
('Quod dignissimos molestiae.', 94),
('Quod dolorem dolores.', 6),
('Quod voluptatem occaecati.', 48),
('Quos nisi adipisci.', 43),
('Ratione dignissimos.', 59),
('Recusandae sequi.', 7),
('Sapiente recusandae ut.', 1),
('Sed et facilis.', 60),
('Sed praesentium.', 100),
('Sequi consequatur et.', 31),
('Sint repellat maiores.', 5),
('Sint rerum.', 21),
('Sunt fuga.', 71),
('Temporibus delectus odit.', 40),
('Temporibus doloribus.', 79),
('Temporibus odio.', 8),
('Totam molestiae.', 90),
('Ut qui.', 55),
('Vel harum.', 35),
('Voluptatem deleniti.', 57),
('Voluptatem in.', 82),
('Voluptatibus maiores esse.', 15);

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
(138, '::1', '211810567@stis.ac.id', 66, '2021-02-03 08:57:09', 1),
(139, '::1', 'dummy@stis.ac.id', 65, '2021-02-06 08:24:56', 1),
(140, '::1', 'dummy@gmail.com', NULL, '2021-02-06 08:32:53', 0),
(141, '::1', 'dummy@stis.ac.id', 65, '2021-02-06 08:33:15', 1),
(142, '::1', 'dummy@stis.ac.id', 65, '2021-02-07 07:25:03', 1),
(143, '::1', 'dummy@stis.ac.id', NULL, '2021-02-10 04:34:26', 0),
(144, '::1', 'dummy@stis.ac.id', 65, '2021-02-10 04:34:48', 1),
(145, '::1', 'dummy@stis.ac.id', 65, '2021-02-10 05:47:28', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) UNSIGNED NOT NULL,
  `jenjang` varchar(2) NOT NULL,
  `universitas` varchar(16) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `judul_tulisan` varchar(100) NOT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `jenjang`, `universitas`, `program_studi`, `tahun_lulus`, `tahun_masuk`, `judul_tulisan`, `nim`) VALUES
(1, 'S2', 'Harvard Universi', 'Computer Science', 1997, 1980, 'Ini adalah Judul Tulisan', '221810160'),
(2, 'S2', 'Aut et.', 'Est accusantium qui.', 1975, 1977, 'Hic vel molestiae recusandae autem.', '109599803'),
(3, 'S2', 'Mollitia ducimus', 'Consequatur qui.', 1999, 1982, 'Eius dolorum magnam dolor omnis.', '141878708'),
(4, 'S1', 'Sint aut odit do', 'Culpa labore asperiores.', 2003, 1985, 'Vitae voluptatum rerum alias dignissimos delectus.', '151694460'),
(5, 'S1', 'Quod voluptas vo', 'Natus quo occaecati.', 1983, 1974, 'Voluptate quo saepe et veritatis.', '155502462'),
(6, 'S3', 'In saepe dolor e', 'Ipsa possimus.', 2016, 1998, 'Cumque sed eum quaerat at officia est.', '155508314'),
(7, 'S2', 'Quo nemo laudant', 'Consequuntur amet est.', 1985, 1974, 'Et tenetur est fugit aut officia.', '159566792'),
(8, 'S2', 'Incidunt illum n', 'Et quo.', 1988, 2010, 'Ut aliquid consequatur reprehenderit eveniet est delectus.', '161377211'),
(9, 'S3', 'Non recusandae t', 'Dolorum dignissimos.', 1991, 2009, 'Pariatur laboriosam in placeat reprehenderit recusandae.', '164376579'),
(10, 'S3', 'Minus ut rem.', 'Quod facilis cupiditate.', 1975, 1999, 'Enim quam sed sit.', '168224019'),
(11, 'S1', 'A sit qui.', 'Facilis voluptatibus.', 2013, 2002, 'Quibusdam voluptate et maxime.', '16949243'),
(12, 'S1', 'Assumenda quia e', 'Aut non corrupti.', 1989, 2017, 'Ut soluta reprehenderit perspiciatis amet vel eos.', '18134084'),
(13, 'S3', 'Laboriosam exped', 'Odio soluta.', 1991, 1988, 'Sequi ut aliquid excepturi id.', '189146065'),
(14, 'S1', 'Dolorem doloribu', 'Autem ut.', 1982, 1994, 'Mollitia voluptatem dolores laudantium.', '191735053'),
(15, 'S1', 'Aut natus quia.', 'Voluptas ut omnis.', 1988, 1995, 'Aut voluptatem sequi nam.', '192669032'),
(16, 'S2', 'In veritatis quo', 'Amet ducimus delectus.', 1987, 1995, 'Aliquam et quos molestiae.', '193294871'),
(17, 'S1', 'Ut quia voluptas', 'Corporis ut.', 1980, 1982, 'Necessitatibus rerum quas cum aut.', '198815537'),
(18, 'S3', 'Omnis vel doloru', 'Est odio.', 2015, 1977, 'Porro et ullam amet.', '218631625'),
(19, 'S1', 'Quam sunt.', 'Ducimus inventore.', 1995, 1976, 'Ut ratione explicabo et.', '221810160'),
(20, 'S2', 'Officiis explica', 'Laboriosam voluptatum nobis.', 1994, 2012, 'Ex dolorum quisquam et nulla ullam eos.', '22357502'),
(21, 'S3', 'Fugiat dolor dol', 'Unde et maxime.', 1995, 2020, 'Ratione possimus ut occaecati.', '229996201'),
(22, 'S1', 'Iure veniam.', 'Aut voluptas.', 2009, 1971, 'Quod et esse ea dolorum libero ut sit.', '244032439'),
(23, 'S3', 'Odit et rerum.', 'Quae rerum.', 1995, 1995, 'Aut vero optio pariatur voluptates deleniti et.', '247657094'),
(24, 'S3', 'Quae eos recusan', 'Quas similique.', 2017, 1993, 'Incidunt dolores aspernatur nam nam.', '264953726'),
(25, 'S1', 'Quidem nobis mol', 'Molestias nihil.', 1974, 1975, 'Ut quisquam consequatur consequuntur repellat cupiditate.', '285240858'),
(26, 'S3', 'Facere ut vel.', 'Aut molestias.', 1995, 2019, 'Ut sed omnis nemo totam et temporibus.', '285986040'),
(27, 'S3', 'Cumque non aperi', 'Est voluptatibus.', 1979, 2017, 'Quia soluta ut culpa officiis.', '286891475'),
(28, 'S1', 'Sint a ipsum ius', 'Qui aut.', 1994, 2016, 'Consectetur rerum sequi sit.', '292574887'),
(29, 'S2', 'Aut quae.', 'Dolorum maxime molestiae.', 2008, 1995, 'Ad iusto ut explicabo fugit qui.', '306127310'),
(30, 'S1', 'Tempora sed nesc', 'Debitis expedita temporibus.', 1980, 1976, 'Odit eligendi atque eos et a.', '322091487'),
(31, 'S2', 'Eligendi fugit q', 'Eum atque.', 2015, 2020, 'Voluptatem numquam velit iusto nesciunt.', '326147914'),
(32, 'S1', 'Doloribus corpor', 'Recusandae quas.', 2006, 2007, 'Sint sunt nam et.', '329972840'),
(33, 'S3', 'Aut id mollitia ', 'Maxime cupiditate commodi.', 2006, 1994, 'Minus nobis debitis ea explicabo voluptas.', '3331756'),
(34, 'S1', 'Deleniti dolor.', 'Vel sit deserunt.', 2013, 1988, 'Debitis incidunt ex atque dolor rerum.', '340993265'),
(35, 'S1', 'Veniam sed ratio', 'Iure voluptatibus voluptatem.', 1999, 1970, 'Occaecati et exercitationem totam in.', '342439482'),
(36, 'S2', 'Laboriosam et ma', 'Officia perferendis vitae.', 1985, 1970, 'Pariatur omnis saepe qui omnis qui.', '344037078'),
(37, 'S1', 'Voluptates iure ', 'Vero asperiores quaerat.', 2002, 1976, 'Repellat amet illum est sed et.', '345607860'),
(38, 'S3', 'Eos nihil culpa.', 'Deleniti nobis velit.', 1992, 2018, 'Et et quod voluptatem dolore et.', '349246666'),
(39, 'S1', 'Qui doloremque t', 'Sunt et.', 2014, 2013, 'Consequatur aperiam alias ut consequuntur consequatur.', '361756290'),
(40, 'S1', 'Optio blanditiis', 'Sapiente aut.', 1993, 1972, 'Autem mollitia et qui.', '369309212'),
(41, 'S2', 'Officia fuga sed', 'Laudantium omnis placeat.', 1972, 2001, 'Et enim ut quo tempora.', '378392310'),
(42, 'S1', 'Placeat consequa', 'Libero repudiandae aut.', 1980, 2012, 'Molestiae vero asperiores voluptate sit.', '399736019'),
(43, 'S3', 'Ipsam expedita e', 'Mollitia quia et.', 1980, 2002, 'Dolorem nemo minus ut atque tempora odio.', '412811452'),
(44, 'S1', 'Sapiente molesti', 'Earum voluptas.', 2018, 1982, 'Magnam qui quia quod necessitatibus.', '415566249'),
(45, 'S3', 'Aut quia ratione', 'Omnis ducimus.', 2003, 2007, 'Minima totam officia neque rerum ut.', '426760688'),
(46, 'S1', 'Eaque id est.', 'Molestiae dolorem ratione.', 2020, 1976, 'Qui ullam facere in.', '44365298'),
(47, 'S1', 'Similique est qu', 'Et rerum odio.', 1987, 1988, 'Dolor saepe facilis ipsam dolores.', '467093903'),
(48, 'S3', 'Reiciendis accus', 'Mollitia et iure.', 2011, 1971, 'Iste quos animi ab.', '467157617'),
(49, 'S2', 'Consectetur volu', 'Nihil soluta.', 1992, 1997, 'Ea nam deserunt voluptas modi totam.', '491333163'),
(50, 'S1', 'Cum voluptas rep', 'Architecto itaque.', 1985, 1980, 'Iste qui qui commodi sed possimus in.', '501093033'),
(51, 'S1', 'Dolor mollitia r', 'Facere aliquid reprehenderit.', 1987, 1993, 'Explicabo provident incidunt eum ullam deleniti autem.', '507314406'),
(52, 'S3', 'Esse rerum dolor', 'Voluptas molestiae.', 2006, 1980, 'Neque ut eveniet occaecati.', '524995709'),
(53, 'S3', 'Velit nesciunt s', 'Est id excepturi.', 1991, 1997, 'Omnis quae alias error eum et.', '534864396'),
(54, 'S2', 'Nisi nemo natus ', 'Accusamus dolor sed.', 1982, 2020, 'Et pariatur delectus iusto.', '536634525'),
(55, 'S3', 'Eveniet corrupti', 'Ad numquam.', 1975, 1977, 'Laborum quisquam reiciendis voluptatibus similique blanditiis consequatur.', '539306820'),
(56, 'S1', 'Incidunt fugiat ', 'Exercitationem ratione nisi.', 2000, 1994, 'Debitis sunt ea esse.', '544347848'),
(57, 'S3', 'Suscipit consequ', 'Ea est.', 1979, 2008, 'Maiores molestiae iste dicta soluta iure.', '566819272'),
(58, 'S3', 'Perferendis comm', 'Quo asperiores.', 2016, 1970, 'Quo asperiores hic necessitatibus nihil quae rerum.', '572839362'),
(59, 'S1', 'Blanditiis tempo', 'Animi sed sit.', 2006, 1987, 'Dignissimos et sit dolores quas omnis.', '575548016'),
(60, 'S1', 'Assumenda sit na', 'Officiis maxime ea.', 2018, 2013, 'Cupiditate aspernatur eum enim corporis.', '585164835'),
(61, 'S3', 'Enim iure conseq', 'Dignissimos consequatur ut.', 1975, 2011, 'Nobis itaque et magni.', '591534661'),
(62, 'S1', 'Enim aut sed.', 'Quam perspiciatis quam.', 1994, 2015, 'Fugit porro dicta pariatur est.', '607794501'),
(63, 'S3', 'Eligendi dolore ', 'Et exercitationem et.', 1986, 1998, 'Repudiandae quis eligendi adipisci aut ut.', '618563692'),
(64, 'S3', 'Voluptates qui f', 'Ut velit.', 2003, 1975, 'Sequi ducimus qui perspiciatis et aspernatur occaecati.', '630385078'),
(65, 'S1', 'Qui dignissimos ', 'Ea vel et.', 1992, 1989, 'Consequatur accusantium officiis vel.', '638826266'),
(66, 'S2', 'Libero ut invent', 'At reiciendis id.', 2007, 2003, 'Consequatur doloremque eius eaque mollitia.', '640492669'),
(67, 'S1', 'Fugit repellendu', 'Laboriosam sit sequi.', 1978, 1980, 'Consectetur aut quis id facilis.', '640796232'),
(68, 'S2', 'Modi veniam inci', 'Adipisci vel.', 2008, 2012, 'Atque impedit suscipit nisi.', '64201897'),
(69, 'S2', 'Quae laborum ass', 'Placeat qui quasi.', 2014, 1981, 'Ipsum facilis quidem et.', '646154522'),
(70, 'S3', 'Unde et enim rer', 'Nisi dolorem.', 2003, 1985, 'Blanditiis aut quas saepe odit earum ipsum.', '652221525'),
(71, 'S1', 'Numquam omnis qu', 'Molestiae recusandae recusandae.', 1971, 2008, 'Dolore magnam incidunt sapiente.', '67700834'),
(72, 'S1', 'Eos voluptatem p', 'Itaque atque.', 1991, 1996, 'Nam qui est dolorem.', '678874641'),
(73, 'S2', 'Dolores reprehen', 'Reiciendis deleniti.', 1994, 1999, 'Ut sunt nesciunt aut corrupti at iste.', '679540832'),
(74, 'S2', 'Aliquam velit of', 'Est quo corporis.', 1994, 2010, 'Reprehenderit tempore modi tempora natus doloremque atque.', '711939443'),
(75, 'S1', 'Cupiditate et no', 'Ad vero molestiae.', 2004, 1982, 'Enim impedit qui mollitia autem.', '711988811'),
(76, 'S2', 'Velit corporis c', 'Praesentium qui.', 2003, 1985, 'Voluptas consequatur at itaque error tempora.', '715945344'),
(77, 'S1', 'Rem eos est quo.', 'Nihil doloribus.', 2012, 2018, 'Sequi dicta ipsa qui aspernatur.', '749083844'),
(78, 'S3', 'In qui doloribus', 'Et earum sapiente.', 1982, 1973, 'Veritatis laboriosam tenetur fugiat iste.', '75108032'),
(79, 'S1', 'Saepe et.', 'Perspiciatis laborum.', 1998, 1997, 'Qui dolores et possimus dolorem sed ea.', '756132005'),
(80, 'S2', 'Eaque saepe qui.', 'Aut ut culpa.', 2000, 2003, 'Cupiditate voluptatibus culpa accusantium nostrum occaecati laboriosam.', '758575355'),
(81, 'S2', 'Et quidem sint.', 'Provident error debitis.', 2017, 1993, 'Omnis tenetur iure recusandae.', '790593645'),
(82, 'S2', 'Voluptatem place', 'Voluptatem repudiandae.', 1991, 2007, 'Qui occaecati velit accusamus at.', '79417298'),
(83, 'S1', 'Sunt id ut cupid', 'Nisi asperiores.', 1981, 2019, 'Qui iste quod quia qui.', '803423989'),
(84, 'S2', 'Ea voluptas libe', 'Et itaque.', 1996, 1986, 'Assumenda quas molestiae non impedit quo eius.', '807235009'),
(85, 'S3', 'Sapiente facere ', 'Suscipit aperiam officiis.', 2007, 2003, 'Fugit tenetur tempora accusamus soluta qui consequuntur.', '814139179'),
(86, 'S1', 'Dolor dolor solu', 'Odio accusantium.', 1990, 2008, 'Qui inventore dolores velit.', '817564643'),
(87, 'S3', 'Temporibus volup', 'Exercitationem dignissimos.', 1975, 2000, 'Vel nisi aut iusto eum alias.', '853215839'),
(88, 'S1', 'Distinctio illum', 'Sit quae.', 1981, 1984, 'Explicabo totam quam voluptate quia.', '860407223'),
(89, 'S1', 'Nihil in iste ul', 'Harum ad.', 1972, 1976, 'Qui labore ea neque qui ducimus saepe.', '861565141'),
(90, 'S1', 'Fugit exercitati', 'Et harum.', 1982, 2006, 'Ducimus eveniet reprehenderit rerum.', '863004421'),
(91, 'S1', 'Eligendi eum eaq', 'Maiores beatae magnam.', 1992, 2009, 'Officiis impedit dolorum ad non.', '872837354'),
(92, 'S1', 'Consequatur blan', 'Quidem perferendis.', 2019, 1981, 'Dolorem necessitatibus sed vero a.', '888376581'),
(93, 'S1', 'Ipsum qui odit t', 'Et eum.', 2008, 1993, 'Excepturi dolor quia unde quod nihil nihil.', '895662850'),
(94, 'S3', 'Et soluta invent', 'Molestiae odio excepturi.', 1998, 2001, 'Dolorum dolor et est.', '908024408'),
(95, 'S1', 'Nemo enim eius.', 'Sint qui.', 2007, 2006, 'Nostrum nulla saepe est autem.', '908055967'),
(96, 'S2', 'Cum in commodi.', 'Quo optio.', 2017, 1997, 'Mollitia rerum dolorem ea ipsa sed.', '931144890'),
(97, 'S3', 'Sint consequatur', 'Qui doloremque dicta.', 1981, 1980, 'Explicabo distinctio at iusto et impedit sed.', '933470097'),
(98, 'S1', 'Ducimus dolor qu', 'Sapiente dicta dolor.', 2008, 1985, 'Omnis voluptas nulla id.', '937579996'),
(99, 'S2', 'Sed est odio nam', 'Ab aut dignissimos.', 1971, 1994, 'Omnis fugit id quis non non perspiciatis.', '938915671'),
(100, 'S3', 'Et rerum quis.', 'At sed aliquid.', 1974, 2011, 'Vero cum velit ratione eum enim praesentium.', '941722453'),
(101, 'S3', 'Incidunt commodi', 'Rerum laboriosam eligendi.', 1975, 1974, 'Consequatur est nobis voluptas voluptatem fugiat.', '970209905'),
(102, 'S2', 'Officia voluptat', 'Animi aspernatur omnis.', 1998, 1990, 'Eum aut repellendus et nam.', '989714172');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) UNSIGNED NOT NULL,
  `nama_prestasi` varchar(100) DEFAULT NULL,
  `tahun_prestasi` year(4) DEFAULT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `tahun_prestasi`, `nim`) VALUES
(1, 'Juara 1 Dummy', 2014, '221810160'),
(2, 'quibusdam', 1999, '109599803'),
(3, 'quibusdam', 2000, '141878708'),
(4, 'accusamus', 1994, '151694460'),
(5, 'quia', 1977, '155502462'),
(6, 'aut', 2003, '155508314'),
(7, 'voluptatem', 1992, '159566792'),
(8, 'vero', 1983, '161377211'),
(9, 'possimus', 2020, '164376579'),
(10, 'tempore', 1990, '168224019'),
(11, 'ut', 1973, '16949243'),
(12, 'et', 2006, '18134084'),
(13, 'ea', 2011, '189146065'),
(14, 'laborum', 2020, '191735053'),
(15, 'temporibus', 1993, '192669032'),
(16, 'cumque', 1983, '193294871'),
(17, 'harum', 2020, '198815537'),
(18, 'ducimus', 1977, '218631625'),
(19, 'dolor', 1995, '221810160'),
(20, 'ut', 1998, '22357502'),
(21, 'accusamus', 1971, '229996201'),
(22, 'accusantium', 2013, '244032439'),
(23, 'quia', 2014, '247657094'),
(24, 'a', 2011, '264953726'),
(25, 'nihil', 1992, '285240858'),
(26, 'et', 2019, '285986040'),
(27, 'voluptas', 1983, '286891475'),
(28, 'in', 1992, '292574887'),
(29, 'sed', 1988, '306127310'),
(30, 'provident', 2006, '322091487'),
(31, 'quos', 1994, '326147914'),
(32, 'voluptatibus', 1978, '329972840'),
(33, 'suscipit', 2001, '3331756'),
(34, 'porro', 1992, '340993265'),
(35, 'hic', 2020, '342439482'),
(36, 'et', 2012, '344037078'),
(37, 'aliquam', 2011, '345607860'),
(38, 'est', 1981, '349246666'),
(39, 'sed', 1998, '361756290'),
(40, 'tempora', 1970, '369309212'),
(41, 'labore', 2007, '378392310'),
(42, 'amet', 2019, '399736019'),
(43, 'molestiae', 2013, '412811452'),
(44, 'eos', 1998, '415566249'),
(45, 'quod', 1980, '426760688'),
(46, 'id', 2000, '44365298'),
(47, 'quia', 2019, '467093903'),
(48, 'quidem', 1994, '467157617'),
(49, 'repellat', 1990, '491333163'),
(50, 'fugit', 2005, '501093033'),
(51, 'velit', 1985, '507314406'),
(52, 'quasi', 1983, '524995709'),
(53, 'distinctio', 2018, '534864396'),
(54, 'fugiat', 1988, '536634525'),
(55, 'qui', 2007, '539306820'),
(56, 'fuga', 1976, '544347848'),
(57, 'quasi', 1991, '566819272'),
(58, 'vel', 2005, '572839362'),
(59, 'ea', 2003, '575548016'),
(60, 'beatae', 2005, '585164835'),
(61, 'consequatur', 1989, '591534661'),
(62, 'asperiores', 2017, '607794501'),
(63, 'sequi', 1981, '618563692'),
(64, 'dolores', 1975, '630385078'),
(65, 'in', 2014, '638826266'),
(66, 'exercitationem', 1994, '640492669'),
(67, 'sunt', 1970, '640796232'),
(68, 'quia', 2019, '64201897'),
(69, 'ducimus', 1997, '646154522'),
(70, 'suscipit', 1986, '652221525'),
(71, 'nostrum', 1976, '67700834'),
(72, 'temporibus', 2011, '678874641'),
(73, 'dolore', 2009, '679540832'),
(74, 'dolorem', 1977, '711939443'),
(75, 'optio', 1987, '711988811'),
(76, 'minus', 2015, '715945344'),
(77, 'ipsum', 1997, '749083844'),
(78, 'rem', 2008, '75108032'),
(79, 'officiis', 2005, '756132005'),
(80, 'quas', 2020, '758575355'),
(81, 'rerum', 1972, '790593645'),
(82, 'temporibus', 1997, '79417298'),
(83, 'velit', 2009, '803423989'),
(84, 'tempora', 1984, '807235009'),
(85, 'doloribus', 2015, '814139179'),
(86, 'unde', 2001, '817564643'),
(87, 'dolorum', 2013, '853215839'),
(88, 'quaerat', 1975, '860407223'),
(89, 'est', 1999, '861565141'),
(90, 'vero', 1997, '863004421'),
(91, 'corporis', 2017, '872837354'),
(92, 'sequi', 1985, '888376581'),
(93, 'nam', 2008, '895662850'),
(94, 'dolor', 1975, '908024408'),
(95, 'aliquid', 1972, '908055967'),
(96, 'quo', 2008, '931144890'),
(97, 'nobis', 2019, '933470097'),
(98, 'placeat', 1983, '937579996'),
(99, 'tenetur', 1985, '938915671'),
(100, 'voluptatem', 1987, '941722453'),
(101, 'provident', 1999, '970209905'),
(102, 'aperiam', 1998, '989714172');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` int(11) UNSIGNED NOT NULL,
  `topik` varchar(45) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `publisher` varchar(25) NOT NULL,
  `tanggal_disahkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id_publikasi`, `topik`, `judul`, `deskripsi`, `publisher`, `tanggal_disahkan`) VALUES
(1, 'Random', 'Publikasi ngadi ngadi', 'Dolorem amet fugiat quia omnis.', 'cumque', '1986-12-14'),
(2, 'modi', 'Iusto in expedita.', 'Aut non quae ut repellat optio.', 'quisquam', '1970-11-05'),
(3, 'delectus', 'Nesciunt nobis qui consequatur.', 'Esse aspernatur eos quis ad incidunt deserunt aspernatur.', 'id', '1979-06-13'),
(4, 'ut', 'Nihil aut sit optio.', 'Quasi porro dolorem similique dolores sapiente iste.', 'asperiores', '1999-06-09'),
(5, 'a', 'Quos sint.', 'Odit adipisci voluptatem ad repudiandae nostrum quia.', 'magni', '1987-06-11'),
(6, 'esse', 'Veritatis molestias voluptatibus.', 'Atque voluptatem sequi qui ducimus nesciunt voluptatem non.', 'ullam', '2001-04-14'),
(7, 'ab', 'Dolores sint rerum sint.', 'Maiores quia aliquid modi ex deserunt quo officiis.', 'quaerat', '1971-02-22'),
(8, 'consequatur', 'Minus cum minus assumenda.', 'Qui alias saepe sit nam.', 'expedita', '1979-01-21'),
(9, 'a', 'Suscipit vitae.', 'Ut dicta quam ea velit minima architecto.', 'voluptatem', '2013-11-29'),
(10, 'et', 'In ex.', 'Aperiam quos at nihil repudiandae est.', 'tempora', '1996-05-02'),
(11, 'laboriosam', 'Sapiente quis iusto.', 'Reprehenderit aut ut velit est repellendus.', 'dolorem', '2001-07-20'),
(12, 'voluptatem', 'Quae facilis tempora eligendi.', 'Voluptatum a aut est voluptatem voluptate similique voluptas.', 'consequatur', '1984-07-19'),
(13, 'ut', 'Repellendus ipsum ut.', 'Voluptatem libero illo illum dolorem dolorem at saepe.', 'veritatis', '2007-04-15'),
(14, 'quo', 'Modi voluptatem repudiandae.', 'Odio eos eum minima quae ratione doloribus similique.', 'exercitationem', '1997-07-04'),
(15, 'est', 'Voluptatem accusantium laudantium aut.', 'Mollitia consectetur voluptas non modi.', 'aperiam', '2000-06-03'),
(16, 'ipsa', 'Dolor ab voluptatem.', 'Occaecati occaecati ipsa sunt.', 'laborum', '1972-09-28'),
(17, 'eveniet', 'Itaque nisi dignissimos excepturi.', 'Fugit aspernatur possimus sequi itaque deserunt quasi aut.', 'cum', '1986-10-11'),
(18, 'et', 'Sit cupiditate.', 'Est in cupiditate accusamus nisi veniam est.', 'voluptatum', '1984-08-19'),
(19, 'eius', 'Dolorem aspernatur inventore.', 'Non sint debitis tempora dolorum reprehenderit aliquid.', 'sed', '1992-09-04'),
(20, 'vitae', 'Saepe qui sed sunt voluptas.', 'Suscipit ad sequi iusto et fugiat.', 'quidem', '2011-08-30'),
(21, 'ipsam', 'Velit ut nesciunt aspernatur.', 'Tempora et maiores dolor non iusto esse.', 'ratione', '1989-12-22'),
(22, 'ipsam', 'Voluptatem mollitia odio.', 'Recusandae sit et iure consequatur iusto.', 'in', '1993-12-25'),
(23, 'animi', 'Sed animi incidunt.', 'Libero quod eaque sed incidunt voluptatum.', 'deleniti', '2002-05-15'),
(24, 'et', 'Suscipit est.', 'Aut perferendis velit corrupti cupiditate mollitia voluptas rerum.', 'sit', '1989-11-26'),
(25, 'rerum', 'Ab illo nostrum.', 'Quas tenetur dicta nihil non dolor debitis.', 'ipsam', '1991-12-17'),
(26, 'et', 'Rerum et et.', 'Voluptate omnis aut delectus et praesentium aspernatur omnis.', 'libero', '2014-02-21'),
(27, 'incidunt', 'Possimus quia sed ratione.', 'Magni voluptates minus fuga quibusdam ipsa animi.', 'provident', '2005-01-17'),
(28, 'autem', 'Omnis in asperiores vitae.', 'Unde est non et enim.', 'et', '1975-09-09'),
(29, 'aut', 'Odit et optio magnam.', 'Modi aut sit iusto voluptatem quo nam.', 'a', '1972-11-22'),
(30, 'fugit', 'Quo autem quaerat.', 'Vero velit labore aut corrupti veritatis.', 'ullam', '2013-06-23'),
(31, 'tempore', 'Sit doloremque dolores.', 'Hic quidem dignissimos ullam doloribus quo velit cumque.', 'alias', '2005-01-16'),
(32, 'velit', 'Et quisquam.', 'Iusto non nam rerum expedita.', 'rerum', '2014-09-27'),
(33, 'nesciunt', 'Officiis incidunt.', 'Accusantium non consequatur dolorem ducimus soluta.', 'et', '2013-12-24'),
(34, 'rerum', 'Debitis enim optio doloremque.', 'Molestiae aliquid ducimus inventore consequatur quis officia adipisci.', 'voluptatem', '1970-09-17'),
(35, 'consequatur', 'Vel libero occaecati corrupti.', 'Sunt doloribus accusantium et deleniti.', 'cum', '1988-11-07'),
(36, 'et', 'In ea nesciunt.', 'Officiis vel sit qui eos qui et facere.', 'ea', '1979-02-19'),
(37, 'voluptates', 'Accusantium nostrum tenetur nesciunt.', 'Tempore consequatur officia et praesentium at.', 'porro', '1973-12-26'),
(38, 'aut', 'Et voluptatem sint molestiae.', 'Debitis incidunt recusandae illo minus aut aut quod in.', 'cumque', '2000-02-01'),
(39, 'tempora', 'Mollitia vel molestiae similique.', 'Cum optio distinctio et.', 'dolorem', '2015-03-16'),
(40, 'veritatis', 'Eum et est aut.', 'Dolor amet esse explicabo.', 'ipsam', '2020-03-30'),
(41, 'laboriosam', 'Nemo perferendis laboriosam ipsa.', 'Accusamus quo perferendis dicta rerum.', 'magnam', '2013-07-19'),
(42, 'et', 'Non eaque.', 'Iste quos provident ipsa assumenda.', 'asperiores', '2006-05-28'),
(43, 'corporis', 'Architecto quia non qui.', 'Eius in eligendi quisquam possimus consequatur.', 'id', '1982-07-15'),
(44, 'qui', 'Qui sequi repudiandae dolores.', 'Temporibus similique accusantium blanditiis modi laborum ut.', 'suscipit', '1980-11-28'),
(45, 'rerum', 'Aut rerum dolorem.', 'Mollitia accusantium aliquid necessitatibus sit.', 'architecto', '1971-08-28'),
(46, 'libero', 'Assumenda quo magnam.', 'Repudiandae nisi dolorem quia sed optio voluptas id.', 'inventore', '2004-11-13'),
(47, 'tempora', 'Architecto eos excepturi.', 'Ut ut laudantium ut incidunt cum.', 'quia', '1972-07-03'),
(48, 'nostrum', 'Cupiditate velit repellat aspernatur.', 'Molestiae quasi animi et tempora.', 'sed', '1998-03-24'),
(49, 'voluptatibus', 'Laborum nemo quis ab.', 'In ut dolore ut quisquam amet aut iusto cumque.', 'vitae', '1974-11-12'),
(50, 'ea', 'Et quis.', 'A ab sunt ratione.', 'magnam', '2010-04-11'),
(51, 'laborum', 'Corrupti quaerat vero quisquam.', 'Iure vel qui aperiam consequatur ratione qui reprehenderit.', 'molestiae', '2019-11-06'),
(52, 'officia', 'Ut et voluptates.', 'Vitae molestias dolores nam voluptas deleniti non.', 'veritatis', '1994-07-14'),
(53, 'dolor', 'Praesentium id dolore.', 'Debitis id dolore atque non.', 'sint', '2002-09-17'),
(54, 'inventore', 'Ab facilis qui tenetur.', 'Quod nam adipisci ipsa porro quas.', 'ut', '2005-11-26'),
(55, 'animi', 'A consequatur.', 'Explicabo necessitatibus officiis labore est neque modi nesciunt.', 'voluptas', '1991-01-24'),
(56, 'suscipit', 'Quo suscipit earum delectus.', 'Et distinctio ea delectus repudiandae eos et dolore.', 'enim', '1973-12-21'),
(57, 'in', 'Inventore hic omnis qui expedita.', 'Culpa quia corrupti molestiae perferendis.', 'eveniet', '2015-06-18'),
(58, 'dicta', 'Nam dolores quis.', 'Atque vitae quos id ducimus reiciendis explicabo.', 'sed', '2001-11-28'),
(59, 'velit', 'Accusantium praesentium est in.', 'Id suscipit ut assumenda illum magni quisquam eaque.', 'quibusdam', '1990-03-14'),
(60, 'ipsum', 'Voluptas cum quaerat ipsum.', 'Minima enim recusandae rerum beatae et tempore consequatur quam.', 'molestiae', '2018-07-29'),
(61, 'sint', 'Eos id ex perferendis ipsam.', 'Sed veritatis ut quia sint mollitia.', 'omnis', '1993-06-09'),
(62, 'omnis', 'Labore ipsam aut aspernatur itaque.', 'Quibusdam exercitationem qui aut in vero fugiat.', 'dicta', '1986-03-25'),
(63, 'ut', 'Ab dolores.', 'Sit ipsam et sit aperiam dolorem enim sed.', 'dolor', '2015-01-29'),
(64, 'ratione', 'Sequi provident earum.', 'Totam expedita nam consequatur neque repellendus est.', 'excepturi', '2004-10-21'),
(65, 'repellat', 'Eveniet at maiores recusandae.', 'Deserunt recusandae quisquam in eligendi.', 'neque', '1987-06-22'),
(66, 'aliquid', 'Magnam velit molestias adipisci ea.', 'Aut qui laborum facilis omnis.', 'est', '2000-12-30'),
(67, 'ea', 'Ut non.', 'Recusandae deleniti cum reiciendis unde vel.', 'veniam', '1985-07-21'),
(68, 'exercitationem', 'Consequatur nam animi.', 'Facilis et ullam ut.', 'quasi', '1999-09-13'),
(69, 'vel', 'Temporibus distinctio repellat sint.', 'Rerum quam nulla adipisci ipsum at.', 'labore', '1986-03-21'),
(70, 'dicta', 'Provident cumque esse.', 'Quidem laboriosam placeat aut.', 'assumenda', '2017-02-23'),
(71, 'ea', 'Ea suscipit ducimus.', 'Eius numquam delectus est mollitia quas.', 'et', '1986-06-03'),
(72, 'totam', 'Modi rerum quia velit.', 'Voluptas consequatur rem unde mollitia quia corrupti ipsum debitis.', 'distinctio', '1990-05-14'),
(73, 'blanditiis', 'Rerum distinctio nam.', 'Eius aliquam molestiae quod quibusdam eum.', 'sed', '1985-10-28'),
(74, 'voluptatum', 'Dolorem non veniam.', 'Perferendis enim dolor placeat minus nesciunt.', 'sunt', '2019-11-19'),
(75, 'id', 'Similique et similique facilis.', 'Est deserunt harum laboriosam nemo nisi esse.', 'ut', '2020-05-01'),
(76, 'perferendis', 'Aut quia consequatur porro.', 'Est laboriosam nulla dicta ut delectus.', 'et', '1983-03-24'),
(77, 'ut', 'Nostrum reiciendis enim voluptatem.', 'Ut quia consequatur omnis aut voluptatem.', 'necessitatibus', '1998-02-09'),
(78, 'qui', 'Quod laboriosam enim.', 'Molestiae consequatur quibusdam temporibus ex voluptas esse.', 'blanditiis', '1970-02-19'),
(79, 'autem', 'Voluptatem unde cumque fugiat.', 'Explicabo in cum beatae nihil.', 'accusamus', '1996-07-03'),
(80, 'ut', 'Ducimus sapiente officia ut.', 'Labore laboriosam architecto cum perferendis maxime itaque quibusdam non.', 'ducimus', '2000-10-23'),
(81, 'mollitia', 'Veritatis eaque a dolore harum.', 'Aliquam voluptates et consequatur corrupti ut.', 'aperiam', '1976-01-19'),
(82, 'inventore', 'Molestias voluptatem expedita voluptas.', 'Iste non cupiditate aut facere aliquid porro.', 'et', '2020-01-17'),
(83, 'modi', 'Corporis enim omnis nihil.', 'Aut illo asperiores qui ut voluptatem et.', 'soluta', '2012-04-24'),
(84, 'voluptatibus', 'Voluptas doloremque qui nulla.', 'Ducimus occaecati et est natus beatae reprehenderit.', 'et', '2014-08-21'),
(85, 'est', 'Quaerat nulla quasi.', 'Aut vero et id quidem alias.', 'perspiciatis', '2010-04-08'),
(86, 'cum', 'Qui et nihil qui.', 'Harum quidem quisquam consequuntur soluta et.', 'deleniti', '2004-07-01'),
(87, 'libero', 'Adipisci eos omnis placeat.', 'Sint dolor mollitia ea voluptas.', 'amet', '2013-08-12'),
(88, 'ipsam', 'Accusamus eum hic.', 'Sed velit quia enim reprehenderit consequuntur omnis mollitia.', 'et', '2007-03-13'),
(89, 'inventore', 'Tenetur quae et.', 'Molestiae enim qui a quod.', 'quisquam', '1973-12-18'),
(90, 'non', 'Et nobis laboriosam accusamus id.', 'Id fugit nesciunt odit et omnis labore.', 'quo', '2008-06-24'),
(91, 'facere', 'Vel aperiam et.', 'Voluptatibus voluptas quam labore sint.', 'aut', '1993-01-02'),
(92, 'aut', 'Rerum quam explicabo.', 'Est sed unde perspiciatis nesciunt blanditiis exercitationem placeat tenetur.', 'veritatis', '1971-04-20'),
(93, 'molestiae', 'Quis accusantium a quasi.', 'Molestiae ut quo illo minus voluptatem voluptatem et.', 'consequatur', '1977-09-10'),
(94, 'aut', 'Ut sit nesciunt ratione.', 'Sint enim quis doloremque quia dolorum cupiditate itaque.', 'eius', '2008-05-30'),
(95, 'autem', 'Aut et quaerat.', 'Qui sit autem eos quidem modi.', 'fuga', '1984-03-22'),
(96, 'sit', 'Blanditiis vel dolores.', 'Est ea ipsum tenetur et.', 'veniam', '1982-05-10'),
(97, 'animi', 'Est doloremque qui.', 'Molestias qui sunt eligendi et quod quis.', 'autem', '1990-08-30'),
(98, 'repellendus', 'Assumenda sunt facere.', 'Eum rerum et nam non.', 'doloribus', '1972-12-23'),
(99, 'animi', 'Accusamus itaque laboriosam illo.', 'Praesentium debitis dolores provident voluptas ea nobis.', 'minima', '1986-01-18'),
(100, 'aut', 'Commodi aut et aperiam.', 'Saepe ipsa unde suscipit accusantium.', 'sunt', '2000-10-13'),
(101, 'quia', 'Nemo quis quo dolores.', 'Quisquam sed excepturi fugit.', 'nulla', '2002-07-21');

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
  `id_tempat_kerja` int(11) UNSIGNED NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `telp_instansi` varchar(25) NOT NULL,
  `faks_instansi` varchar(50) NOT NULL,
  `email_instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempat_kerja`
--

INSERT INTO `tempat_kerja` (`id_tempat_kerja`, `nama_instansi`, `alamat_instansi`, `telp_instansi`, `faks_instansi`, `email_instansi`) VALUES
(1, 'BPS Dummy', 'Kpg. Dago No. 786, Pematangsiantar 74924, KalTim', '(+62) 907 9905 8338', '0409 0163 7117', 'uhabibi@gmail.com'),
(2, 'PT Natsir (Persero) Tbk', 'Psr. Mahakam No. 328, Pagar Alam 96257, Jambi', '0460 1906 4176', '0669 7898 0997', 'hendra77@yahoo.co.id'),
(3, 'CV Hardiansyah', 'Psr. Bakaru No. 143, Tangerang 52737, DKI', '0612 6326 4341', '(+62) 821 928 606', 'suryono.queen@gmail.co.id'),
(4, 'Perum Susanti (Persero) Tbk', 'Psr. Kali No. 229, Subulussalam 66176, SumBar', '0499 4747 9004', '0920 8336 7928', 'ganjaran33@gmail.co.id'),
(5, 'PT Mulyani Wahyudin', 'Ds. Setiabudhi No. 516, Mojokerto 63535, NTT', '(+62) 318 3974 5617', '(+62) 424 4227 4177', 'hilda.dongoran@yahoo.com'),
(6, 'UD Puspasari Wasita Tbk', 'Dk. Bata Putih No. 435, Sawahlunto 34762, KalTeng', '(+62) 526 9631 898', '0404 2810 2417', 'vanya.wastuti@yahoo.com'),
(7, 'PT Santoso Tbk', 'Jln. Jambu No. 316, Padang 16599, KalTeng', '0895 488 300', '0869 5437 539', 'yulianti.jarwa@yahoo.co.id'),
(8, 'PT Nasyiah', 'Kpg. Achmad No. 19, Jambi 21684, Jambi', '0472 4924 5666', '(+62) 20 9503 478', 'rhandayani@yahoo.com'),
(9, 'CV Hutagalung Sitompul', 'Ds. Sutarto No. 285, Bima 11756, KalTim', '0871 3171 9636', '0969 3718 1537', 'intan41@gmail.co.id'),
(10, 'UD Wahyuni', 'Ki. Sugiono No. 395, Palembang 94165, KalTeng', '0999 5763 166', '(+62) 23 2769 627', 'dipa91@yahoo.co.id'),
(11, 'PD Hassanah Simbolon (Persero) Tbk', 'Psr. Taman No. 731, Administrasi Jakarta Barat 93254, JaTeng', '0504 8318 481', '(+62) 818 6386 167', 'santoso.harimurti@yahoo.com'),
(12, 'CV Wasita Pertiwi Tbk', 'Kpg. Dr. Junjunan No. 444, Bekasi 44830, JaTim', '(+62) 719 6308 640', '(+62) 846 3138 9002', 'padma.nasyiah@gmail.co.id'),
(13, 'PD Prayoga (Persero) Tbk', 'Jr. Lembong No. 219, Administrasi Jakarta Utara 93347, Riau', '(+62) 323 5376 3645', '0882 2074 309', 'prasetyo39@yahoo.co.id'),
(14, 'PD Kusmawati Halimah', 'Ki. Adisumarmo No. 31, Dumai 81553, SumSel', '(+62) 383 3691 2900', '0225 3731 148', 'ulya.hartati@gmail.com'),
(15, 'PD Sudiati', 'Ki. Basoka Raya No. 220, Pasuruan 26504, KalUt', '(+62) 942 9833 156', '0709 2759 4138', 'jhutapea@gmail.co.id'),
(16, 'Perum Anggriawan Tbk', 'Jln. Laswi No. 751, Lubuklinggau 77944, KalTeng', '0764 0747 596', '(+62) 700 1892 173', 'wastuti.paiman@gmail.com'),
(17, 'CV Novitasari Tbk', 'Dk. Pacuan Kuda No. 768, Bandung 57878, Riau', '(+62) 392 3596 818', '0289 5154 0477', 'hasan.uwais@yahoo.co.id'),
(18, 'Perum Puspasari Aryani', 'Jln. Baan No. 331, Administrasi Jakarta Barat 81800, SulTra', '0384 1403 9143', '(+62) 811 9541 1355', 'sakti.megantara@yahoo.com'),
(19, 'Perum Nababan Purnawati', 'Gg. Basuki No. 767, Pagar Alam 94713, Jambi', '(+62) 25 7169 4761', '025 4620 480', 'asmianto.mardhiyah@gmail.com'),
(20, 'PT Wastuti Andriani', 'Gg. Gegerkalong Hilir No. 450, Balikpapan 34516, SulSel', '0220 6485 5017', '(+62) 472 8266 6894', 'nadia06@yahoo.com'),
(21, 'PT Palastri', 'Dk. Umalas No. 273, Kupang 70925, DKI', '0511 0703 935', '0891 832 187', 'zamira47@gmail.com'),
(22, 'CV Hasanah Pratama', 'Gg. Wahidin Sudirohusodo No. 317, Gunungsitoli 29176, Aceh', '(+62) 799 6662 6253', '0701 3161 3658', 'ulva.putra@yahoo.com'),
(23, 'Perum Salahudin Namaga', 'Kpg. Bakau No. 416, Kediri 21610, KalBar', '(+62) 27 7687 660', '(+62) 25 5510 585', 'oni.oktaviani@gmail.com'),
(24, 'PD Wahyuni Wulandari', 'Kpg. Baladewa No. 698, Medan 25914, KalSel', '(+62) 795 2987 608', '0432 2058 945', 'lhalim@yahoo.com'),
(25, 'PD Halimah', 'Kpg. Gremet No. 740, Palangka Raya 27515, SulUt', '0707 2599 571', '(+62) 365 3975 973', 'elma.habibi@gmail.com'),
(26, 'PT Maryati (Persero) Tbk', 'Psr. Bacang No. 870, Cimahi 56585, SulTra', '(+62) 28 4005 7962', '(+62) 302 7597 423', 'prasetyo.fitriani@yahoo.com'),
(27, 'PD Nuraini', 'Psr. Yosodipuro No. 497, Tangerang Selatan 50647, JaTim', '029 9168 696', '0272 3530 1041', 'suartini.qori@yahoo.com'),
(28, 'PT Firgantoro Maryati Tbk', 'Psr. Eka No. 808, Cilegon 67806, SumUt', '0344 6261 7174', '0706 9664 535', 'latika.rajasa@gmail.com'),
(29, 'PT Haryanti', 'Kpg. Cut Nyak Dien No. 923, Bandung 91767, JaTim', '0945 6066 172', '0862 4967 2411', 'adriansyah.edison@yahoo.com'),
(30, 'PD Prakasa', 'Ki. Samanhudi No. 661, Tomohon 89353, Bali', '0489 8106 3935', '0432 2500 7864', 'opuspasari@gmail.com'),
(31, 'Perum Pratiwi', 'Gg. Basudewo No. 610, Banjarbaru 45992, NTB', '(+62) 617 2779 871', '0547 2182 2115', 'pia.wastuti@gmail.co.id'),
(32, 'UD Nurdiyanti Nuraini Tbk', 'Jln. Lada No. 952, Sawahlunto 40613, JaBar', '(+62) 644 6868 0391', '(+62) 810 9767 142', 'aryani.raden@gmail.co.id'),
(33, 'CV Maulana Napitupulu', 'Ds. Taman No. 791, Parepare 30372, Lampung', '020 8325 204', '0643 0642 195', 'siregar.sarah@gmail.co.id'),
(34, 'UD Yuliarti Winarsih', 'Kpg. Bagas Pati No. 22, Pangkal Pinang 49792, Bali', '(+62) 325 9263 025', '0470 9474 5601', 'xkuswandari@gmail.com'),
(35, 'PD Suartini', 'Ds. Antapani Lama No. 248, Probolinggo 56669, Lampung', '(+62) 821 283 187', '(+62) 23 6661 6031', 'indah.palastri@gmail.co.id'),
(36, 'PD Usada Nurdiyanti', 'Dk. Wahidin Sudirohusodo No. 927, Semarang 81143, JaBar', '0943 5222 932', '(+62) 340 4259 189', 'vera.lailasari@gmail.co.id'),
(37, 'PT Rahayu (Persero) Tbk', 'Ki. Soekarno Hatta No. 910, Gorontalo 31203, SumBar', '0373 3575 052', '(+62) 417 9317 259', 'citra24@gmail.com'),
(38, 'Perum Andriani Gunarto', 'Psr. Bambon No. 759, Tangerang 43711, SumSel', '(+62) 853 6075 950', '(+62) 505 2845 8382', 'mahdi.farida@gmail.co.id'),
(39, 'PT Situmorang Novitasari', 'Gg. Babakan No. 861, Sukabumi 11463, KepR', '0598 1343 594', '(+62) 584 7494 6655', 'paramita03@yahoo.co.id'),
(40, 'UD Usada Samosir Tbk', 'Gg. M.T. Haryono No. 942, Semarang 36524, MalUt', '0276 3288 3849', '(+62) 869 202 618', 'kenzie55@yahoo.co.id'),
(41, 'UD Suartini Nurdiyanti', 'Jr. Cemara No. 782, Tanjungbalai 48287, Gorontalo', '0614 5017 7107', '(+62) 896 8744 587', 'apalastri@yahoo.co.id'),
(42, 'PD Kuswandari Puspasari (Persero) Tbk', 'Ki. Otto No. 454, Ambon 37958, NTT', '0854 7085 695', '0900 2051 2571', 'balamantri96@gmail.co.id'),
(43, 'Perum Maheswara Nurdiyanti Tbk', 'Dk. Bayam No. 192, Administrasi Jakarta Barat 35861, SulBar', '0242 9012 714', '0417 6383 0788', 'damu.mardhiyah@yahoo.com'),
(44, 'PD Siregar Dabukke', 'Gg. Wahidin Sudirohusodo No. 764, Mataram 56067, NTT', '021 6986 459', '0569 7268 552', 'abyasa.halimah@yahoo.com'),
(45, 'PD Ardianto (Persero) Tbk', 'Jr. Dahlia No. 955, Probolinggo 91299, Maluku', '0331 9203 990', '(+62) 377 4010 7402', 'pradana.tari@yahoo.co.id'),
(46, 'UD Riyanti', 'Psr. Orang No. 85, Salatiga 29221, Aceh', '0637 2294 2054', '0673 4730 2301', 'plestari@yahoo.co.id'),
(47, 'PD Anggraini (Persero) Tbk', 'Dk. Raden Saleh No. 511, Bitung 71890, Lampung', '0559 6037 9381', '0354 2070 8381', 'jailani.gadang@yahoo.co.id'),
(48, 'PT Puspasari', 'Dk. Asia Afrika No. 723, Banjarmasin 53845, BaBel', '0848 077 736', '(+62) 829 1801 898', 'harsana.kuswandari@yahoo.co.id'),
(49, 'Perum Wasita (Persero) Tbk', 'Dk. Ir. H. Juanda No. 120, Cimahi 48527, KalSel', '020 1736 317', '0617 3026 580', 'nadine45@gmail.com'),
(50, 'CV Purwanti Purwanti', 'Psr. Baik No. 570, Administrasi Jakarta Timur 50929, KalTim', '0804 0171 918', '0624 4440 572', 'xusada@gmail.com'),
(51, 'CV Rajasa Tbk', 'Ki. Sadang Serang No. 548, Sorong 97533, SulTeng', '0619 2377 875', '0828 7407 963', 'siti.mandala@yahoo.co.id'),
(52, 'PD Najmudin Sinaga (Persero) Tbk', 'Jr. Sam Ratulangi No. 972, Lhokseumawe 94842, Bali', '(+62) 466 3574 989', '0229 0322 3336', 'hariyah.saka@yahoo.com'),
(53, 'UD Haryanti Tbk', 'Ki. Tambak No. 64, Bontang 98876, Lampung', '(+62) 276 7522 152', '(+62) 457 4836 111', 'qgunawan@gmail.co.id'),
(54, 'PD Nurdiyanti Sihombing', 'Ki. Cikutra Barat No. 782, Banjarmasin 67441, DIY', '(+62) 869 7621 639', '(+62) 879 6603 0172', 'wijaya.najwa@gmail.com'),
(55, 'PT Hakim (Persero) Tbk', 'Jr. Halim No. 846, Denpasar 11425, NTT', '(+62) 967 9250 1202', '(+62) 684 5226 8193', 'puji.nugroho@yahoo.co.id'),
(56, 'PT Hidayanto Rahayu (Persero) Tbk', 'Ds. Gedebage Selatan No. 641, Makassar 29222, DKI', '(+62) 992 2862 237', '(+62) 24 9187 7222', 'tiswahyudi@gmail.com'),
(57, 'UD Farida Thamrin Tbk', 'Jln. Jambu No. 68, Probolinggo 36526, DKI', '(+62) 258 0856 9117', '0515 2083 239', 'baktianto.yolanda@gmail.co.id'),
(58, 'PD Utami', 'Gg. Jakarta No. 150, Solok 23441, SulBar', '020 5092 1757', '(+62) 672 2430 246', 'susanti.gina@yahoo.co.id'),
(59, 'UD Mahendra (Persero) Tbk', 'Jr. Bank Dagang Negara No. 552, Jambi 81626, PapBar', '0502 0201 163', '(+62) 22 7520 4658', 'rudi.hassanah@yahoo.co.id'),
(60, 'UD Firgantoro Hidayat', 'Gg. Gremet No. 625, Prabumulih 33912, KalBar', '0251 7241 116', '(+62) 739 4776 526', 'atmaja30@yahoo.co.id'),
(61, 'CV Kuswandari', 'Kpg. Teuku Umar No. 110, Tebing Tinggi 52693, SulBar', '(+62) 535 3676 257', '(+62) 441 6611 790', 'mala08@yahoo.com'),
(62, 'Perum Haryanti (Persero) Tbk', 'Ki. Bass No. 672, Bandung 24674, KalTim', '0656 9768 443', '(+62) 290 8809 196', 'kamaria10@gmail.com'),
(63, 'CV Halimah', 'Dk. Babah No. 277, Depok 42594, KalBar', '0972 1813 902', '0975 9660 470', 'raina.hidayanto@gmail.co.id'),
(64, 'UD Santoso Nasyiah', 'Jr. Batako No. 771, Administrasi Jakarta Barat 49444, SulSel', '0579 1733 7539', '(+62) 790 3943 4635', 'budiyanto.wani@gmail.co.id'),
(65, 'CV Habibi Namaga', 'Jr. Salak No. 624, Bontang 66880, Aceh', '0664 5585 2962', '(+62) 620 6312 887', 'tirta91@yahoo.com'),
(66, 'PD Pratiwi Permadi', 'Jln. Yogyakarta No. 812, Surabaya 59531, SulTeng', '(+62) 632 7259 485', '0819 5352 352', 'yuliana40@yahoo.com'),
(67, 'PT Jailani Nasyidah (Persero) Tbk', 'Ki. Suprapto No. 140, Sabang 26135, SulBar', '0736 6183 0790', '0458 9209 0089', 'ifa38@yahoo.com'),
(68, 'CV Winarsih Usada Tbk', 'Dk. Nakula No. 765, Administrasi Jakarta Timur 36285, NTB', '0860 8828 9496', '(+62) 712 3328 864', 'omahendra@gmail.com'),
(69, 'UD Nugroho (Persero) Tbk', 'Ki. Sam Ratulangi No. 504, Administrasi Jakarta Barat 87657, Bengkulu', '(+62) 614 2111 555', '(+62) 293 4268 0847', 'suryatmi.umi@gmail.com'),
(70, 'Perum Halim Halimah', 'Kpg. Sampangan No. 270, Tasikmalaya 39701, JaBar', '(+62) 27 3952 896', '0373 9634 515', 'salwa.pangestu@yahoo.com'),
(71, 'PT Hidayanto (Persero) Tbk', 'Gg. Yos No. 320, Tidore Kepulauan 92318, BaBel', '(+62) 494 3260 9266', '(+62) 810 8529 163', 'patricia51@gmail.com'),
(72, 'PD Lazuardi Tbk', 'Ki. Kalimalang No. 548, Cirebon 76175, SumSel', '0721 3778 1733', '(+62) 868 8550 526', 'utama.tira@yahoo.com'),
(73, 'PD Najmudin Pudjiastuti', 'Ds. Gading No. 986, Blitar 78905, Papua', '(+62) 345 5844 883', '(+62) 462 6994 9143', 'rahimah.cahyono@gmail.co.id'),
(74, 'PD Nashiruddin Tbk', 'Jr. Banceng Pondok No. 734, Batam 38746, Gorontalo', '0226 4075 2512', '0990 6812 9827', 'samiah.puspita@gmail.com'),
(75, 'UD Pradipta Nuraini', 'Psr. Bata Putih No. 175, Tangerang 52016, NTB', '0373 3452 1747', '(+62) 853 333 552', 'ayu.rajata@yahoo.co.id'),
(76, 'UD Yolanda Tbk', 'Psr. Abdul. Muis No. 229, Batu 59072, KalTeng', '(+62) 897 7973 8144', '(+62) 731 0721 624', 'awastuti@gmail.com'),
(77, 'PT Firmansyah (Persero) Tbk', 'Ds. Sam Ratulangi No. 227, Tebing Tinggi 18858, Maluku', '(+62) 967 9020 3902', '(+62) 476 5604 9071', 'gina.pradana@yahoo.com'),
(78, 'PT Utama Halimah', 'Kpg. Raden No. 983, Prabumulih 17801, SulTra', '(+62) 28 3123 1144', '0541 1917 7275', 'ikhsan.wasita@yahoo.com'),
(79, 'PT Usamah Rahimah Tbk', 'Ki. Muwardi No. 510, Kotamobagu 14768, Gorontalo', '0908 3755 8515', '(+62) 437 9219 343', 'purnawati.ganda@yahoo.co.id'),
(80, 'PD Rajasa Suryono Tbk', 'Ds. Reksoninten No. 533, Batam 73789, SumBar', '0322 6540 706', '0803 2863 2438', 'yance.prakasa@gmail.co.id'),
(81, 'PT Budiyanto Laksita', 'Kpg. Industri No. 784, Pagar Alam 60242, SulBar', '(+62) 327 7006 446', '(+62) 631 7211 937', 'darman.hidayat@yahoo.com'),
(82, 'PT Andriani Tbk', 'Dk. Asia Afrika No. 978, Tanjungbalai 82658, MalUt', '0896 2275 9985', '0846 025 111', 'rahimah.ami@yahoo.com'),
(83, 'UD Andriani (Persero) Tbk', 'Gg. Asia Afrika No. 6, Prabumulih 66118, BaBel', '0911 1824 228', '022 5441 0324', 'baryani@yahoo.co.id'),
(84, 'Perum Firgantoro Wasita (Persero) Tbk', 'Jr. Cemara No. 810, Sorong 66256, SumSel', '0752 9345 966', '(+62) 346 1634 7340', 'lmayasari@gmail.com'),
(85, 'Perum Rahmawati Pudjiastuti Tbk', 'Dk. Cihampelas No. 558, Malang 84055, MalUt', '0211 9084 811', '0659 1181 606', 'wibisono.victoria@yahoo.co.id'),
(86, 'CV Utama', 'Kpg. Moch. Ramdan No. 838, Sukabumi 63440, BaBel', '0945 4778 586', '(+62) 457 5137 5361', 'ilyas80@gmail.com'),
(87, 'Perum Yuliarti', 'Jr. Ki Hajar Dewantara No. 235, Gunungsitoli 11653, JaTeng', '(+62) 253 5894 667', '(+62) 364 0911 2547', 'dyulianti@yahoo.co.id'),
(88, 'UD Lestari Hariyah', 'Ki. Sentot Alibasa No. 596, Pasuruan 81780, DKI', '026 3145 8509', '0932 4644 559', 'amandala@gmail.co.id'),
(89, 'PT Usamah Simanjuntak', 'Ds. Basudewo No. 692, Tomohon 81742, KalSel', '(+62) 425 6445 0200', '0884 7662 8974', 'ohutasoit@gmail.com'),
(90, 'PD Suryatmi Nugroho', 'Gg. Antapani Lama No. 183, Banjarmasin 25271, KalTeng', '0850 0096 873', '025 7687 4549', 'mprastuti@yahoo.com'),
(91, 'Perum Farida Mandasari', 'Jln. Jambu No. 101, Malang 94128, BaBel', '0224 5227 8360', '(+62) 691 9882 3602', 'pwaskita@gmail.com'),
(92, 'PD Manullang', 'Dk. Sutoyo No. 997, Tual 83818, Gorontalo', '(+62) 759 4312 170', '0204 8290 8404', 'utama.agnes@gmail.com'),
(93, 'PT Riyanti Pudjiastuti (Persero) Tbk', 'Jln. Jend. Sudirman No. 9, Sungai Penuh 43725, Jambi', '(+62) 836 2802 0210', '(+62) 28 9708 2698', 'usuwarno@gmail.com'),
(94, 'Perum Rahimah', 'Psr. Bayam No. 374, Bitung 59717, SulUt', '0829 8801 450', '(+62) 841 462 447', 'restu60@gmail.co.id'),
(95, 'PT Hutapea Widiastuti (Persero) Tbk', 'Psr. Bayam No. 521, Bontang 27494, Papua', '(+62) 551 9296 016', '(+62) 803 3483 270', 'mulyanto40@gmail.com'),
(96, 'Perum Susanti (Persero) Tbk', 'Kpg. Bawal No. 677, Palembang 22641, SulTra', '0247 9336 1436', '(+62) 20 3001 763', 'haryanti.cahyanto@yahoo.co.id'),
(97, 'UD Budiyanto Novitasari (Persero) Tbk', 'Psr. B.Agam Dlm No. 815, Balikpapan 37138, KalTim', '(+62) 26 9232 305', '(+62) 864 0278 3862', 'darman75@gmail.co.id'),
(98, 'PT Palastri', 'Ki. Cihampelas No. 801, Kendari 21759, Banten', '(+62) 599 0365 985', '0601 8570 5713', 'kurnia.mardhiyah@yahoo.co.id'),
(99, 'UD Hakim Lailasari Tbk', 'Psr. Bak Mandi No. 575, Langsa 18600, Bengkulu', '029 2101 2056', '(+62) 645 0600 235', 'cakrabuana.kusmawati@yahoo.com'),
(100, 'PT Prasetyo Suwarno', 'Ki. Barat No. 673, Tasikmalaya 90797, JaBar', '(+62) 583 5013 974', '(+62) 565 3973 0757', 'hasta.dabukke@yahoo.co.id'),
(101, 'Perum Siregar Tampubolon', 'Ds. Jambu No. 25, Tarakan 29327, KalSel', '0966 3515 439', '0821 9203 1225', 'fkusmawati@gmail.co.id');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

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
-- AUTO_INCREMENT for table `tempat_kerja`
--
ALTER TABLE `tempat_kerja`
  MODIFY `id_tempat_kerja` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

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

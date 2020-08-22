-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 08:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('AddUser', '1', 1597798587),
('AddUser', '3', 1597799418),
('Admin', '1', 1597798586),
('CreateResult', '1', 1597798587),
('CreateResult', '3', 1597799418),
('Manage Result', '1', 1597798587),
('Manage Result', '3', 1597799418),
('Manage Users', '1', 1597798587),
('Manage Users', '3', 1597799419),
('SeeProfile', '1', 1597798587),
('SeeProfile', '3', 1597799419),
('Staff', '1', 1597798587),
('Staff', '3', 1597799418),
('Student', '1', 1597798587),
('teacher', '1', 1597798587),
('Verify Result', '1', 1597798587),
('Verify Result', '3', 1597799419);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/admin/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/default/*', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/default/index', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/menu/*', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/menu/create', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/menu/index', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/menu/update', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/menu/view', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/admin/permission/*', 2, NULL, NULL, NULL, 1595481982, 1595481982),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/permission/create', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/permission/index', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1595481982, 1595481982),
('/admin/permission/update', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/permission/view', 2, NULL, NULL, NULL, 1595481981, 1595481981),
('/admin/role/*', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/assign', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/create', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/delete', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/index', 2, NULL, NULL, NULL, 1595481982, 1595481982),
('/admin/role/remove', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/update', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/role/view', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/*', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/assign', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/create', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/index', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/route/remove', 2, NULL, NULL, NULL, 1595481983, 1595481983),
('/admin/rule/*', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/rule/create', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/rule/index', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/rule/update', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/rule/view', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/*', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/activate', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/delete', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/index', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/login', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/logout', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/signup', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/admin/user/view', 2, NULL, NULL, NULL, 1595481984, 1595481984),
('/Announcements/*', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/default/*', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/default/index', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/emails/*', 2, NULL, NULL, NULL, 1597798655, 1597798655),
('/Announcements/emails/create', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/Announcements/emails/delete', 2, NULL, NULL, NULL, 1597798655, 1597798655),
('/Announcements/emails/index', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/Announcements/emails/update', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/Announcements/emails/view', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/Announcements/events/*', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/events/create', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/events/delete', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/events/index', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/events/update', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/events/view', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/Announcements/notices/*', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/notices/create', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/notices/delete', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/notices/index', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/notices/update', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/Announcements/notices/view', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/auth/*', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/default/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/auth/default/index', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/auth/rbac/*', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/rbac/create', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/rbac/delete', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/rbac/index', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/rbac/update', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/auth/rbac/view', 2, NULL, NULL, NULL, 1595481980, 1595481980),
('/configuration/*', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/configuration/category/*', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/category/create', 2, NULL, NULL, NULL, 1595262813, 1595262813),
('/configuration/category/delete', 2, NULL, NULL, NULL, 1595262811, 1595262811),
('/configuration/category/index', 2, NULL, NULL, NULL, 1595481965, 1595481965),
('/configuration/category/update', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/category/view', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/*', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/create', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/delete', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/index', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/update', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/city/view', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/*', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/create', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/delete', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/index', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/update', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/country/view', 2, NULL, NULL, NULL, 1595481966, 1595481966),
('/configuration/default/*', 2, NULL, NULL, NULL, 1595481967, 1595481967),
('/configuration/default/index', 2, NULL, NULL, NULL, 1595481967, 1595481967),
('/configuration/department/*', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/department/create', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/department/delete', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/department/index', 2, NULL, NULL, NULL, 1595481967, 1595481967),
('/configuration/department/update', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/department/view', 2, NULL, NULL, NULL, 1595481967, 1595481967),
('/configuration/designation/*', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/designation/create', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/designation/delete', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/designation/index', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/designation/update', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/designation/view', 2, NULL, NULL, NULL, 1595481976, 1595481976),
('/configuration/province/*', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/province/create', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/province/delete', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/province/index', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/province/update', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/configuration/province/view', 2, NULL, NULL, NULL, 1595481977, 1595481977),
('/Courses/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/batches/*', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/batches/create', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/batches/delete', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/batches/index', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/batches/update', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/batches/view', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/*', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/create', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/delete', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/index', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/update', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/courses/view', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/default/*', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/default/index', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/previous-degrees/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/previous-degrees/create', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/previous-degrees/delete', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/previous-degrees/index', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/previous-degrees/update', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/previous-degrees/view', 2, NULL, NULL, NULL, 1595481978, 1595481978),
('/Courses/section/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/section/create', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/section/delete', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/section/index', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/section/update', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/section/view', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/Courses/semesters/*', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/semesters/create', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/semesters/delete', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/semesters/index', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/semesters/update', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/semesters/view', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/subjects/*', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/Courses/subjects/create', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/Courses/subjects/delete', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/Courses/subjects/index', 2, NULL, NULL, NULL, 1597335277, 1597335277),
('/Courses/subjects/update', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/Courses/subjects/view', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/debug/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/index', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/default/view', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/user/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/default/*', 2, NULL, NULL, NULL, 1597798655, 1597798655),
('/default/index', 2, NULL, NULL, NULL, 1597798655, 1597798655),
('/gii/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/*', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/action', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/diff', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/index', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/preview', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/gii/default/view', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/posts/*', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/posts/create', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/posts/delete', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/posts/index', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/posts/update', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/posts/view', 2, NULL, NULL, NULL, 1595481985, 1595481985),
('/ResultRecord/*', 2, NULL, NULL, NULL, 1597335281, 1597335281),
('/ResultRecord/default/*', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/default/index', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/*', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/create', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/delete', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/index', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/update', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/ResultRecord/result/view', 2, NULL, NULL, NULL, 1597335280, 1597335280),
('/site/*', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/site/about', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/captcha', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/contact', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/error', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/index', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/login', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/logout', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/site/signup', 2, NULL, NULL, NULL, 1595481986, 1595481986),
('/StaffInformation/*', 2, NULL, NULL, NULL, 1595781611, 1595781611),
('/StaffInformation/default/*', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StaffInformation/default/index', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StaffInformation/staff-members/*', 2, NULL, NULL, NULL, 1595781611, 1595781611),
('/StaffInformation/staff-members/create', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StaffInformation/staff-members/delete', 2, NULL, NULL, NULL, 1595781611, 1595781611),
('/StaffInformation/staff-members/index', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StaffInformation/staff-members/update', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StaffInformation/staff-members/view', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/StudentInformation/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/default/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/default/index', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/first-semester/*', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/first-semester/create', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/first-semester/delete', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/first-semester/index', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/first-semester/update', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/first-semester/view', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/second-semester/*', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/StudentInformation/second-semester/create', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/StudentInformation/second-semester/delete', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/StudentInformation/second-semester/index', 2, NULL, NULL, NULL, 1597798653, 1597798653),
('/StudentInformation/second-semester/update', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/StudentInformation/second-semester/view', 2, NULL, NULL, NULL, 1597798654, 1597798654),
('/StudentInformation/semester1-students/*', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester1-students/create', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester1-students/delete', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester1-students/index', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester1-students/update', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester1-students/view', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester2-students/*', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/StudentInformation/semester2-students/create', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/StudentInformation/semester2-students/delete', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/StudentInformation/semester2-students/index', 2, NULL, NULL, NULL, 1597335278, 1597335278),
('/StudentInformation/semester2-students/update', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/StudentInformation/semester2-students/view', 2, NULL, NULL, NULL, 1597335279, 1597335279),
('/StudentInformation/students/*', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/students/create', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/students/delete', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/students/index', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/students/update', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/StudentInformation/students/view', 2, NULL, NULL, NULL, 1595481979, 1595481979),
('/TeacherInformation/*', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/default/*', 2, NULL, NULL, NULL, 1595781609, 1595781609),
('/TeacherInformation/default/index', 2, NULL, NULL, NULL, 1595781609, 1595781609),
('/TeacherInformation/teachers/*', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/teachers/create', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/teachers/delete', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/teachers/index', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/teachers/update', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/TeacherInformation/teachers/view', 2, NULL, NULL, NULL, 1595781610, 1595781610),
('/user/*', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/activate', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/change-password', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/delete', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/index', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/login', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/logout', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/request-password-reset', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/reset-password', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/signup', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('/user/view', 2, NULL, NULL, NULL, 1595481987, 1595481987),
('AddUser', 2, 'Allow admin to add new user', NULL, NULL, 1595781788, 1595781788),
('Admin', 1, 'Admisnistration of this application', NULL, NULL, 1595231857, 1595231857),
('CreateResult', 2, 'Allow teacher to create result', NULL, NULL, 1595781811, 1595781811),
('Manage Result', 2, 'Allow admin to manage result to all students', NULL, NULL, 1595781771, 1595781771),
('Manage Users', 2, 'Allow admin to manage all users', NULL, NULL, 1595781724, 1595781724),
('SeeProfile', 2, 'Allow users to see their profile', NULL, NULL, 1595781853, 1595781853),
('Staff', 1, 'Perform tasks related to students, schedules and other important issues', NULL, NULL, 1595781209, 1595781209),
('Student', 1, 'Can only see important announcements and profile related to themselves', NULL, NULL, 1595781265, 1595781265),
('teacher', 1, 'Perform tasks related to students and class', NULL, NULL, 1595781083, 1595781083),
('Verify Result', 2, 'Allow staff to verify result', NULL, NULL, 1595781830, 1595781830);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', '/*'),
('Admin', '/admin/*'),
('Admin', '/admin/assignment/*'),
('Admin', '/admin/assignment/assign'),
('Admin', '/admin/assignment/index'),
('Admin', '/admin/assignment/revoke'),
('Admin', '/admin/assignment/view'),
('Admin', '/admin/default/*'),
('Admin', '/admin/default/index'),
('Admin', '/admin/menu/*'),
('Admin', '/admin/menu/create'),
('Admin', '/admin/menu/delete'),
('Admin', '/admin/menu/index'),
('Admin', '/admin/menu/update'),
('Admin', '/admin/menu/view'),
('Admin', '/admin/permission/*'),
('Admin', '/admin/permission/assign'),
('Admin', '/admin/permission/create'),
('Admin', '/admin/permission/delete'),
('Admin', '/admin/permission/index'),
('Admin', '/admin/permission/remove'),
('Admin', '/admin/permission/update'),
('Admin', '/admin/permission/view'),
('Admin', '/admin/role/*'),
('Admin', '/admin/role/assign'),
('Admin', '/admin/role/create'),
('Admin', '/admin/role/delete'),
('Admin', '/admin/role/index'),
('Admin', '/admin/role/remove'),
('Admin', '/admin/role/update'),
('Admin', '/admin/role/view'),
('Admin', '/admin/route/*'),
('Admin', '/admin/route/assign'),
('Admin', '/admin/route/create'),
('Admin', '/admin/route/index'),
('Admin', '/admin/route/refresh'),
('Admin', '/admin/route/remove'),
('Admin', '/admin/rule/*'),
('Admin', '/admin/rule/create'),
('Admin', '/admin/rule/delete'),
('Admin', '/admin/rule/index'),
('Admin', '/admin/rule/update'),
('Admin', '/admin/rule/view'),
('Admin', '/admin/user/*'),
('Admin', '/admin/user/activate'),
('Admin', '/admin/user/change-password'),
('Admin', '/admin/user/delete'),
('Admin', '/admin/user/index'),
('Admin', '/admin/user/login'),
('Admin', '/admin/user/logout'),
('Admin', '/admin/user/request-password-reset'),
('Admin', '/admin/user/reset-password'),
('Admin', '/admin/user/signup'),
('Admin', '/admin/user/view'),
('Admin', '/Announcements/*'),
('Admin', '/Announcements/default/*'),
('Admin', '/Announcements/default/index'),
('Admin', '/Announcements/events/*'),
('Admin', '/Announcements/events/create'),
('Admin', '/Announcements/events/delete'),
('Admin', '/Announcements/events/index'),
('Admin', '/Announcements/events/update'),
('Admin', '/Announcements/events/view'),
('Admin', '/Announcements/notices/*'),
('Admin', '/Announcements/notices/create'),
('Admin', '/Announcements/notices/delete'),
('Admin', '/Announcements/notices/index'),
('Admin', '/Announcements/notices/update'),
('Admin', '/Announcements/notices/view'),
('Admin', '/auth/*'),
('Admin', '/auth/default/*'),
('Admin', '/auth/default/index'),
('Admin', '/auth/rbac/*'),
('Admin', '/auth/rbac/create'),
('Admin', '/auth/rbac/delete'),
('Admin', '/auth/rbac/index'),
('Admin', '/auth/rbac/update'),
('Admin', '/auth/rbac/view'),
('Admin', '/configuration/*'),
('Admin', '/configuration/category/*'),
('Admin', '/configuration/category/create'),
('Admin', '/configuration/category/delete'),
('Admin', '/configuration/category/index'),
('Admin', '/configuration/category/update'),
('Admin', '/configuration/category/view'),
('Admin', '/configuration/city/*'),
('Admin', '/configuration/city/create'),
('Admin', '/configuration/city/delete'),
('Admin', '/configuration/city/index'),
('Admin', '/configuration/city/update'),
('Admin', '/configuration/city/view'),
('Admin', '/configuration/country/*'),
('Admin', '/configuration/country/create'),
('Admin', '/configuration/country/delete'),
('Admin', '/configuration/country/index'),
('Admin', '/configuration/country/update'),
('Admin', '/configuration/country/view'),
('Admin', '/configuration/default/*'),
('Admin', '/configuration/default/index'),
('Admin', '/configuration/department/*'),
('Admin', '/configuration/department/create'),
('Admin', '/configuration/department/delete'),
('Admin', '/configuration/department/index'),
('Admin', '/configuration/department/update'),
('Admin', '/configuration/department/view'),
('Admin', '/configuration/designation/*'),
('Admin', '/configuration/designation/create'),
('Admin', '/configuration/designation/delete'),
('Admin', '/configuration/designation/index'),
('Admin', '/configuration/designation/update'),
('Admin', '/configuration/designation/view'),
('Admin', '/configuration/province/*'),
('Admin', '/configuration/province/create'),
('Admin', '/configuration/province/delete'),
('Admin', '/configuration/province/index'),
('Admin', '/configuration/province/update'),
('Admin', '/configuration/province/view'),
('Admin', '/Courses/*'),
('Admin', '/Courses/batches/*'),
('Admin', '/Courses/batches/create'),
('Admin', '/Courses/batches/delete'),
('Admin', '/Courses/batches/index'),
('Admin', '/Courses/batches/update'),
('Admin', '/Courses/batches/view'),
('Admin', '/Courses/courses/*'),
('Admin', '/Courses/courses/create'),
('Admin', '/Courses/courses/delete'),
('Admin', '/Courses/courses/index'),
('Admin', '/Courses/courses/update'),
('Admin', '/Courses/courses/view'),
('Admin', '/Courses/default/*'),
('Admin', '/Courses/default/index'),
('Admin', '/Courses/previous-degrees/*'),
('Admin', '/Courses/previous-degrees/create'),
('Admin', '/Courses/previous-degrees/delete'),
('Admin', '/Courses/previous-degrees/index'),
('Admin', '/Courses/previous-degrees/update'),
('Admin', '/Courses/previous-degrees/view'),
('Admin', '/Courses/section/*'),
('Admin', '/Courses/section/create'),
('Admin', '/Courses/section/delete'),
('Admin', '/Courses/section/index'),
('Admin', '/Courses/section/update'),
('Admin', '/Courses/section/view'),
('Admin', '/Courses/semesters/*'),
('Admin', '/Courses/semesters/create'),
('Admin', '/Courses/semesters/delete'),
('Admin', '/Courses/semesters/index'),
('Admin', '/Courses/semesters/update'),
('Admin', '/Courses/semesters/view'),
('Admin', '/Courses/subjects/*'),
('Admin', '/Courses/subjects/create'),
('Admin', '/Courses/subjects/delete'),
('Admin', '/Courses/subjects/index'),
('Admin', '/Courses/subjects/update'),
('Admin', '/Courses/subjects/view'),
('Admin', '/debug/*'),
('Admin', '/debug/default/*'),
('Admin', '/debug/default/db-explain'),
('Admin', '/debug/default/download-mail'),
('Admin', '/debug/default/index'),
('Admin', '/debug/default/toolbar'),
('Admin', '/debug/default/view'),
('Admin', '/debug/user/*'),
('Admin', '/debug/user/reset-identity'),
('Admin', '/debug/user/set-identity'),
('Admin', '/gii/*'),
('Admin', '/gii/default/*'),
('Admin', '/gii/default/action'),
('Admin', '/gii/default/diff'),
('Admin', '/gii/default/index'),
('Admin', '/gii/default/preview'),
('Admin', '/gii/default/view'),
('Admin', '/posts/*'),
('Admin', '/posts/create'),
('Admin', '/posts/delete'),
('Admin', '/posts/index'),
('Admin', '/posts/update'),
('Admin', '/posts/view'),
('Admin', '/ResultRecord/*'),
('Admin', '/ResultRecord/default/*'),
('Admin', '/ResultRecord/default/index'),
('Admin', '/ResultRecord/result/*'),
('Admin', '/ResultRecord/result/create'),
('Admin', '/ResultRecord/result/delete'),
('Admin', '/ResultRecord/result/index'),
('Admin', '/ResultRecord/result/update'),
('Admin', '/ResultRecord/result/view'),
('Admin', '/site/*'),
('Admin', '/site/about'),
('Admin', '/site/captcha'),
('Admin', '/site/contact'),
('Admin', '/site/error'),
('Admin', '/site/index'),
('Admin', '/site/login'),
('Admin', '/site/logout'),
('Admin', '/site/signup'),
('Admin', '/StaffInformation/*'),
('Admin', '/StaffInformation/default/*'),
('Admin', '/StaffInformation/default/index'),
('Admin', '/StaffInformation/staff-members/*'),
('Admin', '/StaffInformation/staff-members/create'),
('Admin', '/StaffInformation/staff-members/delete'),
('Admin', '/StaffInformation/staff-members/index'),
('Admin', '/StaffInformation/staff-members/update'),
('Admin', '/StaffInformation/staff-members/view'),
('Admin', '/StudentInformation/*'),
('Admin', '/StudentInformation/default/*'),
('Admin', '/StudentInformation/default/index'),
('Admin', '/StudentInformation/semester1-students/*'),
('Admin', '/StudentInformation/semester1-students/create'),
('Admin', '/StudentInformation/semester1-students/delete'),
('Admin', '/StudentInformation/semester1-students/index'),
('Admin', '/StudentInformation/semester1-students/update'),
('Admin', '/StudentInformation/semester1-students/view'),
('Admin', '/StudentInformation/semester2-students/*'),
('Admin', '/StudentInformation/semester2-students/create'),
('Admin', '/StudentInformation/semester2-students/delete'),
('Admin', '/StudentInformation/semester2-students/index'),
('Admin', '/StudentInformation/semester2-students/update'),
('Admin', '/StudentInformation/semester2-students/view'),
('Admin', '/StudentInformation/students/*'),
('Admin', '/StudentInformation/students/create'),
('Admin', '/StudentInformation/students/delete'),
('Admin', '/StudentInformation/students/index'),
('Admin', '/StudentInformation/students/update'),
('Admin', '/StudentInformation/students/view'),
('Admin', '/TeacherInformation/*'),
('Admin', '/TeacherInformation/default/*'),
('Admin', '/TeacherInformation/default/index'),
('Admin', '/TeacherInformation/teachers/*'),
('Admin', '/TeacherInformation/teachers/create'),
('Admin', '/TeacherInformation/teachers/delete'),
('Admin', '/TeacherInformation/teachers/index'),
('Admin', '/TeacherInformation/teachers/update'),
('Admin', '/TeacherInformation/teachers/view'),
('Admin', '/user/*'),
('Admin', '/user/activate'),
('Admin', '/user/change-password'),
('Admin', '/user/delete'),
('Admin', '/user/index'),
('Admin', '/user/login'),
('Admin', '/user/logout'),
('Admin', '/user/request-password-reset'),
('Admin', '/user/reset-password'),
('Admin', '/user/signup'),
('Admin', '/user/view'),
('Admin', 'AddUser'),
('Admin', 'CreateResult'),
('Admin', 'Manage Result'),
('Admin', 'Manage Users'),
('Admin', 'SeeProfile'),
('Admin', 'Verify Result'),
('Staff', '/auth/*'),
('Staff', '/auth/default/*'),
('Staff', '/auth/default/index'),
('Staff', '/auth/rbac/*'),
('Staff', '/auth/rbac/create'),
('Staff', '/auth/rbac/delete'),
('Staff', '/auth/rbac/index'),
('Staff', '/auth/rbac/update'),
('Staff', '/auth/rbac/view'),
('Staff', '/configuration/*'),
('Staff', '/configuration/category/*'),
('Staff', '/configuration/category/create'),
('Staff', '/configuration/category/delete'),
('Staff', '/configuration/category/index'),
('Staff', '/configuration/category/update'),
('Staff', '/configuration/category/view'),
('Staff', '/configuration/city/*'),
('Staff', '/configuration/city/create'),
('Staff', '/configuration/city/delete'),
('Staff', '/configuration/city/index'),
('Staff', '/configuration/city/update'),
('Staff', '/configuration/city/view'),
('Staff', '/configuration/country/*'),
('Staff', '/configuration/country/create'),
('Staff', '/configuration/country/delete'),
('Staff', '/configuration/country/index'),
('Staff', '/configuration/country/update'),
('Staff', '/configuration/country/view'),
('Staff', '/configuration/default/*'),
('Staff', '/configuration/default/index'),
('Staff', '/configuration/department/*'),
('Staff', '/configuration/department/create'),
('Staff', '/configuration/department/delete'),
('Staff', '/configuration/department/index'),
('Staff', '/configuration/department/update'),
('Staff', '/configuration/department/view'),
('Staff', '/configuration/designation/*'),
('Staff', '/configuration/designation/create'),
('Staff', '/configuration/designation/delete'),
('Staff', '/configuration/designation/index'),
('Staff', '/configuration/designation/update'),
('Staff', '/configuration/designation/view'),
('Staff', '/configuration/province/*'),
('Staff', '/configuration/province/create'),
('Staff', '/configuration/province/delete'),
('Staff', '/configuration/province/index'),
('Staff', '/configuration/province/update'),
('Staff', '/configuration/province/view'),
('Staff', '/Courses/*'),
('Staff', '/Courses/batches/*'),
('Staff', '/Courses/batches/create'),
('Staff', '/Courses/batches/delete'),
('Staff', '/Courses/batches/index'),
('Staff', '/Courses/batches/update'),
('Staff', '/Courses/batches/view'),
('Staff', '/Courses/courses/*'),
('Staff', '/Courses/courses/create'),
('Staff', '/Courses/courses/delete'),
('Staff', '/Courses/courses/index'),
('Staff', '/Courses/courses/update'),
('Staff', '/Courses/courses/view'),
('Staff', '/Courses/default/*'),
('Staff', '/Courses/default/index'),
('Staff', '/Courses/previous-degrees/*'),
('Staff', '/Courses/previous-degrees/create'),
('Staff', '/Courses/previous-degrees/delete'),
('Staff', '/Courses/previous-degrees/index'),
('Staff', '/Courses/previous-degrees/update'),
('Staff', '/Courses/previous-degrees/view'),
('Staff', '/Courses/section/*'),
('Staff', '/Courses/section/create'),
('Staff', '/Courses/section/delete'),
('Staff', '/Courses/section/index'),
('Staff', '/Courses/section/update'),
('Staff', '/Courses/section/view'),
('Staff', '/Courses/semesters/*'),
('Staff', '/Courses/semesters/create'),
('Staff', '/Courses/semesters/delete'),
('Staff', '/Courses/semesters/index'),
('Staff', '/Courses/semesters/update'),
('Staff', '/Courses/semesters/view'),
('Staff', '/Courses/subjects/*'),
('Staff', '/Courses/subjects/create'),
('Staff', '/Courses/subjects/delete'),
('Staff', '/Courses/subjects/index'),
('Staff', '/Courses/subjects/update'),
('Staff', '/Courses/subjects/view'),
('Staff', '/debug/*'),
('Staff', '/debug/default/*'),
('Staff', '/debug/default/db-explain'),
('Staff', '/debug/default/download-mail'),
('Staff', '/debug/default/index'),
('Staff', '/debug/default/toolbar'),
('Staff', '/debug/default/view'),
('Staff', '/debug/user/*'),
('Staff', '/debug/user/reset-identity'),
('Staff', '/debug/user/set-identity'),
('Staff', '/default/*'),
('Staff', '/default/index'),
('Staff', '/gii/*'),
('Staff', '/gii/default/*'),
('Staff', '/gii/default/action'),
('Staff', '/gii/default/diff'),
('Staff', '/gii/default/index'),
('Staff', '/gii/default/preview'),
('Staff', '/gii/default/view'),
('Staff', '/posts/*'),
('Staff', '/posts/create'),
('Staff', '/posts/delete'),
('Staff', '/posts/index'),
('Staff', '/posts/update'),
('Staff', '/posts/view'),
('Staff', '/ResultRecord/*'),
('Staff', '/ResultRecord/default/*'),
('Staff', '/ResultRecord/default/index'),
('Staff', '/ResultRecord/result/*'),
('Staff', '/ResultRecord/result/delete'),
('Staff', '/ResultRecord/result/index'),
('Staff', '/ResultRecord/result/update'),
('Staff', '/ResultRecord/result/view'),
('Staff', '/site/*'),
('Staff', '/site/about'),
('Staff', '/site/captcha'),
('Staff', '/site/contact'),
('Staff', '/site/error'),
('Staff', '/site/index'),
('Staff', '/site/login'),
('Staff', '/StudentInformation/*'),
('Staff', '/StudentInformation/default/*'),
('Staff', '/StudentInformation/default/index'),
('Staff', '/StudentInformation/first-semester/*'),
('Staff', '/StudentInformation/first-semester/create'),
('Staff', '/StudentInformation/first-semester/delete'),
('Staff', '/StudentInformation/first-semester/index'),
('Staff', '/StudentInformation/first-semester/update'),
('Staff', '/StudentInformation/first-semester/view'),
('Staff', '/StudentInformation/second-semester/*'),
('Staff', '/StudentInformation/second-semester/create'),
('Staff', '/StudentInformation/second-semester/delete'),
('Staff', '/StudentInformation/second-semester/index'),
('Staff', '/StudentInformation/second-semester/update'),
('Staff', '/StudentInformation/second-semester/view'),
('Staff', '/StudentInformation/semester1-students/*'),
('Staff', '/StudentInformation/semester1-students/create'),
('Staff', '/StudentInformation/semester1-students/delete'),
('Staff', '/StudentInformation/semester1-students/index'),
('Staff', '/StudentInformation/semester1-students/update'),
('Staff', '/StudentInformation/semester1-students/view'),
('Staff', '/StudentInformation/semester2-students/*'),
('Staff', '/StudentInformation/semester2-students/create'),
('Staff', '/StudentInformation/semester2-students/delete'),
('Staff', '/StudentInformation/semester2-students/index'),
('Staff', '/StudentInformation/semester2-students/update'),
('Staff', '/StudentInformation/semester2-students/view'),
('Staff', '/user/*'),
('Staff', '/user/activate'),
('Staff', '/user/change-password'),
('Staff', '/user/delete'),
('Staff', '/user/index'),
('Staff', '/user/login'),
('Staff', '/user/logout'),
('Staff', '/user/request-password-reset'),
('Staff', '/user/reset-password'),
('Staff', '/user/signup'),
('Staff', '/user/view'),
('Staff', 'AddUser'),
('Staff', 'Manage Result'),
('Staff', 'Manage Users'),
('Staff', 'SeeProfile'),
('Staff', 'Verify Result');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(120) NOT NULL,
  `batch_alias` varchar(35) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_name`, `batch_alias`, `start_date`, `end_date`, `created_at`, `created_by`, `is_status`) VALUES
(1, 'CS_Batch_1', 'CS1', '2020-07-01', '2020-12-17', '2020-07-01 21:22:18', 1, 1),
(2, 'IT_Batch_01', 'IT1', '2020-07-01', '2020-12-16', '2020-07-01 21:22:18', 1, 0),
(3, 'BBA_Batch_01', 'BBA01', '2020-07-01', '2020-12-08', '2020-07-01 21:23:53', 1, 0),
(4, 'BBT_Batch_01', 'BBT-01', '2020-07-01', '2020-07-12', '2020-07-01 21:23:53', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_by`, `is_status`) VALUES
(1, 'Regular', 1, 1),
(2, 'Transfer', 1, 1),
(5, 'Rejoin', 1, 1),
(6, 'Visitor', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `created_by`) VALUES
(1, 'Bahawalpur', 1),
(2, 'Multan', 1),
(5, 'Lahore', 1),
(6, 'Karachi', 1),
(12, 'Faisalabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(35) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `is_status`) VALUES
(1, 'pakistan', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1, 0),
(2, 'India', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0),
(3, 'USA', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0),
(4, 'Bangladesh', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_alias` varchar(35) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `course_alias`, `created_by`, `created_at`, `is_status`) VALUES
(1, 'Introduction to computer', 'CSIT001', 'IOT', 1, '2020-07-01 21:16:36', 0),
(2, 'Programming fundamental', 'CSIT002', 'PF', 1, '2020-07-01 21:17:59', 0),
(3, 'Data Structure', 'CSIT003', 'DS', 1, '2020-07-08 21:17:59', 0),
(4, 'Visual Programming', 'CSIT004', 'VS', 1, '2020-07-17 21:19:34', 0),
(5, 'DataBase Management System', 'CSIT005', 'DBMS', 1, '2020-07-23 21:19:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `created_by`, `is_status`) VALUES
(1, 'DCS&IT', 1, 1),
(2, 'BBA', 1, 1),
(5, 'BBT', 1, 1),
(6, 'Chemistry', 1, 1),
(9, 'Physics', 1, 1),
(10, 'Mathematics', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `created_by`, `is_status`) VALUES
(1, 'HOD', 1, 1),
(2, 'Associate Professor', 1, 1),
(5, 'Assistant-Professor', 1, 1),
(6, 'Lecturer', 1, 1),
(8, 'Lecturer', 1, 1),
(9, 'Clerk', 1, 1),
(10, 'Junior-Clerk', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(25) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_user_type` char(3) NOT NULL,
  `created_at` date NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `event_user_type`, `created_at`, `is_status`) VALUES
(2, 'Viva voice', 'CS 8th viva is going to held on 19 August 2020', 'stu', '0000-00-00', 0),
(3, 'Viva voice', 'CS 8th viva is going to held on 19 August 2020', 'stu', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `first_semester`
--

CREATE TABLE `first_semester` (
  `student_id` int(11) NOT NULL,
  `student_roll_no` varchar(20) NOT NULL,
  `student_registration_no` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `department` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `first_semester`
--

INSERT INTO `first_semester` (`student_id`, `student_roll_no`, `student_registration_no`, `student_name`, `father_name`, `department`, `semester`, `batch`, `section`, `is_status`) VALUES
(1, 'fa16m2ba002', '315-0iub', 'saira iqbal', 'muhammad iqbal', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1594831331);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(25) NOT NULL,
  `notice_description` varchar(255) NOT NULL,
  `notice_user_type` char(3) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_file_path` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_title`, `notice_description`, `notice_user_type`, `notice_date`, `notice_file_path`, `created_at`, `is_status`) VALUES
(1, 'Exams datesheet', 'You exams are going to held in the first week of July.', 'Stu', '0000-00-00', 'fffffffffffffffffffff', '0000-00-00', 0),
(2, 'Summer holidays', 'Summer holidays are going to start from the first week of August', 'All', '0000-00-00', 'fffffffffffffffffffff', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `previous_degrees`
--

CREATE TABLE `previous_degrees` (
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `degree_duration` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `previous_degrees`
--

INSERT INTO `previous_degrees` (`degree_id`, `degree_name`, `degree_duration`, `created_at`, `created_by`) VALUES
(1, 'matric', '2', '0000-00-00', 0),
(2, 'FSC pre medical', '2', '0000-00-00', 0),
(3, 'FSC pre-Engineering', '2', '0000-00-00', 0),
(4, 'ICS', '2', '0000-00-00', 0),
(5, 'FA', '2', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `created_by`) VALUES
(1, 'Punjab', 1),
(3, 'Sindh', 1),
(4, 'Balochistan', 1),
(7, 'KPK', 1),
(8, 'Fata', 1),
(12, 'Azad-kashmir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(11) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `subject1` int(11) NOT NULL,
  `subjec1_obtain_marks` int(3) NOT NULL,
  `subject1_total_marks` int(3) NOT NULL,
  `subject2` int(11) NOT NULL,
  `subject2_obtain_marks` int(3) NOT NULL,
  `subject2_total_marks` int(3) NOT NULL,
  `subject3` int(11) NOT NULL,
  `subject3_obtain_marks` int(3) NOT NULL,
  `subject3_total_marks` int(3) NOT NULL,
  `subject4` int(11) NOT NULL,
  `subject4_obtain_marks` int(3) NOT NULL,
  `subject4_total_marks` int(3) NOT NULL,
  `subject5` int(11) NOT NULL,
  `subject5_obtain_marks` int(3) NOT NULL,
  `subject5_total_marks` int(3) NOT NULL,
  `subject6` int(11) NOT NULL,
  `subject6_obtain_marks` int(3) NOT NULL,
  `subject6_total_marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `second_semester`
--

CREATE TABLE `second_semester` (
  `student_id` int(11) NOT NULL,
  `student_roll_no` varchar(20) NOT NULL,
  `student_registration_no` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `department` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `section_course_id` int(11) NOT NULL,
  `intake` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `section_course_id`, `intake`, `created_at`, `created_by`, `is_status`) VALUES
(1, 'CS-section-01', 1, 40, '2020-07-01 21:26:32', 1, 0),
(2, 'IT-Section-01', 2, 40, '2020-07-01 21:26:32', 1, 0),
(3, 'BBA-Section-01', 3, 40, '2020-07-07 21:27:26', 1, 0),
(4, 'BBT-Section-01', 4, 40, '2020-07-07 21:27:26', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `semester_name`, `created_at`, `is_status`) VALUES
(1, '1st ', '0000-00-00', 1),
(2, '2nd ', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

CREATE TABLE `staff_members` (
  `member_id` int(11) NOT NULL,
  `member_first_name` varchar(50) NOT NULL,
  `member_middle_name` varchar(50) NOT NULL,
  `member_last_name` varchar(50) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `member_cnic` int(20) NOT NULL,
  `member_gender` varchar(20) NOT NULL,
  `member_dob` date NOT NULL,
  `member_email` varchar(65) NOT NULL,
  `member_phone_no_1` bigint(12) NOT NULL,
  `member_phone_no_2` bigint(12) NOT NULL,
  `member_address_line_1` varchar(255) NOT NULL,
  `member_address_line_2` varchar(255) NOT NULL,
  `member_country_id` int(11) NOT NULL,
  `member_province_id` int(11) NOT NULL,
  `member_city_id` int(11) NOT NULL,
  `member_city_zip_code` int(6) NOT NULL,
  `company_name_1` varchar(50) NOT NULL,
  `post_name_1` varchar(50) NOT NULL,
  `start_date_1` date NOT NULL,
  `end_date_1` date NOT NULL,
  `compnay_name_2` varchar(50) NOT NULL,
  `post_name_2` varchar(50) NOT NULL,
  `start_date_2` date NOT NULL,
  `end_date_2` date NOT NULL,
  `member_joining_date` date NOT NULL,
  `member_department_id` int(11) NOT NULL,
  `member_designation_id` int(11) NOT NULL,
  `member_category_id` int(11) NOT NULL,
  `member_experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`member_id`, `member_first_name`, `member_middle_name`, `member_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `member_cnic`, `member_gender`, `member_dob`, `member_email`, `member_phone_no_1`, `member_phone_no_2`, `member_address_line_1`, `member_address_line_2`, `member_country_id`, `member_province_id`, `member_city_id`, `member_city_zip_code`, `company_name_1`, `post_name_1`, `start_date_1`, `end_date_1`, `compnay_name_2`, `post_name_2`, `start_date_2`, `end_date_2`, `member_joining_date`, `member_department_id`, `member_designation_id`, `member_category_id`, `member_experience`) VALUES
(1, 'Saira', '.', 'Iqbal', 'Muahmmad', '.', 'Iqbal', 2147483647, 'Female', '0000-00-00', 'saira1234@gmail.com', 3426789345, 3456789456, 'House no 2 Streat no 1 Bahawalpur', 'Punjab Pakistan', 1, 3, 2, 63210, 'buggik', 'giiiiiiiiiiiiiiiiii', '0000-00-00', '0000-00-00', 'ddddddddddddddd', 'jjjjjjjjjj', '0000-00-00', '0000-00-00', '0000-00-00', 1, 1, 1, '3 years');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_rollno` varchar(11) NOT NULL,
  `student_registration` varchar(11) NOT NULL,
  `student_first_name` varchar(50) NOT NULL,
  `student_middle_name` varchar(50) NOT NULL,
  `student_last_name` varchar(50) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `student_cnic` varchar(20) NOT NULL,
  `student_gender` varchar(20) NOT NULL,
  `student_dob` date NOT NULL,
  `student_email` varchar(65) NOT NULL,
  `student_phone_no_1` bigint(12) NOT NULL,
  `student_phone_no_2` bigint(12) NOT NULL,
  `guardian_first_name` varchar(50) NOT NULL,
  `guardian_middle_name` varchar(50) NOT NULL,
  `guardian_last_name` varchar(50) NOT NULL,
  `guardian_cnic` varchar(20) NOT NULL,
  `guardian_relation` varchar(20) NOT NULL,
  `guardian_email` varchar(65) NOT NULL,
  `guardian_phone_no_1` bigint(12) NOT NULL,
  `guardian_phone_no_2` bigint(12) NOT NULL,
  `student_permanent_address_1` varchar(255) NOT NULL,
  `student_permanent_address_2` varchar(255) NOT NULL,
  `premanent_city_zip_code` int(6) NOT NULL,
  `permanent_country_id` int(11) NOT NULL,
  `permanent_province_id` int(11) NOT NULL,
  `permanent_city_id` int(11) NOT NULL,
  `student_temporary_address_1` varchar(255) NOT NULL,
  `student_temporary_address_2` varchar(255) NOT NULL,
  `temporary_country_id` int(11) NOT NULL,
  `temporary_province_id` int(11) NOT NULL,
  `temporary_city_id` int(11) NOT NULL,
  `temporary_city_zip_code` int(6) NOT NULL,
  `degree` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `degree_start_date` date NOT NULL,
  `degree_end_date` date NOT NULL,
  `student_status` varchar(20) NOT NULL,
  `previous_degree_1` int(11) NOT NULL,
  `matric_degree_start_date` date NOT NULL,
  `matric_degree_end_date` date NOT NULL,
  `matric_marks_obtained` int(11) NOT NULL,
  `matric_marks_total` int(11) NOT NULL,
  `matric_marks_percentage` varchar(11) NOT NULL,
  `previous_degree_2` int(11) NOT NULL,
  `inter_degree_start_date` date NOT NULL,
  `inter_degree_end_date` date NOT NULL,
  `inter_marks_obtain` int(11) NOT NULL,
  `inter_marks_total` int(11) NOT NULL,
  `inter_marks_percentage` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_rollno`, `student_registration`, `student_first_name`, `student_middle_name`, `student_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `student_cnic`, `student_gender`, `student_dob`, `student_email`, `student_phone_no_1`, `student_phone_no_2`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `guardian_cnic`, `guardian_relation`, `guardian_email`, `guardian_phone_no_1`, `guardian_phone_no_2`, `student_permanent_address_1`, `student_permanent_address_2`, `premanent_city_zip_code`, `permanent_country_id`, `permanent_province_id`, `permanent_city_id`, `student_temporary_address_1`, `student_temporary_address_2`, `temporary_country_id`, `temporary_province_id`, `temporary_city_id`, `temporary_city_zip_code`, `degree`, `batch`, `section`, `degree_start_date`, `degree_end_date`, `student_status`, `previous_degree_1`, `matric_degree_start_date`, `matric_degree_end_date`, `matric_marks_obtained`, `matric_marks_total`, `matric_marks_percentage`, `previous_degree_2`, `inter_degree_start_date`, `inter_degree_end_date`, `inter_marks_obtain`, `inter_marks_total`, `inter_marks_percentage`) VALUES
(1, 'Fa16m2ba02', '25-IUB-315', 'Farkhanda', '', 'Athar', 'Muhammad', 'Athar', 'Mehmood', '31206-1410789-0', 'Female', '0000-00-00', 'farkhanda123@gmail.com', 3418296789, 3456789567, 'Muhammad', 'Athar', 'Athar', '31207-5670738-0', 'Father', 'muhhamdathar123@gmail.com', 3459867345, 3456789567, 'Chak no 110/DB tehsil yazaman', '', 632100, 1, 1, 1, '', '', 2, 1, 1, 63210, 1, 1, 1, '0000-00-00', '0000-00-00', 'Rejoin', 1, '0000-00-00', '0000-00-00', 928, 1100, '84.56%', 4, '0000-00-00', '0000-00-00', 941, 1100, '86%'),
(3, 'buofiqVFVGD', 'NIWVEIRI', 'Farkhanda', 'HIVWH', 'Athar', 'Muhammad', 'Athar', 'Mehmood', '31206-1410789-0', 'Female', '0000-00-00', 'farkhanda123@gmail.com', 3418296789, 3456789567, 'Muha', 'Athar', 'Athar', '31207-5670738-0', 'Father', 'muhhamdathar123@gmail.com', 3459867345, 3456789567, 'Chak no 110/D.B tehsil yazman district bahawalpur', 'elvjwo', 63210, 2, 1, 1, 'Chak no 110/D.B tehsil yazman district bahawalpur', 'febeqnj', 1, 1, 1, 63210, 2, 2, 1, '0000-00-00', '0000-00-00', 'Rejoin', 1, '0000-00-00', '0000-00-00', 928, 1100, '84.56%', 2, '0000-00-00', '0000-00-00', 941, 1100, '86%');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(35) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `is_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_first_name` varchar(50) NOT NULL,
  `teacher_middle_name` varchar(50) NOT NULL,
  `teacher_last_name` varchar(50) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_last_name` varchar(50) NOT NULL,
  `teacher_cnic` varchar(20) NOT NULL,
  `teacher_gender` varchar(20) NOT NULL,
  `teacher_dob` date NOT NULL,
  `teacher_email` varchar(65) NOT NULL,
  `teacher_phone_no_1` bigint(12) NOT NULL,
  `teacher_phone_no_2` bigint(12) NOT NULL,
  `teacher_address_line_1` varchar(255) NOT NULL,
  `teacher_address_line_2` varchar(255) NOT NULL,
  `teacher_country_id` int(11) NOT NULL,
  `teacher_province_id` int(11) NOT NULL,
  `teacher_city_id` int(11) NOT NULL,
  `teacher_city_zip_code` int(6) NOT NULL,
  `company_name_1` varchar(50) NOT NULL,
  `post_name_1` varchar(50) NOT NULL,
  `start_date_1` date NOT NULL,
  `end_date_1` date NOT NULL,
  `company_name_2` varchar(50) NOT NULL,
  `post_name_2` varchar(50) NOT NULL,
  `start_date_2` date NOT NULL,
  `end_date_2` date NOT NULL,
  `teacher_joining_date` date NOT NULL,
  `teacher_department_id` int(11) NOT NULL,
  `teacher_designation_id` int(11) NOT NULL,
  `teacher_category_id` int(11) NOT NULL,
  `teacher_experience` varchar(20) NOT NULL,
  `teacher_course_id` int(11) NOT NULL,
  `teacher_batch_id` int(11) NOT NULL,
  `teacher_section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_first_name`, `teacher_middle_name`, `teacher_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `teacher_cnic`, `teacher_gender`, `teacher_dob`, `teacher_email`, `teacher_phone_no_1`, `teacher_phone_no_2`, `teacher_address_line_1`, `teacher_address_line_2`, `teacher_country_id`, `teacher_province_id`, `teacher_city_id`, `teacher_city_zip_code`, `company_name_1`, `post_name_1`, `start_date_1`, `end_date_1`, `company_name_2`, `post_name_2`, `start_date_2`, `end_date_2`, `teacher_joining_date`, `teacher_department_id`, `teacher_designation_id`, `teacher_category_id`, `teacher_experience`, `teacher_course_id`, `teacher_batch_id`, `teacher_section_id`) VALUES
(1, 'Farkhanda', 'fwifho', 'Athar', 'Muhammad ', 'Athar', 'Mehmood', '3120514107380', 'Female', '0000-00-00', 'farkhanda_athar@yahoo.com', 3418107816, 3418107816, 'Chak no 110/D.B Tehsil Yazman', 'District Bahawalpur', 2, 3, 2, 63210, 'hr930u', 'NHV9WEF9', '0000-00-00', '0000-00-00', 'GRBTH', 'THTQ', '0000-00-00', '0000-00-00', '0000-00-00', 5, 8, 2, '3 YEARS', 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `password_reset_token` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'I1WMJtsVkwhDgiPlRpjVtMJ6nuNw3Pa1', '$2y$13$.2n4MuH4EfIH39oXkoUqiO4J/dIoRIJISSxpWzl7i1xS47.0lMqLy', NULL, 'admin123@gmail.com', 10, 1595084771, 1595084771),
(2, 'teacher', '8dptWyyeE8yS9hpGvGQS58wICuYs4HNO', '$2y$13$KcfXaEA8D2RXcz1v67n/2Op/6DUyTP50ysZVyitMoEqt39tkgJdUG', NULL, 'teacher123@gmail.com', 10, 1595152336, 1595152336),
(3, 'staff', 'y4O1oYnzVODigOS3EEY_WmSHgK1VRTFE', '$2y$13$WeOl0c2e6cH7djrJBo6SheTVOAllQngteQPnGs73jOP9Kutf/Qb6i', NULL, 'staff123@gmail.com', 10, 1595152371, 1595152371),
(4, 'student', 'nNMuvAM5AAYMdMoIaQPCaxV4Ozc11IhQ', '$2y$13$DY7PsPzSEwPkl9wDZeT.1eHc2zXJohfe6Hqc3MdOzYlht9y76P5sm', NULL, 'student123@gmail.com', 10, 1595152415, 1595152415);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`,`batch_name`,`batch_alias`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`,`course_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `first_semester`
--
ALTER TABLE `first_semester`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `department` (`department`),
  ADD KEY `section` (`section`),
  ADD KEY `semester` (`semester`),
  ADD KEY `batch` (`batch`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `previous_degrees`
--
ALTER TABLE `previous_degrees`
  ADD PRIMARY KEY (`degree_id`,`degree_name`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`),
  ADD UNIQUE KEY `registration_no` (`registration_no`),
  ADD KEY `subject1` (`subject1`),
  ADD KEY `subject2` (`subject2`),
  ADD KEY `subject4` (`subject4`),
  ADD KEY `subject5` (`subject5`),
  ADD KEY `subject3` (`subject3`),
  ADD KEY `subject6` (`subject6`);

--
-- Indexes for table `second_semester`
--
ALTER TABLE `second_semester`
  ADD PRIMARY KEY (`student_id`,`student_roll_no`,`student_registration_no`),
  ADD KEY `department` (`department`),
  ADD KEY `semester` (`semester`),
  ADD KEY `batch` (`batch`),
  ADD KEY `section` (`section`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`,`section_name`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `member_country_id` (`member_country_id`),
  ADD KEY `member_province_id` (`member_province_id`),
  ADD KEY `member_city_id` (`member_city_id`),
  ADD KEY `member_department_id` (`member_department_id`),
  ADD KEY `member_designation_id` (`member_designation_id`),
  ADD KEY `member_category_id` (`member_category_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`,`student_rollno`,`student_registration`,`student_cnic`,`student_email`,`student_phone_no_1`,`guardian_cnic`,`student_phone_no_2`,`guardian_phone_no_2`,`guardian_email`,`guardian_phone_no_1`),
  ADD KEY `permanent_country_id` (`permanent_country_id`),
  ADD KEY `permanent_province_id` (`permanent_province_id`),
  ADD KEY `permanent_city_id` (`permanent_city_id`),
  ADD KEY `temporary_country_id` (`temporary_country_id`),
  ADD KEY `temporary_province_id` (`temporary_province_id`),
  ADD KEY `temporary_city_id` (`temporary_city_id`),
  ADD KEY `degree` (`degree`),
  ADD KEY `batch` (`batch`),
  ADD KEY `section` (`section`),
  ADD KEY `previous_degree_1` (`previous_degree_1`),
  ADD KEY `previous_degree_2` (`previous_degree_2`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teacher_country_id` (`teacher_country_id`),
  ADD KEY `teacher_province_id` (`teacher_province_id`),
  ADD KEY `teacher_city_id` (`teacher_city_id`),
  ADD KEY `teacher_department_id` (`teacher_department_id`),
  ADD KEY `teacher_designation_id` (`teacher_designation_id`),
  ADD KEY `teacher_category_id` (`teacher_category_id`),
  ADD KEY `teacher_course_id` (`teacher_course_id`),
  ADD KEY `teacher_batch_id` (`teacher_batch_id`),
  ADD KEY `teacher_section_id` (`teacher_section_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `first_semester`
--
ALTER TABLE `first_semester`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `previous_degrees`
--
ALTER TABLE `previous_degrees`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `second_semester`
--
ALTER TABLE `second_semester`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_members`
--
ALTER TABLE `staff_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_semester`
--
ALTER TABLE `first_semester`
  ADD CONSTRAINT `first_semester_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `first_semester_ibfk_2` FOREIGN KEY (`section`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `first_semester_ibfk_3` FOREIGN KEY (`semester`) REFERENCES `semesters` (`semester_id`),
  ADD CONSTRAINT `first_semester_ibfk_4` FOREIGN KEY (`batch`) REFERENCES `batches` (`batch_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`subject1`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`subject2`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`subject4`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `result_ibfk_4` FOREIGN KEY (`subject5`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `result_ibfk_5` FOREIGN KEY (`subject3`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `result_ibfk_6` FOREIGN KEY (`subject6`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `second_semester`
--
ALTER TABLE `second_semester`
  ADD CONSTRAINT `second_semester_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `second_semester_ibfk_2` FOREIGN KEY (`semester`) REFERENCES `semesters` (`semester_id`),
  ADD CONSTRAINT `second_semester_ibfk_3` FOREIGN KEY (`batch`) REFERENCES `batches` (`batch_id`),
  ADD CONSTRAINT `second_semester_ibfk_4` FOREIGN KEY (`section`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD CONSTRAINT `staff_members_ibfk_1` FOREIGN KEY (`member_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `staff_members_ibfk_2` FOREIGN KEY (`member_province_id`) REFERENCES `province` (`province_id`),
  ADD CONSTRAINT `staff_members_ibfk_3` FOREIGN KEY (`member_city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `staff_members_ibfk_4` FOREIGN KEY (`member_department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `staff_members_ibfk_5` FOREIGN KEY (`member_designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `staff_members_ibfk_6` FOREIGN KEY (`member_category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`permanent_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `students_ibfk_10` FOREIGN KEY (`section`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `students_ibfk_11` FOREIGN KEY (`previous_degree_1`) REFERENCES `previous_degrees` (`degree_id`),
  ADD CONSTRAINT `students_ibfk_12` FOREIGN KEY (`previous_degree_2`) REFERENCES `previous_degrees` (`degree_id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`permanent_province_id`) REFERENCES `province` (`province_id`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`permanent_city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`temporary_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`temporary_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `students_ibfk_6` FOREIGN KEY (`temporary_province_id`) REFERENCES `province` (`province_id`),
  ADD CONSTRAINT `students_ibfk_7` FOREIGN KEY (`temporary_city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `students_ibfk_8` FOREIGN KEY (`degree`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `students_ibfk_9` FOREIGN KEY (`batch`) REFERENCES `batches` (`batch_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`teacher_country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`teacher_province_id`) REFERENCES `province` (`province_id`),
  ADD CONSTRAINT `teachers_ibfk_3` FOREIGN KEY (`teacher_city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `teachers_ibfk_4` FOREIGN KEY (`teacher_department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `teachers_ibfk_5` FOREIGN KEY (`teacher_designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `teachers_ibfk_6` FOREIGN KEY (`teacher_category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `teachers_ibfk_7` FOREIGN KEY (`teacher_course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `teachers_ibfk_8` FOREIGN KEY (`teacher_batch_id`) REFERENCES `batches` (`batch_id`),
  ADD CONSTRAINT `teachers_ibfk_9` FOREIGN KEY (`teacher_section_id`) REFERENCES `section` (`section_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

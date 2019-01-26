-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2017 at 04:21 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumeneg_lumen`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `blog` text NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `photo_alt` text NOT NULL,
  `custom_url` text NOT NULL,
  `ar_custom_url` text,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `desc` text NOT NULL,
  `ar_title` text,
  `ar_blog` text,
  `ar_photo_alt` text,
  `ar_meta_description` text,
  `ar_meta_keyword` text,
  `ar_desc` text,
  `video` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `meta_title` text NOT NULL,
  `page_title` text NOT NULL,
  `ar_page_title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `blog`, `sub_cat_id`, `photo`, `photo_alt`, `custom_url`, `ar_custom_url`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`, `desc`, `ar_title`, `ar_blog`, `ar_photo_alt`, `ar_meta_description`, `ar_meta_keyword`, `ar_desc`, `video`, `user_id`, `meta_title`, `page_title`, `ar_page_title`) VALUES
(1, 'Blog 1', '<blockquote>\r\n<p>my design&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;</p>\r\n</blockquote>\r\n\r\n<p>My Title&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'orESPg_project1.png', '', 'uri', '', 'sa', 'saaaaaaaaaa', '2016-10-20 12:41:38', '2016-12-21 13:47:26', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"\r\n', '', '', '', '', '', '', 'https://www.youtube.com/embed/7N5oVNo-oUI', 18, '', '', ''),
(2, 'Blog 2', '<blockquote>\r\n<p>my design&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;</p>\r\n</blockquote>\r\n\r\n<p>My Title&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'g4SS9n_products-inner-img7.png', '', 'uri', '', 'sa', 'saaaaaaaaaa', '2016-10-20 12:41:38', '2016-12-13 09:46:22', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"\r\n', '', '', '', '', '', '', 'https://www.youtube.com/embed/7N5oVNo-oUI', 1, '', '', ''),
(4, 'Blog 3', '<blockquote>\r\n<p>my design&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;</p>\r\n</blockquote>\r\n\r\n<p>My Title&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, 'U92mks_9.png', '', 'uri', '', 'sa', 'saaaaaaaaaa', '2016-10-20 12:41:38', '2016-12-21 13:46:47', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"\r\n', '', '', '', '', '', '', 'https://www.youtube.com/embed/7N5oVNo-oUI', 1, '', '', ''),
(5, 'Blog 1', '<blockquote>\r\n<p>my design&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&quot;</p>\r\n</blockquote>\r\n\r\n<p>My Title&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'orESPg_project1.png', '', 'uri', '', 'sa', 'saaaaaaaaaa', '2016-10-20 12:41:38', '2016-12-19 11:31:43', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"\r\n', '', '', '', '', '', '', 'https://www.youtube.com/embed/7N5oVNo-oUI', 18, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_galary`
--

CREATE TABLE `blog_galary` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_galary`
--

INSERT INTO `blog_galary` (`id`, `photo`, `blog_id`) VALUES
(19, 'hKZUeR_project1.png', 1),
(20, 'BrjPfD_project2.png', 1),
(21, '4pPXxm_project1.png', 2),
(22, 'mhfqH7_project2.png', 2),
(23, '4IL4Va_project3.png', 2),
(26, '2hThFn_juhayna.png', 4),
(27, 'FMyndi_multipharma.png', 4),
(28, 'qeYlGT_9.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `ar_title` text,
  `desc` text NOT NULL,
  `ar_desc` text,
  `photo` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `ar_title`, `desc`, `ar_desc`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Archtictxxx', 'Archtict', 'sdfsdfg', 'Archtict', 'CXT2XV_Banan-Egypt-architecture-interior-landscape-design-about us.jpg', '2016-12-21 10:08:34', '2017-03-06 09:55:29'),
(2, 'Archtictxxx', 'Archtict', 'sdfsdfg', 'Archtict', 'I8ylDB_project4.png', '2016-12-21 10:08:34', '2016-12-21 10:09:38'),
(3, 'projicts', 'اااااااااااااااا', 'test test  test test  test test  test test ', 'test test  test test  test test  test test ', 'lJA8i3_if_Draw_2290864.png', '2017-09-24 05:57:20', '2017-09-24 05:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_desc` text NOT NULL,
  `job_dep` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `job_desc`, `job_dep`, `location`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'Technical Support Representative', '<p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. Apply Now</p>\r\n', 'IT Department', 'New York', '2017-07-26', '2017-09-25 12:46:26', '2017-09-25 10:46:26'),
(2, 'Copywriter', 'Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra.\r\nApply Now\r\n', 'IT Department', 'New York', '2017-07-25', '2017-06-24 14:08:16', '2017-06-24 14:08:16'),
(3, 'Quibusdam', 'Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra.\r\nApply Now\r\n', 'IT Department', 'New York', '2017-07-25', '2017-06-24 14:08:21', '2017-06-24 14:08:21'),
(4, 'test', '<p>http://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.comhttp://www.twitter.com</p>\r\n', 'ttest', 'Egypt', '27/10/2017', '2017-10-02 15:31:39', '2017-10-02 15:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL,
  `custom_url` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `home` int(11) NOT NULL,
  `ar_name` text,
  `ar_meta_description` text,
  `ar_meta_keyword` text,
  `photo_alt` text NOT NULL,
  `ar_photo_alt` text,
  `ar_custom_url` text,
  `desc` text NOT NULL,
  `ar_desc` text,
  `slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `photo`, `custom_url`, `meta_description`, `meta_keyword`, `home`, `ar_name`, `ar_meta_description`, `ar_meta_keyword`, `photo_alt`, `ar_photo_alt`, `ar_custom_url`, `desc`, `ar_desc`, `slider`) VALUES
(11, 'Services', 'qJ6u7l_ORIGINs.png', 'services', 'Lumen is interior design office based in Cairo, Egypt, Our designs includes trendy interior designs, villas décor; residential interior design; reception Interior design; reception decor; Majles Interior design; decor Arabic Majles; living interior designs; living room decor; interior bedroom; decor bedrooms; dining rooms interior designs; dining rooms decor; interior designs children\'s bedroom; decor kids bedrooms; kitchens interior designs; kitchens decor; bathrooms interior designs; bathroom decor; pharmacies interior designs; pharmacies decor; entrances interior designs; entrances decor; offices and administrative buildings interior design; offices and administrative buildings decor; restaurants and cafes interior designs; Restaurants and cafes Decor; galleries and showrooms interior design; galleries and showrooms decor; hospitals and clinics interior design; hospitals and clinics decor..........', 'Interior design; interior décor; villas interior design; villas décor; residential interior design; reception Interior design; reception decor; Majles Interior design; decor Arabic Majles; living interior designs; living room decor; interior bedroom; decor bedrooms; dining rooms interior designs; dining rooms decor; interior designs children\'s bedroom; decor kids bedrooms; kitchens interior designs; kitchens decor; bathrooms interior designs; bathroom decor; pharmacies interior designs; pharmacies decor; entrances interior designs; entrances decor; offices and administrative buildings interior design; offices and administrative buildings decor; restaurants and cafes interior designs; Restaurants and cafes Decor; galleries and showrooms interior design; galleries and showrooms decor; hospitals and clinics interior design; hospitals and clinics decor.', 1, 'تصميم داخلي', '', '', '', 'نضارة', 'تصميم-داخلي', 'The stylish interior design should have unique interior design ideas, in order to eye catching the potential clients. Lumen office starts the project with client space requirements and department, then develop space\'s layout, this is followed by illustrating the project mood board which contains materials schemes, color scheme (monochromatic – colorful – etc…), ceiling schemes, and flooring schemes, as well as a detailed mood board of fixed and movable furniture for each space. ....', 'التصميمات الداخلية المميزة، يجب أن تكون ذات أفكار تصميمية فريدة ومتميزة، من أجل جذب أنظار العملاء المحتملين. إن أفكارنا ومبادئنا في التصميم تقوم على تأكيد العلامة التجارية للشركة المالكة للمشروع. إن مكتب بنان يبدأ المشروع من خلال دراسة متطلبات ومساحات الفراغات التي يقدمها لنا العميل وتحليل تصوره عن أقسام المشروع، ثم وضع تصور لتصميم المساحات الخاصة بكل فراغ، ثم التصميم والتقسيم الداخلي لكل فراغ بشكل مستقل مع تقديم تصور لنوع الفرش المقترح (مكاتب منفصلة-خلايا عمل)، ويلي ذلك تقديم مسقط أفقي نهائي متكامل للمشروع بعد مناقشته مع المالك والقيام بإنهاء التعديلات إن وجدت، ثم تُقدم تصورات للديكور النهائي للشركة والذي يحتوي على نوعية مواد التشطيب والألوان المناسبة للمشروع (أحادي اللون -  ألوان متنوعة-  الخ(...، وخامات التشطيب المستخدمة في الحوائط والأسقف، وأنواع الأرضيات المختلفة، كذلك تصور تفصيلي عن الأثاث الثابت والمتحرك لكل فراغ', 'J9sJlt_14001-03-Show room.jpg'),
(12, 'Projects', 'rjJocz_ORIGINs - Copy.png', 'projicts', 'LUMEN is architecture design office based in Cairo, Egypt, Our designs includes trendy exterior designs, villas palaces, and residential architectural designs, Towers architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals and clinics architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, our projects located in (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://lumen-eg.com Browse the best architectural designs and ideas and Call us for your project exterior design...........M.G\r\n', 'LUMEN architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, villas palaces, residential architectural designs, Towers architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://lumen-eg.com', 1, 'تصميم معماري', '', '', 'ARCHITECTURE design; LUMEN ARCHITECTURE Design; Residential Exterior Design; Palace Exterior Design.', '', 'تصميم-معماري', 'LUMEN office commencing the project design process through studying the type of the project, then analyzing owner function program and the space requirements for the project operator. This phase will finish through designing sustainable, flexible buildings architectural and structural design that provides effective use in all different functions of spaces in all diverse floors, in order to provide the largest amount of luxuries, excellent, impressive spaces. The utilization of natural resources and sustainable design to create an inspiring public image for the project\'s spaces. ', 'مكتب بنان يبدأ عملية التصميم المعماري من خلال دراسة نوع وفئة المشروع، ثم القيام بتحليل البرنامج الوظيفي الخاص بمالك المشروع وتحقيق المتطلبات والاحتياجات الخاصة بالفراغات المختلفة الخاصة بمالك المشروع، في نهاية هذه المرحلة يقوم المكتب بإتمام تصميم مستدام وكذلك تصميم معماري وإنشائي مرن يحقق استخدام فعال لكافة الوظائف المتنوعة في المبني في مختلف الأدوار. كذلك يقوم المكتب باستخدام الموارد الطبيعية والتصميم المستدام كي نخلق صورة عامة ملهمة لفراغات المشروع، كذلك يقوم المكتب بخلق صورة خارجية مميزة للمبني. ', 'ffjMtc_ORIGINs.png');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `photo_alt` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`, `seen`) VALUES
(15, 'hhhhhhhh', 'Abdallah400@gmail.com', 'hhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2017-09-24 12:37:23', '2017-09-24 12:37:23', 0),
(17, 'hhhhhh', 'sayed488@gmail.com', '', '', '2017-09-24 14:41:35', '2017-09-24 14:41:35', 0),
(18, 'gharib', 'gharib700@gmail.com', '', '', '2017-09-24 14:42:49', '2017-09-24 14:42:49', 0),
(19, 'mohamed', 'mohamed700@gmail.com', '', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '2017-09-24 14:51:15', '2017-09-24 14:51:15', 0),
(20, 'mohamed sayed ', 'mohamed700@gmail.com', '', 'ttttttttttttt', '2017-09-24 15:06:57', '2017-09-24 15:06:57', 0),
(21, 'mohamed', 'mohamed.s700@gmail.com', '', 'ddddddddddddddddddddddddddddddd', '2017-09-25 08:07:04', '2017-09-25 08:07:04', 0),
(28, 'mohamed', 'admin.g400@gmail.com', 'asssssssssss', 'HHHHHHHHHHHHHH', '2017-09-27 13:28:38', '2017-09-27 13:28:38', 0),
(29, 'mohamed', 'Abdallah400@gmail.com', 'asssssssssss', 'HHHHHHHHHHHHHHH', '2017-09-27 13:33:54', '2017-09-27 13:33:54', 0),
(31, 'حسين', 'sayed488@gmail.com', 'dd', 'hhhhhhhhhhhhhhh', '2017-09-27 13:41:44', '2017-09-27 13:41:44', 0),
(32, 'mohamed', 'mohamed700@gmail.com', 'zxc', 'mmmmmmmmmmmmmmmmmm', '2017-09-27 13:44:57', '2017-09-27 13:44:57', 0),
(33, 'mohamed', 'mohamed700@gmail.com', 'hhhhhhh', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2017-09-27 13:45:51', '2017-09-27 13:45:51', 0),
(34, 'gharib', 'mohamed700@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkkkk', '2017-09-27 13:47:35', '2017-09-27 13:47:35', 0),
(35, 'gharib', 'mohamed700@gmail.com', 'zxc', 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', '2017-09-27 13:50:10', '2017-09-27 13:50:10', 0),
(38, 'mohamed', 'admin.g400@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkkk', '2017-09-27 14:16:47', '2017-09-27 14:16:47', 0),
(39, 'mohamed', 'mohamed700@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkkkkkkkk', '2017-09-27 14:19:58', '2017-09-27 14:19:58', 0),
(40, 'mohamed', 'mohamed700@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkkkkkkkkk', '2017-09-27 14:20:57', '2017-09-27 14:20:57', 0),
(41, 'gharib', 'mohamed700@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkk', '2017-09-27 14:27:02', '2017-09-27 14:27:02', 0),
(42, 'mohamed', 'mohamed700@gmail.com', 'asssssssssss', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '2017-09-27 14:27:44', '2017-09-27 14:27:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `company_description` text NOT NULL,
  `logo` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `aboutus` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_auther` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `photo_alt` varchar(100) NOT NULL,
  `gp` text NOT NULL,
  `be` text NOT NULL,
  `apple` text NOT NULL,
  `sky` text NOT NULL,
  `tw` text NOT NULL,
  `yt` text NOT NULL,
  `stumble` text NOT NULL,
  `upon` text NOT NULL,
  `tumbler` text NOT NULL,
  `fb` text NOT NULL,
  `linkedin` text NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `ins` text NOT NULL,
  `pin` text NOT NULL,
  `address2` text NOT NULL,
  `address3` text NOT NULL,
  `video_url` text NOT NULL,
  `ar_title` text,
  `ar_aboutus` text,
  `ar_meta_description` text,
  `ar_meta_keyword` text,
  `ar_meta_auther` text,
  `ar_vision` text,
  `ar_mission` text,
  `ar_photo_alt` text,
  `goals` text NOT NULL,
  `history` text NOT NULL,
  `aboutusphoto` text NOT NULL,
  `aboutusslider` text NOT NULL,
  `ar_goals` text,
  `ar_history` text,
  `blogslider` text NOT NULL,
  `projdesc` text NOT NULL,
  `projectslider` text NOT NULL,
  `why` text NOT NULL,
  `ar_why` text,
  `socialphoto` text NOT NULL,
  `ar_projdesc` text,
  `wwr` text NOT NULL,
  `ar_wwr` text,
  `meta_title` text NOT NULL,
  `ar_meta_title` text,
  `contactusslider` text NOT NULL,
  `portfolioslider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `title`, `company_description`, `logo`, `email`, `phone`, `address`, `aboutus`, `meta_description`, `meta_auther`, `meta_keyword`, `vision`, `mission`, `photo_alt`, `gp`, `be`, `apple`, `sky`, `tw`, `yt`, `stumble`, `upon`, `tumbler`, `fb`, `linkedin`, `whatsapp`, `ins`, `pin`, `address2`, `address3`, `video_url`, `ar_title`, `ar_aboutus`, `ar_meta_description`, `ar_meta_keyword`, `ar_meta_auther`, `ar_vision`, `ar_mission`, `ar_photo_alt`, `goals`, `history`, `aboutusphoto`, `aboutusslider`, `ar_goals`, `ar_history`, `blogslider`, `projdesc`, `projectslider`, `why`, `ar_why`, `socialphoto`, `ar_projdesc`, `wwr`, `ar_wwr`, `meta_title`, `ar_meta_title`, `contactusslider`, `portfolioslider`) VALUES
(1, 'LUMEN Egypt for architecture, interior and landscape design', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\"', 'SKN3Wg_ORIGINs.png', 'info@lumen-eg.com', '+2 01015056680 – 01144795654', 'Villa 121, El Yasmeen 2, New Cairo City, Cairo, Egypt', '<h1 style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:14pt\">What is LUMEN ?</span></strong></h1>\r\n\r\n<p dir=\"LTR\" style=\"margin-left:0cm; margin-right:0cm\"><strong>LUMEN </strong>is a professional office for consultancy and development founded in Egypt offering a wide range of technical services; leaded by a group of highly qualified consultants and technical engineers, whose expertise in engineering projects covers all major disciplines of design and construction supervision.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'LUMEN Egypt for architecture, interior and landscape design', 'banan', '', 'LUMEN CONSULTING ENGINEERING is looking to be one of the top five multi-disciplinary engineering consultancy firm in the Middle East with satisfied Clients and project portfolio from the entire region.\r\n', 'Through using our innovative employees, we provide the highest level of commitment to our clients by providing the highest quality, productivity, at a proper time with competitive prices, where we target the client satisfaction by providing them with best planning, design, engineering, and project management solutions that display unparalleled commitment, collaboration, organization, and creativity.\r\n', 'LUMEN Egypt for architecture, interior and landscape design', 'https://plus.google.com/', 'https://www.behance.net/', '', '', 'https://twitter.com/', '', '', '', '', 'https://facebook.com/', 'https://www.linkedin.com/', '', 'https://www.instagram.com/', '', '', '', 'https://player.vimeo.com/video/129978401', 'بنان مصر مكتب متخصص في التصميم المعماري والتصميم الداخلي واللاندسكيب.', '<ul style=\"list-style-type:square\">\r\n	<li dir=\"rtl\" style=\"text-align:justify\">\r\n	<p>مكتب معماري وديكور في مصر.<br />\r\n	بنان مكتب تصميم داخلي (ديكور) وتصميم معماري مقره الرئيسي في مصر، وهو يعد من أفضل مكاتب التصميم المعماري والديكور في القاهرة-مصر، ينطلق أداؤنا في المكتب من ايماننا بأن امكانتنا وخبراتنا العملية والأكاديمية تتيح لنا تحويل رغبات عملائنا الي الي خطوط تصميمية تتماشي مع احدث الاتجاهات الهندسية والمعمارية والتصميم الداخلي، بما يحقق لعميلنا ما يتمناه في الفيلا الخاصة به أو شقته او مشروعه الخاص.<br />\r\n	تعتمد سياستنا كشركة عمارة وديكور علي مشاركة عميلنا في افكاره وتحويلها الي واقع ملموس يحقق لعميلنا وعائلته الراحة وتلبي احتياجاته في تصميم منزله او مشروعه.<br />\r\n	مكتب بنان مكتب تصميم معماري وديكور، متخصص في تقديم خدمات التصميم المعماري الداخلي علي أحدث الطرز المعمارية والديكور الداخلي للفيلات، وتشمل خدماتنا تقديم حلول مبتكرة لتصميمات غرف النوم والأستقبال والمعيشة، وكذلك التصميم الداخلي للمكاتب الإدارية، والمطاعم، والمعارض، والمستشفيات. وكذلك تشمل خدماتنا التصميمات المعمارية الإبداعية للفيلات، والعمارات السكنية، والأبراج المتعددة الأدوار، المنتجعات، المعارض، الأندية، المستشفيات، المدارس الدولية، الفنادق، المساجد، المكاتب، المولات (المراكز التجارية)، السفارات، المصانع. وايضا تنسيق الحدائق الخارجية للفيلات، والعناصر المائية والأشجار، وحدائق الأسطح.<br />\r\n	يقوم المكتب بتنفيذ المشروعات والإشراف عليها وإدارة المواقع، وكذلك تشطيب الفيلات والشقق السكنية الفاخرة، وذلك لضمان دقة تنفيذ مشروعات عملائنا كما تم تصميمها مع المكتب بأعلي جودة وأفضل تكلفة، من خلال احدث اساليب ادارة المشروعات الحديثة، ولقد قام المكتب بتنفيذ العديد من المشروعات وتشطيب الفيلات والمكاتب والمعارض، وتنسيق الحدائق الفيلات، وذلك بشفافية مالية تتيح للعميل متابعة الموقف المالي للمشروع من خلال تقارير مالية طوال فترة تشطيب وتنفيذ الفيلا (المشروع).</p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 'ؤئءؤ', 'ؤء', '', '<p>نص تجريبي لا معنى له يستخدم فقط لإعطاء شكل مناسب للصفحة، نص تجريبي لا معنى له يستخدم فقط لإعطاء شكل مناسب للصفحة، نص تجريبي لا معنى له </p>\r\n', '<p>نص تجريبي لا معنى له يستخدم فقط لإعطاء شكل مناسب للصفحة، نص تجريبي لا معنى له يستخدم فقط لإعطاء شكل مناسب للصفحة، نص تجريبي لا معنى له يستخدم فقط لإعطاء شكل مناسب للص</p>\r\n', 'يشسي', 'e bad necessity for protecting the environment and producing the necessarily required substances for keeping this fortune. And this objective will not be achieved without emphasizing on the using of the most precise standards and measures of the building and construction materials in the in', 'e bad necessity for protecting the environment and producing the necessarily required substances for keeping this fortune. And this objective will not be achieved without emphasizing on the using of the most precise standards and measures of the building and construction materials in the in', '5WZQtz_Test-Logo.svg.png', 'QexJxX_XVFX76_01.jpg', '', '', 'PngVgB_Banan-Egypt-architecture-interior-landscape-design-blog.jpg', 'LUMEN engineers team has successfully accomplished a long list of projects, in Egypt, Africa and the Middle East, covering all major fields of engineering. ', 'g1P1Wl_Banan-Egypt-architecture-interior-landscape-design-project.jpg', 'We believe in:\r\n• Big projects inside and outside Egypt\r\n• Our prices are competitive regarding to our highest level of quality\r\n• Respecting, listening and understanding the client\r\n• Implementing the client vision through creative concepts and ideas\r\n• Providing the client with continuous support all along the phases of the projects till the hand over and operation\r\n• Initiating quality assurance and quality control plans\r\n• Improving our resources, procedures and capabilities\r\n', 'يؤمن مكتب بنان بالتالي:\r\nكل فيلا (مشروع) لدينا هو مشروع فريد بذاته لذلك نحاول تحقيق أهداف عميلنا ورغباته في مشروعه الخاص (فيلته).\r\nنؤمن بأن العملاء من أهم المساهمين في نجاحنا، فنقوم علي تقوية العلاقات بيننا  من خلال توفير قيمة أعلى للعملاء بتحقيق رغباتهم  سواء كمالك او مستخدم او مشاهد.\r\nنحسن استغلال الفرص الاستثمارية لعملاءنا من خلال تطبيق علوم التسويق للخدمات الهندسية للوصول للعميل المستهدف لمشروعات عملاءنا.\r\nالعاملين مصدر قوتنا لذلك العلاقة بيننا هى علاقة قوية، تعتمد علي المشاركة في مسئولية المشروعات.\r\nنستهدف في تصميماتنا ان ننافس بها عالمياً وذلك بضبط الجودة في مراحل التصميم المختلفة بداية من الفكرة التصميمية ثم تطوير التصميم، ثم التصميمات التنفيذية.', '17eeTX_Banan egypt for architecture, interior and landscape design social media.png', '', '', '', 'LUMEN Egypt for architecture, interior and landscape design', '', 'z1YM94_Banan-Egypt-architecture-interior-landscape-design-contact-us.jpg', 'LUXvPz_Banan-Egypt-architecture-interior-landscape-design-portofolio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ar_name` text NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `desc` text NOT NULL,
  `ar_desc` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `custom_url` text NOT NULL,
  `ar_custom_url` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `ar_meta_description` text NOT NULL,
  `ar_meta_keyword` text NOT NULL,
  `photo` text NOT NULL,
  `photo_alt` text NOT NULL,
  `location` text NOT NULL,
  `fb` text NOT NULL,
  `tw` text NOT NULL,
  `ins` text NOT NULL,
  `gp` text NOT NULL,
  `page_title` text NOT NULL,
  `meta_title` text NOT NULL,
  `ar_meta_title` text NOT NULL,
  `ar_page_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `ar_name`, `sub_cat_id`, `client_name`, `desc`, `ar_desc`, `created_at`, `updated_at`, `custom_url`, `ar_custom_url`, `meta_description`, `meta_keyword`, `ar_meta_description`, `ar_meta_keyword`, `photo`, `photo_alt`, `location`, `fb`, `tw`, `ins`, `gp`, `page_title`, `meta_title`, `ar_meta_title`, `ar_page_title`) VALUES
(1, 'vxbv', 'nbvn', 6, 'fsdgfsdf', '<p>gxhdfghdf</p>\r\n', '<p>gxhfh</p>\r\n', '2016-12-21 11:21:44', '2017-02-06 06:22:27', 'nbvn', 'nbv', 'nbvn', '', 'nbvnbv', '', 'ULfyfq_project1.png', '', 'nbvn', 'fb', 'twi', 'inst', '', '', '', '', ''),
(2, 'xcbv', 'bcvb', 1, '', '<p>bcvbcv</p>\r\n', '<p>cvbcvb</p>\r\n', '2016-12-21 11:22:58', '2016-12-21 13:50:10', 'bcv', 'bcv', 'cv', '', 'bcvb', '', 'oJC6Z8_370*370.png', '', 'bc', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_galary`
--

CREATE TABLE `portfolio_galary` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `portfolio_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_galary`
--

INSERT INTO `portfolio_galary` (`id`, `photo`, `portfolio_id`) VALUES
(1, '25EHOK_project1.png', '2'),
(2, 'gcsgsj_project2.png', '1'),
(3, 'LvlkwV_project3.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ar_name` text,
  `sub_cat_id` int(11) NOT NULL,
  `desc` text NOT NULL,
  `ar_desc` text,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `custom_url` text NOT NULL,
  `ar_custom_url` text,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `ar_meta_description` text,
  `ar_meta_keyword` text,
  `meta_title` text NOT NULL,
  `page_title` text NOT NULL,
  `photo` text NOT NULL,
  `photo_alt` text NOT NULL,
  `location` text NOT NULL,
  `fb` text NOT NULL,
  `tw` text NOT NULL,
  `ins` text NOT NULL,
  `gp` text NOT NULL,
  `ar_page_title` text,
  `ar_meta_title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `ar_name`, `sub_cat_id`, `desc`, `ar_desc`, `created_at`, `updated_at`, `custom_url`, `ar_custom_url`, `meta_description`, `meta_keyword`, `ar_meta_description`, `ar_meta_keyword`, `meta_title`, `page_title`, `photo`, `photo_alt`, `location`, `fb`, `tw`, `ins`, `gp`, `ar_page_title`, `ar_meta_title`) VALUES
(86, 'demo', NULL, 1, '<p>dessss</p>\r\n', NULL, '2017-09-30 11:27:15', '2017-09-30 11:27:15', 'de', NULL, '', '', NULL, NULL, '', '', 'vFfm5D_01.jpg', '', 'Cairo', 'dsad', 'dasdas', 'dasd', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_galary`
--

CREATE TABLE `project_galary` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `project_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_galary`
--

INSERT INTO `project_galary` (`id`, `photo`, `project_id`) VALUES
(18, 'JERuXb_Desert.jpg', '4'),
(25, 'rvuICk_01 Architectural-exterior-design_Dubai-Towers_Egypt-banan-تصميم ابراج متعددة الطوابق.jpg', '10'),
(29, 'mpNhk3_09055-Architectural-exterior-design_Dubai-Mixed-Used-Project_Egypt-banan-تصميم مباني متعددة الاستخدام.jpg', '14'),
(34, '1CIMMb_01 Architectural-exterior-design_Dubai-Towers_Egypt-banan-تصميم ابراج متعددة الطوابق.jpg', '19'),
(53, 'TDEKv0_Banan-Egypt-architecture-interior- landscape-design-villa-0853.jpg', '20'),
(56, '2O5500_Banan-Egypt-architecture-interior-landscape-design-09037-Al nada mall-1.jpg', '15'),
(57, 'LSjT7R_Banan-Egypt-architecture-interior-landscape-design-09037-Al nada mall-2.jpg', '15'),
(60, '6x1Nxb_Banan-Egypt-architecture-interior-landscape-design-15017-Future mall-4.jpg', '15'),
(74, 'RQuQ2R_0805-Cam Bird-02.jpg', '17'),
(75, 'cRLppN_0805-Night.jpg', '17'),
(80, '3Uj1zx_Banan-Egypt-architecture-interior-landscape-design-15017-Future mall-1.jpg', '15'),
(81, '3ToRVA_Banan-Egypt-architecture-interior-landscape-design-15017-Future mall-3.jpg', '15'),
(82, 'A5XAWB_Banan-Egypt-architecture-interior-landscape-design-15017-Future mall-4.jpg', '15'),
(83, 'RwdCbz_Banan-Egypt-architecture-interior-landscape-design-14022-Al Salam mall-2.jpg', '34'),
(84, 'nPT0OS_Banan-Egypt-architecture-interior-landscape-design-09037-Al nada mall-02.jpg', '35'),
(85, 'dxVdHk_Banan-Egypt-architecture-interior-landscape-design-09037-Al nada mall-03.jpg', '35'),
(86, 'O5O42Z_Banan-Egypt-architecture-interior-landscape-design-12017-Euromarche-2.jpg', '36'),
(87, 'LAtXjH_Banan-Egypt-architecture-interior-landscape-design-11014-El masria mall-1.jpg', '37'),
(88, 'TBM6nP_Banan-Egypt-architecture-interior-landscape-design-11014-El masria mall-4.jpg', '37'),
(89, '9lJqKp_Banan-Egypt-architecture-interior-landscape-design-11014-El masria mall-5.jpg', '37'),
(90, 'VpAIdn_Banan-Egypt-architecture-interior-landscape-design-11014-El masria mall-6.jpg', '37'),
(91, 'Du4YOd_Banan-Egypt-architecture-interior-landscape-design-sefora mall.jpg', '38'),
(92, 'n1wcnS_Banan-Egypt-architecture-interior-landscape-design-sefora mall-1.jpg', '38'),
(93, 'o2lt4g_Banan-Egypt-architecture-interior-landscape-design-0714 AUB Bank.jpg', '39'),
(94, 'NAvKcw_Banan-Egypt-architecture-interior-landscape-design-0714 AUB Bank-01.jpg', '39'),
(95, 'ysTZv3_Banan-Egypt-architecture-interior-landscape-design-10008-girls-ins.jpg', '40'),
(96, '6P8Lm8_Banan-Egypt-architecture-interior-landscape-design-10008-girls-ins01.jpg', '40'),
(97, '0WqCM1_10009-10.jpg', '41'),
(98, '07nikv_10009-31.jpg', '41'),
(99, 'QbDJ76_Banan-Egypt-architecture-interior-landscape-design-10009-ins4.jpg', '42'),
(100, 'Fcuet9_Banan-Egypt-architecture-interior-landscape-design-10009-ins5.jpg', '42'),
(101, 'sz9TRg_Banan-Egypt-architecture-interior-landscape-design-the grand mosque-01.jpg', '43'),
(102, 'VQ59x6_Banan-Egypt-architecture-interior-landscape-design-the grand mosque-02.jpg', '43'),
(103, 'xZ9Xrf_Banan-Egypt-architecture-interior-landscape-design-the grand mosque-03.jpg', '43'),
(104, 'YN81vH_Banan-Egypt-architecture-interior-landscape-design-Green valley compound-01.jpg', '44'),
(105, 'yHIMRz_Banan-Egypt-architecture-interior-landscape-design-Green valley compound-02.jpg', '44'),
(106, 'XXardT_Banan-Egypt-architecture-interior-landscape-design-Dhafra-school-01.jpg', '45'),
(107, 'DR76dy_Banan-Egypt-architecture-interior-landscape-design-Dhafra-school-02.jpg', '45'),
(108, 'kanXA4_Banan-Egypt-architecture-interior-landscape-design-Dhafra-school-03.jpg', '45'),
(109, 'csIRZO_Banan-Egypt-architecture-interior-landscape-design-0760-Medical-city-01.jpg', '46'),
(111, 'Sqjfu7_Banan-Egypt-architecture-interior-landscape-design-Mena-Showroom-01.jpg', '48'),
(112, 'JDUXqm_Banan-Egypt-architecture-interior-landscape-design-Beach-restaurant-01.jpg', '10'),
(113, 'sEzuGL_Banan-Egypt-architecture-interior-landscape-design-Beach-restaurant-02.jpg', '10'),
(114, 'XHblkj_Banan-Egypt-architecture-interior-landscape-design-Dubai-09055-02.1.jpg', '9'),
(115, 'V1WF6a_Banan-Egypt-architecture-interior-landscape-design-Dubai-09055-02.jpg', '9'),
(116, 'J9O7xY_Banan-Egypt-architecture-interior-landscape-design-Dubai-09055-03.jpg', '9'),
(117, '1D4CfR_Banan-Egypt-architecture-interior-landscape-design-Dubai-09055-04.jpg', '9'),
(118, 'tFiADq_Banan-Egypt-architecture-interior-landscape-design-Dubai-Tower-01.jpg', '8'),
(119, 'h42LE5_Banan-Egypt-architecture-interior-landscape-design-Dubai-Tower-02.jpg', '8'),
(120, 'O4mZ34_Banan-Egypt-architecture-interior-landscape-design-Dubai-Tower-03.jpg', '8'),
(121, 'nGwRuw_Banan-Egypt-architecture-interior-landscape-design-10027-Villa-01.jpg', '11'),
(122, 'RhxnID_Banan-Egypt-architecture-interior-landscape-design-villa-0761.jpg', '16'),
(123, 'EcvAEz_Banan-Egypt-Interior-architecture-landscape-design-09030-Reception-00.jpg', '12'),
(124, '76Udbq_Banan-Egypt-Interior-architecture-landscape-design-09030-Reception-01.jpg', '12'),
(125, 'ic2JNu_Banan-Egypt-Interior-architecture-landscape-design-09030-Reception-00.jpg', '12'),
(126, '3csrqT_Banan-Egypt-Interior-architecture-landscape-design-09030-Reception-01.jpg', '12'),
(127, 'rqJa6J_Banan-Egypt-Interior-architecture-landscape-design-10012-Bedrroom-00.jpg', '22'),
(128, 'OpEfZ0_Banan-Egypt-Interior-architecture-landscape-design-10012-Bedrroom-01.jpg', '22'),
(129, 'HGIYoX_Banan-Egypt-Interior-architecture-landscape-design-10019-Dining-room-01.jpg', '5'),
(130, 'ScJXXw_Banan-Egypt-Interior-architecture-landscape-design-10019-Dining-room-02.jpg', '5'),
(131, 'hyxbLd_Banan-Egypt-architecture-interior-landscape-design-Mena-Showroom-01.jpg', '47'),
(132, 'XPbF3H_Banan-Egypt-architecture-interior-landscape-design-0760-Medical-city-01.jpg', '26'),
(133, 'sSyhlS_Banan-Egypt-Interior-architecture-landscape-design-10012-kids-room-02.jpg', '1'),
(134, 'kOuOYM_Banan-Egypt-Interior-architecture-landscape-design-10012-kids-room-03.jpg', '1'),
(135, 'cSP0l3_Banan-Egypt-Interior-architecture-landscape-design-11012-Kitchen-02.jpg', '3'),
(136, 'z5XzJA_Banan-Egypt-Interior-architecture-landscape-design-11012-Kitchen-03.jpg', '3'),
(137, 'wghx8b_Banan-Egypt-Interior-architecture-landscape-design-11012-Bathroom-02.jpg', '23'),
(138, 'LZV26e_Banan-Egypt-Interior-architecture-landscape-design-11012-Bathroom-03.jpg', '23'),
(139, 'eKWiQr_Banan-Egypt-Interior-architecture-landscape-design-09002-Pharmacy-01.jpg', '2'),
(140, '8yYQmf_Banan-Egypt-Interior-architecture-landscape-design-09002-Pharmacy-02.jpg', '2'),
(141, 'd322lU_Banan-Egypt-Interior-architecture-landscape-design-09002-Pharmacy-03.jpg', '2'),
(142, 'aR5ogr_Banan-Egypt-Interior-architecture-landscape-design-09007-Enterance-01.jpg', '6'),
(143, 'w9ePdL_Banan-Egypt-Interior-architecture-landscape-design-12023-Office-02.jpg', '7'),
(144, 'u81dNS_Banan-Egypt-Interior-architecture-landscape-design-12023-Office-03.jpg', '7'),
(145, 'ov4RsU_Banan-Egypt-Interior-architecture-landscape-design-09039-Office-design-02.jpg', '49'),
(146, 'YZXAMn_Banan-Egypt-Interior-architecture-landscape-design-09014-Restaurants-01.jpg', '24'),
(147, 'zMfpmn_Banan-Egypt-Interior-architecture-landscape-design-09042-Showroom-01.jpg', '25'),
(148, 'raSgXr_Banan-Egypt-Interior-architecture-landscape-design-09042-Showroom-02.jpg', '25'),
(149, 'v2xelv_Banan-Egypt-Interior-architecture-landscape-design-09042-Showroom-03.jpg', '25'),
(150, 'dsx85i_Banan-Egypt-Interior-architecture-landscape-design-09042-Showroom-04.jpg', '25'),
(151, 'oNbnsW_Banan-Egypt-Interior-architecture-landscape-design-16004-Hospital-01.jpg', '50'),
(152, 'q63tyD_Banan-Egypt-Interior-architecture-landscape-design-16004-Hospital-02.jpg', '50'),
(153, 'VW1ptw_Banan-Egypt-Interior-architecture-landscape-design-16004-Hospital-03.jpg', '50'),
(154, 'uDVLsn_Banan-Egypt-architecture-interior-landscape-design-10030-office-building-01.jpg', '51'),
(155, 'OiN2wa_Banan-Egypt-architecture-interior-landscape-design-10030-office-building-02.jpg', '51'),
(156, 'riozvj_Banan-Egypt-architecture-interior-landscape-design-11003-office-building-01.jpg', '52'),
(157, 'a5OJbZ_Banan-Egypt-architecture-interior-landscape-design-11003-office-building-51.jpg', '53'),
(158, 'eb6coG_Banan-Egypt-architecture-interior-landscape-design-11011-office-building-01.jpg', '54'),
(159, 'mREN12_Banan-Egypt-architecture-interior-landscape-design-12020 -court-office-01.jpg', '13'),
(160, '5C5FeW_Banan-Egypt-architecture-interior-landscape-design-12020 -court-office-01.jpg', '18'),
(161, 'f8dzO1_Banan-Egypt-architecture-interior-landscape-design-12020 -court-office-alt01-02.jpg', '55'),
(162, 'gdfuby_Banan-Egypt-architecture-interior-landscape-design-12021-office-01.jpg', '56'),
(163, 'LcacPG_Banan-Egypt-architecture-interior-landscape-design-13027-office-00.jpg', '57'),
(164, 'tIxTV4_Banan-Egypt-architecture-interior-landscape-design-12021-office-02.jpg', '56'),
(165, 'FsjhTm_14011-alt02-07.jpg', '29'),
(166, '2kRl5o_Banan-Egypt-architecture-interior-landscape-design-15012-office-01.jpg', '58'),
(167, 'YJqoHn_Banan-Egypt-architecture-interior-landscape-design-15012-office-02.jpg', '58'),
(168, 'awRwSk_Banan-Egypt-architecture-interior-landscape-design-Viva Bahria-Tower-01.jpg', '27'),
(169, 'D2hFv3_Banan-Egypt-architecture-interior-landscape-design-Judges-Tower-00.jpg', '28'),
(170, 'sC077P_Banan-Egypt-architecture-interior-landscape-design-El Rehab-restaurant-01.jpg', '32'),
(171, 'MNRZDr_Banan-Egypt-architecture-interior-landscape-design-Beach-restaurant-01.jpg', '33'),
(172, 'p4yc2P_Banan-Egypt-architecture-interior-landscape-design-Beach-restaurant-02.jpg', '33'),
(173, 'cmhl9K_Banan-Egypt-architecture-interior-landscape-design-15008-01.jpg', '31'),
(174, 'a7swjn_Banan-Egypt-architecture-interior-landscape-design-15008-03.jpg', '31'),
(175, 'amcfyE_Banan-Egypt-architecture-interior-landscape-design-15008-04.jpg', '31'),
(176, 'oBXRvT_Banan-Egypt-architecture-interior-landscape-design-15020-office-01.jpg', '30'),
(177, 'NSjvmO_Banan-Egypt-architecture-interior-landscape-design-10022-mosque-01.jpg', '59'),
(178, 'HBXuuf_Banan-Egypt-architecture-interior-landscape-design-10005-mosque-01.jpg', '60'),
(179, 'ZqTPoJ_Banan-Egypt-architecture-interior-landscape-design-12019-new_cairo-mosque-01.jpg', '61'),
(180, 'HcKdWy_Banan-Egypt-architecture-interior-landscape-design-12019-new_cairo-mosque-02.jpg', '61'),
(181, 'mITNmV_Banan-Egypt-architecture-interior-landscape-design-Al arkam-mosque-01.jpg', '62'),
(182, 'OxunwG_Banan-Egypt-architecture-interior-landscape-design-08002-Resort-01.jpg', '63'),
(183, 'Xa5sL2_Banan-Egypt-architecture-interior-landscape-design-08002-Resort-02.jpg', '63'),
(184, 'f4qd02_Banan-Egypt-architecture-interior-landscape-design-10001-compound-01.jpg', '64'),
(185, 'H7Vxv4_Banan-Egypt-architecture-interior-landscape-design-10035-Hotels-01.jpg', '65'),
(186, '6AKjWv_Banan-Egypt-architecture-interior-landscape-design-10035-Hotels-02.jpg', '65'),
(187, '2o2zql_Banan-Egypt-architecture-interior-landscape-design-10035-Hotels-alt02-01.jpg', '66'),
(188, '4GOGjG_Banan-Egypt-architecture-interior-landscape-design-10035-Hotels-alt02-02.jpg', '66'),
(189, 'DKMnJg_Banan-Egypt-architecture-interior-landscape-design-10035-Hotels-alt02-03.jpg', '66'),
(190, 'FBBPPD_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-01.jpg', '67'),
(191, 'FhwweW_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-02.jpg', '67'),
(192, 'Gxj200_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-alt.01-01.jpg', '68'),
(193, '408Xfn_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-alt.01-02.jpg', '68'),
(194, 'mIbEaL_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-alt.02-01.jpg', '69'),
(195, 'WNZCJr_Banan-Egypt-architecture-interior-landscape-design-10036-Hotels-alt.02-02.jpg', '69'),
(196, 'qxx2oI_Banan-Egypt-architecture-interior-landscape-design-12002-Hotels-01.jpg', '70'),
(197, 'ICzt7F_Banan-Egypt-architecture-interior-landscape-design-12010-Hotel-01.jpg', '71'),
(198, 'D73Lhd_Banan-Egypt-architecture-interior-landscape-design-12010-Hotel-02.jpg', '71'),
(199, 'IF10se_Banan-Egypt-architecture-interior-landscape-design-13023-Hotel-01.jpg', '72'),
(200, 'ORu7Qq_Banan-Egypt-architecture-interior-landscape-design-13023-Hotel-02.jpg', '72'),
(201, 'ujRFv7_Banan-Egypt-architecture-interior-landscape-design-13023-Hotel-03.jpg', '72'),
(202, 'ifjUr4_Banan-Egypt-architecture-interior-landscape-design-14017-Compound-01.jpg', '73'),
(203, 'WSKqao_Banan-Egypt-architecture-interior-landscape-design-14017-Compound-02.jpg', '73'),
(204, 'GJuFgk_Banan-Egypt-architecture-interior-landscape-design-14025-Compound-01.jpg', '74'),
(205, 'kf9KUO_Banan-Egypt-architecture-interior-landscape-design-14025-Compound-02.jpg', '74'),
(206, 'NQqM6Y_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-01.jpg', '75'),
(207, 'gLzS4i_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-02.jpg', '75'),
(208, 'ZoBcPl_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-03.jpg', '75'),
(209, 'BqTre6_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-01.jpg', '76'),
(210, 'JokM6X_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-02.jpg', '76'),
(211, 'ceV3rE_Banan-Egypt-architecture-interior-landscape-design-North_coast-hotel-03.jpg', '76'),
(212, 'ANsrZS_Banan-Egypt-Interior-architecture-landscape-design-11003-Hospital-00.jpg', '77'),
(213, 'H7WLBw_Banan-Egypt-Interior-architecture-landscape-design-11003-Hospital-01.jpg', '77'),
(214, 'TUt3DM_Banan-Egypt-Interior-architecture-landscape-design-10002-Showroom-01.jpg', '78'),
(215, 'cBooEY_Banan-Egypt-Interior-architecture-landscape-design-10002-Showroom-02.jpg', '78'),
(216, 'tQR7MX_Banan-Egypt-Interior-architecture-landscape-design-09047-Reception-01.jpg', '79'),
(217, '4CRJND_Banan-Egypt-Interior-architecture-landscape-design-09047-Reception-02.jpg', '79'),
(218, 'SjFekU_Banan-Egypt-Interior-architecture-landscape-design-11012-Living-room-02.jpg', '80'),
(219, 'L2ZtWs_Banan-Egypt-Interior-architecture-landscape-design-11012-Living-room-03.jpg', '80'),
(220, 'ucS5w0_Banan-Egypt-Interior-architecture-landscape-design-10032-Bedroom-01.jpg', '81'),
(221, 'TmMzwv_Banan-Egypt-Interior-architecture-landscape-design-10032-Bedroom-02.jpg', '81'),
(222, 'jhgfPX_Banan-Egypt-Interior-architecture-landscape-design-12006-Dining-room-01.jpg', '82'),
(223, 'kA0NU6_Banan-Egypt-Interior-architecture-landscape-design-12006-Dining-room-02.jpg', '82'),
(224, 'ihUPxw_Banan-Egypt-Interior-architecture-landscape-design-10032-kids-room-01.jpg', '83'),
(225, '0zKKxG_2013-12-21_ja-jp10656838815_e3808ce382a2e383abe382bfe383a2e383b3e38388e383b.jpg', '84'),
(226, 'qx4mie_24323015c741560301f418a3d6b5f7e4.jpg', '85'),
(227, 'LzKsQA_if_user1_49390 (1).png', '86'),
(228, 'bzzy8N_01.jpg', '86'),
(229, 'ptXmL1_02.jpg', '86'),
(230, 'w21qiw_Test-Logo.svg.png', '87'),
(231, 'R0ig6r_Toshiba-Logo.png', '87'),
(232, '5FEyDm_unnamed.png', '87'),
(233, 'C2m0a4_XVFX76_01.jpg', '87'),
(234, 'ybhR0q_111.jpg', '88'),
(235, '9jbMCG_hyscai71_shreltahrir_015013bbe583a72a857d1659f.jpg', '88'),
(236, 'PKaaby_slide5.jpg', '88');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `ar_title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`, `ar_title`) VALUES
(1, 'Admin', 'أدمن'),
(2, 'client', 'عميل');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `desc` text NOT NULL,
  `photo` text NOT NULL,
  `photo_alt` text NOT NULL,
  `button` text NOT NULL,
  `button_url` text NOT NULL,
  `status` int(11) NOT NULL,
  `ar_title` text,
  `ar_subtitle` text,
  `ar_desc` text,
  `ar_photo_alt` text,
  `ar_button` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `subtitle`, `desc`, `photo`, `photo_alt`, `button`, `button_url`, `status`, `ar_title`, `ar_subtitle`, `ar_desc`, `ar_photo_alt`, `ar_button`) VALUES
(4, '', '', '', 'XVFX76_01.jpg', '', '', '', 1, '', '', '', '', ''),
(31, '', '', '', 'bqFHY9_02.jpg', '', '', '', 1, '', '', '', '', ''),
(34, '', '', '', 'YfiBwU_ourHistory_retina.jpg', '', '', '', 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'marwa@gmail.com'),
(2, 'marwa2@gmail.com'),
(3, 'marwa5@gmail.com'),
(4, 'nn@gmail.com'),
(5, 'ff@gmail.com'),
(6, 'btn@gmail.com'),
(7, 'dd@gmail.com'),
(8, 'ddd@gmail.com'),
(9, 'dff@gmail.com'),
(10, 'bb@gmail.com'),
(11, 'vvf@gmail.com'),
(12, 'hassan@mm4web.net'),
(13, 'mrjetorres@hotmail.com'),
(14, 'ndwaldo@yahoo.com'),
(15, 'hahn0081@umn.edu'),
(16, 'noleybaby30@aol.com'),
(17, 'ckpzn6@gmail.com'),
(18, 'noleybaby30@aol.com'),
(19, 'xavi.prince53@gmail.com'),
(20, 'jkeaquintero@yahoo.com'),
(21, 'naleenie159@yahoo.com'),
(22, 'bornonfifth@gmail.com'),
(23, 'nettielaster@comcast.net'),
(24, 'ndwaldo@yahoo.com'),
(25, 'thaliamalia@yahoo.com'),
(26, 'rglass11@aol.com'),
(27, 'bananakingy@hotmail.com'),
(28, 'henrynieves2002@yahoo.com'),
(29, 'aharris0703@gmail.com'),
(30, 'inkinc.be@gmail.com'),
(31, 'dani.diaz15@yahoo.com'),
(32, 'pudgie197826@yahoo.com'),
(33, 'mdinurmouth2@yahoo.com'),
(34, 'naomiespinoza@yahoo.com'),
(35, '540pto@gmail.com'),
(36, 'taylorwbyrd@yahoo.com'),
(37, 'abilleci@comcast.net'),
(38, 'wolfspider86@gmail.com'),
(39, 'thegroobsters@gmail.com'),
(40, 'thegroobsters@gmail.com'),
(41, 'shaunswanger@me.com'),
(42, 'jasonandjennifer@frontier.com'),
(43, 'jasonandjennifer@frontier.com'),
(44, 'steve.jarvis@shaw.ca'),
(45, 'amanda.nather@yahoo.com'),
(46, 'bryanduke123@gmail.com'),
(47, 'briidgett11@yahoo.com'),
(48, 'maryknollvicencio@yahoo.com'),
(49, 'thongdao@yahoo.com'),
(50, 'dnlmonkey@yahoo.com'),
(51, 'izabelleepapa@yahoo.com'),
(52, 'izabelleepapa@yahoo.com'),
(53, 'bondarenko.volodymyr@yahoo.co.uk'),
(54, 'lizabelleepapa@yahoo.com'),
(55, 'lizabelleepapa@yahoo.com'),
(56, 'izabelleepapa@yahoo.com'),
(57, 'chgfan21@yahoo.com'),
(58, 'jane.cantu86@gmail.com'),
(59, 'ndwaldo@yahoo.com'),
(60, 'chgfan21@yahoo.com'),
(61, 'nicu82@gmail.com'),
(62, 'floreseka@yahoo.com'),
(63, 'ivan@dimkovic.com'),
(64, 'keithdanielsmith616@gmail.com'),
(65, 'naleenie159@yahoo.com'),
(66, 'harlemtoni@aol.com'),
(67, 'datalafuse@yahoo.com'),
(68, 'rachelmbayer@gmail.com'),
(69, 'amanda.nather@yahoo.com'),
(70, 'jharpphoto@yahoo.com'),
(71, 'miaoer@yahoo.com'),
(72, 'normamenaged@hotmail.com'),
(73, 'leerobertdo@yahoo.com'),
(74, 'scottmyeilding@gmail.com'),
(75, 'andrew-fraser@hotmail.co.uk'),
(76, 'kevanhill21@aol.com'),
(77, 'soohoo_daniel@yahoo.com'),
(78, 'briannaashowerman@yahoo.com'),
(79, 'markwendellg@yahoo.com'),
(80, 'dsmith@smithtozian.com'),
(81, 'ariacomputersuk@gmail.com'),
(82, 'jeffcherry76@gmail.com'),
(83, 'buneears@aol.com'),
(84, 'rjberry@gmail.com'),
(85, 'normamenaged@hotmail.com'),
(86, 'fraczkiewiczoz61@hotmail.com'),
(87, 'dnlmonkey@yahoo.com'),
(88, 'thorne207@hotmail.com'),
(89, 'boyblu19@yahoo.com'),
(90, 'fraczkiewiczoz61@hotmail.com'),
(91, 'cbergeon@gmail.com'),
(92, 'henrynieves2002@yahoo.com'),
(93, 'stephanieg4579@yahoo.com'),
(94, 'mrjetorres@hotmail.com'),
(95, 'jnvmusa@yahoo.co.uk'),
(96, 'boyblu19@yahoo.com'),
(97, 'joeykc24@yahoo.com'),
(98, 'dofish79@hotmail.com'),
(99, 'riverviewelmonte@yahoo.com'),
(100, 'ayoungers@wi.rr.com'),
(101, 'taank714@yahoo.com'),
(102, 'normamenaged@hotmail.com'),
(103, 'griegoalberto@yahoo.com'),
(104, 'abuse@scryptmail.com'),
(105, 'clwilliams22@gmail.com'),
(106, 'imjudypooh@yahoo.com'),
(107, 'matt@ellispumps.com'),
(108, 'drkel3@gmail.com'),
(109, 'mmbenish@hotmail.com'),
(110, 'maria.kisel16@gmail.com'),
(111, 'courtneyhenryl@yahoo.com'),
(112, 'trazmussen@gmail.com'),
(113, 'support@scryptmail.com'),
(114, 'imjudypooh@yahoo.com'),
(115, 'cody.e.richardson@gmail.com'),
(116, 'maxime.lenglart@laposte.net'),
(117, 'ashtray510@gmail.com'),
(118, 'termite692@aol.com'),
(119, 'bamamommyx2@yahoo.com'),
(120, 'cody_oberlander@comcast.net'),
(121, 'spirit_lynx@hotmail.com'),
(122, 'ali.toto@hotmail.com'),
(123, 'joeykc24@yahoo.com'),
(124, 'griegoalberto@yahoo.com'),
(125, 'falimam2000@yahoo.com'),
(126, 'lilsweat5@yahoo.com'),
(127, 'otraylor22@gmail.com'),
(128, 'tylert777@yahoo.com'),
(129, 'k-ibarra@live.com'),
(130, 'ryanhoium@gmail.com'),
(131, 'lespesjulien33@gmail.com'),
(132, 'gklei214@gmail.com'),
(133, 'napoleonworx@gmail.com'),
(134, 'amazon@buydmi.com'),
(135, 'jalina.morgan@gmail.com'),
(136, 'flymeoverseas@yahoo.com'),
(137, 'mcswainchad@yahoo.com'),
(138, 'ethanlambert@cox.net'),
(139, 'ardweeda@gmail.com'),
(140, 'amandabo81@aol.com'),
(141, 'sugarbodylan@yahoo.com'),
(142, 'roberttoofer@gmail.com'),
(143, 'roberttoofer@gmail.com'),
(144, 'illusivesky@hotmail.com'),
(145, 'ernestoag2000@yahoo.com'),
(146, 'kaladeen@gmail.com'),
(147, 'digitalprismco@gmail.com'),
(148, 'g_trejo3@yahoo.com'),
(149, 'singingmomof6@prodigy.net'),
(150, 'marcelolucchese@gmail.com'),
(151, 'info@summitfamilydds.com'),
(152, 'dsterns77@gmail.com'),
(153, 'rjessica521@gmail.com'),
(154, 'aimeemariefireball@yahoo.com'),
(155, 'dougkibbleahc@gmail.com'),
(156, 'ttgric@hotmail.com'),
(157, 'jessphillipsforyardley@gmail.com'),
(158, 'rodolforios06@yahoo.com'),
(159, 'terry_sanders_jr@yahoo.com'),
(160, 'weatchley@golden-op.com'),
(161, 'gr8sc0ttsmn@gmail.com'),
(162, 'nilu_prasad12@yahoo.com'),
(163, 'kapashh2@gmail.com'),
(164, 'l_pogust@hotmail.com'),
(165, 'beeze50.sj@gmail.com'),
(166, 'kapashh2@gmail.com'),
(167, 'thosecrazyblondekids@yahoo.com'),
(168, 'gufy13@yahoo.com'),
(169, 'tv_person@yahoo.com'),
(170, 'amy.johannigman@gmail.com'),
(171, 'beeze50.sj@gmail.com'),
(172, 'damhestheman@yahoo.com'),
(173, 'marek_jenny@yahoo.com'),
(174, 'virginia_ik@yahoo.com'),
(175, 'debgateley@gmail.com'),
(176, 'mcswainchad@yahoo.com'),
(177, 'ipharrison@gmail.com'),
(178, 'sandra.white2008@hotmail.co.uk'),
(179, 'marynuplace@yahoo.com'),
(180, 'wazimumingi@hotmail.com'),
(181, 'slg4007@yahoo.com'),
(182, 'tthib78@gmail.com'),
(183, 'n2hairnmakeup@yahoo.com'),
(184, 'hisam4479697@yahoo.com'),
(185, 'sales@betstco.com'),
(186, 'huskeyhoss@yahoo.com'),
(187, 'butterscoke@gmail.com'),
(188, 'wellsgbw3@yahoo.com'),
(189, 'tahnie.boggess@yahoo.com'),
(190, 'dianegma1@yahoo.com'),
(191, 'max.hinson@yahoo.com'),
(192, 'autohausentinc@msn.com'),
(193, 'kapashh2@gmail.com'),
(194, 'cmasco2@gmail.com'),
(195, 'dochines1@yahoo.com'),
(196, 'trinh_nguyen15@yahoo.com'),
(197, 'virginia_ik@yahoo.com'),
(198, 'chharvey@gmail.com'),
(199, 'couturetj@gmail.com'),
(200, 'korneeva.irina@gmail.com'),
(201, 'pbova@yahoo.com'),
(202, 'timagaming1995@gmail.com'),
(203, 'babykilo3307@yahoo.com'),
(204, 'diirock@aol.com'),
(205, 'pbutts2u@gmail.com'),
(206, 'bard097@yahoo.com'),
(207, 'charlie.palmer9@gmail.com'),
(208, 'davidlevycohen@yahoo.com'),
(209, 'jlanderson.1939@gmail.com'),
(210, 'mark.chuter.1@nomura.com'),
(211, 'kalabt0402@yahoo.com'),
(212, 'bhenlyshyn@yahoo.com'),
(213, 'dsolo75492@aol.com'),
(214, 'beckjer777@yahoo.com'),
(215, 'accountspayable@godaddy.com'),
(216, 'misternat1@cox.net'),
(217, 'pbova@yahoo.com'),
(218, 'wangxuwzj@gmail.com'),
(219, 'jcnewman54@yahoo.com'),
(220, 'pkangues@yahoo.com'),
(221, 'tgraydon0311@yahoo.com'),
(222, 'mpg916@hotmail.com'),
(223, 'mpg916@hotmail.com'),
(224, 'dustin_eagans@yahoo.com'),
(225, 'sumgui05@yahoo.com'),
(226, 'cvanco21@gmail.com'),
(227, 'jpatrickwalker@rocketmail.com'),
(228, 'thip_june19@yahoo.com'),
(229, 'moondaddy@hotmail.co.uk'),
(230, 'akb@thebrenners.com'),
(231, 'cgates20@yahoo.com'),
(232, 'tashateesdale11@hotmail.co.uk'),
(233, 'trish.carroll@gmail.com'),
(234, 'erika.kirschner@yahoo.com'),
(235, 'kdrobins_99@yahoo.com'),
(236, 'antsqueezy07@gmail.com'),
(237, 'tyronejohnson77@yahoo.com'),
(238, 'jesusrules8478@gmail.com'),
(239, 'gino@ginosmarket.com'),
(240, 'dipisx@gmail.com'),
(241, 'craziboi817@yahoo.com'),
(242, 'nkatko@tenmast.com'),
(243, 'salazar_slytherin10@yahoo.com'),
(244, 'sylkekeymer@googlemail.com'),
(245, 'janet.crawford64@hotmail.com'),
(246, 'cassandra.ault@gmail.com'),
(247, 'lafaunce@juno.com'),
(248, 'lindsay.cachia@gmail.com'),
(249, 'm.novotny@auroragasllc.com'),
(250, 'paudenino@windyhillranch.com'),
(251, 'pcabello6134@yahoo.com'),
(252, 'amendolia2016@gmail.com'),
(253, 'hiplikeoldspice@yahoo.com'),
(254, 'z33per.orders@yandex.com'),
(255, 'bobgalik@gmail.com'),
(256, 'traneamaro@gmail.com'),
(257, 'leighlisa@hotmail.com'),
(258, 'johnlee310@yahoo.com'),
(259, 'timmeh.chan@gmail.com'),
(260, 'kelrock@gmail.com'),
(261, 'jessica.johnson73@yahoo.com'),
(262, 'traneamaro@gmail.com'),
(263, 'lordvadyr@gmail.com'),
(264, 'info@spc.rs'),
(265, 'chef.ruthcohen@gmail.com'),
(266, 'ntchdesportes5@gmail.com'),
(267, 'brilliance2spare@gmail.com'),
(268, 'dvk.moderators@gmail.com'),
(269, 'angelosabatini24@gmail.com'),
(270, 'einfachnurdermarc@gmail.com'),
(271, 'einfachnurdermarc@gmail.com'),
(272, 'yxue618@yahoo.com'),
(273, 'gb_renz@yahoo.com'),
(274, 'kenneqn@yahoo.com'),
(275, 'acagle@iconhealthservice.com'),
(276, 'rhodippe@gmail.com'),
(277, 'jamesnandory@yahoo.com'),
(278, 'ddecicco3939@gmail.com'),
(279, 'rkhill28@gmail.com'),
(280, 'jdgstat@yahoo.com'),
(281, 'romero.hill@gmail.com'),
(282, 'tristan.castle15@yahoo.com'),
(283, 'gilani65@yahoo.com'),
(284, 'shanahanlon@yahoo.com'),
(285, 'accounting@ibisbayresort.com'),
(286, 'denis.gingras@usherbrooke.ca'),
(287, 'jillharter@rustywallis.com'),
(288, 'sjacques1020@yahoo.com'),
(289, 'tjarnold_94@yahoo.com'),
(290, 'bryand133@gmail.com'),
(291, 'bjmoses5@gmail.com'),
(292, 'roxann925@gmail.com'),
(293, 'rafaanda2@gmail.com'),
(294, 'lamuymuychic@yahoo.com'),
(295, 'cattyerb85@gmail.com'),
(296, 'ssvols@yahoo.com'),
(297, 'p_durnell@yahoo.com'),
(298, 'mlowder71@yahoo.com'),
(299, 'matt_ambos@yahoo.com'),
(300, 'vans122992@yahoo.com'),
(301, 'ccb47@yahoo.com'),
(302, 'nicolettehc@yahoo.com'),
(303, 'rgatward@yahoo.com'),
(304, 'rileyrays@yahoo.com'),
(305, 'paul.chahine.11@gmail.com'),
(306, 'ces1948@yahoo.com'),
(307, 'fesprang@yahoo.com'),
(308, 'cyngar21@yahoo.com'),
(309, 'tim21cz@yahoo.com'),
(310, 'tnhek@yahoo.com'),
(311, 'thesfmint@gmail.com'),
(312, 'ussfreight@yahoo.com'),
(313, 'bartlyc@gmail.com'),
(314, 'rebelrose897@gmail.com'),
(315, 'wcurnow@gmail.com'),
(316, 'ashleycox622@gmail.com'),
(317, 'bartlyc@gmail.com'),
(318, 'emmakdowning@gmail.com'),
(319, 'jclemovich@gmail.com'),
(320, 'janblettner@yahoo.com'),
(321, 'zavandr@yahoo.com'),
(322, 'jerry.packard@gmail.com'),
(323, 'sdkopald@gmail.com'),
(324, 'geraldlam05@yahoo.com'),
(325, 'amanda.aylmer@gmail.com'),
(326, 'aka262@gmail.com'),
(327, 'bob@rdgourley.com'),
(328, 'rsolares1@yahoo.com'),
(329, 'packerman@maxcessintl.com'),
(330, 'press@airbnb.com'),
(331, 'chinoisfreecrew@yahoo.com'),
(332, 'charlie@visionquestranch.com'),
(333, 'dwill0214@yahoo.com'),
(334, 'dwill0214@yahoo.com'),
(335, 'wonderdawg@satx.rr.com'),
(336, 'marty_belton@yahoo.com'),
(337, 'jeanssk8@comcast.net'),
(338, 'predator3@gmx.us'),
(339, 'gmaliyil@yahoo.com'),
(340, 'aqua58@att.net'),
(341, 'vicky_kalmykova@yahoo.com'),
(342, 'rdtalsky@yahoo.com'),
(343, 'dezra@dae-co.com'),
(344, 'tr4nqued@gmail.com'),
(345, 'mscarano4@gmail.com'),
(346, 'cakamarinkovic@gmail.com'),
(347, 'tkpsmail@yahoo.com'),
(348, 'hannah.nguyen2014@gmail.com'),
(349, 'fenyastrpr@gmail.com'),
(350, 'cliese@foothillsurologypc.com'),
(351, 'alexgusevadv@gmail.com'),
(352, 'humanresources@entertainmentcruises.com'),
(353, 'anglersmarine13@gmail.com'),
(354, 'guronjory@yahoo.com'),
(355, 'zl.2004@gmail.com'),
(356, 'zl.2004@gmail.com'),
(357, 'dozure@gmail.com'),
(358, 'csu0112@gmail.com'),
(359, 'nicolegoremua@yahoo.com'),
(360, 'nicolegoremua@yahoo.com'),
(361, 'angelamd.mathews@gmail.com'),
(362, 'arcilanjc@gmail.com'),
(363, 'vu.andersen@free.fr'),
(364, 'arcilanjc@gmail.com'),
(365, 'john@bananaconnection.co.uk'),
(366, 'mattkohel@yahoo.com'),
(367, 'nogueira.fernando@wanadoo.fr'),
(368, 'braucherjeff@yahoo.com'),
(369, 'pnicosia08@gmail.com'),
(370, 'drandrewj@gmail.com'),
(371, 'locadelic@gmail.com'),
(372, 'gahourcade@yahoo.com'),
(373, 'elbmur@yahoo.com'),
(374, 'hannah.willson1@dwp.gsi.gov.uk'),
(375, 'debrik@yahoo.com'),
(376, 'jlevicox2004@yahoo.com'),
(377, 'clarkegoodven2@gmail.com'),
(378, 'gahourcade@yahoo.com'),
(379, 'elka@raved.us'),
(380, 'gahourcade@yahoo.com'),
(381, 'mkuklis@gmail.com'),
(382, 'lespesjulien33@gmail.com'),
(383, 'kobiegarvin@yahoo.com'),
(384, 'luis@buildnetinc.com'),
(385, 'sta60153@yahoo.com'),
(386, 'harvey0646@yahoo.com'),
(387, 'chasitielindsay@yahoo.com'),
(388, 'tridjen@yahoo.com'),
(389, 'erin14white@yahoo.com'),
(390, 'tabathadrengson@gmail.com'),
(391, 'sta60153@yahoo.com'),
(392, 'joshua_egged@yahoo.com'),
(393, 'mrobertrn@gmail.com'),
(394, 'tireskid@yahoo.com'),
(395, 'yeongrace.lee@gmail.com'),
(396, 'shaggydoo29@yahoo.com'),
(397, 'gahourcade@yahoo.com'),
(398, 'jeremy.s.bower@gmail.com'),
(399, 'sanime@rocketmail.com'),
(400, 'jplanger@gmail.com'),
(401, 'mthewordsmith@verizon.net'),
(402, 's-routh@att.net'),
(403, 'leakeyroof@yahoo.com'),
(404, 'phatcat41@yahoo.com'),
(405, 'burpinkitty@att.net'),
(406, 'orystkunka@yahoo.com'),
(407, 'chadkennedy13@att.net'),
(408, 'orystkunka@yahoo.com'),
(409, 'rebecca@nonplusultrainc.com'),
(410, 'elranas33@gmail.com'),
(411, 'ryan@nonplusultrainc.com'),
(412, 'j5gamez@yahoo.com'),
(413, 'linzmayer20@yahoo.com'),
(414, 'phatcat41@yahoo.com'),
(415, 'rockonandrea@gmail.com'),
(416, 'mandie025@yahoo.com'),
(417, 'twomanyhondas@yahoo.com'),
(418, 'steve.sharlee@yahoo.com'),
(419, 'rsvp@theempireroomsf.com'),
(420, 'cocorios482@gmail.com'),
(421, 'mtinetti@gmail.com'),
(422, 'zmajdan@gmail.com'),
(423, 'newsletter@ewf.no'),
(424, 'cynthiahosnedl@bellsouth.net'),
(425, 'gibber1956@gmail.com'),
(426, '7739887958@vtext.com'),
(427, '6145953715@txt.att.net'),
(428, 'emkaryerli@gmail.com'),
(429, 'jeremysgage@gmail.com'),
(430, 'stryker.leah@gmail.com'),
(431, 'yeongrace.lee@gmail.com'),
(432, 'angelavieth@yahoo.com'),
(433, 'ryanleeblackman@gmail.com'),
(434, 'mcray1970@yahoo.com'),
(435, 'mareike_mohr@gmx.de'),
(436, 'danielle.basquitt@gmx.de'),
(437, 'gibbiceps00@yahoo.de'),
(438, 'mecsfive@yahoo.com'),
(439, '6145824024@vtext.com'),
(440, 'gibbiceps00@yahoo.de'),
(441, 'alvaro_interiano@yahoo.com'),
(442, 'csmith@smithtrialgroup.com'),
(443, 'dave@pier70partners.com'),
(444, 'sharyn_gonzales@yahoo.com'),
(445, 'marina_kawagishi@yahoo.com'),
(446, 'brittachristina@gmx.de'),
(447, 'whitmorejeff@gmail.com'),
(448, 'ice060600@yahoo.com'),
(449, 'zmajdan@gmail.com'),
(450, 'ddato747@gmail.com'),
(451, 'alvaro_interiano@yahoo.com'),
(452, 'ashleyyuenkel24@yahoo.com'),
(453, 'ashleyyuenkel24@yahoo.com'),
(454, 'marinak@gmail.com'),
(455, 'avborders@gmail.com'),
(456, 'besthealth10@gmail.com'),
(457, 'amazon@plasticpartsinc.com'),
(458, 'polostorys@naver.com'),
(459, 'naturalbest2468@gmail.com'),
(460, 'marinak@gmail.com'),
(461, 'marinak@gmail.com'),
(462, 'caka.marinkovic@gmail.com'),
(463, 'workmail90210@yahoo.com'),
(464, 'jimpc313@gmail.com'),
(465, 'naturalbest2468@gmail.com'),
(466, 'dkluth@gmail.com'),
(467, 'ace43s69@gmail.com'),
(468, 'meme760@comcast.net'),
(469, 'moranoslimo@yahoo.com'),
(470, 'marinak@gmail.com'),
(471, 'thesfmint@gmail.com'),
(472, 'marinak@gmail.com'),
(473, 'misenv@yahoo.com'),
(474, 'sdgrimes@yahoo.com'),
(475, 'lilsweepr@gmail.com'),
(476, 'bangell4@yahoo.com'),
(477, 'misenv@yahoo.com'),
(478, 'adolfoaybar134@gmail.com'),
(479, 'mecsfive@yahoo.com'),
(480, 'bangell4@yahoo.com'),
(481, 'adolfoaybar134@gmail.com'),
(482, 'alexandervides.64@gmail.com'),
(483, 'tgroene@gmail.com'),
(484, 'frschuck@gmail.com'),
(485, 'allearsnick@yahoo.co.uk'),
(486, 'stefan_francis78@yahoo.com'),
(487, 'thomasmorris12@yahoo.com'),
(488, 'ashokmanani@gmail.com'),
(489, 'thomasmorris12@yahoo.com'),
(490, 'gkouvaras@gmail.com'),
(491, 'keaganmichael0331@gmail.com'),
(492, 'indioromero@gmail.com'),
(493, 'wmeadowsmd@comcast.net'),
(494, 'staffen142@yahoo.com'),
(495, 'vardan1958@gmail.com'),
(496, 'abuse@chase.com'),
(497, 'obatsakitkepala@yahoo.com'),
(498, 'moose1942@gmail.com'),
(499, 'kasimsmith@gmail.com'),
(500, 'vardan1958@gmail.com'),
(501, 'vardan1958@gmail.com'),
(502, 'kailani.hawk@gmail.com'),
(503, 'resefix@yahoo.com'),
(504, 'account.enable@airbnb.com'),
(505, 'daigledale@yahoo.com'),
(506, 'apost9504@yahoo.com'),
(507, 'nickbluc@yahoo.com'),
(508, 'rtgreenejr@embarqmail.com'),
(509, 'jeredpatt@yahoo.com'),
(510, 'd_wrede@yahoo.com'),
(511, 'patrick.ball@tema.toyota.com'),
(512, 'sflorensia@yahoo.com'),
(513, 'nasimzee@gmail.com'),
(514, 'matt_peifer@yahoo.com'),
(515, 'hjd1404@online.de'),
(516, 'kohr40@yahoo.com'),
(517, 'jessicamoris3@gmail.com'),
(518, 'margaretorbon@gmail.com'),
(519, 'johnson.jessica806@gmail.com'),
(520, 'johnson.jessica806@gmail.com'),
(521, 'cheredi@yahoo.com'),
(522, 'debkana@yahoo.com'),
(523, 'tim21cz@yahoo.com'),
(524, 'michelle3350@att.net'),
(525, 'odelljg3577@yahoo.com'),
(526, 'nealmcgough@gmail.com'),
(527, 'bradpitt119@gmail.com'),
(528, 'lorieasley@yahoo.com'),
(529, 'dhicks@princecreek.com'),
(530, 'saritgabay@yahoo.com'),
(531, 'tina32_23@yahoo.com'),
(532, 'reyes1858@sbcglobal.net'),
(533, 'davidpaul.griffin@gmail.com'),
(534, 'odelljg3577@yahoo.com'),
(535, 'tony@americanspeedcenter.com'),
(536, 'asnyda85@yahoo.com'),
(537, 'inquiry@airbnb.com'),
(538, 'adrianaphillips08@gmail.com'),
(539, 'kentyler1255@gmail.com'),
(540, 'ryanriesterer1@yahoo.com'),
(541, 'ryanriesterer1@yahoo.com'),
(542, 'ashlionsky@gmail.com'),
(543, 'bptownsend@yahoo.com'),
(544, 'asnyda85@yahoo.com'),
(545, 'robert9241@sbcglobal.net'),
(546, 'timems2001@yahoo.com'),
(547, 'bsireland@sasktel.net'),
(548, 'bptownsend@yahoo.com'),
(549, 'rencarnacion03@gmail.com'),
(550, 'allen76137@yahoo.com'),
(551, 'rbumbolo1@twcny.rr.com'),
(552, 'donations@agapeflh.org'),
(553, 'zhangjy0701@gmail.com'),
(554, 'kellyanne.marta@yahoo.com'),
(555, 'daviesimmons@gmail.com'),
(556, 'indioromero@gmail.com'),
(557, 'andrea.kittrell@gmail.com'),
(558, 'julieanndavison@yahoo.com'),
(559, 'kholmes01@yahoo.com'),
(560, 'namesnotsusan@yahoo.com'),
(561, 'ariona05@yahoo.com'),
(562, 'vonderamy@gmail.com'),
(563, 'imagenefreeman@yahoo.com'),
(564, 'indioromero@gmail.com'),
(565, 'niekque@yahoo.com'),
(566, 'lisabell347@yahoo.com'),
(567, 'btjensen1@gmail.com'),
(568, 'eddie_coppola@yahoo.com'),
(569, 'rtp8806444@gmail.com'),
(570, 'julieanndavison@yahoo.com'),
(571, 'c_comfor@bellsouth.net'),
(572, 'ladywynn@gmail.com'),
(573, 'allen76137@yahoo.com'),
(574, 'jdaylpn@yahoo.com'),
(575, 'skydivechicago@yahoo.com'),
(576, 'mordeth2003@yahoo.com'),
(577, 'gregorys300@yahoo.com'),
(578, 'namesnotsusan@yahoo.com'),
(579, 'dorothyrickert@yahoo.com'),
(580, 'stephen5797@comcast.net'),
(581, 'capnquackenbush@gmail.com'),
(582, 'northern.paladin.smith@gmail.com'),
(583, 'mweihl@yahoo.com'),
(584, 'clientservices@paymate.com'),
(585, 'clientservices@paymate.com'),
(586, 'mvidaltillis@yahoo.com'),
(587, 'kara.marken@gmail.com'),
(588, 'vardan1958@gmail.com'),
(589, 'kara.marken@gmail.com'),
(590, 'vardan1958@gmail.com'),
(591, 'erinmdolan@gmail.com'),
(592, 'michaelwu@maxims.com.hk'),
(593, 'obatsakitkepala@yahoo.com'),
(594, 'capnquackenbush@gmail.com'),
(595, 'nathan.emley@gmail.com'),
(596, 'jas4loans@gmail.com'),
(597, 'gopal28@gmail.com'),
(598, 'gmueller@masusushiandrobata.com'),
(599, 'greatjobopp1@gmail.com'),
(600, 'ljmurray1@verizon.net'),
(601, 'melody@armatys.net'),
(602, 'wdobos@gmail.com'),
(603, 'jbisotti@gmail.com'),
(604, 'anhbho@yahoo.com'),
(605, 'texaspangie@yahoo.com'),
(606, 'amberklahn@yahoo.com'),
(607, 'jimgreen@pacbell.net'),
(608, 'mak.field.services@gmail.com'),
(609, 'theresa.karl1@gmx.de'),
(610, 'camilenicole@yahoo.com'),
(611, 'theresa.karl1@gmx.de'),
(612, 'davidpbecker@yahoo.com'),
(613, 'jbisotti@gmail.com'),
(614, 'poole.suzanne@gmail.com'),
(615, 'info@ysreading.co.jp'),
(616, 'all@ysreading.co.jp'),
(617, 'debbgoldy@gmail.com'),
(618, 'aishweryarc@gmail.com'),
(619, 'blueboy84wr@gmail.com'),
(620, 'wiredgrl357@yahoo.com'),
(621, 'wiredgrl357@yahoo.com'),
(622, 'gilani65@yahoo.com'),
(623, 'krassdirk@gmail.com'),
(624, 'njrose066@gmail.com'),
(625, 'adolfographics@gmail.com'),
(626, 'karicochranis@yahoo.com'),
(627, 'mbrown14@gmail.com'),
(628, 'haley.shepherd@gmail.com'),
(629, 'everettc.16@gmail.com'),
(630, 'adolfographics@gmail.com'),
(631, 'cbartomeyer@yahoo.com'),
(632, 'jenniferdinapoli@yahoo.com'),
(633, 'popdiva25@yahoo.com'),
(634, 'mvidaltillis@yahoo.com'),
(635, 'jordan@fredericktang.com'),
(636, 'tlcampbell88@gmail.com'),
(637, 'cwysong85@gmail.com'),
(638, 'adolfographics@gmail.com'),
(639, 'gclendi@gmail.com'),
(640, '7024966446@cox.net'),
(641, 'apexcorp@yahoo.com'),
(642, 'dalsora68@gmail.com'),
(643, 'justinmcleod@gmail.com'),
(644, 'danboy53@yahoo.com'),
(645, 'danboy53@yahoo.com'),
(646, 'esmasus@gmail.com'),
(647, 'lucyxmc@yahoo.com'),
(648, 'danboy53@yahoo.com'),
(649, 'davidpbecker@yahoo.com'),
(650, 'annkj1975@yahoo.com'),
(651, 'tllewop@gmail.com'),
(652, 'theshaughnessey@gmail.com'),
(653, 'toddhammer623@yahoo.com'),
(654, 'wilets@yahoo.com'),
(655, 'coffee_v@yahoo.com'),
(656, 'kellyesmith1@yahoo.com'),
(657, 'davidpbecker@yahoo.com'),
(658, 'j.notary09@gmail.com'),
(659, 'lumbee_14@yahoo.com'),
(660, 'dalsora68@gmail.com'),
(661, 'jeniferlynwilliams@yahoo.com'),
(662, 'jenniferdinapoli@yahoo.com'),
(663, 'thomasjim7896@yahoo.com'),
(664, 'jim.andeway@gmail.com'),
(665, 'erickson.keith.d@gmail.com'),
(666, 'mcr111@comcast.net'),
(667, 'brettman71@gmail.com'),
(668, 'angelicadsnchz@gmail.com'),
(669, 'erinmdolan@gmail.com'),
(670, 'mmsands@gmail.com'),
(671, 'claygevans@yahoo.com'),
(672, 'jallenrandall@yahoo.com'),
(673, 'hbautista05@yahoo.com'),
(674, 'soundviewcropps@gmail.com'),
(675, 'carolynklinghoffer@gmail.com'),
(676, 'erinmdolan@gmail.com'),
(677, 'erinmdolan@gmail.com'),
(678, 't.cardona94@yahoo.com'),
(679, 'chip.hansel@gmail.com'),
(680, 'mikeandleanned@yahoo.com'),
(681, 'dysand523@yahoo.com'),
(682, 'lily.plum@gmail.com'),
(683, 'scottvandewiele@yahoo.com'),
(684, 'tkitas1@gmail.com'),
(685, 'lily.plum@gmail.com'),
(686, 'derlinstiles@gmail.com'),
(687, 'dupuisjosh@yahoo.com'),
(688, 'twigfanatic@gmail.com'),
(689, 'gizmochuck@gmail.com'),
(690, 'irma56274@yahoo.com'),
(691, 'ken.johnsson@gmail.com'),
(692, 'reyes1858@sbcglobal.net'),
(693, 'stefigar@gmail.com'),
(694, 'hr@adellford.com'),
(695, 'purdygarrett1996@yahoo.com'),
(696, 'bapeking7@gmail.com'),
(697, 'annasofia84@yahoo.com'),
(698, 'ccarbonel257@gmail.com'),
(699, 'erinmdolan@gmail.com'),
(700, 'jordan@nonplusultrainc.com'),
(701, 'erinmdolan@gmail.com'),
(702, 'erinmdolan@gmail.com'),
(703, 'bernaberivera@ymail.com'),
(704, 'artie1993@gmail.com'),
(705, 'camaromelt@gmail.com'),
(706, 'kelsey.segura@gmail.com'),
(707, 'hydraman1126@gmail.com'),
(708, 'csenn@cox.net'),
(709, 'hydraman1126@gmail.com'),
(710, 'pritishkamath1310@gmail.com'),
(711, 'pier70partners@gmail.com'),
(712, 'amandaraphael@gmail.com'),
(713, 'reeseweber@yahoo.com'),
(714, 'cmj.976@gmail.com'),
(715, 'amandaraphael@gmail.com'),
(716, 'khrisorrn@yahoo.com'),
(717, 'hating0loving@gmail.com'),
(718, 'lertin75@gmail.com'),
(719, 'tkim1123@yahoo.com'),
(720, 'brcutler@yahoo.com'),
(721, 'sudhakerxp@yahoo.com'),
(722, 'reeseweber@yahoo.com'),
(723, 'marinak@gmail.com'),
(724, 'rockonandrea@gmail.com'),
(725, 'pier70partners@gmail.com'),
(726, 'shayan.bakufan@gmail.com'),
(727, 'texaspangie@yahoo.com'),
(728, 'mvidaltillis@yahoo.com'),
(729, 'tlc1980@gmail.com'),
(730, 'capnquackenbush@gmail.com'),
(731, 'thesfmint@gmail.com'),
(732, 'elger.maryellen@gmail.com'),
(733, 'thesfmint@gmail.com'),
(734, 'sinapar99@gmail.com'),
(735, 'patirck.garney@nick.com'),
(736, 'deandipstick@yahoo.com'),
(737, 'ghostshipvolunteers@gmail.com'),
(738, 'brcutler@yahoo.com'),
(739, 'devynlmcnichol@gmail.com'),
(740, 'shaneltaylor@gmail.com'),
(741, 'marcelolucchese@gmail.com'),
(742, 'alifromrihan@yahoo.com'),
(743, 'kirtisarin@gmail.com'),
(744, 'mswan@ippt.ca'),
(745, 'bonillaquijano37@gmail.com'),
(746, 'hjkepcott@gmail.com'),
(747, 'dflore00@yahoo.com'),
(748, 'christina.espada@yahoo.com'),
(749, 'bartakbe@gmail.com'),
(750, 'stharley2000@yahoo.com'),
(751, 'cegolliday@yahoo.com'),
(752, 'pkoneil79@gmail.com'),
(753, 'handish2260@yahoo.com'),
(754, 'wayne@ltdaccounting.com'),
(755, 'crosell82@gmail.com'),
(756, 'jiezhang62@gmail.com'),
(757, 'george.martindale@yahoo.com'),
(758, 'deandipstick@yahoo.com'),
(759, 'jiezhang62@gmail.com'),
(760, 'eddie_coppola@yahoo.com'),
(761, 'tamdavis2@yahoo.com'),
(762, 'smithukusa@yahoo.com'),
(763, 'johningle@gmail.com'),
(764, 'info@sucuri.net'),
(765, 'linda_blackmore@yahoo.com'),
(766, 'maria.seidman@gmail.com'),
(767, 'jiezhang62@gmail.com'),
(768, 'maria.seidman@gmail.com'),
(769, 'maria.seidman@gmail.com'),
(770, 'linda_blackmore@yahoo.com'),
(771, 'ccmills8@gmail.com'),
(772, 'magmal377@yahoo.com'),
(773, 'kakman61b@gmail.com'),
(774, 'blarson24@gmail.com'),
(775, 'robert6512@gmail.com'),
(776, 'bmickey20@yahoo.com'),
(777, 'emmy.w.mccann@gmail.com'),
(778, 'jim@maryelle.com'),
(779, 'la.wappler@gmail.com'),
(780, 'steven465@centurytel.net'),
(781, 'lbrickert@yahoo.com'),
(782, 'hekim84@yahoo.com'),
(783, 'soc@sucuri.net'),
(784, 'joe_amma@yahoo.com'),
(785, 'jordanplanger@gmail.com'),
(786, 'support@leupay.eu'),
(787, 'support@leupay.eu'),
(788, 'rehmert@gmail.com'),
(789, 'goodmanlr75@yahoo.com'),
(790, 'hphung007@yahoo.com'),
(791, 'dunnin01@yahoo.ca'),
(792, 'hphung007@yahoo.com'),
(793, 'nygiantsnyyanks@gmail.com'),
(794, 'fungt350@yahoo.com'),
(795, 'timkin1948@yahoo.com'),
(796, 'cortesj1619@yahoo.com'),
(797, 'fishing4fun9292@gmail.com'),
(798, 'whitemorejeff@gmail.com'),
(799, 'whitemorejeff@gmail.com'),
(800, 'whitemorejeff@gmail.com'),
(801, 'pecorelf@gmail.com'),
(802, 'maznblu242@yahoo.com'),
(803, 'timhalltx@yahoo.com'),
(804, 'graham.anna@gmail.com'),
(805, 'jiezhang62@gmail.com'),
(806, 'pete@nonplusultrainc.com'),
(807, 'pappel@arnoldsfactory.com'),
(808, 'miager02@yahoo.com'),
(809, 'sethellisonswife@yahoo.com'),
(810, 'reccatinsley@gmail.com'),
(811, 'markghani@yahoo.com'),
(812, 'adrienne@adrienneabeyta.com'),
(813, 'amfalk@freenet.de'),
(814, 'cqueve1@gmail.com'),
(815, 'stefhain@gmail.com'),
(816, 'sj@bizdoc.com'),
(817, 'brittpress3@yahoo.com'),
(818, 'ljheckler@email.com'),
(819, 'shirleycoo@yahoo.com'),
(820, 'mackeybiag9@gmail.com'),
(821, 'elantravel@yahoo.com'),
(822, 'danielavideo@yahoo.com'),
(823, 'reginahen1956@gmail.com'),
(824, 'sailzone@yahoo.com'),
(825, 'midwestsports2015@gmail.com'),
(826, 'djgucci528@gmail.com'),
(827, 'rodpark73@yahoo.co.uk'),
(828, 'sasheridan@gmail.com'),
(829, 'ptaranekar@yahoo.com'),
(830, 'teddybrick2000@yahoo.com'),
(831, 'darrenbigd_2000@yahoo.com'),
(832, 'carriestark7@gmail.com'),
(833, 'msmall724@gmail.com'),
(834, 'jordan@nonplusultrainc.com'),
(835, 'yeseniaroman@yahoo.com'),
(836, 'boyd1986@yahoo.com'),
(837, 'inna.ortlieb@freenet.de'),
(838, 'trollmax@yahoo.com'),
(839, 'asharer@yahoo.com'),
(840, 'bruno.mercier@aleph-experts.com'),
(841, 'lima6395@yahoo.com'),
(842, 'muzungussebo@gmail.com'),
(843, 'rustybarrier@gmail.com'),
(844, 'hknirenberg@gmail.com'),
(845, 'duffus123@yahoo.com'),
(846, 'stephanie.l.barb@gmail.com'),
(847, 'marcelolucchese@gmail.com'),
(848, 'dabesman1@yahoo.com'),
(849, 'marcelolucchese@gmail.com'),
(850, 'anthony.livreri@gmail.com'),
(851, 'beverlycpage@gmail.com'),
(852, 'bgenido@yahoo.com'),
(853, 'doobs779@yahoo.com'),
(854, 'tddalmar@yahoo.com'),
(855, 'cathie.sachs@gmail.com'),
(856, 'kbarry2004@yahoo.com'),
(857, 'rayluke05@gmail.com'),
(858, 'artmiddleton8@gmail.com'),
(859, 'liviu-lucian@gmx.de'),
(860, 'aj4o@arrl.net'),
(861, 'rjm20853@gmail.com'),
(862, 'iprocess@expedia.com'),
(863, 'gdaugherty66@yahoo.com'),
(864, 'pinguinchen1@freenet.de'),
(865, 'snaveyma@gmail.com'),
(866, 'william.c.becham@gmail.com'),
(867, 'bmillen55@gmail.com'),
(868, 'mitchellstuckert@yahoo.com'),
(869, 'kellie.dumas@tennesseebook.com'),
(870, 'poconnor@yahoo.com'),
(871, 'sramirez2388@yahoo.com'),
(872, 'gomezmarcelo25@yahoo.com'),
(873, 'gomezmarcelo25@yahoo.com'),
(874, 'vanessa.zuniga@yahoo.com'),
(875, 'zetsuei18@yahoo.com'),
(876, 'davidmurphy99@yahoo.com'),
(877, 'zetsuei18@yahoo.com'),
(878, 'jimsadusky@yahoo.com'),
(879, 'jimsadusky@yahoo.com'),
(880, 'pete@nonplusultrainc.com'),
(881, 'lmo122890@gmail.com'),
(882, 'isholmes@sbcglobal.net'),
(883, 'jplanger@gmail.com'),
(884, 'artmiddleton8@gmail.com'),
(885, 'annfbriggs@yahoo.com'),
(886, 'insuranceplan@sbcglobal.net'),
(887, 'ben_mihovk@yahoo.com'),
(888, 'ralph.araujo@gmail.com'),
(889, 'marcguyader@wanadoo.fr'),
(890, 'sashidc@gmail.com'),
(891, 'zbzbell@gmail.com'),
(892, 'ljillard@yahoo.com'),
(893, 'angieworrall@yahoo.com'),
(894, 'j@nonplusultrainc.com'),
(895, 'matcichok@yahoo.fr'),
(896, '0xhresult@gmail.com'),
(897, 'tonnytran12000@yahoo.com'),
(898, 'howell_kavan@yahoo.com'),
(899, 'whl0929@gmail.com'),
(900, 'jsteinen19382@yahoo.com'),
(901, 'j@nonplusultrainc.com'),
(902, 'fisherma95@yahoo.com'),
(903, 'mlabovitz@gmail.com'),
(904, 'fiesi@gmx.de'),
(905, 'wrightc214@yahoo.com'),
(906, 'yvelichkin@gmail.com'),
(907, 'nslopresti@gmail.com'),
(908, 'earthspirit927@gmail.com'),
(909, 'yvishnevsky@gmail.com'),
(910, 'vidhyesh@gmail.com'),
(911, 'y.sovyak@gmail.com'),
(912, 'tenor86@sbcglobal.net'),
(913, 'chupatr@gmail.com'),
(914, 'martel.durham@yahoo.com'),
(915, 'tjkrause@yahoo.com'),
(916, 'astridsbrown@gmail.com'),
(917, 'pier70partners@gmail.com'),
(918, 'r_kelbert@yahoo.com'),
(919, 'i.dot.jufro@gmail.com'),
(920, 'jenniferdw@bellsouth.net'),
(921, 'countrygirl3031@ameritech.net'),
(922, 'jodavi2001@yahoo.com'),
(923, 'ddamevski@yahoo.com'),
(924, 'ddamevski@yahoo.com'),
(925, 'baldrati@gmail.com'),
(926, 'teddyguns@gmail.com'),
(927, 'sidney.l.white@gmail.com'),
(928, 'christopher.jf1970@gmail.com'),
(929, 'neal.mciver@gmail.com'),
(930, 'haithamshafey@yahoo.com'),
(931, 'neal.mciver@gmail.com'),
(932, 'hk_ku8475@yahoo.com'),
(933, 'lynnkennerly@yahoo.com'),
(934, 'jplanger@gmail.com'),
(935, 'razyrae@yahoo.com'),
(936, 'jermmy28@yahoo.com'),
(937, 'holzberg@sbcglobal.net'),
(938, 'sunderedstudios@yahoo.com'),
(939, 'melalite@gmail.com'),
(940, 'janene.sneider@gmail.com'),
(941, 'patti@themadpatter.com'),
(942, 'dlm@aopwater.com'),
(943, 'cawilsonco@att.net'),
(944, 'alina0576@gmail.com'),
(945, 'jmnewgent@gmail.com'),
(946, 'djpgreek@yahoo.com'),
(947, 'tony.huckaby54@gmail.com'),
(948, 'gfreedom99@gmail.com'),
(949, 'lionelharrisjr@yahoo.com'),
(950, 'changwoonjang@yahoo.com'),
(951, 'ac1dbl4ze@gmail.com'),
(952, 'jgorcoff@gmail.com'),
(953, 'i.dot.jufro@gmail.com'),
(954, 'noahcash161@gmail.com'),
(955, 'tpham5791@yahoo.com'),
(956, 'aramisoffical@gmail.com'),
(957, 'sandyzwygart@gmail.com'),
(958, 'rockonandrea@gmail.com'),
(959, 'jchapman@parkviewlearning.net'),
(960, 'amy.yoder17@gmail.com'),
(961, 'bboulting76@gmail.com'),
(962, 'sbroncales@gmail.com'),
(963, 'francotim@gmail.com'),
(964, 'tonybess75@yahoo.com'),
(965, 'raresblaga@yahoo.com'),
(966, 'djkrueger@gmail.com'),
(967, 'marianneluppino@yahoo.com'),
(968, 'mybedazzledtreasures@gmail.com'),
(969, 'nilda_60163@yahoo.com'),
(970, 'brehmrs@gmail.com'),
(971, 'georgewarreng@yahoo.com'),
(972, 'jsantop@gmail.com'),
(973, 's_martineza@yahoo.com'),
(974, 'cdinicolo@gmail.com'),
(975, 'bfrese@healthybuildings.com'),
(976, 'j.kleiman90@gmail.com'),
(977, 'ralphnmel@yahoo.com'),
(978, 'lori-spencer@comcast.net'),
(979, 'edwardespinoza1@att.net'),
(980, 'tammieconnor@gmail.com'),
(981, 'ladconner@yahoo.com'),
(982, 'jeff.m.acevedo@gmail.com'),
(983, 'bostonbudz@yahoo.com'),
(984, 'sand.and.surf.chic@gmail.com'),
(985, 'nsdq160th@gmail.com'),
(986, 'millies@mindspring.com'),
(987, 'michelle.l.ward1@gmail.com'),
(988, 'nanette1120@yahoo.com'),
(989, 'mama_desi@sbcglobal.net'),
(990, 'puto1380@yahoo.com'),
(991, 'henrydocam@yahoo.com'),
(992, 'michaelgasser17@gmail.com'),
(993, 'tenguinisgreat@yahoo.com'),
(994, 'whitmorejeff@gmail.com'),
(995, 'stevenbeckcasting98@gmail.com'),
(996, 'saltie05@gmail.com'),
(997, 'atcgallatin@gmail.com'),
(998, 'melissaann0477@yahoo.com'),
(999, 'nxtderekjeter@yahoo.com'),
(1000, 'davisk@hdcco.com'),
(1001, 'amd304@gmail.com'),
(1002, 'bschwing@cox.net'),
(1003, 'zoomryder@yahoo.com'),
(1004, 'favila@charter.net'),
(1005, 'msluv2teach@gmail.com'),
(1006, 'discountdrawer@gmail.com'),
(1007, 'tamarized@yahoo.com'),
(1008, 'tsommerf@gmail.com'),
(1009, 'frandoo@optusnet.com.au'),
(1010, 'lbauce@gmail.com'),
(1011, 'peteshmcare13@charter.net'),
(1012, 'asheil_tx@yahoo.com'),
(1013, 'yongsun75@yahoo.com'),
(1014, 'melissa.kane35@gmail.com'),
(1015, 'wzwang2000@yahoo.com'),
(1016, 'cindy@bobharrington.com'),
(1017, 'carolyndeary@yahoo.com'),
(1018, 'brad@crownsandblasting.com'),
(1019, 'spookychee@gmail.com'),
(1020, 'carolyndeary@yahoo.com'),
(1021, 'meaganleigh777@gmail.com'),
(1022, 'ryanawiese@gmail.com'),
(1023, 'joshua.dewees@gmail.com'),
(1024, 'shannon.janicke@gmail.com'),
(1025, 'paulpavelski@yahoo.com'),
(1026, 'meaganleigh777@gmail.com'),
(1027, 'f_d_h@web.de'),
(1028, 'sayinis@yahoo.com'),
(1029, 'dacjr621@gmail.com'),
(1030, 'elite60@comcast.net'),
(1031, 'mad4shel@optonline.net'),
(1032, 'jwierowski@swtechnologies.com'),
(1033, 'bbverma91086@gmail.com'),
(1034, 'dwynrchrds@yahoo.com'),
(1035, 'leimanakahalekomo@yahoo.com'),
(1036, 'dwynrchrds@yahoo.com'),
(1037, 'jbryce@brycegroup.com'),
(1038, 'fullknuckles@gmail.com'),
(1039, 'fullknuckles@gmail.com'),
(1040, 'justin.jorgen@gmail.com'),
(1041, 'msgreeneyes76@windstream.net'),
(1042, 'apewil.escamilla@gmail.com'),
(1043, 'clavz@3dee.dk'),
(1044, 'takatsurutani@gmail.com'),
(1045, 'markswanson66@yahoo.com'),
(1046, 'tbdebil@gmail.com'),
(1047, 'peterebuckley@gmail.com'),
(1048, 'lizmacarthur@me.com'),
(1049, 'baynechristine@gmail.com'),
(1050, 'ctsiliverdis@gmail.com'),
(1051, 'jhartmann@statenislandzoo.org'),
(1052, 'donnahndly@yahoo.co.uk'),
(1053, 'stevelaabs@yahoo.com'),
(1054, 'isabels@bpointins.com'),
(1055, 'dnebersole@yahoo.com'),
(1056, 'brendan@beattycorp.com'),
(1057, 'rebeccadewey@cox.net'),
(1058, 'michaeltoddsanders@gmail.com'),
(1059, 'jplanger@gmail.com'),
(1060, 'connieberki@yahoo.com'),
(1061, 'mirelaricardo@yahoo.com'),
(1062, 'ryanjclemens@gmail.com'),
(1063, 'umamir1@yahoo.com'),
(1064, 'nrothenh@gmail.com'),
(1065, 'zadakie07@yahoo.com'),
(1066, 'bbaroong@gmail.com'),
(1067, 'nate.buch@gmail.com'),
(1068, 'choomieb@yahoo.com'),
(1069, 'robbieridpath@yahoo.com'),
(1070, 'gumanenkom@gmail.com'),
(1071, 'ctsiliverdis@gmail.com'),
(1072, 'joelcmarcus@yahoo.com'),
(1073, 'ctsiliverdis@gmail.com'),
(1074, 'brknig11@gmail.com'),
(1075, 'taterider@gmail.com'),
(1076, 'ctsiliverdis@gmail.com'),
(1077, 'johnpaul112891@gmail.com'),
(1078, 'seikobobotis@gmail.com'),
(1079, 'lindagmboze@gmail.com'),
(1080, 'tjhower@gmail.com'),
(1081, 'alan.mcconchie@gmail.com'),
(1082, 'paulcastoral@gmail.com'),
(1083, 'kkdyson@yahoo.com'),
(1084, 'garrettgoggin@gmail.com'),
(1085, 'why_5679@yahoo.com'),
(1086, 'framusca@gmail.com'),
(1087, 'sonyeta.mati@gmail.com'),
(1088, 'mayara.cueto@gmail.com'),
(1089, 'judejeschke@gmail.com'),
(1090, 'philbomzer@gmail.com'),
(1091, 'spjq2006@yahoo.co.uk'),
(1092, 'chiarani@gmail.com'),
(1093, 'blessonv@gmail.com'),
(1094, 'camphomestudio@gmail.com'),
(1095, 'stuartfrazier@gmail.com'),
(1096, 'evans.claire@gmail.com'),
(1097, 'erikcpfeiffer@gmail.com'),
(1098, 'tomsplumbingelgin@gmail.com'),
(1099, 'clandry949@yahoo.com'),
(1100, 'lopezcanal13@gmail.com'),
(1101, 'mariagomez0394@gmail.com'),
(1102, 'windermender@gmail.com'),
(1103, 'info@1800divorce.org'),
(1104, 'sorenson_t@yahoo.com'),
(1105, 'jjgardne@gmail.com'),
(1106, 'chauhan123443@yahoo.com'),
(1107, 'allisonshelby01@gmail.com'),
(1108, 'lauren.kirchner@propublica.org'),
(1109, 'adinamarie26@yahoo.com'),
(1110, 'kerrysmith1@gmail.com'),
(1111, 'natalia.bishop84@gmail.com'),
(1112, 'jmadsen1979@yahoo.com'),
(1113, 'grogers3@gmail.com'),
(1114, 'jaredc23@gmail.com'),
(1115, 'fondationpeuplesobservateurs@protonmail.com'),
(1116, 'kendallnorman@gmail.com'),
(1117, 'dboydinsc@yahoo.com'),
(1118, 'bruno.mercier@aleph-experts.com'),
(1119, 'nccharnley@gmail.com'),
(1120, 'sanchez.edgar.mtz@gmail.com'),
(1121, 'kennykl727@yahoo.com'),
(1122, 'clandry949@yahoo.com'),
(1123, 'dear.fendi@gmail.com'),
(1124, 'peter.jacobson@gmail.com'),
(1125, 'vantd@yahoo.com'),
(1126, 'robertacasalino@yahoo.co.uk'),
(1127, 'davidpeng9s@gmail.com'),
(1128, 'vantd@yahoo.com'),
(1129, 'zeldarine@gmail.com'),
(1130, 'marychager@gmail.com'),
(1131, 'afiggy@gmail.com'),
(1132, 'mariabsaravia@gmail.com'),
(1133, 'chelle_r23@yahoo.com'),
(1134, 'jkpareso@gmail.com'),
(1135, 'whitecollar@gmail.com'),
(1136, 'akinadekunlebi7lls@gmail.com'),
(1137, 'janemed21@gmail.com'),
(1138, 'cho943@gmail.com'),
(1139, 'sdankens@gmail.com'),
(1140, 'jeffner87@aim.com'),
(1141, 'lissaro9139@gmail.com'),
(1142, 'ellen.sheehy@etsmtl.com'),
(1143, 'limbonner@sbcglobal.net'),
(1144, 'bgburke52@yahoo.com'),
(1145, 'sweetyraye_692002@yahoo.com'),
(1146, 'sujan.ghosh@gmail.com'),
(1147, 'bendevier@gmail.com'),
(1148, 'r1.brown1776b@gmail.com'),
(1149, 'darling500@gmail.com'),
(1150, 'ahmedbmalkawi@gmail.com'),
(1151, 'juliehpine@gmail.com'),
(1152, 'elise.schipman@gmail.com'),
(1153, 'syesin@yahoo.com'),
(1154, 'topchick@sbcglobal.net'),
(1155, 'safermedical@yahoo.com'),
(1156, 'enadelmo@gmail.com'),
(1157, 'benoit.menet@gmail.com'),
(1158, 'mavalenzabogaard@gmail.com'),
(1159, 'defasten@gmail.com'),
(1160, 'gallogirl62@yahoo.com'),
(1161, 'kakqt9@gmail.com'),
(1162, 'stace312@gmail.com'),
(1163, 'sweetyraye_692002@yahoo.com'),
(1164, 'kgaughan42@yahoo.com'),
(1165, 'vcambridge@gmail.com'),
(1166, 'jgc.cruz@gmail.com'),
(1167, 'eimantas.gostautas@gmail.com'),
(1168, 'cesardiazster@gmail.com'),
(1169, 'beartoes7@gmail.com'),
(1170, 'hanguyenn@gmail.com'),
(1171, 'tom4bucs@yahoo.com'),
(1172, 'dmcclasky@gmail.com'),
(1173, 'dmcclasky@gmail.com'),
(1174, 'richroth62@gmail.com'),
(1175, 'jjcasel@windstream.net'),
(1176, 'bookbako@gmail.com'),
(1177, 'ali.hamzaoui.ac@gmail.com'),
(1178, 'ktwhite11@gmail.com'),
(1179, 'gokulreddyg@gmail.com'),
(1180, 'brittny.hacker@gmail.com'),
(1181, 'mikeandnancychandler@comcast.net'),
(1182, 'bluesky23@t-online.de'),
(1183, 'siiri.sundsten@gmail.com'),
(1184, 'alexpatasius@gmail.com'),
(1185, 'austinstaton712@yahoo.com'),
(1186, 'ibeardavid@yahoo.com'),
(1187, 'curly_shari@yahoo.com'),
(1188, 'kbockasten@gmail.com'),
(1189, 'jaygrieves@gmail.com'),
(1190, 'rkalderson@yahoo.com'),
(1191, 'goldosmanthus@gmail.com'),
(1192, 'vatampm@gmail.com'),
(1193, 'rickdenver@tagams.com'),
(1194, 'joshulos@hotmail.fr'),
(1195, 'rosie8604@gmail.com'),
(1196, 'jockes75@gmail.com'),
(1197, 'tlockcuff@gmail.com'),
(1198, 'vu0tran@gmail.com'),
(1199, 'krighi@nycap.rr.com'),
(1200, 'karen.ristuben@gmail.com'),
(1201, 'bangalicsious@yahoo.com'),
(1202, 'robert.evenpar@gmail.com'),
(1203, 'julietnoland@yahoo.com'),
(1204, 'bemaquest@gmail.com'),
(1205, 'tina.clayton73@yahoo.com'),
(1206, 'mnislam88@gmail.com'),
(1207, 'deonv73@yahoo.com'),
(1208, 'itsbino007@gmail.com'),
(1209, 'vu0tran@gmail.com'),
(1210, 'debra171@yahoo.com'),
(1211, 'jmusmith13@gmail.com'),
(1212, 'sgoldsworth@gmail.com'),
(1213, 'juliuseditor@gmail.com'),
(1214, 'thebessies1@gmail.com'),
(1215, 'juliuseditor@gmail.com'),
(1216, 'jaolina@gmail.com'),
(1217, 'corlettbl@gmail.com'),
(1218, 'lcrandus@mac.com'),
(1219, 'rgenet@charter.net'),
(1220, 'gry_childers@yahoo.com'),
(1221, 'woodward.jesse@gmail.com'),
(1222, 'susgaller@yahoo.com'),
(1223, 'tanagamine@gmail.com'),
(1224, 'brittbk10@gmail.com'),
(1225, 'rurnt@charter.net'),
(1226, 'bemaquest@gmail.com'),
(1227, 'dward777@yahoo.com'),
(1228, 'salima.benlaoubi@gmail.com'),
(1229, 'sersinfin@gmail.com'),
(1230, 'eshcherbakov@yahoo.com'),
(1231, 'coachjoshc@gmail.com'),
(1232, 'cgocksch@gmail.com'),
(1233, 'cgocksch@gmail.com'),
(1234, 'jason.c.harrington@gmail.com'),
(1235, 'acstrzalka@verizon.net'),
(1236, 'jennifer.l.horrocks@gmail.com'),
(1237, 'ouliana@gmail.com'),
(1238, 'jdelbert007@gmail.com'),
(1239, 'mrphibbs357@gmail.com'),
(1240, 'robyncarstenkane@me.com'),
(1241, 'thejeremyjay@gmail.com'),
(1242, 'mohamed700@gmail.com'),
(1243, 'mohamed700@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cats`
--

CREATE TABLE `sub_cats` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `page_title` text NOT NULL,
  `photo` text NOT NULL,
  `custom_url` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ar_name` text,
  `ar_meta_description` text,
  `ar_meta_keyword` text,
  `meta_title` text NOT NULL,
  `ar_meta_title` text,
  `photo_alt` text NOT NULL,
  `ar_photo_alt` text,
  `ar_custom_url` text,
  `desc` text NOT NULL,
  `ar_desc` text,
  `ar_page_title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cats`
--

INSERT INTO `sub_cats` (`id`, `name`, `page_title`, `photo`, `custom_url`, `meta_description`, `meta_keyword`, `cat_id`, `ar_name`, `ar_meta_description`, `ar_meta_keyword`, `meta_title`, `ar_meta_title`, `photo_alt`, `ar_photo_alt`, `ar_custom_url`, `desc`, `ar_desc`, `ar_page_title`) VALUES
(1, 'Villa Designs', 'Villas palaces designs, residential architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, Towers architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n\r\n', 'jduwau_Architectural-exterior-design_villa1-design_Egypt-banan-تصميم معماري فيلات وقصور.jpg', 'Villas-palaces-exterior-architecture-designs', 'Banan is architecture design office based in Cairo, Egypt, Our designs includes trendy exterior designs, Towers architectural designs, villas palaces, and residential architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals and clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, our projects located in (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\nBrowse the best architectural designs and ideas and Call us for your project exterior design:\r\n', 'Villas palaces designs, residential architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, Towers architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n\r\n', 12, 'تصميم فيلات', '', '', 'Villas palaces designs, residential architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, Towers architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n', 'تصميم معماري واجهات مميزة للفيلات والقصور، مكتب بنان، شركة تصميم معماري وتصميم داخلي وديكور تقع في القاهرة مصر، مشروعات المكتب تصميمات خارجية عصرية للفيلات والقصور، والفيلات وتصميمات معمارية سكنية، تصميمات معمارية للأبراج السكنية، تصميمات معمارية للمباني المتعددة الاستخدام، تصميمات معمارية للمطاعم، تصميمات معمارية للمعارض وصالات العرض، تصميمات معمارية للمطاعم والكافيهات والمحلات التجارية، تصميمات معمارية للمستشفيات والعيادات، تصميمات معمارية للمدارس والجامعات، تصميمات معمارية فاخرة للفنادق والمنتجعات، تصميمات معمارية للمساجد والمباني الدينية، تصميمات معمارية للمكاتب والمباني الإدارية، تصميمات معمارية للمولات والمراكز التجارية ومراكز التسوق، تصميمات معمارية للسفارات والمباني الدبلوماسية، مشروعات المكتب (القاهرة-دبي-الشارقة-أبو ظبي-الدوحة-عمان-جدة-الرياض-مكة-المدينة-الدمام-القسيم-باريس-لندن-ليبيا-سوريا-الخرطوم-تشاد-مالاوي). يمكنك استعراض مشروعاتنا من http://www.bananegypt.com/\r\n\r\n', 'villas-architecture-design; BANAN-architecture-Design; Residential-Exterior-Design; Palace-Exterior-Design; .', '', '', '<h1 style=\"text-align:center\"><strong><span style=\"font-size:20px\">VILLAS EXTERIOR DESIGN</span></strong></h1>\r\n\r\n<p style=\"text-align:justify\">Exterior villa (home) design required from the architectural design company (consultant) a special attention to make impressive design and concept, what makes the house (villa) designs so special and different from others?</p>\r\n\r\n<p style=\"text-align:justify\">The first criteria is the location of the house, which often plays an important role in the way the house is designed. Also, house (villa) size, our architecture firm attempt to design a creative solution and ideas for all sizes of villas (small house-town house-twin house-palace).</p>\r\n\r\n<h2><strong><span style=\"font-size:20px\">VILLAS EXTERIOR DESIGN STYLES</span></strong></h2>\r\n\r\n<p style=\"text-align:justify\">Speaking of style, this brings us to the next criteria. Style in architecture. This is another thing strongly related to owner&#39;s personality, our role to guide our clients in the best architectural residential design suitable for his house or villas (Classic-Modern-Arabian). Our expert designers pay attention to every space and detail in your house (Reception-Family living-Bedrooms), in addition, we present our diverse choices via floor plans, elevations, perspectives and 3D shots illustrate our luxuries ideas for your unique villa (house).</p>\r\n\r\n<h3><strong><span style=\"font-size:20px\">VILLAS DESIGN CONSTRUCTION PHASE</span></strong></h3>\r\n\r\n<p style=\"text-align:justify\">The next phase is the construction phase, LUMEN office present to our clients coordinated full set of drawings and construction documents (Architectural-Interior design- structure design-electrical design-mechanical design), and in addition, some special studies such as lighting study, Subsequently, submitting to our clients priced bill of quantity (BOQ) with estimated budget, then the client select from execution plan we have varied strategies like (design and build-cost plus). The design and build method grantee to our client to execute the project design exterior and interior like the original design with minimum cost.</p>\r\n\r\n<h4><strong><span style=\"font-size:18px\">ARCHITECTURAL DESIGN OFFICE IN EGYPT</span></strong></h4>\r\n\r\n<p style=\"text-align:justify\">LUMEN is architecture and interior design office based in Cairo, Egypt, Our villas and projects located in (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our villas projects http://lumen-eg.com/ for stylish design to your unique villa contact us.</p>\r\n', '', 'تصميم معماري واجهات مميزة للفيلات والقصور، مكتب بنان، شركة تصميم معماري وتصميم داخلي وديكور تقع في القاهرة مصر، مشروعات المكتب تصميمات خارجية عصرية للفيلات والقصور، والفيلات وتصميمات معمارية سكنية، تصميمات معمارية للأبراج السكنية، تصميمات معمارية للمباني المتعددة الاستخدام، تصميمات معمارية للمطاعم، تصميمات معمارية للمعارض وصالات العرض، تصميمات معمارية للمطاعم والكافيهات والمحلات التجارية، تصميمات معمارية للمستشفيات والعيادات، تصميمات معمارية للمدارس والجامعات، تصميمات معمارية فاخرة للفنادق والمنتجعات، تصميمات معمارية للمساجد والمباني الدينية، تصميمات معمارية للمكاتب والمباني الإدارية، تصميمات معمارية للمولات والمراكز التجارية ومراكز التسوق، تصميمات معمارية للسفارات والمباني الدبلوماسية، مشروعات المكتب (القاهرة-دبي-الشارقة-أبو ظبي-الدوحة-عمان-جدة-الرياض-مكة-المدينة-الدمام-القسيم-باريس-لندن-ليبيا-سوريا-الخرطوم-تشاد-مالاوي). يمكنك استعراض مشروعاتنا من http://www.bananegypt.com/\r\n\r\n'),
(2, 'Towers Designs', 'Towers architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, villas palaces, residential architectural designs,Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n\r\n', 'SPGdyE_Dammam compitition.jpg', 'Towers-Designs', 'Banan is architecture design office based in Cairo, Egypt, Our designs includes trendy exterior designs, Towers architectural designs, villas palaces, and residential architectural designs, Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals and clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, our projects located in (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n\r\n', 'Towers architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, villas palaces, residential architectural designs,Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n', 12, 'تصميم الأبراج', '', '', 'Towers architectural designs, Banan architecture design office Cairo, Egypt, architectural designs; the best trendy exterior designs, villas palaces, residential architectural designs,Mixed Used architectural designs, Restaurants architectural designs, Showrooms Cafes architectural designs, Hospitals clinics architectural designs, schools and university architectural designs, Hotels architectural designs, Resorts architectural designs, Mosques architectural designs, Offices building architectural designs, Malls architectural designs, Embassies architectural designs, projects i (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on http://www.bananegypt.com/\r\n\r\n', 'تصميمات معمارية للأبراج السكنية، مكتب بنان، شركة تصميم معماري وتصميم داخلي وديكور تقع في القاهرة مصر، تصميم معماري مميز للفيلات، مشروعات المكتب تصميمات خارجية عصرية للفيلات والقصور، والفيلات وتصميمات معمارية سكنية، تصميمات معمارية للمباني المتعددة الاستخدام، تصميمات معمارية للمطاعم، تصميمات معمارية للمعارض وصالات العرض، تصميمات معمارية للمطاعم والكافيهات والمحلات التجارية، تصميمات معمارية للمستشفيات والعيادات، تصميمات معمارية للمدارس والجامعات، تصميمات معمارية فاخرة للفنادق والمنتجعات، تصميمات معمارية للمساجد والمباني الدينية، تصميمات معمارية للمكاتب والمباني الإدارية، تصميمات معمارية للمولات والمراكز التجارية ومراكز التسوق، تصميمات معمارية للسفارات والمباني الدبلوماسية، مشروعات المكتب (القاهرة-دبي-الشارقة-أبو ظبي-الدوحة-عمان-جدة-الرياض-مكة-المدينة-الدمام-القسيم-باريس-لندن-ليبيا-سوريا-الخرطوم-تشاد-مالاوي). يمكنك استعراض مشروعاتنا من http://www.bananegypt.com/\r\n\r\n', 'Towers-exterior-architecture-design; BANAN-architecture-Design; Residential-towers-Exterior-Design; High-rise-Exterior-Design.', '', 'تصميم-الأبراج', '<h1 style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><strong><span style=\"font-size:20px\">RESIDENTIAL (SKYSCRYPERS) TOWERS DESIGN</span></strong></h1>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">The design of tall buildings (towers) required comprehensive site analysis and effective land use, Developers and owners of tall buildings (towers) need them to be impressive, in addition, to be built on original estimated budget and within time schedule, and to quickly attract potential tenants.</span></p>\r\n\r\n<h2 style=\"text-align:justify\">&nbsp;<span style=\"font-size:14.0pt\">MARKETING ASPECTS IN RESIDENTIAL (SKYSCRAPERS) TOWERS DESIGN</span>&nbsp;</h2>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Banan teams deliver the marketability by designing sustainable, flexible buildings architectural and structural module that provides efficient use in all diverse functions of space in all floors, starting from basement car parking which is need efficient design to maximize no. of cars, also the residential and commercial functions, and utilization of natural resources and sustainable design while creating an inspiring public image. We design every aspect of the site for proposed tower, building and interiors to enhance marketability and profitability for our clients and the project developer, while giving tenants the effective space they need for sustainable success. </span></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:20px\">RESIDENTIAL (SKYSCRAPERS) TOWERS ARCHITECTURAL DESIGN BANAN PHILOSOPHY</span></h3>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Moreover we pay attention for every teeny tiny small details in public areas and private area, also we care with the fulfilling efficient parking design for every apartment. Additionally, we present our diverse choices via floor plans, elevations, perspectives and 3D shots illustrate our luxuries ideas for your unique residential towers (skyscraper).</span></p>\r\n\r\n<h4 style=\"text-align:justify\"><span style=\"font-size:20px\">ARCHITECTURAL DESIGN OFFICE IN EGYPT</span></h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Banan is architecture and interior design office based in Cairo, Egypt, Our villas and projects located in (Cairo-Dubai-Sharjah-Abu Dhabi-Doha-Oman-Jeddah-Riyadh-Mecca-Al Madina-Dammam-Al Qusseim-Paris-London-Libya-Syria-al Khartoum-Chad-Malawi), you can browse our other projects on <a href=\"http://www.bananegypt.com/\">http://www.bananegypt.com/</a></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Browse the best residential towers design and ideas <span style=\"color:red\">and Call us</span> for your tower exterior and interior design.</span></p>\r\n', '<h1 dir=\"RTL\" style=\"text-align:center\"><span style=\"font-size:22px\"><strong>تصميم الأبراج والمباني العالية</strong></span></h1>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12.0pt\">تصميم المباني العالية (الأبراج) تتطلب تحليل شامل للموقع وكذلك استخدام فعال للفراغات، إن مطوري وملاك المباني العالية يحتاجون أن تكون أبراجهم جذابة لعين العملاء لسهولة الترويج لمشروعهم، بالإضافة إلي إنهاء المشروع في خلال الميزانية التقديرية وكذلك البرنامج الزمني لكي يجذب المؤجرين سريعاً.</span></p>\r\n\r\n<h2 dir=\"RTL\"><span style=\"font-size:20px\"><strong>مراعاة العوامل التسويقية في التصميم المعماري للأبراج والمباني العالية</strong></span></h2>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12.0pt\">فرق عمل مكتب بنان يوفر للملاك تصميم أبراج ذات قدرة تسويقية عالية من خلال تصميمات مستدامة وموديول معمارية وإنشائية تصميمية مرنة بحيث تراعي التنوع في الاستخدامات المختلفة والمتنوعة للأدوار بداية من الجراج الذي يجب تصميمه بشكل فعال بحيث يحقق اكبر عدد سيارات ممكن، وكذلك الأدوار التجارية والسكنية يجب وضعهم في الاعتبار وذلك يؤدي إلي كفاءة استخدام الفراغات المعمارية وكذلك استخدام التصميم المستدام وكذلك استخدام الموارد الطبيعية من خلال تصميم صورة عامة جذابة للمظهر الخارجي للبرج، </span>بالإضافة إلي أننا نقوم بإظهار الخيارات المتنوعة لأفكارنا للعملاء من خلال تقديم مساقط أفقية-واجهات ومخططات كاملة وتصميم ثنائية الأبعاد وكذلك مناظير ولقطات ثلاثية الأبعاد لكي نوضح الأفكار المعمارية المتميزة من أجل مشروعك الفريد والفاخر.</p>\r\n\r\n<h3 dir=\"RTL\"><span style=\"font-size:20px\"><strong>فلسفة مكتب بنان في التصميم المعماري للأبراج والمباني العالية</strong></span></h3>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12.0pt\">نقوم بتصميم كل النواحي بالمبني وذلك لتعزيز العنصر التسويقي والربحي من وراء المشروع لعملائنا، من خلال توفير فراغات فعالة للمؤجرين التي تؤدي إلي نجاح مجال أعمالهم وبالتالي نجاح مستدام للمشروع. علاوة علي وضعنا في الاعتبار كل التفاصيل مهما كانت بسيطة في الفراغات العامة والخاصة. </span></p>\r\n\r\n<h4 dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>مكتب تصميم معماري في مصر</strong></span></h4>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12.0pt\">مكتب بنان شركة تصميم معماري وتصميم داخلي وديكور تقع في القاهرة مصر، تقع مشروعات المكتب في (القاهرة-دبي-الشارقة-أبو ظبي-الدوحة-عمان-جدة-الرياض-مكة-المدينة-الدمام-القسيم-باريس-لندن-ليبيا-سوريا-الخرطوم-تشاد-مالاوي)</span><span style=\"font-size:12.0pt\">. يمكنك استعراض مشروعاتنا من </span><a href=\"http://www.bananegypt.com/\"><span dir=\"LTR\" style=\"font-size:12.0pt\">http://www.bananegypt.com/</span></a></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:12.0pt\">يمكنك استعراض مشروعات الأبراج التي قمنا بتصميمها <span style=\"color:red\">اتصل بنا </span>لتحديد موعد لتصميم وتنفيذ البرج الخاص بك.</span></p>\r\n', 'تصميمات معمارية للأبراج السكنية، مكتب بنان، شركة تصميم معماري وتصميم داخلي وديكور تقع في القاهرة مصر، تصميم معماري مميز للفيلات، مشروعات المكتب تصميمات خارجية عصرية للفيلات والقصور، والفيلات وتصميمات معمارية سكنية، تصميمات معمارية للمباني المتعددة الاستخدام، تصميمات معمارية للمطاعم، تصميمات معمارية للمعارض وصالات العرض، تصميمات معمارية للمطاعم والكافيهات والمحلات التجارية، تصميمات معمارية للمستشفيات والعيادات، تصميمات معمارية للمدارس والجامعات، تصميمات معمارية فاخرة للفنادق والمنتجعات، تصميمات معمارية للمساجد والمباني الدينية، تصميمات معمارية للمكاتب والمباني الإدارية، تصميمات معمارية للمولات والمراكز التجارية ومراكز التسوق، تصميمات معمارية للسفارات والمباني الدبلوماسية، مشروعات المكتب (القاهرة-دبي-الشارقة-أبو ظبي-الدوحة-عمان-جدة-الرياض-مكة-المدينة-الدمام-القسيم-باريس-لندن-ليبيا-سوريا-الخرطوم-تشاد-مالاوي). يمكنك استعراض مشروعاتنا من http://www.bananegypt.com/\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `job_title` text NOT NULL,
  `about` text NOT NULL,
  `fb` text NOT NULL,
  `tw` text NOT NULL,
  `ins` text NOT NULL,
  `link` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `job_title`, `about`, `fb`, `tw`, `ins`, `link`, `photo`) VALUES
(5, 'ggggggggg', 'ggggggggggg', 'gggggggggggg', 'gggggggggg', 'gggggggggg', 'ggggggggggggg', 'gggggggggggg', 'kUxUut_6e629e2e2d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `updated_at` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `permission` int(10) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `l_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `permission`, `phone`, `country_id`, `city`, `address`, `photo`) VALUES
(1, 'sdfgf', 'Aya', 'admin@dashboard.com', '$2y$10$CCIClVFZZfk0jXg9D/HIeOxpvA.d33J7VAidp.0Wx5y0rddvecgKe', 'pXjkNFHPlNjdqdfGga5y6ODWXdeRAzpavOEyZ7IfTCRwf5wfgjlP3WAJl4MQ', '2016-05-20 08:21:19', '2016-12-18 12:28:42', 1, '', 1, '', '', '4Ft0dT_avatar.png'),
(5, 'Marwa', 'Zidan', 'marwa@gmail.com', '$2y$10$VXgcUeERIby8XaBOZE4h1ua1sjfHaRFpNnAeAjt2Uie.AZCF1k4FK', 'FEfRUY4Ovpd6yaLQpEmEMhzNUxoqJx4Wk8LDzguM3BqsVfNwWB9xbzUMjvpN', '2016-11-24 10:32:27', '2016-12-19 10:56:01', 2, '', 1, '', '', 'profile-image.png'),
(11, 'fdhsk', 'hlih', 'ayax@gmail.com', '$2y$10$uYOwycY4VUAYHsB2vJPzierXTXwdMhEXO5rAhMs9b1bEZYZ5MpW/2', NULL, '2016-12-01 10:18:32', '2016-12-01 10:18:32', 2, '12345656', 1, 'maadi', 'hkh', 'rmz29C_15122.png'),
(18, 'nada', '', 'nada@gmail.com', '$2y$10$VfC5de34oYfXK1a7HbYC5uUJOLRD.1hSPALatM735oIvXOdjdQ.7O', 'ZSRgkqul9KYt7ze28HEFfpZ4FyUgtpB6LfqDtLfETTGuXaitkl7v52SOGw6I', '2016-12-15 13:48:02', '2016-12-18 10:02:46', 2, '', 0, '', '', 'profile-image.png'),
(20, 'jj', '', 'f@gmail.com', '$2y$10$GwFae9GhCbd9bKC6eKpYVOflHbht5yXL1dy27ZsViQcpGsv51nQKa', 'xyUVUJ7UZD3GU2z31JjXIWMEuElBJclzohaJmECyaRnrrr4VND3xRM950p7M', '2016-12-18 09:41:48', '2016-12-18 09:42:57', 2, '', 0, '', '', 'profile-image.png'),
(21, 'g', '', 'g@gmail.com', '$2y$10$f/n2xkjtyCiG5OybM8XEK.rzpxJQZlUV/NN9urHug8RIGldqZ33Rq', 'V5AatrSzG6OKCoPAk35pfG2tQwDLH3Q3Dmhh8rIRMZgQcPHvfFm3aqgSebdz', '2016-12-18 09:44:44', '2016-12-18 09:46:06', 2, '', 0, '', '', 'profile-image.png'),
(23, 'gf', '', 'kcfdf@gmail.com', '$2y$10$Zm3a00/tZW5um.IAGXPnouYW72mOvTXabOixgTrjkcbbVWjh1MQna', 'R7pmy5UUZ6LsYwfWfusoXRvUHJtLjA50NHOLgo5BOkUAcEzi5B3Zxdq7RKtn', '2016-12-18 09:49:01', '2016-12-18 09:49:30', 2, '', 0, '', '', 'profile-image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`sub_cat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_galary`
--
ALTER TABLE `blog_galary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`blog_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_galary`
--
ALTER TABLE `portfolio_galary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `project_galary`
--
ALTER TABLE `project_galary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cats`
--
ALTER TABLE `sub_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `permission` (`permission`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_galary`
--
ALTER TABLE `blog_galary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolio_galary`
--
ALTER TABLE `portfolio_galary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `project_galary`
--
ALTER TABLE `project_galary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1244;
--
-- AUTO_INCREMENT for table `sub_cats`
--
ALTER TABLE `sub_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_cats` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_galary`
--
ALTER TABLE `blog_galary`
  ADD CONSTRAINT `blog_galary_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_cats`
--
ALTER TABLE `sub_cats`
  ADD CONSTRAINT `sub_cats_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`permission`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

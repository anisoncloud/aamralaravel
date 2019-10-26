-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 08:48 AM
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
-- Database: `aamralaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_featured_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_featured_image`, `banner_short_description`, `banner_link`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'No one can take you to Europe', 'media-library/home-page-banner-resized-1.png', 'This is the banner of home page', '#', 1, '2019-10-24 10:47:38', '2019-10-24 10:47:38'),
(2, 'aamra - Microsoft', 'media-library/web-Silde3.jpg', 'Microsoft banner is here', '#', 1, '2019-10-24 11:07:37', '2019-10-24 11:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Sports News', 'Sports News Contents will be goes in here', 1, '2019-10-23 09:32:47', '2019-10-23 09:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_23_075059_create_pages_table', 1),
(5, '2019_07_24_053322_create_posts_table', 2),
(6, '2019_07_24_114917_create_categories_table', 2),
(7, '2019_08_03_105240_create_services_table', 2),
(8, '2019_10_22_182436_create_pages_table', 3),
(9, '2019_10_23_155618_create_bannrs_table', 4),
(10, '2019_10_23_170208_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_featured_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `page_short_description`, `page_featured_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'About aamra', '<p>aamra is an amalgamation of businesses focused towards catalyzing the modernization of Bangladesh by providing technology driven solutions to their clients in various market segments.</p>\r\n\r\n<p>aamra recognizes the up-to-date idea that Bangladeshi business companies need to apply in effective systems integration. Our corporate functions strive to provide all our customers with customized and integrated technology-based solutions that enables them to maximize their business potentials. Hence aamra holds the patents, distribution and marketing rights of a number of world renowned high technology driven products. We at aamra are continuously striving to satisfy our clients and target groups and also to serve them with the best by providing them authorized and complete service and maintenance for the same.</p>\r\n\r\n<p>aamra holdings limited (AHL) is a strategic business unit of aamra companies, one of the leading local conglomerate in Bangladesh. The SBU is involved in distribution and logistics industry as well as overseeing specific business processes of 11 of its sister business units.</p>\r\n\r\n<p>aamra resources limited (ARL) is one of the first investment of aamra companies and our flagship in apparels sector. The company is a market leader in its segment and is one of the pioneers in providing top of the line machinery, RMG manufacturing solutions, consultancy and support to the Bangladesh Apparel industry since 1985. ARL is regarded by its customers, as an essential backbone support to the 2nd largest producer of RMG industry in the world. The company is also the pioneer of computerized embroidery and CAD/CAM in garments sector in Bangladesh. Presently aamra resources, aamra embroideries and aamra fashions are the three strategic business units that are contributing to this high yielding sector of our economy.</p>\r\n\r\n<p>aamra technologies limited (IT solution and services), aamra networks limited (Corporate ISP and Value Added solutions), aamra infotainment limited (Web Portal and Web Development), aamra solutions limited (Communications Software Developer), aamra outsourcing limited (BPO Concern) are five of our major investment areas in the ICT Industry.</p>\r\n\r\n<p>aamra believes that one needs to pay special attention to the standards of living. Hence in addition to the apparel and the ICT sectors we have a range of investments in the Lifestyle sector which includes aamra fitness limited (Health Club, Gym and Fitness Center) and HR Development &amp; Recruitment Services (T&amp;D, Consultancy, Job Placement, Conference facilities and Business centre) seeks to improve the efficiency and effectiveness of resources (Human and Material) within corporate bodies.</p>\r\n\r\n<p>aamra understands its clients businesses and links it up with today&rsquo;s technology to maximize product satisfaction. Through our cost-effective rates and locally unmatched knowledge and expertise, it provides businesses with the proper technology infrastructure for its growth and success. aamra customers can feel secured, knowing that we are constantly and consistently at work to maximize their satisfaction and to protect their investment through quality ensured products and services we render.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>aamra&rsquo;s corporate contact information :</strong></p>\r\n\r\n<table border=\"1px solid #ccc\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"3\">Safura Tower (9th Floor)</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">20 Kemal Ataturk Avenue, Banani C/A</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">Dhaka &ndash; 1213, Bangladesh.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Phone</strong></td>\r\n			<td>:</td>\r\n			<td>+88 02 8831188,<br />\r\n			8832354, 8832188, 8835111</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Fax</strong></td>\r\n			<td>:</td>\r\n			<td>+88 02 8832446</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td>:</td>\r\n			<td><a href=\"mailto:info@aamra.com.bd\" target=\"_top\"><strong>info@aamra.com.bd</strong></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Website</strong></td>\r\n			<td>:</td>\r\n			<td><a href=\"https://www.aamra.com.bd/\"><strong>www.aamra.com.bd</strong></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Vision</p>\r\n\r\n<p>Excellence and innovation&hellip;unlimited &hellip; through the power of&nbsp;<em><strong>&ldquo;WE&rdquo;</strong></em></p>\r\n\r\n<p>Mission</p>\r\n\r\n<p>To empower our customers, employees, partners and communities by providing the finest products, services and practices.</p>\r\n\r\n<p><strong>aamra</strong>&nbsp;-The Bangla word for &ldquo;WE&rdquo; best encapsulates the guiding principles of our beliefs. It primarily recognizes the power that partnership and cooperation have on achieving any goal. Only when we harness the ability and capacity of each one of us, will we able to achieve the highest level of accomplishment.</p>\r\n\r\n<p>Together we can stand tall.</p>\r\n\r\n<p>Together we can face all adversity.</p>\r\n\r\n<p>Together we can triumph.</p>', 'To empower our customers, employees, partners and communities by providing the finest products, services and practices.', 'media-library/rubaba-dowla2.jpg', 1, '2019-10-22 13:01:28', '2019-10-22 13:01:28'),
(2, 'About aamra', '<p>aamra is an amalgamation of businesses focused towards catalyzing the modernization of Bangladesh by providing technology driven solutions to their clients in various market segments.</p>\r\n\r\n<p>aamra recognizes the up-to-date idea that Bangladeshi business companies need to apply in effective systems integration. Our corporate functions strive to provide all our customers with customized and integrated technology-based solutions that enables them to maximize their business potentials. Hence aamra holds the patents, distribution and marketing rights of a number of world renowned high technology driven products. We at aamra are continuously striving to satisfy our clients and target groups and also to serve them with the best by providing them authorized and complete service and maintenance for the same.</p>\r\n\r\n<p>aamra holdings limited (AHL) is a strategic business unit of aamra companies, one of the leading local conglomerate in Bangladesh. The SBU is involved in distribution and logistics industry as well as overseeing specific business processes of 11 of its sister business units.</p>\r\n\r\n<p>aamra resources limited (ARL) is one of the first investment of aamra companies and our flagship in apparels sector. The company is a market leader in its segment and is one of the pioneers in providing top of the line machinery, RMG manufacturing solutions, consultancy and support to the Bangladesh Apparel industry since 1985. ARL is regarded by its customers, as an essential backbone support to the 2nd largest producer of RMG industry in the world. The company is also the pioneer of computerized embroidery and CAD/CAM in garments sector in Bangladesh. Presently aamra resources, aamra embroideries and aamra fashions are the three strategic business units that are contributing to this high yielding sector of our economy.</p>\r\n\r\n<p>aamra technologies limited (IT solution and services), aamra networks limited (Corporate ISP and Value Added solutions), aamra infotainment limited (Web Portal and Web Development), aamra solutions limited (Communications Software Developer), aamra outsourcing limited (BPO Concern) are five of our major investment areas in the ICT Industry.</p>\r\n\r\n<p>aamra believes that one needs to pay special attention to the standards of living. Hence in addition to the apparel and the ICT sectors we have a range of investments in the Lifestyle sector which includes aamra fitness limited (Health Club, Gym and Fitness Center) and HR Development &amp; Recruitment Services (T&amp;D, Consultancy, Job Placement, Conference facilities and Business centre) seeks to improve the efficiency and effectiveness of resources (Human and Material) within corporate bodies.</p>\r\n\r\n<p>aamra understands its clients businesses and links it up with today&rsquo;s technology to maximize product satisfaction. Through our cost-effective rates and locally unmatched knowledge and expertise, it provides businesses with the proper technology infrastructure for its growth and success. aamra customers can feel secured, knowing that we are constantly and consistently at work to maximize their satisfaction and to protect their investment through quality ensured products and services we render.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>aamra&rsquo;s corporate contact information :</strong></p>\r\n\r\n<table border=\"1px solid #ccc\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"3\">Safura Tower (9th Floor)</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">20 Kemal Ataturk Avenue, Banani C/A</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"3\">Dhaka &ndash; 1213, Bangladesh.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Phone</strong></td>\r\n			<td>:</td>\r\n			<td>+88 02 8831188,<br />\r\n			8832354, 8832188, 8835111</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Fax</strong></td>\r\n			<td>:</td>\r\n			<td>+88 02 8832446</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td>:</td>\r\n			<td><a href=\"mailto:info@aamra.com.bd\" target=\"_top\"><strong>info@aamra.com.bd</strong></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Website</strong></td>\r\n			<td>:</td>\r\n			<td><a href=\"https://www.aamra.com.bd/\"><strong>www.aamra.com.bd</strong></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Vision</p>\r\n\r\n<p>Excellence and innovation&hellip;unlimited &hellip; through the power of&nbsp;<em><strong>&ldquo;WE&rdquo;</strong></em></p>\r\n\r\n<p>Mission</p>\r\n\r\n<p>To empower our customers, employees, partners and communities by providing the finest products, services and practices.</p>\r\n\r\n<p><strong>aamra</strong>&nbsp;-The Bangla word for &ldquo;WE&rdquo; best encapsulates the guiding principles of our beliefs. It primarily recognizes the power that partnership and cooperation have on achieving any goal. Only when we harness the ability and capacity of each one of us, will we able to achieve the highest level of accomplishment.</p>\r\n\r\n<p>Together we can stand tall.</p>\r\n\r\n<p>Together we can face all adversity.</p>\r\n\r\n<p>Together we can triumph.</p>', 'To empower our customers, employees, partners and communities by providing the finest products, services and practices.', 'media-library/chef-skytree.jpg', 1, '2019-10-23 05:26:01', '2019-10-23 05:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_featured_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_short_description`, `post_content`, `post_featured_image`, `category_id`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'During a 2011 Interview with Vogue, actor Emma Watson', 'If anyone knows a thing or two about success, it\'s people like Oprah Winfrey, Michael Jordan and Malala Yousafzai. ', '<p>If anyone knows a thing or two about&nbsp;<a href=\"https://www.independent.co.uk/topic/success\">success</a>, it&#39;s people like&nbsp;<a href=\"https://www.independent.co.uk/topic/OprahWinfrey\">Oprah Winfrey</a>,&nbsp;<a href=\"https://www.independent.co.uk/topic/michael-jordan\">Michael Jordan</a>&nbsp;and&nbsp;<a href=\"https://www.independent.co.uk/topic/malala-yousafzai\">Malala Yousafzai</a>.&nbsp;</p>\r\n\r\n<p>These changemakers&nbsp;have defied the odds to the become global superstars in their respective fields, whether it be&nbsp;in philanthropy, sport or education.</p>\r\n\r\n<p>But nobody is immune to&nbsp;<a href=\"https://www.independent.co.uk/topic/failure\">failure</a>, not even world leaders or billionaires.</p>\r\n\r\n<p>It turns out that record-breaking musicians, Nobel Peace Prize winners and Oscar-winning actors have all had their fair share of ups and downs, and they&#39;re more than happy to share what they&#39;ve learned with fans.</p>', 'media-library/emma-watson.jpg', 1, 1, '2019-10-23 09:35:00', '2019-10-23 09:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_featured_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_short_description`, `service_content`, `service_url`, `service_featured_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'PROFESSIONAL DEVELOPMENT', 'aamra has come forward to explore the rising business prospects of the Lifestyle Services sector. Our world-class fitness centre is equipped with State-of-the-Art equipment.', '<p>aamra has come forward to explore the rising business prospects of the Lifestyle Services sector. Our world-class fitness centre is equipped with State-of-the-Art equipment.</p>', '#', 'media-library/PROFESSIONAL-DEVELOPMENT.png', 1, '2019-10-25 00:03:17', '2019-10-25 00:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anis', 'anis.bdinfo@gmail.com', NULL, '$2y$10$IXOadZZhuXA3wLjEsOOUfuQrP.3Xe1zBTNBrgOeMK/EHHQQqhArQq', 'o1IYqt6RbgrZbcrIrjrrUU1XIhQ5ReLwUbcglUM1qTBdQVNtAIrkF4TiFN3R', '2019-07-22 05:48:07', '2019-07-22 05:48:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

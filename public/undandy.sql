-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2019 at 04:48 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undandy`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `name`, `quantity`, `size`, `prize`, `created_at`, `updated_at`) VALUES
(27, 3, '\'48 by Gonçalo', 1, '38 UK 5 1/2 US 6', '205', '2018-12-20 08:17:10', '2018-12-20 08:17:10'),
(28, 2, '\'15 by Tom Ripley', 1, '38 UK 5 1/2 US 6', '198', '2018-12-26 09:50:16', '2018-12-26 09:50:16'),
(29, 2, '\'15 by Tom Ripley', 1, '38 UK 5 1/2 US 6', '198', '2018-12-26 09:51:08', '2018-12-26 09:51:08'),
(30, 2, '\'48 by Gonçalo', 1, '38 UK 5 1/2 US 6', '205', '2018-12-29 05:41:54', '2018-12-29 05:41:54'),
(31, 2, '\'15 by Tom Ripley', 1, '38 UK 5 1/2 US 6', '198', '2019-01-03 05:53:36', '2019-01-03 05:53:36'),
(32, 2, '\'15 by James', 2, '38 UK 5 1/2 US 6', '195', '2019-01-03 06:11:39', '2019-01-03 06:11:39'),
(33, 2, '\'15 by James', 1, '38 UK 5 1/2 US 6', '195', '2019-01-03 06:11:47', '2019-01-03 06:11:47'),
(35, 2, '15bypowel', 1, '38 UK 5 1/2 US 6', '253', '2019-01-03 08:10:48', '2019-01-03 08:10:48'),
(39, 2, '\'48 by Banks', 1, '38 UK 5 1/2 US 6', '198', '2019-01-03 08:29:24', '2019-01-03 08:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_address`
--

CREATE TABLE `checkout_address` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_address`
--

CREATE TABLE `delivery_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_11_08_093509_carts', 1),
(23, '2018_12_01_100623_products', 1),
(24, '2018_12_01_100645_payments', 1),
(25, '2018_12_10_101948_delivery_address', 2),
(26, '2018_12_10_162957_orders', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'order in progress',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `city`, `state`, `address`, `pincode`, `number`, `order_status`, `created_at`, `updated_at`) VALUES
(19, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(20, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(21, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(22, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(23, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(24, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(25, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(26, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(27, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', NULL, NULL),
(28, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:10:25', '2018-12-17 11:10:25'),
(29, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:11:01', '2018-12-17 11:11:01'),
(30, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:11:04', '2018-12-17 11:11:04'),
(31, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:11:18', '2018-12-17 11:11:18'),
(32, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:11:20', '2018-12-17 11:11:20'),
(33, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:12:11', '2018-12-17 11:12:11'),
(34, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:27:32', '2018-12-17 11:27:32'),
(35, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:27:43', '2018-12-17 11:27:43'),
(36, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-17 11:28:04', '2018-12-17 11:28:04'),
(37, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-18 08:47:51', '2018-12-18 08:47:51'),
(38, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-19 07:38:13', '2018-12-19 07:38:13'),
(39, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:10:57', '2018-12-20 08:10:57'),
(40, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:11:38', '2018-12-20 08:11:38'),
(41, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:13:27', '2018-12-20 08:13:27'),
(42, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:17:32', '2018-12-20 08:17:32'),
(43, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:25:29', '2018-12-20 08:25:29'),
(44, 'sagu', 'uran', 'Maharashtra', 'sainagar,near,sai mandir,karanja,chanje,uran', 400702, '8286606462', 'order in progress', '2018-12-20 08:26:15', '2018-12-20 08:26:15'),
(45, 'karan', 'Uran', 'Maharashtra', 'Uran Pirwad', 400702, '9769541647', 'order in progress', '2018-12-24 07:20:17', '2018-12-24 07:20:17'),
(46, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2018-12-29 05:42:07', '2018-12-29 05:42:07'),
(47, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2019-01-03 05:53:52', '2019-01-03 05:53:52'),
(48, 'admin', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2019-01-03 05:58:15', '2019-01-03 05:58:15'),
(49, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2019-01-03 06:06:41', '2019-01-03 06:06:41'),
(50, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2019-01-03 07:29:48', '2019-01-03 07:29:48'),
(51, 'keval', 'uran', 'Maharashtra', 'uran karanja', 400702, '8286606462', 'order in progress', '2019-01-03 08:30:02', '2019-01-03 08:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `size`, `prize`, `image`, `description`, `status`) VALUES
(7, '15bypowel', 8, '38 UK 5 1/2 US 6', '253', '/public/images/uploads/shoe1.jpg', 'The ‘15 by Powell’s unique wooden-like effect is the result of a careful and precise hand painting technique. Crafted with the finest leathers, these oxfords breath tradition and heritage. They are a perfect match for any occasion, a true must have in every man\'s closet. As they say the proof is in the pudding, the Powell is one of our best-sellers. And you can’t argue with cold hard facts. With a classic fit and elegant long vamp, our \'15\' last will add just the right amount of Italian flair to your look. Handcrafted with care in Portugal.', 1),
(8, '\'15 by Tom Ripley', 1, '38 UK 5 1/2 US 6', '198', '/public/images/uploads/15 by Tom Ripley.jpg', 'Patricia Highsmith’s elusive character of Tom Ripley in The Talented Mr. Ripley, is a masterful study in psychopathy. Shown off particularly well in Anthony Mingella’s film version, Ripley’s style combines classic tailoring with casual resort wear set against a Southern Italian background with a distinct American twist. Cultivate this look with our carefully crafted 15’ Oxfords in Brownlee patent leather and sand suede.   With a classic fit and elegant long vamp, our \'15\' last will add just the right amount of Italian flair to your look. Handcrafted with care in Portugal', 1),
(9, '\'48 by Gonçalo', 1, '38 UK 5 1/2 US 6', '205', '/public/images/uploads/48by Goncalo.png', 'The onset of winter might be giving you the blues, but at least in this whole cut, standard boot you can kick the cold weather to the curb. Perfectly suitable to wear with jeans and chinos, this beautiful crafted boot in dark blue leather with a contrasting sand sole is a worthy companion for the winter months.   Handcrafted in Portugal.', 1),
(10, '\'92 by Hacket', 1, '38 UK 5 1/2 US 6', '173', '/public/images/uploads/\'92 by Hacket.jpg', 'The \'92 by Hacket is the lovechild of a beautiful relationship between a classic shoe and a casual sneaker, combining a full brogued leather body with a comfortable rubber sole. And it has the mother\'s beautiful green eyes. We mean laces.  The heritage of a classic shoe coupled with the audacity of a sneaker, the \'92 last embodies perfected casualness.    Handcrafted with care in Portugal.', 1),
(11, '\'The Gentleman\'s Boot', 1, '38 UK 5 1/2 US 6', '208', '/public/images/uploads/\'48 by Louie.jpg', 'Built to endure the longest (suit) rides and the most extreme beverage sipping, the Gentleman\'s Boot comes in Brownish Motor Oil Glossy leather, with a Tarmac Black sole, finished with Under-The-Sun-Orange stitching, Old Tire Rubber on the heels, and a shiny Whiskey patent leather detail on the back.   Designed to be a classic puff toe last with a contemporary twist, they are equally at ease in the boardroom as they are on a night out, you simply can\'t go wrong with our \'48\'s.  Handcrafted with care in Portugal.', 1),
(12, '\'15 by Eric', 1, '38 UK 5 1/2 US 6', '205', '/public/images/uploads/15 by Eric.jpg', 'A walk in nature is said to soothe the soul, therefore it stands to reason that the 15 by Eric, handcrafted in earthy tones of moss green suede with a tan sole, is the perfect accompaniment for long walks and getting back to nature.   Handcrafted in Portugal and welted using the Blake method of construction.', 1),
(13, '\'48 by Banks', 1, '38 UK 5 1/2 US 6', '198', '/public/images/uploads/\'48 by Banks.jpg', 'This pair of Oxford Brogues come in an astonishing ensemble of three tones, camel, patent Bordeaux and brown. Everything seasoned with light brown laces and orange stitching to inebriate your senses. For when you want to make a statement, but keep your finesse.   Designed to be a classic puff toe last with a contemporary twist, they are equally at ease in the boardroom as they are on a night out, you simply can\'t go wrong with our \'48\'s. Handcrafted with care in Portugal.', 1),
(14, '\'92 by Wayne', 1, '38 UK 5 1/2 US 6', '228', '/public/images/uploads/\'92 by Wayne.jpg', '‘A good hockey player plays where the puck is. A great hockey player plays where the puck is going to be.’ Wayne Gretsky knew that to be the best, you need to be several steps ahead. Maximise your strategy in the style stakes with the 92 by Wayne, a skilful combination of an Oxford dress shoe meets sneaker finished with a glorious blue patina, the perfect addition to your proverbial trophy cabinet.  Handcrafted in Portugal.', 1),
(15, '\'15 by James', 3, '38 UK 5 1/2 US 6', '195', '/public/images/uploads/15byJames_.webp', 'Shaken not stirred, the 15 by James is the perfect style to make a considerable impression. The sleek glossy patent-leather with grey linings is a refined touch to a formal outfit. Teamed with a classic tuxedo, they\'re guaranteed to add gravitas to your look.   With a classic fit and elegant long vamp, our \'15\' last will add just the right amount of Italian flair to your look. Handcrafted with care in Portugal.', 1),
(16, '‘48 by Michael Corleone', 4, '38 UK 5 1/2 US 6', '195', '/public/images/uploads/22_1_2.webp', 'One of Al Pacino\'s career defining roles, the Don Michael Corleone was cold blooded, ruthless, smart and determined. And always impeccably dressed. Whatever your father taught you about keeping your friends close, but your enemies closer, we bet he also said one should always have a classic pair of Derbys. These versatile 48 Derbys in ink black calf skin leather with tan soles shouldn’t be far from any mobster\'s wardrobe. Or your\'s.   Designed to be a classic puff toe last with a contemporary twist, they are equally at ease in the boardroom as they are on a night out, you simply can\'t go wrong with our \'48\'s. Handcrafted with care in Portugal.', 1),
(17, '‘15 by Gianni', 4, '38 UK 5 1/2 US 6', '195', '/public/images/uploads/oxfors.jpg', '‘15 by Gianni', 1),
(18, '\'48 by Thomas', 4, '38 UK 5 1/2 US 6', '195', '/public/images/uploads/48bythomas.jpg', 'From afar the 48 by Thomas, looks like your average pair of black patent brogues, but on further observation, you\'ll be astonished to find that it’s actually darker hue of Bordeaux, contrasting with the light brown of the laces. Oh, so very conspicuously inconspicuous.   Designed to be a classic puff toe last with a contemporary twist, they are equally at ease in the boardroom as they are on a night out, you simply can\'t go wrong with our \'48\'s. Handcrafted with care in Portugal.', 1),
(19, '\'48 by Thomas', 4, '38 UK 5 1/2 US 6', '195', '/public/images/uploads/48bythomas.jpg', 'From afar the 48 by Thomas, looks like your average pair of black patent brogues, but on further observation, you\'ll be astonished to find that it’s actually darker hue of Bordeaux, contrasting with the light brown of the laces. Oh, so very conspicuously inconspicuous.   Designed to be a classic puff toe last with a contemporary twist, they are equally at ease in the boardroom as they are on a night out, you simply can\'t go wrong with our \'48\'s. Handcrafted with care in Portugal.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `landmark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`, `city`, `state`, `pincode`, `landmark`, `status`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '8286606462', '$2y$10$aV166auftWeoUvNjAO2wK.eyRPSajvV5Kyw1Jf.7RN9M/6zaCk6Qu', 'uran karanja', 'uran', 'Maharashtra', 400702, 'karanja', 1, 'admin', 'Jid1PACCFIKkqmD8ZrpVlRam235BguJBYCvOxnt8fLdCqNJ0hHeM4Yg7ojY8', '2018-12-01 04:54:58', '2018-12-01 04:54:58'),
(2, 'keval', 'kevalthali@gmail.com', '8286606462', '$2y$10$ND4MrNpAYB/qqbfoF7wkr.L1hsShNSgXPxOBc8CaOAejZi3byw0D.', 'uran karanja', 'uran', 'Maharashtra', 400702, 'karanja', 1, 'customer', 'JQo0sLBZ1aOcBB8zQ3UimDZ9sOnZSqNL6TTXJtzMh2COXExyBnodAIE2PWn0', '2018-12-01 04:55:14', '2018-12-01 04:55:14'),
(3, 'sagu', 'sagu1234@gamil.com', '8286606462', '$2y$10$27tHY4izupoEOvdcyTsQm.kHSdPF.X/ZLakKIaiOygrQGAZ3g6cuq', 'sainagar,near,sai mandir,karanja,chanje,uran', 'uran', 'Maharashtra', 400702, 'Uran', 1, 'customer', NULL, '2018-12-19 02:01:36', '2018-12-19 02:01:36'),
(4, 'raj', 'raj@gmail.com', '8286606462', '$2y$10$Ds8qwQpx6jujSPeNL0CKeuTGIVPi8/nPHoLGqr15w.PnUF4UC45AG', 'Vashi', 'Uran', 'Maharashtra', 400702, 'Maharashtra', 1, 'customer', NULL, '2018-12-20 00:57:43', '2018-12-20 00:57:43'),
(26, 'sam', 'sam@gmail.com', '9769541647', '$2y$10$o7cCSK1RM9dHpg3GfTJDVObfhHv7pdclUnelsSwgK//wnb.xw5fdG', 'Kegav Uran', 'Uran', 'Maharashtra', 400702, 'Kegav', 1, 'customer', NULL, '2018-12-20 06:42:44', '2018-12-20 06:42:44'),
(27, 'karan', 'karan@gmail.com', '9769541647', '$2y$10$.Doc/oKqhT9H5jNYXwDyzuDpqIKq9F56D25cPzpQzVfnzKVyAX6Sm', 'Uran Pirwad', 'Uran', 'Maharashtra', 400702, 'Near Ongc Colony', 1, 'customer', '9IaTD4YRhHzwxRb3j88TLE77XwrktM6lREpWcSaKViIAdZT8dWCIaOZuQwW2', '2018-12-20 06:44:08', '2018-12-20 06:44:08'),
(28, 'Lavina', 'Lavina@gmail.com', '8976905413', '$2y$10$HNwuY16tf.CCz79jKOsYeedicpAis63EMSnm6tJRGa0Ih9c27ucX6', 'Karanja Uran', 'Uran', 'Maharshtra', 400702, 'Dronagiri Nagar', 1, 'customer', NULL, '2018-12-20 06:46:17', '2018-12-20 06:46:17'),
(29, 'Harshal', 'harshal@gmail.com', '8286123412', '$2y$10$DaMZLrtSZ8fD0FQx.B/9AeC4bYHGm3VE36ynbrQGa6ImBE4DEEaA2', 'Karanja Uran', 'Uran', 'Maharshtra', 400702, 'Dronagiri Nagar', 1, 'customer', NULL, '2018-12-20 06:48:44', '2018-12-20 06:48:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_address`
--
ALTER TABLE `delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `delivery_address_email_unique` (`user_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `delivery_address`
--
ALTER TABLE `delivery_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

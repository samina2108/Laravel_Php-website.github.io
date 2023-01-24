-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 09:53 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'moiN UD DIN', 'n@gmail.com', NULL, '$2y$10$NgrMq0FYA7YPeVnWugmxse2x7aHiT9Z7X6H5jSnOl9C0TZAGTw15K', NULL, '2021-02-27 18:31:40', '2021-02-27 18:31:40'),
(4, 'moiN UD DIN', 't@gmail.com', NULL, '$2y$10$itDgwz3RlVts4QJHqcLRcuoaBs28x6xdTTntImxcHaObSu6zeCxxi', NULL, '2021-02-27 18:47:20', '2021-02-27 18:47:20'),
(5, 'sameer', 'sameer@gmail.com', NULL, '$2y$10$aVU0NBKmavoW7A1wGqQrZe7swQwOmB5TXatfYeOH6yv98pzh8OYqm', NULL, '2021-02-27 20:34:20', '2021-02-27 20:34:20'),
(6, 'moiN UD DIN', 'g@gmail.com', NULL, '$2y$10$j4GNRBLuDAxUyrkjjaT7PuQuGlW/ZOjBUr7rsHCWV7ccvBxSXs.r6', NULL, '2021-02-27 22:14:44', '2021-02-27 22:14:44'),
(7, 'moiN UD DIN', 'trizwan503@gmail.com', NULL, '$2y$10$FNssYPjT/4bjDEQ/C7LPJ.g1y6RYSWDrD62gHP2WAksqqawyBKcae', NULL, '2021-02-27 23:00:33', '2021-02-27 23:00:33'),
(8, 'moiN UD DIN', 'v@gmail.com', NULL, '$2y$10$zfhtg/ZRo3/MFSM7PKSAr.cLrA4tKQWN3JdDoSiJU4sJRXN6YmoLW', NULL, '2021-02-27 23:24:15', '2021-02-27 23:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `adminslogins`
--

CREATE TABLE `adminslogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `AuthorName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BookTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `UploadFile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BookImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `AuthorName`, `BookTitle`, `Description`, `UploadFile`, `BookImage`, `Price`, `Category`, `created_at`, `updated_at`) VALUES
(1, 'Moin', 'Maus', 'Maus is a graphic novel by American cartoonist Art Spiegelman, serialized from 1980 to 1991. It depicts Spiegelman interviewing his father about his experiences as a Polish Jew and Holocaust survivor. The work employs postmodernist techniques and represents Jews as mice, Germans as cats, and Poles as pigs. Wikipedia', 'comics.jpg', 'sample.pdf', 155, 'Comics', '2021-02-27 23:58:26', '2021-02-27 23:58:26'),
(2, 'mirza', 'Understanding Comics: The Invisible Art', 'Understanding Comics: The Invisible Art is a 1993 non-fiction work of comics by American cartoonist Scott McCloud. It explores formal aspects of comics, the historical development of the medium, its fundamental vocabulary, and various ways in which these elements have been used. Wikipedia', 'comics1.jpg', 'pdf1.pdf', 2000, 'Comics', '2021-02-28 00:06:12', '2021-02-28 00:06:12'),
(4, 'MOIN', 'Watchmen', 'A New York Times Best Seller! This Hugo Award-winning graphic novel chronicles the fall from grace of a group of super-heroes plagued by all-too-human failings. Along the way, the concept of the super-hero is dissected as the heroes are stalked by an unknown assassin. ... Google Books Originally published: 1986 Author: Alan Moore Illustrator: Dave Gibbons Genres: Comics, Novel, Graphic novel, Fantasy Fiction, Superhero fiction Nominations: Locus Award for Best Science Fiction Novel, Locus Award for Best Non-Fiction', 'comics3.jpg', 'hort.pdf', 100000, 'Comics', '2021-02-28 00:20:43', '2021-02-28 00:20:43'),
(5, 'MOIN', 'Batman: The Killing Joke', 'Batman: The Killing Joke is a 1988 DC Comics one-shot graphic novel featuring the characters Batman and the Joker written by Alan Moore and illustrated by Brian Bolland. The Killing Joke provides an origin story for the supervillain the Joker, loosely adapted from the 1951 story arc \"The Man Behind the Red Hood!\". Wikipedia', 'comics2.jpg', 'sample.pdf', 500, 'Comics', '2021-02-28 00:42:51', '2021-02-28 00:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Winner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Upload` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `Winner`, `Name`, `Pics`, `Description`, `Category`, `Title`, `Upload`, `created_at`, `updated_at`) VALUES
(1, 'winner', 'moin', 'hort.pdf', 'asdasda', 'Compition', 'aa', 'sample.pdf', '2021-02-27 19:53:55', '2021-02-27 20:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2021_02_17_072837_create_cruds_table', 1),
(19, '2021_02_18_100611_create_authors_table', 1),
(20, '2021_02_26_220510_create_Adminlogins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'moiN UD DIN', 'oin@gmail.com', NULL, '$2y$10$6s5C/FqowYXFiARyXSP/tOJ7yNT3ULzKMkw7mYOv0Oy1Zai8THLK2', NULL, '2021-02-27 17:58:46', '2021-02-27 17:58:46'),
(2, 'moiN UD DIN', 'moin@gmail.com', NULL, '$2y$10$cHhHPI4D4Y0lr1pVHDAkfufPuPxUR6UI6GsftO6PtWCLFB6irLiAO', NULL, '2021-02-27 18:42:32', '2021-02-27 18:42:32'),
(3, 'moiN UD DIN', 'gaming@gmail.com', NULL, '$2y$10$gujtOG2BfjBoJlh2Ng/r0Oz3qs/7yey1qUqBWv5woRD0eLqVysNP2', NULL, '2021-02-27 18:56:08', '2021-02-27 18:56:08'),
(4, 'moiN UD DIN', 'v@gmail.com', NULL, '$2y$10$xAzveQ41CmS9ug4dtniMz.TrwOdTZbcHzldqHQtJ9cYoWwW4Wcq5y', NULL, '2021-02-27 23:25:08', '2021-02-27 23:25:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminlogins_email_unique` (`email`);

--
-- Indexes for table `adminslogins`
--
ALTER TABLE `adminslogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminslogins_email_unique` (`email`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adminslogins`
--
ALTER TABLE `adminslogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

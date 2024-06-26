-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2024 at 01:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `content`, `published_at`, `author_id`, `created_at`, `updated_at`) VALUES
(7, 'Exploring the Mysteries of Ancient Egypt in Virtual Reality', 'exploring-the-mysteries-of-ancient-egypt-in-virtual-reality', '01HQNR2QYMJ43NEQKMHS5KT7JS.jpg', 'Ancient Egypt has long captivated the imaginations of people around the world with its fascinating history, magnificent monuments, and enigmatic artifacts. Now, thanks to the power of virtual reality (VR), you can embark on an extraordinary journey through time and space to explore the wonders of this ancient civilization like never before.\n\nAt Pharaoh VR, we\'re passionate about blending cutting-edge technology with the timeless allure of history to create immersive VR experiences that transport users to the heart of ancient Egypt. Step into our virtual world and prepare to be amazed as you wander through intricately detailed environments, interact with lifelike statues, and uncover the secrets of this storied civilization.\n\nOur team of historians, artists, and technologists has painstakingly recreated iconic Egyptian landmarks and artifacts within Unreal Engine VR, ensuring an unparalleled level of authenticity and realism. From the majestic pyramids of Giza to the mysterious tombs of the pharaohs, every detail has been faithfully reproduced to provide users with an unforgettable and educational experience.\n\nBut our VR journey doesn\'t stop at mere exploration. With interactive elements and informative narratives, users can delve deeper into the history, culture, and symbolism of ancient Egypt, gaining a deeper understanding of this remarkable civilization along the way. Whether you\'re a seasoned history buff or a curious novice, our VR experience offers something for everyone, making learning both engaging and enjoyable.\n\nBut don\'t just take our word for it. Join us on a virtual adventure through the sands of time and see for yourself why ancient Egypt continues to capture the imagination of people around the world. With Pharaoh VR, the past comes alive in ways you never thought possible.\n\nReady to embark on your own VR journey to ancient Egypt? Stay tuned for updates and announcements on our upcoming release, and prepare to experience history like never before.\n\nUntil then, happy exploring!\n\nPharaoh VR Team', '2024-02-27 14:34:46', 1, '2024-02-27 14:34:46', '2024-02-27 14:59:00'),
(8, 'Discover the Magnificence of Ancient Egypt', 'discover-the-magnificence-of-ancient-egypt', '01HQNR29SZAJ52DR7DBVVY0JZT.jpg', 'Discover the Magnificence of Ancient Egypt\n\nFew civilizations in history rival the grandeur and mystique of ancient Egypt. From awe-inspiring monuments to intricate hieroglyphics, the wonders of this ancient civilization continue to captivate the imagination of people around the world.\n\nAt Pharaoh VR, we\'re on a mission to showcase the unparalleled beauty and ingenuity of ancient Egypt through a captivating multimedia experience. Step into our virtual world and embark on a mesmerizing journey through the sands of time as we unveil the secrets of this extraordinary civilization.\n\nFrom the majestic pyramids of Giza, towering monuments that have stood the test of millennia, to the serene banks of the Nile, the lifeblood of ancient Egyptian society, our immersive experience transports you to iconic landmarks and hidden treasures, offering a glimpse into the daily life, rituals, and beliefs of this ancient culture.\n\nBut our exploration doesn\'t stop at architecture and artifacts. Through interactive storytelling and expert commentary, users can gain a deeper understanding of the social, political, and religious aspects that shaped ancient Egyptian society. From the reign of powerful pharaohs to the sacred rites of the gods, every aspect of this remarkable civilization is brought to life in stunning detail.\n\nWhether you\'re a history enthusiast, a student of the past, or simply someone with a sense of wonder, our project invites you to rediscover the wonders of ancient Egypt in a way that\'s both informative and enchanting. Prepare to be transported back in time as we unlock the mysteries of one of history\'s greatest civilizations.\n\nJoin us on this extraordinary journey and experience the splendor of ancient Egypt as never before.\n\nPharaoh VR Team', '2024-02-27 14:58:46', 1, '2024-02-27 14:58:46', '2024-02-27 14:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `sort` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `author_id`, `sort`, `created_at`, `updated_at`) VALUES
(5, 'Anubis', '01HQNN7P5BMB5DQANG53X1WQBG.jpg', 1, 6, '2024-02-27 14:09:17', '2024-02-27 16:26:07'),
(6, 'Tutankhamun', '01HQNN9EAYRM7N3ASJG6EFRQGP.jpg', 1, 1, '2024-02-27 14:10:14', '2024-02-27 16:26:07'),
(7, 'Horus', '01HQNNBSHSY00N5Y0P2960PAYY.jpg', 1, 4, '2024-02-27 14:11:31', '2024-02-27 16:26:07'),
(8, 'Idi', '01HQNNP9YFXJGTZ3GJZFB2TVXG.jpg', 1, 3, '2024-02-27 14:17:16', '2024-02-27 16:26:07'),
(9, 'Neferirkare', '01HQNNR7ZKH9XTM2H8QXAXHHGF.jpg', 1, 5, '2024-02-27 14:18:19', '2024-02-27 16:26:07'),
(10, 'Cleopatra', '01HQNPEZ0M8TQNWACZ2T14ST2R.jpg', 1, 2, '2024-02-27 14:29:18', '2024-02-27 16:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_27_150046_create_blogs_table', 1),
(6, '2024_02_27_150047_create_galleries_table', 1),
(7, '2024_02_27_150048_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ziad Talaat', 'ziadtallat33@gmail.com', NULL, '$2y$12$fHXqtV0msaZt7FJ2MSgd4eNJuuFqqEVA5aj5nOpKFKOVSN6lDS8EW', 'admin', NULL, '2024-02-27 13:31:53', '2024-02-27 13:31:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_author_id_foreign` (`author_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_author_id_foreign` (`author_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

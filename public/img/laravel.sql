-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Sep 11, 2023 at 10:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'husam', 'husamaldean.odat@gmail.com', NULL, '123456789Husam@@@', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` mediumtext NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Services', '20230911182626.png', 'Medical services encompass a broad range of healthcare-related activities, treatments, and interventions aimed at promoting and maintaining individuals\' health and well-being. These services are typically provided by healthcare professionals, institutions, and organizations.', '2023-09-11 15:26:26', '2023-09-11 15:26:26'),
(2, 'Medical equipment', '20230911182754.jpg', 'Medical equipment refers to a wide range of devices, instruments, machines, and tools used in healthcare settings for diagnostic, therapeutic, monitoring, or surgical purposes. These instruments are essential for the delivery of medical care and the treatment of patients.', '2023-09-11 15:27:54', '2023-09-11 15:27:54'),
(3, 'Medicine', '20230911183101.png', 'Medicine, often referred to as pharmaceuticals or medications, are substances or compounds used for the prevention, treatment, or management of diseases, medical conditions, and the relief of symptoms.', '2023-09-11 15:31:01', '2023-09-11 15:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_07_195224_create_admins_table', 1),
(6, '2023_09_07_195944_create_categories_table', 1),
(7, '2023_09_09_202058_create_send_s_m_s_table', 1),
(8, '2023_09_09_202211_create_sent_sms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_s_m_s`
--

CREATE TABLE `send_s_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sent_sms`
--

CREATE TABLE `sent_sms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volnteerdetails`
--

CREATE TABLE `volnteerdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `volunteer_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volnteeritems`
--

CREATE TABLE `volnteeritems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` bigint(20) NOT NULL,
  `number` bigint(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `volunteer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volnteers`
--

CREATE TABLE `volnteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `volunteer_name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `main_picture` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volnteers`
--

INSERT INTO `volnteers` (`id`, `volunteer_name`, `category_id`, `description`, `price`, `main_picture`, `created_at`, `updated_at`) VALUES
(7, 'Corporate Wellness Programs', 1, 'Corporate wellness programs are initiatives and strategies implemented by businesses and organizations to promote the health and well-being of their employees. These programs are designed to improve employees\' physical, mental, and emotional health, leading to increased job satisfaction, productivity, and overall organizational success.', 20, '20230911193149.jpg', '2023-09-11 16:31:49', '2023-09-11 16:31:49'),
(8, 'At-Home Test Kits', 1, 'At-home test kits are medical or diagnostic kits that allow individuals to collect samples, such as blood, saliva, urine, or swabs, in the comfort of their homes and then send those samples to a laboratory for analysis.', 15, '20230911193339.jpg', '2023-09-11 16:33:39', '2023-09-11 16:33:39'),
(9, 'Emergency Care', 1, 'In case of urgent medical needs, you can visit an emergency room for immediate attention.', 25, '20230911193522.jpg', '2023-09-11 16:35:22', '2023-09-11 16:35:22'),
(10, 'Dentists offer services', 1, 'oral health, including regular check-ups, cleanings, and dental procedures.', 45, '20230911193637.jpg', '2023-09-11 16:36:37', '2023-09-11 16:36:37'),
(11, 'Hospice Care', 1, 'For individuals with terminal illnesses, hospice care provides comfort and support at the end of life.', 25, '20230911193741.jpg', '2023-09-11 16:37:41', '2023-09-11 16:37:41'),
(12, 'Nephrology', 1, 'For kidney-related conditions and kidney disease, nephrologists provide care.', 120, '20230911194103.jpg', '2023-09-11 16:41:03', '2023-09-11 16:41:03'),
(15, 'Blood Donation', 1, 'Blood donation is the voluntary act of giving a portion of your blood to be used for medical purposes. Donated blood plays a critical role in healthcare as it is used in various medical treatments and emergencies to save lives.', 50, '20230911185414.jpg', '2023-09-11 15:54:14', '2023-09-11 16:03:16'),
(16, 'General Medical Tests', 1, 'General medical tests are routine or standard diagnostic assessments that healthcare professionals use to evaluate a person\'s overall health, screen for common health conditions, and monitor specific aspects of their well-being.', 20, '20230911190258.jpg', '2023-09-11 16:02:58', '2023-09-11 16:02:58'),
(17, 'Specialized clinics', 1, 'Primary care clinics cover a wide range of routine and preventive healthcare services, such as:  annual physicals laboratory testing, such as blood tests and urine tests vaccinations screening and treatment for conditions like high cholesterol, high blood pressure, or diabetes care for minor symptoms, such as sore throat, cough, or nasal congestion treatment for common illnesses like colds, the flu, or urinary tract infections (UTIs) treatment of some injuries, such as minor cuts or burns', 20, '20230911191322.jpg', '2023-09-11 16:13:22', '2023-09-11 16:13:22'),
(18, 'Mental health clinics', 1, 'The providers in a specialized clinic will have specific training that focuses on medical fields such as:  cardiology dentistry dermatology ear, nose, and throat (ENT) gastroenterology gynecology and obstetrics neurology nutrition oncology', 10, '20230911191451.jpg', '2023-09-11 16:14:51', '2023-09-11 16:14:51'),
(19, 'Online Health Services', 1, 'Online health services have the potential to improve healthcare accessibility, particularly in remote or underserved areas, enhance patient convenience, and reduce the barriers of time and distance.', 10, '20230911192011.jpg', '2023-09-11 16:20:11', '2023-09-11 16:20:11'),
(20, 'Retail clinics', 1, 'Retail clinics offer convenient, same-day care for minor illnesses and healthcare needs for both adults and children. These clinics can be beneficial when you have a minor health issue and don’t want to wait a few days to get an appointment with your primary care provider.  Some of the services offered at a retail clinic may include:  treatment for minor illnesses, such as: colds ear pain bug bites minor cuts or wounds skin rash strep throat UTIs basic laboratory testing routine health screenings vaccinations In many cases, pricing at a retail clinic is standardized, so you have a good idea of what to expect as far as cost is concerned.', 10, '20230911192505.jpg', '2023-09-11 16:25:05', '2023-09-11 16:25:05'),
(21, 'Foldable Wheelchairs', 2, '1. The load bearing capacity of the portable wheelchair is 300 pounds; Product weight: 26 pounds; Seat size 18.5 x 16.5 inches. Folding size 30 x 29 x14 inches; Height from seat to floor: 20 inches; Front solid wheel size 6 inches; Rear solid wheel size 18 inches.', 200, '20230911195116.jpg', '2023-09-11 16:51:16', '2023-09-11 16:51:16'),
(22, 'Able Life Auto Cane', 2, 'Prevent Falls: The handle provides users with stability and balance when standing or sitting from the car; compatible with most vehicles, the grab bar fits parallel to your car when inserted into a U-shaped door striker or latch', 20, '20230911195201.jpg', '2023-09-11 16:52:01', '2023-09-11 16:52:01'),
(23, 'Walking Cane LIXIANG', 2, 'LIXIANG COLLAPSIBLE& COMPACT WALKING CANE - In order to provide a convenient option for those needing assistance, we develop this folding walking cane. It can smoothly and securely locks in place to provide extra stability while walking on any surface. Ergonomically-designed grip T-handle together provide users with maximum safety and comfort while exhibiting high quality and sustainability.', 40, '20230911195247.jpg', '2023-09-11 16:52:47', '2023-09-11 16:52:47'),
(24, 'VOCIC Alternating Air Pressure Mattress', 2, 'he air mattress surface is equipped with micro-breathable vents, creating an air circulation system that reduces discomfort during prolonged bed rest, ensuring dryness and breathability for enhanced comfort, thus effectively alleviating and preventing bedsores. Sleep Air Pump: Our pump features a ceramic valve and pure copper core, which ensures high-quality performance and longevity.', 100, '20230911195328.jpg', '2023-09-11 16:53:28', '2023-09-11 16:53:28'),
(25, 'Bedsore Turning Wedge', 2, 'Bedsore Turning Wedge The bed wedge pillow adopts an ergonomic slope design, which is suitable for side sleeping to prevent bedsores. It can provide support for the back, waist and spine, relieve pressure, and prevent pressure sores and ulcers. Multi—Functional Triangle Pillow Wedge Incline pillow wedge consists of two wedge-shaped pillows, which can be used separately or together.', 60, '20230911195435.jpg', '2023-09-11 16:54:35', '2023-09-11 16:54:35'),
(26, 'Home-Car-First-Aid-Kit-Camping-Essentials', 2, 'GREAT FOR HOME FAMILY USING- Everything you need is in this kit ! All kinds of Bandages (XS, S, M, L), Iodine prep pads, Burn Geal, Tourniquet, Instant Cold Pack, Fever Cooling Patch, Gloves, Glow Stick, Bandage scissors, Metal tweezers, Whistle, etc. To help care for minor wounds, cuts, scrapes, trauma, burns and other most potential emergency. Ideal for baby, kids, children, adult (Men,Women), earthquake preparedness, household, dog, cat, pet.', 20, '20230911195800.jpg', '2023-09-11 16:58:00', '2023-09-11 16:58:11'),
(27, 'Fingertip Pulse Oximeter', 2, 'ACCURATE, RELIABLE, & QUICK READINGS - Clinically tested and proven consistent results. Receive blood SpO2, Pulse Rate, and Pulse Strength results within 8 to 10 seconds on large digital red LED Pulse Oximeter display.', 20, '20230911195909.jpg', '2023-09-11 16:59:09', '2023-09-11 16:59:09'),
(28, 'Dotday Walker Tray with Cup Holder', 2, 'Adapt to Most Walkers: Dotday‘s walker tray has a length of 16 1/8 inches and a width of 12 1/2 inches, which is compatible with most traditional walkers. Compare to other walker trays that require measuring the size of the walker’s cross hand bar to fit the holes on both sides of the tray, our walker tray can be installed easily and used with almost all kinds of walker with a hand crossbar.', 30, '20230911200005.jpg', '2023-09-11 17:00:05', '2023-09-11 17:00:05'),
(29, 'Braun ThermoScan 7+ Connect– Digital Ear Thermometer', 2, 'ACCURATE RESULTS – Get results in seconds with the Braun ThermoScan 7+ Connect Thermometer. This ear thermometer for adults and kids uses Age Precision Technology for age-adjustable fever guidance. Easily interpret results with the color-coded display. EASY TO USE – Featuring a pre-warmed tip, it can be used comfortably as a baby thermometer.', 75, '20230911200051.jpg', '2023-09-11 17:00:51', '2023-09-11 17:00:51'),
(30, 'Oxygen Tank Holder', 2, 'ACCURATE RESULTS – Get results in seconds with the Braun ThermoScan 7+ Connect Thermometer. This ear thermometer for adults and kids uses Age Precision Technology for age-adjustable fever guidance. Easily interpret results with the color-coded display.', 30, '20230911200145.jpg', '2023-09-11 17:01:45', '2023-09-11 17:01:45'),
(31, 'Oxygen Tank Holder', 2, 'An oxygen tank holder is a device designed to secure and transport oxygen cylinders or tanks safely and conveniently. These holders are essential for individuals who rely on supplemental oxygen therapy, whether at home or when traveling.', 80, '20230911200331.jpg', '2023-09-11 17:03:31', '2023-09-11 17:03:31'),
(32, 'Chronic Pain Medications', 3, 'Opioids, non-steroidal anti-inflammatory drugs (NSAIDs), and other analgesics may be prescribed for chronic pain conditions.', 15, '20230911200637.jpg', '2023-09-11 17:06:37', '2023-09-11 17:06:37'),
(33, 'Chronic heart disease', 3, 'Chronic heart disease, also known as cardiovascular disease (CVD) or coronary artery disease (CAD), refers to a group of conditions that affect the heart and blood vessels', 22, '20230911200918.jpg', '2023-09-11 17:09:19', '2023-09-11 17:09:19'),
(34, 'Blood Pressure Medication', 3, 'Blood pressure medications, also known as antihypertensive medications, are prescribed to individuals with high blood pressure (hypertension) to help lower and manage their blood pressure levels.', 33, '20230911201207.png', '2023-09-11 17:12:07', '2023-09-11 17:12:07'),
(35, 'Anticoagulants', 3, 'These are used to prevent blood clots and are often taken on a long-term basis.', 25, '20230911201511.jpg', '2023-09-11 17:15:11', '2023-09-11 17:15:11'),
(36, 'Medications for Chronic Infections', 3, 'Some infections, like HIV, require long-term antiviral medications.', 35, '20230911201635.jpg', '2023-09-11 17:16:35', '2023-09-11 17:16:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `send_s_m_s`
--
ALTER TABLE `send_s_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sent_sms`
--
ALTER TABLE `sent_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volnteerdetails`
--
ALTER TABLE `volnteerdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volnteerdetails_user_id_foreign` (`user_id`),
  ADD KEY `volnteerdetails_volunteer_id_foreign` (`volunteer_id`);

--
-- Indexes for table `volnteeritems`
--
ALTER TABLE `volnteeritems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volnteeritems_user_id_foreign` (`user_id`),
  ADD KEY `volnteeritems_volunteer_id_foreign` (`volunteer_id`);

--
-- Indexes for table `volnteers`
--
ALTER TABLE `volnteers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volnteers_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_s_m_s`
--
ALTER TABLE `send_s_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sent_sms`
--
ALTER TABLE `sent_sms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volnteerdetails`
--
ALTER TABLE `volnteerdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volnteeritems`
--
ALTER TABLE `volnteeritems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volnteers`
--
ALTER TABLE `volnteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `volnteerdetails`
--
ALTER TABLE `volnteerdetails`
  ADD CONSTRAINT `volnteerdetails_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `volnteerdetails_volunteer_id_foreign` FOREIGN KEY (`volunteer_id`) REFERENCES `volnteers` (`id`);

--
-- Constraints for table `volnteeritems`
--
ALTER TABLE `volnteeritems`
  ADD CONSTRAINT `volnteeritems_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `volnteeritems_volunteer_id_foreign` FOREIGN KEY (`volunteer_id`) REFERENCES `volnteers` (`id`);

--
-- Constraints for table `volnteers`
--
ALTER TABLE `volnteers`
  ADD CONSTRAINT `volnteers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

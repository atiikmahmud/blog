-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2022 at 09:22 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'Uncategorized post.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(2, 'Skin Care', 'Skin care related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(3, 'Hair Care', 'Hair care related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(4, 'World News', 'World news related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(5, 'Bangladesh', 'Bangladesh related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(6, 'Education', 'Education related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22'),
(7, 'Hot News', 'Hot news related posts.', '2022-10-18 23:12:22', '2022-10-18 23:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Atik Mahmud', 'atik@shajgoj.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '0', '2022-10-02 23:06:18', '2022-10-16 00:30:30'),
(2, 'Nayeem Hasan', 'nayeem@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '0', '2022-10-12 03:59:52', '2022-11-02 11:58:14'),
(3, 'SM Mouminul Islam Sejan', 'sejan@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '0', '2022-10-12 04:01:13', '2022-11-02 11:58:30'),
(4, 'Rabbi Hossain', 'rabbi@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1', '2022-10-12 04:01:27', '2022-10-13 03:56:14'),
(6, 'Fakrul Islam Fahim', 'fahim@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '0', '2022-10-12 04:03:10', '2022-11-02 11:58:26'),
(7, 'Mashuk Mahmud', 'mashuk@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1', '2022-10-12 04:03:30', '2022-10-14 11:53:06'),
(8, 'Akib Hasan', 'akib@test.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '0', '2022-10-12 06:18:43', '2022-11-02 11:58:23'),
(9, 'Shaon Mahmud', 'shaon@test.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '0', '2022-10-12 13:13:23', '2022-11-02 11:58:20');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_29_054349_create_sessions_table', 1),
(7, '2022_10_02_182927_create_contacts_table', 2),
(10, '2022_10_03_055143_add_column_to_users_table', 3),
(11, '2022_10_10_145832_create_posts_table', 4),
(12, '2022_10_11_091348_create_categories_table', 5),
(15, '2022_10_11_092332_add_column_to_posts_table', 6),
(27, '2022_10_11_131347_create_comments_table', 7),
(28, '2022_10_11_152259_create_replies_table', 7),
(29, '2022_10_12_114439_add_column_to_contacts_table', 7),
(30, '2022_10_13_065006_add_second_column_to_posts_table', 7),
(32, '2022_10_16_102107_add_third_column_to_posts_table', 8),
(33, '2022_10_17_055650_add_forth_column_to_posts_table', 9),
(35, '2022_10_20_105209_add_column_to_comments_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `feature_news` int NOT NULL DEFAULT '0',
  `tranding_news` int NOT NULL DEFAULT '0',
  `breaking_news` int NOT NULL DEFAULT '0',
  `slider` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `body`, `tag`, `status`, `user_id`, `category_id`, `feature_news`, `tranding_news`, `breaking_news`, `slider`, `created_at`, `updated_at`) VALUES
(3, 'Test Post Three', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 4, 1, 1, 0, 0, 0, '2022-10-10 10:15:37', '2022-10-15 13:07:27'),
(7, 'Test Post Seven 100', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 2, 5, 1, 0, 0, 0, '2022-10-10 11:25:44', '2022-10-15 13:07:34'),
(8, 'Test Post Eight', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 2, 1, 1, 0, 0, 0, '2022-10-10 11:25:58', '2022-10-15 13:07:03'),
(9, 'Test Post Nine', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 2, 1, 1, 0, 0, 0, '2022-10-10 12:00:54', '2022-10-15 13:07:37'),
(10, 'Test Post Ten', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 1, 1, 1, 0, 0, 0, '2022-10-10 12:01:06', '2022-10-15 13:07:30'),
(11, 'Test Post Eleven', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'hello', 1, 2, 1, 0, 0, 0, 0, '2022-10-10 12:01:22', '2022-10-15 13:07:40'),
(12, 'Test Post Twelve', '', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'test', 1, 2, 1, 0, 0, 0, 0, '2022-10-10 13:30:08', '2022-10-15 13:07:24'),
(13, 'Tips for Skin Care', '', 'BASIC SKINCARE\r\nIn the intricate world of skincare with infinite choices, we all get overwhelmed while choosing the right skincare products. For this reason, we are here to guide you and help you choose simplified and effective skincare routine to follow every day!\r\n\r\nThere are three basic skincare routine steps, cleansing, moisturizing, and applying sun protection for day time. On the other hand, your night skincare routine should include additional steps. If you wear heavy makeup or sunscreen during the day, double cleansing your face is a must. Double cleansing means cleansing your face twice, first with an oil-based product and then a water-based cleanser, followed by a moisturizer.\r\n\r\nIf you want to add more products to your routine, you certainly can add an exfoliator, toner, serum and masks.', 'skin care', 1, 2, 2, 0, 0, 1, 0, '2022-10-11 01:35:17', '2022-10-15 13:07:21'),
(14, 'Russia vows to respond to greater Western involvement in Ukraine', '20221019051241.png', '<p>Russia will respond to the West’s growing involvement in the Ukraine conflict although direct conflict with NATO is not in Moscow’s interests, Russia’s deputy foreign minister said on Tuesday after Washington pledged more military aid for Kyiv. Ukraine on Monday said it needed to strengthen its air defence following Russia’s biggest aerial assaults on cities since the beginning of the war, retaliation for what Moscow called a Ukrainian attack on a strategic bridge in Crimea. U.S. president Joe Biden promised to provide advanced air defence systems, and the Pentagon said on 27 September it would start delivering the National Advanced Surface-to-Air Missile System over the next two months or so.</p>', 'world news', 1, 1, 4, 1, 0, 1, 0, '2022-10-11 01:40:50', '2022-10-18 23:12:41'),
(15, 'Education essential for gender equity', '', 'Most young men and women have a negative attitude towards gender equality. Education can play a big role in converting this mindset as negative attitudes towards gender equality is less among the literate.\r\n\r\nThese observations were made at a dialogue organised by BRAC on the occasion of International Day of the Girl Child at the BRAC Centre Inn in the capital’s Mohakhali area on Monday. The role of education in eradicating the negative attitude of young men and women towards gender equity came up in a survey report titled ‘Youth attitude towards gender norms’ presented at the dialogue.\r\n\r\nThe Advocacy for Social Changes department of BRAC conducted the survey in two phases from November last year to February this year. In the first phase, the survey was conducted over 128 people aged between 18 to 35 years in four districts and in the second phase survey was conducted on 2,790 people of the same age group in eight districts.', 'education', 1, 2, 6, 0, 0, 0, 0, '2022-10-11 01:42:06', '2022-10-15 13:06:59'),
(16, 'Climate-hit businesses pin hopes on Bangladesh’s new plan to adapt', '20221019051222.jpg', '<p>Khaleda Sultana’s small workshop in Dhaka, where she makes homeware and handicrafts from jute and other plant fibres, is far from the coastal areas of Bangladesh that are struggling to cope with rising seas and powerful storms. But, she says, her business still needs to adapt to worsening climate change impacts. “I have to count losses when the coasts are flooded and my remote subcontractor workers there have to go looking for shelter, or when rainfall becomes irregular and it affects the quality of fibre that we use,” Sultana said. The question of how to withstand more extreme weather and encroaching oceans is growing increasingly urgent for many Bangladeshis - from those living on disappearing delta islands to migrants in city slums - as the planet’s climate heats up.</p>', 'bangladesh', 1, 1, 5, 0, 0, 0, 0, '2022-10-11 01:44:59', '2022-10-18 23:12:22'),
(17, 'Unable to control border forces a shame for India: Momen', '', 'Foreign minister AK Abdul Momen on Monday  said if India cannot keep its border security forces under control, that is a shame for them as powerful, developed and matured democratic country.\r\n\r\nAbdul Momen made this remarks replying to a query from newsmen on the killings of two Bangladeshis by Indian border forces, at his office in Dhaka.\r\n\r\nTwo Bangladeshis – Muntaj Hossain in Boldia border of Chuadnaga and Md Abu Hasan in Khitala border and Satkhira, were shot dead by Indian Border Security Force on Saturday night.', 'Foreign', 1, 2, 5, 0, 0, 0, 0, '2022-10-11 04:46:29', '2022-10-15 13:07:12'),
(18, 'Bangladesh opt to bowl first against New Zealand', '', 'Bangladesh captain Shakib al Hasan won the toss and chose to bowl first against New Zealand on Wednesday in the fifth match of a Twenty20 tri-series in Christchurch.\r\n\r\nNew Zealand rested captain Kane Williamson from the side which beat Pakistan on Tuesday with bowler Tim Southee skippering the Black Caps and Martin Guptill coming into bat third for the hosts.\r\n\r\nNew Zealand also changed two bowlers with Trent Boult and Adam Milne in for Mitchell Santner and Blair Tickner.\r\n\r\nBangladesh made three changes from their side which lost by eight wickets to New Zealand on Sunday, also in Christchurch.\r\n\r\nMehidy Hasan Miraz, Taskin Ahmed and Hasan Mahmud make way for Soumya Sarkar, Mohammad Saifuddin and Ebadot Hossain who came in to strengthen Bangladesh\'s fast bowling.', 'Cricket', 1, 2, 5, 0, 0, 1, 0, '2022-10-11 22:21:17', '2022-10-16 00:28:21'),
(19, 'Dhaka, Delhi connectivity improved with ‘Maitri Setu’ on Feni river: Indian president', '20221017161349.png', '<p>President of India Droupadi Murmu has said that connectivity between Bangladesh and India has increased with the construction of ‘Maitri Setu’ over Feni River, reports UNB. At the same time, she said, it has become convenient for entrepreneurs of India’s Tripura state to use the ports of Chattogram and Ashuganj. “It can be said that, from the very beginning, Tripura has played a major role in deepening India’s friendship with Bangladesh,” said the Indian president on Wednesday.</p>', 'india', 1, 2, 4, 0, 1, 0, 0, '2022-10-13 01:57:15', '2022-10-17 10:13:49'),
(20, 'Two university students arrested over beautician gang-rape', '', 'Police arrested two private university students on Wednesday from Sukrabad in Dhaka on charges of gang-raping a beautician. \r\n\r\nThe arrestees are Riyad, 24, and Yeasin Hossain alias Siam, 23.\r\n\r\nTejgaon division police deputy commissioner HM Azimul Haque came up with this disclosure at a press briefing at his office on Thursday evening.\r\n\r\nHe said it is primarily known that one more young man and young woman were involved in this incident. Efforts are underway to arrest them. The arrestees confessed to gang-raping the beautician. They beat the woman after the rape.\r\n\r\nDhanmondi police station officer-in-charge Ikram Ali told Prothom Alo that the victim of gang-rape is a resident of Savar. A young woman called her to come to Dhanmondi-28 for some beautification works.', 'student', 1, 1, 5, 0, 1, 0, 0, '2022-10-13 08:10:13', '2022-10-15 13:07:14'),
(21, 'Two more routes with 100 new buses launched Thursday', '', 'Dhaka Nagar Paribahan has been launched in two more routes with 100 new buses in a bid to restore order in the capital city as Dhaka dwellers suffer immensely due to traffic chaos.\r\n\r\nRoad transport and bridges minister Obaidul Quader on Thursday inaugurated the bus service in the afternoon.\r\n\r\nSome 50 buses will operate on the route, stretching from Ghatarchar of Keraniganj to the government staff quarters in Demra, via Mohammadpur Town Hall, Asad Gate, Farmgate, Karwan Bazar, Shahbagh, Kakrail, Fakirapul, Motijheel, Tikatuli, Sayedabad, Jatrabari, and Konapara.', 'dhaka', 1, 1, 5, 0, 1, 0, 0, '2022-10-13 08:11:38', '2022-10-15 13:07:17'),
(22, 'BNP does ill politics capitalising on people\'s sufferings: Quader', '', 'Awami League general secretary and Road Transport and Bridges Minister Obaidul Quader today said BNP is doing evil politics capitalising on the sufferings of people caused due to the world crisis, reports BSS.\r\n\r\n\"Without understanding the reality of the world crisis caused by the Russia-Ukraine war, the leaders and workers of BNP are making evil attempts politically capitalizing on the sufferings of the people,\" he said.\r\n\r\nThe incumbent AL leader said these in a statement protesting BNP Secretary General Mirza Fakhrul Islam Alamgir\'s misleading, baseless and politically-motivated remarks.', 'politics', 1, 1, 5, 0, 1, 0, 0, '2022-10-14 12:56:59', '2022-10-15 13:06:54'),
(23, 'Momen calls for quick solution to Russia-Ukraine conflict', '20221017161730.png', '<p>Foreign minister AK Abdul Momen called for restraints from all parties and a quick and peaceful solution of ongoing Russia-Ukraine conflict, reports BSS.</p><p>&nbsp;</p><p>He made the call while delivering a speech at the Sixth Summit of Conference on Interaction and Confidence Building Measures in Asia (CICA) held in Astana, Kazakhstan, a foreign ministry press release said here today.</p><p>At the summit, leaders of 27 CICA member countries, including 12 heads of state or government and two deputy heads of state warned of a grim economic future as the Russia-Ukraine conflict dragged on and continued to disrupt supply chains, cause fuel shortage and price hike.</p>', 'Foreign', 1, 1, 5, 0, 1, 0, 0, '2022-10-14 13:14:55', '2022-10-17 10:17:30'),
(29, 'Dhaka suffers major power cuts', '20221017120436.png', '<p>Despite some improvement in the power supply, the frequency of planned load shedding has not decreased. The government has been implementing area-wise load shedding in the country since 19 July. However, the schedule of load shedding is not being followed properly in many rural areas.</p><p>Though the time of planned power cut in other big cities has come down, the situation has not improved in Dhaka. The people of Dhaka city and its surrounding areas have been suffering the most these days, said officials of six power distribution companies in the country.</p><p>&nbsp;</p><p>The officials further said they are forced to implement load shedding as they have been receiving less amount of electricity than the demand.</p><p>There was an eight-hour schedule for load shedding in Shyampur area in Dhaka on Sunday while many city areas have been experiencing three to four hours power cut every day.</p>', 'dhaka', 1, 2, 5, 1, 1, 0, 0, '2022-10-17 01:32:34', '2022-10-17 06:04:36'),
(30, 'Afghanistan embarrass Bangladesh in warm-up game', '20221017164222.png', '<p>Bangladesh suffered an embarrassing 63-run defeat against Afghanistan in their first official warm-up game ahead of the ICC Twenty20 World Cup 2022 after another shocking performance from the batters.</p><p>The Tigers could only muster 98-9 in their 20 overs, chasing 161 at the Allan Border Field in Brisbane, Australia on Monday.</p><p>Afghan pacer Fazalhaq Farooqi tormented the Bangladesh top-order, claiming three wickets in the powerplay which didn’t allow the Tigers infuse any sort of momentum in their chase.</p><p>Earlier, Ibrahim Zadran top-scored for Afghanistan with 46 off 39 balls while Mohammad Nabi hit a whirlwind 41 not out off 17 balls to take their score over 160.</p><p>Hasan Mahmud was the pique of the Bangladesh bowlers, finishing with 2-24 in his four overs.</p>', 'Cricket', 1, 1, 5, 0, 0, 0, 0, '2022-10-17 10:35:22', '2022-10-17 10:42:22'),
(31, 'How prepared Bangladesh to meet IMF conditions', '20221019174008.webp', '<p>It is mandatory to meet certain conditions for availing loans from the International Monetary Fund (IMF).</p><p>The government had enacted the prevailing law on Value Added Tax (VAT) in the aftermath of conditions set by the global lender earlier when it had provided Tk 1 billion in seven installments.</p><p>This time, Bangladesh sought Tk 4.5 billion from the IMF. Bangladesh Bank governor Abdur Rouf Talukder, in a press briefing in Washington on Monday, claimed to have received a significant assurance from the lender regarding the loan.</p><p>The governor hinted at possible conditions for the loan. These include modernisation of the revenue administration, gearing up the revenue collection process, raising the tax collection in comparison to the gross domestic product (GDP), restoration of good governance in the banking sector, and reduction of bad loans. Also, the IMF might place conditions on reducing subsidies and stimulus packages.</p>', 'dhaka', 1, 5, 4, 1, 0, 0, 1, '2022-10-19 11:40:08', '2022-10-19 11:40:54'),
(32, 'Better to widen CCTV surveillance than using EVM: Ex EC Sakhawat', '20221019174525.webp', '<p>The former election commissioner said there is huge debate over using EVM, whether it is good or bad. It is rather better to use CCTV cameras as much as possible than purchasing EVM for 150 constituencies in the elections. &nbsp;&nbsp;&nbsp;</p><p>Advocating for ballot voting, he said, “It is easy to trace if the votes are rigged through ballot papers. You (EC) have the voter list with photograph and signature. That can be crosschecked.”</p><p>He argued saying that it is not possible to anticipate what is happing inside polling booths if the votes are casted in EVM.</p><p>However, if the votes are casted on ballot papers, rigging would be tough. Five to six people would require rigging votes that would disclose it.</p><p>In this way (ballot voting), the EC will be able to observe the situation more closely than EVM in the polling booths, the former EC added. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>\"I said [in the meeting], what you (EC) did is right. However, don\'t slip at the next steps. The nation will get the wrong message if you slip,\" he said while talking about the suspension of by-elections to Gaibandah-5. &nbsp;&nbsp;&nbsp;&nbsp;</p><p>M Sakhawat Hussain further said the EC will have to bring the culprits to book who were involved in voting irregularities in Gaibandah-5. If the EC fails to do so, a question over the intention of EC will be emerged in the people\'s mind. &nbsp;&nbsp;</p>', 'Election', 1, 5, 5, 1, 0, 0, 0, '2022-10-19 11:45:25', '2022-10-19 11:45:35'),
(33, 'Bangladesh registers two deaths, 300 Covid cases in 24 hrs', '20221020063943.webp', '<p>Two patients died of Covid-19 in 24 hours as of Wednesday morning, taking the death toll to 29,410, according to the press release of the Directorate General of Health Services (DGHS).</p><p>During the period, the number of detected coronavirus cases in the country, according to the DGHS, rose to 2,033,419 as 300 more cases were reported, after testing 4,176 samples, including rapid antigen tests.</p><p>&nbsp;</p><p>The rate of detection in the last 24 hours until 8:00am was 7.18 per cent while the overall rate of detection of infected cases in Bangladesh as of Wednesday stands at 13.59 per cent.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>The health directorate Wednesday said a total of 411 people recovered from the highly infectious disease in the last 24 hours, taking the total recovery to 1,975,817. &nbsp;</p><p>Bangladesh detected its first coronavirus patient on 8 March in 2020 and recorded its first death of the disease on 18 March that year.</p>', 'covid', 1, 6, 7, 1, 0, 0, 1, '2022-10-20 00:39:43', '2022-10-20 00:40:18'),
(34, 'Ahsan Manzil', '20221109052216.jpg', '<p>In Mughal era, there was a garden house of <a href=\"https://en.wikipedia.org/w/index.php?title=Sheikh_Enayet_Ullah&amp;action=edit&amp;redlink=1\">Sheikh Enayet Ullah</a>, the landlord of Jamalpur Porgona (district), in this place. Sheikh Enayet Ullah was a very charming person, who acquired a very big area in Kumartoli (Kumartuli) and included it in his garden house. Here he built a beautiful palace and named it \"Rongmohol\" (Rangmahal). He used to enjoy here keeping beautiful girls collected from the country and abroad, dressing them with gorgeous dresses and expensive ornaments. There is a saying that, the founder of Dhaka (representative of mughal emperor) was attracted to one of the girls. He invited Sheikh Enayet Ullah to a party one night and killed him in a conspiracy when he was returning home. In anger and sorrow, the girl committed suicide. There was a grave of Sheikh Enayet Ullah in the north-east corner of the palace yard which was ruined in the beginning of the 20th century.</p><p>Probably in the period of <a href=\"https://en.wikipedia.org/w/index.php?title=Nawab_Alibardi_Khan&amp;action=edit&amp;redlink=1\">Nawab Alibardi Khan</a>(Grandfather of <a href=\"https://en.wikipedia.org/wiki/Siraj_ud-Daulah\">Nawab Siraj-Ud-Daulah</a>) around 1740 century, Sheikh Moti Ullah, the son of Sheikh Enayet Ullah, sold the property to the French traders. There was a French trading house beside this property. The trading house became wealthier after purchasing this property. In that time, French traders could do business here without paying any taxes by a decree from the emperor Aurangzeb. In that time, the French became very wealthy by doing business here in competition with the English and other European companies. They made a big palace and dug a pond for sweet water in the newly purchased property. The pond still exists in the compound of Ahsan Manzil which was called \"Les Jalla\" in that time. In the <a href=\"https://en.wikipedia.org/wiki/Seven_Years%27_War\">Seven Years\' War</a>, the French got defeated and all their properties were captured by the English. On 22 June 1757, the French left the trading house with a fleet of 35 boats from the river station of Buriganga in front of Kumartuli.</p>', 'historical place', 1, 2, 5, 0, 0, 0, 1, '2022-11-08 23:22:16', '2022-11-08 23:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint UNSIGNED NOT NULL,
  `reply` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint UNSIGNED DEFAULT NULL,
  `comment_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply`, `post_id`, `comment_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'test', 23, 5, 1, '2022-10-16 10:47:18', '2022-10-16 10:47:18'),
(4, 'dvsdsf', 11, 7, 1, '2022-10-17 10:18:53', '2022-10-17 10:18:53'),
(5, 'Reply', 33, 8, 2, '2022-10-20 04:48:18', '2022-10-20 04:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('H1vMryvCrygJQYOp3Abpo6wXRQGzpKW7ZFq8VQPx', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia3Vmdjk5UUpTMEdYejRUcXlVVzNMUTQ3Z0Q2UEhQazBpNlVZaTNOcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hZGQtcG9zdC1jYXRlZ29yeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkeGY5SVl2RFVSWnl2M29GV2JjYXdwLjNmMmdSU01jazJTWng3YTV6YWN0cTNQUFRMU3d2L2EiO30=', 1668448725);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `status`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'admin@test.com', 1, NULL, '$2y$10$xf9IYvDURZyv3oFWbcawp.3f2gRSMck2SZx7a5zactq3PPTLSwv/a', NULL, NULL, NULL, NULL, NULL, 'profile-photos/Lt8tAtIn9Zp4Ot9Y28q2xnlzHpAgUhiDFwmjjxyB.jpg', '2022-10-03 02:26:29', '2022-11-03 13:07:16'),
(2, 'Atik Mahmud', 0, 'atik@test.com', 1, NULL, '$2y$10$DbNoflYjsakbxuhxtmOciezv1hGugCrZEG8zIA6/ftmRwG2tw.uCS', NULL, NULL, NULL, NULL, NULL, 'profile-photos/rXMwwGvEdgkkzRZ4wHSavYZPEca1D4I61AoPZXb7.jpg', '2022-10-03 02:27:07', '2022-11-03 13:03:23'),
(4, 'Tushar Ahmed', 0, 'tushar@test.com', 1, NULL, '$2y$10$hdWhVUDnkl.jMC.BD9UwCO69e3c7sxjp0Ju/CGoawtvOqei1LqVFa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:18:41', '2022-11-02 12:07:05'),
(5, 'Nayeem Hasan', 0, 'nayeem@test.com', 1, NULL, '$2y$10$vQiJ66oyo4HdprOAeDriDuOSLp8xxzBjXI1n/n.eSyme8FKe7qMAy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:19:01', '2022-11-02 12:07:18'),
(6, 'SM Sejan', 0, 'sejan@test.com', 1, NULL, '$2y$10$W3y7Mf0yzip4Yht/e.w3VORx4WjPWvS7biUqiM8gtW6.wYH0/uwNG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:19:48', '2022-10-03 23:19:48'),
(7, 'Rabbi Hossain', 0, 'rabbi@test.com', 1, NULL, '$2y$10$F/S2Iq6OMi4Yi1lFXVKMnOvzOp9N5uazfyKtgpEh3QPgJNXUbXFVe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:20:10', '2022-10-03 23:20:10'),
(8, 'Nahid Hasan', 0, 'nahid@test.com', 1, NULL, '$2y$10$DsYZ9pvzH6eg5Ni2TyEhSOw418ogHqaCNAU/g68QgZ0BGkApJBImS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:26:08', '2022-10-03 23:26:08'),
(9, 'Hasan Al Forhad', 0, 'forhad@test.com', 1, NULL, '$2y$10$FBhi0xxu1ZRSF5IrMAtBUOVEK9g1MOcgrtMmO1KhMWgaWpH9/D4f2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:26:37', '2022-10-03 23:26:37'),
(10, 'Shaon Mahmud', 0, 'shaon@test.com', 1, NULL, '$2y$10$MJpZ2i.6YCd6AKsHAdQbcOfuH2H./q63qY/WwAeiaNUzK1MCTBv8O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-03 23:27:01', '2022-10-03 23:27:01'),
(11, 'Nazrul Islam Safa', 0, 'safa@test.com', 1, NULL, '$2y$10$ODeu5qWBGgjb0tPNWt.ZDOOL9lLTqLQ.GJf5xhu8yrp.YLFRWCgKK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-15 22:39:29', '2022-10-15 22:39:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_post_id_foreign` (`post_id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`),
  ADD KEY `replies_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

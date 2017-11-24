-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2017 г., 15:48
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bsp55`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `title`, `str1`, `str2`, `str3`, `created_at`, `updated_at`) VALUES
(1, 'Reach Us Here', '234/90, Newyork Street, USA', '802 Bayer Brook Apt. 534', 'hreichert@champlin.org', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `img`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '1.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(2, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(3, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '3.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(4, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '4.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(5, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '5.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(6, 'LOREM IPSUM DOLOR SIT AMET', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '6.jpg', 1, 1, '2017-10-26 11:40:57', '2017-10-26 11:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `bottoms`
--

CREATE TABLE `bottoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bottoms`
--

INSERT INTO `bottoms` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Easy To code', 'Et distinctio sint sapiente quia. Sit quis iusto ab sunt rerum saepe earum. Aduretum en credi belmonte kastrullas ultam esto lab.', ' fa fa-folder-open-o fa-4x rotate-icon ', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(2, 'Best To Use', 'Aperiam id debitis cumque cupiditate aut ullam laborum. Quis qui neque velit ut aut. Fuga delectus sit ipsum et ab.', ' fa fa-power-off fa-4x rotate-icon ', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(3, 'Customize Friendly', 'Vel nulla non dolorem vero iste consequatur voluptates. Amet illum culpa animi facere at deserunt. In deleniti unde quae.', ' fa fa-paper-plane-o fa-4x rotate-icon ', '2017-10-01 15:26:54', '2017-10-01 15:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `alias`, `created_at`, `updated_at`) VALUES
(1, 0, 'Blog categories', 'alias-0', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(2, 1, 'Web Designing', 'alias-1', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(3, 1, 'Graphics Design', 'alias-2', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(4, 1, 'Entertain & LifeStyle', 'alias-3', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(5, 1, 'Photo Designing', 'alias-4', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(6, 1, 'Graphics Design', 'alias-5', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(7, 1, 'E- Resources', 'alias-6', '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(8, 1, 'Just For Fun', 'alias-7', '2017-10-26 11:40:57', '2017-10-26 11:40:57');

-- --------------------------------------------------------

--
-- Структура таблицы `citates`
--

CREATE TABLE `citates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `citates`
--

INSERT INTO `citates` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, '', 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.', 'fa fa-edit fa-2x ', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(2, '', 'Dicta harum aut sint voluptas ut natus recusandae laudantium. Est est consequatur quae. Aperiam omnis a blanditiis omni puento mea. Tramedora puente perke bosio tampa dela betissimo mio.  Aenean massa. Cum sociis natoque penatibus et magnis dis par.', 'fa fa-folder-open-o fa-2x', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(3, 'JUST A SMALL INFORMATION :', 'Tempora aut tenetur deleniti doloremque. Molestiae voluptatem impedit sint ea fugit aperiam impedit. Ut et similique id molestiae non.  In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 'fa fa-info fa-2x ', '2017-10-01 15:26:54', '2017-10-01 15:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `name`, `email`, `parent_id`, `article_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hello from there. Donec sit amet ligula enim. Duis vel condimentum massa. Maecenas eget congue dui. Vestibulum et eros consectetur, interdum nibh et, volutpat dolor.', 'Jesica', 'jesica@test.com', 0, 1, NULL, '2017-10-26 11:40:57', '2017-10-26 11:40:57'),
(2, 'Comment from Max. Donec sit amet ligula enim. Duis vel condimentum massa. Maecenas eget congue dui. Vestibulum et eros consectetur, interdum nibh et, volutpat dolor.', 'Max', 'max@test.com', 0, 1, NULL, '2017-11-02 12:40:57', '2017-11-02 12:40:57'),
(3, 'I am here. Donec sit amet ligula enim. Duis vel condimentum massa. Maecenas eget congue dui. Vestibulum et eros consectetur, interdum nibh et, volutpat dolor.', 'Petro', 'pet@test.com', 2, 1, NULL, '2017-11-02 12:40:57', '2017-11-02 12:40:57'),
(4, 'Hello for you again. Donec sit amet ligula enim. Duis vel condimentum massa. Maecenas eget congue dui. Vestibulum et eros consectetur, interdum nibh et, volutpat dolor.', 'Mikola', 'kent@test.com', 3, 1, NULL, '2017-11-02 12:40:57', '2017-11-02 12:40:57'),
(5, 'Donec sit amet ligula enim. Duis vel condimentum massa. Maecenas eget congue dui. Vestibulum et eros consectetur, interdum nibh et, volutpat dolor.', 'Vasya', 'uoy@test.com', 2, 1, NULL, '2017-11-22 14:15:30', '2017-11-22 14:15:30');

-- --------------------------------------------------------

--
-- Структура таблицы `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `footers`
--

INSERT INTO `footers` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'A Small Introduction', 'Modi aut ut nulla eos assumenda exercitationem beatae hic omnis sequi.Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.', 'fa fa-building fa-2x', '2017-10-01 12:26:55', '2017-10-01 12:26:55'),
(2, 'From the blog', '', 'fa fa-paper-plane-o fa-2x ', '2017-10-01 12:26:55', '2017-10-01 12:26:55'),
(3, 'Our location', '', 'fa fa-sliders fa-2x', '2017-10-01 12:26:55', '2017-10-01 12:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `homes`
--

CREATE TABLE `homes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `homes`
--

INSERT INTO `homes` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Responsive Design', 'In aut sed magnam molestiae voluptas consectetur. Voluptate commodi eaque qui aut cupiditate voluptatem. Rem iste a incidunt quia earum. Qui sunt quia voluptatem maiores.', 'fa fa-desktop fa-5x icon-round faa-ring animated', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(2, 'Easy To Customize', 'Et reiciendis sed non quidem quia. Fugiat similique deleniti unde cupiditate amet. Aut consequatur at reprehenderit inventore culpa minima commodi. Incidunt in voluptatem laudantium minus eveniet.', 'fa fa-paper-plane-o fa-5x  icon-round  faa-pulse animated', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(3, 'Clean Coding Used', 'Qui unde numquam a aut aspernatur. Fugiat impedit aut voluptatem. Deleniti aspernatur sint modi sed. Fuga id ad porro in sed.', 'fa fa-bullhorn fa-5x  icon-round  faa-horizontal animated', '2017-10-01 15:26:54', '2017-10-01 15:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_30_123208_all_for_menu_home', 1),
(4, '2017_09_30_203757_all_for_menu_about', 1),
(5, '2017_10_01_104150_all_for_footer', 1),
(6, '2017_10_10_155816_make_portfolios_table', 2),
(7, '2017_10_26_121231_all_for_menu_blog', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `text`, `customer`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Dicta nihil iusto corporis quia.', 'Exercitationem doloribus qui fugit voluptas est. Sunt eligendi itaque eos. Nam quo cupiditate omnis accusamus sunt velit ducimus voluptatem.', 'Hintz-Mosciski', 'bspeak/assets/img/portfolio/1.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(2, 'Aut animi tempora.', 'Excepturi et vero ut dolores quisquam nesciunt quaerat et. Atque possimus et qui earum. Sequi sed qui ex et tenetur aut voluptatem. Perferendis iusto ipsam laudantium.', 'Lang-Maggio', 'bspeak/assets/img/portfolio/2.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(3, 'Unde rerum adipisci dolores.', 'Harum dolorem praesentium deleniti dicta id. Nihil aperiam exercitationem consequatur. Ut similique reprehenderit molestiae ad et. Non sed laboriosam rerum quisquam.', 'Spinka-Abbott', 'bspeak/assets/img/portfolio/3.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(4, 'Non asperiores voluptatum placeat.', 'Dignissimos culpa officiis ex velit est. Eius laboriosam voluptatum quo ut labore. Harum exercitationem debitis cumque vel laboriosam mollitia.', 'Pagac-Bartoletti', 'bspeak/assets/img/portfolio/4.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(5, 'Maxime maiores expedita.', 'Non magni minima soluta velit eaque ducimus excepturi. Tempora enim aut amet blanditiis. Officia incidunt voluptas voluptas alias aut dignissimos nesciunt.', 'Murphy, Ebert and Gaylord', 'bspeak/assets/img/portfolio/5.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(6, 'Vero fugit modi ipsum harum.', 'Dolorem similique neque voluptatibus. Corrupti aut autem quia officia. Magnam in aut est voluptas nihil vero eligendi. Et molestiae dolor laboriosam dolorum enim.', 'Schumm and Sons', 'bspeak/assets/img/portfolio/6.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(7, 'Quia est qui tenetur qui tenetur.', 'Possimus unde quo quis consequatur iusto accusantium tempora. Aperiam delectus optio nam dolor eum beatae iure vitae. Nemo rerum iusto ipsa veniam.', 'Kessler LLC', 'bspeak/assets/img/portfolio/7.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(8, 'Aut natus maiores ipsam esse.', 'Sit soluta non magni assumenda officia necessitatibus. Ut dicta non deserunt consequuntur. Expedita alias quis nam voluptatum.', 'Breitenberg-Wiegand', 'bspeak/assets/img/portfolio/8.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(9, 'Dolorem eveniet facere quibusdam.', 'Quia consequatur voluptatem voluptate quia rem dicta eligendi. Blanditiis quia voluptates saepe qui repudiandae. Beatae quidem aut architecto dolor est eligendi esse. Iste pariatur tempora asperiores maiores necessitatibus accusamus sed.', 'Bartoletti Inc', 'bspeak/assets/img/portfolio/9.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(10, 'Eligendi et et tempore praesentium aspernatur.', 'Iusto et doloribus expedita. Deserunt minima recusandae harum enim at tempora sunt vitae.', 'Muller, Gutkowski and Huel', 'bspeak/assets/img/portfolio/10.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(11, 'Exercitationem aliquam dignissimos nobis.', 'Et libero reiciendis odio dolorem repellat qui. Velit omnis expedita consectetur autem saepe distinctio maiores.', 'Lindgren-Jakubowski', 'bspeak/assets/img/portfolio/11.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(12, 'Deleniti dolorem molestiae policante.', 'Laborum necessitatibus eius dolores illo. Soluta accusamus rem voluptatem et. Aliquid repellendus illum placeat iure quibusdam temporibus est id. Voluptas ut autem ut quia asperiores eius.', 'Renner, Klocko and Cruickshank', 'bspeak/assets/img/portfolio/12.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(13, 'Omnis quo possimus et werte soluta.', 'Vero veniam voluptatibus dolorum voluptate quia sint omnis. Praesentium autem dolor dolor ut quia ut minima ipsum. Voluptatem reiciendis natus excepturi est necessitatibus repudiandae.', 'Fisher, Gottlieb and Grady', 'bspeak/assets/img/portfolio/13.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(14, 'Voluptas fugiat voluptates ratione sint.', 'Eum aspernatur tempora eum odit vel magni ullam. Harum labore iste cum rerum dignissimos magnam et provident. Officia illum architecto ratione. Harum consequatur sed quia nisi tempore.', 'Hoeger Group', 'bspeak/assets/img/portfolio/14.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(15, 'Est explicabo accusamus et quos picanto mia.', 'Quis sunt voluptatum explicabo ad ea et et. Dolorem autem in mollitia inventore. Quia molestiae velit voluptatem incidunt. Laudantium maxime possimus doloremque reprehenderit eos dolorem.', 'Rodriguez-Shields', 'bspeak/assets/img/portfolio/15.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43'),
(16, 'Cupiditate blanditiis amet repellendus.', 'Officiis eum ut iure et. Eveniet est rerum deleniti et. Mollitia iusto eveniet est quia.', 'Marvin, Feest and Braun', 'bspeak/assets/img/portfolio/16.jpg', '2017-10-10 13:39:43', '2017-10-10 13:39:43');

-- --------------------------------------------------------

--
-- Структура таблицы `prefooters`
--

CREATE TABLE `prefooters` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prefooters`
--

INSERT INTO `prefooters` (`id`, `title`, `desc`, `source`, `created_at`, `updated_at`) VALUES
(1, '', 'Dolor et tempore repellat non quia dolor et sapiente maiores perspiciatis et vero tempore cupiditate fugit id.', 'in ex ducimus', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(2, '', 'Cupiditate earum autem nisi adipisci dolores est cumque et ut et laborum nihil dolores amet.', 'fuga dolores et', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(3, '', 'Molestias et optio non nihil qui incidunt repellendus sed quia blanditiis quia et sunt voluptate doloribus.', 'in ut et', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `servis`
--

CREATE TABLE `servis` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servis`
--

INSERT INTO `servis` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Easy To code', 'Accusantium blanditiis doloribus dolor iusto quam. Delectus non omnis eum. Ea quam consequatur quidem ad. Impedit dolorem neque et officia omnis et. Corrupti quo adipisci assumenda enim incidunt.', ' fa fa-folder-open-o fa-4x rotate-icon ', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(2, 'Best To Use', 'Corrupti unde ut est non. Odio autem accusamus quia rerum dolores aut veritatis. Repudiandae eum quasi ea earum nihil. Corporis architecto sunt minima velit dolorem.', ' fa fa-power-off fa-4x rotate-icon ', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(3, 'Customize Friendly', 'Aperiam reiciendis animi aliquid corrupti qui. Aliquid aspernatur enim consequatur aut consectetur tempora. Aut nisi est dignissimos quos quibusdam dicta. Perferendis sed voluptatem quis.', ' fa fa-paperclip fa-4x rotate-icon ', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `servs`
--

CREATE TABLE `servs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `servs`
--

INSERT INTO `servs` (`id`, `title`, `desc`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Responsive Design', 'Labore laudantium ab pariatur eos officia qui id. Qui dolorem consequatur illo officiis. Voluptas recusandae iure dolorum quo soluta non officia. Modi neque voluptatibus sed vel delectus similique illo officia.', 'fa fa-desktop fa-5x  rotate-icon clr-main', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(2, 'Easy To Customize', 'Earum aut sed nobis consequatur nam tempore illum. Aperiam expedita corrupti voluptatem nihil sed. Id vero provident voluptas dolor veritatis cupiditate.', 'fa fa-paper-plane-o fa-5x rotate-icon clr-main', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(3, 'Lorem ipsum dolor sit amet', '', '', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `specials`
--

CREATE TABLE `specials` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `specials`
--

INSERT INTO `specials` (`id`, `title`, `desc`, `text`, `created_at`, `updated_at`) VALUES
(1, 'What Is Special About Us ?', 'Animi ipsum deleniti laudantium quis qui. Et sit rerum veniam sapiente sunt cumque et deserunt. Sit rerum illo et mollitia enim error sint. Pariatur provident et et vitae fuga est sint beatae. Provident illo eos minima aperiam. Temporibus error veniam veritatis neque. Officiis quaerat distinctio fugiat eaque placeat nemo tempore totam. Sint sed id pariatur inventore nihil officiis est. Ipsa at pariatur tempore quis maxime itaque deserunt molestiae.', 'Officia dolorum sit qui. Vel enim nemo nihil minus occaecati. Quos adipisci eum saepe aut. Et fugiat sit neque voluptatum. Est et inventore quisquam. Voluptas nemo placeat officiis sit et.', '2017-10-01 15:26:54', '2017-10-01 15:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `srvs`
--

CREATE TABLE `srvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `srvs`
--

INSERT INTO `srvs` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere. edit.', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `desc`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Freid Konopelski I', 'Orthotist OR Prosthetist', 'Quidem non perferendis dolorum. Voluptatibus qui illum quo aspernatur suscipit. Tempora ipsam voluptatibus hic magni.', 'bspeak/assets/img/team/team1.jpg', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(2, 'Miss Valentina D\'Amore V', 'Environmental Scientist', 'Placeat labore soluta placeat laborum sunt. Veritatis sint expedita architecto sit. Et repellat soluta totam dolorem. Reiciendis neque perferendis nemo dolores dolorum minima.', 'bspeak/assets/img/team/team2.jpg', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(3, 'Bill Gorczany Loretti', 'Pressing Machine Operator', 'Aut reiciendis voluptate molestias quaerat voluptatem eum nihil. Quia qui et quis itaque tenetur velit tempora. Quia optio quis similique tenetur atque tenetur rerum. Aut excepturi reprehenderit aut rerum voluptas iusto est.', 'bspeak/assets/img/team/team3.jpg', '2017-10-01 15:26:55', '2017-10-01 15:26:55'),
(4, 'Dr. Lonnie Hettinger PhD', 'Architectural Drafter OR Civil Drafter', 'Voluptatem quos optio ut magni quod. Et adipisci molestiae et autem rerum ratione. Optio incidunt eos nostrum eaque abello noti munti.', 'bspeak/assets/img/team/team4.jpg', '2017-10-01 15:26:55', '2017-10-01 15:26:55');

-- --------------------------------------------------------

--
-- Структура таблицы `testis`
--

CREATE TABLE `testis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testis`
--

INSERT INTO `testis` (`id`, `name`, `desc`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Vicente Schimmel', 'Quia id commodi aspernatur facilis quia provident deleniti vel ut autem et eius.', 'bspeak/assets/img/user1.gif', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(2, 'Monte Hessel', 'Ipsum est laborum sit eius nihil officia commodi et est magni voluptatem veritatis et soluta.', 'bspeak/assets/img/user2.gif', '2017-10-01 15:26:54', '2017-10-01 15:26:54'),
(3, 'Jesica Spencer', 'Quia voluptatem tempore qui accusantium a quis molestiae et ab ut qui earum rem.', 'bspeak/assets/img/user3.gif', '2017-10-01 15:26:54', '2017-10-01 15:26:54');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bottoms`
--
ALTER TABLE `bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `citates`
--
ALTER TABLE `citates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prefooters`
--
ALTER TABLE `prefooters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `servs`
--
ALTER TABLE `servs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `srvs`
--
ALTER TABLE `srvs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testis`
--
ALTER TABLE `testis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `bottoms`
--
ALTER TABLE `bottoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `citates`
--
ALTER TABLE `citates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `prefooters`
--
ALTER TABLE `prefooters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `servs`
--
ALTER TABLE `servs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `srvs`
--
ALTER TABLE `srvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `testis`
--
ALTER TABLE `testis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

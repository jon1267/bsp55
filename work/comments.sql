-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2017 г., 15:50
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

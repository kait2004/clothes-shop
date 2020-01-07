-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 03 2019 г., 23:33
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `magazinelesson`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `cost` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `sex` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `cost`, `description`, `img`, `sex`) VALUES
(11, 'Куртка синяя', 6100, '', 'img/catalog/1.jpg', 1),
(12, 'Куртка с капюшоном', 6300, '', 'img/catalog/2.jpg', 1),
(13, 'Куртка с карманами', 3100, '', 'img/catalog/3.png', 1),
(14, 'Стильная кожанная куртка', 12000, '', 'img/catalog/6.jpg', 1),
(15, 'Кожанная куртка', 8800, '', 'img/catalog/4.jpg', 1),
(16, 'Куртка casual', 7100, '', 'img/catalog/5.jpg', 1),
(21, 'Джинсы синие', 4800, '', 'img/catalog/11.jpg', 1),
(22, 'Джинсы голубые', 4200, '', 'img/catalog/12.jpg', 1),
(31, 'Кеды серые', 2900, '', 'img/catalog/7.jpg', 1),
(32, 'Кеды черные', 4500, '', 'img/catalog/8.jpg', 1),
(33, 'Кеды с полоской', 5900, '', 'img/catalog/9.jpg', 1),
(34, 'Кеды allseason', 9200, '', 'img/catalog/10.jpg', 1),
(0, 'Женская куртка', 10300, '', 'img/catalog/jw1.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `mail`) VALUES
(1, 'adminadmin', 'fa6406d267685478a322fd56c363abc3', 'adminadmin', 'adminadmin@mail.ru'),
(2, 'kait2004', 'fa6406d267685478a322fd56c363abc3', 'adminadmin', 'adminadmin@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

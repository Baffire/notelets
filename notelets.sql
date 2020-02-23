-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 08 2020 г., 13:29
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `notelets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notelets`
--

CREATE TABLE `notelets` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notelets`
--

INSERT INTO `notelets` (`id`, `title`, `text`, `theme`) VALUES
(1, 'С днем рождения!', 'Счастья, здоровья!', 1),
(2, 'С новым годом!', 'Ура! Ура! Ура!', 2),
(3, 'С днем св. Валентина', 'Люблю!', 3),
(4, 'С Рождеством!', 'Ураааа!', 4),
(5, 'Счастливого Хеллуина', 'Сладость или гадость?', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `themes`
--

INSERT INTO `themes` (`id`, `name`) VALUES
(1, 'happy_birthday'),
(2, 'new_year'),
(3, 'valentines_day'),
(4, 'merry_christmas'),
(5, 'halloween');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notelets`
--
ALTER TABLE `notelets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme` (`theme`);

--
-- Индексы таблицы `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notelets`
--
ALTER TABLE `notelets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `notelets`
--
ALTER TABLE `notelets`
  ADD CONSTRAINT `notelets_ibfk_1` FOREIGN KEY (`theme`) REFERENCES `themes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

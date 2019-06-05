-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2019 г., 03:52
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `andreykychkin_09_pn_idiot_eto_moy`
--
CREATE DATABASE IF NOT EXISTS `andreykychkin_09_pn_idiot_eto_moy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `andreykychkin_09_pn_idiot_eto_moy`;

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `text` varchar(355) NOT NULL,
  `user_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `rating` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`text`, `user_id`, `question_id`, `date`, `rating`, `id`) VALUES
('ответ', 2, 1, '2019-02-01', 0, 1),
('asdasd', 2, 2, '2019-02-01', 0, 2),
('asdadfsdds', 2, 1, '2019-02-01', 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `user_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(355) NOT NULL,
  `text` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`user_id`, `question_id`, `rating`, `date`, `title`, `text`) VALUES
(3, 1, 0, '0222-03-12', 'Не работает php код помогите', 'Не работает php код помогите\r\nssaasKsbkhsdbsdhksdbsdfjkbjkjksdfjksdjknsdsdkJnfkjsDjksdnsdjknsdkjfdsnklvml vsdjkdldsbjssjsaasndandandlaslnlsssnlnnnnfnfnfnfnfnfnfnnfnfnnfnJHszdnfds vljkmnsv lkm blm.a hbgf,nb ;]5d4, b; ped m;fwq mlw/n конец\r\nкод оочень плохой'),
(3, 2, 0, '1111-11-11', 'lol', 'text'),
(3, 3, 0, '1111-11-11', 'php', 'kaskdasdklasdl');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `mail` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `nickname` varchar(355) NOT NULL,
  `avatar` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `nickname`, `avatar`) VALUES
(1, 'Pochta@mail.ru', 'password', 'nickname', 'img3.jpg'),
(2, 'почта', 'пароль', 'ник', 'img3.jpg'),
(3, 'pochta', 'password', 'nickname', 'img2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

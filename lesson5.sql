-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2020 г., 02:22
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_project` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tab` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `author`, `name_project`, `tab`) VALUES
(1, 'Иван', 'Входящие', 'tab=входящие'),
(2, 'Ярослав', 'Учеба', 'tab=учёба'),
(3, 'Ярослав', 'Работа', 'tab=работа'),
(4, 'Олег', 'Домашние дела', 'tab=домашние-дела'),
(5, 'Ярослав', 'Авто', 'tab=авто');

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `status_task` int(1) DEFAULT NULL,
  `name_task` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_project` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_task` date NOT NULL,
  `dd_task` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `status_task`, `name_task`, `name_project`, `file`, `date_task`, `dd_task`) VALUES
(1, NULL, 'Собеседование', 'Работа', NULL, '2019-12-01', NULL),
(2, NULL, 'Выполнить тестовое задание', 'Работа', NULL, '2019-12-25', NULL),
(3, NULL, 'Сделать задание первого раздела', 'Учеба', NULL, '2019-12-21', NULL),
(4, NULL, 'Встреча с другом', 'Входящие', NULL, '2019-12-22', NULL),
(5, NULL, 'Купить корм для кота', 'Домашние дела', NULL, '2019-12-22', NULL),
(6, NULL, 'Заказать пиццу', 'Домашние дела', NULL, '2019-12-22', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datereg` date NOT NULL,
  `pass` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `datereg`, `pass`) VALUES
(1, 'Иван', 'ione@gmail.com', '2020-10-10', '123'),
(2, 'Олег', 'qwene@gmail.com', '2020-10-20', 'a1s2d3'),
(3, 'Ярослав', 'yar@gmail.com', '2020-10-14', '789456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Aindex` (`author`),
  ADD KEY `NPindex` (`name_project`);

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NTindex` (`name_task`),
  ADD KEY `NPindex` (`name_project`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nindex` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`name`);

--
-- Ограничения внешнего ключа таблицы `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`name_project`) REFERENCES `project` (`name_project`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

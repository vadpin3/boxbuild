-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2020 г., 00:52
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
-- База данных: `itog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `title`, `user_id`) VALUES
(1, 'Входящие', 1),
(2, 'Учеба', 2),
(3, 'Работа', 1),
(4, 'Домашние дела', 2),
(5, 'Авто', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `title` char(50) NOT NULL,
  `link` char(100) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `pubdate`, `status`, `title`, `link`, `deadline`, `user_id`, `project_id`) VALUES
(1, '2020-11-17 22:16:15', 0, 'Собеседование в банке', NULL, '2019-12-01', 1, 3),
(2, '2020-11-17 22:16:15', 0, 'Выполнить тестовое задание', NULL, '2019-12-25', 1, 3),
(3, '2020-11-17 22:16:15', 1, 'Сделать задание первого раздела', NULL, '2019-12-21', 2, 2),
(4, '2020-11-17 22:16:15', 0, 'Встреча с другом', NULL, '2019-12-22', 1, 1),
(5, '2020-11-17 22:16:15', 0, 'Купить корм для кота', NULL, NULL, 2, 4),
(6, '2020-11-17 22:16:15', 0, 'Заказать пиццу', NULL, NULL, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `password` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `reg_date`, `email`, `name`, `password`) VALUES
(1, '2020-11-17 22:16:15', 'konstantin@gmail.com', 'Константин', '1234556'),
(2, '2020-11-17 22:16:15', 'anton@yandex.ru', 'Антон', '8675432'),
(3, '2020-11-17 22:18:16', 'sad@sad.ru', 'asd', '$2y$10$PhWcUiDOB7ZqLcRp087LyO0yeHPmFFC1qNjOQLku0P0DtFU5NnSx2'),
(4, '2020-11-17 23:35:32', 'qwe@qwe.ru', 'asd', '$2y$10$.oUtvl.QQxBQN2IYeugHN.zmieDNRLbxPx/v1OVVR5yIalwz2znDm'),
(5, '2020-11-19 20:24:08', 'ghj@ghj.ru', 'ghj', '$2y$10$oSuGyPzessOu2ri4sbKFvOFRPslf3zMf4phvQofXUCXXRccYTtbDC'),
(6, '2020-11-19 20:35:41', 'qaz@qaz.ru', 'qaz', '$2y$10$gWN.tDnSYAhkGzTk1AGezu4oFenaubF8.ucVjk69STAntgBXfGvsO'),
(7, '2020-11-19 21:57:58', 'yndex@yandex.ru', 'yan', '$2y$10$dk5hsuiMb21c1RUq.WQkWO.WMyB92sxnzCCgu9IA9ZZ1KWIVXFUNW'),
(8, '2020-11-19 23:58:53', 'bin@czx.ru', 'nv,cmxn', '$2y$10$qTTM/BvpqIlq9DYeSHk/sOCCfMaOS2GTUPWlTTCKPiHGDdoAXOOQC'),
(9, '2020-11-20 00:07:53', 'ryu@ui.ru', 'poi', '$2y$10$ZCZuyZmNSoHFdr3hS8ojUu94ozJvHB0nFFJQa0o.GInW26v8ZIpZm'),
(10, '2020-11-20 00:28:28', 'zxc@qwe.ru', 'test', '$2y$10$fpM4ucPGIX.KI5fC5hx24e9fgGlViUrs7zLKrf1RE7CImdOgRVpJ.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `task` ADD FULLTEXT KEY `task_search` (`title`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

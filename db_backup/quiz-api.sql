-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 31 2021 г., 18:04
-- Версия сервера: 5.7.24
-- Версия PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `quiz-api`
--

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET latin1 NOT NULL,
  `answers` text NOT NULL,
  `right_answer_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `answers`, `right_answer_id`, `subject_id`) VALUES
(1, 'What does HTML stand for?', '[\'Hyper Text Markup Language\', \'Home Tool Markup Language\', \'Hyperlinks and Text Markup Language\', \'Other\']', 1, 1),
(2, 'Who is making the Web standards?', '[\'Microsoft, Google\', \'Mozilla\', \'The World Wide Web Consortium\']', 8, 1),
(3, 'How does a FOR loop start?', '[\'for (i = 0; i <= 5)\', \'for (i = 0; i <= 5; i++)\', \'for i = 1 to 5\', \'for (i <= 5; i++)\']', 10, 1),
(4, 'What is $_SERVER in PHP?', '[\'Global array with server info\', \'Response code variable\', \'function\', \'Other operator\']', 1, 2),
(5, 'How do you get information from a form that is submitted using the \"get\" method in php?', '[\'$_GET[]\', \'Request.querystring\', \'Request.Form\', \'GET()\']', 1, 2),
(6, '(PHP) What is the correct way to include the file \"time.php\" ?', '[\'include file=\"time.inc\"\', \'include \"time.php\"\', \'include = time.php\', \'include = \"time.php\"\']', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'frontend'),
(2, 'backend');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 01 2021 г., 17:15
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
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`) VALUES
(1, 'Home tool Markup Language', 1),
(2, 'Hypertext Markup Language', 1),
(3, 'Hyperlinks and Text Markup Language', 1),
(4, 'Hyperlinks and Text Modeling Language', 1),
(5, '<h1>', 2),
(6, '<heading>', 2),
(7, '<header>', 2),
(8, '<head>', 2),
(9, '<br>', 3),
(10, '<break>', 3),
(11, '<lb>', 3),
(12, '&lb;', 3),
(13, '<i>', 4),
(14, '<b>', 4),
(15, '<strong>', 4),
(16, '<important>', 4),
(17, '<style=\'style.css\'></style>', 5),
(18, '<link href=\'style.css\'>', 5),
(19, '<link rel=\'stylesheet\' href=\'style.css\'>', 5),
(20, '<style link=\'style.css\' rel=\'stylesheet\'>', 5),
(21, 'text-size', 6),
(22, 'fsize', 6),
(23, 'element-size', 6),
(24, 'font-size', 6),
(25, 'inside <head> element', 7),
(26, 'inside <body> element', 7),
(27, 'before html closing tag', 7),
(28, 'inside footer element', 7),
(29, 'p{font:bold;}', 8),
(30, 'p{font-weight:bold;}', 8),
(31, 'p{bold: true;}', 8),
(32, 'p.all{font: bold;}', 8),
(33, '<footer>', 9),
(34, '<javascript>', 9),
(35, '<script>', 9),
(36, '<scripting>', 9),
(37, 'for(let i=0;i<100;i++)', 10),
(38, 'for(i:0; i:100;i++)', 10),
(39, 'for i=0; to i<100; i++', 10),
(40, 'for: i=0; i<100; i++)', 10),
(41, 'msgBox(\'Hello World!\');', 11),
(42, 'alert(\'Hello world\');', 11),
(43, 'alert:\'Hello world!\';', 11),
(44, 'alertBox(\'Hello world\');', 11),
(45, 'document.element(\'#demo\').text = \'<b>Hello world!</b>\'', 12),
(46, 'document(\'#demo\').innerHTML = \'Hello world\'', 12),
(47, '(\'#demo\').innerHTML = \'<b>Hello world</b>\'', 12),
(48, 'document.getElementById(\'demo\').innerHTML = \'<b>Hello world!</b>\'', 12),
(49, 'echo \'Hello world!\';', 13),
(50, 'Document.write(\'Hello world\');', 13),
(51, '\'Hello world!\';', 13),
(52, '>\'Hello world!\';', 13),
(53, '!', 14),
(54, '&', 14),
(55, '$', 14),
(56, 'var', 14),
(57, 'Request.form.data', 15),
(58, 'Request.queryString.data', 15),
(59, 'Form.data', 15),
(60, '$_GET[\'data\']', 15),
(61, '<php include: user.php ?>', 16),
(62, '<php include \'user.php\' ?>', 16),
(63, '<php include-file: user.php ?>', 16),
(64, '<php include-file = \'user.php\' ?>', 16),
(65, 'SELECT', 17),
(66, 'OPEN', 17),
(67, 'GET', 17),
(68, 'EXTRACT', 17),
(69, 'UPDATE', 18),
(70, 'INSERT', 18),
(71, 'MODIFY', 18),
(72, 'SAVE', 18),
(73, 'REMOVE', 19),
(74, 'COLLAPSE', 19),
(75, 'DELETE', 19),
(76, 'UNSET', 19),
(77, 'EXTRACT FirstName FROM Persons', 20),
(78, 'SELECT Persons.FirstName', 20),
(79, 'EXTRACT Persons.FirstName', 20),
(80, 'SELECT FirstName FROM Persons', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET latin1 NOT NULL,
  `right_answer_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `right_answer_id`, `subject_id`) VALUES
(1, 'What does HTML stand for?', 2, 1),
(2, 'Choose the correct HTML element for the largest heading', 5, 1),
(3, 'What is the correct HTML element for inserting a line break?', 9, 1),
(4, 'Choose the correct HTML element to define important text', 15, 1),
(5, 'What is the correct HTML for referring to an external style sheet?', 19, 2),
(6, 'Which CSS property controls the text size?', 24, 2),
(7, 'Where in an HTML document is the correct place to refer to an external style sheet?', 25, 2),
(8, 'What is the correct CSS syntax for making all the <p> elements bold?', 29, 2),
(9, 'Inside which HTML element do we put the JavaScript?', 35, 3),
(10, 'What\'s correct syntax for \'FOR\' loop?', 37, 3),
(11, 'How do you write \'Hello World\' in an alert box?', 42, 3),
(12, 'What is the correct JavaScript syntax to change the content of the HTML element below?\r\n\r\n<p id=\'demo\'>This is a demonstration.</p>', 48, 3),
(13, 'How do you write \'Hello World\' in PHP?', 49, 4),
(14, 'All variables in PHP start with?', 55, 4),
(15, 'How do you get data from a form that is submitted using the \"get\" method in php?', 60, 4),
(16, 'What is the correct way to include the file \'user.php\'', 62, 4),
(17, 'Which MySQL statement is used to select data from a database?', 65, 5),
(18, 'Which MySQL statement is used to update data in a database?', 69, 5),
(19, 'Which MySQL statement is used to delete data from a database?', 75, 5),
(20, 'How do you select a column named \'FirstName\' from a table named \'Persons\'?', 80, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stack` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `name`, `stack`) VALUES
(1, 'HTML', 'frontend'),
(2, 'CSS', 'frontend'),
(3, 'Javascript', 'frontend'),
(4, 'PHP', 'backend'),
(5, 'MySQL', 'backend');

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
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

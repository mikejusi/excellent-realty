-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 19 2022 г., 21:02
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `excellent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cataloge`
--

CREATE TABLE `cataloge` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `rooms` text NOT NULL,
  `img` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cataloge`
--

INSERT INTO `cataloge` (`id`, `title`, `rooms`, `img`, `price`) VALUES
(1, 'Business class apartment', '4', 'card1.png', '89000'),
(8, 'Studio', '2', '', '30000');

-- --------------------------------------------------------

--
-- Структура таблицы `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `message`) VALUES
(1, 'Кристина', 'kristina@gmail.com', 'Нужна помощь в оформлении квартиры!'),
(2, 'Ирина', 'irina21341@gmail.com', 'Возникли проблемы с просмотром квартиры!'),
(5, 'Игорь', 'igor@gmail.com', 'Хочу созвониться!'),
(6, 'Андрей', 'andrei@mail.ru', 'Возникли вопросы по сервису');

-- --------------------------------------------------------

--
-- Структура таблицы `newssub`
--

CREATE TABLE `newssub` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `newssub`
--

INSERT INTO `newssub` (`id`, `email`) VALUES
(1, 'admin@gmail.com'),
(2, 'irina342432@mail.ru'),
(7, 'test@gmail.com'),
(8, '2222@gmail.com'),
(9, '555@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idusers`, `email`, `password`, `username`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'aboba@aboba.ru', '501d20a6701002d4f710dd3b5f1e1eb5', 'aboba@aboba.ru'),
(4, 'igor@gmail.com', '4dcc573c2b1b2d8c956ead6187c35de9', 'игорь'),
(5, 'aboba@aboba.ru', '501d20a6701002d4f710dd3b5f1e1eb5', 'aboba@aboba.ru'),
(6, 'aboba@aboba.ru', '501d20a6701002d4f710dd3b5f1e1eb5', 'aboba@aboba.ru'),
(7, 'aboba@aboba.ru', '501d20a6701002d4f710dd3b5f1e1eb5', 'aboba@aboba.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cataloge`
--
ALTER TABLE `cataloge`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `newssub`
--
ALTER TABLE `newssub`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cataloge`
--
ALTER TABLE `cataloge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `newssub`
--
ALTER TABLE `newssub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2022 г., 11:06
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `root`
--

-- --------------------------------------------------------

--
-- Структура таблицы `caseid`
--

CREATE TABLE `caseid` (
  `caseid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `caseid`
--

INSERT INTO `caseid` (`caseid`) VALUES
('caseid');

-- --------------------------------------------------------

--
-- Структура таблицы `casename`
--

CREATE TABLE `casename` (
  `casename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `casename`
--

INSERT INTO `casename` (`casename`) VALUES
('casename');

-- --------------------------------------------------------

--
-- Структура таблицы `casesuma`
--

CREATE TABLE `casesuma` (
  `casesuma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `casesuma`
--

INSERT INTO `casesuma` (`casesuma`) VALUES
('casesuma');

-- --------------------------------------------------------

--
-- Структура таблицы `donatename`
--

CREATE TABLE `donatename` (
  `donatename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `donatename`
--

INSERT INTO `donatename` (`donatename`) VALUES
('donatename');

-- --------------------------------------------------------

--
-- Структура таблицы `donatesuma`
--

CREATE TABLE `donatesuma` (
  `donatesuma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `donatesuma`
--

INSERT INTO `donatesuma` (`donatesuma`) VALUES
('donatesuma');

-- --------------------------------------------------------

--
-- Структура таблицы `lastshop`
--

CREATE TABLE `lastshop` (
  `lastshop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `lastshop`
--

INSERT INTO `lastshop` (`lastshop`) VALUES
('lastshop');

-- --------------------------------------------------------

--
-- Структура таблицы `moneyamount`
--

CREATE TABLE `moneyamount` (
  `moneyamount` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `moneyamount`
--

INSERT INTO `moneyamount` (`moneyamount`) VALUES
('moneyamount');

-- --------------------------------------------------------

--
-- Структура таблицы `moneyname`
--

CREATE TABLE `moneyname` (
  `moneyname` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `moneyname`
--

INSERT INTO `moneyname` (`moneyname`) VALUES
('moneyname');

-- --------------------------------------------------------

--
-- Структура таблицы `moneysuma`
--

CREATE TABLE `moneysuma` (
  `moneysuma` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `moneysuma`
--

INSERT INTO `moneysuma` (`moneysuma`) VALUES
('moneysuma');

-- --------------------------------------------------------

--
-- Структура таблицы `nickname`
--

CREATE TABLE `nickname` (
  `nickname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `nickname`
--

INSERT INTO `nickname` (`nickname`) VALUES
('nickname');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

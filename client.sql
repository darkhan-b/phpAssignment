-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2020 г., 20:18
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `client`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `user id` int(6) NOT NULL,
  `First name` varchar(100) NOT NULL,
  `Last name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone number` bigint(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Tariff id` int(6) NOT NULL,
  `Tariff activation date` varchar(100) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Next charge date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`user id`, `First name`, `Last name`, `Email`, `Phone number`, `Password`, `Tariff id`, `Tariff activation date`, `Balance`, `Next charge date`) VALUES
(1, 'Darkhan', 'Baibulat', 'xxlabbesxx@gmail.com', 87782201002, 'darkhan', 1, '17-MAY-2020', 1000, '17-JUN-2020'),
(2, 'Cristiano', 'Ronaldo', 'cr7@gmail.com', 87777777777, 'cristiano', 2, '12-MAY-2020', 9999999, '12-Jun-2020'),
(3, 'Lionel', 'Messi', 'messi10@gmail.com', 87011111111, 'lionel', 3, '20-MAY-2020', 5000, '20-JUN-2020'),
(4, 'Steve', 'Jobs', 'Steven@gmail.com', 87711000000, 'steven', 4, '1-MAY-2020', 10000, '1-JUN-2020'),
(5, 'Bill', 'Gates', 'billgates@gmail.com', 87016666666, 'billgates', 5, '29-APR-2020', 7777, '29-MAY-2020');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `Service_id` int(6) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`Service_id`, `service_name`, `service_price`) VALUES
(1, 'Unlimited night traffic', 290),
(2, 'Tariff upgrade to unlimited', 790),
(3, 'Unlimited social networks', 790),
(4, 'BeeTV', 2990),
(5, 'Safe internet', 199),
(1, 'Unlimited night traffic', 290),
(2, 'Tariff upgrade to unlimited', 790),
(3, 'Unlimited social networks', 790),
(4, 'BeeTV', 2990),
(5, 'Safe internet', 199);

-- --------------------------------------------------------

--
-- Структура таблицы `service_transactions`
--

CREATE TABLE `service_transactions` (
  `transaction_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `service_id` int(6) NOT NULL,
  `date` varchar(100) NOT NULL,
  `balance_before` int(255) NOT NULL,
  `balance_after` int(255) NOT NULL,
  `charge_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `service_transactions`
--

INSERT INTO `service_transactions` (`transaction_id`, `user_id`, `service_id`, `date`, `balance_before`, `balance_after`, `charge_price`) VALUES
(1, 1, 1, '14-MAY-2020', 1290, 1000, 290),
(2, 2, 2, '15-MAY-2020', 10000789, 9999999, 790),
(3, 3, 3, '16-MAY-2020', 5790, 5000, 790),
(4, 4, 4, '18-MAY-2020', 12990, 10000, 2990),
(5, 5, 5, '19-MAY-2020', 7976, 7777, 199);

-- --------------------------------------------------------

--
-- Структура таблицы `tariff`
--

CREATE TABLE `tariff` (
  `Tariff_id` int(6) NOT NULL,
  `Tariff_name` varchar(100) NOT NULL,
  `Tariff_price` int(32) NOT NULL,
  `Internet(GBs)` int(32) NOT NULL,
  `Minutes` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tariff`
--

INSERT INTO `tariff` (`Tariff_id`, `Tariff_name`, `Tariff_price`, `Internet(GBs)`, `Minutes`) VALUES
(1, 'Bright 1', 2990, 15, 150),
(2, 'Bright 2', 3990, 25, 250),
(3, 'Bright 3', 4990, 40, 400),
(4, 'Bright ', 2590, 10, 100),
(5, 'Bright lite', 1990, 5, 50);

-- --------------------------------------------------------

--
-- Структура таблицы `tariff_transactions`
--

CREATE TABLE `tariff_transactions` (
  `transaction_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `tariff_id` int(6) NOT NULL,
  `date` varchar(100) NOT NULL,
  `balance_before` int(25) NOT NULL,
  `balance_after` int(25) NOT NULL,
  `charge_price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tariff_transactions`
--

INSERT INTO `tariff_transactions` (`transaction_id`, `user_id`, `tariff_id`, `date`, `balance_before`, `balance_after`, `charge_price`) VALUES
(6, 1, 1, '17-MAY-2020', 3990, 1000, 2990),
(7, 2, 2, '12-MAY-2020', 10003989, 9999999, 3990),
(8, 3, 3, '20-MAY-2020', 9990, 5000, 4990),
(9, 4, 4, '1-MAY-2020', 12590, 10000, 2590),
(10, 5, 5, '29-APR-2020', 9767, 7777, 1990);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2023 г., 00:34
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `converter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `char_name` varchar(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `value` decimal(6,4) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `char_name`, `name`, `nominal`, `value`, `time`) VALUES
(36, 'AUD', 'Австралийский доллар', 1, '52.2056', '2023-05-25 21:53:31'),
(944, 'AZN', 'Азербайджанский манат', 1, '47.0495', '2023-05-25 21:53:31'),
(826, 'GBP', 'Фунт стерлингов Соединенного королевства', 1, '98.9163', '2023-05-25 21:53:31'),
(51, 'AMD', 'Армянских драмов', 100, '20.6998', '2023-05-25 21:53:31'),
(933, 'BYN', 'Белорусский рубль', 1, '27.3216', '2023-05-25 21:53:31'),
(975, 'BGN', 'Болгарский лев', 1, '44.0805', '2023-05-25 21:53:31'),
(986, 'BRL', 'Бразильский реал', 1, '16.1679', '2023-05-25 21:53:31'),
(348, 'HUF', 'Венгерских форинтов', 100, '22.9615', '2023-05-25 21:53:31'),
(704, 'VND', 'Вьетнамских донгов', 10000, '33.7543', '2023-05-25 21:53:31'),
(344, 'HKD', 'Гонконгский доллар', 1, '10.2295', '2023-05-25 21:53:31'),
(981, 'GEL', 'Грузинский лари', 1, '30.9070', '2023-05-25 21:53:31'),
(208, 'DKK', 'Датская крона', 1, '11.5825', '2023-05-25 21:53:31'),
(784, 'AED', 'Дирхам ОАЭ', 1, '21.7816', '2023-05-25 21:53:31'),
(840, 'USD', 'Доллар США', 1, '79.9841', '2023-05-25 21:53:31'),
(978, 'EUR', 'Евро', 1, '85.8767', '2023-05-25 21:53:31'),
(818, 'EGP', 'Египетских фунтов', 10, '25.8902', '2023-05-25 21:53:31'),
(356, 'INR', 'Индийских рупий', 100, '96.9759', '2023-05-25 21:53:31'),
(360, 'IDR', 'Индонезийских рупий', 10000, '53.6626', '2023-05-25 21:53:31'),
(398, 'KZT', 'Казахстанских тенге', 100, '17.9966', '2023-05-25 21:53:31'),
(124, 'CAD', 'Канадский доллар', 1, '58.8898', '2023-05-25 21:53:31'),
(634, 'QAR', 'Катарский риал', 1, '21.9737', '2023-05-25 21:53:31'),
(417, 'KGS', 'Киргизских сомов', 100, '91.3165', '2023-05-25 21:53:31'),
(156, 'CNY', 'Китайский юань', 1, '11.2816', '2023-05-25 21:53:31'),
(498, 'MDL', 'Молдавских леев', 10, '45.0744', '2023-05-25 21:53:31'),
(554, 'NZD', 'Новозеландский доллар', 1, '48.7103', '2023-05-25 21:53:31'),
(578, 'NOK', 'Норвежских крон', 10, '72.9356', '2023-05-25 21:53:31'),
(985, 'PLN', 'Польский злотый', 1, '19.0280', '2023-05-25 21:53:31'),
(946, 'RON', 'Румынский лей', 1, '17.3156', '2023-05-25 21:53:31'),
(960, 'XDR', 'СДР (специальные права заимствования)', 1, '99.9999', '2023-05-25 21:53:31'),
(702, 'SGD', 'Сингапурский доллар', 1, '59.1423', '2023-05-25 21:53:31'),
(972, 'TJS', 'Таджикских сомони', 10, '73.2865', '2023-05-25 21:53:31'),
(764, 'THB', 'Таиландских батов', 10, '23.0650', '2023-05-25 21:53:31'),
(949, 'TRY', 'Турецких лир', 10, '40.2377', '2023-05-25 21:53:31'),
(934, 'TMT', 'Новый туркменский манат', 1, '22.8526', '2023-05-25 21:53:31'),
(860, 'UZS', 'Узбекских сумов', 10000, '70.0509', '2023-05-25 21:53:31'),
(980, 'UAH', 'Украинских гривен', 10, '21.6560', '2023-05-25 21:53:31'),
(203, 'CZK', 'Чешских крон', 10, '36.4425', '2023-05-25 21:53:31'),
(752, 'SEK', 'Шведских крон', 10, '74.7599', '2023-05-25 21:53:31'),
(756, 'CHF', 'Швейцарский франк', 1, '88.3022', '2023-05-25 21:53:31'),
(941, 'RSD', 'Сербских динаров', 100, '73.2326', '2023-05-25 21:53:31'),
(710, 'ZAR', 'Южноафриканских рэндов', 10, '41.4357', '2023-05-25 21:53:31'),
(410, 'KRW', 'Вон Республики Корея', 1000, '60.3198', '2023-05-25 21:53:31'),
(392, 'JPY', 'Японских иен', 100, '57.3692', '2023-05-25 21:53:31');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'dev', 'root'),
(3, 'admin', '1234'),
(4, 'saroka', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

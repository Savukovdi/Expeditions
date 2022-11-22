-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2022 г., 13:02
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `expeditions`
--

-- --------------------------------------------------------

--
-- Структура таблицы `expeditions`
--

CREATE TABLE `expeditions` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8mb4 NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `duration` varchar(250) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `complexity` varchar(60) NOT NULL,
  `location` varchar(90) NOT NULL,
  `leader_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `expeditions`
--

INSERT INTO `expeditions` (`id`, `name`, `description`, `quantity`, `price`, `date`, `duration`, `img`, `complexity`, `location`, `leader_id`) VALUES
(10, 'Конный тур к подножью Белухи', 'Легендарные места Алтая во всей красоте и великолепии. Гора Белуха – высочайшая вершина Сибири, возвышающаяся на 4506 м над уровнем моря. Монумент природы и \"святыня\" Алтайских гор. Великолепна не только сама хрустальная вершина священной горы. На пути группы встретятся каменистые россыпи, притаившиеся в складках гор чистейшие озера, разнотравье альпийских лугов, загадочная долина эдельвейсов, рукотворные «города», сложенные адептами Рериха из камней, и многое другое.', '48', '52 000', '2022-01-14', '8 дней', 'img/29jauRl1YhusyicGpxyjRij6qM3CpHN9dHIb1dvo.jpg', 'Сложная', 'село Манжерок', 2),
(12, 'Экспедиция на квадроциклах на перевал Дятлова', 'Этот маршрут подходит как начинающим туристам, так и людям, имеющим опыт управления квадроциклами. Наше путешествие охватывает все великолепие Северного Урала — озера и речки с прозрачной водой, горные вершины с причудливыми скальными останцами и первозданные лесные массивы.  Территория Северного Урала огромна: это один из самых глухих и труднодоступных районов Урала. Край густых таёжных лесов — сплошная тайга: нет ни дорог, ни населённых пунктов, кроме старинных охотничьих изб, юрт и становищ. К горам подступают непроходимые болота. Всюду северный лес без конца и края — мохнатые ели, мощные кедры, сибирские сосны.', '16', '74 900', '2021-12-10', '6 дней', 'img/Pzn6nKeOTS8Y8JjeBd9Jspg8IMpLiBxY4GCcpsyb.jpg', 'Сложная', 'г. Екатеринбург', 3),
(15, 'Летнее знакомство с озером Байкал', 'Первое свидание с легендарным озером Байкал и настоящая любовь на всю жизнь к этим местам! Иркутск, горный курорт Аршан, знаменитый Ольхон, Тажеранские степи, Кругобайкальская железная дорога и много других интереснейших мест ждет вас в этом туре!', '14', '62 000', '2022-04-01', '8 дней', 'img/xQUEbHrYJHzPoZYetI4itREAurym9EFZinevrZ4i.jpg', 'Легкая', 'Россия, Иркутск', 2),
(16, 'Айсберги и нерпы. Экспедиция по Байкалу', 'Вас ждёт уникальное путешествие, не имеющее аналогов. Настоящая экспедиция, захватывающая оба берега Байкала, которая, помимо знаковых мест, покажет вам дикие уголки озера и заповедные места.  Экспедиция проходит во время смены сезонов, время воды и льда, время айсбергов и нерп! Красота Байкала в этом время необычайна – природа потихоньку начинает просыпаться, появляются первые подснежники, начинается таяние льда.', '10', '117 599', '2022-06-02', '5 дней', 'img/ZGx9u0hBNzbSXQh2O12QpqXEjyA7HGDnPLnTnYIp.jpg', 'Легкая', 'г. Иркутск', 3),
(17, 'Якутск — ГУЛАГ — Оймякон — Магадан. Зимний автотур по Колымской трассе', 'Зимой предлагаем отправиться в увлекательное автопутешествие по уже ставшему популярному маршруту из Якутска в Магадан через лагеря системы ГУЛАГ и Оймякон (Полюс холода). Из Якутии к Охотскому морю. Данный маршрут успешно отработан на зарубежных туристах и съемочных группах, начиная с 2010 года. Присоединяйтесь!', '12', '199 000', '2021-06-11', '10 дней', 'img/eEgCmNSS79d0OOffIVDkmact2CatN0uPVwPBSlyH.jpg', 'Средняя', 'г. Якутск', 4),
(18, 'Экспедиция на Новосибирские острова', 'Маршрут экспедиции проходит по экстремально суровым районам Крайнего Севера России – льдам и островам Северного Ледовитого океана.  Экспедиция является официальным маршрутом международной программы «Арктическая кругосветка», которая включает в себя серию маршрутов в Арктике и субарктике с разными видами передвижения.  Новосибирские острова, открытые русскими зверопромышленниками и землепроходцами в XVII-XIX веках, и по сей день остаются одной из самых труднодоступных территорий Российской Федерации. Порядка 500 километров океанского льда отделяет их от ближайшего крупного населенного пункта – п. Тикси.', '8', '850 000', '2021-12-04', '15 дней', 'img/wJLtV4WyKY41eCJD7oaXTdhWOu9gRV9izURYzHd0.jpg', 'Эксперт', 'г. Якутск', 4),
(19, 'Велоэкспедиция на полуострове Рыбачий', 'Откройте для себя полуостров Рыбачий, проехав порядка 300 км на велосипедах. За время такой экспедиции вы посетите самый северный мыс Немецкий, сможете искупаться в Северном Ледовитом океане, увидеть множество экскурсионных объектов в местах боевой славы и чудесные водопады.', '20', '58 599', '2020-09-05', '8 дней', 'img/eH5FHzvXlYsIZ6ekSCrNidjVqnOHphGWFPAEAP2U.jpg', 'Эксперт', 'г. Мурманск', 5),
(20, 'Половина озера Байкал', 'Большое путешествие по самым классным и интересным местам Байкала. Получим невероятное количество позитива и положительных эмоций, пересечем Байкал с западного на восточный берег! Только лучшие достопримечательности: Байкальский музей, Кругобайкальская железная дорога, бухта Песчаная, Иркутск, Тажеранские степи, остров Ольхон, центр буддизма, термальные источники бухты Змеиной.', '15', '97 000', '2022-05-31', '9 дней', 'img/OvD2xexs0mAjPXkFApd7KFoGSow5rC5BEE1YsaO5.jpg', 'Средняя', 'г. Иркутск', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `leaders`
--

CREATE TABLE `leaders` (
  `id` int NOT NULL,
  `fio` varchar(90) NOT NULL,
  `telephone` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `leaders`
--

INSERT INTO `leaders` (`id`, `fio`, `telephone`, `email`) VALUES
(2, 'Ушаков Максим Денисович', '+7 (952) 34-42-233', 'maxsim@mail.ru'),
(3, 'Шихов Данил Алексеевич', '+7 (951) 32-16-849', 'danil_shikhov@mail.ru'),
(4, 'Неизвестный Никита Дмитриевич', '+7 (908) 74-65-214', 'nikita_unknown@mail.ru'),
(5, 'Орлова Виктория Игоревна', '+7 (912) 96-25-146', 'victoria2@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `recordings`
--

CREATE TABLE `recordings` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `exp_id` int NOT NULL,
  `passport` varchar(60) NOT NULL,
  `date` varchar(90) NOT NULL,
  `event` varchar(30) NOT NULL DEFAULT 'Подтвержденный',
  `nomer` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `recordings`
--

INSERT INTO `recordings` (`id`, `user_id`, `exp_id`, `passport`, `date`, `event`, `nomer`) VALUES
(32, 29, 10, '22-22-222222', '22 июн. 2022 – 30 июн. 2022', 'Подтвержденный', '1654336880');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `event` enum('Отклоненный','Ожидайте в течении дня') NOT NULL DEFAULT 'Ожидайте в течении дня',
  `user_id` int NOT NULL,
  `exp_id` int NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `adults` int NOT NULL,
  `children` int NOT NULL,
  `date` varchar(90) NOT NULL,
  `passport` varchar(60) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fio` varchar(90) CHARACTER SET utf8mb4 NOT NULL,
  `telephone` varchar(90) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `checkbox` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `telephone`, `date`, `email`, `password`, `img`, `role`, `checkbox`) VALUES
(25, 'admin', '79507827647', '2022-05-04', 'admin@mail.ru', '$2y$10$41hCXmgSWrrpPbnCU36mJetTi.HQsoNXCRpDAKbcxiSnOA3epoqOG', NULL, 'admin', 'Согласен'),
(26, 'Прокунин Денис Михайлович', '89517827647', '2022-05-07', 'denis@mail.ru', '$2y$10$UacqXG7BgTyPc9iT79n6p.VSNrNgwfpnf/OyHHnJOQhFl1TkHC7Ny', NULL, 'user', 'Согласен'),
(27, 'Прокунин Иван Викторович', '89547835476', '2022-06-14', 'ivan@mail.ru', '$2y$10$rztTF58FE9V4MvDCp9zVe.AR.Kl6wgMTlpQkhYFqKiTvjdRUkbcD2', NULL, 'user', 'Согласен'),
(28, 'Русских Егор Александрович', '79517859264', '2022-06-22', 'egor@mail.ru', '$2y$10$jyqYmuam1wNp9d3IcQ6MQ.gIa7hCm84DFtsaW7Z62tHlSikHbF3VC', NULL, 'user', 'Согласен'),
(29, 'Кочерыги Анастасия Ильничка', '+7 (952) 45-84-632', '2022-06-03', 'ananas@mail.ru', '$2y$10$bBfWIYz8S33c2aiTwyoH1ezBqS3C7Zr1.6d12JcZrhblCzylGCrzW', NULL, 'user', 'Согласен');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `expeditions`
--
ALTER TABLE `expeditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leader_id` (`leader_id`);

--
-- Индексы таблицы `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recordings`
--
ALTER TABLE `recordings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp_id` (`exp_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp_id` (`exp_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `expeditions`
--
ALTER TABLE `expeditions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `recordings`
--
ALTER TABLE `recordings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `expeditions`
--
ALTER TABLE `expeditions`
  ADD CONSTRAINT `expeditions_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `leaders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `recordings`
--
ALTER TABLE `recordings`
  ADD CONSTRAINT `recordings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recordings_ibfk_2` FOREIGN KEY (`exp_id`) REFERENCES `expeditions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`exp_id`) REFERENCES `expeditions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

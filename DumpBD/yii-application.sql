-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2021 г., 01:45
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii-application`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Спорт'),
(2, 'Отдых'),
(4, 'Туризм'),
(5, 'Интернет');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` datetime NOT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `heading`, `content`, `short_description`, `image`, `publication_date`, `category_id`) VALUES
(1, 'Пост 1 ', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty....', '069980d29eb9daf1ffbda32a532e9641.jpg', '2021-09-30 14:52:19', 2),
(2, 'Пост 2', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', 'd5cdd7b8fdd3a10d03f33d11dc9aa8bc.jpg', '2021-09-09 07:21:44', 2),
(3, 'Пост 3', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', 'eb0870b54a737fb0ddaff5ff68197ed1.jpg', '2021-09-01 07:14:09', 1),
(4, 'Пост 4', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', 'd160ea2aff426e0708fdc68dd4654637.jpg', '2021-09-24 19:18:30', 2),
(5, 'Пост 5', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', '3421c04a7461c35278010a64ca399128.jpg', '2021-09-15 05:12:00', 2),
(8, 'Пост 6', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', 'c94c1d8e05c8c2995a21cdb260c35b56.jpg', '2021-10-02 00:00:00', NULL),
(9, 'Пост 7', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', '4c54643b176962e0351f20b24a2ebc87.jpg', '2021-10-02 00:00:00', 4),
(10, 'Пост 8 ', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', '3516fa2c568503afc09e52fd4ea55100.jpg', '2021-10-02 00:00:00', NULL),
(11, 'Пост 9', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty.\r\n\r\nПромежуточный вывод: по данному критерию чистого победителя нет. Все фреймворки поддерживают работу с шаблонизаторами, что ускоряет разработку фронтенда приложений. Небольшое преимущество имеет Yii2, так как в нём не используется какой-либо шаблонизатор по умолчанию.', 'Этот фреймворк не использует сторонних шаблонизаторов по умолчанию. Но разработчик может выбирать инструменты в зависимости от решаемых задач. В число рекомендуемых шаблонизаторов входят Twig и Smarty...', '01177e170619f50a311586bbb12ba8aa.jpg', '2021-10-02 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(2, '#it'),
(3, '#животные'),
(4, '#еда');

-- --------------------------------------------------------

--
-- Структура таблицы `tag_post`
--

CREATE TABLE `tag_post` (
  `tag_id` int NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tag_post`
--

INSERT INTO `tag_post` (`tag_id`, `post_id`) VALUES
(2, 1),
(2, 3),
(2, 4),
(2, 9),
(3, 1),
(3, 9),
(4, 2),
(4, 4),
(4, 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5A8A6C8D12469DE2` (`category_id`);

--
-- Индексы таблицы `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD PRIMARY KEY (`tag_id`,`post_id`),
  ADD KEY `IDX_B485D33BBAD26311` (`tag_id`),
  ADD KEY `IDX_B485D33B4B89032C` (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `FK_B485D33B4B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B485D33BBAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

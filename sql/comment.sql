CREATE TABLE `comment` (
    `id` int(11) NOT NULL,
    `pseudo` varchar(100) NOT NULL,
    `content` text NOT NULL,
    `createdAt` datetime NOT NULL,
    `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `article_id`,) VALUES
(1, 'Jean', 'Comment #1', '2019-03-16 21:02:24', 1),
(2, 'Nina', 'Comment #2', '2019-03-17 17:34:35', 1),
(3, 'Rodrigo', 'Comment #3', '2019-03-17 17:42:04', 1),
(4, 'Hélène', 'Comment #4', '2019-03-18 12:08:37', 2),
(5, 'Moussa', 'Comment #5', '2019-03-18 03:09:02', 2),
(6, 'Barbara', 'Comment #6', '2019-03-18 10:05:58', 2),
(7, 'Guillaume', 'Comment #7', '2019-03-19 21:08:44', 3),
(8, 'Aurore', 'Comment #8', '2019-03-19 21:09:27', 3),
(9, 'Jordane', 'Comment #9', '2019-03-20 10:10:11', 3);

ALTER TABLE `comment`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_article_id` (`article_id`);

ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `comment`
ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
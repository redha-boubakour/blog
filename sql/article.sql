CREATE TABLE `article` (

    `id` int(11) NOT NULL,
    `title` varchar(100) NOT NULL,
    `content` text NOT NULL,
    `author` varchar(100) NOT NULL,
    `createdAt` datetime NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`id`, `title`, `content`, `author`, `createdAt`) VALUES
(1, '1# article', 'Blog en construction.', 'Rédha', '2019-03-15 08:10:24'),
(2, '2# article', 'Contenu du deuxieme article.', 'Rédha', '2019-03-16 13:27:38'),
(3, '3# article', 'Contenu du troisième article.', 'Rédha', '2019-03-16 14:45:57');

ALTER TABLE `article` ADD PRIMARY KEY (`id`);

ALTER TABLE `article` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `article`
    DROP COLUMN `author`;

ALTER TABLE `article`
    ADD COLUMN `user_id` int(11) NOT NULL;

ALTER TABLE `article`
    ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
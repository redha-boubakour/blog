CREATE TABLE `comment` (
    `id` int(11) NOT NULL,
    `pseudo` varchar(100) NOT NULL,
    `content` text NOT NULL,
    `createdAt` datetime NOT NULL,
    `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `comment`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_article_id` (`article_id`);

ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `comment`
ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

ALTER TABLE `comment` 
ADD `flag` BOOLEAN NOT NULL AFTER `createdAt`;

ALTER TABLE `comment`
DROP COLUMN `pseudo`;

ALTER TABLE `comment`
ADD COLUMN `user_id` int(11) NOT NULL;

ALTER TABLE `comment`
ADD CONSTRAINT `fk_comment_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
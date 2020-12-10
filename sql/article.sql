CREATE TABLE `article` (
    `id` int(11) NOT NULL,
    `title` varchar(100) NOT NULL,
    `content` text NOT NULL,
    `author` varchar(100) NOT NULL,
    `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `article` 
ADD PRIMARY KEY (`id`);

ALTER TABLE `article` 
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `article`
DROP COLUMN `author`;

ALTER TABLE `article`
ADD COLUMN `user_id` int(11) NOT NULL;

ALTER TABLE `article`
ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
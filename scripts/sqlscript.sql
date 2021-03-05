DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`(
	`id` int(13) NOT NULL PRIMARY KEY,
    `nic` text NOT NULL,
    `mac` text NOT NULL,
    `fname` text NOT NULL,
    `lname` text NOT NULL,
    `home` text NOT NULL,
    `road` text NOT NULL,
    `city` text NOT NULL
);

DROP TABLE IF EXISTS `consumption`;
CREATE TABLE `consumption`(
    `index` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `id` int(13) NOT NULL,
    `year` int(4) NOT NULL,
    `month` int(2) NOT NULL,
    `date` int(2) NOT NULL,
    `consumption` float NOT NULL,
    FOREIGN KEY (`id`) REFERENCES `users`(`id`)
);

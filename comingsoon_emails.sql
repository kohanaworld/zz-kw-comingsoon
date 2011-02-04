CREATE TABLE  `comingsoon_emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
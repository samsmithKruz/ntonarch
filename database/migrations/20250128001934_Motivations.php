<?php
// Example SQL query: Modify this query for the specific migration.
return "
CREATE TABLE `motivations` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  FULLTEXT KEY `fulltext_search` (`title`,`content`),
  CONSTRAINT `motivations_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
";
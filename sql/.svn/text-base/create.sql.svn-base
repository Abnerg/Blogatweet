DROP TABLE IF EXISTS `blogatweet`.`users`; 
CREATE TABLE `blogatweet`.`users` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `twitter_id` INTEGER UNSIGNED NOT NULL,
  `screen_name` TEXT NOT NULL,
  `is_beta` INTEGER UNSIGNED NOT NULL,
  `created` BIGINT UNSIGNED NOT NULL,
  `last_access` BIGINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `blogatweet`.`donations`;
CREATE TABLE  `blogatweet`.`donations` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL,
  `amount` int(10) unsigned default NULL,
  `token_id` text,
  `caller_reference` text,
  `transaction_id` text,
  `transaction_status` text,
  `request_id` text,
  `created` bigint(20) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `blogatweet`.`collections`;
CREATE TABLE `blogatweet`.`collections` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INTEGER UNSIGNED NOT NULL,
  `created` BIGINT UNSIGNED NOT NULL,
  `modified` BIGINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `blogatweet`.`tweets`;
CREATE TABLE `blogatweet`.`tweets` (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `collection_id` INTEGER UNSIGNED NOT NULL,
  `url` TEXT NOT NULL,
  `image_url` TEXT NOT NULL,
  `screen_name` TEXT NOT NULL,
  `text` TEXT NOT NULL,
  `date` TEXT NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;


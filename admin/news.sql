CREATE TABLE News (
news_id int NOT NULL AUTO_INCREMENT,
news_title varchar(255) NOT NULL,
news_short_description text NOT NULL,
news_full_content text NOT NULL,
author varchar(120) NOT NULL,
date datetime NOT NULL,
PRIMARY KEY (news_id)) CHARACTER SET UTF8;

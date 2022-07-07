DROP TABLE IF EXISTS codedata

CREATE TABLE codedata
(id int AUTO_INCREMENT PRIMARY KEY,
 code mediumtext, language VARCHAR(16),
 uniqueLink VARCHAR(20), 
 cookieEdit VARCHAR(20),
 views int(11) DEFAULT 0)
CREATE TABLE users (
          id INT(15) NOT NULL AUTO_INCREMENT,
          username VARCHAR(30) NOT NULL,
          email VARCHAR(30) NOT NULL,
          pwd VARCHAR(255) NOT NULL,
          craeted_at DATETIME NOT NULL DEFAULT CURRENT_TIME
)
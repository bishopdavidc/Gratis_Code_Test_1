CREATE DATABASE gratis_demo;

CREATE TABLE user_accounts (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  Password varchar(100) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
);

INSERT INTO user_accounts (username,Password) VALUES ('mashlog','Password@123');
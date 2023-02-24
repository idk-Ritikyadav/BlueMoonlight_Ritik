

First Run this: 


CREATE DATABASE school;



Then Click on the school database and run the below SQL 
Query😊:
Besure your MySQL password username and host name is default: 
localhost, no password, root



CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);



CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
   `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);



CREATE TABLE posts (
  post_id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  post_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_name VARCHAR(255) NOT NULL
);

DROP TABLE IF EXISTS users;


CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  zip INT,
  email VARCHAR(255),
  password_hash VARCHAR(255),
  role VARCHAR(255) DEFAULT 'user'
);
CREATE TABLE articles (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  body TEXT NOT NULL
);

INSERT INTO articles(title, body) VALUES
('Article 1', 'Ceci est un article classique.'),
('Article 2', 'Un autre article classique.');

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users(email, password) VALUES
('admin@zerotech.com', 'Sup3rAdmin!');

CREATE TABLE flags (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  value VARCHAR(255) NOT NULL
);

INSERT INTO flags(name, value) VALUES
('sql injection', 'FLAG{WEB_SQL}');

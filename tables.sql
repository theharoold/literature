CREATE TABLE auths (
    id INT AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(100) NOT NULL
);

CREATE TABLE works (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(100) NOT NULL,
    title VARCHAR(255) NOT NULL,
    publication_year INT NOT NULL,
    content TEXT NOT NULL,
    create_time TIMESTAMP NOT NULL
);

INSERT INTO auths (token) VALUES ("1234");
CREATE DATABASE IF NOT EXISTS pwm ;

USE pwm;

CREATE  TABLE IF NOT EXISTS users(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    score INT NOT NULL,
    UNIQUE(username),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS tasks(
    id INT NOT NULL AUTO_INCREMENT,
    user_id  INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    duration INT NOT NULL,
    current_minutes INT NOT NULL,
    due_date TIMESTAMP NOT NULL,
    priority INT NOT NULL,
    status VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);





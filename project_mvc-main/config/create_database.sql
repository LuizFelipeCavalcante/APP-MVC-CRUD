create database project_mvc;
use project_mvc;
create table users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    email VARCHAR(100) NOT NULL
);
create table tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarefa VARCHAR(100) NOT NULL,
    prazo VARCHAR(50) NOT NULL
);

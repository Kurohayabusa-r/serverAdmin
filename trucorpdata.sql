CREATE DATABASE Trucorp;

USE Trucorp;

CREATE TABLE users(
ID INT PRIMARY KEY,
Nama VARCHAR(50),
Kantor VARCHAR(10) CHECK(Kantor = 'Pusat' or Kantor = 'Cabang')
);

INSERT INTO users VALUES
(100, 'Adi', 'Pusat'),
(101, 'Budi', 'Cabang'),
(102, 'Cecep', 'Cabang'),
(103, 'Dodi', 'Pusat');

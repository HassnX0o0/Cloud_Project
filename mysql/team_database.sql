CREATE DATABASE team;
use team;

CREATE TABLE team (
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    cgpa DECIMAL(3, 2) NOT NULL
);

INSERT INTO team (id, name, age, cgpa) VALUES
(22010023, 'Hassn Khalaf Osman', 20, 3.98),
(22011456, 'Ahmed Abdelrauf Mohamed', 21, 3.14),
(22011628, 'Fares Ashref Mohsen', 21, 3.4),
(22011643, 'Youssef Mohamed Sharawy', 20, 3.6),
(22011644, 'Mohamed Abdelwahab Mohamed', 21, 3.63);

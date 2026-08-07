use choir_db;

create table users (
    user_id int auto_increment primary key,
    name varchar(30) not null,
    email varchar(30) not null unique,
    password varchar(255) not null,
    role varchar(20) not null

);

INSERT INTO users (name, email, password, role)
VALUES
('Admin User', 'admin@gmail.com', 'admin123', 'admin'),
('Choir Member', 'member@gmail.com', 'member123', 'member');

<!-- lab 10 createBookFlightDB.sql-->
<!--https://www.php.net/manual/en/function.password-hash.php-->

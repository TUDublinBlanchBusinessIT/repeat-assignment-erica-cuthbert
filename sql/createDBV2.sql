use choir_db;

create table users (
    user_id int auto_increment,
    name varchar(30),
    email varchar(30),
    primary key(id)
);

INSERT INTO users (name, email, password, role)
VALUES
('Admin User', 'admin@gmail.com', 'admin123', 'admin'),
('Choir Member', 'member@gmail.com', 'member123', 'member');

<!-- lab 10 createBookFlightDB.sql-->

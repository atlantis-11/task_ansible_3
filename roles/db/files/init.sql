drop table if exists users;

create table users (
    id int primary key auto_increment,
    name varchar(255),
    email varchar(255)
);

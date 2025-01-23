drop table if exists users;

create table users (
    id int primary key auto_increment,
    name varchar(255),
    email varchar(255)
);

insert into users (name, email) values 
('John Doe', 'john.doe@example.com'),
('Jane Smith', 'jane.smith@example.com'),
('Alice Johnson', 'alice.johnson@example.com'),
('Bob Brown', 'bob.brown@example.com'),
('Charlie Davis', 'charlie.davis@example.com');

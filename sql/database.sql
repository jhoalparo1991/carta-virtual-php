/*
use carta_virtual;

create table enterprise(
	id int primary key auto_increment,
    name_enterprise varchar(50) not null unique
);

create table categories(
	id int primary key auto_increment,
    name_category varchar(50) not null unique
);

create table articles(
	id int primary key auto_increment,
	category_id int not null,
	name_articles varchar(150) not null unique,
    description text,
    description2 text
);

create table users(
	id int primary key auto_increment,
    fullname varchar(100) not null,
    phone varchar(15) not null,
    email varchar(100) not null unique,
    username varchar(50) not null unique,
    password varchar(100) not null unique
);

create table products(
	id int primary key auto_increment,
    user_id int not null,
    enterprise_id int not null,
    articles_id int not null,
    price1 decimal(15,0) not null,
    price2 decimal(15,0) default 0
);

alter table products
add constraint fk_product_user
foreign key (user_id) references users(id)
on update cascade
on delete no action;

alter table products
add constraint fk_product_enterprise
foreign key (enterprise_id) references enterprise(id)
on update cascade
on delete no action;

alter table products
add constraint fk_product_articles
foreign key (articles_id) references articles(id)
on update cascade
on delete no action

alter table articles
add constraint fk_articles_categories
foreign key (category_id) references categories(id)
on update cascade
on delete no action;
*/
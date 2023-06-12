create database surga_jasa;

use surga_jasa;

create table bengkel(
    id_bengkel int not null primary key auto_increment,
    nama_bengkel varchar(100),
    alamat_bengkel varchar(100),
    no_hp_bengkel char(50),
	gambar blob,
    deskripsi_bengkel varchar(1000)
);

create table laundry(
    id_laundry int not null primary key auto_increment,
    nama_laundry varchar(100),
    alamat_laundry varchar(100),
    no_hp_laundry char(50),
	gambar blob,
    deskripsi_laundry varchar(1000)
);

create table catering(
    id_catering int not null primary key auto_increment,
    nama_catering varchar(100),
    alamat_catering varchar(100),
    no_hp_catering char(50),
	gambar blob,
    deskripsi_catering varchar(1000)
);


create table user(
    id int not null primary key auto_increment,
    name varchar(200) not null,
    email varchar(200) not null,
    image varchar(200) not null,
    password varchar(200) not null,
    role_id int not null,
    is_active int not null,
    date_created int not null
);

create table user_menu(
    id int not null primary key auto_increment,
    menu varchar(200) not null
);

create table user_role(
    id int not null primary key auto_increment,
    role varchar(200) not null
);

create table user_sub_menu(
	id int not null primary key auto_increment,
	menu_id int not null,
	title varchar(200) not null,
	url varchar(200) not null,
	icon varchar(200) not null,
	is_active int not null
);

CREATE TABLE user_access_menu(
	id int not NULL primary key auto_increment,
	role_id int not null,
	menu_id int not null
)

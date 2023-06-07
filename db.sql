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
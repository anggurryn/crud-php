# Create Database
create database learnCrud;
# Create Table
create table user(
  id int auto_increment,
  nama varchar(20),
  email varchar(20),
  mobile int(13),
  dateOfBirth date,
  gender varchar(10),
  alamat varchar(50),
  password varchar(20),
  primary key(id)
);

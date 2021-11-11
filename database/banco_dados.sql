#CRIAR O BANCO DE DADOS:
create database db_cadastro;

#HABILITAR O BANCO DE DADOS:
use db_cadastro;

#CRIAR A TABELA DE PESSOAS NO BANCO DE DADOS:
create table tbl_user (
  id int unsigned auto_increment primary key,
  name varchar(250) not null,
  surname varchar(500) not null,
  email varchar(500) not null,
  phone varchar(20) not null
);

#CRIAR A TABELA DE ADMINS NO BANCO DE DADOS:
create table tbl_admin (
  id int unsigned auto_increment primary key,
  name varchar(250) not null,
  surname varchar(500) not null,
  email varchar(500) not null,
  phone varchar(20) not null,
  username varchar(50) not null,
  password varchar(500) not null
);
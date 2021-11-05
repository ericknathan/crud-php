#CRIAR O BANCO DE DADOS:
create database db_registration;

#HABILITAR O BANCO DE DADOS:
use db_registration;

#CRIAR A TABELA DE PESSOAS NO BANCO DE DADOS:
create table tbl_user (
  id int unsigned auto_increment primary key,
  name varchar(250) not null,
  surname varchar(500) not null,
  email varchar(500) not null,
  phone varchar(20) not null
);
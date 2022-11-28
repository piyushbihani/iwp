create database survey;
use survey;

create table profile(name varchar(50),phone bigint(10) primary key,address varchar(100),type varchar(20),invest varchar(20),units int,endp varchar(20),mserved varchar(100),association varchar(100),labour int,women int,reqire JSON,additional varchar(100));

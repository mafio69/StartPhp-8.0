create database if not exists databese;
use databese;

create user test;
grant ALL PRIVILEGES on `database`.* to test;

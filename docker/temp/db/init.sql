create database if not exists databese;
use databese;

CREATE TABLE IF NOT EXISTS testtab
(
    id INTEGER AUTO_INCREMENT,
    name TEXT,
    PRIMARY KEY (id)
) COMMENT='this is my test table';
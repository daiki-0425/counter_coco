CREATE DATABASE time_count;
USE time_count;

CREATE TABLE counter(
    time_hour TIME,
    sum_number INT DEFAULT 0,
    red_number INT DEFAULT 0
);
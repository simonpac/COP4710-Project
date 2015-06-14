# COP 4710 database creation SQL

#If the database already exists, drop the table
DROP DATABASE IF EXISTS eventhut;

create database eventhut;

# Use eh_db database
USE eventhut;

# User table
CREATE TABLE Users (
	user_id			INT(9) NOT NULL auto_increment PRIMARY KEY,
	username		VARCHAR(25) NOT NULL,
	password		VARCHAR(25) NOT NULL,
	fName			VARCHAR(20) NOT NULL,
	lName			VARCHAR(20) NOT NULL,	
	university_id	INT(5),
	isAdmin			INT(1),
	isSuperAdmin	INT(1)
);
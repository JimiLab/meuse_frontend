CREATE DATABASE IF NOT EXISTS MeUse;

use MeUse;

CREATE TABLE IF NOT EXISTS Tag (
id int not null primary key auto_increment,
tagName varchar(128) UNIQUE,
score int not null,
IsActive boolean);

CREATE TABLE IF NOT EXISTS ArtistToTag (
id int not null primary key auto_increment,
artistID int not null,
tagID int not null,
score int not null,
foreign key (artistID) references Artist(id),
foreign key (tagID) references Tag(id));

CREATE TABLE IF NOT EXISTS Station (
id int not null primary key auto_increment,
title varchar(128) UNIQUE,
shoutID varchar(128) UNIQUE,
score int not null);

CREATE TABLE IF NOT EXISTS Artist (
id int not null primary key auto_increment,
name varchar (128) UNIQUE,
popularity int not null
);

CREATE TABLE IF NOT EXISTS ArtistToArtist (
id int not null primary key auto_increment,
artist1ID int not null,
artist2ID int not null,
score int not null,
foreign key (artist1ID) references Artist(id),
foreign key (artist2ID) references Artist(id)
);

CREATE TABLE IF NOT EXISTS ArtistToStation (
id int not null primary key auto_increment,
artistID int not null,
stationID int not null,
score int not null,
foreign key (artistID) references Artist(id),
foreign key (StationID) references Station(id));

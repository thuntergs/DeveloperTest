CREATE DATABASE vet;

use vet;

CREATE TABLE IF NOT EXISTS pets(
id int NOT NULL auto_increment PRIMARY KEY,
name varchar(50) DEFAULT NULL,
photo_id int DEFAULT NULL,
owner_id int DEFAULT NULL,
petdetail_id int DEFAULT NULL
)ENGINE=innodb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS owners(
id int NOT NULL auto_increment PRIMARY KEY,
name varchar(50) DEFAULT NULL,
photo_id int DEFAULT NULL
)ENGINE=innodb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS photos(
id int NOT NULL auto_increment PRIMARY KEY,
thumbnailpath varchar(255) DEFAULT NULL,
imagepath varchar(255) DEFAULT NULL
)ENGINE=innodb DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS petdetails(
id int NOT NULL auto_increment PRIMARY KEY,
color varchar(25) DEFAULT NULL,
weight varchar(25) DEFAULT NULL,
favtreat varchar(25) DEFAULT NULL
)ENGINE=innodb DEFAULT CHARSET=utf8;


INSERT INTO photos(thumbnailpath, imagepath)VALUES
('/assets/images/rob_thumb.jpg', '/assets/images/rob.jpg'),
('/assets/images/fred_thumb.jpg', '/assets/images/fred.jpg'),
('/assets/images/kal_thumb.jpg', '/assets/images/kal.jpg'),
('/assets/images/Hausziege_04_thumb.jpg', '/assets/images/Hausziege_04.jpg'),
('/assets/images/hyacinth-macaw-2_thumb.jpg', '/assets/images/hyacinth-macaw-2.jpg'),
('/assets/images/Brian_thumb.jpg', '/assets/images/Brian.jpg'),
('/assets/images/lulu_thumb.jpg', '/assets/images/lulu.jpg'),
('/assets/images/Jen_thumb.jpg', '/assets/images/Jen.jpg'),
('/assets/images/mr_squiggles_thumb.jpg', '/assets/images/mr_squiggles.jpg'),
('/assets/images/zuck_thumb.jpg', '/assets/images/zuck.jpg'),
('/assets/images/spot_thumb.jpg', '/assets/images/spot.jpg'),
('/assets/images/bizzy_thumb.jpg', '/assets/images/bizzy.jpg'),
('/assets/images/kelly_thumb.jpg', '/assets/images/kelly.jpg'),
('/assets/images/sammy_thumb.jpg', '/assets/images/sammy.jpg'),
('/assets/images/Clark_thumb.jpg', '/assets/images/Clark.jpg'),
('/assets/images/lilly_thumb.jpg', '/assets/images/lilly.jpg');

INSERT INTO pets(name, photo_id, owner_id, petdetail_id)VALUES
('Fred', 2, 1,2),
('Haus', 4, 2, 3),
('Mac', 5, 2, 4),
('Lulu', 7, 3, 5),
('Mr Squiqqles', 9, 4, 6),
('Spot', 11, 5, 7),
('Bizzy', 12, 5, 1),
('Sammy', 14, 6, 8),
('Lilly', 16, 7, 9);



INSERT INTO owners(name, photo_id)VALUES
('Rob', 1),
('Kal', 3),
('Brian', 6),
('Jen', 8),
('Zuck', 10),
('Kelly', 13),
('Clark', 15);

INSERT INTO petdetails(color, weight, favtreat)VALUES
('black/yellow', '100 milligrams', 'honey'),
('white/black', '4oz', 'nuts'),
('fawn', '80 lbs', 'grass'),
('blue', '3 lbs', 'sunflower seeds'),
('fawn', '22 lbs', 'pancakes'),
('fawn', '5 lbs', 'milk'),
('red', '90 milligrams', 'sugar'),
('white', '18 lbs', 'beggin strips'),
('yellow/white', '15 lbs', 'milk bones');



DROP TABLE blocks;

CREATE TABLE blocks (
    id VARCHAR(255),
    name VARCHAR(255),
    minecraft_id VARCHAR(255),
    image_path VARCHAR(255)
);

INSERT INTO blocks VALUES ('1', 'Stone', 'minecraft:stone', './img/Stone.png');
INSERT INTO blocks VALUES ('1:1', 'Granite', 'minecraft:granite', './img/Granite.png');
INSERT INTO blocks VALUES ('1:2', 'Polished Granite', 'minecraft:polished_granite', './img/Polished_Granite.png');
INSERT INTO blocks VALUES ('1:3', 'Diorite', 'minecraft:diorite', './img/Diorite.png');
INSERT INTO blocks VALUES ('1:4', 'Polished Diorite', 'minecraft:polished_diorite', './img/Polished_Diorite.png');
INSERT INTO blocks VALUES ('1:5', 'Andesite', 'minecraft:andesite', './img/Andesite.png');
INSERT INTO blocks VALUES ('2', 'Grass', 'minecraft:grass', './img/Grass.png');
INSERT INTO blocks VALUES ('3', 'Dirt', 'minecraft:dirt', './img/Dirt.png');
INSERT INTO blocks VALUES ('3:1', 'Coarse Dirt', 'minecraft:dirt', './img/Coarse_dirt.png');



/*
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
*/
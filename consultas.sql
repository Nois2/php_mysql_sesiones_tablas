--1
CREATE TABLE Anime (
    id VARCHAR(100),
    nombre VARCHAR(255),
    fecha_emision DATE
);
--2
SELECT * FROM Anime;
--3
INSERT INTO Anime (id, nombre, fecha_emision) VALUES 
('1', 'Naruto', '2002-10-03'),
('2', 'One Piece', '1999-10-20'),
('3', 'Dragon Ball Z', '1989-04-26');
--3.5
SELECT * FROM Anime;
--4
UPDATE Anime
SET nombre = 'Naruto Shippuden'
WHERE id = '1';
--5
SELECT * FROM Anime;
--6
DELETE FROM Anime WHERE id = '3';
--7
SELECT id, fecha_emision FROM Anime;
--8
INSERT INTO Anime (id, nombre, fecha_emision) VALUES 
('4', 'Attack on Titan', '2013-04-07'),
('5', 'My Hero Academia', '2016-04-03');
--9
SELECT * FROM Anime;
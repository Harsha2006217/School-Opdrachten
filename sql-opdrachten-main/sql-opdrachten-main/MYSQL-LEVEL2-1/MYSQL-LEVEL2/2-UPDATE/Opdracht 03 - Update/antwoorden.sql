-- Opdracht 1

UPDATE studenten2 
SET woonplaats = 'Amstelveen'

-- Opdracht 2 

UPDATE studenten2 
set adres = 'straat', postcode = '1811'
WHERE student_id > 7


-- Opdracht 3

UPDATE studenten2 
SET geboortedatum = "12-12-2000"
WHERE student_id = 2

-- Opdracht 4

UPDATE studenten2 
SET klas = '9C'
WHERE student_id = 4;

UPDATE studenten2 
SET klas = '9A'
WHERE student_id = 8;



-- Opdracht 5

UPDATE studenten2 
SET voornaam = 'Johannah'
WHERE student_id = 6;



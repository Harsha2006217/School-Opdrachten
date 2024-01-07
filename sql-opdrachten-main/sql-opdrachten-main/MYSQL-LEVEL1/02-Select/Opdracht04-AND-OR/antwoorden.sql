-- Opdracht 1 

SELECT * FROM `players` WHERE club = 'chelsea' AND nationality = 'spain';
-- Opdracht 2 

-- Opdracht 3
SELECT * FROM `players` WHERE club= 'liverpool' AND age >= 20;
-- Opdracht 4
SELECT * FROM `players` WHERE nationality = 'netherlands' AND club = 'ajax';

-- Opdracht 5
SELECT * from players WHERE nationality != 'netherlands' and club = 'ajax'
-- Opdracht 6 
SELECT name, age from players WHERE club = 'az alkmaar'
-- Opdracht 7 
SELECT name, age, club from players WHERE club = 'az alkmaar'
-- Opdracht 8
SELECT name, wage from players WHERE nationality = 'brazil' and club='manchester city'
-- Opdracht 9
SELECT name, wage from players WHERE age > 30 and wage < 10000
-- Opdracht 10
SELECT name,  age from players WHERE nationality = 'spain' OR nationality = 'portugal'
-- Opdracht 11
SELECT name, age, club from players WHERE nationality = 'portugal' and club = 'chelsea'
-- Opdracht 12
SELECT name, club from players where age > 40 and wage > 10000
-- Opdracht 13
SELECT * from players where nationality = 'netherlands' AND (club= 'ajax' OR club= 'fc utrecht')
-- Opdracht 14
SELECT * from players where age > 20 AND wage = '100000'
-- Opdracht 15
SELECT name, age, nationality from players WHERE (nationality='brazil' OR nationality = 'argentina') and age > 25;

-- Opdracht 1 
SELECT max(wage) from players where club = "fc utrecht" 
-- Opdracht 2 
SELECT ROUND(AVG(wage)) as gemiddelde_loon from players
-- Opdracht 3
SELECT SUM(wage) AS alle_loon_kosten from players WHERE club = 'fc groningen'
-- Opdracht 4
SELECT COUNT(name) as totaal_spelers from players WHERE club = 'manchester united'
-- Opdracht 5
SELECT AVG(wage) as gemiddelde_loon_nederland FROM players WHERE nationality='netherlands'
-- Opdracht 6 
SELECT AVG(wage) as gemiddelde_loon_onder_twintig FROM players WHERE age < 20;
-- Opdracht 7 
SELECT AVG(wage) as gemiddelde_loon_boven_twintig FROM players WHERE age > 20;
-- Opdracht 8
SELECT SUM(value) as totaal_waarde_chelsea from players where club = 'chelsea';
-- Opdracht 9
SELECT ROUND(AVG(age)) as gemiddelde_leeftijd from players
-- Opdracht 10
SELECT club, wage, round(value) as gemiddelde_waarde from players where club = 'liverpool'
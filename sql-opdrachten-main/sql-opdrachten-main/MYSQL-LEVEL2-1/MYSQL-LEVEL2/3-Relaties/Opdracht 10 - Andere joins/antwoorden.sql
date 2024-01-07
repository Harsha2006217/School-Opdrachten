-- Opdracht 1
SELECT game.name, platform.platform FROM game LEFT JOIN platform ON platform.id = game.platform_id WHERE game.name LIKE "Grand Theft Auto%";
-- Opdracht 2 
SELECT game.name, platform.platform, platform.id FROM game RIGHT JOIN platform ON platform.id = game.platform_id WHERE platform.id = 25

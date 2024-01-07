-- Opdracht 1
SELECT game.name, platform.platform FROM game JOIN platform ON platform.id = game.platform_id 
-- Opdracht 2 
SELECT game.name, platform.platform FROM game JOIN platform ON platform.id = game.platform_id WHERE game.id <= 10
-- Opdracht 3
SELECT game.name, platform.platform FROM game JOIN platform ON platform.id = game.platform_id WHERE game.name = "Call of Duty: Advanced Warfare";
-- Opdracht 4
SELECT game.name, platform.platform FROM game JOIN platform ON platform.id = game.platform_id WHERE game.name LIKE "fifa%";
-- Opdracht 5
SELECT game.name, platform.platform FROM game JOIN platform ON platform.id = game.platform_id WHERE game.name LIKE "Borderlands%";
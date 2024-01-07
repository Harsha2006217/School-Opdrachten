-- Opdracht 1
SELECT game.name, platform.platform, genre.genre FROM game LEFT JOIN platform on game.platform_id = platform_id LEFT JOIN genre on game.genre_id = genre.id WHERE game.name LIKE "b%";
-- Opdracht 2 
SELECT game.name, platform.platform, genre.genre, game.year FROM game LEFT JOIN platform on game.platform_id = platform_id LEFT JOIN genre on game.publisher_id = publisher_id WHERE game.year = 2013;
-- Opdracht 3
SELECT game.name, genre.genre, game.year, game.jp_sales FROM game LEFT JOIN platform on game.platform_id = platform_id LEFT JOIN genre on game.publisher_id = publisher_id WHERE genre.id = 5 AND game.year > 2000;
-- Opdracht 4
SELECT game.year, genre.genre, game.jp_sales, publisher.publisher FROM game LEFT JOIN platform on game.platform_id = platform_id LEFT JOIN publisher on game.publisher_id = publisher_id LEFT JOIN genre on game.genre_id = genre_id WHERE game.name LIKE "Mario%";
-- Opdracht 5
SELECT game.year, genre.genre, publisher.publisher, game.name, platform.platform FROM game LEFT JOIN platform on game.platform_id = platform_id LEFT JOIN publisher on game.publisher_id = publisher_id LEFT JOIN genre on game.genre_id = genre_id WHERE platform.platform = 'pc';
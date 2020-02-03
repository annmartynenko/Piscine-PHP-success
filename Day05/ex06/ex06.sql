SELECT `title`, `summary` 
FROM film 
WHERE LCASE(`summary`) LIKE LCASE('%Vincent%')
ORDER BY `id_film` ASC;
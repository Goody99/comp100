/*
#Name: Abdelfattah Lahna
#Date: May 30, 2016
#Purpose: using the Select statements to retrieve data from dbdrinks.
*/

#drop existing database if it existes, create a new database and use it
DROP DATABASE IF EXISTS dbdrinks;
CREATE DATABASE dbdrinks;
USE dbdrinks;

#ensure ' not null' is enforced
SET SQL_MODE = "STRICT_ALL_TABLES";


#create a table and columns/attributes/fields to store DRINKS information
DROP TABLE IF EXISTS drinks;
CREATE TABLE drinks(
	drink_name  VARCHAR(20) NOT NULL,
	cost		DEC(4,2) UNSIGNED NOT NULL,
	carbs		DEC(4,1) UNSIGNED NOT NULL,
	color		VARCHAR(10) NOT NULL,
	ice	        ENUM('Y','N') NOT NULL,
	calories	TINYINT UNSIGNED NOT NULL
);

INSERT INTO drinks
VALUES
('Blackthorn', 3, 8.4, 'Yellow', 'N', 33),
('Blue Moon', 2.5, 3.2, 'Blue', 'Y', 12),
('Oh My Gosh', 3.5, 8.6, 'Orange', 'Y', 35),
('Lime Fizz', 2.5, 5.4, 'Green', 'Y', 24),
('Kiss on the Lips', 5.5, 42.5, 'Purple', 'Y', 171),
('Hot Gold', 3.2, 32.1, 'Orange', 'N', 135),
('Lone Tree', 3.6, 4.2, 'Red', 'Y', 17),
('Greyhound', 4, 14, 'Yellow', 'Y', 50),
('Indian Summer', 2.8, 7.2, 'Brown', 'N', 30),
('Bull Frog', 2.6, 21.5, 'Tan', 'Y', 80),
('Soda and It', 3.8, 4.7, 'Red', 'N', 19);

# 1.The drinks that have name starting with an ‘L’.
SELECT * FROM drinks
WHERE drink_name LIKE 'L%';

#2.The drinks that have more than 15 carbs.
SELECT * FROM drinks
WHERE CARBS>15 ;

#3. All drinks that have no calorie information
SELECT * FROM drinks
WHERE calories IS null;

#4 .The drinks that have a defined cost.
SELECT * FROM drinks
WHERE cost !=0;

#5.The name, cost, carbs and calories of all drinks that have ‘go’ embedded in their name.
SELECT * FROM drinks
WHERE drink_name LIKE '%go%';

#6.The drink name, cost, carbs and calories of all drinks that end with the letter ‘n’.
SELECT * FROM drinks
WHERE drink_name LIKE '%n';

#7. the name and cost of all the drinks that have calories in the range 30 to 60, inclusive.
SELECT * FROM drinks
WHERE  calories >= 30 AND calories  <=60;

#8. the information of drinks that begin with the letters G through O using the BETWEEN verb.
SELECT * FROM drinks
WHERE drink_name BETWEEN 'G%' and 'O';

#9. all the drink names that do not have ice.
SELECT * FROM drinks
WHERE NOT ICE= 'Y';

#10. all drinks that are either yellow or orange with or
SELECT * FROM drinks
WHERE COLOR = 'YELLOW' OR COLOR  = 'ORANGE';

#11.all drinks that are either yellow or orange with in
SELECT * FROM drinks
WHERE COLOR IN ('YELLOW' ,'ORANGE');

#12.Use the NOT IN verb to select all drinks that are neither yellow nor orange.
SELECT * FROM drinks
WHERE COLOR NOT IN ('YELLOW' ,'ORANGE');

#13.Write a select to display all drinks with a cost greater than $3 and carbs less than 15.
SELECT * FROM drinks
WHERE COST >3 AND CARBS<15;

#14.Write a select statement to display the first 5 records of the table.
SELECT * FROM drinks
LIMIT 0,5;

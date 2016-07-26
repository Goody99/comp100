<?php
//$_POST to variables

$team_name = $_POST['name'];
$team_category = $_POST['team_category'];
$website= $_POST['website'];
// connection to database
$dbh = new PDO("mysql:host=dreamhost;dbname=teams","gc200325390","DBjvinA?");
$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Build the SQL
$sql= 'INSERT INTO teams (name,team_category,website)VALUES(:name,:team_category,:website)';

// prepare the SQL

$sth = $dbh-> prepare ($sql);
$sth ->bindParam(':name',$team_name, PDO::PARAM_STR,50);
$sth ->bindParam(':team_category',$team_category, PDO::PARAM_STR,50);
$sth ->bindParam(':website',$website, PDO::PARAM_STR,100);

// Execute the SQL

$sth->execute();

// close our connection
$dbh = null;
?>
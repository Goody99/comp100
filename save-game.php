<!DOCTYPE html>
<html>
<head>
    <title>saving the game </title>

</head>
<body>
<?php
//store the forme input in variables
$name=$_POST['name'];
$age_limit=$_POST['age_limit'];
$release_date=$_POST['type'];
//connecting to Database
$conn=new PDO('mysql:host=sql.computerstudi.es;dbname=gc200325390','gc200325390','DBjvinA?');

//set up an SQL command to save the new game
$sql ="INSERT INTO games(name,age_limit,type) VALUES(:name,:age_limit,:type)";

// set up command object
$cmd=$conn ->prepare($sql);

//fill the placeholder with the input variables
$cmd->bindParam(':name',$name,PDO::PARAM_STR,50);
$cmd->bindParam(':age_limit',$age_limit,PDO::PARAM_INT);
$cmd->bindParam(':type',$type,PDO::PARAM_INT);

//execute Method

$cmd->execute();

// print message
echo "game saved";



//close the connection
$conn=null;
?>
</body>
</html>

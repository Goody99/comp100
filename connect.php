<!DOCTYPE html>
<html>
<head>
    <title>Database connection </title>

</head>
<body>
<?php
$conn=new PDO('mysql:host=sql.computerstudi.es;dbname=gc200325390','gc200325390','DBjvinA?');
if (!$conn){
    die('Could not connect:');
}
else{
    echo 'connected to database';

}
//close the connection
$conn=null;
?>
</body>
</html>


 
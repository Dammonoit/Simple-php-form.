<?php

$conn=mysqli_connect("localhost",'root',"root");
if(!$conn)
	die("database cant be connected".mysql_error());
echo 'Connected successfully<br />';


$sql1="Create DATABASE dataform";
if($conn->query($sql1) == TRUE)
{
	echo "database created successfully";
}
else
{
	echo "error creating database" . mysql_error()."</br>";
}


$sql="CREATE TABLE formdetails (
fname VARCHAR(50),
lname VARCHAR(50),	
mail VARCHAR(50),
city VARCHAR(50),
state VARCHAR(50),
zip_code VARCHAR(10),
asp VARCHAR(3),
cp VARCHAR(15),
MP VARCHAR(15));
";
mysqli_select_db($conn,'dataform');
if($conn->query($sql) == TRUE)
{
	echo "table created successfully";
}
else
{
	echo "error creating table" . mysql_error();
}
$conn->close();


//header("location:pracphp.php")
?>
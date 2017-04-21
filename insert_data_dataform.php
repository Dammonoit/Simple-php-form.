<?php
$conn=mysqli_connect("localhost",'root',"root");
mysqli_select_db($conn,"dataform");
if($conn->connect_error) 
	die ($conn->connect_error);	
$query="INSERT INTO formdetails (fname,lname,mail,city,state,zip_code,asp,cp,MP)VALUES('$_POST[fname]','$_POST[lname]','$_POST[mail]','$_POST[city]','$_POST[state]','$_POST[zipcode]','$_POST[asp]','$_POST[cp]','$_POST[MP]')";
$result=$conn->query($query);
if(!$result) die ($conn->error);



header("location:dataform.php")


?>
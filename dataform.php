<?php


$conn=mysqli_connect("localhost",'root',"root");


mysqli_select_db($conn,"dataform");
if($conn->connect_error) 
	die ($conn->connect_error);

$query="SELECT * FROM formdetails";

$result=mysqli_query($conn,$query);

if(!$result) 
	die ($conn->error);

while($arr=mysqli_fetch_array($result))
{
	echo"$arr[fname]";echo"</br>";
	echo"$arr[lname]";echo"</br>";
	echo"$arr[mail]";echo"</br>";
	echo"$arr[city]";echo"</br>";
	echo"$arr[state]";echo"</br>";
	echo"$arr[zip_code]";echo"</br>";
	echo"$arr[asp]";echo"</br>";
	echo"$arr[cp]";echo"</br>";
	echo"$arr[MP]";echo"</br>";
}
?>
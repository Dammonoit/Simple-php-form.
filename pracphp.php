
<!DOCTYPE html>
<html>
<head>
  <style>
  body{ background-image=url("images.jpg");
         background-repeat:no-repeat;
  </style>
</head>

<body>
<div style="margin:150px 500px;display:inline-block;text-align:center;vertical-align:middle;border:solid;width:600px; background:#808080">
<div style="border:solid;">
<h1>EVENT REGISTRATION FORM</h1>
</div>


<form action="insert_data_dataform.php" method="post" align=center ></br>

 <label for="fname">First Name:</label> <input type="text" name="fname" id="fname"></br>

 </br><label for="lname">Last Name:</label> <input type="text" name="lname" id="lname"></br>

 </br><label for="mail">Mailing Address:</label> <input type="email" name="mail" id="mail"></br>

 </br><label for="city">City:</label> <input type="text" name="city" id="city"></br>

 <label for="state">State:</label>
	<input list="state" name="state">
	<datalist id="state">
		<option id="up" value="up">
		<option id="ap" value="ap">
		<option id="tn" value="tn">
		<option id="mp" value="mp">
	</datalist></br>

 <label for="zipcode">Zip Code:</label>
	<input type="text" name="zipcode" id="zipcode"></br>

<hr style="border-top:dashed"></hr>

<label for="asp">Are you speaking at the conference:</label>
	<input type="checkbox" value="Yes" name="asp">YES</t>
	<input type="checkbox" value="No" name="asp">NO<br></br>

<label for="cp">Conference Pass:</label>
	<input type="radio" name="cp" value="1-day Pass">1-day Pass</br>
	<input type="radio" name="cp" value="2-day Pass">2-day Pass</br>
	<input type="radio" name="cp" value="3-day Pass">3-day Pass</br>
	<input type="radio" name="cp" value="4-day Pass">4-day Pass</br>

<hr style="border-top:dashed"></hr>


<label for="MP">Meal Preference:</label>
	<input list="MP" name="MP">
	<datalist id="MP">
		<option id="Veg" value="Veg">
		<option id="Non-Veg" value="Non-Veg">
	</datalist></br>

<input type="submit"></br>

</form>
</div>
</body></html>

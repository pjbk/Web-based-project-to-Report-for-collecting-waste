<?php
include_once 'config.php';
?>
<html>
<head>
<style>
body {
	background-color:  	#FFFFFF;
}
</style>
<title>
Welcome 
</title>
<link rel="stylesheet" href ="style.css">
</head>
<body>
<h1 style="color:#008000"><br>
Report Card
</h1>
<a href='index.php'><h4 style="color:#A52A2A">Home Page</h4></a>
<br>
<form action = "" method = "post" autocomplete = "off" style ="text-align: center">
<p><h style="color:#00008B">Your Name<h style="color:red">*<br>
<input type = "text" name = "name" placeholder= "Name" required> 
<p><h style="color:#00008B">Your Phone No.<h style="color:red">*<br>
<input type = "text" name = "mobi" placeholder= " Phone No." required>
<p><h style="color:#00008B">Zone<h style="color:red">*<br>
<select name = "loc" required>
<option> <h style="color:#00008B">Select Your Zone </option>
<option value = "Balubari">Balubari</option>
<option value = "Dinajpur"> Dinajpur Sadar</option>
<option value = "Eidgah"> Eidgah</option>
<option value = "Ghasipara"> Ghasipara </option>
<option value = "Kalurmor"> Kalurmor</option>
<option value = "Kanchon"> Kanchon Colony </option>
<option value = "Modernmor"> Modernmor</option>
<option value = "Newtown"> Newtown </option>
<option value = "Paharpur"> Paharpur </option>
<option value = "RailRoad"> RailRoad</option>
<option value = "Rajbari"> Rajbari</option>
<option value = "Ramnagar"> Ramnagar </option>
<option value = "Sardarpara"> Sardarpara </option>
<option value = "Shuihari"> Shuihari </option>
</select>
<p><h style="color:#00008B">Waste Bin No.<h style="color:red">*<br>
<input type = "text" name = "tbid" placeholder= " Write here" required> 
<p><h style="color:#00008B">Amount of Waste<h style="color:red">*</h><br>
<select name = "st" required>
<option> Select One </option>
<option value = "Half"> Half </option>
<option value = "Full"> Full</option>
</select>
<br><br><br>
<input type = "submit" name = "submit" value = "Report"><br>
</form>
<?php
if(isset($_POST['submit']))
{
	
$sql = "CREATE TABLE IF NOT EXISTS CITY ( 
name VARCHAR(30) NOT NULL,
mobi VARCHAR(30) NOT NULL,
loc VARCHAR(30) NOT NULL,
tbid VARCHAR(30) NOT NULL,
st VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";


$sql2 = "INSERT INTO CITY(name,mobi,loc,tbid,st) 
VALUES ('$_POST[name]','$_POST[mobi]','$_POST[loc]','$_POST[tbid]','$_POST[st]')";
 if (mysqli_query($conn, $sql2)) {
    echo '<h style="color:green">Submitted Successful</h>';
}
else{echo '<h style="color:red">Submitted Unsuccessful</h>';}
}
?>



</body>
</html>
 
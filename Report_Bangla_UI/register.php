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
রিপোর্ট কার্ড
</h1>
<a href='index.php'><h4 style="color:#A52A2A">মূলপাতা</h4></a>
<br>
<form action = "" method = "post" autocomplete = "off" style ="text-align: center">
<p><h style="color:#00008B">আপনার নাম<h style="color:red">*<br>
<input type = "text" name = "name" placeholder= "নাম" required> 
<p><h style="color:#00008B">আপনার  মোবাইল নাম্বার <h style="color:red">*<br>
<input type = "text" name = "mobi" placeholder= " মোবাইল নাম্বার" required>
<p><h style="color:#00008B">এলাকা(জোন)<h style="color:red">*<br>
<select name = "loc" required>
<option> <h style="color:#00008B">এলাকা নির্বাচন করুন </option>
<option value = "Balubari"> বালুবাড়ি </option>
<option value = "Dinajpur"> দিনাজপুর সদর</option>
<option value = "Eidgah"> ঈদগাহ</option>
<option value = "Ghasipara"> ঘাসিপাড়া </option>
<option value = "Kalurmor"> কালুরমোড় </option>
<option value = "Kanchon"> কাঞ্চন কলোনী </option>
<option value = "Modernmor"> মডার্ন মোড় </option>
<option value = "Newtown"> নিউটাউন </option>
<option value = "Paharpur"> পাহাড়পুর </option>
<option value = "RailRoad"> রেলরোড </option>
<option value = "Rajbari"> রাজবাড়ী </option>
<option value = "Ramnagar"> রামনগর </option>
<option value = "Sardarpara"> সর্দারপাড়া </option>
<option value = "Shuihari"> সুইহারি </option>
</select>
<p><h style="color:#00008B">ডাস্টবিন নং<h style="color:red">*<br>
<input type = "text" name = "tbid" placeholder= " লিখুন" required> 
<p><h style="color:#00008B">আবর্জনার পরিমাণ<h style="color:red">*</h><br>
<select name = "st" required>
<option> নির্বাচন করুন </option>
<option value = "Half"> হাফ </option>
<option value = "Full"> পূর্ণ </option>
</select>
<br><br><br>
<input type = "submit" name = "submit" value = "রিপোর্ট"><br>
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
 
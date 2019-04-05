<?php
$host = "localhost";
$user = "catrinal";
$password = "9WvotsQ6NYPPiKHt";
$dbname = "restaurants";
$tablename = "information";

$cxn = mysqli_connect($host,$user,$password,$dbname);

if(!$cxn){
	die("Connection Failed :" . mysqli_connect_error());
} else {
	
}

$dbs = mysqli_select_db($cxn,$dbname);
if(!$dbs){
	die("Could not connect to DB". mysqli_connect_error());
}

$name = $_POST['name'];

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$restaurant = $_POST['restaurant'];
$cuisine = $_POST['cuisine'];
$price = $_POST['price'];
$delivery = $_POST['delivery'];
$hygiene = $_POST['hygiene'];
$overview = $_POST['overview'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$vegan = $_POST['vegan'];
$vegetarian = $_POST['vegetarian'];
$dietary = $_POST['dietary'];

$sql = "INSERT INTO information (name, email,password,role,restaurant,cuisine,price,delivery,hygiene,overview,website,phone,vegan,vegetarian,dietary) VALUES ('$name','$email','$password', '$role', '$restaurant','$cuisine', '$price','$delivery','$hygiene','$overview','$website','$phone','$vegan','$vegetarian','$dietary')";


if (mysqli_query($cxn, $sql)) {
	echo "<h2> Thankyou $name for signing up $restaurant with Locate My Meal, we will review your details and upload your restaurant soon</h2>";

}
 else{
 	echo "Error :".$sql."<br>". mysqli_error($cxn);
 }

 mysqli_close($cxn);
//if(!mysql_query($sql)) {
//	die('Error; ' .mysql_error());
//}


?>

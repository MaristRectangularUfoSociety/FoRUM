<?php

//Connect to database
$con = mysql_connect("lamp.it.marist.edu/venus:3306", "venus", "jaR11C0D");
if(!$con) {
	die("Could not connect to database!")
}

$DB = mysql_select_db("Users")

//Setup variables
$name = $_POST['username'];
$pass = $_POST['password'];
$query = mysql_query("SELECT * FROM Users WHERE username = '$name' AND password = '$pass'");
$_SESSION['username'] = $name;
$_SESSION['password'] = $pass;

//Check if user entered all info
if(empty($_SESSION['username']) || empty($_SESSION['password'])) {
	die("Access restricted, please login first.");
}

if($name && $pass == "") {
	die("Please enter your username and password.");
}

if($name == "") {
	die("Please enter a username." . "</br>");
}

if($pass == "") {
	die("Please enter a password!");
	echo "</br>";
}

//Check username and password against the database
if($NumRows != 0) {
	while($Row = mysql_fetch_assoc($Query)) {
		$Database_Name = $Row['username'];
		$Database_Pass = $Row['password'];
	}
}
else {
	die("Incorrect Username or Password.");
}

if($name == $Database_Name && $pass == $Database_Pass) {
	//Log in user if all steps check out
	echo "Hello " . $_SESSION['username'] . "!";
}

?>
<?php

//Connect to database
$con = mysql_connect("lamp.it.marist.edu/venus", "venus", "jaR11C0D");
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



//Check username and password against the database

//Log in user if all steps check out

?>
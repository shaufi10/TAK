<?php
session_start();
if(isset($_POST['submit'])){
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('login') or die(mysql_error());
$ID = $_POST['username'];
$Password = $_POST['password'];
	if($ID!="&&$Password"){	
	$query = mysql_query("SELECT * FROM login where username = '$ID' AND password = '$_Password'") or die(mysql_error());
	$row = mysql_fetch_array($query);
	if($row) {
		$_SESSION['username'] = $ID; 
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
		} else { 
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } } 
	}
?>

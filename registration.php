<?php

session_start();

$con = mysql_connect ('localhost:3306', !root', KillerSpit23');

mysli_select_db($con, 'id15125388_userlogin')

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num 00 1){
	echo"username Already Taken";
}
	else{
		$reg= " intert into usernametable(name , password) values ('$name' , '$pass')";
		mysqli_query($con, $reg);
		echo "Registration Successful";
	}

?>
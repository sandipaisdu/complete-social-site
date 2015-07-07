<?php
$connection = mysqli_connect("localhost", "root", "", "social");
//evaluate the connection
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}
else{
	echo "Successfull Database Connection. happy Coding!!";
}
?>
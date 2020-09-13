<?php
 
//Include the connection script
Include ("dbconnection.php");
$server="localhost";
$username="admin";
$password="admin4321";
$database = "dsc_gmrit";
// Create connection
$conn = mysqli_connect($server, $username, $password, $database);
 
$a=$_POST['person_name'];
$b=$_POST['person_city'];
$c=$_POST['state'];
$d=$_POST['district'];
$e=$_POST['student'];
$f=$_POST['company'];
$g=$_POST['phone_number'];
$h=$_POST['gmail'];
#$b='city';
#$c='state';
#$d='district';

$sql="insert into event_registration(person_name,person_city,state,district,typesp,company,phone_number,gmail,jntuno)values('$a','$b','$c','$d','$e','$f','$g','$h','17341a05h1')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

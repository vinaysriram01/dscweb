<?php
 
//Include the connection script
Include ("dbconnection.php");
$server="localhost";
$username="admin";
$password="admin4321";
$database = "dsc_gmrit";
// Create connection
$conn = mysqli_connect($server, $username, $password, $database);
 
$a=$_POST['name'];
$b=$_POST['idea_gmail'];
$c=$_POST['idea_description'];
$d=$_POST['idea_summarization'];
$e=$_POST['idea_uniqueness'];
$f=$_POST['idea_title'];

#$b='city';
#$c='state';
#$d='district';

$sql="insert into ideashot(name,idea_gmail,idea_description,idea_summarization,idea_uniqueness,idea_title)values('$a','$b','$c','$d','$e','$f')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

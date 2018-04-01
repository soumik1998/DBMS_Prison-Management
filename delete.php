<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Course</title>
</head>
<body>
	<form action="" method=post>	
		<input type="text" name="id_">
		<input type="submit" name="delete" value="Add Course">
	</form>
<?php
$servername = "localhost";
$username = "username";
$password = "54soumik12";
$dbname = "myDB";

// Create connection
if(isset($_POST['delete'])){
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST['id_'];
// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}

$conn->close();
?>
</body>
</html>
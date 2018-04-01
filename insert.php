<html>
<body>
<?php
 
$conn = new mysqli('localhost','root','54soumik12');
 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 

mysqli_select_db($conn,"class");
 
echo "\n DB is seleted as Test  successfully";
 
$sql="INSERT INTO phonebook(name,phone) VALUES ('$_POST[fname]','$_POST[phone]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>
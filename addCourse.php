<?php
    if(isset($_POST['addCourse'])){
			$connect=mysqli_connect('localhost','root','','learning_database');
			mysqli_set_charset($connect, "utf8");
			// Check connection
			if (!$connect) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully<br/><br/>";
			$course=$_POST['CourseName'];
			// $query="INSERT INTO course ('course_name') VALUES ('$course')";
			$query="INSERT INTO course (course_name) VALUES ('$course')";
			$result=mysqli_query($connect,$query);
	    }
?>
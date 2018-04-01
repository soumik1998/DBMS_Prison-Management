<html>
<body>
<h1>Tables</h1>
<?php
		if(isset($_POST['addCourse'])){
			$connect=mysqli_connect('localhost','root','','54soumik12');
			mysqli_set_charset($connect, "utf8");
			// Check connection
			if (!$connect) {
			    die("Connection failed: " . mysqli_connect_error());
			}
            echo "Connected successfully<br/><br/>";
            
            mysqli_select_db($conn,"demo");
			$result = mysql_query("show tables"); 
            while($table = mysql_fetch_array($result)) { 
                echo($table[0] . "<BR>");    
	    }
	?>
</form>
</body>
</html>
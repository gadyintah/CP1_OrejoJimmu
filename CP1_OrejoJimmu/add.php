<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("db.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$bday = mysqli_real_escape_string($conn, $_POST['bday']);
	$position = mysqli_real_escape_string($conn, $_POST['position']);
	$answer = mysqli_real_escape_string($conn, $_POST['answer']);
		

				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($bday)) {
			echo "<font color='red'>bday field is empty.</font><br/>";
		}
		if(empty($position)) {
			echo "<font color='red'>position field is empty.</font><br/>";
		}
		if(empty($answer)) {
			echo "<font color='red'>answer field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO introduction(cp1_name,cp1_email,cp1_bday,cp1_pos_applied,cp1_answer) VALUES('$name','$email','$bday', '$position', '$answer')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='test.php'>View Result</a>";
}
?>
</body>
</html>

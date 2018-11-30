<html>
<head>
    <title>Add Data</title>
</head>
<body>
<?php
//including the database connection file
include_once("database.php");
if(isset($_POST['Submit'])) {
    	$name = $_POST['username'];
    	$password = $_POST['password'];
    	$status = $_POST['status'];
    	// if all the fields are filled (not empty)
        //insert data to database
    	$sql= "INSERT INTO user(ur_username,ur_password,ur_status) VALUES(?,?,?)";
    	$int=$db->insertRow($sql,array($name,$password,$status));
        if($int >0){
        //display success message
   	echo "<font color='green'>Data added successfully.";
  	echo "<br/><a href='index.php'>View Result</a>";
       }
       else
       echo "eroRRRRRRRRRRRRRRRRRRRR";
 }
?>
</body>
</html>


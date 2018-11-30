<?php
//including the database connection file
include_once ("database.php");

//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$result =$db->deleteRow("DELETE FROM user WHERE ur_Id=?",array($id));
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

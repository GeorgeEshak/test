<?php
include_once ("database.php");
$rows=$db->getRows("SELECT * FROM user ORDER BY ur_Id DESC");
?>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <a href="add.html">Add New Data</a><br/><br/>
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>password</td>
            <td>status</td>
            <td>Update</td>
        </tr>
        <?php
         foreach($rows as $res) {
            echo "<tr>";
            echo "<td>".$res['ur_username']."</td>";
            echo "<td>".$res['ur_password']."</td>";
            echo "<td>".$res['ur_status']."</td>";
		echo "<td><a href=\"edit.php?id=$res[ur_Id]\">Edit</a> | <a href=\"delete.php?id=$res[ur_Id]\"
		onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>
</body>
</html>


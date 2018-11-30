<html>
<head>
    <title>User Detail Report</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Sr NO.</th>
            <th width="120">User Name</th>
            <th>Password</th>
        </tr>
<?php
include_once('database.php');
$rows=$db->getRows("SELECT  * FROM user ",array());
Foreach($rows as $data){
    echo '
    <tr>
    <td>'.$data['ur_Id'].'</td>
    <td>'.$data['ur_username'].'</td>
    <td>'.$data['ur_password'].'</td>
    </tr>
    ';
}
?>
    </table> <a href="UserReport_Export.php"> Export To Excel </a> </body>
</html>


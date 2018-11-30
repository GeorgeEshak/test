<?php
// including the database connection file
include_once ("database.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $status=$_POST['status'];
    //updating the table
    $result = $db->updateRow("UPDATE user SET ur_username=?,ur_password=?,ur_status=? WHERE ur_Id=?",
    array($name,$pass,$status,$id));
   //redirectig to the display page. In our case, it is index.php
   header("Location: index.php");
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$res = $db->getRow("SELECT * FROM user WHERE ur_Id=?",array($id));
$name = $res['ur_username'];
$pass = $res['ur_password'];
$status = $res['ur_status'];
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $name;?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $pass;?>" required></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="<?php echo $status ;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>


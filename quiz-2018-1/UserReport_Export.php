<?php
//Connect to database
include_once('database.php');
//get Table contents
$rows=$db->getRows("SELECT * FROM user",array());
//save the data as text delimited as excel reuired
//Delimited text files (.xls), in which the TAB (\t)character typically separates each field of text.
//each row is delimted by new line \n
$columnHeader = '';
$columnHeader = "Sr NO" . "\t" . "User Name" . "\t" . "Password" . "\t";
$setData = '';
foreach($rows as $rec) {
    $rowData = '';
    foreach ($rec as $value) {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>



<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','bondee');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];

// database insert SQL code
$sql = "INSERT INTO `pre_reg` (`Id`, `fldName`, `fldEmail`) VALUES ('0', '$txtName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your details have ben submitted succesffuly, you will be notifies once we go live. Thanks you";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>

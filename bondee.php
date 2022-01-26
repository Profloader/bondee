<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bondeeco', '5c#E)U6r9FuuM3','bondeeco_bondee');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];

// database insert SQL code
$sql = "INSERT INTO `pre_reg` (`id`, `fldName`, `fldEmail`) VALUES ('0', '$txtName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "<h1>Your details have been submitted successfully, you would be notified once we go live. Thank you</h1>";
}
}
else
{
	echo "<h1>There is an issue with your submission, try again</h1>";
	
}
?>

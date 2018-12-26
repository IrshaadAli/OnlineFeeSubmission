<?php


echo "<pre>";
 print_r($_REQUEST);
echo "</pre>";

include_once('db_connect.php');
error_reporting(E_ALL);

$backFee = $_REQUEST['backFormFee'];
 $id = $_REQUEST['id'];
 $update ="UPDATE `backform` SET `backFee`='$backFee' WHERE `id`='$id' "; 



$change = mysqli_query($conn,$update); 



if($change)
{
header('Location:backForm.php');
}
else
{
	header('Location:backForm.php');
 	echo("Update data is fail");
}

?>
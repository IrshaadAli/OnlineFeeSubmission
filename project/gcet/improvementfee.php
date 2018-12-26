<?php


echo "<pre>";
 print_r($_REQUEST);
echo "</pre>";

include_once('db_connect.php');
error_reporting(E_ALL);

$impFee = $_REQUEST['impFee'];
 $id = $_REQUEST['id'];
 $update ="UPDATE `improvementform` SET `impFee`='$impFee' WHERE `id`='$id' "; 



$change = mysqli_query($conn,$update); 



if($change)
{
header('Location:improvementForm.php');
}
else
{
	header('Location:improvementForm.php');
 	echo("Update data is fail");
}

?>
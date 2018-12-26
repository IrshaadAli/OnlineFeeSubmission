<?php


include_once('db_connect.php');
error_reporting(E_ALL);

$verify = $_POST['verify'];
$id = $_POST['val'];
 $update ="UPDATE `notification` SET `verify`='$verify' WHERE `id`='$id' "; 



$change = mysqli_query($conn,$update); 



if($change)
{
header('Location:notification.php');
}
else
{
	header('Location:notification.php');
 	echo("Update data is fail");
}

?>
<?php

include_once('db_connect.php');
error_reporting(E_ALL);

$notice = $_POST['notice'];

$order ="INSERT INTO `notification` (`notice`) VALUES('$notice')";


$result = mysqli_query($conn,$order);


if($result)
{ 
header('Location:notification.php');
		exit;

}
else
{
	header('Location:notification.php');
		
 echo("Input data is fail");
 exit;
}





?>
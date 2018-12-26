<?php

include_once('db_connect.php');
error_reporting(E_ALL);

$mainFee = $_POST['mainFormFee'];
 $update ="UPDATE `mainform` SET `mainFormFee`='".$mainFee."'" ;


echo $change = mysqli_query($conn,$update); 



if($change)
{
header('Location:mainForm.php');
		exit;

}
else
{
	header('Location:mainForm.php');
		
 echo("Update data is fail");
 exit;
}





?>
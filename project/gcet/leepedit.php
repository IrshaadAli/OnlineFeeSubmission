<?php


echo "<pre>";
 print_r($_REQUEST);
echo "</pre>";

include_once('db_connect.php');
error_reporting(E_ALL);

$sem = $_POST['sem'];
$tuitionFee = $_POST['tuitionFee'];
$developmentFee = $_POST['developmentFee'];
$developmentFeeR = $_POST['developmentFeeR'];
$cautionMoney = $_POST['cautionMoney'];
$insuranceCharges = $_POST['insuranceCharges'];
$total =  $_POST['total'];
$batch =  $_POST['batch'];
 $id = $_POST['id'];
 $update ="UPDATE `leepfee` SET `tuitionFee`='$tuitionFee',`developmentFee`='$developmentFee',`developmentFeeR`='$developmentFeeR',`cautionMoney`='$cautionMoney',`insuranceCharges`='$insuranceCharges',`total`='$total' WHERE `id`='$id' "; 



$change = mysqli_query($conn,$update); 



if($change)
{
header('Location:leepFee.php');
}
else
{
	header('Location:leepFee.php');
 	echo("Update data is fail");
}

?>
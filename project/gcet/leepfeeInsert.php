<?php

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




$order ="INSERT INTO `leepfee` (`sem`,`tuitionFee`,`developmentFee`,`developmentFeeR`,`cautionMoney`,`insuranceCharges`,`total`,`batch`)
VALUES('$sem','$tuitionFee','$developmentFee','$developmentFeeR','$cautionMoney','$insuranceCharges','$total','$batch')";


$result = mysqli_query($conn,$order);


if($result)
{ 
header('Location:tfwsFee.php');
		exit;

}
else
{
	header('Location:leepfeeInsert.php');
		
 echo("Input data is fail");
 exit;
}





?>
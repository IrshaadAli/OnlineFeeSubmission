<?php 
	require_once('db_connect.php');
	$sem=$_POST['year'];
	$batch=$_POST['batch'];
	$newSem=$_POST['newYear'];
	mysqli_query($conn,"UPDATE `records` SET `sem`='$newSem' WHERE `year`='$year' AND `batch`='$batch' ");
	header('Location:admininfo.php');
?>
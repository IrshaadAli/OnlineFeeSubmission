<?php 
	require_once('db_connect.php');
	$sem=$_POST['sem'];
	$batch=$_POST['batch'];
	$newSem=$_POST['newSem'];
	mysqli_query($conn,"UPDATE `records` SET `sem`='$newSem' WHERE `sem`='$sem' AND `batch`='$batch' ");
	header('Location:admininfo.php');
?>
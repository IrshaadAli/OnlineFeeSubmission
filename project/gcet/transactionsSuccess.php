<?php 
		require_once('db_connect.php');
		$name=$_POST['name'];
		$enr=$_POST['enr'];
		$sem=$_POST['sem'];
		$branch=$_POST['branch'];
		$transactionType=$_POST['transactionType'];
		$amount=$_POST['amount'];
		$result =mysqli_query($conn,"INSERT INTO `transaction` (`name`,`enr`,`sem`,`branch`,`transactionType`,`amount`) VALUES ('$name','$enr','$sem','$branch','$transactionType','$amount' ) ");
		if ($result) {
			header('Location:transactions.php');
		}
?>
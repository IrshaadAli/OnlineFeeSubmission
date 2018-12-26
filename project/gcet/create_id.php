<?php

include_once('db_connect.php');
error_reporting(E_ALL);

$fname = $_POST['name'];
$lname = $_POST['lname'];
$faname = $_POST['fname'];
$enr = $_POST['enr'];
$batch = $_POST['batch'];
$branch = $_POST['branch'];
$year =  $_POST['year'];
$sem =  $_POST['sem'];
$admissionT =  $_POST['admissionT'];
$seat =  $_POST['seat'];
$sex =  $_POST['sex'];
$age = $_POST['age']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$fphone =  $_POST['fphone'];
$pwd = sha1($_POST['pwd']);




 $order ="INSERT INTO `records` (`name`,`lname`,`fname`,`enr`,`batch`,`branch`,`year`,`sem`,`admissionT`,`seat`,`sex`,`age`,`email`,`phone`,`fphone`,`pwd`)
VALUES('$fname','$lname','$faname','$enr','$batch','$branch','$year','$sem','$admissionT','$seat','$sex','$age','$email','$phone','$fphone','$pwd')"; 


$result = mysqli_query($conn,$order);	


if($result)
{
header('Location:student_form.php');
		exit;

}
else
{
	header('Location:create_id.php');
		
 echo("Input data is fail");
 exit;
}





?>
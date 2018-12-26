       <?php

include_once('db_connect.php');
error_reporting(0);
echo "<pre>";
 print_r($_REQUEST);
echo "</pre>";

    
			  
				 $name = $_POST['name'];
				 $enr = $_POST['enr'];
				 $semester = $_POST['sem'];
				$batch = $_POST['batch'];
				  $qryy = "SELECT * FROM `records` WHERE `name` = '".$name."' AND `enr` = '".$enr."' AND `sem` = '".$semester."' AND `batch` = '".$batch."'"; 
				   $result = mysqli_query($conn,$qryy);
				

 while($data = mysqli_fetch_assoc($result)){
	  echo $data['name'];
	  echo $data['lname'];
	  echo $data['fname'];
	  echo $data['enr'];
	  echo $data['batch'];
	  echo $data['branch'];
	  echo $data['year'];
	  echo $data['sem'];
	 exit;
 }

?>
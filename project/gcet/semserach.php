<?php

include_once('db_connect.php');
error_reporting(E_ALL);
echo "<pre>";
 print_r($_REQUEST);
echo "</pre>";

$semester = $_POST['sem']; 
$batch = $_POST['batch'];
  $qryy = "SELECT * FROM `semfee` WHERE `sem` = '".$semester."' AND `batch` = '".$batch."'"; 
$result = mysqli_query($conn,$qryy);
 $n = 1;

 ?>
 <table class="table">
                     <thead>
                        <tr>
                           <th>S.NO</th>
                           <th>Semester</th>
                           <th>Tuition Fees</th>
                           <th>Development Fees</th>
                           <th>Development Fees (RTU)</th>
                           <th>Caution Money</th>
                           <th>Insurance Charges</th>
                           <th>Total</th>
                           <th>Batch</th>
                           <th>Edit</th>
                        </tr>
                     </thead>
                     <tbody>
<?php  while($data = mysqli_fetch_assoc($result)){ ?>
     	 
	 <tr>
                           <td><?php echo $n; ?></td>
                           <td><?php echo $data['sem']; ?> </td>
                           <td><?php echo $data['tuitionFee']; ?></td>
                           <td><?php echo $data['developmentFee']; ?></td>
                           <td><?php echo $data['developmentFeeR']; ?></td>
                           <td><?php echo $data['cautionMoney']; ?></td>
                           <td><?php echo $data['insuranceCharges']; ?></td>
                           <td><?php echo $data['total']; ?></td>
                           <td><?php echo $data['batch']; ?></td>
                          <td><button type="button" id="modalBtn<?php echo ++$x; ?>" name="Btn<?php echo ++$x; ?>" class="btn" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</button></td>
                        </tr>
	 
	 
<?php 

 $n++;
 
 }

?>
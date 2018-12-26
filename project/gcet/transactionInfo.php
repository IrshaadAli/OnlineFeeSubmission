<?php
	session_start();
	if(isset($_SESSION['username'],$_SESSION['pwd']))
	{}
	else
	{
		header('location:admin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Online Fee Submit</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/dashboard.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>

   </head>
   <body>
      <div class="container-fluid">
         <nav class="navbar navbar-inverse navbar-fixed-top">
         
         <div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="float:left">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         </div>
         <a href="admin_logout.php">
         
         <button type="button" class="btn btn-primary" style="float:right; margin-right:10px; margin-top:7px">logout</button></a>
         <div id="bs-example-navbar-collapse-1"  class="collapse navbar-collapse hidden-lg hidden-md hidden-sm">
               <ul class="nav navbar-nav">
                  <li><a href="admininfo.php">Admin Information</a></li>
                  <li><a href="studentInfo.php">Student Information</a></li>
                  <li class="active"><a href="transactionInfo.php">Transaction Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="student_form.php">New Entry</a></li>
                  <li class="active"><a href="semFee.php">Semester Fee</a></li>
                  <li><a href="tfwsFee.php">TFWS Semester Fee</a></li>
                  <li><a href="leepFee.php">Leep Semester Fee</a></li>
                  <li><a href="mainForm.php">Main Form Fee</a></li>
                  <li><a href="backForm.php">Back Form Fee</a></li>
                  <li><a href="improvementForm.php">Improvement Form Fee</a></li>
               </ul>
         </div>
         
         </nav>
         <div class="row">
            <div class="col-md-2 hidden-xs hidden-sm sidebar ">
               <ul class="nav nav-sidebar ">
                  <li ><a href="admininfo.php">Admin Information</a></li>
                  <li><a href="studentInfo.php">Student Information</a></li>
                  <li class="active"><a href="transactionInfo.php">Transaction Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="student_form.php">New Entry</a></li>
                  <li><a href="semFee.php">Semester Fee</a></li>
                  <li><a href="tfwsFee.php">TFWS Semester Fee</a></li>
                  <li><a href="leepFee.php">Leep Semester Fee</a></li>
                  <li><a href="mainForm.php">Main Form Fee</a></li>
                  <li><a href="backForm.php">Back Form Fee</a></li>
                  <li><a href="improvementForm.php">Improvement Form Fee</a></li>
               </ul>
            </div>
            <div class=" col-md-10 col-md-offset-2 main">
               <h1 class="page-header">Transaction Information</h1>
               <div>
				<div class="col-md-5 col-md-offset-5">
                
             <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-lg" >Serach</button>
             </div>
             
               <div class="col-md-12 personal-info">
               <?php 
			   error_reporting(0);
			    include_once('db_connect.php');
			  
				$enr = $_POST['enr'];
				  $qryy = "SELECT * FROM `transaction` WHERE `enr`='$enr' "; 
				$result = mysqli_query($conn,$qryy);
                
                 $x=0;
			   	$y=0;
			    ?>
			   
			  
             
              
                  <table class="table">
                     <thead>
                        <tr>
                           <th>S.NO</th>
                           <th>Name</th>
                           <th>Roll No</th>
                           <th>Semester</th>
                           <th>Branch</th>
                           <th>Transaction Type</th>
                           <th>Amount</th>
                           <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                <?php 
                
                while($data = mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                           <td><?php echo ++$n; ?></td>
                           <td><?php echo strtoupper($data['name']); ?> </td>
                           <td><?php echo $data['enr']; ?></td>
                           <td><?php echo $data['sem']; ?></td>
                           <td><?php echo $data['branch']; ?></td>
                           <td><?php echo strtoupper($data['transactionType']); ?></td>
                           <td><?php echo $data['amount']; ?></td>
                           <td><?php echo $data['date']; ?></td>
                        </tr>
                        <?php } ?>
                       
                     </tbody>
                  </table>
               </div>
               </div>
               </div>
               </div>
            </div>
         </div>
        
         <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="col-sm-offset-2 col-sm-10"> 
                     <h3>Search</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="transactionInfo.php">
                    
                     <div class="form-group">
                              <label for="inputPassword3" class="col-sm-3 control-label">Entrollement</label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" id="enr" name="enr" >
                              </div>
                           </div>
                     <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                           <button type="submit" id="submit" class="btn btn-default">Submit</button>
                        </div>
                     </div>
                  </form>
                  
               </div>
            </div>
         </div>
        
     
      </div>
   </body>
</html>
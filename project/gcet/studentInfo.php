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
                  <li class="active"><a href="studentInfo.php">Student Information</a></li>
                  <li><a href="transactionInfo.php">Transation Information</a></li>
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
         
         </nav>
         <div class="row">
            <div class="col-md-2 hidden-xs hidden-sm sidebar ">
               <ul class="nav nav-sidebar ">
                  <li ><a href="admininfo.php">Admin Information</a></li>
                  <li class="active"><a href="studentInfo.php">Student Information</a></li>
                  <li><a href="transactionInfo.php">Transation Information</a></li>
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
               <h1 class="page-header">Student Information</h1>
               <div>
                  <div class="col-md-5 col-md-offset-5">
                     <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-lg" >Serach</button>
                  </div>
                  <div class="row">
                     <div class="col-md-12 personal-info">
                        <?php 
                           error_reporting(0);
                            include_once('db_connect.php');
                           
                           
                           $enr = $_POST['enr'];
                           $qryy = "SELECT * FROM `records` WHERE `enr` = '".$enr."'"; 
                           $result = mysqli_query($conn,$qryy);
                                     $n = 0;
                                     $x=0;
                           
                                   while($data = mysqli_fetch_assoc($result))
                           {
                           ?> 
                        <div class="alert alert-info alert-dismissable" style="margin-top:2%;">
                           <h3>Personal info</h3>
                           <form class="form-horizontal">
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">First name</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['name']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Last name</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['lname']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Father name</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['fname']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Enrollement No.</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['enr']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label  class="col-md-2 control-label">Batch</label>
                                 <div class="col-md-8">
                                    <input  class="form-control"  value="<?php echo $data['batch']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Branch</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo $data['branch']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Year</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo $data['year']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Semester</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo $data['sem']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Admission Type</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['admissionT']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Seat</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['seat']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Sex</label>
                                 <div class="col-md-8">
                                    <input class="form-control"  value="<?php echo strtoupper($data['sex']); ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Age</label>
                                 <div class="col-md-8">
                                    <input class="form-control" value="<?php echo $data['age']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                 <div class="col-md-8">
                                    <input class="form-control" id="inputEmail3" value="<?php echo $data['email']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Phone Number</label>
                                 <div class="col-md-8">
                                    <input class="form-control" id="inputEmail3" value="<?php echo $data['phone']; ?>" disabled>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-md-2 control-label">Father Phone Number</label>
                                 <div class="col-md-8">
                                    <input class="form-control" id="inputEmail3" value="<?php echo $data['fphone']; ?>" disabled>
                                 </div>
                              </div>
                      
                     </form>
                  </div>
               </div>
              </div>
               <?php } ?>
               <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="col-sm-offset-2 col-md-8">
                           <h3>Search</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="studentInfo.php">
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
         </div>
      </div>
      </div>
      </div>
   </body>
</html>
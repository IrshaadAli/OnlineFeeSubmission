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
                  <li><a href="transactionInfo.php">Transation Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="student_form.php">New Entry</a></li>
                  <li><a href="semFee.php">Semester Fee</a></li>
                  <li><a href="tfwsFee.php">TFWS Semester Fee</a></li>
                  <li class="active"><a href="leepFee.php">Leep Semester Fee</a></li>
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
                  <li><a href="transactionInfo.php">Transation Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li><a href="student_form.php">New Entry</a></li>
                  <li><a href="semFee.php">Semester Fee</a></li>
                  <li><a href="tfwsFee.php">TFWS Semester Fee</a></li>
                  <li class="active"><a href="leepFee.php">Leep Semester Fee</a></li>
                  <li><a href="mainForm.php">Main Form Fee</a></li>
                  <li><a href="backForm.php">Back Form Fee</a></li>
                  <li><a href="improvementForm.php">Improvement Form Fee</a></li>
               </ul>
            </div>
            <div class=" col-md-10 col-md-offset-2 main">
               <h1 class="page-header">Semester Fees Stucture</h1>
               <div>
				<div class="col-md-5 col-md-offset-5">
                <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-insert-lg">Insert</button>
             <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-lg" >Serach</button>
             </div>
             
               <div class="col-md-12 personal-info">
               <?php 
			   
			   error_reporting(0);
			    include_once('db_connect.php');
			  
				
				$semester = $_POST['sem']; 
				$batch = $_POST['batch'];
				  $qryy = "SELECT * FROM `leepfee` WHERE `sem` = '".$semester."' AND `batch` = '".$batch."'"; 
				$result = mysqli_query($conn,$qryy);
           
                $x=0;
			   	$y=0;
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
                <?php 
                
                if($data = mysqli_fetch_assoc($result))
                {
                ?>
                        <tr>
                           <td><?php echo "1"; ?></td>
                           <td><?php echo $data['sem']; ?> </td>
                           <td><?php echo $data['tuitionFee']; ?></td>
                           <td><?php echo $data['developmentFee']; ?></td>
                           <td><?php echo $data['developmentFeeR']; ?></td>
                           <td><?php echo $data['cautionMoney']; ?></td>
                           <td><?php echo $data['insuranceCharges']; ?></td>
                           <td><?php echo $data['total']; ?></td>
                           <td><?php echo $data['batch']; ?></td>
                          <td><button type="button" id="<?php echo $data['id']; ?> ?>" name="Btn<?php echo ++$x; ?>" class="btn btn<?php echo ++$y; ?>" data-toggle="modal" data-target=".bs-example-modal-lg">Edit</button></td>
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
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="col-sm-offset-2 col-sm-10"> 
                     <h3>Edit</h3>
                      
                  </div>
                  <form class="form-horizontal" id="leepedit" name="leepedit" method="post" action="leepedit.php">
                  <input type="hidden" name="id" id="hiddeninput" value="<?php echo $data['id']; ?>"/>
                  
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tuition Fees</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="tuitionFee" name="tuitionFee" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Development Fees</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="developmentFee" name="developmentFee" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Development Fees(RTU)</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="developmentFeeR" name="developmentFeeR">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Caution Money</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="cautionMoney" name="cautionMoney">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Insurance Charges</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="insuranceCharges" name="insuranceCharges">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Total</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="total" name="total">
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
         <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="col-sm-offset-2 col-sm-10"> 
                     <h3>Search</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="#">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Semester</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sem" name="sem">
                                 <option value=""> SELECT SEMESTER </option>
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                                 <option value="V">V</option>
                                 <option value="VI">VI</option>
                                 <option value="VII">VII</option>
                                 <option value="VIII">VIII</option>
                              </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Batch</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="batch" name="batch" >
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
         <div class="modal fade bs-modal-insert-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="col-sm-offset-2 col-sm-10"> 
                     <h3>Insert</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="leepfeeInsert.php">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Semester</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sem" name="sem">
                                 <option value=""> SELECT SEMESTER </option>
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                                 <option value="V">V</option>
                                 <option value="VI">VI</option>
                                 <option value="VII">VII</option>
                                 <option value="VIII">VIII</option>
                              </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Tuition Fee</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="tuitionFee" name="tuitionFee" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Development Fee</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="developmentFee" name="developmentFee" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Development Fee (RTU)</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="developmentFeeR" name="developmentFeeR" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Caution Money</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="cautionMoney" name="cautionMoney" >
                        </div>
                     </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Insurance Charges</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="insuranceCharges" name="insuranceCharges" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Total</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="total" name="total" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Batch</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="batch" name="batch" >
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
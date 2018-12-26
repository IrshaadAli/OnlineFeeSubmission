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
                  <li class="active"><a href="admininfo.php">Admin Information</a></li>
                  <li><a href="studentInfo.php">Student Information</a></li>
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
                  <li class="active" ><a href="admininfo.php">Admin Information</a></li>
                  <li><a href="studentInfo.php">Student Information</a></li>
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
               <h1 class="page-header">Admin</h1>
            </div>

            
            <div class="col-md-5 col-md-offset-5">
                <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-lg">Change Semester</button>
             <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-insert-lg" >Change Year</button>
             </div>
             <div class="modal fade bs-modal-lg" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="col-sm-offset-2 col-sm-10"> 
                     <h3>Change Semester</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="changeSem.php">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Semester</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sem" name="sem">
                                 <option value=""> SELECT SEMESTER </option>
                                 <option value="I">I</option>
                                 <option value="II">II</option>
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
                        <label for="inputEmail3" class="col-sm-3 control-label">New Semester</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="sem" name="newSem">
                                 <option value=""> SELECT SEMESTER </option>
                                 <option value="I">I</option>
                                 <option value="II">II</option>
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
                     <h3>Change Year</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="chnageYear.php">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Year</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="year">
                                 <option value=""> SELECT Year </option>
                                 <option value="I">I</option>
                                 <option value="II">II</option>
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                                 
                              </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Batch</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control" name="batch" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">New Year</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="newYear">
                                 <option value=""> SELECT Year </option>
                                 <option value="I">I</option>
                                 <option value="II">II</option>
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                              </select>
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
   </body>
</html>
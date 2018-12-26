<?php
	session_start();
	if(isset($_SESSION['enr'],$_SESSION['pwd']))
	{}
	else
	{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	

</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid" style="margin-top:5px">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="navbar-collapse collapse hidden-lg hidden-md hidden-sm">
          <ul class="nav nav-pills nav-justified">
                 <li><a href="home.php">Home</a></li>
                 <li class="active"><a href="profile.php">Profile</a></li>
                  <li ><a href="transactions.php">Transactions</a></li>
                  <li ><a class="dropdown-toggle" data-toggle="dropdown" href="payment.php"role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="paysemfee.php">Semester Fee</a></li>
                            <li><a href="paymainform.php">Main Exam Form Fee</a></li>
                            <li><a href="paybackform.php">Back Exam Form Fee</a></li>
                            <li><a href="payimpfee.php">Improvement Exam Form Fee</a></li>
                  </ul>
                  </li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
          </div>
          <div class=" hidden-xs">
          <ul class="nav nav-pills nav-justified">
                 <li><a href="home.php">Home</a></li>
                 <li class="active"><a href="profile.php">Profile</a></li>
                  <li ><a href="transactions.php">Transactions</a></li>
                  <li ><a class="dropdown-toggle" data-toggle="dropdown" href="payment.php"role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
                  <ul class="dropdown-menu">
      						<li><a href="paysemfee.php">Semester Fee</a></li>
                            <li><a href="paymainform.php">Main Exam Form Fee</a></li>
                            <li><a href="paybackform.php">Back Exam Form Fee</a></li>
                            <li><a href="payimpfee.php">Improvement Exam Form Fee</a></li>
          				</ul>
                  </li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
          </div>
          
      </div>
    </nav>
<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-offset-2 col-sm-8">
    <?php
		require_once('db_connect.php');
	$enr = $_SESSION['enr'];
	$result=mysqli_query($conn,"SELECT * FROM `records` WHERE `enr`='$enr' ");
				
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<div class="alert alert-info alert-dismissable" style="padding-top:10%;">
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
                                    <input class="form-control"  value="<?php echo $data['batch']; ?>" disabled>
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
                                    <input class="form-control"  value="<?php echo $data['seat']; ?>" disabled>
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
               
               <?php } ?>
		</div>
	</div>
</div>
</body>

</html>
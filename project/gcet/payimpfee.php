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
      <div class="container-fluid" style="margin-top:5px" >
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
                 <li><a href="profile.php">Profile</a></li>
                  <li><a href="transactions.php">Transactions</a></li>
                  <li  class="active" ><a class="dropdown-toggle" data-toggle="dropdown" href="payment.php"role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
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
                 <li><a href="profile.php">Profile</a></li>
                  <li  ><a href="transactions.php">Transactions</a></li>
                  <li  class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="payment.php"role="button" aria-haspopup="true" aria-expanded="false">Payment <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li ><a href="paysemfee.php">Semester Fee</a></li>
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
        <div class="row" style="margin-top:75px;">
        	<div class="col-sm-offset-5 col-sm-6" style="margin-bottom:10px;">
        <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target=".bs-modal-lg" >Improvement Fee</button>
        </div>
        </div>
    <?php
		require_once('db_connect.php');
		 error_reporting(0);
	$enr = $_SESSION['enr'];
	 $qun = $_POST['numofsub']; 
	$formfee=mysqli_query($conn,"SELECT * FROM `improvementform` WHERE `numofsub`='$qun'");
	$sel=mysqli_fetch_assoc($formfee);
	 if($sel) {
	$result=mysqli_query($conn,"SELECT * FROM `records` WHERE `enr`='$enr' ");
				
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<div class="alert alert-info alert-dismissable" style="padding-top:5%;">
                    	<h2>Challan</h2> <?php echo "Date: " . date("Y/m/d") ?>
                    	<table class="table">
                        <tr>
                        <td> Name : </td>
                        <td> <?php echo strtoupper($data['name']." ".$data['lname']); ?> </td>
                        </tr>
                         <tr>
                        <td> Father Name : </td>
                        <td> <?php echo strtoupper($data['fname']); ?> </td>
                        </tr>
                         <tr>
                        <td> Roll No : </td>
                        <td> <?php echo strtoupper($data['enr']); ?> </td>
                        </tr>
                         <tr>
                        <td> Branch : </td>
                        <td> <?php echo $data['branch']; ?> </td>
                        </tr>
                         <tr>
                        <td> Year : </td>
                        <td> <?php echo $data['year']; ?> </td>
                        </tr>
                         <tr>
                        <td> Semester : </td>
                        <td> <?php echo $data['sem']; ?> </td>
                        </tr>
                         <tr>
                        <td> Phone N0. : </td>
                        <td> <?php echo $data['phone']; ?> </td>
                        </tr>
                          
                        	
						
                        	<tr>
                        <td>Improvement Form Fee </td>
                        <td> <?php echo $sel['impFee']; ?> </td>
                        </tr>
                        
                        </table>
						 <div>
                          <form action="transactionsSuccess.php" method="post">
                            <input type="hidden" name="name" value="<?php echo ucfirst($data['name']." ".$data['lname']); ?>"> 
                            <input type="hidden" name="branch" value="<?php echo $data['branch']; ?>"> 
                            <input type="hidden" name="sem" value="<?php echo $data['sem']; ?>"> 
                            <input type="hidden" name="enr" value="<?php echo $data['enr']; ?>"> 
                            <input type="hidden" name="amount" value="<?php echo $sel['impFee']; ?>"> 
                            <input type="hidden" name="transactionType" value="Improvement Form Fee"> 
                            <button type="submit" name="payment" class="btn btn-primary btn-lg btn-block">Payment</button>
                          </form>
                        </div>
                   <?php } } ?>
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
                  <form class="form-horizontal" method="post" action="payimpfee.php">
                     <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Improvement Fee</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="numofsub" name="numofsub">
                                 <option value=""> Number of Improvement </option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 
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
</body>

</html>
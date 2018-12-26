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
      <div class="container-fluid" style="margin-top:5px;">
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
                  <li ><a href="transactions.php">Transactions</a></li>
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
<div class="container-fluid" style="margin-top:100px;">
	<div class="row">
    	<div class="col-sm-offset-2 col-sm-8">
    <?php
		require_once('db_connect.php');
	$enr = $_SESSION['enr'];
	$result=mysqli_query($conn,"SELECT * FROM `records` WHERE `enr`='$enr' ");
				
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<div class="alert alert-info alert-dismissable" style="padding-top:5%;">
                    	<h2>Challan</h2><?php echo "Date: " . date("Y/m/d") ?>
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
                         <?php $formfee=mysqli_query($conn,"SELECT * FROM `mainform`"); 
                          $amount=0;
                        	if($data1=mysqli_fetch_assoc($formfee))
						              { $amount=$data1['mainFormFee'];           ?>        
                        	<tr>
                        <td> Form Fee </td>
                        <td> <?php echo $data1['mainFormFee']; ?> </td>
                        </tr>
                        <?php } ?>
                        </table>
                           <div>
                        	<form action="transactionsSuccess.php" method="post">
                        		<input type="hidden" name="name" value="<?php echo ucfirst($data['name']." ".$data['lname']); ?>"> 
                        		<input type="hidden" name="branch" value="<?php echo $data['branch']; ?>"> 
                        		<input type="hidden" name="sem" value="<?php echo $data['sem']; ?>"> 
                        		<input type="hidden" name="enr" value="<?php echo $data['enr']; ?>"> 
                        		<input type="hidden" name="amount" value="<?php echo $amount; ?>"> 
                        		<input type="hidden" name="transactionType" value="Main Form Fee"> 
                        		<button type="submit" name="payment" class="btn btn-primary btn-lg btn-block">Payment</button>
                        	</form>
                        </div>

                        	<?php 
               } ?>
               
               </div>
             
		</div>
	</div>
</div>

</body>

</html>
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
                 <li><a href="profile.php">Profile</a></li>
                  <li class="active" ><a href="transactions.php">Transactions</a></li>
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
                 <li><a href="profile.php">Profile</a></li>
                  <li class="active" ><a href="transactions.php">Transactions</a></li>
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
<div class="container-fluid" style="margin-top:65px">
  <?php
    require_once('db_connect.php');
    $enr=$_SESSION['enr'];
    $result=mysqli_query($conn,"SELECT * FROM `transaction` WHERE `enr`='$enr' ");
    $n=0;
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
</body>

</html>
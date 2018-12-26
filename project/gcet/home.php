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

      <link href="css/dashboard.css" rel="stylesheet">
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
                 <li  class="active" ><a href="home.php">Home</a></li>
                 <li><a href="profile.php">Profile</a></li>
                  <li><a href="transactions.php">Transactions</a></li>
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
                 <li class="active"><a href="home.php">Home</a></li>
                 <li><a href="profile.php">Profile</a></li>
                  <li  ><a href="transactions.php">Transactions</a></li>
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
	
       
                  
            
         
	
    <div class="jumbotron notice">
            <h2 align="center"><strong>Notice</strong></h2>
            <div class=" col-sm-offset-3 col-sm-6">
           
            	<?php
				require_once('db_connect.php');
				$result=mysqli_query($conn,"SELECT * FROM `notification` WHERE `verify`='1' ");
				$n=0;
				while($data=mysqli_fetch_assoc($result))
				/*$arr1=explode(" ",$data['date']);
				$arr2=explode("-",$arr1[0]);
				if($arr2[1]==1)
					$month="Jan";
				if($arr2[1]==2)
					$month="Feb";
				if($arr2[1]==3)
					$month="Mar";
				if($arr2[1]==4)
					$month="April";
				if($arr2[1]==5)
					$month="May";
				if($arr2[1]==6)
					$month="June";
				if($arr2[1]==7)
					$month="July";
				if($arr2[1]==8)
					$month="Aug";
				if($arr2[1]==9)
					$month="Sep";
				if($arr2[1]==10)
					$month="Oct";
				if($arr2[1]==11)
					$month="Nov";
				if($arr2[1]==12)
					$month="Dec";
				*/
				{ ?>
                <div class="row">
					<div style="float:left"><?php //echo $month ?><br> <span> <?php //echo $arr2[2]; ?></span> </div>
                    <div style="float:left;margin-left:10px"> <?php echo ++$n." ".$data['notice']; ?></div>
                 </div>
				<?php }
				?>
              
            </div>
         </div>
    
</div>

</body>

</html>
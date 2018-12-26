<?php
	session_start();
	require_once('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Online Fee Submit</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">Online Fee Submit</a>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse" style="display:block">
               <form class="navbar-form navbar-right" action="#" id="myForm" method="post" name="Sign_innn">
                  <div class="form-group">
                     <input type="text" placeholder="Enroll" id="enr" class="form-control" name="enr">
                  </div>
                  <div class="form-group">
                     <input type="password" placeholder="Password" id="password" class="form-control" name="pwd">
                  </div>
                  <button type="submit" name="login" class="btn btn-success">Sign in</button>
               </form>
            </div>
         </div>
      </nav>
      <div class="navigation">
         <div id="img_container">
            <img src="images/1.png" width="1865" height="512" class="img-responsive"/>
         </div>
         <div>
            <h2 align="center"><strong>Updates</strong></h2>
            <div class=" col-sm-offset-3 col-sm-6">
           
            	<?php
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
      <?php
		if(isset($_POST['login']))
		{
			$enr=$_POST['enr'];
			$pwd=sha1($_POST['pwd']);
			echo $login_query= "SELECT `enr`,`pwd` FROM `records` WHERE `enr`='$enr' AND `pwd`='$pwd'";
			print_r($result=mysqli_query($conn,$login_query));
			if(mysqli_num_rows($result)==1)
			{echo "hello";
				$_SESSION['enr']=$enr;
				$_SESSION['pwd']=$pwd;
				header('location:home.php');
			}
		}
	  ?>
   </body>
</html>


<?php
	session_start();
	require_once('db_connect.php');
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Admin</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="container">

  <div id="login-form">

    <h3>Login</h3>

    <fieldset>

      <form action="#" id="myForm" method="post">

        <input type="text" required name="username" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' " placeholder="Username">
        <input type="password" required name="pwd" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " placeholder="Password"> 

        <input type="submit" value="Login" name="login">

       

      </form>

    </fieldset>

  </div> 

</div>
    
   <?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$pwd=sha1($_POST['pwd']);
			 $login_query= "SELECT `username`,`pwd` FROM `admin` WHERE `username`='$username' AND `pwd`='$pwd'"; 
			print_r($result=mysqli_query($conn,$login_query)); 
			if(mysqli_num_rows($result)==1)
			{echo "hello"; 
				$_SESSION['username']=$username;
				$_SESSION['pwd']=$pwd;
				header('location:admininfo.php');
			}
		}
	  ?>  
    
    
    
  </body>
</html>

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
      <script>
	  function myFunction()
	  {
			var a=$('#name').val();
			var b=$('#lname').val();
			var c=$('#fname').val();
			var d=$('#enr').val();
			var e=$('#batch').val();
			var f=$('#branch').val();
			var g=$('#year').val();
			var h=$('#sem').val();
			var i=$('#admissionT').val();
			var j=$('#seat').val();
			var k=$('#sex').val();
			var l=$('#age').val();
			var m=$('#email').val();
			var n=$('#phone').val();
			var o=$('#fphone').val();
			var p=$('#pwd').val();
			var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			var no=/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
			
			if(a=="")
			{
					$('#namevalidate').html("Student Name is Required");
					$('#name').css('border-color','#F00');
					
						if(b=="")
						{
						$('#lnamevalidate').html("Student Last Name is Required");
						$('#lname').css('border-color','#F00');
							if(c=="")
							{
							$('#fnamevalidate').html("Father's Name is Required");
							$('#fname').css('border-color','#F00');
							if(d=="")
							{
								$('#enrvalidate').html("Enrollment No is Required");
								$('#enr').css('border-color','#F00');
								if(e=="")
								{
									$('#batchvalidate').html("Batch is Required");
									$('#batch').css('border-color','#F00');
									if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
					return false;
			}
					
								if(b=="")
						{
						$('#lnamevalidate').html("Student Last Name is Required");
						$('#lname').css('border-color','#F00');
							if(c=="")
							{
							$('#fnamevalidate').html("Father's Name is Required");
							$('#fname').css('border-color','#F00');
							if(d=="")
							{
								$('#enrvalidate').html("Enrollment No is Required");
								$('#enr').css('border-color','#F00');
								if(e=="")
								{
									$('#batchvalidate').html("Batch is Required");
									$('#batch').css('border-color','#F00');
									if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						return false;
					}
					
					if(c=="")
							{
							$('#fnamevalidate').html("Father's Name is Required");
							$('#fname').css('border-color','#F00');
							if(d=="")
							{
								$('#enrvalidate').html("Enrollment No is Required");
								$('#enr').css('border-color','#F00');
								if(e=="")
								{
									$('#batchvalidate').html("Batch is Required");
									$('#batch').css('border-color','#F00');
									if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
							return false;
						}
					if(d=="")
							{
								$('#enrvalidate').html("Enrollment No is Required");
								$('#enr').css('border-color','#F00');
								if(e=="")
								{
									$('#batchvalidate').html("Batch is Required");
									$('#batch').css('border-color','#F00');
									if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
								return false;
							}
							if(e=="")
								{
									$('#batchvalidate').html("Batch is Required");
									$('#batch').css('border-color','#F00');
									if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
									return false;
								}
							if(f=="")
									{
										$('#branchvalidate').html("Please select branch");
										$('#branch').css('border-color','#F00');
										if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
										return false;
									}
									
									if(g=="")
										{
											$('#yearvalidate').html("Please Select Year");
											$('#year').css('border-color','#F00');
											if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
											return false;
										}
										if(h=="")
											{
												$('#semvalidate').html("Please select Semester");
												$('#sem').css('border-color','#F00');
												if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
												}
												return false;
											}
											
											if(i=="")
												{
													$('#admvalidate').html("Please Select Student Admission Type");
													$('#admissionT').css('border-color','#F00');
													if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
													}
													return false;
												}
												
												if(j=="")
													{
														$('#seatvalidate').html("Please Select Student Seat Type");
														$('#seat').css('border-color','#F00');
														if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
														}
														return false;
													}
					
					if(k=="")
														{
															$('#sexvalidate').html("Please select gender");
															$('#sex').css('border-color','#F00');
															if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
															}
															return false;
														}
														
							if(l=="")
															{
																$('#agevalidate').html("Age is required");
																$('#age').css('border-color','#F00');
																if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																}
																return false;
															}
															if(m=="")
																{
																	$('#emailvalidate').html("Please enter email address");
																	$('#email').css('border-color','#F00');
																	
																
																
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																	}
																	return false;
																}
														
																	if(n=="")
																	{
																		$('#phonevalidate').html("Phone Number is Required");
																		$('#phone').css('border-color','#F00');
																		if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		}
																		return false;
																	}
																	if(o=="")
																		{
																			$('#fphonevalidate').html("Father's Phone No is Required");
																			$('#fphone').css('border-color','#F00');
																			if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				
																			}
																		return false;
																		}
																		if(p=="")
																			{
																				$('#pwdvalidate').html("Password is Required");
																				$('#pwd').css('border-color','#F00');
																				return false;	
																			}
																		
					
					
			
			else if(!emailReg.test(m))
			{
					
					
					alert("Please enter valid email address");
					return false;
			}
			else if(!no.test(n))
			{
				
				alert("Please enter valid mobile no");
				return false;
			}
			else if(!no.test(o))
			{
				alert("Please enter valid mobile no");
				return false;
			}
			else
			{
				return true;
			}
			  	
	  }
	  
	  </script>
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
                  <li ><a href="admininfo.php">Admin Information</a></li>
                  <li ><a href="studentInfo.php">Student Information</a></li>
                  <li><a href="transactionInfo.php">Transation Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li class="active"><a href="student_form.php">New Entry</a></li>
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
                  <li><a href="admininfo.php">Admin Information</a></li>
                  <li ><a href="studentInfo.php">Student Information</a></li>
                  <li><a href="transactionInfo.php">Transation Information</a></li>
                  <li><a href="notification.php">Notification</a></li>
                  <li class="active"><a href="student_form.php">New Entry</a></li>
                  <li><a href="semFee.php">Semester Fee</a></li>
                  <li><a href="tfwsFee.php">TFWS Semester Fee</a></li>
                  <li><a href="leepFee.php">Leep Semester Fee</a></li>
                  <li><a href="mainForm.php">Main Form Fee</a></li>
                  <li><a href="backForm.php">Back Form Fee</a></li>
                  <li><a href="improvementForm.php">Improvement Form Fee</a></li>
               </ul>
            </div>
            <div class="col-md-9 col-md-offset-3 col-md-10 col-md-offset-2 main">
               <h1 class="page-header">Form</h1>
               <div class="col-md-12 personal-info">
                  <div class="alert alert-info alert-dismissable">
                     <h3>Personal info</h3>
                     <form class="form-horizontal" action="create_id.php" method="post"  id="sign_up">
                        <div class="form-group">
                           <label class="col-md-2 control-label">First name:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control" id="name" name="name" >
                              <br>
                              <span id="namevalidate" style="color:#F00"> </span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Last name:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control" id="lname" name="lname">
                           <span id="lnamevalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Father Name:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control" id="fname" name="fname">
                           <span id="fnamevalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Enrollement Number:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control"  id="enr" name="enr">
                           <span id="enrvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Batch :</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control"  id="batch" name="batch">
                           <span id="batchvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Branch:</label>
                           <div class="col-md-8">
                              <select class="form-control" id="branch" name="branch">
                              <option value=""> SELECT BRANCH </option>
                                 <option value="CE">CE</option>
                                 <option value="CSE">CSE</option>
                                 <option value="CRE">CRE</option>
                                 <option value="ECE">ECE</option>
                                 <option value="EE">EE</option>
                                 <option value="ME">ME</option>
                              </select>
                              <span id="branchvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Year:</label>
                           <div class="col-md-8">
                              <select class="form-control" id="year" name="year">
                                <option value="">SELECT YEAR </option>
                                 <option value="I">I</option>
                                 <option value="II">II</option>
                                 <option value="III">III</option>
                                 <option value="IV">IV</option>
                              </select>
                           <span id="yearvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Semester:</label>
                           <div class="col-md-8">
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
                           <span id="semvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Admission Type:</label>
                           <div class="col-md-8">
                              <select class="form-control" id="admissionT" name="admissionT">
                                 <option value=""> SELECT ADMISSION TYPE </option>
                                 <option value="direct">Direct</option>
                                 <option value="leep">Leep</option>
                                 <option value="counselling">Counselling</option>
                              </select>
                              <span id="admvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Seat Type:</label>
                           <div class="col-md-8">
                              <select class="form-control" id="seat" name="seat">
                             	<option value=""> SELECT SEAT TYPE </option>
                                 <option value="SFS">SFS</option>
                                 <option value="TFWS">TFWS</option>
                              </select>
                              <span id="seatvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Sex:</label>
                           <div class="col-md-8">
                              <select class="form-control" id="sex" name="sex">
                                 <option value=""> SELECT GENDER </option>
                                 <option value="Female">Female</option>
                                 <option value="Male">Male</option>
                              </select>
                              <span id="sexvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Age:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control"  id="age" name="age">
                           <span id="agevalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label" >Email:</label>
                           <div class="col-md-8">
                              <input type="email" class="form-control" autocomplete="off"  id="email" name="email">
                           <span id="emailvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Phone Number:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control"  id="phone" name="phone">
                           <span id="phonevalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label">Father Phone Number:</label>
                           <div class="col-md-8">
                              <input type="text" class="form-control" id="fphone" name="fphone" autocomplete="off"  required>
                           <span id="fphonevalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                       
                        <div class="form-group">
                           <label class="col-md-2 control-label">Password:</label>
                           <div class="col-md-8">
                              <input type="password" class="form-control" autocomplete="off" id="pwd" name="pwd">
                           <span id="pwdvalidate" style="color:#F00"> </span>
                         
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                           <div class="col-md-8">
                              <input type="submit" class="btn btn-default" value="Submit"  onClick="myFunction()">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>


<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
	*{
		margin:0;
		padding:0;
		font-family:Serif;
	}
	.main_div{
		position:relative;
		height:100vh;
		width:100vw;
		//border:1px solid black;
		display:grid;
		justify-content:center;
		items-place:center;
		align-items:center;
	}
	.con_div{
		position:relative;
		padding:0px;
		height:700px;
		width:1050px;
		display:flex;
		justify-content:space-between;
		justify-content:center;
		items-place:center;
		align-items:center;	
	}
	
	.inner_div{
		position:absolute;
		height:450px;
		width:700px;
		background-color:grey;	
		box-shadow:5px 10px 25px #888888;
		
	}
	
	.img_div{
		width:40%;
		height:100%;
		float:left;
		background-color:white;
		#border:1px solid black;
	}
	
	.img_div img {
		height:40%;
		margin-top:45%;
	}
	
	.container_all{
		position:absolute;
		right:0px;
		width:59.5%;
		height:100%;
		background-color:white;
		##border:1px solid black;
		justify-content:space-between;
		justify-content:center;
		items-place:center;
		align-items:center;	
		
	}
	
	.user_name{
		height:30px;
		width:100%;
		margin-top:30px;
		##border:1px solid black;
	}
	
	.user_name input{
		width:80%;
		height:100%;
		margin-left:40px;	
		font-size:16px;
		padding:10px;
	}
	
	.mo_no{
		height:30px;
		width:100%;
		margin-top:15px;
		
		
	}
	
	
	.mo_no input{
		width:80%;
		height:100%;
		margin-left:40px;	
		font-size:16px;
		padding:10px;
	}
	
	.user_psd{
		height:30px;
		width:100%;
		margin-top:20px;
		##border:1px solid black;
	}
	
	.user_psd input{ 
		width:80%;
		height:100%;
		margin-left:40px;	
		font-size:16px;
		padding:10px;
	}
	
	.sigh_up_btn_div{
		height:40px;
		width:332px;
		
		margin-top:30px;
		margin-left:40px;
		
	}
	
	.sigh_up_btn_div button{
		height:100%;
		width:100%;
		background-color:F56400;
		color:white;
	}
	
	.login{
		position:relative;
		background-color:white;
		height:40px;
		width:332px;
		color:white;
		margin-left:40px;
		top:20px;
		font-size:15px;
	}
	
	
	</style>
</head>
<body>
<div class="main_div">
<?php

//Using database connection file here
	include "dbConn.php";

//if upload button clicked
if(isset($_POST['submit']))
{

		//get all the submitted data from the form
		$user_name1 = $_POST['username_div'];
		$user_mobile = $_POST['usermobile_div'];
		$user_password1 = $_POST['userpassword_div'];
		
		
		//perform insert query execution
		//here our table name fexmone_registration
		$sql = mysqli_query($db, "INSERT INTO `fexmone_registration1` (`user_name_d` , `mobile_no_d` , `password_d`) VALUES ('$user_name1',$user_mobile,'$user_password1')");


		if(!$sql)
		{
			echo mysqli_error();
		} 
		else{
			echo "Record Added Successfully.";
			header ('location:login.php');	
		}
		
}
		//close connection
		mysqli_close($db);
?>

	<form method="post">
	
		<div class="con_div">
			
			
				<div class="inner_div">
			
						<div class="img_div">
							<h2 style="font-family:Serif; color:#1E90FF; margin:0px; padding:0px; margin-left:20px; margin-top:20px;">Looks like you're new here! </h2>
							<h5 style="font-family:Serif; color:#1E90FF; margin:0px; padding:0px; margin-left:20px; margin-top:20px;">Sign up with your user name or mobile number to get started</h5>
							<img src="img1.png" ></img>
						</div>
					
					<div class="container_all">
							
							<div class="user_name">
								<input type="text" required style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove;" placeholder="User Name" name="username_div">
							</div>
							
							<div class="mo_no">
								<input type="text" required style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove;" placeholder="Enter Mobile Number" name="usermobile_div">
							</div>
					
							<div class="user_psd">
								<input type="password" required style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove;" placeholder="Enter Password" name="userpassword_div">
							</div>
							
							<p style="margin-top:20px; margin-left:40px;">By continuing, you agree to Fexmone's <a href="terms.php">Terms of use<br></a> and <a href="privacy">Privacy Policy</a></p>
							
							
							<div class="sigh_up_btn_div">
								<button type="submit" id="submit" name="submit">Continue</button>
									
							</div>
							
								<button class="login" >
									<a href="login.php" >Existing User? Login</a>
								</button>	
							
					</div>
			
			
			
			</div>
	</div>
	</form>
</div>
</body>
</html>



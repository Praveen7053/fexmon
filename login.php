<html>
<head>
<?php
	session_start();
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	*{
		margin:0px;
		padding:0px;
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
	.outer_div{
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
		margin-top:70%;
	}
	
	.contener_div{
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
	.mo_no{
		height:30px;
		width:100%;
		margin-top:50px;
		
	}
	
	.mo_no input{
		width:80%;
		height:100%;
		margin-left:40px;	
		font-size:16px;
		padding:10px;
	}
	
	.psw_id{
		height:30px;
		width:100%;
		margin-top:20px;
	}
	
	.psw_id input{
		width:80%;
		height:100%;
		margin-left:40px;	
		font-size:16px;
		padding:10px;
	}
	
	
	.button_div{
		height:40px;
		width:332px;
		
		margin-top:30px;
		margin-left:40px;
	}
	.button_div button{
		height:100%;
		width:100%;
		
		background-color:F56400;
		color:white;
	}
	.crt_act_div{
		position:relative;
		background-color:white;
		height:40px;
		width:332px;
		color:white;
		margin-left:45px;
		
		top:20px;
		font-size:15px;
	}
	</style>
</head>
<body>
<div class="main_div">
<form method="post" action="login.php" enctype="multipart/form-data">
	<div class="outer_div">
		<div class="inner_div">
		
				<div class="img_div">
					<h1 style="font-family:Serif; color:#1E90FF; margin:0px; padding:0px; margin-left:20px; margin-top:20px;">Fexmone</h1>
					<img src="img1.png" ></img>
				</div>
				
				<div class="contener_div">
				
					
					<div class="mo_no">
						<input type="text" required style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove;" placeholder="Enter Your Mobile Number" name="mo_no">
					</div>
					
					<div class="psw_id">
						<input type="password" required style="border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: groove;" placeholder="Password" name="user_psd">
					</div>
					
					<p style="margin-top:20px; margin-left:40px;">By continuing, you agree to Fexmone's <a href="terms.php">Terms of use<br></a> and <a href="privacy">Privacy Policy</a></p>
					
					<div class="button_div">
						<button type="submit" name="login">Log In</button>
					</div>
				
					<button class="crt_act_div">
						<a href="register.php">Create an Account</a>
					</button>
				</div>
				
				
			
			
			
		</div>
	</div>
</form>
</div>
</body>
</html>
<?php
	include "dbConn.php";

	if(isset($_POST['login']))
	{
		

		$mob_n = $_POST['mo_no'];
		$password = $_POST['user_psd'];
		
	
		
		$result = mysqli_query($db, "SELECT * FROM fexmone_registration1 WHERE mobile_no_d = '".$mob_n."' AND password_d = '".$password."'");              
		
		if(mysqli_num_rows($result) > 0)
		{
			while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
			$_SESSION["mo_no"]=$rows["mobile_no_d"];
			$_SESSION["user_psd"]=$rows["password_d"];

			}
			header("location:main.php");
		}
		else{
			echo '<script>alert("Enter Valid User Name and Password")</script>';
		}
	}
?>
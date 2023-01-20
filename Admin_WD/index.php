<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper" style="height: 660px; width: 1250px;">
		<header style="height: 130px; width: 1250px; background-color: black; padding: 10px;">
		<div class="logo">
			<img src="images/77.png" style="width: 145px; height:110">
			<h1 style="color: white; font-family: Lucida Handwriting">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php" style="font-family: Lucida Handwriting">HOME</a></li>
						<li><a href="books.php" style="font-family: Lucida Handwriting">BOOKS</a></li>
						<li><a href="logout.php" style="font-family: Lucida Handwriting">LOGOUT</a></li>
						<li><a href="feedback.php" style="font-family: Lucida Handwriting">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php" style="font-family: Lucida Handwriting">HOME</a></li>
								<li><a href="books.php" style="font-family: Lucida Handwriting">BOOKS</a></li>
								<li><a href="admin_login.php" style="font-family: Lucida Handwriting">LOGIN</a></li>
								<li><a href="registration.php" style="font-family: Lucida Handwriting">SIGN-UP</a></li>
								<li><a href="feedback.php" style="font-family: Lucida Handwriting">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section style="height: 550px; width: 1270px; background-color: grey;">
		<div class="sec_img">
			<br><br><br>
			<div class="box" style="opacity:.7777777; background-color: black">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px; font-family: Cursive">Welcome to Library</h1><br><br>
				<h1 style="text-align: center;font-size: 25px; font-family: Cursive">Opens at: 09:00AM </h1><br>
				<h1 style="text-align: center;font-size: 25px; font-family: Cursive">Closes at: 03:00PM </h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  
		include "footer.php";
	?>
</body>
</html>
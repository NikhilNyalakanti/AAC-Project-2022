<?php 
	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
 	</style>
 </head>
 <body>
 	<div class="container" style="background-color:ivory; height: 600px; margin-top:-20px; width:1290px; margin-left:-10px;">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>
 		</form>
 		<div class="wrapper" style="color: black;height:580px">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="edit.php"
 				</script>
 				<?php
 			}


 				$q=mysqli_query($db,"SELECT * FROM admin where username='$_SESSION[login_user]' ;");
 			?>
 			<h2 style="text-align: center; font-family: cursive;color:springgreen"><b>My Profile</b></h2>

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/p.jpg'>
 				</div>";
 			?>
 			<br><div style="text-align: center; font-family: cursive; font-size:25px; color:springgreen;">Welcome
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
			 
 			<?php
				echo "<style> table, th, td { border-width: 2px solid; } </style>";
 				echo "<b>";
 				echo "<table class='table table-bordered' style='border:2px solid; border-color:black'>";
	 				echo "<tr>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['first'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr style='border-width:2px;border-color:black'>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['last'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr style='border-width:2px;border-color:black'>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr style='border-width:2px;border-color:black'>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr style='border-width:2px;border-color:black'>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr style='border-width:2px;border-color:black'>";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo "<b> Contact: </b>";
	 					echo "</td >";
	 					echo "<td style='border-width:2px;border-color:black'>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 </html>
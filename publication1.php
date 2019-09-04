<html>
	<head>
		<title>pid</title>
	</head>
	<style>
	.btn
	{
		background-color:blue;
 			 color: black;
 			 padding: 14px 14px;
 		 text-align: center;
 			 text-decoration: none;
 		 display: inline-block;
	}
	
</style>
	<body>
	<center>
		<form action="" method="POST" enctype="" >
			<input type="text" name="pid"><br>
			<input type="submit" name="submit" value="submit" class="btn">
		</form>
	</center>
		<?php
		   
			if(isset($_POST['submit']))
			{
				$pid=$_POST['pid'];
				session_start();
				$_SESSION['newid']=$pid;
				echo "<script>";
				echo "document.location.replace('./new.php')";
				echo "</script>";
			}
		?>
	</body>
</html>
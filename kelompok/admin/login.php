<!DOCTYPE html>
<html>
<head>
	<title>Wayang Purwo</title>
	<link rel="stylesheet" type="text/css" href="../style.css">

	    <!-- logo wayang  -->
		<link href="../purwo.png" rel="shorcut icon">

</head>
<body>
 
	<?php 
	if(isset($_POST['pesan'])){
		if($_POST['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Login</p>
 
		<form action="proses_login.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="Login">
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">Kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
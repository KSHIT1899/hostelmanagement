<?php include('server.php') ?>
<!DOCTYPE html>
<html>  
<head>
  <title>wardem login Form</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>

</head>
<body>
<div class="bar">
        <img src="https://www.akgec.ac.in/wp-content/themes/twentysixteen/img/AKGEC_1_0.png" alt="logo">
        <h1>AKGEC,Hostel Management System</h1>
       
    </div>
  <div class="header">
  	<h2>Warden Login</h2>
  </div>
	 
  <form method="post" action="wardenlogin.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  		<input type="text" name="username" placeholder="Username" >
  	</div>

  	<div class="input-group">
  		<input type="password" name="password" placeholder="Password">
	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="warden_user">Login</button>
  	</div>
  </form>
</body>
</html>
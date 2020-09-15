<?php include('server.php') ?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['ROLLNO'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['ROLLNO']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vacant</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

<div class="header">
	<h2>leave room</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['ROLLNO'])) : ?>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

      <form method="post" action="vacant.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
          <input type="text" name="NAMESTUDENT"  placeholder="Students Name">
        </div>

        <div class="input-group">
          <input type="text" name="ROLLNUMBER" placeholder="Students Rollno">
        </div>

        <div class="input-group">
          <input type="text" name="ROOMNUMBER" placeholder="students Room number">
        </div>

        <div>
          <textarea name="REASON"  placeholder="Reason you are leaving" rows="20" cols="100"></textarea>
        </div>
        <br><br>

        <label>Date of leaving room:</label>
        <input type="date"  name="DTE">
        
        <input type="submit" name="vacant_room">

        <!-- <div class="input-group">
          <button type="submit" class="btn" name="complaint_file">Submit</button>
        </div> -->

      </form> 
    </div>  
  </body>
</html>





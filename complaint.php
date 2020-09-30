<?php include('server.php') ?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['ROLLNO'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
 $db = mysqli_connect('localhost', 'root',''  ,'studentregister');
 $rn=$_SESSION['ROLLNO'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaint</title>
  <link rel="stylesheet" type="text/css" href="complaint.css">
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
</head>
<body>
    <span class="letters">| File  a  Complaint |</span>
     <?php
       $query="SELECT * FROM users WHERE ROLLNO='$rn'";
       $query_run=mysqli_query($db,$query);
       $row = mysqli_fetch_assoc($query_run);
       ?>
      <form method="post" action="complaint.php">
        <?php include('errors.php'); ?>
       
        <div class="input-group">
          <input type="text"  value="<?php echo $row['NAME'];?>" disabled>
          <input type="text" style="display:none;" name="STUDENT_NAME"  placeholder="Students Name" value="<?php echo $row['NAME'];?>" >
        </div>

        <div class="input-group">
          <input type="text" value="<?php echo $row['ROLLNO'];?>" disabled>
          <input type="text" style="display:none;" name="ROLLNUM" value="<?php echo $row['ROLLNO'];?>"> 
        </div>

        <div class ="input-group">
          <input type="text" value="<?php echo $row['ROOMNO'];?>" disabled>
          <input type="text" name="ROOMNM" style="display:none;" value="<?php echo $row['ROOMNO'];?>">
        </div>

        <div class="input-group">
          <input type="text"  value="<?php echo $row['CONTACT'];?>" disabled>
          <input type="text" style="display:none;" name="PHONE"  placeholder="Students Name" value="<?php echo $row['CONTACT'];?>" >
        </div> 

        <div class="input-group">
          <input type="date" placeholder="date" name="DATE">
        </div>

        <div class="inp">
          <textarea name="COMPLAINT"  placeholder="write your issues" rows="8" cols="60"></textarea>
        </div>
 
        <div class="input-group">
          <button type="submit" class="btn" name="complaint_file">Send to Warden</button>
        </div>

      </form> 
  </body>
</html>
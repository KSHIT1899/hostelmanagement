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
	<title>Vacant</title>
	 <link rel="stylesheet" type="text/css" href="vacant.css"> 
</head>
<body>

<div class="letters">
	<h2>| Vacant your room |</h2>
</div>

       <?php
       $query="SELECT * FROM users WHERE ROLLNO='$rn'";
       $query_run=mysqli_query($db,$query);
       $row = mysqli_fetch_assoc($query_run);
       ?>

    

      <form method="post" action="vacant.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
          <input type="text"  value="<?php echo $row['NAME'];?>" disabled>
          <input type="text" style="display:none;" name="NAMESTUDENT"  placeholder="Students Name" value="<?php echo $row['NAME'];?>" >
        </div>

        <div class="input-group">
          <input type="text" value="<?php echo $row['ROLLNO'];?>" disabled>
          <input type="text" style="display:none;" name="ROLLNUMBER" value="<?php echo $row['ROLLNO'];?>"> 
        </div>

        <div class="input-group">
          <input type="text" value="<?php echo $row['ROOMNO'];?>" disabled>
          <input type="text" name="ROOMNUMBER" style="display:none;" value="<?php echo $row['ROOMNO'];?>">
        </div>
         <div class="input-group">
        <input type="date"  name="DTE">
</div>
        

        <div class="inp">
          <textarea name="REASON"  placeholder="Reason you are leaving" rows="8" cols="60"></textarea>
        </div>
        

       


         <div class="input-group">
          <button type="submit" class="btn" name="vacant_room">Submit</button>
        </div> 

      </form> 
    </div>  
  </body>
</html>
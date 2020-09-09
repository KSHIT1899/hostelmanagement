<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'><link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
</head>
<body>
    <div class="bar">
        <img src="https://www.akgec.ac.in/wp-content/themes/twentysixteen/img/AKGEC_1_0.png" alt="logo">
        <h1>AKGEC,Hostel Management System</h1>
        <p>Warden's Login</p>
    </div>

    <h5>Register Here </h5>

     <section class="register"> 
    <form method="post" action="register.php">
      
        <div class="input-group">
           <div class="f col-lg-9"> 
            <input type="text" class="form-control" placeholder="Students Name" name="NAME" value="<?php echo $NAME; ?>"> 
          </div>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Students's Roll Number" name="ROLLNO" value=">" >
          </div>
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Students's Email"  name="EMAIL" value="" >
          </div>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Students's Username"  name="USERNAME" value="< " >
          </div>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Password" name="password_1" >
          </div>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_2" >
          </div>
        <button type="submit" name="student_user" class="btn">Register</button>
</div>
<p>
        Already a member? <a href="login.php">Sign in</a>
      </p>
  </form>
</body>
</html>  -->





<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
</head>
<body>
<div class="bar">
        <img src="https://www.akgec.ac.in/wp-content/themes/twentysixteen/img/AKGEC_1_0.png" alt="logo">
        <h1>AKGEC,Hostel Management System</h1>
        <p>Warden's Login</p>
    </div>
  <div class="header">
  	<h2>REGISTER HERE</h2>
  </div>
  <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        
        <input type="text" name="NAME"  placeholder="Students Name" value="<?php echo $NAME; ?>">
      </div>
      <div class="input-group">
      
        <input type="text" name="ROLLNO" placeholder="Students Rollno" value="<?php echo $ROLLNO; ?>">
      </div>
  	  <div class="input-group">
       
        <input type="email" name="EMAIL" placeholder="Students Email" value="<?php echo $EMAIL; ?>">
      </div>
      <div class="input-group">
        
        <input type="text" name="USERNAME" placeholder="Username" value="<?php echo $USERNAME; ?>">
      </div>
      
      <div class="input-group">
        
        <input type="password" name="password_1" placeholder="Password">
      </div>
      <div class="input-group">
       
        <input type="password" name="password_2" placeholder="Confirm Password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="student_user">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p>
  </form>
</body>
</html>
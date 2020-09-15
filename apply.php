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
	<title>Room</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

<div class="header">
	<h2>Select/Change Room</h2>
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['ROLLNO'])) : ?>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    <?php
      $host = 'localhost';
      $dbname = 'studentregister';
      $uname = 'root';
      $pssd = '';
      $un = $_SESSION['ROLLNO'];
      $x = NULL;
      try {
          $pdo = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pssd);

          $sql = "SELECT * FROM rooms WHERE ROLLNO IS NULL";

          $q = $pdo->query($sql);
          $q->setFetchMode(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
          die("Could not connect to the database $dbname :" . $e->getMessage());
      }
      ?>
      <p>Available rooms:-</p>
      <?php while ($row = $q->fetch()): ?>
          <tr>
              <td><?php echo htmlspecialchars($row['ROOMNO']) ?></td>
          </tr>
          <br/>
      <?php endwhile; ?>
      <form method="post" action="apply.php">
        <?php include('errors.php'); ?>
        
        <div class="input-group">
          <input type="hidden" name="ROLLNO" value="<?php echo $un ?>">
        </div>
        <p>Select one option from below:-</p>
        <div class="input-group">
          <input type="radio" id="select" name="REQ" value="S">
          <label for="mselect">New Resident</label><br>
          <input type="radio" id="change" name="REQ" value="C">
          <label for="change">Change my current room</label><br>
        </div>
        <p>Current Room(Only for changing room)</p>
        <div class="input-group">
          <input type="text" name="CURRENT">
        </div>
        <p>Enter a room from the above list to choose.</p>
        <div class="input-group">
          <input type="text" name="ROOMNO" >
        </div>

        <div class="input-group">
          <button type="submit" class="btn" name="room_application">Submit</button>
        </div>

      </form> 
    </div>  
  </body>
</html>





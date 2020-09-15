
<?php 
  session_start(); 

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
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
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
    	<p>Welcome <strong><?php echo $_SESSION['ROLLNO']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    <?php
      $host = 'localhost';
      $dbname = 'studentregister';
      $uname = 'root';
      $pssd = '';
      $un = $_SESSION['ROLLNO'];
      try {
          $pdo = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pssd);

          $sql = "SELECT * FROM users WHERE ROLLNO = '$un'";

          $q = $pdo->query($sql);
          $q->setFetchMode(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
          die("Could not connect to the database $dbname :" . $e->getMessage());
      }
      ?>
      
      <?php while ($row = $q->fetch()): ?>
          <tr>
              <td><?php echo htmlspecialchars($row['NAME']) ?></td>
              <td><?php echo htmlspecialchars($row['ROLLNO']); ?></td>
              <td><?php echo htmlspecialchars($row['EMAIL']); ?></td>
              <td><?php echo htmlspecialchars($row['CONTACT']); ?></td>
              <td><?php echo htmlspecialchars($row['ADDRESS']); ?></td>
              <td><?php echo htmlspecialchars($row['PARENTCONTACT']); ?></td>
              <td><?php echo htmlspecialchars($row['BRANCH']); ?></td>
              <td><?php echo htmlspecialchars($row['ROOMNO']); ?></td>
          </tr>
      <?php endwhile; ?>     
    </div>
    <div class="input-group">
        <?php

        if (isset($_POST['Change/Select Room']))

        {

          myfnc();

        }

        function myfnc()

        {

            echo "Hello world" ;

        }

        ?>
        <form action="apply.php" method="post">
        <input type="submit" name="room_button" value="Change/Select Room">
        </form>
    </div>
    <div class="input-group">
    <?php

if (isset($_POST['File a Complaint']))

{

  myfncs();

}

function myfncs()

{

    echo "Hello world" ;

}

?>

<form action="complaint.php" method="post">
<input type="submit" name="complaint_button" value="File a Complaint">
</form>
    </div>
    <div class="input-group">
    <?php

if (isset($_POST['Vacant room']))

{

  myfncm();

}

function myfncm()

{

    echo "Hello world" ;

}

?>
<form action="vacant.php" method="post">
<input type="submit" name="vacant_button" value="Vacant your room">
</form>
    </div>
  </body>
</html>
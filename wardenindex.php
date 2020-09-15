
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: wardenlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: wardenlogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="wardenindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    
<table>
  <tr>
    <th>Name</th>
    <th>Rollno</th>
    <th>Email</th>
    <th>phone</th>
    <th>Address</th>
    <th>Branch</th>
  </tr>
  <?php
    
    $conn=mysqli_connect("localhost", "root", "", "studentregister");
    if($conn-> connect_error){
      die("connection failed:" .$conn-> connect_error);
    }
    $sql="SELECT NAME,ROLLNO,EMAIL,CONTACT,ADDRESS,BRANCH from users";
    $result=$conn-> query($sql);
    if($result->num_rows>0){
      while($rows=$result-> fetch_assoc()){
        echo "<tr><td>".$row["NAME"]. "</td><td>" .$row["ROLLNO"]. "</td><td>".$row["EMAIL"]. "</td><td>".$row["CONTACT"]. "</td><td>".$row["ADDRESS"]. "</td><td>".$row["BRANCH"]. "</td></tr>";
      }
      echo"</table>";
    }
    else{
      echo "0 result";
    }
    $conn-> close();
    ?>
    </table>
    </body>
    </html>
      
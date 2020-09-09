<?php
 session_start();
$NAME = "";
$ROLLNO="";
$EMAIL    = "";
$USERNAME = "";
$errors = array();
$db = mysqli_connect('localhost', 'root',''  ,'studentregister');
if (isset($_POST['student_user'])) {
  $NAME = mysqli_real_escape_string($db, $_POST['NAME']);
  $ROLLNO =mysqli_real_escape_string($db, $_POST['ROLLNO']);
  $EMAIL = mysqli_real_escape_string($db, $_POST['EMAIL']);
  $USERNAME = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if (empty($NAME) ||  empty($ROLLNO) || empty($EMAIL) || empty($USERNAME) || empty($password_1)) { 
    array_push($errors, "Please fill all the fields"); 
  }
  
// $password-1 = 'user-input-pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password_1);
$lowercase = preg_match('@[a-z]@', $password_1);
$number    = preg_match('@[0-9]@', $password_1);
$specialChars = preg_match('@[^\w]@', $password_1);

// if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password_1) < 8) {
//     //echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
//     array_push($errors, "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character."); 
//  }
//  else{
//     echo 'Strong password.';
// }
  // if (empty($EMAIL)) { array_push($errors, "Email is required"); }
  // if (empty($USERNAME)) { array_push($errors, "Username is required"); }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if ( !preg_match ("/^[a-zA-Z\s]+$/",$NAME)) {
    //$errors[] = "Name must only contain letters!";
    array_push($errors, "Name must only contain letters and spaces!");
 } 
 if (!is_numeric($ROLLNO)) {
  array_push($errors, "Rollno. must include only numeric values");
 }

  $user_check_query = "SELECT * FROM users WHERE USERNAME='$USERNAME' OR EMAIL='$EMAIL' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { 
    if ($user['USERNAME'] === $USERNAME) {
      array_push($errors, "Username already exists");
    }

    if ($user['EMAIL'] === $EMAIL) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = hash('sha256',$password_1);

  	$query = "INSERT INTO users (NAME, ROLLNO, USERNAME, EMAIL, password_1) 
  			  VALUES('$NAME','$ROLLNO','$USERNAME', '$EMAIL', '$password')";
  	mysqli_query($db, $query);
  	// $_SESSION['USERNAME'] = $USERNAME;
  	// $_SESSION['success'] = "You are now registered";
  	header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $USERNAME = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($USERNAME)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = hash('sha256',$password_1);
  	$query = "SELECT * FROM users WHERE USERNAME ='$USERNAME' AND password_1='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) >= 1) {
  	  $_SESSION['USERNAME'] = $USERNAME;
      $_SESSION['success'] = "You are now logged in";
       //header('location: https://shivangi-ch.github.io/');
  	 // header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
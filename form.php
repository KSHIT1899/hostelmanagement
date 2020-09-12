<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<style>
    .box{
    height: auto;
    width:80%;
    margin:80px;
    margin-top:0px;
    border:none;
    
}

    </style>
<body>
<?php
  if(isset($_POST['submit']))
  {
    $db = mysqli_connect("localhost", "root", "" , "hostel");
    $student= mysqli_real_escape_string($db, $_POST['student']);
    $student_email= mysqli_real_escape_string($db, $_POST['student_email']);
    $addr= mysqli_real_escape_string($db, $_POST['addr']);
    $city= mysqli_real_escape_string($db, $_POST['city']);
    $student_contact= mysqli_real_escape_string($db, $_POST['student_contact']);
    $dob= mysqli_real_escape_string($db, $_POST['dob']);
    $branch= mysqli_real_escape_string($db, $_POST['branch']);
    $studentNo= mysqli_real_escape_string($db, $_POST['studentNo']);
    $father= mysqli_real_escape_string($db, $_POST['father']);
    $father_contact= mysqli_real_escape_string($db, $_POST['father_contact']);
    $father_email= mysqli_real_escape_string($db, $_POST['father_email']);
    $mother= mysqli_real_escape_string($db, $_POST['mother']);
    $mother_contact= mysqli_real_escape_string($db, $_POST['mother_contact']);
    $yr= mysqli_real_escape_string($db, $_POST['yr']);
    $room_type= mysqli_real_escape_string($db, $_POST['room_type']);


    $sql = "INSERT INTO form1 (student, student_email, addr, city, student_contact, dob, branch, studentNo, father, father_contact, father_email, mother, mother_contact, yr, room_type) values( '$student', '$student_email', '$addr, '$city', '$student_contact', '$dob', '$branch', '$studentNo', '$father', '$father_contact', '$father_email', '$mother', '$mother_contact', '$yr', '$room_type') ";

    if(mysqli_query($db,$sql))
          {
            // header("location:login.php");
            echo "success";
          }
          else
          {
            // header("location:osspro2.php");
            echo "failed";
          }
          
  }
?>
    <solid><h3  style="color:white; font-size:25px; margin-bottom:0; width:100%" class="btn btn-primary ">STUDENT REGISTRATION</h3></solid>
    
    <div class="box">
    <form action="" method="POST">
        <div class="col">
              <label for="student">Student:</label>
              <input id="name" name="student" type="text" class="form-control" placeholder="Jack" >
            </div>
         <div class="form-group" style="margin-left:12px; margin-right:12px;">
            <label for="exampleInputEmail1">Student Email address :</label>
            <input type="email" name="student_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="someone@example.com" >
          </div>
          <div class="form-group" style="margin-left:12px; margin-right:12px;">
            <label for="addr">Address:</label>
            <input type="text" name="addr" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group" style="margin-left:12px; margin-right:12px;">
            <label for="city">City:</label>
              <input type="text" name="city" class="form-control" id="inputCity">
        </div>
    <div class="col">
              <label for="name">student contact:</label>
              <input id="mobile" name="student_contact" type="number" class="form-control" placeholder="9978584572" >
        </div>
        <div class="col">
              <label for="date">DOB:</label>
              <input id="name" name="dob" type="date" class="form-control" placeholder="Jack" >
            </div>
            <div class="col">
              <label for="name">Branch:</label>
              <input id="name" name="branch" type="text" class="form-control" placeholder="computer science" >
            </div>

           <div class="col">
              <label for="studentNo">student number:</label>
              <input id="mobile" name="studentNo" type="number" class="form-control" placeholder="1910125" >
        </div>
     <div class="col">
              <label for="name">Father:</label>
              <input id="name" name="father" type="text" class="form-control" placeholder="Mr. abc" >
        </div>
        <div class="col">
              <label for="name">Father's contact:</label>
              <input id="mobile" name="father_contact" type="number" class="form-control" placeholder="9978584572" >
        </div>
        <div class="form-group" style="margin-left:12px; margin-right:12px;">
            <label for="exampleInputEmail1">Father Email address :</label>
            <input type="email" name="father_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="someone@example.com" >
          </div>
        <div class="col">
              <label for="name">Mother :</label>
              <input id="name" name="mother" type="text" class="form-control" placeholder="Jack" >
            </div>
            <div class="col">
              <label for="name">Mother's contact:</label>
              <input id="mobile" name="mother_contact" type="number" class="form-control" placeholder="9978584572" >
        </div>
            <div class="col">
              <label for="yr">Year:</label>
              <select id="name" name="yr" type="number" class="form-control" placeholder="1" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
            </select>
            </div>
            <div class="col">
                <label for="name">Room Type:</label>
                <select id="name" name="room_type" type="text" class="form-control" placeholder="two seater" >
                     <option value= "two seater">two seater</option>
                    <option value="three seater">three seater</option>
            </div>
            <input type="submit" style="width: 10% ; margin-top:50px; " name="back" class="btn btn-primary" value="Back">
           
          <button style="width: 10% ; margin-top:50px; " type= "submit" name="submit" class="btn btn-primary"> Submit </button>
          <!-- <button style="width: 10% ; margin-top:50px; " name="back" class="btn btn-primary"> hello </button> -->
</form>


    </div>
</body>
</html>
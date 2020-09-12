<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
</head>
<style>
#banner{
    height: 500px;
    width: 100%;

    background-image:url('img/hostelphoto.jpeg');
    background-repeat: no-repeat;
    /* background-size: 1500px 700px;  */
}
h1{
    margin-top:"200px";
}

.box{
    height:auto;
    width:80%;
    margin-left:10%;
    margin-right:10%;
    

}
p{
    margin:1%;
    padding:5%;
    font-family: 'Patrick Hand', cursive;
}
li{
    font-family: 'Patrick Hand', cursive;
}
footer{
    height:auto;
    width: 100%;
    margin-top:0;
    border:2px solid rgb(37,40, 43);
    background-color:rgb(37,40, 43);
}

</style>
<body>

    
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:black;">
  <a style="font-weight: bolder; font-family: 'Arapey', serif;" class="navbar-brand" href="#"><i class="fa fa-bed mr-2"></i>HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul id="menu" class="navbar-nav ml-auto">
      <li class="nav-item"><a style="color: white; font-weight: bolder; font-family: 'Arapey', serif;" class="nav-link" href="#">About</a></li>
      <li class="nav-item"><a style="color: white; font-weight: bolder; font-family: 'Arapey', serif;" class="nav-link" href="login.php">Contact Us</a></li>
      <li class="nav-item"><a style="color: white; font-weight: bolder; font-family: 'Arapey', serif;" class="nav-link" href="#">Logout</a></li>
    </ul>
  
  </div>
</nav>
<div id="banner">
     <span class="one">
         <a href="form.php" style="text-decoration: none; color:white; "><h1 class="display-4" style="text-align: center;  ">Click here to <br>fill the hostel form!</h1></a>
     </span>
</div>
<br>
<br>
    <h2 class="display-4" style="text-align: center; color:black; font-family: 'Titillium Web', sans-serif; " > Hostel facilities</h2>
    <div class="box">
        <p>The college provides well furnished hostel accommodation to its students. The six campus hostels are spread over four complexes namely, the Junior Girls Hostel Complex, the Girls Hostel Complex, the Junior Boys Hostel Complex and the Senior Boys Hostel Complex. The three girls hostel have double and triple seater rooms and accommodate about 600 students. The Junior Boys Hostel having double occupancy rooms can accommodate about 300 students and is reserved for first year students. The Senior Boys Hostel Complex has two hostels with single and triple seater accommodation and houses about 600 students.
    </p>
    <h2 style="margin-left:5%; font-family: 'Merienda', cursive;">   LIST OF AMENITIES AT A GLANCE.</h2>
    <ul>
        <li>Furnished rooms including Curtains, Mattress, Pillow, Bed Sheets </li>
        <li> Clean and Hygienic – Mess & Dining</li>
    </ul>

    <img src="img/bedroom.jpg" style="height:30%; width:48%; margin:7px;">
    <img src="img/mess.jpg" style="height:30%; width:48%; float:right ; margin:7px;">
    <br><br>
    <ul>
        <li>TV Room </li>
        <li>  Exclusive uninterrupted study room for students after college hours</li>
    </ul>
    <img src="img/studyroom.jpg" style="height:30%; width:48%; margin:7px;">
    <img src="img/tv2.jpg" style="height:30%; width:48%; float:right ; margin:7px;">
    <br><br>
    <ul>
        <li>Gymnasium </li>
        <li> Utility Store</li>
    </ul>
    <img src="img/gym2.jpg" style="height:30%; width:48%; margin:7px;">
    <img src="img/cANTEEN3.jpg" style="height:30%; width:48%; float:right ; margin:7px;">
    <br><br>
    <ul>
        <li> Indoor and Outdoor Games facilities</li>
    </ul>
   <img src="img/sports5.jpg" style="height:30%; width:48%; margin:7px;">
    <img src="img/tt.jpg" style="height:30%; width:48%; float:right ; margin:7px;">
    <br><br>
    <ul>
        
        <li> Uninterrupted power supply , separate Generator for Students </li>
        <li> Medical facility available with free medicines provided to sick students</li>
        <li>Mineral water provided to all the students</li>
    </ul>
    </div>

    <!-- <footer> -->
       <!-- <pre style="text-align:centre; color:white; margin-left:30%; margin-top:1%; margin-bottom:0;">
        Enquiry:   Dr Aditya Pratap Singh: 9958883636
                   Mr. Anuj Dwivedi	:  9910207556
                   Mr. Vivek Pansari	:  9868666480
       </pre> -->
       <div class="card-group" style="height:auto;">
  <div class="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body" style="background-color:rgb(37,40, 43);  color:white">
      
      <p class="card-text">27th Km Stone,Delhi-Hapur<br>
       Bypass Road,P.O. Adhyatmik Nagar,<br>
        Ghaziabad - 201009<br>
        8744052891-94,
        7290034978, 7290034976<br>
        info@akgec.ac.in</p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body" style="background-color:rgb(37,40, 43); color:white;">
      <h5 class="card-title" style="margin-left:5%; margin-top:5%;"> Enquiry:</h5>
      <p class="card-text">Dr Aditya Pratap Singh: 9958883636<br>
                   Mr. Anuj Dwivedi	:  9910207556<br>
                   Mr. Vivek Pansari	:  9868666480
      </p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
  <div class="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body" style="background-color:rgb(37,40, 43);  color:white">
      <h5 class="card-title" style="margin-left:13%; margin-top:5%;">Follow Us</h5>
      <br>
      
      <!-- <p class="card-text"> -->
          <ul style="list-style:none; ">
            
            <li style="display:inline;">
                <a href=""#>
                <img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"/></a></li>
                <pre style="display:inline;">   </pre>
        <li style="display:inline;"><a href=""#><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/></a> </li>
        <pre style="display:inline;">   </pre>
        <li style="display:inline;">><a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"/></a></i></li>

</ul>

      
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
</div>
       
    <!-- </footer> -->
</body>
</html>
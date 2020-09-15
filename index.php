<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home(hostel management)</title>
    <link rel="stylesheet" href="style.css">
    <link src="img/logo.png" type="img/icon" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
    <script>
        function togglemenu()
        {
            document.getElementById('sidebar').classList.toggle('active');
        }

    </script>   
</head>
<style>
    h6{
    color:white;
    margin-left:6%;
    }
    #accordion section p{ 
        display:none;
        text-align:left; 
        margin-left:5%;

    }
    #accordion section a{
        color:white;
        text-decoration: none;
    }
    #accordion section a:hover{
        text-decoration: underline;
    }
    #accordion section:target p{
        display: block;
        color:white;
    }

</style>
<body  >
    <div id="full"> 
        
          
        <div id="header">
            
            <div id="nav" style=" background: rgb(56, 192, 141);opacity:0.7; height:50px;font-family: 'Indie Flower', cursive; ">
                 <ul>
                    <li><a href="#" style=" text-decoration: none;color:white;" >Home</a></li>
                    <li><a href="#" style=" text-decoration: none;color:white;">Contact Us</a></li>
                    <li><a href="#" style=" text-decoration: none;color:white;">Book hostel</a></li>
                    <li><a href="https://youtu.be/s0yhu-pvsHc" style=" text-decoration: none;color:white;">Visit</a></li>
                    <li><a href="#" style=" text-decoration: none;color:white;">Login</a></li>
                    <li ><a href="#" style=" text-decoration: none;color:white;"> Register</a></li>
                    <!-- <li style="float: right;"><a href="#" style=" text-decoration: none;color:white;"> <b>Admin Login<b></a></li> -->
                </ul>
                        
            </div>
            
            
                <div id="banner" style="display:inline-block;height:600px; width:100%; opacity:1.5;">
                    <!-- <span> -->
                         <!-- <br><br> -->
                         <!-- <h1 class="display-4" style="text-align: center;font-family: 'Grandstander', cursive;
                         "> </h1> -->
                        <!-- <br><br>
                        <br><br><br><br><br><br> -->
                        <h1 style="margin-left:15%;margin-top:10%; font-size:300%; color:white; font-family: 'Indie Flower', cursive; display:inline-block;color:white;">Welcome To Akgec Hostel</h1>
                    <!-- </span> -->
                        <!-- <br><br> -->
                        <!-- <span class="one">
                            <a href="form.php" style="text-decoration: none; color:white; "><h1 class="display-4" style="text-align: center;   ">Click here to <br>fill the hostel form!</h1></a>
                        <span> -->
                    <!-- </div> -->
                    <div style="width:20% ; height:600px; float:right; background-color: black;opacity:0.5; margin:0; top:0;">
                    <h2 style="color:white;text-align:center; font-family: 'Indie Flower', cursive; opacity:1">Hostel Updates</h2>
                    <hr>
                    
                        <!-- <ul>
                             <li><h2 style>Hostel Fee Structure="color:white;  margin-left:6%;">Hostel Updates</h2><hr></li>
                            <li><h6</h6></li><hr>
                            <li><h6>Chief Warden Details</h6></li><hr>
                            <li><h6>Warden Contact</h6></li><hr>
                            <li><h6>Mess Item list<h6></li><hr>
                            <li><h6>Updated Mess Charges</h6></li><hr>
                            <li><h6>Hostel Intake </h6></li><hr>
                            <li><h6>Hostel Timings</h6></li><hr>
                            <li><h6>Hostel Rules</h6></li><hr>
                            <li><h6>other details</h6></li><hr>
                        </ul>     -->
                <!-- </div>    -->
                <main id="accordion" style="background-color: black;opacity:0.5;">

                     <section id="item1">
                     <a href="#item1"><h6 style="font-family: 'Indie Flower', cursive; color:white;">Hostel Fee Structure</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                        Two seater: Rs.110000 <br>Three seater: Rs.100000
                    </p>
                      </section><hr>
                     <section id="item2">
                         <a href="#item2"><h6>Chief Warden Details</h6></a> 
                         <p style="font-family: 'Grandstander', cursive;">
                            Warden:Mrs Mamta Bhushri<br>
                            working Experience:8 years<br>
                            Contact:9874563215
                         </p>
                     </section><hr>
                     <section id="item3">
                     <a href="#item3"><h6 style="font-family: 'Indie Flower', cursive;">Warden Contact</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                     Girls Hostel:<br>
                     Mrs Anita:9638527414<br>
                     Mrs divya:7412589632<br>
                     Boys Hostel:
                     Mr. Amar:7894561238<br>
                     Mr. Sudeer:9764581238

                    </p >
                      </section><hr>
                      <section id="item4">
                     <a href="#item4"><h6 style="font-family: 'Indie Flower', cursive;">Mess Item list</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                     
                    </p>
                      </section><hr>
                      <section id="item5">
                     <a href="#item5"><h6>Updated Mess Charges</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                        Lorem ipsum dolor sit amet.
                    </p>
                      </section><hr>
                      <section id="item6">
                     <a href="#item6"><h6 style="font-family: 'Indie Flower', cursive;">Hostel Intake</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ad?
                    </p>
                      </section><hr>
                      <section id="item7">
                     <a href="#item7"><h6 style="font-family: 'Indie Flower', cursive;">Hostel Timings</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ad?
                    </p>
                      </section><hr>
                      <section id="item8">
                     <a href="#item8"><h6 style="font-family: 'Indie Flower', cursive;">Hostel Rules</h6></a> 
                     <p style="font-family: 'Grandstander', cursive;">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ad?
                    </p>
                      </section><hr>
                      <!-- <section id="item1">
                     <a href="#item1"><h5></h5></a> 
                     <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ad?
                    </p>
                      </section> -->
                    </main>
        </div> 
     </div>
     <h1 style="margin-left:25%;top:10%;font-family: 'Indie Flower', cursive;">ABOUT</h1>
    <p style="margin-left:13%; font-family: 'Indie Flower', cursive;">
    There are two hostels for girls and three for boys.<br>
The hostel fee is generally Rs 90000 for triple seater and Rs 1.1lacs for the single seater.<br>
Yeah, PGs and other options are easily available for the students who couldn't get the hostel.<br>
The PGs are cheaper and cost up to Rs 7000-8000 per month including food and residence.<br>
The Food quality is high grade and cost of a meal is standard accordingly to the pocket of students.<br>
High quality of classes and modern equipped labs are available.<br>
The Infrastructure of our college is the main attraction.<br>
The wifi quality is also good at Ajay Kumar Garg Engineering College, [AKGEC] Ghaziabad
    </p>
    <br><br>
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
      <h5 class="card-title" style="margin-left:5%; margin-top:5%;"> Contact Us:</h5>
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
                <pre style="display:inline;"> </pre>
             <li style="display:inline;"><a href=""#><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/></a> </li>
            <pre style="display:inline;"> </pre>
             <li style="display:inline;"><a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"/></a></i></li>

</ul>

      
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
    </div>
  </div>
</div>
</div>     
 
  </div>



</body>
</html>

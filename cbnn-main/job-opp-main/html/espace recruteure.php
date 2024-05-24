<?php 
require_once "conection.php";
session_start();







if (isset($_POST['registr'])){



  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sexe=$_POST['sexe'];
  
  // Insertion des données dans la base de données
  $sql =mysqli_query($conn,"INSERT INTO `recruteur`(`nom`, `sexe`, `prénom`, `email`, `password`) 
  VALUES ('$firstname','$sexe','$lastname','$email','$password')");
  
  
  }
  if (isset($_POST['login'])){
  
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Insertion des données dans la base de données
    $sql1 =mysqli_query($conn,"SELECT `id_recruteure`, `email`, `password` FROM `recruteur` WHERE email='$email'AND `password`='$password' limit 1");
    if (mysqli_num_rows($sql1)) {
      $row=mysqli_fetch_assoc($sql1);
      $_SESSION['id_r']=$row['id_recruteure'];
      $_SESSION['email']=$row['email'];
       $_SESSION['login_success'] = true;
  } else {
      // Utilisateur non trouvé, vous pouvez afficher un message d'erreur ou rediriger vers la page de connexion
      echo "Login failed. Please check your credentials.";
  }
    
    }
  
  
  

?>





<?php

if (isset($_POST['sendd'])) {
  $rcrr=$_SESSION['id_r'];
  $companyName = mysqli_real_escape_string($conn, $_POST['nom_entreprise']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['tel_entreprise']);
    $contractType = mysqli_real_escape_string($conn, $_POST['type_de_contrat']);
    $emailer = mysqli_real_escape_string($conn, $_POST['email_entreprise']);
    $workerType = mysqli_real_escape_string($conn, $_POST['Kind_worker']);
    $description = mysqli_real_escape_string($conn, $_POST['détaille_offre']);
    $type =  mysqli_real_escape_string($conn, $_POST['type']);
  
  if(isset($_FILES['logo'])) {

    $image_name = $_FILES['logo']['name'];
    $image_size = $_FILES['logo']['size'];
    $image_error = $_FILES['logo']['error'];
    
    $ex = explode('.', $image_name);   
    $end_name = strtolower(end($ex));  
    $allowed = array('png', 'jpg', 'jpeg', 'svg', 'gif'); 

    if(in_array($end_name, $allowed)) {
        if($image_error === 0) {
            if($image_size < 4000000) { 
                $new_name = uniqid('',true) . '_' . $image_name;
                $dir = "./offer/".$new_name;

             
                

                    if(move_uploaded_file($_FILES['logo']['tmp_name'], $dir)) {
                      $sql =mysqli_query($conn,"INSERT INTO `offre`( `id_recruteure`, `nom_entreprise`, `naw3`, `Kind_worker`, `tel_entreprise`, `email_entreprise`, `détaille_offre`, `type_de_contrat`, `logo`)
                       VALUES ('$rcrr','$companyName','$type','$workerType','$phoneNumber','$emailer','$description','$contractType','$new_name')");


                     
                      

                        
                        
                    } else {
                        $_SESSION['back'] = "Error uploading the image!";
                        $er=1;
                    }
               
                
                
            } else {
                $_SESSION['back'] = "Your image is too large. !";
                $er=1;

            }
        } else {
            $_SESSION['back'] = "We have an error with your image !";
            $er=1;

        }
    } else {
        $_SESSION['back'] = "Choose an image with the correct type !";
        $er=1;

    }
}else
{
    $_SESSION['back']=" Image Required!";
    $er=1;

}

 
    
}
?>












































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job opp</title>
    <link rel="stylesheet" href="../css/espace recutuere.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/Capture d’écran (7).png" type="image/x-icon">
   
</head>
<body>
    
    <header>
        <div class="logo">
            <p><span>job</span>opportunity</p>
        </div>
       <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="offreopp.php">Offer</a></li>
            <li><a href="aboutus.php" >About us</a></li>
            <li><a href="espace recruteure.php">Recruiting area</a></li>
           
            <?php 
              if (!isset($_SESSION['id_r']))
         
         
            {
           echo '<li  onclick="openk()" id="open"><a>Sign In as recruter</a><i class="fa fa-sign-in" aria-hidden="true" style="font-size:15px" ></i></li>';
              }
              ?>
               <?php 
              if (isset($_SESSION['id_r']))
         
         
            {
           echo '<li><a href="profile.php" >Profile</a></li>';
              }
              ?>
              <?php 
              if (isset($_SESSION['id_r']))
         
         
            {
           echo '<li><a href="logout.php" >logout</a></li>';
              }
              ?>

              
              


        </ul>

        <!-- menu responsive -->
        <div class="toggle_menu"></div>
        
    </header>





    <div id="popup" class="popup">
  <p>Login successful!</p>
</div>

     


<div id="restrictPopup" class="popup">
  <p>You can't access this page</p>
</div>



    <div id="windw" >
      <div id="dakhel">
        <span id="close" onclick="closek()">&times;</span>
        <section>
        <form class="form" method="post">
                <div class="flex-column">
                  <label>Email</label>
                </div>
                <div class="inputForm">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    viewBox="0 0 32 32"
                    height="20"
                  >
                    <g data-name="Layer 3" id="Layer_3">
                      <path
                        d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"
                      ></path>
                    </g>
                  </svg>
                  <input placeholder="Enter your Email" class="input" type="text" name="email" />
                </div>
              
                <div class="flex-column">
                  <label>Password </label>
                </div>
                <div class="inputForm">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    viewBox="-64 0 512 512"
                    height="20"
                  >
                    <path
                      d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"
                    ></path>
                    <path
                      d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"
                    ></path>
                  </svg>
                  <input placeholder="Enter your Password" class="input" type="password" name="password"/>
                </div>
              
                <div class="flex-row">
                  
                  <span class="span">Forgot password?</span>
                </div>
                <button class="button-submit" name="login">Sign In</button>
                <p class="p">Don't have an account? <a class="rgstr" onclick="openl()" id="open1">Sign Up</span></a></p>
            
                </div>
              </form>
              
        </section>
      </div>
    </div>



    <div id="windw1">
        <div id="dakhel1">
          <section>
          <form class="form1" method="post">
                <p class="title">Register </p>
                <p class="message">Signup now and get your job</p>
                    <div class="flex">
                    <label>
                        <input style="width: 200px;" id="fn" class="input" type="text" placeholder="" required="" aria-activedescendant="" name="firstname">
                        <span>Firstname</span>
                    </label>
            
                    <label>
                        <input id="ln" style=" width: 200px; position: relative; right: 18px;" class="input" type="text" placeholder="" required="" name="lastname">
                        <span >Lastname</span>
                    </label>
                </div>  
                <select name="sexe" id="" >
                      <option value="sexe" selected disabled>Sex</option>
                      <option value="homme">homme</option>
                      <option value="femme">femme</option>
            </select>
                        
                <label>
                    <input class="input" type="email" placeholder="" required="" name="email">
                    <span>Email</span>
                </label> 
                    
                <label>
                    <input class="input" type="password" placeholder="" required="" name="password">
                    <span>Password</span>
                </label>
                <label>
                    <input class="input" type="password" placeholder="" required="">
                    <span>Confirm password</span>
                </label>
                <button  class="submit" name="registr">Sign up</button>
                <p class="signin">Already have an acount ? <a onclick="closel()" id="close1">Signin</a> </p>
            </form>
        </section>
        </div>
    </div>






















<section id="home">
  <div class="left">
      <h4>Descreption</h4>
      
      <h1>Find the best talent for your business</h1>
      <p>Thanks to our innovative solutions integrating artificial intelligence, we guarantee simplified and fluid recruitment.</p>
       <button><a href="#contact">apply now</a></button>
  </div>
  <div class="right">
    <img src="../images/pexels-kampus-8441775.jpg" class="image_bird">
  </div>
</section>
  <section id="statistiques"> <div class="statistiques">
    <span>
         <h2>450+</h2>
         <p>Recrutements / an</p>
    </span>
    <span>
         <h2>120+</h2>
         <p>Entreprises</p>
   </span>
   <span>
         <h2>160+</h2>
         <p>offre d'emplois</p>
   </span>
</div>



  </div>

  <div class="tit"><h1>Subscription card</h1></div>
    <div class="crt">
      
        <div class="crt-dakhel" >
            <div class="dezz">
                <h3>Announcement Publication</h3>
                <p>- Publish your job ads & access all applications<br>
                  -2 months of visibility<br>
                  -Ad Builder<br>
                  -Search filters</p>
            </div>
        </div>
    
        <div class="crt-dakhel">
            <div class="dezz">
                <h3>Digital Recruitment</h3>
                <p>-Optimize your recruitment times & dedicate your time to the best candidates<br>
                  -Understanding of the profile<br>
                  -Maintenance<br>
                  - Selection within 10 days</p>
            </div>
        </div>
    
        <div class="crt-dakhel" >
            <div class="dezz">
                <h3>Employer Branding</h3>
                <p>-Display your business in a different way! <br>
                  -Bring your employer image to life</p>
            </div>
        </div>
    </div>
  
    <div class="faq">
      <h1>Popular questions:</h1>
        <div class="faq-item">
            <div class="question">How do I post an ad on Jobopp?</div>
            <button class="toggle-btn">+</button>
            <div class="ans">By creating your recruiter account, you will have access to your recruiter area and will be able to publish your ads very easily. Already have an account? your account manager. Have you never advertised on Emploitic? Sign up for free.</div>
            
        </div>
        <div class="faq-item">
            <div class="question">Does it pay?</div>
            <button class="toggle-btn">+</button>
            <div class="ans">If this is your first time working with Emploitic, we offer you a 30-day free trial to take full advantage of all the features with posting ads.</div>
        </div>
        <div class="faq-item">
          <div class="question"> How does the reception of the conditions do?</div>
          <button class="toggle-btn">+</button>
          <div class="ans">Applications are received instantly on your dedicated recruiter account. They are ranked according to relevance to the criteria sought. You can filter and sort resumes and target the best applications received.</div>
      </div>
      <div class="faq-item">
        <div class="question">I am looking for specific profiles, are they available on your database?</div>
        <button class="toggle-btn">+</button>
        <div class="ans">Our database contains 1.5 million applications, of all profiles and job levels, throughout the country.</div>
    </div>
   
        
    </div>
    
 
  
 
 
  <section class="yb3t"  id="contact">
    
  <form action="" method="post" enctype="multipart/form-data">
  <div class="left-right">
    <div class="lef">
      <h1>For your offer</h1>
      <label>Company Name</label>
      <input type="text" name="nom_entreprise" required>
      
      <label>Company logo</label>
      <div class="lflf"><p>Choose a picture</p><input class="flfl" type="file" name="logo" accept="image/*" required></div>
      
      <label>Phone number</label>
      <input type="tel" name="tel_entreprise" required>
      
      <label for="contrat">Contract type:</label>
      <select class="contract" id="contrat" name="type_de_contrat" required>
        <option value="Permanent Contract">PC (Permanent Contract)</option>
        <option value="Fixed term contract">FTC (Fixed term contract)</option>
        <option value="Work study contract">Work study contract</option>
        <option value="Studentjob">Studentjob</option>
      </select>
      <label for="">Offer type</label>
      <select class="contract" id="contrat" name="type" required>
        <option value="special">special</option>
        <option value="simple">simple</option>
      </select>


      
      <label>Email address</label>
      <input type="email" name="email_entreprise" required>
      
      <label>Kind of worker</label>
      <input type="text" name="Kind_worker" required>
      
      <label>Description</label>
      <textarea name="détaille_offre" required></textarea>
      
      <button name="sendd" type="submit">Send</button>
    </div>
  </div>
</form>
</section>












 <footer>
  <div class="services_list">
      <div class="service">
          <img src="../icon/clock.png" alt="">
          <h2>Ouverture</h2>
          <p>10h30 à 23h45</p>
          <p>23h45 à 9h30</p>
      </div>

      <div class="service">
        <img src="../icon/pin.png" alt="">
        <h2>Adresses</h2>
        <p>France-Paris</p>
        <p>Annaba-Algérie</p>
    </div>
    <div class="service">
        <img src="../icon/email.png" alt="">
        <h2>Emails</h2>
        <p>email@gmail.com</p>
        <p>étudiantopp@gmail.com</p>
    </div>
    <div class="service">
        <img src="../icon/call.png" alt="">
        <h2>Numbers</h2>
        <p>+231 657542328</p>
        <p>+33 45687515</p>
    </div>
    
    <hr>
  </div>

  <p class="footer_text">Directed by <span class="span">DJAMEL MLM Dev</span> | All rights reserved.</p>
  
</footer>



            
          
               
     
<script>

<?php if(isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
    
    setTimeout(function(){
document.getElementById('popup').style.display = 'block';
}, 400);


setTimeout(function(){
document.getElementById('popup').style.display = 'none';
}, 2500);
<?php
// Reset the session variable
unset($_SESSION['login_success']);
endif;
?>
























  var open=document.getElementById('open');
var close=document.getElementById('close');
var windw=document.getElementById('windw');

function openk(){
    windw.style.display = 'block';

    
}

function closek(){
    windw.style.display = 'none';
   
}

window.onclick = function(event) {
    if (event.target == windw) {
      windw.style.display = "none";
    }
  }


  window.onclick = function(event) {
    if (event.target == windw1) {
      windw1.style.display = "none";
    }
  }





var open_1=document.getElementById('open1');
var closem_1=document.getElementById('close1');
var windw_1=document.getElementById('windw1');
function openl(){
    windw_1.style.display = 'block';
    
}

function closel(){
    windw_1.style.display = 'none';
}




var small_menu = document.querySelector('.toggle_menu')
var menu = document.querySelector('.menu')

small_menu.onclick = function(){
     small_menu.classList.toggle('active');
     menu.classList.toggle('responsive');
}
  

document.addEventListener('DOMContentLoaded', function () {
  const toggleBtns = document.querySelectorAll('.toggle-btn');

  toggleBtns.forEach(btn => {
      btn.addEventListener('click', function () {
          const answer = this.nextElementSibling;
          answer.classList.toggle('active');

          
          this.classList.toggle('rotate');
      });
  });
});





  













</script>

</body>
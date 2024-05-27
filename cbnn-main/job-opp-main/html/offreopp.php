<?php 
include_once "conection.php";
session_start();


if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit; 
}



 
       ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job opp</title>
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="../css/offreopp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="#">Search</a><i class="fa fa-search" style="font-size:15px" ></i></li>
            <li><a href="aboutus.php" >About us</a></li>


            <?php 
            if (!isset($_SESSION['id_u']))
         
         
         {
            echo'<li><a href="espace recruteure.php">Recruiting area</a></li>';
         }
         ?>

            
<?php 
              if (isset($_SESSION['id_r']))
         
         
            {
           echo '<li><a href="#" >Profile</a></li>';
              }
              ?>
               
              <?php 
              if (isset($_SESSION['email']))
         
         
            {
           echo '<li><a href="logout.php" >logout</a></li>';
              }
              ?>

              


        </ul>

        <!-- menu responsive -->
        <div class="toggle_menu"></div>
        
    </header>



   





    <div class="advertise" >
    <?php
     $get_offers=mysqli_query($conn," SELECT * FROM `offre` WHERE naw3='special'");
     if(mysqli_num_rows($get_offers) > 0)
     {
         
         while($row=mysqli_fetch_assoc($get_offers))
          {
             echo'
             <h1>Special offre</h1>
             <div class="alll">
             <img src="./offer/'.$row['logo'].'">
             <div class="text">
             <h2>'.$row['nom_entreprise'].':</h2>
              <p>'.$row['Kind_worker'].'</p>
                 <h6>For more information:0'.$row['tel_entreprise'].'</h6>

            <button id="openl"  onclick="openl()"  class="butn1" >Apply</button>
            <button  onclick="openk()" id="open" class="butn2">Learn more</button>
               </div>
               <div id="windw" >
               <div id="dakhel">
                 <span id="close" onclick="closek()">&times;</span>
                 <div class="more" >
                 <h5> '.$row['détaille_offre'].' </h5>
                 </div>
               </div>
             </div>  
              </div>
             
              
              
        



             ';
         }
    }
    ?>


    </div>



        <div class="zayed">
        <h1>Offers:</h1>
            <div class="card-contain" >
     <?php
     $get_offers=mysqli_query($conn," SELECT * FROM `offre` WHERE naw3='simple'");
     if(mysqli_num_rows($get_offers) > 0)
     {
         
         while($row=mysqli_fetch_assoc($get_offers))
          {
             echo'

             
             <div class="card">
             <div class="front">
                 <div class="circle" >
                 <img src="./offer/'.$row['logo'].'">

                 </div>
                 <div class="ktiba" >
                     <h3>'.$row['nom_entreprise'].':</h3>
                     <h5>'.$row['Kind_worker'].'</h5>
                     <h4>Type of contract:</h4>
                     <h5>'.$row['type_de_contrat'].'</h5>
                     <h6>For more information:0'.$row['tel_entreprise'].'</h6>
                     
                 </div>
                 <div class="sahm">
                     <p class="r">rotate</p>
                     <p class="s"> →</p>
                 </div>
                 
                 
             </div>
             <div class="back">
                 <div class="ktiba">
                     <h5> '.$row['détaille_offre'].' </h5>
                 </div>
                 <button id="openl"  onclick="openl()"  class="button" >Apply</button>
             </div>
         </div>
         


             ';
         }
    }
    ?>
            </div>
        </div>





           
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

        <p class="footer_text">Directed by <span>DJAMEL MLM Dev</span> | All rights reserved.</p>
    </footer>



    <div id="windw1">
        <div id="dakhel1">
        <span name="close" id="close" onclick="closel()">&times;</span>
          <section>
          <form class="form1" method="post">
                
                <p class="message">Hope you get the job you want!</p>
                    <label>
                        Phone number
                        <input id="ln" class="input" type="text" placeholder="" required="" name="">
                       
                    </label>
        
                <label>
                    Your gender
                    <select name="sexe" id="" >
                      <option value="sexe" selected disabled>Sex</option>
                      <option value="homme">homme</option>
                      <option value="femme">femme</option>
            </select>
                </label> 
                <label for="">
                    Your level
                <select name="niveau_etude" id="niveau_etude" >
                        <option value="" disabled selected>Niveau d'étude</option>
                        <option value="Niveau Secondaire">Niveau Secondaire</option>
                        <option value="Niveau Terminal">Niveau Terminal</option>
                        <option value="Baccalauréat">Baccalauréat</option>
                        <option value="TS Bac +2">TS Bac +2</option>
                        <option value="Licence (LMD), Bac + 3">DLicence (LMD), Bac + 3</option>
                        <option value="Master 1, Licence  Bac + 4">Master 1, Licence  Bac + 4</option>
                        <option value="Master 2, Ingéniorat, Bac + 5">Master 2, Ingéniorat, Bac + 5</option>
                        <option value="Magistère Bac + 7">Magistère Bac + 7</option>
                        <option value="doctorat">Doctorat</option>
                        <option value="Non Diplômante">Non Diplômante</option>
                        <option value="Formation Professionnelle">Formation Professionnelle</option>
                        <option value="Certification">Certification</option>
                    </select>
                </label>
                <label for="">
                    Your cv
                <div class="lflf"><p>Choose a file</p><input class="flfl" type="file"></div>
                </label>


                <button  class="submit" name="registr">Send</button>

            </form>
        </section>
        </div>
    </div>



    <script src="window.js" >


        
    </script>
   
</body>
</html>
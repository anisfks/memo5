<?php 
require_once "conection.php";
session_start();

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job opp</title>
    <link rel="stylesheet" href="../css/aboutus.css">
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










    

    
          
    














 <div class="header">
 <img src="../images/About us_edit_13438682591178.jpg" alt="">
 </div>
 
 <div class="container">
    
    <div class="about">
       <div class="left">
          <h1>Our mission</h1>
         <p>We are djamel mostepha and anis the creators of job opportunitie website,our mission is to bridge the gap between aspiring students and promising career paths. Through our platform,We aim to create a platform that serves as a bridge between job seekers and employers, facilitating seamless interactions and fostering a thriving professional community. Through innovative features and user-friendly design, we strive to streamline the job search process, providing comprehensive resources and support to both candidates and companies ,also we aim to empower students by providing them with access to a diverse range of educational resources and job opportunities tailored to their skills and interests. By fostering a supportive and inclusive environment, we strive to facilitate meaningful connections between students and prospective employers, enabling them to embark on fulfilling career journeys and realize their full potential. We are committed to facilitating growth, learning, and development for both students and employers, ultimately contributing to a brighter future for all involved.</p>
       </div>
       <div class="right">
          <img src="../images/5-16.png">
       </div>
       <div class="clear"></div>
    </div>
    
    
    
    <div class="mission">
      
       <div class="left">
          <img src="../images/men-cartoon-characters-together_23-2150964453.png">
       </div>
         <div class="right">
          <h1>Our story</h1>
         <p>In 2024 ,as three passionate students studying informatics, we embarked on a journey to create a job opportunity website born from our shared vision and determination. Motivated by our desire to make a meaningful impact in the digital landscape, we pooled our expertise in coding, design, and user experience to bring our project to life. With relentless dedication and countless hours of brainstorming and coding sessions, we transformed our collective vision into a reality. Along the way, we faced challenges and setbacks, but our perseverance and teamwork propelled us forward. Our story is one of collaboration, innovation, and unwavering commitment to creating a platform that empowers individuals in their career pursuits while showcasing our skills and passion for technology. Through our website, we hope to not only provide valuable job opportunities but also inspire others to pursue their dreams and make a difference in the world of technology.</p>
       </div>
       <div class="clear"></div>
       </div>

    
    
   
        <div class="team">
       <div class="h2" ><h1  class="h1" >Our team</h1></div>
           
    
      <div class="cartaa" >
        <div class="flip-card">
          <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="circle" >
                  <img class="djo" src="../icon/IMG_20240417_173743_041.jpg" alt="">
                </div>
                <h2>Mallem mohamed djamel</h2>
                <h4>My name is djamel, i am an informatique engineer ,the main programer of the web site and the leader of the team</h4>
                <h5>flip the card to contact with me</h5>
                  
              </div>
              <div class="flip-card-back">
                <div class="card">
                  <div class="background">
                  </div>
                  <div class="logoo">
                   Socials
                  </div>
                
                  <a href="#"><div class="box box1"><span class="icon"><svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                      </svg></span></div></a>
                
                  <a href="##"><div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                      </svg></span></div></a>
                
                  <a href="###"><div class="box box3"><span class="icon"><svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                        <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                      </svg></span></div></a>
                
                  <div class="box box4"></div>
                </div>
                  
              </div>
          </div>
      </div>
      </div>
           
           
    <div class="cartaa" >
      <div class="flip-card1">
        <div class="flip-card-inner1">
            <div class="flip-card-front1">
                <div class="circle1">
                 
                </div>
                <h2>Djouani mostepha</h2>
                <h4>My name is mostepha, i am an informatique engineer and one of the team who create the website</h4>
                <h5>flip the card to contact with me</h5>
            </div>
            <div class="flip-card-back1">
              <div class="card">
                <div class="background">
                </div>
                <div class="logoo">
                 Socials
                </div>
              
                <a href="#"><div class="box box1"><span class="icon"><svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                      <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                    </svg></span></div></a>
              
                <a href="##"><div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                      <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                    </svg></span></div></a>
              
                <a href="###"><div class="box box3"><span class="icon"><svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                      <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                    </svg></span></div></a>
              
                <div class="box box4"></div>
              </div>
               
            </div>
        </div>
    </div>
    </div>
           
           
  <div class="cartaa" > 
    <div class="flip-card2">
    <div class="flip-card-inner2">
        <div class="flip-card-front2">
            <div class="circle2">
           
            </div>
            <h2>Ferkous mohamed anis</h2>
              <h4>My name is anis, i am an informatique engineer ,one of the team who create the website and the founder of it</h4>
              <h5>flip the card to contact with me</h5>
        </div>
        <div class="flip-card-back2">
          <div class="card">
            <div class="background">
            </div>
            <div class="logoo">
             Socials
            </div>
          
            <a href="#"><div class="box box1"><span class="icon"><svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
                  <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
                </svg></span></div></a>
          
            <a href="##"><div class="box box2"> <span class="icon"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                  <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg></span></div></a>
          
            <a href="###"><div class="box box3"><span class="icon"><svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
                  <path d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path>
                </svg></span></div></a>
          
            <div class="box box4"></div>
          </div>
        </div>
    </div>
</div></div>

    </div>


 
 

   


 
    <!-- footer -->
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




    <script src="window.js" >
      
  </script>
</body>
</html>
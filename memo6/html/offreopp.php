<?php 
              session_start();
              
              if (!isset($_SESSION['id_u']))
         
         
           {header("Location: index.php");
            die;}
              ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job opp</title>
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
          <li><a href="offreopp.php">offer</a></li>
          <li><a href="aboutus.php" >About us</a></li>
          <li><a href="#">Search</a><i class="fa fa-search" style="font-size:15px" ></i></li>
          <li onclick="openk()" id="open" ><a>Sign In</a><i class="fa fa-sign-in" aria-hidden="true" style="font-size:15px" ></i></li>
          <li><a href="espace recruteure.php">espace recruteur</a></li>
        </ul>

        <!-- menu responsive -->
        <div class="toggle_menu"></div>
        
    </header>




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
                  <input placeholder="Enter your Email" class="input" type="text" />
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
                  <input placeholder="Enter your Password" class="input" type="password" />
                </div>
              
                <div class="flex-row">
                  
                  <span class="span">Forgot password?</span>
                </div>
                <button class="button-submit">Sign In</button>
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
                        <input style="width: 200px;" id="fn" class="input" type="text" placeholder="" required="" name="firstname">
                        <span>Firstname</span>
                    </label>
            
                    <label>
                        <input id="ln" style=" width: 200px; position: relative; right: 18px;" class="input" type="text" placeholder="" required="" name="lastname">
                        <span >Lastname</span>
                    </label>
                </div>  
                        
                <label>
                    <input class="input" type="email" placeholder="" required="" name="email">
                    <span>Email</span>
                </label> 
                    
                <label>
                    <input class="input" type="password" placeholder="" required="" name="password">
                    <span>Password</span>
                </label>
                
                <button  class="submit" name="registr">Sign up</button>
                <p class="signin">Already have an acount ? <a onclick="closel()" id="close1">Signin</a> </p>
            </form>
        </section>
        </div>
    </div>



















     
        <div id="products"></div>
      </div>
    <div class="advertise">
        <div class="text">
            <h1>Surface 9 Pro</h1>
            <p>Tablet versatility and laptop power — all in one ultra-portable device</p>
            <button>Learn More</button>
        </div>
        </div>
        <div class="productpage">
            <div class="p1">
                <img src="laptop5.jfif" alt="">
                <h1>Surface Laptop 5</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>learn More ></h3>
            </div>
            <div class="p1">
                <img src="pad.webp" alt="">
                <h1>Surface Laptop Studio</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>learn More ></h3>
            </div>
            <div class="p1">
                <img src="ibox.webp" alt="">
                <h1> Xbox Series X</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>Shop Xbox Series X ></h3>
            </div>
            <div class="p1">
                <img src="iboxs.webp" alt="">
                <h1> Xbox Series S</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>Shop Xbox Series S ></h3>
            </div>
        </div>
        <div class="brows">
            <div id="info">
                <h2>Announcing the  next wave of AI innovation</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias rem similique vero reiciendis minima! Excepturi vitae maxime illo quibusdam dolore aut velit enim. Ducimus possimus veritatis, deleniti velit vitae quos?
            
                </p>
                <button>Learn More about it</button>
            </div>
            </div>
        <div class="productpage">
            <div class="p1">
                <img src="laptop5.jfif" alt="">
                <h1>Surface Laptop 5</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>learn More ></h3>
            </div>
            <div class="p1">
                <img src="pad.webp" alt="">
                <h1>Surface Laptop Studio</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>learn More ></h3>
            </div>
            <div class="p1">
                <img src="ibox.webp" alt="">
                <h1> Xbox Series X</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>Shop Xbox Series X ></h3>
            </div>
            <div class="p1">
                <img src="iboxs.webp" alt="">
                <h1> Xbox Series S</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde culpa commodi, sit repellendus voluptates sed nisi laboriosam aut nostrum sequi!</p>
                <h3>Shop Xbox Series S ></h3>
            </div>
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

        <p class="footer_text">Réalisé par <span>anisfks Dev</span> | Tous les droits sont réservés.</p>
    </footer>






    <script src="window.js" >
        
    </script>
   
</body>
</html>
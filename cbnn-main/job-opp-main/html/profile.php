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
require_once "conection.php";
session_start();

// Vérification et récupération des données utilisateur
if (isset($_SESSION['id_r'])) {
    $user_id = $_SESSION['id_r'];

    // Requête pour récupérer les données de l'utilisateur
    $query = "SELECT `nom`, `sexe`, `prénom`, `email` FROM `recruteur` WHERE `id_recruteure` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        $firstname = $user_data['prénom'];
        $lastname = $user_data['nom'];
        $email = $user_data['email'];
        $gender = $user_data['sexe'];
    } else {
        // L'utilisateur n'existe pas ou une erreur s'est produite lors de la récupération des données
        // Vous pouvez gérer cela en affichant un message d'erreur ou en redirigeant l'utilisateur
        // header("Location: erreur.php");
        // exit();
    }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Opportunity</title>
    <link rel="stylesheet" href="../css/profile.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <p><span>job</span>opportunity</p>
        </div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="offreopp.php">Offer</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="espace recruteure.php">Recruiting area</a></li>
            <?php 
                if (isset($_SESSION['id_r'])) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                }
            ?>
            <?php 
                if (isset($_SESSION['id_r'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
            ?>
        </ul>
    </header>

    <!-- Formulaire de profil centré -->
    <div class="container" style="width:1000px;height:280px;object-fit: cover;">
        <div class="row justify-content-center">
            <div class="col-lg-8 border rounded mt-5 p-4 shadow-lg">
                            <!-- Assumons que l'utilisateur est le propriétaire du profil -->
                           <!-- Assumons que l'utilisateur est le propriétaire du profil -->
                    <a href="profile-edit.php">
                        <button class="mx-auto m-1 btn-lg btn btn-primary" style="width:200px;height:55px;" >Edit</button>
                    </a>
                    <a href="profile-delete.php">
                        <button class="mx-auto m-1 btn-lg btn btn-warning text-white" style="width:200px;height:55px;">Delete</button>
                    </a>
                    <a href="logout.php">
                        <button class="mx-auto m-1 btn-lg btn btn-info text-white" style="width:200px;height:55px;">Logout</button>
                    </a>
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="h2">User Profile</div>
                        <table class="table table-striped">
                            <tr><th colspan="2">User Details:</th></tr>
                            <tr><th><i class="bi bi-envelope"></i> Email</th><td><?php echo $email; ?></td></tr>
                            <tr><th><i class="bi bi-person-circle"></i> First name</th><td><?php echo $firstname; ?></td></tr>
                            <tr><th><i class="bi bi-person-square"></i> Last name</th><td><?php echo $lastname; ?></td></tr>
                            <tr><th><i class="bi bi-gender-ambiguous"></i> Gender</th><td><?php echo $gender; ?></td></tr>
                        </table>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Si $row est vide -->
    <!--
    <div class="text-center alert alert-danger">That profile was not found</div>
    <a href="index.php">
        <button class="btn btn-primary m-4">Home</button>
    </a>
    -->
     <div class="advertise" >
    <?php                   
   
     $get_offers=mysqli_query($conn," SELECT * FROM `offre` WHERE  naw3='special' AND id_recruteure='$user_id'  ");
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
     $get_offers=mysqli_query($conn," SELECT * FROM `offre` WHERE naw3='simple' AND id_recruteure='$user_id'");
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



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;700&display=swap');
        @import url('https://fonts.cdnfonts.com/css/segoe-ui-4');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body, html {
            height: 100%;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 50px;
            padding: 0 10%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(243, 242, 238);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.557);
            z-index: 10;
        }
        .menu {
            display: flex;
        }
        .logo {
            color: #2793ae;
            font-weight: 700;
            font-size: 25px;
        }
        .logo span {
            color: #273e60;
        }
        .menu li {
            margin: 0 15px;
            list-style: none;
        }
        .menu li a {
            font-size: 14px;
            text-decoration: none;
            color: #6f6f6f;
            position: relative;
        }
        .menu li a::before {
            position: absolute;
            top: -5px;
            left: 0;
            content: "";
            width: 0;
            height: 2px;
            border-radius: 6px;
            background-color: #2793ae;
            transition: 0.5s;
        }
        .menu li a:hover::before {
            width: 100%;
        }
        .menu li a::after {
            position: absolute;
            bottom: -5px;
            right: 0;
            content: "";
            width: 0;
            height: 2px;
            border-radius: 6px;
            background-color: #2793ae;
            transition: 0.5s;
        }
        .menu li a:hover::after {
            width: 100%;
        }
        .menu li a:hover {
            color: #000;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding-top: 50px;
        }
        .border {
            background-color: white;
        }
        /*Scrollbar CSS*/
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #2793ae;
        }
    </style>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

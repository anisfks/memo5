


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
if (isset($_POST['delete'])) {
    $query = "DELETE FROM `recruteur` WHERE `id_recruteure` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    header ('location:logout.php');
    die;
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

   <!-- Formulaire de suppression -->
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        
        .row {
            display: flex;
            justify-content: center;
        }

        .col-lg-8 {
            width:1400px;
            max-width: 1400px;
            padding: 20px;
            border: 3px solid #ddd;
            border-radius: 9px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin:-50px;;
            
        }

        .h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
        }

        .float-end {
            float: right;
        }

        .text-center {
            text-align: center;
        }

        .my-2 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .p-2 {
            padding: 10px;
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 10px;
            }

            .col-lg-8 {
                padding: 10px;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .btn-danger,
            .btn-secondary {
                width: 100%;
                text-align: center;
                margin: 10px 0;
            }

            .float-end {
                float: none;
            }
        }
        @media (max-width: 768px) {
  /* Styles for tablets and smaller devices */
}

@media (max-width: 576px) {
  /* Styles for smartphones and smaller devices */
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="h2">Delete Profile</div>

                <!-- Formulaire de confirmation -->
                <div class="alert alert-danger text-center my-2">Are you sure you want to delete your profile?</div>

                <form method="post">
                    <div class="p-2">
                        <button class="btn btn-danger float-end" type="submit" name="delete">Delete</button>
                        <a href="profile.php" class="btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
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

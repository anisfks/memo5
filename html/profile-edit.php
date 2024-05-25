<?php 
require_once "conection.php";
session_start();

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
<?php

$error=0;
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{




        if(isset($_POST['save']))
        {


            if(isset($_POST['password']) && !empty($_POST['password']))
            {


                $password =mysqli_real_escape_string($conn,$_POST['password']);

                if(strpos($password, ' ') !== false)
                {
                    $error=1;
                    $_SESSION['e_password']="le Mot de passe ne doit pas contenir des espaces!";


                }else if(strlen($password) < 8)
                {
                    $error=1;
                    $_SESSION['e_password']="Le mot de passe doit contenir au moins 8 caractères!";
                }

            }else
            {
            $error=1;
                $_SESSION['e_password']="Obligatoire!";
            }

            if(isset($_POST['new_password']) && !empty($_POST['new_password']))
            {


                $new_password =mysqli_real_escape_string($conn,$_POST['new_password']);
                

                if(strpos($new_password, ' ') !== false)
                {
                    $error=1;
                    $_SESSION['e_new_password']="le Mot de passe ne doit pas contenir des espaces!";


                }elseif(strlen($new_password) < 8)
                {
                    $error=1;
                    $_SESSION['e_new_password']="Le mot de passe doit contenir au moins 8 caractères!";
				}
                

            }else
            {
            $error=1;
                $_SESSION['e_new_password']="Obligatoire!";
            }

            if($error==0)
            {
                $stmt = $conn->prepare("SELECT `password` FROM `recruteur` WHERE `id_recruteure`  = ? LIMIT 1");
                $stmt->bind_param("s",$user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $old_password = $row['password'];
                if ($password==$old_password) {
                    if($new_password!==$old_password)
                    {   
                        $stmt = $conn->prepare("UPDATE `recruteur` SET `password` = ? WHERE`id_recruteure` = ? AND `password`= ? LIMIT 1");
                        $stmt->bind_param("sss", $new_password,$user_id,$old_password);
                        $stmt->execute();
                        $stmt->close();
                        $_SESSION['password']= "Votre mot de passe a été modifié avec succès.";
                        header("Location:profile.php");
						die;
                    }
                    else
                    {
                        $_SESSION['erreur']="vous etes deja utiliser ce mot de passe!";
                        
                    }
                }else
                {
                    $_SESSION['erreur']="Mot de pass incorect!";
                    
                    
                }

                }
            }else
            {
                

            }




        }
      
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-icons.css">
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
	<?php if(!empty($user_data)):?>
	
		<div class="container">
			<div class="col-md-8">
				
				<div class="h2">Edit Profile</div>

				<form method="post">
					<table class="table table-striped">
						<tr><th colspan="2">User Details:</th></tr>
						
						
						<tr><th><i class="bi bi-key"></i> Password</th>
							<td>
								<input type="password" class="form-control" name="password" placeholder="Password (leave empty to keep old password)">
								<div><small class="js-error js-error-password text-danger"></small></div>
							</td>
						</tr>
						<tr><th><i class="bi bi-key-fill"></i> Retype Password</th>
							<td>
								<input type="password" class="form-control" name="new_password" placeholder="Retype Password">
							</td>
						</tr>

					</table>

					

					<div class="p-2">
						
						<button class="btn btn-primary float-end" type="submit" name="save" >Save</button>
						
						<a href="profile.php">
							<label class="btn btn-secondary" >Back</label>
						</a>

					</div>
				</form>

			</div>
		</div>
	</div>
<?php endif; ?>


<div id="popup" class="popup">
  <p>Votre mot de passe a été modifié avec succès.</p>
</div>

<script>

<?php if(isset($_SESSION['password']) && $_SESSION['password']): ?>
    
    setTimeout(function(){
document.getElementById('popup').style.display = 'block';
}, 400);


setTimeout(function(){
document.getElementById('popup').style.display = 'none';
}, 2500);
<?php
// Reset the session variable
unset($_SESSION['password']);
endif;
?>
</script>

</body>
</html>


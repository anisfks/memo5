<?php 
include_once "conection.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<body class="bg-gray-100">
    <h1 class="text-center text-2xl font-bold my-12">Projects</h1>
    <div class="grid gap-6 p-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project Card -->

        <?php $get_offers=mysqli_query($conn,"SELECT * FROM `offre`");
            if(mysqli_num_rows($get_offers) > 0)
            {
                while($row=mysqli_fetch_assoc($get_offers))
                 {
                    echo'
                    <div class="bg-white rounded-lg shadow-md relative">
                    <div class="p-4 ">
                    <h2 class="text-xl font-bold">nom : '.$row['nom_entreprise'].'</h2> 
                    <p class="text-gray-600">'.$row['email_entreprise'].'</p>
                    </div>
                    </div>';
                }
           }
       ?>
        
       
    </div>
</body>
</html>
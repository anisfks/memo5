<?php 
require_once "conection.php";
session_start();
if (isset($_SESSION['id_r'])) {
    $user_id = $_SESSION['id_r'];

}
if (isset($_GET['d'])&&!empty($_GET['d'])){
$deletoffre=$_GET['d'];
$delet= mysqli_query($conn,"DELETE FROM `offre` WHERE id_offre='$deletoffre' AND id_recruteure ='$user_id'");
header("Location:profile.php");
die;

}

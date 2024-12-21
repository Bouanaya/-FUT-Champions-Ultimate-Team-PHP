<?php
include "../conn/database.php";
$id = $_POST['id'];

 
$query = "DELETE FROM nationality WHERE id_nationality = '$id'";
$requet = mysqli_query($conn , $query);
if (isset($requet)) {

 header("Location: ../pages/nationality.php");
 exit;

}

mysqli_close($conn)
?>
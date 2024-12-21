<?php
include "../conn/database.php";
$id = $_GET['id'];
echo $id;
 
$query = "DELETE FROM players WHERE id_Player = '$id'";
$requet = mysqli_query($conn , $query);

 
if (isset($requet)) {
echo "delete";
 header("Location: ../pages/Players.php");
 exit;

}

mysqli_close($conn)
?>
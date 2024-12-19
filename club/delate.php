<?php
include '../conn/database.php';

    $clubId = $_GET['id'];
    $sql = "DELETE FROM club WHERE id_Club = '$clubId'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/clubs.php");
        exit();
    } else {
        echo "error" . mysqli_error($conn); 
    }


    mysqli_close($conn);

?>
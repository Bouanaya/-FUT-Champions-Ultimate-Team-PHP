<?php
// Include database connection
include '../conn/database.php';

if ($_GET["id"]) {
    $clubName=$_POST['clubName'];
    $clubLogo=$_POST['clubLogo'];
    $id = $_POST['id'];
    $query = "UPDATE club 
    SET club = '$clubName' , logo ='$clubLogo'
    WHERE id_Club = '$id'";
    $requet = mysqli_query($conn,$query);
    if (isset($requet)) {
        header("Location: ../pages/clubs.php"); 
        exit();
    }
    
}
else{

    $clubName=$_POST['clubName'];
    $clubLogo=$_POST['clubLogo'];
    // Insert query
    $sql = "INSERT INTO club (club, logo) VALUES ('$clubName', '$clubLogo')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/clubs.php"); 
        exit();
    } else {
        echo "Error: " . mysqli_error($conn); 
    }

}

    // Close the connection
    mysqli_close($conn);

?>

<?php
include '../conn/database.php';
include '../validate/culb-nationality.php';


if ($_GET["id"]) {
    $clubName= validatecarater($_POST['clubName']); 
    $clubLogo= validateurl($_POST['clubLogo']);
   if ($clubName == "false" || $clubLogo == "false") {
    if ($clubName == "false") {
        echo"<script>alert('Invalid club name');</script>";
        header("Location: ../error/error.php?id=nameclub");
    }
    if ($clubLogo == "false") {
        echo"<script>alert('Invalid url');</script>";
        header("Location: ../error/error.php?id=urllogo");

    }

  
   
  
     
   }
   else {
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
    
}
else{
    $clubName= validatecarater($_POST['clubName']); 
    $clubLogo= validateurl($_POST['clubLogo']);
    if ($clubName == "false" || $clubLogo == "false") {
        if ($clubName == "false") {
            echo"<script>alert('Invalid club name');</script>";
            header("Location: ../error/error.php?id=nameclub");
        }
        if ($clubLogo == "false") {
            echo"<script>alert('Invalid url');</script>";
            header("Location: ../error/error.php?id=urllogo");
        }
       }
       else {
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
}

    // Close the connection
    mysqli_close($conn);

?>

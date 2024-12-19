
<?php
// Include database connection
include '../conn/database.php';

if ($_POST["id"]) {
    $nationality = $_POST['nationality'];
    $flag = $_POST['flag'];
    $id = $_POST['id'];
    $query = "UPDATE nationality 
    SET nationality = '$nationality' , flag ='$flag'
    WHERE id_nationality = '$id'";
    $requet = mysqli_query($conn,$query);
    if (isset($requet)) {
        header("Location: ../pages/nationality.php"); 
        exit();
    }
    
}
else{

    $nationality = $_POST['nationality'];
    $flag = $_POST['flag'];
    $query ="INSERT INTO nationality (nationality,flag ) VALUES('$nationality','$flag')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/nationality.php"); 
        exit();
    } else {
        echo "Error: " . mysqli_error($conn); 
    }

}

    // Close the connection
    mysqli_close($conn);

?>

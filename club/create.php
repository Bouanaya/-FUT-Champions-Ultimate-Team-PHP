<?php
// Include database connection
include '../conn/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and escape for security
    $clubName = mysqli_real_escape_string($conn, $_POST['clubName']);
    $clubLogo = mysqli_real_escape_string($conn, $_POST['clubLogo']);

    // Insert query
    $sql = "INSERT INTO club (club, logo) VALUES ('$clubName', '$clubLogo')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        header("Location: ../pages/clubs.php"); 
        exit();
    } else {
        echo "Error: " . mysqli_error($conn); 
    }

    // Close the connection
    mysqli_close($conn);
}
?>

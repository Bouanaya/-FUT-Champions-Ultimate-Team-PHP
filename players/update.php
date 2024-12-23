 <?php
include "../conn/database.php";



if ($_GET['namePlayer']) {
    $namePlayer = $_GET["namePlayer"];
    echo $namePlayer;
    $imgPlayer = $_GET["imgPlayer"];
    echo $imgPlayer;
    $nationality = $_GET["nationality"];
    echo $nationality;
    $positionPlayer = $_GET["positionPlayer"];
    echo $positionPlayer;
    $nameClub = $_GET["nameClub"];
    echo $nameClub;
    $ratingPlayer = $_GET["ratingPlayer"];
    echo $ratingPlayer;
    // players
    $pacePlayer = $_GET["pacePlayer"]??null;
    echo $pacePlayer;
    $shootingPlayer = $_GET["shootingPlayer"]??null;
    echo $shootingPlayer;
    $passingPlayer = $_GET["passingPlayer"]??null;
    echo $passingPlayer;
    $dribblingPlayer = $_GET["dribblingPlayer"]??null;
    echo $dribblingPlayer;
    $defendingPlayer = $_GET["defendingPlayer"]??null;
    echo $defendingPlayer;
    $physicalPlayer = $_GET["physicalPlayer"]??null;
    echo $physicalPlayer;
    $divingGk = $_GET["divingGk"]??null;
    echo $divingGk;
    $handingGk = $_GET["handingGk"]??null;
    echo $handingGk;
    $kickingGk = $_GET["kickingGk"]??null;
    echo $kickingGk;
    $reflexeGk = $_GET["reflexeGk"]??null;
    echo $reflexeGk;
    $speedGk = $_GET["speedGk"]??null;
    echo $speedGk;
    $ratingGk = $_GET["ratingGk"]??null;
    echo $ratingGk;
    $positioningGk = $_GET["positioningGk"]??null;
    
    
}
else{
    $namePlayer = $_POST["namePlayer"];
    echo $namePlayer;
    $imgPlayer = $_POST["imgPlayer"];
    echo $imgPlayer;
    $nationality = $_POST["nationality"];
    echo $nationality;
    $positionPlayer = $_POST["positionPlayer"];
    echo $positionPlayer;
    $nameClub = $_POST["nameClub"];
    echo $nameClub;
    $ratingPlayer = $_POST["ratingPlayer"];
    echo $ratingPlayer;
    // players
    $pacePlayer = $_POST["pacePlayer"]??null;
    echo $pacePlayer;
    $shootingPlayer = $_POST["shootingPlayer"]??null;
    echo $shootingPlayer;
    $passingPlayer = $_POST["passingPlayer"]??null;
    echo $passingPlayer;
    $dribblingPlayer = $_POST["dribblingPlayer"]??null;
    echo $dribblingPlayer;
    $defendingPlayer = $_POST["defendingPlayer"]??null;
    echo $defendingPlayer;
    $physicalPlayer = $_POST["physicalPlayer"]??null;
    echo $physicalPlayer;
    
    // // GK
    echo "GK";
    $divingGk = $_POST["divingGk"]??null;
    echo $divingGk;
    $handingGk = $_POST["handingGk"]??null;
    echo $handingGk;
    $kickingGk = $_POST["kickingGk"]??null;
    echo $kickingGk;
    $reflexeGk = $_POST["reflexeGk"]??null;
    echo $reflexeGk;
    $speedGk = $_POST["speedGk"]??null;
    echo $speedGk;
    $ratingGk = $_POST["ratingGk"]??null;
    echo $ratingGk;
    $positioningGk = $_POST["positioningGk"]??null;
    
    
    if ($positionPlayer == "GK") {
        echo "GK";
        
        if ($divingGk && $handingGk && $kickingGk && $reflexeGk && $speedGk && $positioningGk) {
            $queryphi = "INSERT INTO phisique_gk (diving, handling, kicking, reflexes, speed, positioning) VALUES ('$divingGk', '$handingGk', '$kickingGk', '$reflexeGk', '$speedGk', '$positioningGk')";
            $requetphi = mysqli_query($conn, $queryphi);
            $idgk = mysqli_insert_id($conn);
            echo $idgk;
            $query = "INSERT INTO players (fullName, imgPlayer, position,rating,id_nationality,id_Club,id_phisiquePlayers,id_phisiqueGK) VALUES ('$namePlayer', '$imgPlayer', '$positionPlayer', '$ratingPlayer', '$nationality', '$nameClub',null,'$idgk')"; 
            $requet = mysqli_query($conn, $query);
            if ($requet && $requetphi) {
                header("location:../pages/Players.php");
                exit();
            } else {
                die("Error: " . mysqli_error($conn));
            }
      }
    }
     else {
       
        if ($pacePlayer && $shootingPlayer && $passingPlayer && $dribblingPlayer && $defendingPlayer && $physicalPlayer) {
            $queryphi = "INSERT INTO phisique_players (pace, shooting, passing, dribbling, defending, physical) VALUES ('$pacePlayer', '$shootingPlayer', '$passingPlayer', '$dribblingPlayer', '$defendingPlayer', '$physicalPlayer')";
            $requetphi = mysqli_query($conn, $queryphi);
            $idplayer = mysqli_insert_id($conn);
            $query = "INSERT INTO players (fullName, imgPlayer, position,rating,id_nationality,id_Club,id_phisiquePlayers,id_phisiqueGK) VALUES ('$namePlayer', '$imgPlayer', '$positionPlayer', '$ratingPlayer', '$nationality', '$nameClub','$idplayer', null)"; 
            $requet = mysqli_query($conn, $query);
           if ($requet && $requetphi) {
                header("location:../pages/Players.php");
                exit();
            } else {
                die("Error: " . mysqli_error($conn));
    
        }
    }
    }

}







?>


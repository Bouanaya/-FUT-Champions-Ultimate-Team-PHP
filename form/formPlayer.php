<?php
include "../conn/database.php";

$queryclub = "SELECT * FROM club";
$query = "SELECT * FROM nationality";
$requet = mysqli_query($conn, $query);
$requetclub = mysqli_query($conn, $queryclub);


if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $query = "
    SELECT players.id_Player, players.fullName, players.imgPlayer, players.position, players.rating, 
           phisique_gk.diving, phisique_gk.handling, phisique_gk.kicking, phisique_gk.reflexes, phisique_gk.speed, phisique_gk.positioning, 
           phisique_players.pace, phisique_players.shooting, phisique_players.passing, phisique_players.dribbling, phisique_players.defending, phisique_players.physical, 
           Club.club AS nameClub, Club.logo, 
           Nationality.nationality, Nationality.flag
    FROM players
    LEFT JOIN phisique_gk ON players.id_phisiqueGK = phisique_gk.id_phisiqueGK
    LEFT JOIN phisique_players ON players.id_phisiquePlayers = phisique_players.id_phisiquePlayers
    JOIN Club ON players.id_Club = Club.id_Club
    JOIN Nationality ON players.id_nationality = Nationality.id_nationality
    where players.id_Player = '$id'
    ";

$requet = mysqli_query($conn, $query);
$requets = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($requets);
var_dump($row);
$position= $row['position'];
$clubname = $row['nameClub'] ;

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />

    <style>
        input:out-of-range{
            border: 1px solid red;
           
        }
    </style>
</head>

<body>
    <div class="h-screen w-full flex justify-center fixed bg-slate-800 ">
        <form class="form bg-slate-800 w-3/4 p-2 " id="form" method="POST" action="../players/update.php">
            <h1 class="text-white  md:text-3xl ">ENTER INFO</h1>
            <div class="mb-2">
                <label
                    for="namePlayer"
                    class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                <input
                    type="text"
                    id="namePlayer"
                    name="namePlayer"
                    value="<?php
                    if (isset($_GET['id'])) {
                        echo $row['fullName'];
                    } 
                    ?>"
                    class="name reset bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Full-Name" />

            </div>
            <div class="flex gap-3">
                <div class="mb-2 w-1/2">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="imgPlayer">Upload photo</label>
                    <input
                        class="url reset bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="imgPlayer"
                        name="imgPlayer"
                        type="text"
                        value="<?php
                        if(isset($_GET['id'])){
                            echo $row['imgPlayer'];}
                            else{
                                echo'';
                            }
                        
                        
                        ?>"
                        placeholder="enter your url imge" />
                </div>

                <div class="mb-2 w-1/2">
                    <label
                        for="Nationality"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                    <select
                        id="Nationality"
                        
                        name="nationality"
                        class="bg-gray-50 border px-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   <?php
               echo '<option selected  value="">'.$row['nationality'].'</option>';
                   if (isset($_GET['id'])) {
                    echo '<option  value="' . $row['id_nationality'] . '">'.$row['nationality'].'</option>';
                    while ($row = mysqli_fetch_assoc($requet)) {
                        echo "<option value='" . $row['id_nationality'] . "'>" . $row['nationality'] . "</option>";
                        ;
                   }
                }
                else{
                    echo '<option value="">select position</option>';
                    while ($row = mysqli_fetch_assoc($requet)) {
                        echo "<option value='" . $row['id_nationality'] . "'>" . $row['nationality'] . "</option>";
                    }
                }
                      
                        ?>

                    </select>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="mb-2 w-1/2">
                    <label
                        for="positionPlayer"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <select
                        name="positionPlayer"
                        id="positionPlayer"
                     
                        
                        class="select bg-gray-50 border px-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="
                    <?php
                     if (isset($_GET['id'])) {
                        echo $position;
                     }
                     ?>">

<?php
                     if (isset($_GET['id'])) {
                        echo $position;
                     }
                     ?>
                     
                    </option>
                        
                  
                        <option value="lW">lW</option>
                        <option value="ST">ST</option>
                        <option value="RW">RW</option>
                        <option value="CM">CM</option>
                        <option value="LB">LB</option>
                        <option value="CB">CB</option>
                        <option value="RB">RB</option>
                        <option value="GK">GK</option>
                    </select>
                </div>

                <div class="mb-2 w-1/2">
                    <label
                        for="nameClub"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NameClub</label>
                    <select
                        id="nameClub"
                        name="nameClub"
                        class=" bg-gray-50 border px-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <?php
                        echo '<option value="">select club</option> ';
                     
                        while (
                            $row = mysqli_fetch_assoc($requetclub)
                        ) {
                            echo '<option value="' . $row['id_Club'] . '">' . $row['club'] . '</option>';
                        }
                      
                        ?>
                    </select>
                </div>
            </div>
            <div class="player">
                <!-- /////player/// -->
                <div class="formPlay  ">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="mb-2">
                            <label
                                for="ratingPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating:</label>
                            <input
                                type="number"
                                id="ratingPlayer"
                                name="ratingPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                value="<?php
                                if (isset($_GET['id'])) {
                                    echo $row['rating'];
                                }
                                ?>"
                                min="10"
                                max="99" />
                        </div>

                        <div class="mb-2">
                            <label
                                for="pacePlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pace:</label>
                            <input
                                type="number"
                                id="pacePlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number pacePlayer bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                value="
                                <?php
                                if (isset($_GET['id'])) {
                                    echo $row['pace'];
                                }
                                ?>
                                
                                "
                                name="pacePlayer" />
                        </div>

                        <div class="mb-2">
                            <label
                                for="shootingPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shooting:</label>
                            <input
                                type="number"
                                id="shootingPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                name="shootingPlayer" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="mb-2">
                            <label
                                for="passingPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">passing:</label>
                            <input
                                type="number"
                                id="passingPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                name="passingPlayer"
                                min="10"
                                max="99" />
                        </div>
                        <div class="mb-2">
                            <label
                                for="dribblingPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">dribbling:</label>
                            <input
                                type="number"
                                id="dribblingPlayer"
                                name="dribblingPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="mb-2">
                            <label
                                for="defendingPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">defending:</label>
                            <input
                                type="number"
                                id="defendingPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                name="defendingPlayer" />
                        </div>
                        <div class="mb-2">
                            <label
                                for="physicalPlayer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">physical:</label>
                            <input
                                type="number"
                                id="physicalPlayer"
                                aria-describedby="helper-text-explanation"
                                class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                name="physicalPlayer" />
                        </div>
                    </div>
                </div>

                <!-- ////////form GK////// -->
                <div class="formGK hidden ">
                    <div class="grid grid-cols-3 gap-2 ">
                        <div class="mb-2">
                            <label
                                for="DivingGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diving:</label>
                            <input
                                type="number"
                                id="divingGk"
                                name="divingGk"
                                aria-describedby="helper-text-explanation"
                                class="numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                value="
                                <?php
                                if(isset($_GET['id'])){
                                    echo $row['diving'];
                                }
                                
                                
                                ?>
                                
                                "
                                min="10"
                                max="99" />
                        </div>

                        <div class="mb-2">
                            <label
                                for="HandlingGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handling:</label>
                            <input
                                type="number"
                                name="handingGk"
                                id="handingGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99" />
                        </div>

                        <div class="mb-2">
                            <label
                                for="KickingGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kicking:</label>
                            <input
                                type="number"
                                id="kickingGk"
                                name="kickingGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="mb-2">
                            <label
                                for="ReflexeGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reflexe:</label>
                            <input
                                type="number"
                                id="reflexeGk"
                                name="reflexeGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99"
                                min="10"
                                max="99" />
                        </div>
                        <div class="mb-2">
                            <label
                                for="SpeedGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Speed:</label>
                            <input
                                type="number"
                                id="speedGk"
                                name="speedGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="mb-2">
                            <label
                                for="ratingGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating:</label>
                            <input
                                type="number"
                                id="ratingGk"
                                name="ratingGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="0-99" />
                        </div>
                        <div class="mb-2">
                            <label
                                for="PositioningGk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Positioning:</label>
                            <input
                                type="number"
                                id="positioningGk"
                                name="positioningGk"
                                aria-describedby="helper-text-explanation"
                                class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="10-99" />
                        </div>
                    </div>
                </div>
                <button
                    type="submit"
                    id="submitButton"
                    name="submit"
                    class="text-white bg-gradient-to-r  from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    <?php
                    if(isset($_GET['id'])){
                        echo "Update";}
                    else{
                        echo "Submit";
                    }
                
                    
                    
                
                    ?>
                </button>

        </form>

    </div>

    <script>
        const select = document.querySelector(".select")
        const formPlay = document.querySelector(".formPlay")
        const formGK = document.querySelector(".formGK")

        select.addEventListener("change", () => {
            if (select.value == "GK") {
                formPlay.classList.add('hidden')
                formGK.classList.remove("hidden")
            } else {
                formPlay.classList.remove('hidden')
                formGK.classList.add("hidden")
            }
        })
    </script>
</body>

</html>
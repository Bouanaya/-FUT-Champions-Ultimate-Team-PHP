<?php

include "../conn/database.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
  

    $query = "SELECT * FROM club WHERE id_Club = '$id'";
    $requet = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($requet);
    $club = trim($row['club']);
    $logo = trim($row['logo']);
    # code...
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-slate-500 ">
        <form class="w-1/2 p-8 bg-slate-800 rounded-xl formclub" action="../club/create.php?<?php
        if (isset($_GET['id'])) {
            echo "id=update"; 
        }
        ?>" method="post">
            <div class="">
                <div class="mb-4">
                    <label for="clubName" class="block text-white font-bold mb-2">Club Name:</label>
                    <input type="text" id="clubName" placeholder="Enter Name club" value="<?php if(isset($_GET["id"])) {echo $club;}?>" name="clubName" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {
                        echo $_GET["id"];
                    }else{
                        echo '';
                    }?>">
                    <label for="clubLogo" class="block text-white font-bold mb-2">Club Logo:</label>
                    <input type="text" id="clubLogo" placeholder="Enter Url Logo"  name="clubLogo" value="<?php if(isset($_GET["id"])){echo $logo;}?>"
             class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        <?php
                        if (isset($_GET['id'])) {
                            echo "Update";
                        } else {
                            echo "Submit";
                        }

                        ?>
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
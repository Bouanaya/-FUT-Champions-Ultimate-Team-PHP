<?php
include "../conn/database.php";
if (isset($_GET["id"])) {
$id = $_GET["id"];

    $query = "SELECT * FROM nationality WHERE id_nationality = '$id' ";
    $requet = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($requet);
    $nationality = $row["nationality"] ; 
    $flag = $row["flag"] ; 
    
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
    <form class="p-8 bg-slate-800 formnationality w-1/2 rounded-lg  flex justify-center " method="POST" action="../nationality/ajoute.php">
                            <div class="w-full">
                            <div class="mb-4  ">
                                <label for="nationality" class="block text-white font-bold mb-2">Nationality:</label>
                                <input type="text" id="nationality" name="nationality" placeholder="Enter Nationality " value="<?php if (isset($_GET["id"])) {echo $nationality ;}?>" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="mb-4 ">
                            <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {
                        echo $_GET["id"];
                    }else{
                        echo '';
                    }?>">
                                <label for="flag" class="block text-white font-bold mb-2">Flag:</label>
                                <input type="text" id="flag" name="flag" placeholder="Enter Url Flag" value="<?php if (isset($_GET["id"])) {echo $flag ;}?>" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <div class="">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600"><?php
                                if (isset($_GET["id"])) {
                                    echo "update"; 
                                }
                                else{
                                    echo "submit";
                                }
                                
                                
                                ?></button>
                            </div>
                            </div>
                        </form>
    </div>
    
</body>
</html>
<?php
include "../conn/database.php"
 





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
    <div class="fixed w-screen h-screen">
        <div class="grid grid-cols-6 relative  ">

            <div class=" col-span-1 col-start-1  h-screen">
                <div class="h-full bg-[#111a27] text-white">
                    <h1 class="py-6 px-2">BOUANAYA SOUFIANE</h1>
                    <ul class="mt-8 flex flex-col gap-2">
                        <li class="px-2 py-4 active bg-blue-400"><a href="./Players.php"><button class="px-3">Players</button></a></li>
                        <li class="px-2  bg-blue-400 py-4"><a href="./clubs.php"><button class="px-3">Club</button></a></li>
                        <li class="px-2  bg-blue-700 py-4"><a href="./nationality.php"><button class="px-3">Nationality</button></a></li>
                        <li class="px-2  bg-blue-400 py-4"><a href="../index.php"><button class="px-3">Login out</button></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-span-5 col-start-2  relative h-screen">
                <!-- ////////////////////////////////form//////////////////////////////// -->

                <div class="h-full w-full">
                    <div class="h-[15%] w-full bg-black px-8">
                        <div class="flex justify-between items-center h-full">
                            <h1 class="text-4xl text-white">Nationality</h1>
                            <a href="../form/formnationality.php"><button class=" bg-blue-400 px-4 py-2 rounded-lg newnationality">new Nationality</button></a>
                           
                        </div>


                    </div>
                    <div class=" h-[85%] overflow-y-auto relative ">
                        <div class="tablenationality relative w-full h-full">
    <div class="relative overflow-x-auto shadow-md bg-slate-700 h-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-black uppercase bg-white w-full sticky top-0 z-10">
                <tr>
                    <th scope="col" class="px-6 py-3">
                    id_nationality
                    </th>
                    <th scope="col" class="px-6 py-3">
                    nationality
                    </th>
                    <th scope="col" class="px-6 py-3">
                    flag
                    </th>
                    <th scope="col" class="px-6 py-3">
                        function
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                <?php
                include "../conn/database.php";
                $qeury = "SELECT * FROM nationality";
                $requet = mysqli_query($conn , $qeury);
                while ($row = mysqli_fetch_assoc($requet)) {
                    echo '<tr class=" border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">';
                    echo '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">';
                    echo ($row['id_nationality']);
                    echo '</th>';
                    echo '<td class="px-6 py-4">';
                    echo ($row['nationality']);
                    echo '</td>';
                    echo '<td class="px-6 py-4">';
                    echo '<img src="' .($row['flag']) . '" alt="Club Logo" class="h-10 w-10 object-contain">';
                    echo '</td>';
                    echo '<td class="flex mt-3 gap-2 h-full px-2 py-4">';
                    echo '<a href="../form/formnationality.php?id='.($row['id_nationality']) . '" class="text-blue-500 font-bold">UPDATE</a>';
                    echo '<a href="../nationality/delate.php?id='.($row['id_nationality']) . '" class="text-red-500 font-bold">DELETE</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
                    </div>

                    </div>



                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- <script src="../assets/js/nationnality.js"></script> -->
</body>

</html>
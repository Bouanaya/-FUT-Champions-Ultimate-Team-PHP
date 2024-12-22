<?php

include "../conn/database.php";
if (isset($_POST["submit"])) {








}
    


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

 <body class="relative bg-slate-700">
   <div class="fixed w-screen h-screen">
     <div class="grid grid-cols-6 relative">
       <div class=" col-span-1 col-start-1  h-screen">
         <div class="h-full bg-[#111a27] text-white">
           <h1 class="py-6 px-2">BOUANAYA SOUFIANE</h1>
           <ul class="mt-8 flex flex-col gap-2">
             <li class="px-2 py-4 active bg-blue-700 "><a href="./Players.php"><button class="px-3">Players</button></a></li>
             <li class="px-2  bg-blue-400 py-4"><a href="./clubs.php"><button class="px-3">Club</button></a></li>
             <li class="px-2 bg-blue-400 py-4"><a href="./nationality.php"><button class="px-3">Nationality</button></a></li>
             <li class="px-2  bg-blue-400 py-4"><a href="../index.php"><button class="px-3">Login out</button></a></li>

           </ul>
         </div>
       </div>
       <div class="col-span-5 col-start-2  relative h-screen">
         <!-- ////////////////////////////////form//////////////////////////////// -->

         <div class="h-full w-full">
           <div class="h-[15%] w-full bg-black px-8">
             <div class="flex justify-between items-center h-full">
               <h1 class="text-4xl text-white">PLAYERS</h1>
               <a href="../form/formPlayer.php">
               <button class=" bg-blue-400 px-4 py-2 rounded-lg ajou">new PLAYERS</button>
               </a>
             </div>


           </div>
           <div class="h-[85%] overflow-y-auto relative ">
           <div class=" h-full bg-slate-700 w-full    ">
            <div class="mb-3 card">
              <div class=" grid grid-cols-3 ">
                <div class="bg-red-400  p-4">
                  <div class="flex justify-between  ">
                    <div class="">
                      <div class="w-20 h-20"><img  src="../assets/imgs/united-nations.png"   alt=""></div>
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="font-bold text-3xl">Nationality</div>
                      <div class="text-4xl text-right"><?php
                      $query= "SELECT COUNT(*) FROM nationality";
                      $requet = mysqli_query($conn, $query);
                      $count = mysqli_fetch_assoc($requet);
                      echo $count['COUNT(*)'];


                      
                      ?></div>
                    </div>
                  </div>
                  <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="bg-green-300 p-4">
                <div class="flex justify-between  ">
                    <div class="">
                      <div class="w-20 h-20"><img  src="../assets/imgs/ball.png"   alt=""></div>
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="font-bold text-3xl">Club</div>
                      <div class="text-4xl text-right">
                        <?php
                        $query = "SELECT COUNT(*) FROM Club";
                        $requet = mysqli_query($conn, $query);
                        $count = mysqli_fetch_assoc($requet);
                        echo $count['COUNT(*)'];
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="divider m-0 d-md-none d-sm-block"></div>
                </div>
                <div class="bg-blue-400 p-4">
                <div class="flex justify-between  ">
                    <div class="">
                      <div class="w-20 h-20"><img  src="../assets/imgs/group.png"   alt=""></div>
                    </div>
                    <div class="flex flex-col justify-center">
                      <div class="font-bold text-3xl">PLAYERS</div>
                      <div class="text-4xl text-right"><?php 
                      $query = "SELECT COUNT(*) FROM players";
                      $requet = mysqli_query($conn, $query);
                      $count = mysqli_fetch_assoc($requet);
                      echo $count['COUNT(*)'];
                      
                      
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
             <div class="tables absolute  w-full z-0  h-full">
               <div class="relative overflow-x-auto shadow-md  overscroll-y-auto ">
                 <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                   <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                       <th scope="col" class="px-2 py-3">
                         id
                       </th>
                       <th scope="col" class="px-2 py-3">
                         fullName
                       </th>
                       <th scope="col" class="px-2 py-3">
                         Photo
                       </th>
                       <th scope="col" class="px-2 py-3">
                         position
                       </th>
                       <th scope="col" class="px-2 py-3">
                       nationality
                       </th>
                       <th scope="col" class="px-2 py-3">
                       flag
                       </th>
                       <th scope="col" class="px-2 py-3">
                         club
                       </th>
                       <th scope="col" class="px-2 py-3">
                         logo
                       </th>
                       <th scope="col" class="px-2 py-3">
                         rating
                       </th>
                       <th scope="col" class="px-2 py-3">
                         pace-diving
                       </th>
                       <th scope="col" class="px-2 py-3">
                         shoting-handling
                       </th>
                       <th scope="col" class="px-2 py-3">
                         passing-kiking
                       </th>
                       <th scope="col" class="px-2 py-3">
                         dripling-reflexes
                       </th>
                       <th scope="col" class="px-2 py-3">
                         defending-speed
                       </th>
                       <th scope="col" class="px-2 py-3">
                         physical-positioning
                       </th>
                       <th scope="col" class="px-2 py-3">
                        fuction
                       </th>
                     </tr>
                   </thead>
                   <tbody>
    <?php
    include "../conn/database.php";

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
    ";

    $requet = mysqli_query($conn, $query);
    if (!$requet) {
        die("Error: " . mysqli_error($conn));
    }

    while ($player = mysqli_fetch_assoc($requet)): ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $player['id_Player'] ?>
            </th>
            <td class="px-2 py-4 ">
                <?= $player['fullName'] ?>
            </td>
            <td class="px-2 py-4">
                <img src="<?= $player['imgPlayer'] ?>" alt="">
            </td>
            <td class="px-2 py-4">
                <?= $player['position'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['nationality'] ?>
            </td>
            <td class="px-2 py-4">
                <img src="<?= $player['flag'] ?>" alt="">
            </td>
            <td class="px-2 py-4">
                <?= $player['nameClub'] ?>
            </td>
            <td class="px-2 py-4">
                <img src="<?= $player['logo'] ?>" alt="">
            </td>
            <td class="px-2 py-4">
                <?= $player['rating'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['pace'] ?? $player['diving'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['shooting'] ?? $player['handling'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['passing'] ?? $player['kicking'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['dribbling'] ?? $player['reflexes'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['defending'] ?? $player['speed'] ?>
            </td>
            <td class="px-2 py-4">
                <?= $player['physical'] ?? $player['positioning'] ?>
            </td>
            <td class="flex mt-3 gap-2 h-full px-2 py-4">
              
              

                <a href="../form/formPlayer.php?id=<?=
                $player['id_Player']
                
                ?>" class="text-blue-500 font-bold"  >AJOUTE</a>
                <a href="../players/delete.php?id=<?= $player['id_Player'] ?>
                
                
                " class="text-red-500 font-bold">DELATE</a>
            </td>
        </tr>
    <?php endwhile; ?>
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
   </div>
   <!-- <script src="../assets/js/app.js"></script> -->
 </body>

 </html>
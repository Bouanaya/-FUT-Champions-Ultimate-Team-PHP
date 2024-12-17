<?php


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

 <body class="relative">
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
               <button class=" bg-blue-400 px-4 py-2 rounded-lg ajou">new PLAYERS</button>
             </div>


           </div>
           <div class="h-[85%] overflow-y-auto relative ">
             <div class=" h-full  w-full  justify-center   ">
               <form class="form w-full bg-slate-800 hidden  p-2 " id="form">
                 <h1 class="text-white  md:text-3xl ">ENTER INFO</h1>
                 <div class="mb-2">
                   <label
                     for="namePlayer"
                     class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                   <input
                     type="text"
                     id="namePlayer"
                     class="name reset bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     placeholder="Full-Name"
                     required />

                 </div>
                 <div class="flex gap-3">
                   <div class="mb-2 w-1/2">
                     <label
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                       for="imgPlayer">Upload photo</label>
                     <input
                       class="url reset bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       id="imgPlayer"
                       type="text"
                       placeholder="enter your url imge" />
                   </div>
                   <div class="mb-2 w-1/2 ">
                     <label
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                       for="logoPlayer">Upload logo</label>
                     <input
                       class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       id="logoPlayer"
                       type="text"
                       placeholder="enter your url logo " />
                   </div>
                 </div>
                 <div class="flex gap-3">
                   <div class="mb-2 w-1/2">
                     <label
                       for="positionPlayer"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                     <select
                       id="positionPlayer"
                       class="select bg-gray-50 border px-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       <option value="">select position</option>
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
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white "
                       for="flagPlayer">Upload flag</label>
                     <input
                       class=" reset url bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       id="flagPlayer"
                       type="text"
                       placeholder="enter your url flag" />
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
                           aria-describedby="helper-text-explanation"
                           class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           min="10"
                           max="99"
                           required />
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
                           required />
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
                           required />
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
                           min="10"
                           max="99"
                           required />
                       </div>
                       <div class="mb-2">
                         <label
                           for="dribblingPlayer"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">dribbling:</label>
                         <input
                           type="number"
                           id="dribblingPlayer"
                           aria-describedby="helper-text-explanation"
                           class="reset number bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           required />
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
                           required />
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
                           required />
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
                           aria-describedby="helper-text-explanation"
                           class="numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           min="10"
                           max="99"
                           required />
                       </div>

                       <div class="mb-2">
                         <label
                           for="HandlingGk"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handling:</label>
                         <input
                           type="number"
                           id="handingGk"
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           required />
                       </div>

                       <div class="mb-2">
                         <label
                           for="KickingGk"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kicking:</label>
                         <input
                           type="number"
                           id="kickingGk"
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           required />
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
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           min="10"
                           max="99"
                           required />
                       </div>
                       <div class="mb-2">
                         <label
                           for="SpeedGk"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                           Speed:</label>
                         <input
                           type="number"
                           id="speedGk"
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           required />
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
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="0-99"
                           required />
                       </div>
                       <div class="mb-2">
                         <label
                           for="PositioningGk"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Positioning:</label>
                         <input
                           type="number"
                           id="positioningGk"
                           aria-describedby="helper-text-explanation"
                           class="reset numbergk bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="10-99"
                           required />
                       </div>
                     </div>
                   </div>

                   <button
                     type="button"
                     id="submitButton"
                     class="text-white bg-gradient-to-r  from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                     submit
                   </button>

               </form>
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
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                       <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         001
                       </th>
                       <td class="px-2 py-4 ">
                       Lionel Messi
                       </td>
                       <td class="px-2 py-4">
                        <img src="https://cdn.sofifa.net/players/158/023/25_120.png" alt="">
                       </td>
                       <td class="px-2 py-4">
                       RW
                       </td>
                       <td class="px-2 py-4">
                       Argentina
                       </td>
                       <td class="px-2 py-4">
                         <img src="https://cdn.sofifa.net/flags/ar.png" alt="">
                       </td>
                       <td class="px-2 py-4">
                       Inter Miami
                       </td>
                       <td class="px-2 py-4">
                       <img src="https://cdn.sofifa.net/meta/team/239235/120.png" alt="">
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="px-2 py-4">
                       93
                       </td>
                       <td class="flex  mt-3 gap-2 h-full  px-2 py-4 ">
                         <button class="text-blue-500 font-bold"  >AJOUTE</button>
                        <button class="text-red-500 font-bold">DELATE</button>
                       </td>
                     
                     </tr>

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
   <script src="../assets/js/app.js"></script>
 </body>

 </html>
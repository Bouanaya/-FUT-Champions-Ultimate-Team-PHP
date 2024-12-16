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
                     <ul class="mt-10 flex flex-col gap-2">
                         <li class="px-2 py-4 active bg-blue-400 "><a href="./Players.php"><button class="px-3">Players</button></a></li>
                         <li class="px-2  bg-blue-700 py-4"><a href="./clubs.php"><button class="px-3">Club</button></a></li>
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
                             <h1 class="text-4xl text-white">CLUB</h1>
                             <button class=" bg-blue-400 px-4 py-2 rounded-lg ajoute">new Club</button>
                         </div>


                     </div>
                     <div class=" h-[85%] overflow-y-auto relative">
                         <div class="tables absolute w-full hidden  h-full">
                             <div class="relative  hidden overflow-x-auto shadow-md  overscroll-y-auto ">
                                 <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                         <tr>
                                             <th scope="col" class="p-4">
                                                 <div class="flex items-center">
                                                     <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                     <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                 </div>
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Product name
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Color
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Category
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Accessories
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Available
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Price
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Weight
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Action
                                             </th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                             <td class="w-4 p-4">
                                                 <div class="flex items-center">
                                                     <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                     <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                 </div>
                                             </td>
                                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                 Apple MacBook Pro 17"
                                             </th>
                                             <td class="px-6 py-4">
                                                 Silver
                                             </td>
                                             <td class="px-6 py-4">
                                                 Laptop
                                             </td>
                                             <td class="px-6 py-4">
                                                 Yes
                                             </td>
                                             <td class="px-6 py-4">
                                                 Yes
                                             </td>
                                             <td class="px-6 py-4">
                                                 $2999
                                             </td>
                                             <td class="px-6 py-4">
                                                 3.0 lb.
                                             </td>
                                             <td class="flex items-center px-6 py-4">
                                                 <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                 <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                             </td>
                                         </tr>

                                     </tbody>
                                 </table>
                             </div>
                             <div class="relative overflow-x-auto shadow-md  overscroll-y-auto ">
                                 <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                         <tr>
                                             <th scope="col" class="p-4">
                                                
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 CONTRY
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Color
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Category
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Accessories
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Available
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Price
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Weight
                                             </th>
                                             <th scope="col" class="px-6 py-3">
                                                 Action
                                             </th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                             <td class="w-4 p-4">
                                             </td>
                                             <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                 Apple MacBook Pro 17"
                                             </th>
                                             <td class="px-6 py-4">
                                                 Silver
                                             </td>
                                             <td class="px-6 py-4">
                                                 Laptop
                                             </td>
                                             <td class="px-6 py-4">
                                                 Yes
                                             </td>
                                             <td class="px-6 py-4">
                                                 Yes
                                             </td>
                                             <td class="px-6 py-4">
                                                 $2999
                                             </td>
                                             <td class="px-6 py-4">
                                                 3.0 lb.
                                             </td>
                                             <td class="flex items-center px-6 py-4">
                                                 <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                 <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
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
     <script src="../assets/js/app.js"></script>
 </body>

 </html>
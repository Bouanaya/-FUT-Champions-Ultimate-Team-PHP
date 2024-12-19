<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>  
     <link rel="stylesheet" href="style.css" />
</head>
<body >
<div class=" h-screen w-full flex justify-center  bg-slate-800   ">
               <form class="form bg-slate-800 w-3/4 p-2 " id="form">
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
</body>
</html>
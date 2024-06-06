<x-guest-layout>

  <main class="flex">
    <div class="bg-zinc-800 w-64 h-screen flex flex-col items-center text-center">
      <div class="mt-8 w-20 h-20 rounded-full bg-white"></div>
      <div class="mt-2 text-white">nom d'utilisateur</div>
      <div class="text-white">admin/super-admin</div>

      <div class="mt-12 h-screen flex-col text-white">
        <div class="bg-red-900 px-8 py-2 rounded-md uppercase mb-6 w-48">
          <a href="index.html">manage access</a>
        </div>
        <div class=" bg-red-900 px-8 py-2 rounded-md uppercase mb-6 w-48">
          <a href="">main page</a>
        </div>
        <div class="bg-red-900 px-8 py-2 rounded-md uppercase w-48">
          <a href="page2.html">game list page</a>
        </div>
      </div>
    </div>

    <div class="w-screen h-screen bg-gradient-to-b from-zinc-600 via-zinc-700 to-zinc-800">
            <div class="w-full flex justify-center"> 
                <p class=" mt-8 bg-green-600 text-white px-4 py-1 rounded-md w-28 flex justify-center">Valider</p>
            </div>

            <div>
                <div class="bg-gray-200 flex items-center gap-11 w-4/5 mx-auto mt-6 px-2 py-1 rounded-md">
                    <div class="h-8 w-8 rounded-full bg-orange-600"></div>
                    <div class=" w-64"> Nom : <input type="text" value="GUNSLINGER" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class=""> Chemin/nom de l'image : <input type="text" value="Super admin" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class="bg-red-800 px-4 py-1 ml-auto rounded-md text-white">del</div>
                </div>

                <div class="bg-gray-200 flex items-center gap-11 w-4/5 mx-auto mt-6 px-2 py-1 rounded-md">
                    <div class="h-8 w-8 rounded-full bg-red-600"></div>
                    <div class=" w-64"> Nom : <input type="text" value="GUNSLINGER 2" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class=""> Chemin/nom de l'image : <input type="text" value="Admin" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class="bg-red-800 px-4 py-1 ml-auto rounded-md text-white">del</div>
                </div>

                <div class="bg-gray-200 flex items-center gap-11 w-4/5 mx-auto mt-6 px-2 py-1 rounded-md">
                    <div class="h-8 w-8 rounded-full bg-red-600"></div>
                    <div class=" w-64"> Nom : <input type="text" value="GUNSLINGER 3" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class=""> Chemin/nom de l'image : <input type="text" value="Admin" class=" h-6"></div>
                    <p class="bg-green-600 px-4 py-1 rounded-md text-white" href="">Edit</p>

                    <div class="bg-red-800 px-4 py-1 ml-auto rounded-md text-white">del</div>
                </div>
            </div>
    </div>
  </main>

</x-guest-layout>
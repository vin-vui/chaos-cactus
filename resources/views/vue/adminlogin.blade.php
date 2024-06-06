<x-guest-layout>

    <main>
        <div class=" bg-gradient-to-b from-zinc-600 via-zinc-700 to-zinc-800 w-full h-screen flex justify-center">
            <div class=" border border-red-800 h-80 w-80 mt-20">
                <h1 class="bg-red-800 flex justify-center text-white py-2">Connection Admin</h1>
                <form class="flex flex-col items-center">
                    <P class="text-white mt-6 mb-2">Nom d'utilisateur :</P>
                    <input class="input h-7 w-60" type="text" id="username" name="username" autocomplete="off" required>
                    <P class="text-white mt-6 mb-2">Mot de passe :</P>
                    <input class="input h-7 w-60" type="password" id="password" name="password" autocomplete="off" required>
                    <button type="submit" name="register" class="text-white mt-9 bg-red-800 py-2 px-14 border rounded-md border-red-800">Connection</button>
                </form>
            </div>
        </div>
    </main>

</x-guest-layout>
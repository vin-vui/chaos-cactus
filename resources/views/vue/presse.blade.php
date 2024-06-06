<x-guest-layout>
    <main>
        <div class="w-full h-[60vh] bg-press bg-no-repeat bg-cover bg-right  flex justify-center ">
            <div class="text-white flex flex-col items-center ">
                <p class="mb-8 mx-8 mt-14 text-5xl">THANK YOU FOR REACHING OUT TO US!</p>
                <hr class="w-[100vh]">
                <p class="m-8 text-xl w-[80vh] text-center">Please use the form below to get into contact with us. We also recommend checking out our Press Kit, which includes more media, logos, and fact sheets than you can shake a stick at.</p>
                <button class="bg-red-700 text-white px-4 py-2 rounded-md mt-4 hover:bg-red-800">DOWNLOAD PRESS KIT</button>
            </div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10 border-t-8 border-red-800 box-border  w-[95vh] text-left mt-[45vh] h-auto"
                style="background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.75) 10%, rgba(0,0,0,0.5) 25%, rgba(0,0,0,0.25) 50%, rgba(0,0,0,0.1) 75%, rgba(0,0,0,0) 100%);">
                <form class="flex flex-col">
                    <h2 class=" text-white font-bold mb-4 flex justify-center text-5xl">CONTACT</h2>
                    <input type="text" id="name" name="name" placeholder="Name" required
                        class="mt-10 p-2 text-lg rounded border border-gray-400">
                    <input type="email" id="email" name="email" placeholder="Email" required
                        class="mt-10 p-2 text-lg rounded border border-gray-400">
                    <input type="text" id="media" name="media" placeholder="Media You Are Representing" required
                        class="mt-10 p-2 text-lg rounded border border-gray-400">
                    <select id="press-type" name="press-type" required
                        class="mt-10 p-2 text-lg rounded border border-gray-400">
                        <option value="" disabled selected>Type of Press</option>
                        <option value="creator">Content Creator (e.g. YouTube, Twitch, etc.)</option>
                        <option value="curator">Steam Curator</option>
                        <option value="broadcast">Magazine (e.g. PC Gamer, Game Informer, etc.)</option>
                        <option value="other">Other</option>
                    </select>
                    <textarea id="message" name="message" rows="4" placeholder="Message" required
                        class="mt-10 p-2 text-lg rounded border border-gray-400"></textarea>
                    <button type="submit"
                        class="mt-10 bg-red-800 text-white p-2 rounded cursor-pointer hover:bg-red-700">Send
                        Message</button>
                </form>
            </div>
        </div>

        <div class="w-full h-[70vh] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\woodred.png')] bg-no-repeat bg-cover bg-right  flex justify-center items-center">
         
        </div>
    </main>
</x-guest-layout>

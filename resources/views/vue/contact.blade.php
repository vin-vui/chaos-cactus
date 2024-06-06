<x-guest-layout>

    <main>


        <div class="w-full h-96 bg-press bg-no-repeat bg-cover bg-right  flex justify-center items-center">
            <div class="text-white flex flex-col items-center  gap-4 absolute top-[9rem]">
                <p class="text-3xl">Get in touch</p>
                <p class="w-96">You are always more than welcome to send us an email if you have any questions. 
                    We will do our best to respond as soon as possible.</p>
            </div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10 border-t-4 border-red-700 box-border w-4/5 max-w-lg text-left mt-40 flex-1/2"
                style="background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.75) 10%, rgba(0,0,0,0.5) 25%, rgba(0,0,0,0.25) 50%, rgba(0,0,0,0.1) 75%, rgba(0,0,0,0) 100%);">
                <form class="flex flex-col">
                    <h2 class="text-xl text-white font-bold mb-4 flex justify-center">Contact Form</h2>
                    <input type="text" id="name" name="name" placeholder="Request type" required
                        class="mt-3 mb-3 p-2 text-lg rounded border border-gray-400">
                    <input type="email" id="email" name="email" placeholder="Email" required
                        class="mt-3 mb-3 p-2 text-lg rounded border border-gray-400">
                    <textarea id="message" name="message" rows="4" placeholder="Message" required
                        class="mt-3 mb-3 p-2 h-52 text-lg rounded border border-gray-400"></textarea>
                    <button type="submit"
                        class="mt-5 bg-red-700 text-white p-2 rounded cursor-pointer hover:bg-red-800">Send Message</button>
                </form>
            </div>
        </div>

        <div class="w-full h-[70vh] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\woodred.png')] bg-no-repeat bg-cover bg-right  flex justify-center items-center">

        </div>


    </main>
</x-guest-layout>
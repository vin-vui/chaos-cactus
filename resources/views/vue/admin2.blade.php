<x-guest-layout>
    <main>
        <div class="w-full h-screen bg-press bg-no-repeat bg-cover bg-right flex justify-center items-center relative">
            <div class="flex justify-center items-center w-full h-full absolute">
                <div class="p-10 rounded-xl box-border w-4/5 max-w-lg text-left flex flex-col items-center"
                    style="background-color: #991B1B">
                    <img src="\images\Ressource_perso\logo-studio\logo-chaos-cactus-SIMPLE.png" alt="" class=" size-36 absolute top-48">



                    <form method="POST" action="{{ route('login') }}" class="flex flex-col w-full">
                        @csrf
                        <h2 class="text-xl text-white font-bold mb-4 flex justify-center pt-8">ADMIN ACCESS</h2>

                        <x-label for="email" value="{{ __('Email') }}" class="text-white"/>
                        <x-input type="email" id="email" name="email" placeholder="Email"  required :value="old('email')" required autofocus autocomplete="username" 
                            class="mt-3 mb-3 p-2 text-lg rounded border border-gray-100 outline-style-none"/>

                        <x-label for="password" value="{{ __('Password') }}" class="text-white" />
                        <x-input type="password" id="password" name="password" placeholder="Password" required required autocomplete="current-password" 
                            class="mt-3 mb-3 p-2 text-lg rounded border border-gray-400"/>


                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-100 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                
                                <x-button class="ms-4">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        
                        
                    </form>
                </div>
               
               
            </div>
            
        </div>
        
    </main>
</x-guest-layout>

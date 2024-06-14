<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="flex ">
        <div class="bg-zinc-800 w-64 h-screen flex flex-col items-center text-center">
            <div class="mt-8  rounded-full bg-white"></div>
            <div class="mt-2 text-white">nom d'utilisateur</div>
            <div class="text-white">admin/super-admin</div>

            <div class="mt-12 h-screen flex-col text-white">
                <div class="bg-red-900 px-8 py-2 rounded-md uppercase mb-6 w-48">
                    <a href="{{route('dashboard')}}">manage access</a>
                </div>
                <div class=" bg-red-900 px-8 py-2 rounded-md uppercase mb-6 w-48">
                    <a href="{{route('adminmainedit.index')}}">main page</a>
                </div>
                <div class="bg-red-900 px-8 py-2 rounded-md uppercase w-48">
                    <a href="{{route('admingamelist.index')}}">game list page</a>
                </div>
            </div>
        </div>

        <div class="w-full bg-red-500">
            <div>
                <form action="{{ route('HomeController.upload') }}" method="post" enctype="multipart/form-data" class="mt-8">
                    @csrf
                    <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Choose Image:</label>
                    <input type="file" id="image" name="image" class="form-input" required>
                    </div>
                    <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload Image</button>
                    </div>
                </form>
            </div>



            <a href="{{ route('dashboard.videos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go To Video</a>



            
        </div>

    </main>


</x-app-layout>
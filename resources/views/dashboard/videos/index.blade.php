<x-app-layout>
    <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg">
        <div class="flex justify-between mb-8">
            <h1 class="text-3xl font-bold ">Videos List</h1>
            <p class="text-red-600 text-xl">la page principale ne récupère que la première vidéo de la liste!</p>
            <button onclick="goBack()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Go Back</button>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="mb-4 flex justify-center">
            <a href="{{ route('dashboard.videos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Video</a>
        </div>

        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Link</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody class="text-red-700">
                @foreach ($videos as $video)
                <tr>
                    <td class="text-left py-3 px-4">{{ $video->title }}</td>
                    <td class="text-left py-3 px-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ extractYouTubeId($video->youtube_link) }}" frameborder="0" allowfullscreen></iframe>
                    </td>
                    <td class="text-left py-3 px-4">
                        <a href="{{ route('dashboard.videos.edit', $video->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                        <form action="{{ route('dashboard.videos.destroy', $video->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            
            </tbody>
        </table>
    </div>

 <script>
    function goBack() {
        window.location.href = "{{ route('dashboard') }}";
    }
</script>

</x-app-layout>
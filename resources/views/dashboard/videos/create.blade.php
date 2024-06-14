<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-4">{{ isset($video) ? 'Edit Video' : 'Add New Video' }}</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($video) ? route('dashboard.videos.update', $video->id) : route('dashboard.videos.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            @if(isset($video))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ isset($video) ? $video->title : old('title') }}" class="border border-gray-300 rounded-md w-full px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">YouTube Link:</label>
                <input type="text" name="youtube_link" id="youtube_link" value="{{ isset($video) ? $video->youtube_link : old('youtube_link') }}" class="border border-gray-300 rounded-md w-full px-3 py-2">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ isset($video) ? 'Update' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</x-app-layout>

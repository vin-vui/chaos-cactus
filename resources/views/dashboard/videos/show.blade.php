<!DOCTYPE html>
<html>
<head>
    <title>Show Video</title>
</head>
<body>
    <h1>{{ $video->title }}</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ extractYouTubeId($video->youtube_link) }}" frameborder="0" allowfullscreen></iframe>
    <a href="{{ route('dashboard.videos.index') }}">Back to List</a>
</body>
</html>

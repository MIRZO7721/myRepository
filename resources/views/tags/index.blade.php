<!-- resources/views/tags/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Site</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-4">Список меток</h1>

    <ul class="list-group">
        @forelse ($tags as $tag)
            <li class="list-group-item">{{ $tag->name }}</li>
        @empty
            <li class="list-group-item">Нет меток</li>
        @endforelse
    </ul>
</div>
</body>
</html>

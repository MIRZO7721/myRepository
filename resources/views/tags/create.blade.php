<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить метку</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Добавить метку</h1>

    <form method="POST" action="{{ route('tags.store') }}">
        @csrf

        <label for="name">Название метки:</label>
        <input type="text" name="name" id="name" required>

        <br>

        <button type="submit">Добавить метку</button>
    </form>
</div>

</body>
</html>

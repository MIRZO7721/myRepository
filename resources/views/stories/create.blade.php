<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить историю</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Добавить историю</h1>

    <form method="POST" action="{{ route('stories.store') }}">
        @csrf

        <label for="title">Заголовок:</label>
        <input type="text" name="title" id="title" required>

        <br>

        <label for="content">Содержание:</label>
        <textarea name="content" id="content" rows="5" required></textarea>

        <button type="submit">Добавить историю</button>
    </form>
</div>

</body>
</html>

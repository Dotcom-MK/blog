<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Todos</title>
</head>
<body>
    <div>
        <h1>What next you need To-Do</h1>
        <form action="/todos/create" method="post">
            @csrf
            <input type="text" name="title">
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>

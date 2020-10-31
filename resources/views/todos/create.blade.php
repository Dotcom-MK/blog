<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Todos</title>
</head>
<body>
    <div>
        <h1>What next you need To-Do</h1>
        <form​​ method="POST" action="/todos/create">
            @csrf
            <input type="text" name="title">
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>

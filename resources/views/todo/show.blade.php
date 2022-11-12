<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>Todo application Show page</h1>
    <ul style="text-align: center; list-style:none;">
        <li>id: {{ $todo->id }}</li>
        <li>description: {{ $todo->description }}</li>
        <li>created_at: {{ $todo->created_at }}</li>
        <li>updated_at: {{ $todo->updated_at }}</li>
    </ul>
</body>
</html>
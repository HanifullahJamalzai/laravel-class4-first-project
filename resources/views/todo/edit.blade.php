<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>
    <h1 style="display:flex; justify-content: center; align-items: center;">Todo application Edit Page</h1>

    {{-- Form --}}
    <section>
        <form action="/todo/{{ $todo->id }}/update" method="post" style="display:flex; justify-content: center; align-items: center; padding: 1.5em;">
            @csrf
            @method('put')
            <input type="text" name="description" value="{{ $todo->description }}" style="width: 50%; margin-right: 0.3em; border: none; border-bottom: 2px solid green; text-align: center;">
            <button type="submit">Udpate</button>
        </form>
    </section>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>
    <h1 style="display:flex; justify-content: center; align-items: center;">Todo application</h1>
            @error('description')
                <p style="display:flex; justify-content: center; align-items: center; color: white; background: red;">{{ $message }}</p>
            @enderror
    {{-- Form --}}
    <section>
        
        <form action="/todo/store" method="post" style="display:flex; justify-content: center; align-items: center; padding: 1.5em;">
            @csrf
            {{-- @method('post') --}}
            {{-- <input type="hidden" value="{{ _token() }}"> --}}
            <input type="text" name="description" style="width: 50%; margin-right: 0.3em; border: none; border-bottom: 2px solid green; text-align: center;">
            <button type="submit">Submit</button>
            
        </form>
    </section>
            

    {{-- Todo List --}}
    <ul style="display:flex;  flex-direction: column; justify-content: center; align-items: center;">
        @foreach ($todos as $todo)
            <li style="border-bottom: 1px solid grey; padding-bottom: 0.4em;"> {{ $todo->id }} | {{ $todo->description }} 
                <a href="/todo/{{ $todo->id }}/show">Show</a> 
                <a href="/todo/{{ $todo->id }}/edit">Edit</a> 
                <form action="/todo/{{ $todo->id }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" style="display:inline-block;">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
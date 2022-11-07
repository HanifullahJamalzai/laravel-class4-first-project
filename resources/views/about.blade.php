<h1>
About page
</h1>

@foreach ($var as $item)
    <h1>{{ $item->name }}</h1>
@endforeach
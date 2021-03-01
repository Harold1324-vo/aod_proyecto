@forelse($computers as $computer)
    <li>
        <h3>{{ $computer->brand }} {{ $computer->model }}</h3>
        <p>{{ $computer->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse($keyboards as $keyboard)
    <li>
        <h3>{{ $keyboard->brand }} {{ $keyboard->model }}</h3>
        <p>{{ $keyboard->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
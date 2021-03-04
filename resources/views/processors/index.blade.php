<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse($processors as $processor)
    <li>
        <h3>{{ $processor->brand }} {{ $processor->model }}</h3>
        <p>{{ $processor->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
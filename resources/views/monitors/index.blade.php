<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
@forelse($monitors as $monitor)
    <li>
        <h3>{{ $monitor->brand }} {{ $monitor->model }}</h3>
        <p>{{ $monitor->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos</h1>
@endforelse
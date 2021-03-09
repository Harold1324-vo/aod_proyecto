<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <h2 class="card-title">Lista de procesadores registrados.</h2>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('processors.create') }}">+ Nuevo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <th>Procesador</th>
                    <th>Modelo</th>
                    <th>Información</th>
                </thead>
                
                <tbody>
                @forelse($processors as $processor)
                    <tr>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('processors.show', $processor->id) }} ">
                                <h4>{{ $processor->brand }} {{ $processor->model }}</h4></td>
                            </a>
                        <td>
                            <p><b>Número de núcleos: </b> {{ $processor->coreNumber}} </p>
                            <p><b>Número de hilos: </b> {{ $processor->threadsNumber}} </p>
                            <p><b>Velocidad máxima: </b> {{ $processor->speedMax}} </p>
                            <p><b>Velocidad base: </b> {{ $processor->speedBase}} </p>
                            <p><b>Solución térmica: </b> {{ $processor->thermal}} </p>
                            <p><b>Caché 1: </b> {{ $processor->cache1}} </p>
                            <p><b>Caché 2: </b> {{ $processor->cache2}} </p>
                            <p><b>Caché 3: </b> {{ $processor->cache3}} </p>
                            <p><b>Temperatura máxima: </b> {{ $processor->temperature}} </p>
                            <p><b>Paquete: </b> {{ $processor->package}} </p> 
                        </td>
                        <td><p>{{ $processor->description }}</p></td>
                    @empty
                    <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
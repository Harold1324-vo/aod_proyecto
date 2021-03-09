<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $processor->brand }} {{ $processor->model }}</h2>
                    </div>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('processors.index') }}">< Regresar</a>
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
                   
                    <tr>
                        <td>
                            <p>Imagen</p>
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
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="class col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('processors.edit', $processor->id) }}">Editar</a>
                    <form action="{{ route('processors.destroy', $processor->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
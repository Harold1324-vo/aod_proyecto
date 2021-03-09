<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <h2 class="card-title">Lista de computadoras registrados.</h2>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('computers.create') }}">+ Nuevo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <th>Computadora</th>
                    <th>Modelo</th>
                    <th>Información</th>
                </thead>
                
                <tbody>
                    @forelse($computers as $computer)
                    <tr>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('computers.show', $computer->id) }} ">
                                <h4>{{ $computer->brand }} {{ $computer->model }}</h4></td>
                            </a>
                        <td>
                            <p><b>Procesador: </b> {{ $computer->processor}} </p>
                            <p><b>Tamaño de RAM: </b> {{ $computer->sizeRam}} </p>
                            <p><b>Tecnología de RAM: </b> {{ $computer->typeRAM}} </p>
                            <p><b>Capacidad del HDD: </b> {{ $computer->capacityHDD}} </p>
                            <p><b>Peso: </b> {{ $computer->weight}} </p>
                            <p><b>Color: </b> {{ $computer->color}} </p>
                            <p><b>Pulgadas: </b> {{ $computer->sizeScreen}} </p>
                            <p><b>Sistema Operativo: </b> {{ $computer->so}} </p>
                            <b>Número de Puertos: </b> {{ $computer->usbNumber}} 
                        </td>
                        <td><p>{{ $computer->description }}</p></td>
                    @empty
                    <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
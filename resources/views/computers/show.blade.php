<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <div class="card-title">
                        <h2>Computadora: {{ $computer->brand }} {{ $computer->model }}</h2>
                    </div>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('computers.index') }}">< Regresar</a>
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
                   
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Procesador: </b> {{ $computer->processor}} </p>
                            <p><b>Tamaño de RAM: </b> {{ $computer->sizeRam}} </p>
                            <p class="text-uppercase"><b class="text-capitalize">Tecnología de RAM: </b> {{ $computer->typeRAM}} </p>
                            <p><b>Capacidad del HDD: </b> {{ $computer->capacityHDD}} </p>
                            <p><b>Peso: </b> {{ $computer->weight}} </p>
                            <p><b>Color: </b> {{ $computer->color}} </p>
                            <p><b>Pulgadas: </b> {{ $computer->sizeScreen}} </p>
                            <p><b>Sistema Operativo: </b> {{ $computer->so}} </p>
                            <b>Número de Puertos: </b> {{ $computer->usbNumber}} 
                        </td>
                        <td><p>{{ $computer->description }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="class col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('computers.edit', $computer->id) }}">Editar</a>
                    <form action="{{ route('computers.destroy', $computer->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
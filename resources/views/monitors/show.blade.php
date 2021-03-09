<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $monitor->brand }} {{ $monitor->model }}</h2>
                    </div>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('monitors.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <th>Monitor</th>
                    <th>Modelo</th>
                    <th>Información</th>
                </thead>
                
                <tbody>
                   
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Pulgadas: </b> {{ $monitor->inches}} </p>
                            <p><b>Número de puertos USB: </b> {{ $monitor->usbNumber}} </p>
                            <p><b>Número de puertos VGA: </b> {{ $monitor->vgaNumber}} </p>
                            <p><b>Número de puertos HDMI: </b> {{ $monitor->hdmiNumber}} </p>
                            <p><b>Color: </b> {{ $monitor->color}} </p>
                            <p><b>Tipo de HD: </b> {{ $monitor->typeHD}} </p>
                            <p><b>Tiempo de respuesta: </b> {{ $monitor->timeAnswer}} </p>
                            <p><b>Velocidad: </b> {{ $monitor->speed}} </p> 
                            <p><b>Altavoces: </b> {{ $monitor->speakers}} </p> 
                        </td>
                        <td><p>{{ $monitor->description }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="class col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('monitors.edit', $monitor->id) }}">Editar</a>
                    <form action="{{ route('monitors.destroy', $monitor->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
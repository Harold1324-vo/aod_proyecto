<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <div class="card-title">
                        <h2>Teclado: {{ $keyboard->brand }} {{ $keyboard->model }}</h2>
                    </div>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('keyboards.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <th>Teclado</th>
                    <th>Modelo</th>
                    <th>Información</th>
                </thead>
                
                <tbody>
                   
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Fabricante: </b> {{ $keyboard->maker}} </p>
                            <p><b>Color: </b> {{ $keyboard->color}} </p>
                            <p><b>Peso: </b> {{ $keyboard->weight}} </p>
                            <p><b>Altura: </b> {{ $keyboard->hight}} </p>
                            <p><b>Ancho: </b> {{ $keyboard->broad}} </p>
                            <p><b>Resolución: </b> {{ $keyboard->resolution}} </p>
                            <p><b>Plataforma: </b> {{ $keyboard->platform}} </p>
                            <p><b>Sistema Operativo: </b> {{ $keyboard->so}} </p> 
                        </td>
                        <td><p>{{ $keyboard->description }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="class col md 4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('keyboards.edit', $keyboard->id) }}">Editar</a>
                    <form action="{{ route('keyboards.destroy', $keyboard->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
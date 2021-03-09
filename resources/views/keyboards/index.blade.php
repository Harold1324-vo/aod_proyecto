<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
<div class="container">
<br><br>
    <div class="card">
        <div class ="card-header">
            <div class="row">
                <div class="class col md-8">
                    <h2 class="card-title">Lista de teclados registrados.</h2>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('keyboards.create') }}">+ Nuevo</a>
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
                @forelse($keyboards as $keyboard)
                    <tr>
                        <td>
                            <a class="btn btn-info btn-small" href="{{ route('keyboards.show', $keyboard->id) }} ">
                                <h4>{{ $keyboard->brand }} {{ $keyboard->model }}</h4></td>
                            </a>
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
                    @empty
                    <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
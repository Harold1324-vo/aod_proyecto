<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para los procesadores.</h1>
    <form action="{{ route('processors.store') }}" method="post">
        @csrf
        <div>
            <label for="">Marca: </label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
        </div>
        <div>
            <label for="">Modelo: </label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>
        <div>
            <label for="">Número de Núcleos: </label>
            <input class="form-control" type="number" name="coreNumber" id="" placeholder="Número de Núcleos">
        </div>
        <div>
            <label for="">Número de Hilos: </label>
            <input class="form-control" type="number" name="threadsNumber" id="" placeholder="Número de Hilos">
        </div>
        <div>
            <label for="">Velocidad Máxima: </label>
            <input class="form-control" type="number" name="speedMax" id="" placeholder="Velocidad Máxima">
        </div>
        <div>
            <label for="">Velocidad Base: </label>
            <input class="form-control" type="number" name="speedBase" id="" placeholder="Velocidad Base">
        </div>
        <div>
            <label for="">Solución Térmica: </label>
            <input class="form-control" type="text" name="thermal" id="" placeholder="Solución Térmica">
        </div>
        <div>
            <label for="">Caché 1: </label>
            <input class="form-control" type="number" name="cache1" id="" placeholder="Caché 1">
        </div>
        <div>
            <label for="">Caché 2: </label>
            <input class="form-control" type="number" name="cache2" id="" placeholder="Caché 2">
        </div><div>
            <label for="">Caché 3: </label>
            <input class="form-control" type="number" name="cache3" id="" placeholder="Caché 3">
        </div>
        <div>
            <label for="">Temperatura Máxima: </label>
            <input class="form-control" type="number" name="temperature" id="" placeholder="Temperatura Máxima">
        </div>
        <div>
            <label for="">Paquete: </label>
            <input class="form-control" type="text" name="package" id="" placeholder="Paquete">
        </div>       
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" id="" placeholder="Comentarios">
        </div>
        
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>
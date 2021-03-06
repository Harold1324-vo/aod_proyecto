<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para los procesadores.</h1>
    <form action="{{ route('processors.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Núcleos: </label>
                <input class="form-control" type="number" name="coreNumber" id="" placeholder="Número de Núcleos" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Hilos: </label>
                <input class="form-control" type="number" name="threadsNumber" id="" placeholder="Número de Hilos" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad Máxima: </label>
                <input class="form-control" type="number" name="speedMax" id="" placeholder="Velocidad Máxima" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad Base: </label>
                <input class="form-control" type="number" name="speedBase" id="" placeholder="Velocidad Base" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Solución Térmica: </label>
                <input class="form-control" type="text" name="thermal" id="" placeholder="Solución Térmica" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 1: </label>
                <input class="form-control" type="number" name="cache1" id="" placeholder="Caché 1" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 2: </label>
                <input class="form-control" type="number" name="cache2" id="" placeholder="Caché 2" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 3: </label>
                <input class="form-control" type="number" name="cache3" id="" placeholder="Caché 3" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Temperatura Máxima: </label>
                <input class="form-control" type="number" name="temperature" id="" placeholder="Temperatura Máxima" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Paquete: </label>
                <input class="form-control" type="text" name="package" id="" placeholder="Paquete" required>
            </div>       
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" id="" placeholder="Comentarios">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>
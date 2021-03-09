<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Actualizar datos de la computadora <b>{{ $processor->brand }} {{ $processor->model }}</b></h1>
    <form action="{{ route('processors.update', $processor->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $processor->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $processor->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Núcleos: </label>
                <input class="form-control" type="number" name="coreNumber" value="{{ $processor->coreNumber }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de Hilos: </label>
                <input class="form-control" type="number" name="threadsNumber" value="{{ $processor->threadsNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad Máxima: </label>
                <input class="form-control" type="number" name="speedMax" value="{{ $processor->speedMax }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad Base: </label>
                <input class="form-control" type="number" name="speedBase" value="{{ $processor->speedBase }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Solución Térmica: </label>
                <input class="form-control" type="text" name="thermal" value="{{ $processor->thermal }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 1: </label>
                <input class="form-control" type="number" name="cache1" value="{{ $processor->cache1 }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 2: </label>
                <input class="form-control" type="number" name="cache2" value="{{ $processor->cache2 }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Caché 3: </label>
                <input class="form-control" type="number" name="cache3" value="{{ $processor->cache3 }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Temperatura Máxima: </label>
                <input class="form-control" type="number" name="temperature" value="{{ $processor->temperature }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Paquete: </label>
                <input class="form-control" type="text" name="package" value="{{ $processor->package }}" required>
            </div>       
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $processor->description }}</textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" value="{{ $processor->commentary }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        
    </form>
</div>
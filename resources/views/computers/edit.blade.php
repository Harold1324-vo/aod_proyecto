<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Actualizar datos de la computadora <b>{{ $computer->brand }} {{ $computer->model }}</b></h1>
    <form action="{{ route('computers.update', $computer->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $computer->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $computer->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Procesador: </label>
                <input class="form-control" type="text" name="processor" value="{{ $computer->processor }}" required>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño de RAM: </label>
                <input class="form-control" type="number" name="sizeRam" value="{{ $computer->sizeRam }}"required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tecnología de RAM: </label>
                <input class="form-control" type="text" name="typeRAM" value="{{ $computer->typeRAM }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad del HDD: </label>
                <input class="form-control" type="number" name="capacityHDD" value="{{ $computer->capacityHDD }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso: </label>
                <input class="form-control" type="number" name="weight" value="{{ $computer->weight }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" value="{{ $computer->color }}"required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño de la Pantalla: </label>
                <input class="form-control" type="number" name="sizeScreen" value="{{ $computer->sizeScreen }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sistema Operativo: </label>
                <input class="form-control" type="text" name="so" value="{{ $computer->so }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos USB: </label>
                <input class="form-control" type="number" name="usbNumber" value="{{ $computer->usbNumber }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $computer->description }}</textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" value="{{ $computer->commentary }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        
    </form>
</div>
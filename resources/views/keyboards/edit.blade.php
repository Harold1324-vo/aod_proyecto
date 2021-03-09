<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Actualizar datos del teclado <b>{{ $keyboard->brand }} {{ $keyboard->model }}</b></h1>
    <form action="{{ route('keyboards.update', $keyboard->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $keyboard->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $keyboard->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Fabricante: </label>
                <input class="form-control" type="text" name="maker" value="{{ $keyboard->maker }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" value="{{ $keyboard->color }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso: </label>
                <input class="form-control" type="number" name="weight" value="{{ $keyboard->weight }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Altura: </label>
                <input class="form-control" type="number" name="hight" value="{{ $keyboard->hight }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Ancho: </label>
                <input class="form-control" type="number" name="broad" value="{{ $keyboard->broad }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Resolución: </label>
                <input class="form-control" type="text" name="resolution" value="{{ $keyboard->resolution }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos USB: </label>
                <input class="form-control" type="number" name="usbNumber" value="{{ $keyboard->usbNumber }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Plataforma: </label>
                <input class="form-control" type="text" name="platform" value="{{ $keyboard->platform }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sistema Operativo: </label>
                <input class="form-control" type="text" name="so" value="{{ $keyboard->so }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $keyboard->description }}</textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" value="{{ $keyboard->commentary }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        
    </form>
</div>
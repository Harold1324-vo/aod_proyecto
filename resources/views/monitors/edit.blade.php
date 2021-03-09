<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Actualizar datos de los monitores <b>{{ $monitor->brand }} {{ $monitor->model }}</b></h1>
    <form action="{{ route('monitors.update', $monitor->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $monitor->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $monitor->model }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Pulgadas: </label>
                <input class="form-control" type="number" name="inches" value="{{ $monitor->inches }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos USB: </label>
                <input class="form-control" type="number" name="usbNumber" value="{{ $monitor->usbNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos VGA: </label>
                <input class="form-control" type="number" name="vgaNumber" value="{{ $monitor->vgaNumber }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos HDMI: </label>
                <input class="form-control" type="number" name="hdmiNumber" value="{{ $monitor->hdmiNumber }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" value="{{ $monitor->color }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo HD: </label>
                <input class="form-control" type="text" name="typeHD" value="{{ $monitor->typeHD }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tiempo de Respuesta: </label>
                <input class="form-control" type="text" name="timeAnswer" value="{{ $monitor->timeAnswer }}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad: </label>
                <input class="form-control" type="text" name="speed" value="{{ $monitor->speed }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Altavoces: </label>
                <input class="form-control" type="text" name="speakers" value="{{ $monitor->speakers }}" required>
            </div>
        </div>
        <br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $monitor->description }}</textarea>
        </div>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="commentary" value="{{ $monitor->commentary }}">
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        
    </form>
</div>
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para los monitores.</h1>
    <form action="{{ route('monitors.store') }}" method="post">
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
                <label for="">Pulgadas: </label>
                <input class="form-control" type="number" name="inches" id="" placeholder="Pulgadas" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos USB: </label>
                <input class="form-control" type="number" name="usbNumber" id="" placeholder="N° puertos USB" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos VGA: </label>
                <input class="form-control" type="number" name="vgaNumber" id="" placeholder="N° puertos VGA" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos HDMI: </label>
                <input class="form-control" type="number" name="hdmiNumber" id="" placeholder="N° puertos HDMI" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo HD: </label>
                <input class="form-control" type="text" name="typeHD" id="" placeholder="Tipo HD" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tiempo de Respuesta: </label>
                <input class="form-control" type="text" name="timeAnswer" id="" placeholder="Tiempo de Respuesta" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Velocidad: </label>
                <input class="form-control" type="text" name="speed" id="" placeholder="Velocidad" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Altavoces: </label>
                <input class="form-control" type="text" name="speakers" id="" placeholder="Altavoces" required>
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
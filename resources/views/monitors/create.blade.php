<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para los monitores.</h1>
    <form action="{{ route('monitors.store') }}" method="post">
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
            <label for="">Pulgadas: </label>
            <input class="form-control" type="number" name="inches" id="" placeholder="Pulgadas">
        </div>
        <div>
            <label for="">N° puertos USB: </label>
            <input class="form-control" type="number" name="usbNumber" id="" placeholder="N° puertos USB">
        </div>
        <div>
            <label for="">N° puertos VGA: </label>
            <input class="form-control" type="number" name="vgaNumber" id="" placeholder="N° puertos VGA">
        </div>
        <div>
            <label for="">N° puertos HDMI: </label>
            <input class="form-control" type="number" name="hdmiNumber" id="" placeholder="N° puertos HDMI">
        </div>
        <div>
            <label for="">Color: </label>
            <input class="form-control" type="text" name="color" id="" placeholder="Color">
        </div>
        <div>
            <label for="">Tipo HD: </label>
            <input class="form-control" type="text" name="typeHD" id="" placeholder="Tipo HD">
        </div>
        <div>
            <label for="">Tiempo de Respuesta: </label>
            <input class="form-control" type="text" name="timeAnswer" id="" placeholder="Tiempo de Respuesta">
        </div>
        <div>
            <label for="">Velocidad: </label>
            <input class="form-control" type="text" name="speed" id="" placeholder="Velocidad">
        </div>
        <div>
            <label for="">Altavoces: </label>
            <input class="form-control" type="text" name="speakers" id="" placeholder="Altavoces">
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
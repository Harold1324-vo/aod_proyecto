<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para las computadoras.</h1>
    <form action="{{ route('computers.store') }}" method="post">
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
                <label for="">Procesador: </label>
                <input class="form-control" type="text" name="processor" id="" placeholder="Procesador" required>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño de RAM: </label>
                <input class="form-control" type="number" name="sizeRam" id="" placeholder="Tamaño de RAM" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tecnología de RAM: </label>
                <input class="form-control" type="text" name="typeRAM" id="" placeholder="Tecnología de RAM" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad del HDD: </label>
                <input class="form-control" type="number" name="capacityHDD" id="" placeholder="Capacidad del HDD" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso: </label>
                <input class="form-control" type="number" name="weight" id="" placeholder="Peso" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tamaño de la Pantalla: </label>
                <input class="form-control" type="number" name="sizeScreen" id="" placeholder="Tamaño de la Pantalla" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sistema Operativo: </label>
                <input class="form-control" type="text" name="so" id="" placeholder="Sistema Operativo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">N° puertos USB: </label>
                <input class="form-control" type="number" name="usbNumber" id="" placeholder="N° puertos USB" required>
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